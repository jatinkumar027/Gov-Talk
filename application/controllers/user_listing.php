<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_listing extends CI_Controller {

public function showall(){
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
