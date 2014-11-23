<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$data = array();
		$data['content'] = $this->load->view('home',$data,true);
		
		$this->draw_page($data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */