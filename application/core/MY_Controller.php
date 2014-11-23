<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    
    public function draw_page($data=array()) {
		
		$CI =& get_instance();
		
		$data['header'] =$CI->load->view('construct/header', $data, true);
		$data['navigation'] =$CI->load->view('construct/navigation', $data, true);
		$data['footer'] = $CI->load->view('construct/footer', $data, true);
		
		$CI->load->view('construct/template',$data);
	}
   
}