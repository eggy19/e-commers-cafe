<?php 

class Katagori_model extends CI_Model{

    public function jumlahKatagori()
    {
        $query = $this->db->get('katagori');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        }else {
            return 0;
        }
    }

    public function getAllKatagori()
    {
        $this->db->select('*');
        $this->db->from('katagori');
        $query  =   $this->db->get();   
        return $query->result();
    }

    public function getKatagoriById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kd_katagori=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getNamaKatagori($id)
    {
        $this->db->query('SELECT nama FROM ' . $this->table . ' WHERE kd_katagori=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    //tambah data
    public function tambahDataKatagori($data)
    {
        $this->db->insert('katagori', $data);
        
    }

    public function hapusDataKatagori($data)
    {
        $this->db->where('kd_katagori', $data['kd_katagori']);        
        $this->db->delete('katagori', $data);       
    }


    public function ubahDataKatagori($where, $table, $data)
    {
        $this->db->where($where);
		$this->db->update($table,$data);
    }


    public function cariDataKatagori()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM Pegawai WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}