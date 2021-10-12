<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends  CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->model('Katagori_model');
        $this->simple_login->cek_login_user(); 
    }

    public function index()
    {
        $keranjang = $this->cart->contents();

        $cek['judul'] = 'Keranjang Menu';

        $data = array(  'keranjang' => $keranjang);
        $data['katagori']   = $this->Katagori_model->getAllKatagori();
        
        $this->load->view('templates/head', $cek);
        $this->load->view('templates/header');
        $this->load->view('templates/nav', $data);
        $this->load->view('user/keranjang', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        //ambil data form di view home
        $id             = $this->input->post('id');
        $qty            = $this->input->post('qty');
        $price          = $this->input->post('price');
        $name           = $this->input->post('name');
        $redirect_page  = $this->input->post('redirect_page');

        //Proses memasukan Menu ke Keranjang
        $data = array(  'id'        => $id,
                        'qty'       => $qty,
                        'price'     => $price,
                        'name'      => $name,
                    );
        $this->cart->insert($data);
        
        redirect($redirect_page,'refresh');
                    
    }

    public function getip()
    {
        $a = $this->input->ip_address();
        echo $a;
    }

    public function update()
    {   
        $id     =$this->input->post('rowid');
        $qty    =$this->input->post('qty');

        $i=1;
        foreach( $this->cart->contents() as $items)
        {
            $data   =  $this->cart->update(array( 
                'rowid' =>   $items['rowid'],
                'qty'   =>   $this->input->post('qty'.$i)
            ));
            $i++;
        }

          
        // $this->cart->update($data);
        // $this->session->flashdata('sukses','update berhasil');            
        redirect(base_url('index.php/keranjang'),'refresh');
        
        
    }

    //menghapus daftar keranjang
    public function hapus($rowid)
    {
        if ($rowid) {
            // hapus per item
            $this->cart->remove($rowid);      
            redirect(base_url('index.php/keranjang'),'refresh');            
        } 
    }

    public function hapus_semua()
    {
        //hapus semua keranjang
        $this->cart->destroy();
        $this->session->flashdata('Sukses','Telah di Hapus Coy');        
        redirect(base_url('index.php/keranjang'),'refresh');
    }
}

