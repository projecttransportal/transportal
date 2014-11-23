<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

  function __construct()
  {
    parent::__construct();
	$this->load->model('Project');
  }

  function index()
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
	
	  $project_data = $this->Project->get_data();
	  $data['project_data'] = $project_data;
	  
      $this->load->view('admin/home_view', $data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('admin/login', 'refresh');
	}
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('admin/home', 'refresh');
  }


}

?>