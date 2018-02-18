<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashBoard extends CI_Controller {

	function __construct() { 
         parent::__construct(); 
		 $this->load->database();
    }
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('Dashboard/home');
	}

	/*
		controller for add whether station
	*/

	public function getDataCentersAll(){
		$res = $this->db->get("tstations");
		$result = $res->result_array();
		echo json_encode($result);

	}
	
}
