<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IndexBip extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}

	public function index(){

		/**
		 * Cargo vista index (landing page)
		 */
		$this->load->view('index_bip');

	}


}