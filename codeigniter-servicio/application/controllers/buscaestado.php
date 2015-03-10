<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BuscaEstado extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	/**
	 * Método Index, del controlador "BuscaEstado"
	 * Incluye validación. Sólo se admiten request vía AJAX en este método.
	 * @return JSON [devuelve resultado de la busqueda según ID de tarjeta]
	 */
	public function index(){

		if($this->input->is_ajax_request()) {
			
			$numTarjeta = (int)$this->input->post('numTarjetaInput');

			/**
			 * Envío id de la tarjeta a la librería Bip
			 * luego de scrapear la página del transantiago, devolvera Array con 
			 * el status de la tarjeta
			 */
			$this->load->library('bip', array($numTarjeta));
			
			/*
			 * Gurdo el resultado en el Array data y envío JSON de regreso a la vista
			 */
			$data['resultado'] = $this->bip->getData();
			echo json_encode($data['resultado']);

		}
	}


}