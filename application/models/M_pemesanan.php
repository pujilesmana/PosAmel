<?php
	/**
	 * 
	 */
	class M_pemesanan extends CI_Model
	{

		function save_pesanan($nama_pemesan,$tanggal,$no_hp,$alamat,$level,$kurir_id,$at_id){
			$hsl = $this->db->query("INSERT INTO pemesanan(pemesanan_nama,pemesanan_tanggal,pemesanan_hp,pemesanan_alamat,level,kurir_id,at_id) VALUES ('$nama_pemesan','$tanggal','$no_hp','$alamat','$level','$kurir_id','$at_id')");
        	return $hsl;
		}

		function getPemesanan(){
			$hasil=$this->db->query("SELECT a.*,b.*,c.*,DATE_FORMAT(pemesanan_tanggal,'%d/%m/%Y') AS tanggal FROM pemesanan a, kurir b, asal_transaksi c WHERE a.kurir_id = b.kurir_id AND a.at_id = c.at_id ORDER BY a.pemesanan_id DESC");
        	return $hasil;
		}

		function getPemesananCurdate(){
			date_default_timezone_set("Asia/Jakarta");
        	$cur_date = date("Y-m-d");
			$hasil=$this->db->query("SELECT a.*,b.*,c.*,DATE_FORMAT(pemesanan_tanggal,'%d/%m/%Y') AS tanggal FROM pemesanan a, kurir b, asal_transaksi c WHERE pemesanan_tanggal = '$cur_date' AND a.kurir_id = b.kurir_id AND a.at_id = c.at_id ORDER BY a.pemesanan_id DESC");
        	return $hasil;
		}

		function getPemesananMonth($dari,$ke){
			$hasil=$this->db->query("SELECT a.*,b.*,c.*,DATE_FORMAT(pemesanan_tanggal,'%d/%m/%Y') AS tanggal FROM pemesanan a, kurir b, asal_transaksi c WHERE (a.pemesanan_tanggal BETWEEN '$dari' AND '$ke') AND a.kurir_id = b.kurir_id AND a.at_id = c.at_id ORDER BY a.pemesanan_id DESC");
        	return $hasil;
		}

		function getIdbyName($nama_pemesan){
			$hasil=$this->db->query("SELECT * FROM pemesanan WHERE pemesanan_nama='$nama_pemesan' ORDER BY pemesanan_id DESC LIMIT 1");
        	return $hasil;
		}

		function getIdbyid($pemesanan_id){
			$hasil=$this->db->query("SELECT a.*,b.*,c.*,DATE_FORMAT(pemesanan_tanggal,'%d/%m/%Y') AS tanggal FROM pemesanan a, kurir b, asal_transaksi c WHERE pemesanan_id='$pemesanan_id' AND  a.kurir_id = b.kurir_id AND a.at_id = c.at_id LIMIT 1");
        	return $hasil;
		}

		function edit_pesanan($pemesanan_id,$nama,$tanggal,$no_hp,$alamat,$kurir_id,$at_id){
			$hsl = $this->db->query("UPDATE pemesanan SET pemesanan_nama='$nama',pemesanan_tanggal='$tanggal',pemesanan_hp='$no_hp',pemesanan_alamat='$alamat',kurir_id='$kurir_id',at_id='$at_id' WHERE pemesanan_id='$pemesanan_id'");
        	return $hsl;
		}

		function hapus_pesanan($pemesanan_id){
			$this->db->trans_start();
				$this->db->query("DELETE FROM pemesanan WHERE pemesanan_id='$pemesanan_id'");
				$this->db->query("DELETE FROM list_barang WHERE pemesanan_id='$pemesanan_id'");
	      	$this->db->trans_complete();
	        if($this->db->trans_status()==true)
	        return true;
	        else
	        return false;
		}
		
		function getAllAT(){
			$hasil=$this->db->query("SELECT * FROM asal_transaksi");
        	return $hasil;
		}

		function save_at($nama){
			$hsl = $this->db->query("INSERT INTO asal_transaksi(at_nama) VALUES ('$nama')");
        	return $hsl;
		}

		function update_at($id,$nama){
			$hsl = $this->db->query("UPDATE asal_transaksi SET at_nama='$nama' WHERE at_id='$id'");
        	return $hsl;
		}

		function hapus_at($id){
	      	$hsl = $this->db->query("DELETE FROM asal_transaksi WHERE at_id='$id'");
	      	return $hsl;
    	}

    	function getAllkurir(){
			$hasil=$this->db->query("SELECT * FROM kurir");
        	return $hasil;
		}

		function save_kurir($nama){
			$hsl = $this->db->query("INSERT INTO kurir(kurir_nama) VALUES ('$nama')");
        	return $hsl;
		}

		function update_kurir($id,$nama){
			$hsl = $this->db->query("UPDATE kurir SET kurir_nama='$nama' WHERE 	kurir_id='$id'");
        	return $hsl;
		}

		function hapus_kurir($id){
	      	$hsl = $this->db->query("DELETE FROM kurir WHERE kurir_id='$id'");
	      	return $hsl;
    	}
	}
?>