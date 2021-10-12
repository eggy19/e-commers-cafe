<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();        
        $this->simple_login->cek_login_user();
        $this->load->model('Katagori_model');
        $this->load->model('Menu_model');
        
    }
    

    public function index()
    {
        $data   =   array(  'judul' =>   'Home');
        $data['katagori']   = $this->Katagori_model->getAllKatagori();
        $data['menu']   = $this->Menu_model->MenuRandom();
        

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header');
        $this->load->view('templates/nav', $data);
        $this->load->view('user/welcome', $data);
        $this->load->view('templates/footer');
    }

}

/* End of file Home.php */
