<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Model_Examples extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function Get($id = NULL){
		if (! is_null($id)) {
			$query = $this->db->select("*")->from("examples")->where("id",$id)->get();
			if ($query->num_rows() === 1) {
				return $query->row_array(); 
			}
			return NULL;
		}

		$query = $this->db->select("*")->from("examples")->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}
		return $query->result();
	}
}