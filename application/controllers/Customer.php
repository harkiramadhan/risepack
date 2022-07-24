<?php
use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\CodeigniterAdapter;

class Customer extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('masuk') != TRUE)
            redirect('','refresh');
    }

    function detail($id){
        $datas = [
            'title' => 'Detail Konsumen',
            'title_desc' => 'Overview dan summary penjualan',
            'page' => 'pages/customerDetail',
            'backUrl' => 'crm'
        ];
        $this->load->view('template2', $datas);
    }

    function create(){
        $this->load->library('form_validation');
        $config = [
            [
                'field' => 'nama',
                'label' => 'Nama Customer',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Customer Wajib Di Isi'
                ]
            ],[
                'field' => 'nohp',
                'label' => 'No HP',
                'rules' => 'required',
                'errors' => [
                    'required' => 'No HP Wajib Di Isi'
                ]
            ],[
                'field' => 'instansi',
                'label' => 'Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Instansi Wajib Di Isi'
                ]
            ],[
                'field' => 'instansi_id',
                'label' => 'Tipe Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tipe Instansi Wajib Di Isi'
                ]
            ],
        ];
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
            $errors = [];
            $succ = [
                [
                    'field' => 'nama',
                    'value' => set_value('nama')
                ],[
                    'field' => 'nohp',
                    'value' => set_value('nohp')
                ],[
                    'field' => 'instansi_id',
                    'value' => set_value('instansi_id')
                ],[
                    'field' => 'instansi',
                    'value' => set_value('instansi')
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
                'nama' => $this->input->post('nama', TRUE),
                'nohp' => $this->input->post('nohp', TRUE),
                'instansi_id' => $this->input->post('instansi_id', TRUE),
                'instansi' => $this->input->post('instansi', TRUE)
            ];
            $this->db->insert('customer', $datas);
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

    function edit(){
        $id = $this->input->post('id', TRUE);
        $this->load->library('form_validation');
        $config = [
            [
                'field' => 'nama',
                'label' => 'Nama Customer',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Customer Wajib Di Isi'
                ]
            ],[
                'field' => 'nohp',
                'label' => 'No HP',
                'rules' => 'required',
                'errors' => [
                    'required' => 'No HP Wajib Di Isi'
                ]
            ],[
                'field' => 'instansi',
                'label' => 'Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Instansi Wajib Di Isi'
                ]
            ],[
                'field' => 'instansi_id',
                'label' => 'Tipe Instansi',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tipe Instansi Wajib Di Isi'
                ]
            ],
        ];
        if($id){
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == FALSE){
                $errors = [];
                $succ = [
                    [
                        'field' => 'nama',
                        'value' => set_value('nama')
                    ],[
                        'field' => 'nohp',
                        'value' => set_value('nohp')
                    ],[
                        'field' => 'instansi_id',
                        'value' => set_value('instansi_id')
                    ],[
                        'field' => 'instansi',
                        'value' => set_value('instansi')
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
                    'nama' => $this->input->post('nama', TRUE),
                    'nohp' => $this->input->post('nohp', TRUE),
                    'instansi_id' => $this->input->post('instansi_id', TRUE),
                    'instansi' => $this->input->post('instansi', TRUE)
                ];
                $this->db->where('id', $id)->update('customer', $datas);
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
    }

    function delete($id){
        $this->db->where('id', $id)->delete('customer');
        if($this->db->affected_rows() > 0){
            $res = [
                'status' => 200,
                'message' => "Success"
            ];
        }else{
            $res = [
                'status' => 400,
                'message' => "Error"
            ];
        }
    }
    

    /* Ajax */
    function datatable(){
        $datatables = new Datatables(new CodeigniterAdapter);
        $datatables->query("SELECT 
                            c.id, c.nama, c.nohp, c.timestamp, c.instansi, c.instansi_id, ti.instansi AS jenis_instansi
                            FROM customer AS c
                            JOIN tipe_instansi AS ti ON c.instansi_id = ti.id");
        echo $datatables->generate();
    }
    
    function getCustomer(){
        $get = $this->db->select('c.*, ti.instansi jenis_instansi')
                        ->from('customer c')
                        ->join('tipe_instansi ti', 'c.instansi_id = ti.id')
                        ->like('c.nama', $this->input->get("q", TRUE))
                        ->or_like('c.instansi', $this->input->get("q", TRUE))
                        ->order_by('c.nama', "ASC")->get()->result();

        $this->output->set_content_type('application/json')->set_output(json_encode($get));
    }

    function getLastCustomer(){
        $get = $this->db->limit(1)->order_by('order_code', "DESC")->get('orders');
        if($get->num_rows() > 0){
            $order = sprintf("%03d", $get->row()->order_code);
        }else{
            $order = sprintf("%03d", 1);
        }
        echo $order;
    }
}