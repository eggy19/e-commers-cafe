<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends  CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Menu_model');
        $this->load->model('Katagori_model');        
        $this->load->helper(array('form','url'));
        $this->simple_login->cek_login_user(); 
    }

    public function index()
    {
        $total = $this->Menu_model->jumlahMenu();
        $this->load->library('pagination');
        
        $config['base_url']         = base_url().'menus/index/';
        $config['total_rows']       = $total;
        $config['use_page_numbers'] = TRUE;
        $config['per_page']         = 12;
        $config['uri_segment']      = 3;
        $config['num_links']        = 3;
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $config['first_url']        = base_url().'menus/';

       // $page   =   $this->uri->segment(3);
        
        $this->pagination->initialize($config);
        //$page   = ($this->uri->segment(3)) ? ($this->uri->segment(3)-1) * $config['per_page']:0;
        $page   = $this->uri->segment(3) ? $this->uri->segment(3):0;
        // $menu   = $this->Menu_model->getAllMenu($config['per_page'],$);        
        

        $data['judul']      = 'Selamat Datang di Web Menu Kami';
        $data['menu']       = $this->Menu_model->dataPageMenu($config['per_page'], $page);
        //$data['menu']       = $this->Menu_model->getAllMenu();
        $data['katagori']   = $this->Katagori_model->getAllKatagori();
       $data['pagin']      = $this->pagination->create_links();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header');
        $this->load->view('templates/nav', $data);
        $this->load->view('user/home', $data);
        $this->load->view('templates/footer');
    }

    public function katagori($kd_katagori)
    {
        $total = $this->Menu_model->menuKatagori($kd_katagori);
        $this->load->library('pagination');
        
        $config['base_url']         = base_url().'menus/katagori/'.$kd_katagori.'/index/';
        $config['total_rows']       = $total;
        $config['use_page_numbers'] = TRUE;
        $config['per_page']         = 9;
        $config['uri_segment']      = 5;
        $config['num_links']        = 5;        
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $config['first_url']        = base_url().'menus/katagori/'.$kd_katagori;

       // $page   =   $this->uri->segment(3);
        
        $this->pagination->initialize($config);
        $page   = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;   
        

        $data['judul']      = 'Selamat Datang di Web Menu Kami';
         $data['menu']       = $this->Menu_model->getMenuKategori($kd_katagori, $config['per_page'], $page);
        $data['katagori']   = $this->Katagori_model->getAllKatagori();
        $data['pagin']      = $this->pagination->create_links();

        $this->load->view('templates/head', $data);
        $this->load->view('templates/header');
        $this->load->view('templates/nav', $data);
        $this->load->view('user/home', $data);
        $this->load->view('templates/footer');
    }
}
