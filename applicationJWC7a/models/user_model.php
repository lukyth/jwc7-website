<?php

Class User_model extends CI_Model
{
 var $id;
 var $username;
 var $permission;

 function login($username, $password)
 {
   $query = $this->db->get_where('users', array('username' => $username,'password'=>sha1($password)));

   if($query -> num_rows() == 1)
   {

       $result=$query->result();
       $this->id=$result[0]->id;
       $this->username=$result[0]->username;
       $this->permission=$result[0]->permission;
       return true;
   }
   else
   {
     return false;
   }
 }

 function getId(){
   return $this->id;
 }
 function getUsername(){
   return $this->username;
 }
 function getPermission(){
   return $this->permission;
 }
}
?>
