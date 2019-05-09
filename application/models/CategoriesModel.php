<?php 
  class CategoriesModel extends CI_Model {
      public function getCategories()
      {
          return $this->db->select("*")->from("categories")->get()->result();
      }

      public function saveCategories($data)
      {
          $result=$this->db->insert("categories",$data);
          return $resut;
      }

      public function removeCategori($id)
      {
         $result= $this->db->delete("categories",array("cid"=>$id));
         return $result;
      }

      public function getCategori($id)
      {
          return $this->db->select("*")->from("categories")->where("cid",$id)->get()->row();
      }

      public function updateCategori($data,$id)
      {
        return $this->db->where("cid",$id)->update("categories",$data);
     }
  }

?>