<?php

Class Admin extends Controllers{
    public function index()    {
        $data['judul'] = 'Admin SPV';
        $this->view('templates/header', $data);
        $this->view('admin/index');
        $this->view('templates/footer');
    }

}
