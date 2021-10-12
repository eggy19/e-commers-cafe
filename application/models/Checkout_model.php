<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_model extends CI_Model {

    public function detail_checkout($data)
    {

        $this->db->insert('detail_order', $data);
        
    }

    //memasukan checkout
    public function checkout($data)
    {

        $this->db->insert('orderan', $data);
        
    }
    

}

/* End of file Checkout_model.php */
