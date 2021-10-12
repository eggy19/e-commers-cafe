<?php 

class Menu_model extends CI_Model{

    public function jumlahMenu()
    {
        $query = $this->db->get('menu');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        }else {
            return 0;
        }
    }

    //Mengambil Random Data Menu Welcome
    public function MenuRandom()
    {
        $this->db->select('*');
        $this->db->from('menu');        
        $this->db->join('katagori', 'katagori.kd_katagori = menu.kd_katagori', 'left');
        $this->db->order_by('RAND()', 'desc');        
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result();          
    }

    //Mengambil 12 Data Menu Landing page
    public function Menulanding()
    {
        $this->db->select('*');
        $this->db->from('menu');        
        $this->db->join('katagori', 'katagori.kd_katagori = menu.kd_katagori', 'left');
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();          
    }

    //Mengambil 10 Data Terbaru
    public function MenuTerbaru()
    {
        $this->db->select('*');
        $this->db->from('menu');        
        $this->db->join('katagori', 'katagori.kd_katagori = menu.kd_katagori', 'left');
        $this->db->limit(8);
        $query = $this->db->get();
        return $query->result();          
    }

    //mengambil semua Menu
    public function getAllMenu()
    {   
        $this->db->select('*');  
        $this->db->from('menu');   
        $this->db->join('katagori', 'katagori.kd_katagori = menu.kd_katagori', 'left');        
        $query = $this->db->get();
        return $query->result();
    }

    public function getMenuById($kd_menu)
    {        
        $this->db->select('*');
        $this->db->from('menu');
        $this->db->where('kd_menu', $kd_menu);
        $this->db->order_by('kd_menu', 'desc');
        $query = $this->db->get();
        return $query->row();
    }

    public function tambahDataMenu($data)
    {
        $this->db->insert('menu', $data);
        
        
    }

    public function hapusDataMenu($data)
    {
        $this->db->where('kd_menu', $data['kd_menu']);        
        $this->db->delete('menu', $data);   
    }

    //UPLOAD GAMBAR
    public function uploadIMG()
    {   
        $config['upload_path'] = './assets/img/menu/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '2500';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';
        
        $this->load->library('upload', $config);
        
        if ( $this->upload->do_upload('gambar')){ 
            $data = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $data;
        }
        else{            
            $error = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $error;
        }            
    }

    //Update Data Menu
    public function ubahDataMenu($where, $table, $data)
    {
        $this->db->where($where);
		$this->db->update($table,$data);    
    }

    //Update Status Menu
    public function updateStatusMenu($where, $table, $data)
    {
        $this->db->where($where);
		$this->db->update($table,$data);    
    }

//--------------------- PAGINATION ---------------------------------------------------------------------    
    //Pagination halaman Home Menu
    function dataPageMenu($number,$offset)
    {
        $this->db->select('*');  
        $this->db->from('menu');
        $this->db->where('status', 1);        
        $this->db->limit($number,$offset);
                
        $query = $this->db->get();
        return $query->result();		
    }
    
    //Mengambil data menu berdasarkan Kategori
    public function getMenuKategori($kd_katagori, $number,$offset)
    {   
        $this->db->select('*');  
        $this->db->from('menu');   
    $this->db->join('katagori', 'katagori.kd_katagori = menu.kd_katagori', 'left');  
        $this->db->where('menu.kd_katagori', $kd_katagori);
        $this->db->where('status', 1);        
        $this->db->limit($number,$offset);
                
        $query = $this->db->get();
        return $query->result();
    }

    //Jumlah Menu berdasarkan katagori
    public function menuKatagori($kd_katagori)
    {
        $this->db->select('*');
        $this->db->from('menu');        
        $this->db->where('kd_katagori', $kd_katagori);        
        $query = $this->db->get();
        
        if ($query->num_rows()>0) {
            return $query->num_rows();
        }else {
            return 0;
        }
    }
}