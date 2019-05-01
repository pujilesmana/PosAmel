<?php 
	/**
	 * 
	 */
	class Transaksi extends CI_Controller
	{
		
		function __construct()
	  	{
		    parent:: __construct();
		    if($this->session->userdata('masuk') !=TRUE){
		      $url=base_url('Login');
		      redirect($url);
		    };

		    $this->load->model('m_pemesanan');
		    $this->load->library('upload');
	  	}

	  	function index(){
	  		if($this->session->userdata('akses') == 1 && $this->session->userdata('masuk') == true){
		       $y['title'] = "Transaksi";
		       $x['datapesanan'] = $this->m_pemesanan->getPemesanan();
		       $t = $this->db->query("SELECT SUM(a.lb_qty * d.bnr_harga) AS total_omset, (SUM(a.lb_qty * d.bnr_harga))-(SUM(a.lb_qty * c.barang_harga_modal)) AS total_untung FROM list_barang a, pemesanan b, barang c, barang_non_reseller d WHERE a.pemesanan_id = b.pemesanan_id AND a.barang_id = c.barang_id AND a.barang_id = d.barang_id");
               $d=$t->row_array();
               $total_untung = $d['total_untung'];
               $total_omset = $d['total_omset'];
               $x['total_untung'] = $total_untung;
               $x['total_omset'] = $total_omset;
		       $this->load->view('v_header',$y);
		       $this->load->view('owner/v_sidebar');
		       $this->load->view('owner/v_transaksi',$x);
		    }
		    else{
		       redirect('Login');
		    }
	  	}

	  	function Cari(){
	  		if($this->session->userdata('akses') == 1 && $this->session->userdata('masuk') == true){
		       $y['title'] = "Transaksi";
		       $dari = $this->input->post('daritgl');
		       $ke = $this->input->post('ketgl');
		       $x['dari'] = $dari;
		       $x['ke'] = $ke;
		       $x['datapesanan'] = $this->m_pemesanan->getPemesananMonth($dari,$ke);
		       $t = $this->db->query("SELECT SUM(a.lb_qty * d.bnr_harga) AS total_omset, (SUM(a.lb_qty * d.bnr_harga))-(SUM(a.lb_qty * c.barang_harga_modal)) AS total_untung FROM list_barang a, pemesanan b, barang c, barang_non_reseller d WHERE MONTH(b.pemesanan_tanggal)=$bulan AND a.pemesanan_id = b.pemesanan_id AND a.barang_id = c.barang_id AND a.barang_id = d.barang_id");
               $d=$t->row_array();
               $total_untung = $d['total_untung'];
               $total_omset = $d['total_omset'];
               $x['total_untung'] = $total_untung;
               $x['total_omset'] = $total_omset;
		       $this->load->view('v_header',$y);
		       $this->load->view('owner/v_sidebar');
		       $this->load->view('owner/v_cari_transaksi',$x);
		    }
		    else{
		       redirect('Login');
		    }
	  	}
	}
?>