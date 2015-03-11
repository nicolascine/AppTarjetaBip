<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Controlador para consultas internas (ajax en landing page)
 */
class BuscaEstado extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	/**
	 * Consulta estado de la bip en el landing page de la app ~
	 * Incluye validación. Sólo admite request vía AJAX en este método.
	 * @return JSON [devuelve resultado de la busqueda según ID de tarjeta]
	 */
	public function index(){

		if($this->input->is_ajax_request()) {
			
			/*
			 * (int) remueve 0 al inicio (si es que los hay)
			 */
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