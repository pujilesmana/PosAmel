<?php 
	/**
	 * 
	 */
	class Barang extends CI_Controller
	{
		
		function __construct()
	  	{
		    parent:: __construct();
		    if($this->session->userdata('masuk') !=TRUE){
		      $url=base_url('Login');
		      redirect($url);
		    };

		    $this->load->model('m_barang');
		    $this->load->library('upload');
	  	}

	  	function index(){
	  		if($this->session->userdata('akses') == 1 && $this->session->userdata('masuk') == true){
		       $y['title'] = "Daftar Barang";
		       
		       $this->load->view('v_header',$y);
		       $this->load->view('owner/v_sidebar');
		       $this->load->view('owner/v_barang');
		    }
		    else{
		       redirect('Login');
		    }
	  	}

	  	function barang_simpan(){


	  		//Config Upload File 
			$config['upload_path'] = './assets/image_barang/'; //Tempat menyimpan file
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //tipe filenya 
	        $config['max_size']             = 0; //size limits

	        $this->upload->initialize($config);
	        if(!empty($_FILES['filefoto']['name']))// cek apakah file ada di form
	        {
	            if ($this->upload->do_upload('filefoto'))// cek kondisi do_upload == true
	            {
	                $gbr = $this->upload->data(); // upload data 
	                $gambar=$gbr['file_name']; //ambil file nama
	               	$minqty = $this->input->post('minqty');
			  		$maxqty = $this->input->post('maxqty');
			  		$harga = $this->input->post('harga');
			  		$nama_barang = $this->input->post('nama_barang');
			  		$stock_awal = $this->input->post('stock_awal');
			  		$stock_akhir = $this->input->post('stock_akhir');
			  		$harga_modal = str_replace(".", "", $this->input->post('harga_modal'));

			  		$this->m_barang->savebarang($nama_barang, $stock_awal, $stock_akhir, $harga_modal, $gambar);
			  		$cadmin=$this->m_barang->getIdbyName($nama_barang);
			  		$xcadmin=$cadmin->row_array();
			  		$barang_id=$xcadmin['barang_id'];
			  		savebarangreseller($barang_id, $kuantitas, $harga)

			  		$qty = sizeof($minqty);

				  	for($i=0; $i < $qty; $i++)
				  	{
				  		$min = $minqty[$i];
				  		$max = $maxqty[$i];
					}
				}else{
	                echo $this->session->set_flashdata('msg','warning');
	                redirect('Owner/Barang');
	            }         
	        }else{
				redirect('Owner/Barang');
			}




	  		
	  	}
	}
?>