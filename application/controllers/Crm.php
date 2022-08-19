<?php
use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\CodeigniterAdapter;

class Crm extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('masuk') != TRUE)
            redirect('','refresh');
    }

    function index(){
        $datas = [
            'title' => 'Data Customer',
            'title_desc' => 'Overview dan summary penjualan',
            'page' => 'pages/crm',
            'deal_status' => $this->db->get('deal_status'),
            'belum_dihargai' => $this->db->select('id')->get_where('orders', ['price' => 0])->num_rows(),
            'pic' => $this->db->order_by('nama', "ASC")->get('pic'),
            'sumber' => $this->db->order_by('kode', "ASC")->get('sumber'),
            'instansi' => $this->db->order_by('instansi', 'ASC')->get('tipe_instansi'),
            'produk_kategori' => $this->db->get('produk_kategori'),
            'ajax' => [
                'crm',
                'customer'
            ]
        ];
        $this->load->view('template', $datas);
    }

    function create(){
        $this->load->library('form_validation');
        $config = [
            [
                'field' => 'customer_id',
                'label' => 'Customer',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Konsumen Wajib Di Isi'
                ]
            ],[
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Wajib Di Isi'
                ]
            ],[
                'field' => 'sumber_id',
                'label' => 'Sumber',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sumber Wajib Di Isi'
                ]
            ],[
                'field' => 'kontrak',
                'label' => 'Waktu Kontrak',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu Kontrak Wajib Di Isi'
                ]
            ],[
                'field' => 'order_code',
                'label' => 'Kode Order',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode Order Wajib Di Isi'
                ]
            ],[
                'field' => 'pic_id',
                'label' => 'PIC',
                'rules' => 'required',
                'errors' => [
                    'required' => 'PIC Wajib Di Isi'
                ]
            ],[
                'field' => 'deal_status_id',
                'label' => 'Status Deal',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Deal Wajib Di Isi'
                ]
            ],[
                'field' => 'order_status_id',
                'label' => 'Order Status',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Order Status Wajib Di Isi'
                ]
            ],[
                'field' => 'order_status_id',
                'label' => 'Order Status',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Order Status Wajib Di Isi'
                ]
            ],[
                'field' => 'bulan',
                'label' => 'Bulan',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Bulan Wajib Di Isi'
                ]
            ]
        ];
        $this->form_validation->set_rules($config);
        
        if ($this->form_validation->run() == FALSE){
            $errors = [];
            $succ = [
                [
                    'field' => 'tanggal',
                    'value' => set_value('tanggal')
                ],[
                    'field' => 'sumber_id',
                    'value' => set_value('sumber_id')
                ],[
                    'field' => 'kontrak',
                    'value' => set_value('kontrak')
                ],[
                    'field' => 'order_code',
                    'value' => set_value('order_code')
                ],[
                    'field' => 'pic_id',
                    'value' => set_value('pic_id')
                ],[
                    'field' => 'nama',
                    'value' => set_value('nama')
                ],[
                    'field' => 'nohp',
                    'value' => set_value('nohp')
                ],[
                    'field' => 'deal_status_id',
                    'value' => set_value('deal_status_id')
                ],[
                    'field' => 'order_status_id',
                    'value' => set_value('order_status_id')
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
            $kode = explode('/', $this->input->post('order_code', TRUE));
            $order = (int)$kode[3];
            $datas = [
                'customer_id' => $this->input->post('customer_id', TRUE),
                'tanggal' => $this->input->post('tanggal', TRUE),
                'bulan' => $this->input->post('bulan', TRUE),
                'sumber_id' => $this->input->post('sumber_id', TRUE),
                'kontrak' => $this->input->post('kontrak', TRUE),
                'kode_order' => $this->input->post('order_code', TRUE),
                'kode' => $order,
                'pic_id' => $this->input->post('pic_id', TRUE),
                'deal_status_id' => $this->input->post('deal_status_id', TRUE),
                'order_status_id' => $this->input->post('order_status_id', TRUE),
            ];
            $this->db->insert('orders', $datas);
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

    function createOrder(){
        $this->load->library('form_validation');
        $config = [
            [
                'field' => 'customer_id',
                'label' => 'Konsumen',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Konsumen Wajib Di Isi'
                ]
            ],[
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Wajib Di Isi'
                ]
            ],[
                'field' => 'sumber_id',
                'label' => 'Sumber',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sumber Wajib Di Isi'
                ]
            ],[
                'field' => 'kontrak',
                'label' => 'Waktu Kontrak',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Waktu Kontrak Wajib Di Isi'
                ]
            ],[
                'field' => 'order_code',
                'label' => 'Kode Order',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kode Order Wajib Di Isi'
                ]
            ],[
                'field' => 'pic_id',
                'label' => 'PIC',
                'rules' => 'required',
                'errors' => [
                    'required' => 'PIC Wajib Di Isi'
                ]
            ],[
                'field' => 'deal_status_id',
                'label' => 'Status Deal',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Deal Wajib Di Isi'
                ]
            ],[
                'field' => 'order_status_id',
                'label' => 'Order Status',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Order Status Wajib Di Isi'
                ]
            ]
        ];

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
            $errors = [];
            $succ = [
                [
                    'field' => 'customer_id',
                    'value' => set_value('customer_id')
                ],[
                    'field' => 'tanggal',
                    'value' => set_value('tanggal')
                ],[
                    'field' => 'sumber_id',
                    'value' => set_value('sumber_id')
                ],[
                    'field' => 'kontrak',
                    'value' => set_value('kontrak')
                ],[
                    'field' => 'order_code',
                    'value' => set_value('order_code')
                ],[
                    'field' => 'pic_id',
                    'value' => set_value('pic_id')
                ],[
                    'field' => 'nama',
                    'value' => set_value('nama')
                ],[
                    'field' => 'nohp',
                    'value' => set_value('nohp')
                ],[
                    'field' => 'deal_status_id',
                    'value' => set_value('deal_status_id')
                ],[
                    'field' => 'order_status_id',
                    'value' => set_value('order_status_id')
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
            $this->output->set_content_type('application/json')->set_output(json_encode($this->input->post()));
        }
        
    }

    function ajax_get_status_order(){
        $deal_status_id = $this->input->get('deal_status_id', TRUE);

        if($deal_status_id === '3'){
            $alasan = $this->db->get_where('alasan_cancel_order');
            ?>
                <select name="order_status_id" id="order_status_id" class="form-select form-control form-control-solid" required>
                    <option value=""> - Pilih Alasan Cancel Order</option>
                    <?php foreach($alasan->result() as $row){ ?>
                        <option value="<?= $row->id ?>"> <?= $row->alasan ?></option>
                    <?php } ?>
                </select>
            <?php
       }else{
            $order_status = $this->db->get_where('order_status', ['deal_status_id' => $deal_status_id]);
            ?>
                <select name="order_status_id" id="order_status_id" class="form-select form-control form-control-solid" required>
                    <option value=""> - Pilih Status Order</option>
                    <?php foreach($order_status->result() as $row){ ?>
                        <option value="<?= $row->id ?>"> <?= $row->keterangan ?></option>
                    <?php } ?>
                </select>
            <?php
       }
    }

    function ajax_get_order_by_id(){
        $id = $this->input->get('id', TRUE);
        $get = $this->db->get('orders', ['id' => $id])->row();
        $this->output->set_content_type('application/json')->set_output(json_encode($get));
    }

    function ajax_get_order(){
        $get = $this->db->select('o.*, c.nama')
                        ->from('orders o')
                        ->join('customer c', 'o.customer_id = c.id')
                        ->like('c.nama', $this->input->get("q", TRUE))
                        ->or_like('o.kode_order', $this->input->get("q", TRUE))->get()->result();
        $this->output->set_content_type('application/json')->set_output(json_encode($get));
    }

    /* Datatables */
    function datatable(){
        $datatables = new Datatables(new CodeigniterAdapter);
        $datatables->query("SELECT 
                            o.kode_order, o.id, o.tanggal, o.deal_status_id, o.price, o.customer_id,
                            c.nama, c.instansi_id, 
                            p.nama AS nama_pic, 
                            s.sumber, 
                            ds.status AS deal_status, 
                            ds.badge_color AS deal_badge, 
                            os.keterangan AS order_status, 
                            os.badge_color AS order_badge, 
                            ti.instansi AS jenis_instansi

                            FROM orders AS o
                            JOIN customer AS c ON o.customer_id = c.id
                            JOIN pic AS p ON o.pic_id = p.id
                            JOIN sumber AS s ON o.sumber_id = s.id
                            JOIN deal_status AS ds ON o.deal_status_id = ds.id
                            JOIN order_status AS os ON o.order_status_id = os.id
                            JOIN tipe_instansi AS ti ON c.instansi_id = ti.id
                            ORDER BY o.tanggal DESC ");
        echo $datatables->generate();
    }
}