<?php
use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\CodeigniterAdapter;

class Produksi extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('masuk') != TRUE)
            redirect('','refresh');
    }

    function index(){
        $datas = [
            'title' => 'Data Produksi',
            'title_desc' => 'Overview dan summary penjualan',
            'page' => 'pages/produksi',
            'progress_produksi' => $this->db->get('progress_produksi'),
            'ajax' => [
                'produksi'
            ]
        ];
        $this->load->view('template', $datas);
    }

    function create(){
        $this->load->library('form_validation');
        $config = [
            [
                'field' => 'order_id',
                'label' => 'Order',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Order Wajib Di Isi'
                ]
            ],[
                'field' => 'deadline',
                'label' => 'Deadline',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deadline Wajib Di Isi'
                ]
            ],[
                'field' => 'total_tagihan',
                'label' => 'Total Tagihan',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Total Tagihan Wajib Di Isi'
                ]
            ],[
                'field' => 'sisa_tagihan',
                'label' => 'Sisa Tagihan',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sisa Tagihan Wajib Di Isi'
                ]
            ],
        ];
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
            $errors = [];
            $succ = [
                [
                    'field' => 'order_id',
                    'value' => set_value('order_id')
                ],[
                    'field' => 'deadline',
                    'value' => set_value('deadline')
                ],[
                    'field' => 'total_tagihan',
                    'value' => set_value('total_tagihan')
                ],[
                    'field' => 'sisa_tagihan',
                    'value' => set_value('sisa_tagihan')
                ]
            ];

            foreach($this->form_validation->error_array() as $key => $val){
                $arrErr = [
                    'field' => $key,
                    'message' => $val
                ];

                array_push($errors, $arrErr);
            }

            $err = [
                'status' => 400,
                'error' => $errors,
                'success'  => $succ
            ];
            $this->output->set_content_type('application/json')->set_output(json_encode($err));
        }else{
            $datas = [
                'order_id' => $this->input->post('order_id', TRUE),
                'deadline' => $this->input->post('deadline', TRUE),
                'catatan' => $this->input->post('catatan', TRUE),
                'total_tagihan' => $this->input->post('total_tagihan', TRUE),
                'sisa_tagihan'   => $this->input->post('sisa_tagihan', TRUE)
            ];
            $this->db->insert('produksi', $datas);
            if($this->db->affected_rows() > 0){
                $res = [
                    'status' => 200,
                    'message' => 'Success',
                    'success' => $datas
                ];
            }else{
                $res = [
                    'status' => 400,
                    'message' => 'Error',
                    'success' => $data
                ];
            }
            $this->output->set_content_type('application/json')->set_output(json_encode($res));
        }
    }

    function createSpk(){
        $produksiid = $this->input->post('produksiid', TRUE);
        $progressid = $this->input->post('progressid[]', TRUE);
        $result = [];

        if($progressid > 0){
            foreach($progressid as $key => $id){
                $harga = $this->input->post('harga[]', TRUE);
                $qty = $this->input->post('qty[]', TRUE);
                $deskripsi = $this->input->post('deskripsi[]', TRUE);
    
                $datas = [
                    'produksi_id' => $produksiid,
                    'progress_id' => $id,
                    'harga' => $harga[$key],
                    'qty' => $qty[$key],
                    'total' => $harga[$key] * $qty[$key],
                    'deskripsi' => $deskripsi[$key]
                ];
                array_push($result, $datas);
                $cek = $this->db->get_where('produksi_progress', [
                    'produksi_id' => $produksiid,
                    'progress_id' => $id,
                ]);
                if($cek->num_rows() > 0){
                    $this->db->where('id', $cek->row()->id)->update('produksi_progress', $datas);
                }else{
                    $this->db->insert('produksi_progress', $datas);   
                }
            }
        }

        if($result > 0){
            $res = [
                'status' => 200,
                'produksiid' => $produksiid,
                'data' => $result
            ];
        }else{
            $res = [
                'status' => 400,
                'produksiid' => $produksiid,
                'data' => $result
            ];
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }

    /* Ajax */
    function ajaxGetProduksi(){
        $id = $this->input->get('produksiid', TRUE);
        $get = $this->db->select('c.nama, o.kode_order, o.id orderid, p.deadline, p.id, p.catatan')
                        ->from('produksi p')
                        ->join('orders o', "p.order_id = o.id")
                        ->join('customer c', "o.customer_id = c.id")
                        ->where('p.id', $id)->get()->row();

        $progress = $this->db->select('pp.*, pr.progress')
                            ->from('produksi_progress pp')
                            ->join('progress_produksi pr', 'pp.progress_id = pr.id')
                            ->where('pp.produksi_id', $id)
                            ->order_by('pp.timestamp', "ASC")
                            ->get()->result();
        
        $res = [
            'data' => $get,
            'detail' => $progress
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }

    function datatable(){
        $datatables = new Datatables(new CodeigniterAdapter);
        $datatables->query("SELECT c.nama, o.kode_order, o.id orderid, p.deadline, p.id, p.catatan
                            FROM produksi AS p
                            JOIN orders AS o ON p.order_id = o.id
                            JOIN customer AS c ON o.customer_id = c.id
                            ORDER BY p.id DESC");
        echo $datatables->generate();
    }
}