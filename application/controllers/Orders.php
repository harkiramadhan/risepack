<?php
use Ozdemir\Datatables\Datatables;
use Ozdemir\Datatables\DB\CodeigniterAdapter;

class Orders extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('masuk') != TRUE)
            redirect('','refresh');
    }

    function detail($id){
        $orders = $this->db->select('o.*, s.sumber, p.nama nama_pic, c.nama nama_customer, c.nohp, c.instansi, ti.instansi jenis_instansi, ds.status deal_status, os.keterangan order_status')
                            ->from('orders o')
                            ->join('sumber s', 'o.sumber_id = s.id')
                            ->join('pic p', 'o.pic_id = p.id')
                            ->join('customer c', 'o.customer_id = c.id')
                            ->join('tipe_instansi ti', 'c.instansi_id = ti.id')
                            ->join('deal_status ds', 'o.deal_status_id = ds.id')
                            ->join('order_status os', 'o.order_status_id = os.id')
                            ->where('o.id', $id)->get()->row();
        $datas = [
            'title' => 'Detail Order',
            'title_desc' => 'Overview dan summary penjualan',
            'page' => 'pages/ordersDetail',
            'backUrl' => 'crm',
            'orders' => $orders
        ];
        $this->load->view('template2', $datas);
    }
}