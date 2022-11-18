<?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}
function save_flight(){
		extract($_POST);
		$data = ", id = '$Airline' ";
		$data .= ", flightNo = '$flightNno' ";
		$data .= ", DepartureLocation = '$DepartureLocation' ";
		$data .= ", arrivallocation = '$arrivallocation' ";
		$data .= ", Departuredate= '$Departuredate' ";
		$data .= ", arrivaldate = '$arrivaldate' ";
		$data .= ", seats = '$seats' ";
		$data .= ", price = '$price' ";
		
		if(empty($id)){
			// echo "INSERT INTO flight_list set ".$data;
			$submit = $this->db->query("INSERT INTO flights_tb set ".$data);
		}else{
			$submit = $this->db->query("UPDATE flights_tb set ".$data." where id=".$id);
		}
		if($submit)
			return 1;
	}
	function delete_flight(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM flights_tb where id = ".$id);
		if($delete)
			return 1;
	}
	
}