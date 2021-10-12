<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct() 
        {
            parent::__construct();
            $this->load->model('Menu_model');
            $this->load->model('Katagori_model'); 
            $this->load->model('Pegawai_model');        
            $this->load->model('PC_model');
            $this->load->model('Pesanan_model');    

            $this->simple_login->cek_login();
        }

    public function index()
    {
        //$data['menu'] = $this->Menu_model->gelAllMenu()->result();
        $data['judul'] = "Dashboard Admin";
        $data['menu'] = $this->Menu_model->jumlahMenu();
        $data['pegawai'] = $this->Pegawai_model->jumlahPegawai();
        $data['pc'] = $this->PC_model->jumlahPC();
        $data['kata'] = $this->Katagori_model->jumlahKatagori();
        $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();
        $data['selesai'] = $this->Pesanan_model->pesanselesai();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/home', $data);   
        $this->load->view('admin/templates/footer');  
    }
}
