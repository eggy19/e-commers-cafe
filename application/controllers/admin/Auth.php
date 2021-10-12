<?php

class Auth extends  CI_Controller
{
    public function index()
    {
        $this->load->view('admin/login_tes/index.php');
        
    }

    public function proses()
    {
        $post   =   $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            echo    "proses Login";
        }
        
    }
}
