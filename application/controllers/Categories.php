<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller{

    public function __construct()
	{
        parent::__construct();
	    $this->load->library('form_validation');
		
  }

   
    public function index()
    {
       $this->load->model("CategoriesModel");
       $result=$this->CategoriesModel->getCategories();
       $data["categories"]=$result;
       $this->load->view("admin/categories",$data);
    }

    public function categoriesAddGet($operation="insert",$id="0")
    {
        if($operation=="update"){
            $this->load->model("CategoriesModel");
            $result=$this->CategoriesModel->getCategori($id);
            $data["categori"]=$result;
            $data["operationType"]=$operation;
            $this->load->view("admin/categoriesadd",$data);
        }else{
            $data["operationType"]=$operation;
             $this->load->view("admin/categoriesadd",$data);
        }
        
    }

    public function categoriesUpdate(){
        $this->form_validation->set_rules("name","Kategori Adı","required","Kategori Adını Boş bırakamazsınız");
        if($this->form_validation->run()==FALSE){
            $this->add_announcement();
        }else{
            $data=array(
                "cname"=>$this->input->post("name"),
                "csefurl"=>safeUrls($this->input->post("name"))
            );

            $this->load->model("CategoriesModel");
            $this->CategoriesModel->updateCategori($data,$this->input->post("cid"));
            redirect("categories");
        }
    }

    public function categoriesSave(){
        $this->form_validation->set_rules("name","Kategori Adı","required","Kategori Adını Boş bırakamazsınız");
        if($this->form_validation->run()==FALSE){
            $this->add_announcement();
        }
        $data=array(
            "cname"=>$this->input->post("name"),
            "csefurl"=>safeUrls($this->input->post("name"))
        );
        $this->load->model("CategoriesModel");
        $result= $this->CategoriesModel->saveCategories($data);
      
    }

    public function removeCategori($id){
        $this->load->model("CategoriesModel");
        $this->CategoriesModel->removeCategori($id);
        redirect("categories");
    }

}

?>