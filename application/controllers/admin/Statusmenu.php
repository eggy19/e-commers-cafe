<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Statusmenu extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model');
        
    }
    

    public function index()
    {
        $data  = array( 'judul'     =>  "Status Menu",
                        'psnmasuk'  =>  $this->Pesanan_model->pesanmasuk(),
                        'menu'      =>  $this->Menu_model->getAllMenu()
                    );
        

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/menu/status', $data);
        $this->load->view('admin/templates/footer');
    }


    public function update($id, $status)
    {
        $this->db->where('kd_menu',$id)->update('menu', ['status'=>$status]);
        
        redirect('admin/statusmenu');
        
    //     echo 'ini apa <br>';
    //    echo  $kode       = $this->input->post('kd_menu');
    //    $kod =   $kode[0];
    //    var_dump($kode);
    //    exit;
    //     $nama       = $this->input->post('nama');
    //     $katagori   = $this->input->post('katagori');
    //     $harga      = $this->input->post('harga');
    //     $gambar     = $this->input->post('gambar');
    //     $status     = $this->input->post('status');

    //     $jml    =   $this->Menu_model->jumlahMenu();

    //     $data = array();
    //     $where = array();

        

        // for ($i=0; $i < count($kode < 0); $i++) { 
        //     $data[] = array(    'nama'          =>   $kode[$i],
        //                         'nama'          =>   $nama[$i],
        //                         'kd_katagori'   =>   $katagori[$i],
        //                         'harga'         =>   $harga[$i],
        //                         'gambar'        =>   $gambar[$i],
        //                         'status'        =>   $status[$i]
        //             )
        // }
        // foreach ( (array) $kode as $kode => $value) {
            
        //     $where[]    =   array(
        //                             'kd_menu'   =>  $kode
        //     );
        // }
 
        //$this->db->update_batch('menu', $data, 'kd_menu');
        //$this->Menu_model->updateStatusMenu($where,'menu',$data);  
        // $value = array();
        // $where = array();
        // foreach ($kode as $kd ) {
        //     array_push($value, array(
        //         'status'        => $status,
        //         'nm_menu'       => $nm_menu,
        //         'kd_katagori'   => $katagori,
        //         'harga'         => $harga,
        //         'gambar'        => $gambar 
        //     ));

        //     array_push($where, array(
        //         'kd_menu'   => $kode
        //     ));
        // }

        // $data = array(
        //         'status'        => $status,
        //         'nm_menu'       => $nama,
        //         'kd_katagori'   => $katagori,
        //         'harga'         => $harga,
        //         'gambar'        => $gambar     
        // );

        // $where = array(
        //                 'kd_menu'   =>  $kd_menu
        //             );
    
        // $this->Menu_model->updateStatusMenu($where,'menu',$data);  
        
        // redirect(base_url('admin/statusmenu'),'refresh');
        
    }

}

/* End of file Statusmenu.php */
