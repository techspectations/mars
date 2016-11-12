<?php

	class Starlog_model extends CI_Model
	{
		function __construct() 
			{
				$this->load->database();
				$this->load->helper('date');
				
			}
			function reg($det)
			{
			$this->db->insert('starlogin',$det);
			}
			function checklog($det1)
			{
				$q=$this->db->get_where('starlogin',$det1);
				return $q->result_array();
			}
			function setlog($sid)
			{
				$s=array('logstatus'=>'1');
				$this->db->where('id',$sid);
				$this->db->update('starlogin',$s);
			}
			function custinsert($name,$en)
			{
				$det=array('sid'=>$en,'name'=>$name);
				$this->db->insert('custlogin',$det);
			}
			function starfetch()
			{
				$det1=array('chatstatus'=>'0','logstatus'=>'1');
				$q=$this->db->get_where('starlogin',$det1);
				return $q->result_array();
			}
			function custfetch($key)
			{
				$det1=array('sid'=>$key);
				$q=$this->db->get_where('custlogin',$det1);
				return $q->result_array();
			}
			function msgcust($key)
			{
				$det1=array('sid'=>$key);
				$q=$this->db->get_where('starchat',$det1);
				return $q->result_array();
			}
			function chatin($sname,$uname,$uid,$msg,$time)
			{
				//date_default_timezone_set("Asia/Calcutta");
				//$date1=date("Y-m-d : H:i:s", time());
				
				$det=array('sid'=>$uid,'mto'=>$sname,'mfrom'=>$uname,'message'=>$msg,'time'=>$time,'readm'=>'1','mread'=>'1');
				$this->db->insert('starchat',$det);
			}
			function msgfetch()
			{
				 $this->db->select('*');
				 //$this->db->from('chat');
				 $this->db->distinct('mfrom');
				 $this->db->where('readm','1');
				 $this->db->group_by('sid');
				 //$this->db->like('mto',);
				 $q=$this->db->get('starchat');
				 return $q->result_array();
			}
			function msgdetfetch($id)
			{
				$this->db->select('*');
				 //$this->db->where('recd','1');
				 $this->db->order_by('id','asc');
				  $this->db->where('sid',$id);
				  // $this->db->like('mto','admin_','after');
				   $q1=$this->db->get('starchat');
				 return $q1->result_array();
				
			}
			function star($logadmin)
			{
				$det1=array('id'=>$logadmin);
				$q=$this->db->get_where('starlogin',$det1);
				return $q->result_array();
			}
			function adminchatsend($id,$name,$msg,$logadmin,$mfrom,$date1)
			{
				$datad=array('sid'=>$id,'mfrom'=>$mfrom,'mto'=>$name,'message'=>$msg,'time'=>$date1,'readm'=>'1','mread'=>'1');
				$this->db->insert('starchat',$datad);
				
			}
			function chatadminlogout($logadmin)
			{
				$data=array('logstatus'=>'0');
				$this->db->where('id',$logadmin);
				$this->db->update('starlogin',$data);
			}
			
	}