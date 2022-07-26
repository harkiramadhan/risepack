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

    /* Ajax */
    function datatable(){
        $datatables = new Datatables(new CodeigniterAdapter);
        $datatables->query("SELECT c.nama, o.kode_order, p.deadline, p.id, p.catatan
                            FROM produksi AS p
                            JOIN orders AS o ON p.order_id = o.id
                            JOIN customer AS c ON o.customer_id = c.id
                            ORDER BY p.id DESC");
        echo $datatables->generate();
    }
}