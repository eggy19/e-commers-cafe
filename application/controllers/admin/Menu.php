<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    Class Menu extends CI_Controller{
         
        public function __construct() 
        {
            parent::__construct();
            $this->load->model('Menu_model');
            $this->load->model('Katagori_model');
            $this->load->helper(array('form','url'));    
            $this->simple_login->cek_login();
            
            if ($this->session->userdata('jabatan') != 'Supervisor') {                
                redirect(base_url('admin/dashboard'),'refresh');                
            }
        }

        public function index()    {
            // $data = array(  'judul'     =>  'Data Menu',
            //                 'menu'      =>  $this->Menu_model->getAllMenu(),
            //                 'katagori'  =>  $this->Katagori_model->getAllKatagori()
            //             );

            $data['judul'] = 'Data Menu';
            $data['menu'] = $this->Menu_model->getAllMenu();
            $data['kata'] = $this->Katagori_model->getAllKatagori();
            $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();
            // $data['nm_katagori'] = $this->model('Katagori_model')->getNamaKatagori();
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/menu/index', $data);
            $this->load->view('admin/templates/footer');
        }
        
        

        public function tambah()
        {   
            $upload =   $this->Menu_model->uploadIMG();
            if ($upload['result']== "success") {

                $this->load->helper('string');
                $kode   = random_string('alnum', 5);
                $i      =   $this->input;
                $data   =   array(  'kd_menu'       => $kode,
                                    'status'        =>  "0",
                                    'nm_menu'       =>  $i->post('nm_menu'),
                                    'kd_katagori'   =>  $i->post('kd_katagori'),
                                    'harga'         =>  $i->post('harga'),
                                    'gambar'        =>  $upload['file']['file_name']
                                );
                $this->Menu_model->tambahDataMenu($data);
                $this->session->set_flashdata('sukses', 'Data Telah Tertambah'); 
                redirect(base_url('index.php/admin/menu'),'refresh'); 
            } else {
                $this->session->set_flashdata('error', $upload['error']);
                redirect(base_url('index.php/admin/menu'),'refresh'); 
            }
                           
            //
            
                  
                        
        }

        public function hapus($kd_menu)
        {
           $this->load->library('session');
            $data = array(  'kd_menu'   =>   $kd_menu);
            $this->Menu_model->hapusDataMenu($data);
            $this->session->set_flashdata('sukses', 'Data Telah Terhapus');                
            redirect(base_url('admin/menu'),'refresh');    
        }

        //MENGUBAH
        public function ubah()
        {           
            $upload =   $this->Menu_model->uploadIMG();
            if (!empty($upload['file']['file_name'])) {
                if ($upload['result']== "success") {
                    $kode           = $this->input->post('kd_menu');
                    $nama           = $this->input->post('nm_menu');
                    $status         = $this->input->post('status');
                    $katagori       = $this->input->post('kd_katagori');
                    $harga         = $this->input->post('harga');
                    $gambar         = $this->input->post('gambar');
                    $data = array(           
                        'status'        =>  $status,    
                        'nm_menu'       =>  $nama,
                        'kd_katagori'   =>  $katagori,
                        'harga'         =>  $harga,
                        'gambar'        =>  $upload['file']['file_name']
        
                    );
                
                    $where = array(
                        'kd_menu'      => $kode
                    );
        
                    $this->session->set_flashdata('sukses', 'Data telah Terubah');         
                    $this->Menu_model->ubahDataMenu($where,'menu',$data); 
                    redirect(base_url('admin/menu'));
                }else {
                    $this->session->set_flashdata('salah', $upload['error']);
                    redirect(base_url('admin/menu'),'refresh'); 
                }
            }
            else if (empty($upload['file']['file_name'])) {
                $kode           = $this->input->post('kd_menu');
                $nama           = $this->input->post('nm_menu');
                $status         = $this->input->post('status');
                $katagori       = $this->input->post('kd_katagori');
                $harga         = $this->input->post('harga');
                $gambar         = $this->input->post('old_gambar');
                $data = array(           
                    'status'        =>  $status,    
                    'nm_menu'       =>  $nama,
                    'kd_katagori'   =>  $katagori,
                    'harga'         =>  $harga,
                    'gambar'        =>  $gambar
    
                );
            
                $where = array(
                    'kd_menu'      => $kode
                );
    
                $this->session->set_flashdata('sukses', 'Data telah Terubah');         
                $this->Menu_model->ubahDataMenu($where,'menu',$data); 
                redirect(base_url('admin/menu'));
            }          
        }   

           



        // public function getkatagori()
        // {
        //     $katagori['katagori'] = $this->model('Katagori_model')->getAllKatagori();
        // }

    }