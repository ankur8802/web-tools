<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {
 

 public function checkdataconn($email,$password)
 {
     $q=$this->db->select()
              ->from('admin')
              ->where('email',$email)
              ->where('password',$password)
              ->get();
              return $q->num_rows();
 }

	


}
