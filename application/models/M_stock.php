<?php
	/**
	 * 
	 */
	class M_stock extends CI_Model
	{
		function save_stock_masuk($barang_id, $stock){
			$hsl = $this->db->query("INSERT INTO history_stock_masuk(barang_id,stock) VALUES ('$barang_id','$stock')");

		}
		function getHistoryStock($barang_id){
			$hasil=$this->db->query("SELECT a.stock,a.barang_id,b.barang_nama,DATE_FORMAT(a.pemesanan,'%d/%m/%Y %H:%i') AS tanggal FROM history_stock_masuk a,barang b WHERE a.barang_id = '$barang_id' AND a.barang_id = b.barang_id ");
        	return $hasil;
		}

	}
?>