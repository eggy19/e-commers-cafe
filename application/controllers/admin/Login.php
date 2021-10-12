<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Login extends CI_Controller{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        
    }
    

    public function index()
    {
        $data['judul'] = 'Login';
        $this->load->view('admin/login_tes/index.php', $data);
    }

    public function proses()
    {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->simple_login->login($username,$password);
    }

    public function logout()
    {
        $this->simple_login->log_out();
    }

    // public function login()
    // {
    //     $data = $this->model('Login_model')->loginpegawai($_POST>0); 

        

    //     //var_dump($data);
    //     if ($data["jabatan"]=="Supervisor") {
    //         header('Location: ' . BASEURL_ADMIN . '/home');
    //     } else if ($data["jabatan"]=="Operator") {
    //         header('Location: ' . BASEURL_ADMIN . '/operator');
    //     }else {

    //     }
    // }
}