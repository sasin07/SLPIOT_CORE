<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WhetherStation extends CI_Controller {

	function __construct() { 
         parent::__construct(); 
		 $this->load->database();
    }
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('home');
	}

	/*
		controller for add whether station
	*/

	public function editStation(){
		$code = " stationID=\"". $this->input->get('Code')."\"";
		$this->load->model("database_model");
        $this->data['station'] = $this->database_model->getAllDataWithParams("tstations","stationID, name, location, coordinates, owner_name,owner_address, owner_email, owner_mobile",$code);
        $this->load->view('WhetherStation/editStation',$this->data);	              

	}

	public function newStation(){
		$this->load->view('WhetherStation/addStation');
	}

	public function viewStation(){

        $this->load->model("database_model");
        $this->data['stations'] = $this->database_model->getAllData("tstations","ID,stationID,name,location");
        $this->load->view('WhetherStation/viewStation',$this->data);
	}

	public function loadWhetherDetails(){
		$code = " stationID=\"". $this->input->get('Code')."\" AND Record_time between \"".$this->input->get('date')." 00:00:00\" AND \"".$this->input->get('date')." 23:59:59\"";
		$this->load->model("database_model");
        $this->data['data_stream'] = $this->database_model->getAllDataWithParams ("Data_Stream","ID,Record_time,Humidity,Ext_temp,Int_temp,Intensity,Win_dir,Win_speed,Rain_gauge,,Altitude,Pressure,Soil_Moisture,Batt",$code);
		$this->load->view('WhetherStation/stationViewer',$this->data);
	}

	public function addStation(){

		
		$this->load->model("station_model");
		$this->load->model("database_model");
		// set data
		$this->station_model->setStationCode($this->input->post('txtStationCode'));
		$this->station_model->setStationName($this->input->post('txtStationName'));
		$this->station_model->setStationLocation($this->input->post('txtLocation'));
		$this->station_model->setStationCoordinates($this->input->post('txtCoordinates'));
		$this->station_model->setOwnername($this->input->post('txtOwnerName'));
		$this->station_model->setOwnerAddress($this->input->post('txtAddress'));
		$this->station_model->setOwnerEmail($this->input->post('txtemail'));
		$this->station_model->setOwnerMobile($this->input->post('txtMobile'));
		$this->station_model->setActive(0);

		
		$data = $this->station_model->toArray();
		$ret = $this->database_model->insertStation($data);

		// crete table for the GUID 

		if($ret==true)
			echo "Station Code : " . $this->station_model->getStationCode();
		else
			echo "number : " . $this->station_model->getStationCode();
					
	}
	// update station loadWhetherDetails
	public function UpdateStation(){

		$this->load->model("station_model");
		$this->load->model("database_model");
		// set data
		$this->station_model->setStationCode($this->input->post('txtStationCode'));
		$this->station_model->setStationName($this->input->post('txtStationName'));
		$this->station_model->setStationLocation($this->input->post('txtLocation'));
		$this->station_model->setStationCoordinates($this->input->post('txtCoordinates'));
		$this->station_model->setOwnername($this->input->post('txtOwnerName'));
		$this->station_model->setOwnerAddress($this->input->post('txtAddress'));
		$this->station_model->setOwnerEmail($this->input->post('txtemail'));
		$this->station_model->setOwnerMobile($this->input->post('txtMobile'));
		$this->station_model->setActive(0);

		
		$data = $this->station_model->toArray();
		$parm =$this->input->post('txtStationCode');
		$ret = $this->database_model->updateStation($data,$parm);

		// crete table for the GUID 

		if($ret==true)
			echo "Station Code : " . $this->station_model->getStationCode();
		else
			echo "number : " . $this->station_model->getStationCode();
	}
	// delete addStation
	
	public function DeleteStation(){

		$this->load->model("station_model");
		$this->load->model("database_model");
		$parm =$this->input->post('txtStationCode');
		$ret = $this->database_model->DeleteStation($parm);

		// crete table for the GUID 

		if($ret==true)
			echo "Station Code : " . $this->station_model->getStationCode();
		else
			echo "number : " . $this->station_model->getStationCode();
	}
	// get parameters
	public function getPrmeterList(){
		$res = $this->db->get("tparameters");
		$result = $res->result_array();
		$str="{</br>";
		foreach($result as $row){
			$str = $str . $row["Name"];
			$str = $str . "</br>";	
		}	
		$str=$str . "}";
		echo $str;
	}
}
