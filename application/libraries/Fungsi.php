<?php
class Fungsi
{
    protected $CI;

    public function __construct()
    {
        $this->$CI = & get_instance();        
    }

    function cek_admin()
    {
        
        $CI =& get_instance();
        $CI->load->library('simple_login');
        if ($CI->simple_login->login()->jabatan != 'Supervisor') 
        {            
            redirect(base_url('admin/dashboard'),'refresh');            
        }        
    }
}