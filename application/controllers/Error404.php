<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Katagori_model');
        
        
    }
    

    public function index()
    {
        $data['judul']      = 'Page not Found';        
        $data['katagori']   = $this->Katagori_model->getAllKatagori();
        
		$this->load->view('templates/head', $data);
       	$this->load->view('templates/nav', $data);
        $this->load->view('user/error404');
        $this->load->view('templates/footer');
    }

}

/* End of file Error404.php */
