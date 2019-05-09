<?php
   
   class  LoginOperation_model extends CI_Model 
   {
       function checkAdmin($username,$password){
           //check admin user from table is there or not
           $result=$this->db->select("*")
            ->from('administrator')
              ->where('admin_tagname',$username)
               ->where('password',$password)
                ->get()
                 ->row();

          if(count($result)>0)
          {
              return $result;
          }

          return false;
       }

   }

?>