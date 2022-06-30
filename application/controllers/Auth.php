<?php 
class Auth extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('login');
    }

    function login(){
        $dataInput = [
            'email' => $this->input->post('email', TRUE),
            'password' => md5($this->input->post('password', TRUE))
        ];
        $cek = $this->db->get_where('users', $dataInput);
        if($cek->num_rows() > 0){
            $data = $cek->row();
            $this->session->set_userdata('masuk', TRUE);
            $this->session->set_userdata('userid', $data->id);
            $this->session->set_userdata('email', $data->email);
            $this->session->set_userdata('role', $data->role);
            $this->session->set_flashdata('success', "Welcome! " . $data->email);
            
            redirect('dashboard','refresh');
        }else{
            $this->session->set_flashdata('error', "Email & Password Not Match!");
            redirect($_SERVER['HTTP_REFERER'],'refresh');
        }
    }
}