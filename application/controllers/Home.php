<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function loginform()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','password','required');
			if($this->form_validation->run()==false)
			{
				$this->load->view('Home');
			}
			else{
				$this->load->model('Form_Model');
				$formarray = array();
				$formarray['email']=$this->input->post('email');
				$formarray['password']=hash('sha512',$this->input->post('password'));

				$check=$this->Form_Model->checkuser($formarray);
				if($check!='1')
				{
				$this->load->helper('cookie');
				set_cookie('username',$check,'3600');
				$this->session->set_flashdata('msg','You are successfully logged in');
				redirect(base_url().'index.php/Home/welcome');
		} else{
				$this->session->set_flashdata('error','Either Email Address or Password is incorrect or User not registered');
				redirect(base_url().'index.php/Home/loginform');
			}
		}
	}

	public function welcome(){
		$this->load->view('welcometohome');
		$this->load->model('Form_Model');
	    $this->Form_Model->retrieve();
	}
}
