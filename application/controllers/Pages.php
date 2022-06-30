<?php
class Pages extends CI_Controller{
    function notfound(){
        $this->output->set_status_header('404');
        $this->load->view('errors/custom/404');
    }
}