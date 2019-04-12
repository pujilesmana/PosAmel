<?php
	/**
	 * 
	 */
	class M_barang extends CI_Model
	{
		
		function savebarang($nama_barang, $barang_stock_awal, $barang_stock_akhir, $barang_harga_modal, $barang_foto){
			$hsl = $this->db->query("INSERT INTO barang(barang_nama,barang_stock_awal,barang_stock_akhir,barang_harga_modal,barang_foto) VALUES ('$nama_barang','$barang_stock_awal','$barang_stock_akhir','$barang_harga_modal','$barang_foto')");
        	return $hsl;
		}

		function getIdbyName($nama_barang){
			$hasil=$this->db->query("SELECT * FROM barang WHERE barang_nama='$nama_barang' LIMIT 1");
        	return $hasil;
		}

		function savebarangreseller($barang_id, $kuantitas, $harga){
			$hsl = $this->db->query("INSERT INTO barang_reseller(barang_id,br_kuantitas,br_harga) VALUES ('$barang_id', '$kuantitas', '$harga')");
        	return $hsl;
		}
	}
?>