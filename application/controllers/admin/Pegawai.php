<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    Class Pegawai extends CI_Controller{

        //load Model
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Pegawai_model');
            $this->simple_login->cek_login();

            if ($this->session->userdata('jabatan') != 'Supervisor') {                
                redirect(base_url('admin/dashboard'),'refresh');                
            }
        }
                
        public function index()    {
            $data['judul'] = 'Data Pegawai';
            $data['gawai'] = $this->Pegawai_model->getAllPegawai()->result();
            $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();
            
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/pegawai/index', $data);
            $this->load->view('admin/templates/footer');
        }

        public function tambah()
        {
            $this->load->library('session');
            
            $cek = $this->db->query("SELECT * FROM pegawai where NIP='".$this->input->post('NIP')."'")->num_rows();
            $cek1 = $this->db->query("SELECT * FROM pegawai where no_hp='".$this->input->post('no_hp')."'")->num_rows();
            
            if ($cek<=0 && $cek1<=0) { 
                $i      =   $this->input;
                $data   =   array(  'NIP'       =>  $i->post('NIP'),
                                    'nama'      =>  $i->post('nama'),
                                    'no_hp'     =>  $i->post('no_hp'),
                                    'jenkel'    =>  $i->post('jenkel'),
                                    'alamat'    =>  $i->post('alamat'),
                                    'jabatan'   =>  $i->post('jabatan'),
                                    'username'  =>  $i->post('username'),
                                    'password'  =>  $i->post('password')
                                );
                $this->Pegawai_model->tambahDataPegawai($data);
                $this->session->set_flashdata('sukses', 'Data Telah Tertambah');                
                redirect(base_url('index.php/admin/pegawai'),'refresh');         

            }else{
                $this->session->set_flashdata('error', 'NIP atau No Handphone sudah ada, Coba isi lagi!');
                redirect(base_url('index.php/admin/pegawai'),'refresh'); 
            }
                      
            
        }

        public function hapus($NIP)
        {
            $this->load->library('session');
            $data = array(  'NIP'   =>   $NIP);
            $this->Pegawai_model->hapusDataPegawai($data);
            $this->session->set_flashdata('sukses', 'Data Telah Terhapus');                
            redirect(base_url('index.php/admin/pegawai'),'refresh');    
        }

        // Mengubah Data Pegawai
        public function ubah()
        {
            $nip   = $this->input->post('NIP');
            $nama       = $this->input->post('nama');
            $no_hp        = $this->input->post('no_hp');
            $jenkel      = $this->input->post('jenkel');
            $alamat       = $this->input->post('alamat');
            $jabatan      = $this->input->post('jabatan');
            $username      = $this->input->post('username');
            $password   = $this->input->post('password');

            $data = array(
                'nama'          => $nama,
                'no_hp'         => $no_hp,
                'jenkel'        => $jenkel,
                'alamat'        => $alamat,
                'jabatan'       => $jabatan,
                'username'      => $username,
                'password'      => $password
            );
        
            $where = array(
                'NIP' => $nip
            );

            $this->session->set_flashdata('sukses', 'Data telah Terubah');         
        
            $this->Pegawai_model->ubahDataPegawai($where,'pegawai',$data);      
            redirect(base_url('admin/pegawai'));  
        }

    }