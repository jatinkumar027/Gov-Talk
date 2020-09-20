<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_listing extends CI_Controller {
/* This fuction will show user data list*/
public function showall(){
	$draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));

  $this->load->model('Form_Model');
  $data['userdata']=$this->Form_Model->retrieve();
  if(get_cookie('username')=='')
  {
    redirect(base_url().'index.php/Home/loginform');
  }
  else{
  $this->load->view('user_listing',$data);
  }
}
}
?>
