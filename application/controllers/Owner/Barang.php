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
	  	}

	  	function index(){
	  		if($this->session->userdata('akses') == 1 && $this->session->userdata('masuk') == true){
		       
		    }
		    else{
		       redirect('Login');
		    }
	  	}
	}
?>