<?php defined('BASEPATH') OR exit('No direct script access allowed');


/*
 * Agrego librería REST_Controller
 * https://github.com/chriskacerguis/codeigniter-restserver
 */
require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller
{

	private $solicitud;

	function __construct(){
		parent::__construct();
		$this->solicitud = &get_instance();
		$this->solicitud->load->library('bip');
		
		/**
		 * Declaro los headers
		 * Unico allow method GET
		 */
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
		header("Access-Control-Allow-Methods: GET");

	}

    /**
     * Método GET que recibe el ID de la tarjeta bip! y devuelve un JSON por 
     * defecto con el status de la tarjeta
     * @return JSON retorna según el 'file ormat', json, xml, php (texto plano), csv, serialized
     * @return  HTTP STATUS 400|404|405
     */
    public function index_get()
    {

    	/**
    	 * Comprueba que la solicitud provenga del recurso "solicitudes{.json|xml|php|csv|serialized}"
    	 */
		if(strstr(basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']), '.', true) !== 'solicitudes'){
			$this->response(array('status' => false, 'error' => 'solicitud inválida'), 404);
		}

		/**
		 * Valida ID tarjeta:
		 * Comprueba si es un numero
		 * Comprueba longitud > 10
		 */
    	if( !$this->get('bip') || !is_numeric($this->get('bip')) || strlen($this->get('bip')) > 10 ){
	       	$this->response($this->solicitud->bip->error, 400);
	       	
		}else{
			/**
			 * IMPORANTE: (int) remueve 0 al inicio (si es que los hay)
			 * esto valida el ID de la tarjeta, ya que arroja error en tarjetas que comienzan en 0
			 * El sitio de transantiago remueve el 0 con javascript en el formulario 
			 */
			$idBip = (int)$this->get('bip');

			/**
			 * Envío id de la tarjeta a la librería Bip
			 * luego de scrapear la página del transantiago, devolvera Array con 
			 * el status de la tarjeta
			 */
			$respuesta = $this->solicitud->bip->getData($idBip);

			/**
			 * Regreso los datos a la vista en formato json (o equivalente)
			 */
			if(isset($respuesta['status'])){
				$this->response($respuesta, 400);	
			}else{
				$this->response($respuesta);
			}

		}
 
    }

}