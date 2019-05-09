<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends CI_Controller{

    public function __construct()
	{
        parent::__construct();
	    $this->load->library('form_validation');
     }

   
    public function index()
    {
        $this->load->model('Announcement_model');
        $announcements=$this->Announcement_model->getAnnouncements(null,null);
        $data["announcements"]=$announcements;
        $this->load->view("admin/announcement",$data);
    }

    public function deleteBlog($id){
        $this->load->model("Announcement_model");
        $result=$this->Announcement_model->deleteBlog($id);
        if(count($result)>0){
            $this->session->set_flashdata("info","<div class='alert alert-success'>Duyurunuz başarılı bir şekilde silinmiştir.</div>");
        }else{
            $this->session->set_flashdata("info","<div class='alert alert-danger'>Silme sırasında bir hata olmuştur. daha sonra tekrar deneyiniz.</div>");

        }

        redirect("announcement");

    }

    public function updateBlog($id){
        $this->load->model("Announcement_model");
        $this->load->model("CategoriesModel");
        $result=$this->Announcement_model->retrieveAnnouncement($id);
        $result2=$this->CategoriesModel->getCategories();
        $data["announcement"]=$result;
        $data["categories"]=$result2;
        $this->load->view("admin/announcementupdate",$data);
    }

    public function update_announcement_post(){
        $this->form_validation->set_rules("title","Duyuru Başlık","required","Duyuru Başlık alanınını boş bırakamazsınız");
        $this->form_validation->set_rules("description","Içerik","required","Içerik Alanını boş bırakamazsınız");
        $this->form_validation->set_rules("categories","Kategori","required","Kategori Alanını boş bırakamazsınız");

        if($this->form_validation->run()==FALSE){
           redirect("/announcement/updateBlog/".$this->input->post("id"));
        }else{
            $data=array(
                'title'=>$this->input->post('title'),
                'description'=>$this->input->post('description'),
                'csafeUrl'=>$this->input->post("categories")
              );
              $this->load->model('Announcement_model');
              $result= $this->Announcement_model->updateBlog($data,$this->input->post("id"));
              if(count($result)>0){
                $this->session->set_flashdata("info","<div class='alert alert-success'>Duyurunuz başarılı bir şekilde güncellendi.</div>");

              }else{
                $this->session->set_flashdata("info","<div class='alert alert-danger'>Güncelleme sırasında bir hata olmuştur. daha sonra tekrar deneyiniz.</div>");

              }
              redirect("/announcement/updateBlog/".$this->input->post("id"));

        }
    }

    public function add_announcement(){
        $this->load->model("CategoriesModel");
        $result=$this->CategoriesModel->getCategories();
        $data["categories"]=$result;
        $this->load->view("admin/announcementadd",$data);
    }

    public function add_announcement_post(){
       $this->form_validation->set_rules("title","Duyuru Başlık","required","Duyuru Başlık alanınını boş bırakamazsınız");
       $this->form_validation->set_rules("description","Içerik","required","Içerik Alanını boş bırakamazsınız");
       $this->form_validation->set_rules("categories","Kategori","required","Kategori Alanını boş bırakamazsınız");

       if($this->form_validation->run()==FALSE){
           $this->add_announcement();
       }else{
        $data=array(
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('description'),
            'desc_date'=>date('Y-m-d'),
            'url'=>safeUrls($this->input->post('title')),
            'clickSize'=>0,
            "csafeUrl"=>$this->input->post("categories")
        );
        $this->load->model('Announcement_model');
        $result= $this->Announcement_model->addAnnouncement($data);
        if($result>0){
            $this->session->set_flashdata("info","<div class='alert alert-success'>Duyurunuz başarılı bir şekilde eklenmiştir.</div>");
        }else{
            $this->session->set_flashdata("info","<div class='alert alert-danger'>Ekleme sırasında bir hata olmuştur. daha sonra tekrar deneyiniz.</div>");
        }
         
        redirect("announcement/add_announcement");
       }
    }


}

?>