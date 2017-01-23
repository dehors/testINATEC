<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Model_Results extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function Save($result){
		$this->db->set(
			$this->_setResult($result)
		)->insert("results");
		if ($this->db->affected_rows() === 1) {
			return $this->db->insert_id();
		}
		return NULL;
	}
	public function Update($id, $result){
		$this->db->set(
			$this->_setResult($result)
		)
		->where('id',$id)
		->update("results");
		if ($this->db->affected_rows() === 1) {
			return TRUE;
		}
		return NULL;
	}
	public function Show($id){
		$consulta = $this->db->query("Select * from results u where u.user_id = $id");
		return $consulta->result();
	}
	private function _setResult($result){
		return array('lesson1' => $result['lesson1'],'lesson2' => $result['lesson2'],'lesson3' => $result['lesson3'],'lesson4' => $result['lesson4'],'lesson5' => $result['lesson5'],'user_id' => $result['user_id']);
	}
}