<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function regform()
	{
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name','name','required');
    $this->form_validation->set_rules('phone','phone','required');
    $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password','password','required');
    $this->form_validation->set_rules('repassword','repassword','required|matches[password]');
    $this->form_validation->set_rules('address','address','required');
    $this->form_validation->set_rules('pincode','pincode','required');
    $this->form_validation->set_rules('city','city','required');
    $this->form_validation->set_rules('state','state','required');
		$this->form_validation->set_rules('gender','gender','required');

			if($this->form_validation->run()==false)
      {
        $this->load->view('Register');
      }
      else{
				$this->load->model('Form_Model');
				$regarray = array();
				$regarray['name']=$this->input->post('name');
        $regarray['phone']=$this->input->post('phone');
        $regarray['email']=$this->input->post('email');
				$regarray['password']=hash('sha512',$this->input->post('password'));
        $regarray['address']=$this->input->post('address');
        $regarray['pincode']=$this->input->post('pincode');
        $regarray['city']=$this->input->post('city');
        $regarray['state']=$this->input->post('state');
        $regarray['gender']=$this->input->post('gender');

        $this->Form_Model->create($regarray);
				$this->session->set_userdata('username', $this->input->post('name'));
        $this->session->set_flashdata('msg','Your account has been registered successfully. We will get back to you soon .');
        redirect(base_url().'index.php/Register/thankyou');
		}
	}

 public function thankyou(){
    $this->load->view('thankyou');
  }

}
