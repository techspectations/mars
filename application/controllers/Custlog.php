<?php
 class Custlog extends CI_Controller
 {
     function __construct()
	{
		parent::__construct();
		$this->load->library('session');	
		$this->load->helper('url');
		$this->load->model('Starlog_model');
		$this->load->library('email');
	}
	function index()
	{
		$this->load->view('newschat/newshead');
		$this->load->view('newschat/starabc');
		$this->load->view('newschat/newsfoot');
	}
	function custin()
	{
		
		$name=$this->input->post('uname');
			$length=22;
		 $en=$this->rand_sha1($length);
		 $df=array('sid'=>$en);
		 $this->session->set_userdata($df);
		 
		 $this->Starlog_model->custinsert($name,$en);
		 redirect('index.php/custlog/incust');
		
	}
	function incust()
	{
		$key=$this->session->userdata('sid');
		//echo $key."hi";
		$data['user']=$this->Starlog_model->custfetch($key);
		$data['dat']=$this->Starlog_model->msgcust($key);
		$data['star']=$this->Starlog_model->starfetch();
		//print_r($data['user']);
		$this->load->view('newschat/newshead');
		$this->load->view('newschat/newschats',$data);
		$this->load->view('newschat/newsfoot');
		
		
	}
	function rand_sha1($length)
	{
		  $max = ceil($length / 40);
		  $random = '';
		  for ($i = 0; $i < $max; $i ++)
			  {
			$random .= sha1(microtime(true).mt_rand(10000,90000));
			}
		  return substr($random, 0, $length);
	}
	function chatsends()
	{
		
		$sname=$this->input->post('snamec');
		$uid=$this->input->post('uidc');
		$msg=$this->input->post('msgc');
		
		$data=$this->Starlog_model->custfetch($uid);
		foreach($data as $vv)
		{
		$uname=$vv['name'];	
		}
		date_default_timezone_set("Asia/Calcutta");
		$date1=date("Y-m-d : H:i:s", time());
		$this->Starlog_model->chatin($sname,$uname,$uid,$msg,$date1);
		 //redirect('index.php/custlog/incust');
	}
	
 }