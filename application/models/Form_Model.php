<?php
class Form_Model extends CI_Model {

	/* this function will record in database*/
    public function create($regarray)
	{
		$this->db->insert('user',$regarray);
	}

	public function checkuser($formarray){
	$this->db->where($formarray);
	$row = $this->db->get('user')->row_array();
  if($row!='')
  {
    $checkuserarr = array();
    $checkuserarr['status']=$row['status'];
    $checkuserarr['name']=$row['name'];
    return $checkuserarr;
  }
  return 1;
	}

public function retrieve()
{
$query = $this->db->get('user');
return $query->result();
}
}
?>
