<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    Class Katagori  extends CI_Controller{
        
        public function __construct() 
        {
            parent::__construct();
            $this->load->model('Katagori_model');
            $this->simple_login->cek_login();

            if ($this->session->userdata('jabatan') != 'Supervisor') {                
                redirect(base_url('admin/dashboard'),'refresh');                
            }
        }

        public function index()    {
            $data['judul'] = 'Data Katagori';
            $data['katagori'] = $this->Katagori_model->getAllKatagori();
            $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/katagori/katagori.php', $data);
            $this->load->view('admin/templates/footer');
        }

        public function tambah()
        {
            $this->load->helper('string');
            $kode= strtoupper(random_string('alnum', 3)).date('m');;
            $nama  =   $this->input->post('nama');
            $data   =   array(  'kd_katagori'   =>  $kode,
                                'nama'          =>  $nama
                            );
            //var_dump($data);
            $this->Katagori_model->tambahDataKatagori($data);
            $this->session->set_flashdata('sukses', 'Data Telah Tertambah');                
            redirect(base_url('admin/katagori'),'refresh'); 
        }

        public function hapus($kd_katagori)
        {
            $this->load->library('session');
            $data = array(  'kd_katagori'   =>   $kd_katagori);
            $this->katagori_model->hapusDataKatagori($data);
            $this->session->set_flashdata('sukses', 'Data Telah Terhapus');                
            redirect(base_url('index.php/admin/katagori'),'refresh');    
        }


        public function ubah()
        {
            $kode        = $this->input->post('kode');
            $nama       = $this->input->post('nama');
            
            $data = array(               
                'nama'      => $nama
            );
        
            $where = array(
                'kd_katagori'      => $kode
            );                     
            
            $this->Katagori_model->ubahDataKatagori($where,'katagori',$data);      
            $this->session->set_flashdata('sukses', 'Data telah Terubah');
            redirect(base_url('admin/katagori'));  
        }

    }