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
		$this->load->view('adminDoEmployee');
	}
	function doAdd()
	{
		//$code = $this->employee->returnorderSupplies();
		//$code = $code+1;
		//$this->employee->setSuppliesId($code);
		$this->Employee->setEmpUserName($this->input->post('empUserName'));
		$this->Employee->setEmpPassword($this->input->post('empPassword'));
		$this->Employee->setEmpName($this->input->post('empName'));
		$this->Employee->setEmpLastname($this->input->post('empLastname'));
		$this->Employee->setEmpIdCard($this->input->post('empIdCard'));
		$this->Employee->setEmpAddress($this->input->post('empAddress'));
		$this->Employee->setEmpBirthDay($this->input->post('empBirthDay'));
		$this->Employee->setEmpStatus($this->input->post('empStatus'));
							
		$this->Employee->addEmployee();
		$this->index();
	}
	 function checkUser(){
	 $empUserName = $this->input->post('empUserName');
	$data = $this->Employee->checkUserName($empUserName);
	if($data == TRUE){
		echo $empUserName;
	}else if($data == FALSE){

		return FALSE;	
	}
 	}

}

?>