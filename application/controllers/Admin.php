<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
		    $this->load->library('form_validation');
		
  }


	public function index()
	{
		$isUserLogin=$this->session->userdata('is_login');
		if(empty($isUserLogin)){
			$this->load->view("admin/login");
		}else{
			redirect("admin/adminoperation");
		}

		
	}

	

	public function  adminoperation()
	{
        $this->load->view('admin/anasayfa');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("admin");
	}

	



	public function loginpost()
	{
         	
		$this->form_validation->set_rules("username","Kullanıcı Adı","required");
		$this->form_validation->set_rules("password","Şifre","required");
		
		if($this->form_validation->run())
		{
		 //check user in table
		 $username=$this->input->post('username');
		 $password=$this->input->post('password');
		 $this->load->model('LoginOperation_model');
		 $result=$this->LoginOperation_model->checkAdmin($username,$password);
		 if($result!=false)
		 {
			$this->session->set_userdata('is_login',true);
			$this->session->set_userdata('user',$result);
			redirect("admin/adminoperation");
		 }else
		 {
			$this->session->set_flashdata("ERROR","Girdiğiniz Bilgiler yanlıştır.");  
			$this->load->view('admin/login');
		 }
		}else{
			$this->load->view('admin/login');
		}
	}
}
