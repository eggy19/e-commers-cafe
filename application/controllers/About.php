<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Katagori_model');
        $this->simple_login->cek_login_user(); 
    }
    
    public function index()
    {
        $data['judul']      = 'Tentang Kami';
        $data['katagori']   = $this->Katagori_model->getAllKatagori();

		$this->load->view('templates/head', $data);
        $this->load->view('templates/header');
        $this->load->view('templates/nav', $data);
        $this->load->view('user/about', $data);
        $this->load->view('templates/footer');
    }

}

/* End of file Controllername.php */
