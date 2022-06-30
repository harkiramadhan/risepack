<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();

        if($this->session->userdata('masuk') != TRUE)
            redirect('','refresh');
    }

    function index(){
        $datas = [
            'page' => 'pages/dashboard'
        ];
        $this->load->view('template', $datas);
    }
}