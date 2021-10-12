<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
		
	}
	

	public function index()
	{
		$data['judul']      = 'Selamat Datang di Web Menu Luxury';
		$data['menu']		=	$this->Menu_model->MenuTerbaru();
		$data['menu2']		=	$this->Menu_model->MenuLanding();
		$this->load->view('templates/head', $data);
       	$this->load->view('templates/nav_landing', $data);
        $this->load->view('user/landingpage', $data);
	}
}
