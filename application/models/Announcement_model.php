<?php
   
   class Announcement_model extends CI_Model {
     
    public function addAnnouncement($data)
    {
       $this->db->insert('announcement',$data);
       return $this->db->insert_id();
    }

    public function getAnnouncements($per,$segment){
       if($per==null){
         return  $this->db->select("*")
         ->from("announcement")
          ->get()
           ->result();
       }else{
         return  $this->db->select("*")
         ->from("announcement")
          ->limit($per,$segment)
          ->get()
           ->result();
       }
      
    }

    public function retrieveLinkDetail($link){
      return $this->db->select("*")->where("url",$link)->from("announcement")->get()->row();
    }

    public function deleteBlog($id)
    {
       return $this->db->delete("announcement",array("id"=>$id));
    }

    public function retrieveAnnouncement($id){
       return $this->db->select("*")->where("id",$id)->from("announcement")->get()->row();
    }

    public function updateBlog($data,$id){
       return $this->db->where("id",$id)->update("announcement",$data);
    }

    public function getRowSizeInAnnouncement()
    {
       return $this->db->select("id")
                ->from("announcement")
                 ->count_all_results();
    }

    public function getCategoriBlogs($url)
    {
         return $this->db->select("*")->from("announcement")->where("csafeUrl",$url)->get()->result();
    }
   

   }




?>