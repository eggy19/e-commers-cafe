<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Katagori_model');
    }
    

    public function index()
    {
        $data['judul']      = 'Kontak';        
        $data['katagori']   = $this->Katagori_model->getAllKatagori();
        
		$this->load->view('templates/head', $data);
       	$this->load->view('templates/nav', $data);
        $this->load->view('user/kontak');
        $this->load->view('templates/footer');
    }

}

/* End of file Kontak.php */
