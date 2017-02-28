<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('AuthModel'));
  }

  function index()
  {

    $this->load->view('login');
  }

  public function userAuthenticate()
  {
    if(isset($_POST['submit'])){
      $username=$this->input->post('username');
      $password=$this->input->post('password');
      $res=$this->AuthModel->authenticate($username,$password);
      if($res==true){
        echo "Login Successful";
      }else{
        echo "Login Failed!";
      }
    }
  }

  public function adminAuthenticate($value='')
  {
    # code...
  }

  public function register()
  {
    $this->load->view('register');
  }


  public function passencrypt($pass)
  {
    $salt='$2y$11$'.substr(md5(uniqid(rand(),true)),0,22);
    return crypt($pass,$salt);
  }

  public function registration()
  {
    if(isset($_POST["register"])){
      $username=$this->input->post('username');
      $password=$this->passencrypt($this->input->post('password'));
      $email=$this->input->post('email');
      $data=array('username'=>$username,'password'=>$password,'email'=>$email);

      $this->AuthModel->register($data);

    }
  }


}
