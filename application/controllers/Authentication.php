<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	function index()
	{
		$data['main_view'] = 'view_signIn';
		$data['config'] = '';

		$this->load->view('templates/include',$data);
	}

	function login_authentication()
	{
		$username = $this->input->post('email-username');
		$password = $this->input->post('password');

		print_r($username);
		print_r("asdasd");
		die;
	}

	function forgot_password()
	{
		$data['main_view'] = 'view_forgotPassword';
		$data['config'] = '';

		$this->load->view('templates/include',$data);
	}

}
