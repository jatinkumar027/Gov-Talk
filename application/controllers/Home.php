<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// function encrypt_pass($pass) {
	//         $CI = & get_instance();
	//         $key = $CI->config->item('encryption_key');
	//         $salt1 = hash('sha1', $key . $pass);
	//         $salt2 = hash('sha1', $pass . $key);
	//         $hashed_password = hash('sha1', $salt1 . $pass . $salt2);
	//         return $hashed_password;
	//     }
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
				redirect(base_url().'index.php/user_listing/showall');
		} else{
				$this->session->set_flashdata('error','Either Email Address or Password is incorrect or User not registered');
				redirect(base_url().'index.php/Home/loginform');
			}
		}
	}
}
