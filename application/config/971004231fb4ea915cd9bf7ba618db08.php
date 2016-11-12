<?php
 class 971004231fb4ea915cd9bf7ba618db08 extends CI_Controller
 {
     function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','date'));
		$this->load->library('session');	
        $this->load->model('Admin_model');
		$this->load->model('Imp_model');
	}
function index()
	{
		$this->load->view('Admin/adminlog');
	}
	function checkadmin()
	{
		$adname=$this->input->post('adminuname');
		$adpass=$this->input->post('adminpass');
		echo $adname.$adpass;
		$result2=$this->Admin_model->checkadminlogin($adname,$adpass);
		if($result2==TRUE)
		{	$adname=$result2[0]['admin_name'];
			//echo $adname;
			$aidlog=$this->Admin_model->get_aide($adname);
			//echo $aidlog;
			$this->session->set_userdata('aidlog',$aidlog);
			$adm=$this->Admin_model->get_adname($aidlog);
			//echo $adm;
			$this->Admin_model->updateadminlog_stat($adm);			
			
			redirect('index.php/adminhome');

		}
		else
		{
			redirect('index.php/971004231fb4ea915cd9bf7ba618db08');
		}
		
	}
}
?>