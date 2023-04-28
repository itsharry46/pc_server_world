<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function index()
	{
		$data['main_view'] = 'view_dashboard';
		$data['config'] = '';

		$this->load->view('templates/include',$data);
	}


}
