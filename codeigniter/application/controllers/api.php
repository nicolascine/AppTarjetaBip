<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package     CodeIgniter
 * @subpackage  Rest Server
 * @category    Controller
 * @author      Phil Sturgeon
 * @link        http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller
{
    public function index_get()
    {
		$error = "Debes ingresar un ID (identificador tarjeta bip) como parametro";
	    $this->response($error);
    }

    public function consulta_get()
    {
    	if(!$this->get('tarjeta')){
    		$error = "Debes ingresar un ID (identificador tarjeta bip) como parametro";
	       	$this->response($error);
		}else{
			$numTarjeta = $this->get('tarjeta');
			$this->load->library('bip', array($numTarjeta));
			$this->response($this->bip->getData());
		}
 
    }

}