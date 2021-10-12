<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Pesanan extends CI_Controller
{
    public function __construct()
        {
            parent::__construct();
            $this->simple_login->cek_login();
            $this->load->model('Pesanan_model');
        }

    public function masuk()    {
        // $data['judul'] = 'Pesanan Masuk';
        // $data['masuk'] = $this->Pesanan_model->getAllorderMasuk();
        $data   =   array(  'judul'     =>   "Pesanan Masuk",
                            'psnmasuk'  =>   $this->Pesanan_model->pesanmasuk(),
                            'masuk'     =>   $this->db->query("SELECT * FROM orderan WHERE status_order='0';")
                            );
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pesanan/masuk', $data);
        $this->load->view('admin/templates/footer');
    }
    
    public function selesai()    {
        $data['judul'] = 'Pesanan Selesai';
        $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();
        $data['selesai'] = $this->db->query("SELECT * FROM orderan WHERE status_order='1';");
        
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pesanan/selesai', $data);
        $this->load->view('admin/templates/footer');
    }

    //NONTIFIKASI REALTIME
    public function gettot()
    {
        $tot    =   $this->Pesanan_model->pesanmasuk();
        $result['tot']  =   $tot;
        $result['msg']  =   "Berhasil di refresh realtime";
        echo json_encode($result);
    }

    public function detail($kd_order)    {
        // $data['kode'] = $kd_order;
        $data['judul'] = 'Validasi Pesanan';
        $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();
        $data['order'] = $this->Pesanan_model->DetailOrder($kd_order);
        $data['kd'] = $this->Pesanan_model->GetOrder($kd_order);

        // $data['menu'] = $this->Pesanan_model->GetAllMenu($kd_order);
        // $data['total'] = $this->Pesanan_model->TotalOrder($kd_order);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pesanan/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function proses()    {
        $kd_order   = $this->input->post('kd_order');
        $nama       = $this->input->post('nama');
        $tgl        = $this->input->post('tgl');
        $waktu      = $this->input->post('waktu');
        $user       = $this->input->post('user');
        $tunai      = $this->input->post('tunai');
        $total      = $this->input->post('total');
        $operator   = $this->input->post('operator');

        $data = array(
            'NIP'           => $this->session->userdata('NIP'),
            'no_user'       => $user,
            'nama'          => $nama,
            'tanggal'       => $tgl,
            'waktu'         => $waktu,
            'uang_tunai'    => $tunai,
            'total'         => $total,
            'status_order'        => "1"
        );
    
        $where = array(
            'kd_order' => $kd_order
        );
    
        $this->Pesanan_model->prosesPesanan($where,'orderan',$data);      
        redirect(base_url('admin/pesanan/cetak/'.$kd_order));          
        //redirect(base_url('admin/pesanan/masuk'),'refresh');
        
    }

    //CETAK NOTA
    public function cetak($kd_order)
    {
        
        $tgl	= date('d-m-Y');
        $jam	= date('h:m:s');

        $data =  array( 'judul'     =>  'cetak struk',
                        'tgl'       =>  $tgl,
                        'jam'       =>  $jam,
                        'menu'      =>  $this->Pesanan_model->DetailOrder($kd_order),
                        'order'     =>  $this->Pesanan_model->GetOrder($kd_order)
                    );
        //$this->load->view('admin/templates/header', $data);
        $this->load->view('admin/pesanan/cetak', $data);
       // $this->load->view('admin/templates/footer');
        
    }
  
    
}