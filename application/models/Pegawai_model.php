<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model{

    //jumlah data pegawai
    public function jumlahPegawai()
    {
        $query = $this->db->get('pegawai');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        }else {
            return 0;
        }
    }

    public function getAllPegawai()
    {
        return  $this->db->get('pegawai');
    }

    public function getPegawaiById($id)
    {

        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->where('NIP', $id);
        $this->db->order_by('NIP', 'desc');
        $query= $this->db->get();
        return $query->row();

        // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE NIP=:id');
        // $this->db->bind('id', $id);
        // return $this->db->single();
    }

    //tambah data
    public function tambahDataPegawai($data)
    {
        return $this->db->insert('pegawai', $data);

        // try {
        //     $this->load->library('session');
            
        //     $this->db->insert('pegawai', $data);
        // } catch (Exception $e) {
        //     // this is what you show to user,
        //     $this->session->set_flashdata('error', 'NIP sudah ada, Coba isi lagi!');

        //     // if you want to log error then
        //     log_message('error',$e->getMessage());
        //     return;
        
        //     // redirect somewhere
        //     redirect(base_url('admin/pegawai'));
        // }
    }

    //Hapus Data
    public function hapusDataPegawai($data)
    {
        $this->db->where('NIP', $data['NIP']);        
        $this->db->delete('pegawai', $data);        
    }


    public function ubahDataPegawai($where, $table, $data)
    {
        $this->db->where($where);
		$this->db->update($table,$data);      
    }


    public function cariDataPegawai()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM Pegawai WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}