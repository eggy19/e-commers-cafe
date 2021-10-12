    <?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Laporan extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->simple_login->cek_login();
            $this->load->model('Pesanan_model'); 
            
            if ($this->session->userdata('jabatan') != 'Supervisor') {                
                redirect(base_url('admin/dashboard'),'refresh');                
            }
        }

        public function index()
        {
            $data['judul']= 'Data Laporan'; 
            $data['selesai'] = $this->db->query("SELECT * FROM orderan WHERE status_order='1'");
            $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/laporan/index', $data);
            $this->load->view('admin/templates/footer');
        }
        
        public function detaillaporan($kd_order)
        {
            $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();
            $data['judul'] = 'Validasi Pesanan';
            $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();
            $data['detail'] = $this->Pesanan_model->DetailOrder($kd_order);
            $data['order'] = $this->Pesanan_model->GetOrder($kd_order);

            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/laporan/detail', $data);
            $this->load->view('admin/templates/footer');
        }

        //Cetak Laporan
        public function cetak()
        {           
            $data =  array( 'judul'     =>  'Laporan',
                            'order'     =>  $this->Pesanan_model->GetOrder()
                        );
            //$this->load->view('admin/templates/header', $data);
            $this->load->view('admin/laporan/cetak', $data);
        // $this->load->view('admin/templates/footer');
            
        }

        //Hapus Laporan Pesanan
        public function HapusLap($kd)
        {
            $this->load->library('session');
            $data = array(  'kd_order'   =>   $kd);
            $this->Pesanan_model->HapusLaporan($data);
            $this->session->set_flashdata('sukses', 'Data Telah Terhapus');                
            redirect(base_url('index.php/admin/laporan'),'refresh');    
        }

        //filter tanggal
        public function filter()
        {
            $awal = $this->input->post('awal');
            $sampai = $this->input->post('akhir');
            $a = 1;
            
            $data['judul']= 'Data Laporan'; 
           $data['selesai'] = $this->db->query("SELECT * FROM orderan WHERE status_order='1' AND tanggal BETWEEN '" . $awal . "' AND '" . $sampai . "'");
            
            $data['psnmasuk'] = $this->Pesanan_model->pesanmasuk();
           // $data['selesai'] = $this->Pesanan_model->filter_laporan($awal,$sampai);

            $this->load->view('admin/laporan/cetak', $data);
            
        }
    }
    
    /* End of file Laporan.php */