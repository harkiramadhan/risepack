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
        $datas = [
            'title' => 'Detail Order',
            'title_desc' => 'Overview dan summary penjualan',
            'page' => 'pages/ordersDetail',
            'backUrl' => 'crm'
        ];
        $this->load->view('template2', $datas);
    }
}