<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BuscaEstado extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){

		if($this->input->is_ajax_request()) {
			
			$numTarjeta = $this->input->post('numTarjetaInput');

			/**
			 * Cargo librería BIP!
			 */
			$this->load->library('bip', array($numTarjeta));
			$data['resultado'] = $this->bip->getData();
			echo json_encode($data['resultado']);

		}
	}


}