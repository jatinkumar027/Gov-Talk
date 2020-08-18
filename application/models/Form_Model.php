<?php
class Form_Model extends CI_Model {

	/* this function will record in database*/
    public function create($formarray)
	{
		$this->db->insert('user',$formarray);
	}
	public function checkuser($formarray){
		$this->db->where($formarray);
	return $row = $this->db->get('user')->row_array();

	}
}
?>