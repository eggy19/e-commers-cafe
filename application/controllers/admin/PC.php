<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    Class PC extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('PC_model');

            if ($this->session->userdata('jabatan') != 'Supervisor') {                
                redirect(base_url('admin/dashboard'),'refresh');                
            }
        }
                
        public function index()    {
            $data['judul'] = 'Data PC';
            $data['pc'] = $this->PC_model->getAllPC()->result();
            $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/pc/index', $data);
            $this->load->view('admin/templates/footer');
        }

        public function tambah()
        {
            $this->load->helper('date');
            $tgl    =   date('Y-m-d');
            $i  =   $this->input;

            $this->load->library('session');
            
            $cek = $this->db->query("SELECT * FROM user where no_user='".$this->input->post('no_user')."'")->num_rows();
            if ($cek<=0) { 
                $data   =   array(  'no_user'       =>  $i->post('no_user'),
                                    'tanggal'       => $tgl
                                );

                $this->PC_model->tambahDataPC($data);
                $this->session->set_flashdata('sukses', 'Data Telah Tertambah');                
                redirect(base_url('admin/pc'),'refresh');    
            }else{
                $this->session->set_flashdata('error', 'Komputer sudah ada, Coba isi lagi!');
                redirect(base_url('admin/pc'),'refresh'); 
            }     
        }

        public function hapus($no_user)
        {
            $this->load->library('session');
            $data = array(  'no_user'   =>   $no_user);
            $this->PC_model->hapusDataPC($data);
            $this->session->set_flashdata('sukses', 'Data Telah Terhapus');                
            redirect(base_url('admin/pc'),'refresh');   
        }


        public function getubah()
        {
            echo json_encode($this->model('PC_model')->getPCById($_POST['id']));
        }

        public function ubah()
        {
            if( $this->model('PC_model')->ubahDataPC($_POST) > 0 ) {
                // Flasher::setFlash('berhasil', 'diubah', 'success');
                header('Location: ' . BASEURL_ADMIN . '/PC');
                exit;
            } else {
                // Flasher::setFlash('gagal', 'diubah', 'danger');
                header('Location: ' . BASEURL_ADMIN . '/pc');
                exit;
            } 
        }

    }