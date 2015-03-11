<?php defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * Agrego librería REST_Controller
 * https://github.com/chriskacerguis/codeigniter-restserver
 */
require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller
{

	function __construct(){
		parent::__construct();

		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET");
		$method = $_SERVER['REQUEST_METHOD'];
		if($method == "OPTIONS") {
		die();
		}
	}

	/*
	 * Método Index, sólo con fines de indicar posible error.
	 * Las llamadas se reciben sólo por el metodo consulta_get();
	 */
    public function index_get()
    {
		$error = "Debes ingresar un ID (identificador tarjeta bip) como parametro";
	    $this->response($error);
    }
    /**
     * Método GET que recibe el ID de la tarjeta bip! y devuelve un JSON por 
     * defecto con el status de la tarjeta
     * @return JSON  retorna según el parámetro 'format', json, xml, html, csv
     */
    public function consulta_get()
    {
    	if(!$this->get('tarjeta')){
    		$error = "Debes ingresar un ID (identificador tarjeta bip) como parametro";
	       	$this->response($error);
	       	
		}else{

			/**
			 * IMPORANTE: (int) remueve 0 al inicio (si es que los hay)
			 * esto valida el ID de la tarjeta, ya que arroja error en tarjetas que comienzan en 0
			 * El sitio de transantiago remueve el 0 con javascript en el formulario 
			 */
			$numTarjeta = (int)$this->get('tarjeta');

			/**
			 * Envío id de la tarjeta a la librería Bip
			 * luego de scrapear la página del transantiago, devolvera Array con 
			 * el status de la tarjeta
			 */
			$this->load->library('bip', array($numTarjeta));
			
			/**
			 * Regreso los datos a la vista en formato json (o equivalente)
			 */
			$this->response($this->bip->getData());
		}
 
    }

}