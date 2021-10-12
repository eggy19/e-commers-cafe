<?php 

class Pesanan_model extends CI_Model
{    

    //Menampilkan Orderan Masuk
    public function getAllorderMasuk()
    {
        return $this->db->get('orderan');
        
        // $this->db->select('*');
        // $this->db->from('orderan');
        // $this->db->where('status', '0');
        // $this->db->order_by('kd_order', 'desc');        
        // $query= $this->db->get();
        // return $query->row();
    }

    //Menampilkan Orderan Selesai
    public function getAllorderSelesai()
    {
        $this->db->select('*');
        $this->db->from('orderan');
        $this->db->where('status_order', '1');
        $this->db->order_by('kd_order', 'desc');
        $query= $this->db->get();
        return $query->row();
    }

    //Menampilkan Detail Order Berdasarkan KODE
    public function DetailOrder($kd_order)
    {
        $this->db->select('*');  
        $this->db->from('menu');   
        $this->db->join('detail_order', 'menu.kd_menu = detail_order.kd_menu', 'left');
        $this->db->where('detail_order.kd_order', $kd_order);            
        $query = $this->db->get();
        return $query->result();

        // $query = "SELECT detail_order.no_order, menu.nm_menu, detail_order.banyak, 
        //                  detail_order.jumlah FROM detail_order
        //                  INNER JOIN menu ON detail_order.kd_menu = menu.kd_menu 
        //                  WHERE detail_order.kd_order = :kd_order";        


        
        // $this->db->query($query);
        // $this->db->bind('kd_order', $kd_order);

        // return $this->db->resultSet();
    }

    //Menampilkan Orderan Berdasarkan KODE
    public function GetOrder($kd_order)
    {   
        $this->db->select('*');  
        $this->db->from('orderan'); 
        $this->db->where('kd_order', $kd_order);            
        $query = $this->db->get();
        return $query->result();
    }

    //total pesanan masuk
    public function pesanmasuk()
    {   
        $this->db->select('*');
        $this->db->from('orderan');
        $this->db->where('status_order', 0);
        $query = $this->db->get();             
        if ($query->num_rows()>0) {
            return $query->num_rows();
        }else {
            return 0;
        }
    }

    //Hapus Laporan Pesanan
    public function HapusLaporan($data)
    {
        $this->db->where('kd_order', $data['kd_order']);        
        $this->db->delete('orderan', $data);
    }

    //total pesanan selesai
    public function pesanselesai()
    {        
        
        $this->load->helper('date');
        
        $tgl = date('Y-m-d');
        
        $this->db->select('*');
        $this->db->from('orderan');
        $this->db->where('status_order', 1);
        $this->db->where('tanggal', $tgl);
        
        $query = $this->db->get();             
        if ($query->num_rows()>0) {
            return $query->num_rows();
        }else {
            return 0;
        }
    }

    //MENAMPILAKAN Nama Menu
    public function getAllMenu($kd_menu)
    {
        $query = ("SELECT nm_menu FROM menu WHERE kd_menu = :menu");
        $this->db->query($query);
        $this->db->bind('menu', $kd_menu);
        return $this->db->resultSet();
    }

    public function prosesPesanan($where, $table, $data)
    {
        $this->db->where($where);
		$this->db->update($table,$data);        
    }


    //PESANAN LAPORAN
    public function filter_laporan($awal,$sampai)
    {
        $this->db->select('*');
        $this->db->from('orderan');
        $this->db->where('status', 1);
        $this->db->where('tanggal BETWEEN "'.$awal.'" AND "'.$sampai.'"');
        $query = $this->db->get();
        return $query->result();
    }
}