<?php
defined('BASEPATH') OR exit('No direct script access allowed');


Class Home extends CI_Controller{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('admin/templates/header', $data);
        $this->view('admin/home/index');
        $this->view('admin/templates/footer');
    }
}