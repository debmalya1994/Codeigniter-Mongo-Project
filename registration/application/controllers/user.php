<?php

class user extends CI_Controller
{
	public function __construct(){
		parent::__construct();

		if(!isset($_SESSION['user_logged'])){

			$this->session->set_flashdata('error','please login to view this page');
			redirect("auth/login");	
		}
	}
	public function profile()
	{
		$this->load->view('profile');
	}
}