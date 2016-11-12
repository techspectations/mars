<?php
 class Starchatmsg extends CI_Controller
 {
     function __construct()
	{
		parent::__construct();
		$this->load->library('session');	
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->model('Starlog_model');
		$this->load->library('email');
	}
	function index()
	{
		$key=$this->session->userdata('sid');
		echo $key;
		$data['user']=$this->Starlog_model->custfetch($key);
		$data['dat']=$this->Starlog_model->msgcust($key);
		$data['star']=$this->Starlog_model->starfetch();
		//print_r($data['user']);
		$this->load->view('newschat/newshead');
		$this->load->view('newschat/newschats',$data);
		$this->load->view('newschat/newsfoot');
	}
	function chatsend()
	{
		$sname=$this->input->post('snamec');
		$uid=$this->input->post('uidc');
		$data=$this->Starlog_model->custfetch($uid);
		foreach($data as $vv)
		{
		$uname=$vv['name'];	
		}
		$msg=$this->input->post('msgc');
		$time=$this->date('y-m-d H:i:s:',strtotime('now'));
		$this->Starlog_model->chatin($sname,$uname,$uid,$msg,$time);
		 //redirect('index.php/custlog/incust');
	}
}