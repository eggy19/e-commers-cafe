<?php 

class PC_model extends CI_Model {

    public function jumlahPC()
    {
        $query = $this->db->get('user');
        if ($query->num_rows()>0) {
            return $query->num_rows();
        }else {
            return 0;
        }
    }

    public function getAllPC()
    {
        return $this->db->get('user');
        
    }

    public function getPCById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no_user=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPC($data)
    {
        $this->db->insert('user', $data);
                
    }

    public function hapusDataPC($data)
    {
        $this->db->where('no_user', $data['no_user']);        
        $this->db->delete('user', $data);  
    }


    public function ubahDataPC($data)
    {
        $query = "UPDATE user SET user.no_user = :no_user
                  WHERE no_user = :no_user";
        
        $this->db->query($query);
        $this->db->bind('no_user', $data['no_user']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataPC()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM Pegawai WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}