<?php 
class Employee extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $empId ; ######  pk พนักงาน  ######
    var $empUserName ; ######  ชื่อเข้าใช้งาน  ######
    var $empPassword ; ######  รหัสผ่านพนักงาน  ######
    var $empName ; ######  ชื่อพนักงาน  ######
    var $empLastname ; ######  นามสกุลพนักงาน  ######
    var $empIdCard ; ######  รหัสบัตรประชาชน  ######
    var $empAddress ; ######  ที่อยู่พนักงาน  ######
    var $empBirthDay ; ######  วันเกิดพนักงาน  ######
    var $empStatus ; ######  ตำแหน่ง  ######
    var $empDataStatus ; ######  สถานะข้อมูล  ######
###### End Attribute  ###### 

 ###### SET : $empId ######
    function setEmpId($empId){
        $this->empId = $empId; 
     }
###### End SET : $empId ###### 


###### GET : $empId ######
    function getEmpId(){
        return $this->empId; 
     }
###### End GET : $empId ###### 


 ###### SET : $empUserName ######
    function setEmpUserName($empUserName){
        $this->empUserName = $empUserName; 
     }
###### End SET : $empUserName ###### 


###### GET : $empUserName ######
    function getEmpUserName(){
        return $this->empUserName; 
     }
###### End GET : $empUserName ###### 


 ###### SET : $empPassword ######
    function setEmpPassword($empPassword){
        $this->empPassword = $empPassword; 
     }
###### End SET : $empPassword ###### 


###### GET : $empPassword ######
    function getEmpPassword(){
        return $this->empPassword; 
     }
###### End GET : $empPassword ###### 


 ###### SET : $empName ######
    function setEmpName($empName){
        $this->empName = $empName; 
     }
###### End SET : $empName ###### 


###### GET : $empName ######
    function getEmpName(){
        return $this->empName; 
     }
###### End GET : $empName ###### 


 ###### SET : $empLastname ######
    function setEmpLastname($empLastname){
        $this->empLastname = $empLastname; 
     }
###### End SET : $empLastname ###### 


###### GET : $empLastname ######
    function getEmpLastname(){
        return $this->empLastname; 
     }
###### End GET : $empLastname ###### 


 ###### SET : $empIdCard ######
    function setEmpIdCard($empIdCard){
        $this->empIdCard = $empIdCard; 
     }
###### End SET : $empIdCard ###### 


###### GET : $empIdCard ######
    function getEmpIdCard(){
        return $this->empIdCard; 
     }
###### End GET : $empIdCard ###### 


 ###### SET : $empAddress ######
    function setEmpAddress($empAddress){
        $this->empAddress = $empAddress; 
     }
###### End SET : $empAddress ###### 


###### GET : $empAddress ######
    function getEmpAddress(){
        return $this->empAddress; 
     }
###### End GET : $empAddress ###### 


 ###### SET : $empBirthDay ######
    function setEmpBirthDay($empBirthDay){
        $this->empBirthDay = $empBirthDay; 
     }
###### End SET : $empBirthDay ###### 


###### GET : $empBirthDay ######
    function getEmpBirthDay(){
        return $this->empBirthDay; 
     }
###### End GET : $empBirthDay ###### 


 ###### SET : $empStatus ######
    function setEmpStatus($empStatus){
        $this->empStatus = $empStatus; 
     }
###### End SET : $empStatus ###### 


###### GET : $empStatus ######
    function getEmpStatus(){
        return $this->empStatus; 
     }
###### End GET : $empStatus ###### 


 ###### SET : $empDataStatus ######
    function setEmpDataStatus($empDataStatus){
        $this->empDataStatus = $empDataStatus; 
     }
###### End SET : $empDataStatus ###### 


###### GET : $empDataStatus ######
    function getEmpDataStatus(){
        return $this->empDataStatus; 
     }
###### End GET : $empDataStatus ######

 ###### SET : $empDataStatus ######
    function setEmpTel($empTel){
        $this->empTel = $empTel; 
     }
###### End SET : $empDataStatus ###### 


###### GET : $empDataStatus ######
    function getEmpTel(){
        return $this->empTel; 
     }
###### End GET : $empDataStatus ###### 



######################## function login #############################
function login()
 {
   $this -> db -> select('*');  						###########
   $this -> db -> from('tblEmployee'); 						 ########### เช็คข้อมูลใน DB 
   $this -> db -> where('empUserName',$this->getEmpUserName()); ###########
   $this -> db -> where('empPassword', MD5($this->getEmpPassword())); ###########
   $this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

   $query = $this -> db -> get()->result_array(); ##############  สั่งดึงข้อมูลตามเงื่อนไข

   if($query)  ############  เมื่อมีข้อมูล 1 record 
   {
     return $query; ############# ส่งค้าที่ดึงได้กลับ
   }
   else ########### เมื่อไม่ตรงตามเงื่อนไข
   {
		  return FALSE;  ############# ส่งค้า FALSE กลับ

   }
 }
 ######################## end function login #############################
 
########################funtion ######################
function addEmployee()
	{
		$data = array(
					   'empUsername' => $this->getEmpUserName(),
					   'empPassword' => MD5($this->getEmpPassword()),
					   'empName' => $this->getEmpName(),
					   'empLastname' => $this->getEmpLastname(),
					   'empIdCard' => $this->getEmpIdCard(),
					   'empAddress' => $this->getEmpAddress(),
					   'empBirthDay' => $this->getEmpBirthDay(),
					   'empTel' => $this->getEmpTel(),
					   'empStatus' => $this->getEmpStatus()
					);
			$this->db->insert('tblEmployee',$data);
	}
	function checkUserName($empUserName){
		$data = array('empUserName'=> $empUserName);
		$datas = $this->db->get_where('tblEmployee',$data,1)->result_array();
		$i = count($datas);
		if($i==1){
			return false;
		}else if($i==0){
			return $empUserName;
		}
	
	}
	function showAllData(){
		$query = $this->db->get('tblEmployee')->result_array();
		return $query;
	}
	function updateEmp($empId)
	{
		$this->db->where('tblEmployee.empId', $empId);
		$query = $this->db->get('tblEmployee')->result_array();
		return $query;
	}
	function upDateEmployee()
	{
		$data = array(
						'empId' => $this->getEmpId(),
					   'empName' => $this->getEmpName(),
					   'empLastname' => $this->getEmpLastname(),
					   'empIdCard' => $this->getEmpIdCard(),
					   'empAddress' => $this->getEmpAddress(),
					   'empBirthDay' => $this->getEmpBirthDay(),
					   'empTel' => $this->getEmpTel(),
					   'empStatus' => $this->getEmpStatus()
					);
			$this->db->where('tblEmployee.empId',$this->getEmpId());
			$this->db->update('tblEmployee',$data);
	}
	function delete($empId)
	{
	$this->db->from('tblEmployee');
	$this->db->where('tblEmployee.empId',$empId);
	if	($this->db->delete())
		{
		echo "";
		}
	else
		{
		echo "";
		}
	}
	function searchData($keyword)
	{
		$this->db->like('tblEmployee.empName',$keyword);
		$this->db->or_like('tblEmployee.empLastname',$keyword);
		$this->db->or_like('tblEmployee.empIdCard',$keyword);
		$query  =  $this->db->get('tblEmployee')->result_array();
		return $query;
			
	}

}?>