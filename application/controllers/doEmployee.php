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
		$data['showAll'] = $this->Employee->showAllData();
		$this->load->view('adminDoShow',$data);
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
		$this->Employee->setEmpUserName($this->input->post('empUserName'));
		$this->Employee->setEmpPassword($this->input->post('empPassword'));
		$this->Employee->setEmpName($this->input->post('empName'));
		$this->Employee->setEmpLastname($this->input->post('empLastname'));
		$this->Employee->setEmpIdCard($this->input->post('empIdCard'));
		$this->Employee->setEmpAddress($this->input->post('empAddress'));
		$this->Employee->setEmpBirthDay($this->input->post('empBirthDay'));
		$this->Employee->setEmpStatus($this->input->post('empTel'));
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
		$this->Employee->setEmpName($this->input->post('empName'));
		$this->Employee->setEmpLastname($this->input->post('empLastname'));
		$this->Employee->setEmpIdCard($this->input->post('empIdCard'));
		$this->Employee->setEmpAddress($this->input->post('empAddress'));
		$this->Employee->setEmpBirthDay($this->input->post('empBirthDay'));
		$this->Employee->setEmpStatus($this->input->post('empStatus'));
		$this->Employee->setEmpTel($this->input->post('empTel'));
							
		$this->Employee->upDateEmployee();
		$this->index();
	}
	function doDelete($empId)
	{    
		$this->Employee->delete($empId);
		$this->index();
	}
	function searchData(){
		$keyword = $this->input->post('keyword');
        $data['showAll'] = $this->Employee->searchData($keyword);
        $this->load->view('adminDoShow',$data);
	}

}

?>