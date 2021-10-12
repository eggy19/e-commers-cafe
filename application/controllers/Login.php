<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends  CI_Controller
{
    public function index()
    {
        $data['judul'] = "Login";
        $this->load->view('user/login', $data);
    }

    public function proses()
    {
        
        $no_user = $this->input->post('no_user');

        $this->simple_login->login_user($no_user);
    }

    public function logout()
    {
        $this->cart->destroy();
        $this->simple_login->log_out_user();
        
    }
}
