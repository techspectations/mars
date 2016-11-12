<?php
 class Starlog extends CI_Controller
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
		
		$this->load->view('newschat/starlog');
		
	}
	function strareg()
	{
		$name=$this->input->post('name');
		$uname=md5($this->input->post('uname'));
		$pass=md5($this->input->post('pass'));
		$mail=$this->input->post('mail');
		$det=array('name'=>$name,'uname'=>$uname,'password'=>$pass,'email'=>$mail);
		$this->Starlog_model->reg($det);
		redirect('starlog');
	}
	function starcheck()
	{
		$uname=md5($this->input->post('uname'));
		$pass=md5($this->input->post('pass'));
		$det1=array('uname'=>$uname,'password'=>$pass);
		$result['gg']=$this->Starlog_model->checklog($det1);
		if($result)
		{
			foreach($result['gg'] as $g)
			{
			$starid=$g['id'];
			//echo $id;
			}
			$this->Starlog_model->setlog($starid);
			$ee=array('starid'=>$starid);
			$this->session->set_userdata($ee);
			redirect('index.php/starlog/chatroom');
			//echo "success";
		}
	}
	function chatroom()
	{
		$ssid=$this->session->userdata('starid');
		$data['user']=$this->Starlog_model->msgfetch();
		$this->load->view('newschat/chatbox',$data);
		
	}
	function chatfetch()
	{
		$logadmin=$this->session->userdata('starid');
	
		$id=$this->input->post('variable');
		$chat['msg']=$this->Starlog_model->msgdetfetch($id);
		//echo $id."7";
		//print_r($chat['msg']);
		//$chata['msgs']=$this->Chatc_model->msgadfetch($id);
		if($chat['msg']){
		foreach($chat['msg'] as $msgs){
			$from=$msgs['mfrom'];
			$time=$msgs['time'];
			$mssg=$msgs['message'];
			
		echo "<div class='media msg' ><div class='media-body'>";
                        echo "<small class='pull-right time'><i class='fa fa-clock-o'></i>".$time."</small>";
                       echo " <h5 class='media-heading'>".$from."</h5> <small class='col-lg-10'>".$mssg."</small>
		</div><hr/></div><br/>";}
		}
	}
		function starsend()
	{
		$logadmin=$this->session->userdata('starid');
		$id=$this->input->post('uidc');
		$msg=$this->input->post('msgc');
		$sr=$this->Starlog_model->star($logadmin);
		foreach($sr as $re){
			$mfrom=$re['name'];
		}
		$ur=$this->Starlog_model->custfetch($id);
		foreach($ur as $res){
			$name=$res['name'];
		}
		//$mfrom='admin_'.$id;
		date_default_timezone_set("Asia/Calcutta");
		$date1=date("Y-m-d : H:i:s", time());
		//echo $id.'ss';
		//echo $date1.'gg';
		//$logadmin=$this->session->userdata('logadminc');
		//echo $logadmin;
		$this->Starlog_model->adminchatsend($id,$name,$msg,$logadmin,$mfrom,$date1);
		
	
	}
	function starlogout()
	{
		$logadmin=$this->session->userdata('starid');
		
		$this->Starlog_model->chatadminlogout($logadmin);
		redirect('index.php/starlog');
	}
	
}