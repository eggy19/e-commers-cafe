<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Login_model extends CI_Model{

        //Login Admin
        public function login($username,$password)
        {    
            $this->db->select('*');
            $this->db->from('pegawai');
            $this->db->where(array( 'username'  =>  $username,
                                    'password'  =>  $password));
            $this->db->order_by('NIP', 'desc');
            $query= $this->db->get();
            return $query->row();
        }


        //Login User
        public function login_user($no_user)
        {    
            //$tes = "SELECT * FROM user WHERE no_user = '$no_user'";
        
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('no_user', $no_user);            
            $this->db->order_by('no_user', 'desc');
            $query= $this->db->get();
            return $query->row();
        }
        
    }
?>