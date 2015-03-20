<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Clase Bip
 * Recibe ID a consultar
 * Hace scraping mediante la librería Curl
 * Devuelve Array (PHP) para servir luego en formato JSON
 */
class Bip{

	private $CI;
	private $idBip;
	public $error;
	
	/**
	 * Constructor de la clase
	 * Recibe ID de la tarjeta bip!
	 * @param Int $idBip
	 */
	public function __construct() {

		$this->CI = &get_instance();
		$this->CI->load->library('curl');
		$this->error = array('status' => false, 'error' => 'id de tarjeta inválido');
	}

	/**
	 * Realiza el scraping, en caso de éxito devuelve envía Array con la data al controlador.
	 * En caso de error retorna string con mensaje de error.
	 * @param Array  $dataArr resultado de la busqueda, estado tarjeta bip
	 * @param String $dataArr Mensaje erorr
	 */
 	public function getData($idBip) {
		$this->idBip = $idBip;

 		/**
 		 * Previene error : Array to string conversion (codeIgniter)
 		 */


		if ($this->idBip == null && $this->idBip == "") {
			return null;

		} else {

			/**
			 * comienza el scraping q(o.~)p
			 * */
			$url = "http://pocae.tstgo.cl/PortalCAE-WAR-MODULE/SesionPortalServlet?accion=6&NumDistribuidor=99&NomUsuario=usuInternet&NomHost=AFT&NomDominio=aft.cl&Trx=&RutUsuario=0&NumTarjeta=";
			$url .= $this->idBip;
			$url .= "&bloqueable=";
			$dataArr = $this->CI->curl->simple_get($url);
			
			$dom = new DOMDocument();
			$dom->preserveWhiteSpace = false;
			
			$data = $this->searchTags($dataArr, '<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">', '</table>');
			
			if (!empty($data)) {

				$dom->loadHTML($data);
				$colums = $dom->getElementsByTagName('td');
				$dataArr= array();
				$name	= "";

				/**
				 * Define textos que serán reemplazados (desde el scraping en las tablas que despliegan la info)
				 * por nombres de variables
				 */			
				$search  = array('N&ordm; tarjeta bip! ', 'Estado de contrato', 'Saldo  tarjeta', 'Fecha saldo', 'Vencimiento Cuotas de transporte', 'Fecha Vencimiento');
				$replace = array('id', 'estadoContrato', 'saldoTarjeta', 'fechaSaldo', 'vencimientoCT', 'fechaVencimiento');


				for ($i = 0; $i < $colums->length; $i++) {
					$objDOM = $colums->item($i);
					
					if($name == ""){
						$name = substr(trim(htmlentities($objDOM->textContent)), 0, -1);
						
					}else{

						/**
						 * REEMPLAZO CON < str_replace > nombres de la clave ~
						 * desde el array $search y $replace
						 */
						$name = str_replace($search, $replace, $name);
						$dataArr[$name] = trim(htmlentities($objDOM->textContent));
						$name = "";
					}
				}

				if(count($dataArr) < 4){
					$dataArr = $this->error;
					return $dataArr;
				}
				//return json_encode($dataArr);
				return $dataArr;		
			}else{
				$dataArr = $this->error;
				return $dataArr;
			}
		}
	} 

	/**
	 * searchTags
	 * más Scraping ~ 
	 */
	public static function searchTags($string, $start, $end) {
		$string = " " . $string;
		$ini	= strpos($string, $start);
		if ($ini == 0)return "";
		$ini += strlen($start);
		$len = strpos($string, $end, $ini) - $ini;
		return trim(substr($string, $ini, $len));

	}

} 


?>