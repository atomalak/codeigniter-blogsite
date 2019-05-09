<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {


	public function index()
	{
		$this->load->model("Announcement_model");
		$this->load->model("CategoriesModel");
		$result2=$this->CategoriesModel->getCategories();
		$this->session->set_userdata("title","Blog Sitesi");
		$this->load->library("pagination");
		$rowSize=$this->Announcement_model->getRowSizeInAnnouncement();

		$config=array(
			"base_url"=>base_url()."anasayfa",
			"per_page"=>5,
			"total_rows"=>$rowSize
			
		);
		$this->pagination->initialize($config);
		$data["links"]=$this->pagination->create_links();
		$result=$this->Announcement_model->getAnnouncements($config["per_page"],$this->uri->segment(2));
		$data["announcements"]=$result;
		$data["categories"]=$result2;
		$this->load->view('anasayfa',$data);
	}

	public function detail($link)
	{
		$this->load->model("Announcement_model");
		$result=$this->Announcement_model->retrieveLinkDetail($link);
		$this->session->set_userdata("title",$result->title);
		$data["announcement"]=$result;
        $this->load->view("detail",$data);
	}

	public function contact()
	{
         $this->load->view("contact.php");
	}

	public function getCategoriBlogs($sefurl)
	{
		$this->load->model("Announcement_model");
		$this->load->model("CategoriesModel");
		$result2=$this->CategoriesModel->getCategories();
		$this->session->set_userdata("title","Blog Sitesi");
		$this->load->library("pagination");
		$rowSize=$this->Announcement_model->getRowSizeInAnnouncement();

		$config=array(
			"base_url"=>base_url()."anasayfa",
			"per_page"=>5,
			"total_rows"=>$rowSize
			
		);
		$this->pagination->initialize($config);
		$data["links"]=$this->pagination->create_links();
		$result=$this->Announcement_model->getCategoriBlogs($sefurl);
		$data["announcements"]=$result;
		$data["categories"]=$result2;
		$this->load->view('anasayfa',$data);

	}
}
