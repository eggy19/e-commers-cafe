<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Checkout_model');
        $this->load->model('Katagori_model');
        
        $this->load->helper('string');
		$this->load->helper('date');
    }
    

    public function index()
    {
        //Input ke Database table Orderan
        $tgl	= date('Y-m-d');
        $jam	= date('h:m:s');
        $total_keranjang = $this->cart->total();
        $keranjang  =  $this->cart->contents();

        

        $i  =   $this->input;
        $data   =   array(  'kd_order'      =>  $i->post('kd_pesanan'),
                            'NIP'           =>  "111",
                            'no_user'       =>  $this->session->userdata('no_user'),
                            'nama'          =>  $i->post('nama'),
                            'tanggal'       =>  $tgl,
                            'waktu'         =>  $jam,
                            'uang_tunai'    =>  $i->post('uang'),
                            'total'         =>  $total_keranjang,
                            'status_order'        =>  "0"
                        );
        $this->Checkout_model->checkout($data);

        //Input  ke Database table detail_order
        foreach($keranjang as $keranjang) 
        {
            
            $subtotal = $keranjang['qty'] * $keranjang['price'];

            $data   =   array(  'no_order'      =>  "",
                                'kd_order'      =>  $i->post('kd_pesanan'),
                                'kd_menu'       =>  $keranjang['id'],
                                'harga'         =>  $keranjang['price'],
                                'banyak'        =>  $keranjang['qty'],
                                'jumlah'        =>  $subtotal
                            );
            $this->Checkout_model->detail_checkout($data);
        }
        $this->cart->destroy();
        $this->session->set_flashdata('sukses', 'Data Telah Tertambah');                
        redirect(base_url('index.php/checkout/sukses'),'refresh');        
    }

    public function sukses()
    {
       $data=   array(  'judul'     =>  "Sukses",
                        'katagori'  =>  $this->Katagori_model->getAllKatagori());

       $this->load->view('templates/head', $data);
       $this->load->view('templates/header');
       $this->load->view('templates/nav', $data);
       $this->load->view('user/sukses', $data);
       $this->load->view('templates/footer');
    }

}

/* End of file Checkout.php */
