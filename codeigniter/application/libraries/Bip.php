<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//$this->load->library('curl'); 
//
class Bip{
	/**
	 * Objeto string estático que contiene 
	 * descripción para el browser.
	 */
	protected static $browser = "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (.NET CLR 3.5.30729)";
	
	/**
	 * $CI extiende desde code igniter ~
	 * @var [type]
	 */
	private $CI;
	private $idNumber;
	

	/**
	 * Constructor de la clase
	 * 
	 * @param $idNumber
	 */
	public function __construct($numTarjeta) {

		$this->CI = &get_instance();
		$this->CI->load->library('curl');
		//$CI->your_library->do_something();

		$this->idNumber = $numTarjeta;

	}


 	public function getData() {
 		/**
 		 * Previene error : Array to string conversion (codeIgniter)
 		 * @var [type]
 		 */
 		$idTarjeta = implode(',' , $this->idNumber);

		if ($idTarjeta == null && $idTarjeta == "") {
			return null;

		} else {
			$url = "http://pocae.tstgo.cl/PortalCAE-WAR-MODULE/SesionPortalServlet?accion=6&NumDistribuidor=99&NomUsuario=usuInternet&NomHost=AFT&NomDominio=aft.cl&Trx=&RutUsuario=0&NumTarjeta=";
			$url .= $idTarjeta;
			$url .= "&bloqueable=";
			$dataArr = $this->CI->curl->simple_get($url);
			
			$dom 	= new DOMDocument();
			$dom->preserveWhiteSpace = false;

			$data	= $this->searchTags($dataArr, '<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">', '</table>');
			$dom->loadHTML($data);
			$colums = $dom->getElementsByTagName('td');
			$dataArr= array();
			$name	= "";
			
			for ($i = 0; $i < $colums->length; $i++) {
				$objDOM = $colums->item($i);
				
				if($name == ""){
					$name = substr(trim(htmlentities($objDOM->textContent)), 0, -1);
				}else{
					$dataArr[$name] = trim(htmlentities($objDOM->textContent));
					$name = "";
				}
			}

			if(count($dataArr) < 4){
				$dataArr = array('respuesta' => 'Tarjeta inválida');
				return json_encode($dataArr);
			}
			return json_encode($dataArr);
		}
	} 

	/**
	 * searchTags
	 * Scraping ~ 
	 * @param  [type] $string [description]
	 * @param  [type] $start  [description]
	 * @param  [type] $end    [description]
	 * @return [type]         [description]
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