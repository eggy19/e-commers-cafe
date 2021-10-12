<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller
{
    public function index()    {
        $data['judul'] = 'Operator';
        // $data['jumlah'] = $this->model('Pesanan_model')->getJumlahorderMasuk();
        $this->load->view('admin/templates/header_operator', $data);
        $this->load->view('admin/operator/index');
        $this->load->view('admin/templates/footer');
        
    }    
}