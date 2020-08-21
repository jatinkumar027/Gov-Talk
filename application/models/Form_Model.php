<?php
class Form_Model extends CI_Model {

	/* this function will record in database*/
    public function create($regarray)
	{
		$this->db->insert('user',$regarray);
	}
	public function checkuser($formarray){
		$this->db->where($formarray);
	return $row = $this->db->get('user')->row_array();

	}
}
?>
