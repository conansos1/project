<?php 
/*
Controller doEmployee
สร้างโดย นาย หฤษฏ์ สุริยะโชติ
สร้างเมื่อ 28/10/2557
อัพเดทเมื่อ 28/10/2557

function ทั้งหมด
doAdd :: เพิ่มพนักงาน
*/
class doEmployee extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();  // เชื่อมต่อ DB
		$this->load->model('Employee');

	}
	function index()
	{	
		$this->load->view('main');
		//$this->load->view('adminDoShow');
	}
	function doAddEmp()
	{
		$this->load->view('adminDoEmployee');
	}
	function doAdd()
	{
		//$code = $this->employee->returnorderSupplies();
		//$code = $code+1;
		//$this->employee->setSuppliesId($code);
		$this->Employee->setEmpUserName($this->input->post('empUsername'));
		MD5($this->Employee->setEmpPassword($this->input->post('empPassword')));
		$this->Employee->setEmpName($this->input->post('empName'));
		$this->Employee->setEmpLastname($this->input->post('empLastname'));
		$this->Employee->setEmpIdCard($this->input->post('empIdCard'));
		$this->Employee->setEmpAddress($this->input->post('empAddress'));
		$this->Employee->setEmpBirthDay($this->input->post('empBirthDay'));
		$this->Employee->setEmpTel($this->input->post('empTel'));
		$this->Employee->setEmpDateStart(date('Y-m-d'));
		
		$this->Employee->setEmpStatus($this->input->post('empStatus'));
		$result = $this->Employee->addEmployee();
		if($result){
		echo "<script>
		alert('ทำรายการชำระสำเร็จ');
		parent.jQuery.fancybox.close();</script>";
		}
		else{
		echo "<script>
		alert('ทำรายการชำระสำเร็จ');
		parent.jQuery.fancybox.close();</script>";
		}
		echo "<script>parent.jQuery.fancybox.close();</script>";
	}
	 function checkUser(){
	$empUserName = $this->input->post('username');
	$data = $this->Employee->checkUserName($empUserName);
	if($data == TRUE){
		echo 0;
	}else if($data == FALSE){
		echo 1;	
	}
 	}
	function showAllData(){
		$data['showAll'] = $this->Employee->showAllData();
		$this->load->view('adminDoShow',$data);
	}
	function upDate($empId){
		$data['update']= $this->Employee->updateEmp($empId);
		$this->load->view('adminDoUpdate',$data);
		}
	function doUpdate()
	{
		$this->Employee->setEmpId($this->input->post('empId'));
		$this->Employee->setEmpName($this->input->post('empName'));
		$this->Employee->setEmpLastname($this->input->post('empLastname'));
		$this->Employee->setEmpIdCard($this->input->post('empIdCard'));
		$this->Employee->setEmpAddress($this->input->post('empAddress'));
		$this->Employee->setEmpBirthDay($this->input->post('empBirthDay'));
		$this->Employee->setEmpStatus($this->input->post('empStatus'));
		$this->Employee->setEmpTel($this->input->post('empTel'));
							
		$result =$this->Employee->upDateEmployee();
		if($result){
		echo "<script>
		alert('ทำรายการชำระสำเร็จ');
		parent.jQuery.fancybox.close();</script>";
		}
		else{
		echo "<script>
		alert('ทำรายการชำระสำเร็จ');
		parent.jQuery.fancybox.close();</script>";
		}
		echo "<script>parent.jQuery.fancybox.close();</script>";
	}
	function doDelete($empId)
	{    
		$result = $this->Employee->delete($empId);
		if($result){
		echo "<script>
		alert('ทำรายการชำระสำเร็จ');
		parent.jQuery.fancybox.close();</script>";
		}
		$data['showAll'] = $this->Employee->showAllData();
		$this->load->view('adminDoShow',$data);
	}
	function searchData(){
		$keyword = $this->input->post('keyword');
        $data['showAll'] = $this->Employee->searchData($keyword);
        $this->load->view('adminDoShowResult',$data);
	}
}

?>