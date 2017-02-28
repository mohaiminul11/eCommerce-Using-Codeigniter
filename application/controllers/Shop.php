<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data=array();
    $data['main_content']=$this->load->view('site/home', $data,true);
    $this->load->view('site/master', $data);
  }

}
