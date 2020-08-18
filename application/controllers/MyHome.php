<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyHome extends CI_Controller {
/* 
* this fuction will show register page
* */
	public function form()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
			if($this->form_validation->run()==false){
			//here we will record load our view
			$this->load->view('MyHome/MyHome.php');
			}else{
			// here we will save user record in db
			$this->load->model('Form_Model');
			$formarray = array();
			$formarray['username']=$this->input->post('username');
			$formarray['password']=$this->input->post('password');
				if ($this->input->post('signup')!=''){
					$this->Form_Model->create($formarray);
					$this->session->set_flashdata('msg','Your account has been created successfully.'); 
					redirect(base_url().'index.php/MyHome/form');
					}
				elseif ($this->input->post('signin')!='') {
					$check=$this->Form_Model->checkuser($formarray);
					if($check!=''){
						$this->session->set_flashdata('msg','User successfully logged in');
						redirect(base_url().'index.php/MyHome/form');
					} else{
							$this->session->set_flashdata('msg','User not registered');
							redirect(base_url().'index.php/MyHome/form');
					  }	
				}
    }
	}
}