<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {
function __construct()
 {
	   parent::__construct();
	   $this->checkStatus();
 }

function index(){  	  //// ฟังชั่นในการเรียกใช้งานครั้งแรก 
		$data['loginData'] = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
		$this->load->view('empMain',$data); //// ส่งข้อมูล loginData ที่อยู่ใน session พร้อมกับ loadview ชื่อ home_user	
		
 }
 
 function checkStatus(){ 
	 $session_data = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
	 $status = $session_data['s'];/// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
	 if($status!="emp"){//เช็คค่า $satus ว่าเป็น user หรือไม่ ถ้าไม่ให้ทำตาม Process
		   echo '<script> alert("!!!คุณไม่มีสิทธิในการใช้งานส่วนนี้");
		   	 window.location.assign("'.base_url().'index.php/CheckLogin/redirects"); 
			 </script>';/// ไปยัง contorller CheckLogin ฟังชั่น redirects โดยใช้ Javascript
	 }
  }
  function calDatePayment($date){
	 	$today = date("Y-m-d");   //จุดต้องเปลี่ยน
		

	list($byear, $bmonth, $bday)= explode("-",$date);       //จุดต้องเปลี่ยน
	list($tyear, $tmonth, $tday)= explode("-",$today);                //จุดต้องเปลี่ยน
		
	$mbirthday = mktime(0, 0, 0, $bmonth, $bday, $byear); 
	$mnow = mktime(0, 0, 0, $tmonth, $tday, $tyear );
	
	$mage = ($mnow - $mbirthday);
	
	$u_y=date("Y", $mage)-1970;
	$u_m=date("m",$mage)-1;
	$u_d=date("d",$mage)-1;
	if($u_m<0){
		$data = 'normal'; 
		}
	else if($u_m<=1){
		$data = 'green'; 
		}
	else if($u_m>1){
		$data = 'alert'; 
		}
 	//$data="$u_y ปี $u_m เดือน $u_d วัน";
	return $data;
	
	}
	
	function contantMain(){
		$data['planActive'] = $this->Detail->getTestAll();
			$data['all'] = $this->Detail->getNotActiveAll();
			//$date='2014-7-8';
			for($out=0;$out<count($data['planActive']);$out++){
				for($i=0;$i<count($data['all']);$i++){
					
					if($data['planActive'][$out]['planId']==$data['all'][$i]['planId']){			
						$num=$i;
						//sort($data['all']);
						
						
						unset($data['all'][$num]);
					}else{
						$data['all'][$out]['detailStatus']=NULL;
						$data['all'][$out]['month']='normal';
						
					}	
					$data['planActive'][$out]['month']=$this->calDatePayment($data['planActive'][$out]['rentDate']);
					//$data['planActive'][$out]['calDate']=$this->calDate($data['planActive'][$out]['rentDate']);
					sort($data['all']);	
				}
				
				sort($data['all']);
			}

				$data['result'] = $data['planActive'];
				sort($data['result']);
			for($c=1;$c<count($data['all']);$c++){
				array_push($data['result'],$data['all'][$c]);
				//$data = $this->calDatePayment($data['result'][$c]['rentDate']);
				
			}
			
	//echo $data['result'];
	//var_dump($data['result']);
	//var_dump($this->calDatePayment($data['planActive'][1]['rentDate']));
	
	//$data['result']=$this->calDatePayment($date);

	
	$data['loginData'] = $this->session->userdata('loginData'); /// แรกข้อมูลที่เก็บใน session ชื่อ loginData
 	$this->load->view('empContantMain',$data); //// ส่งข้อมูล loginData ที่อยู่ใน session พร้อมกับ loadview ชื่อ home_user
	}
	
	
}

?>