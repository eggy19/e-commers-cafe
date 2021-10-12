<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('Login_model');
    }

    //funsi login admin
    public function login($username, $password)
    {
        $check = $this->CI->Login_model->login($username,$password);

        //jika ada data pegawai, maka buat session
        if ($check) {
            $nip        = $check->NIP;
            $nama       = $check->nama;
            $jabatan    = $check->jabatan;
            //buat session 
            $this->CI->session->set_userdata('NIP',$nip);
            $this->CI->session->set_userdata('nama',$nama);
            $this->CI->session->set_userdata('jabatan',$jabatan);
            $this->CI->session->set_userdata('username',$username);
            $this->CI->session->set_userdata('password',$password);

            
            redirect(base_url('admin/dashboard'),'refresh');
            
        } else {
            //kalai gagal login
            $this->CI->session->set_flashdata('warning', 'Username atau Password Salah');            
            redirect(base_url('admin/login'),'refresh');            
        }               
    }

    // cek login
    public function cek_login()
    {
        // memeriksa apakah session sudah atau belom 
        if ($this->CI->session->userdata('username') == "") {
            $this->CI->session->flashdata('warning','Anda belom Login');
            redirect(base_url('admin/login'),'refresh');  
        }
    }

    //fungsi keluar login
    public function log_out()
    {
        //membuang semua session
        $this->CI->session->unset_userdata('NIP');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('jabatan');

        $this->CI->session->set_flashdata('sukses', 'Anda telah logout');
        redirect(base_url('admin/login'),'refresh');  
    }

    /*=============================================================================================*/

    //funsi login User
    public function login_user($no_user)
    {
        $check = $this->CI->Login_model->login_user($no_user);

        //jika ada data user, maka buat session
        if ($check) {
            //buat session 
            $this->CI->session->set_userdata('no_user',$no_user);
            
            redirect(base_url('home'),'refresh');
            
        } else {
            //kalai gagal login
            $this->CI->session->set_flashdata('warning', 'Nomor Komputer anda salah');            
            redirect(base_url('login'),'refresh');            
        }               
    }

    // cek login user
    public function cek_login_user()
    {
        // memeriksa apakah session sudah atau belom 
        if ($this->CI->session->userdata('no_user') == "") {
            $this->CI->session->flashdata('warning','Anda belom Login');
            redirect(base_url('login'),'refresh');  
        }
    }

    //fungsi keluar login
    public function log_out_user()
    {
        //membuang semua session
        $this->CI->session->unset_userdata('no_user');        
        redirect(base_url(),'refresh');  
    }
}

/* End of file LibraryName.php */
