<?php
 class Starchat extends CI_Controller
 {
     function __construct()
	{
		parent::__construct();
		$this->load->library('session');	
		$this->load->helper('url');
		$this->load->helper('date');
		//$this->load->model('Signup_model');
		$this->load->library('email');
	}
	function index()
	{
		
		$this->load->view('newschat/newshead');
		$this->load->view('newschat/newscontent');
		$this->load->view('newschat/newsfoot');
	}
}