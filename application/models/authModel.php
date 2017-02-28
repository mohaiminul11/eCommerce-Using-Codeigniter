<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function register($data)
  {
    //if username && email does not exist in database then register username
    $this->db->insert('user', $data);
    // $this->db->affected_rows();
    //else send back to register page
  }

  public function authenticate($username,$password)
  {
    $this->db->where('username', $username);
    $query=$this->db->get('user');
    if($query->num_rows()>0){

      $obj=$query->row();
      echo $obj->password."<br>";
      return crypt($password,$obj->password)==$obj->password;
    }else{
      return false;
    }
  }

}
