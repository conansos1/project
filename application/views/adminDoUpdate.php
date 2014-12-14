
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
		function checkEditForm() 
		{ if(!checkID(document.form1.empIdCard.value)) 
		 $('#memberIdIDCardResult').html('<font color="red">รหัสประชาชนไม่ถูกต้อง</font>');
		else  $('#memberIdIDCardResult').html('<font color="green">รหัสประชาชนถูกต้อง</font>');}
		 function checkID(id){ 
				
		if(id.length != 13) return false; 
		for(i=0, sum=0; i < 12; i++) 
		sum += parseFloat(id.charAt(i))*(13-i); if((11-sum%11)%10!=parseFloat(id.charAt(12))) 
		return false; return true;}
		
		function checkValue(){
		var num = document.getElementById("empTel").value;
		if(num<0){
			alert('กรุณากรอกเป็นตัวเลขเท่านั้น');
			document.getElementById("empTel").value = 0;
		}else{
					return true;
			}
		}
		
		function chkSubmit()
	{		var c = false;
	
			a = document.getElementById("empTel");
		if(checkID(document.form1.empIdCard.value)){
			if(a.value*1!=a.value){
				alert('เบอร์โทศัพท์ กรุณากรอกเป็นตัวเลขเท่านั้น');
				c = false;
			}else{
				c = true;
			}
		}else{
			alert('รหัสประชาชนถูกต้อง');
			c = false;
			
			
		}
		
		
		
		return c;

	}
		

	  </script>
 <!--#############################################################################################################-->
  <form name="form1" action="<?php echo base_url()?>index.php/doEmployee/doUpdate" method="post" onSubmit="return chkSubmit();" >
  <?php foreach($update as $row){?>
<table width="" border="0" cellspacing="5" cellpadding="0">

  <tr>
    <td height="" align="left">ชื่อ</td>
    <td><input class="checkInput" type="text" name="empName" id="empName" value="<?php echo $row['empName']?>"; />     </tr>
  <tr>
    <td height="">นามสกุล</td>
    <td><input class="checkInput" type="text" name="empLastname" id="empLastname" value="<?php echo $row['empLastname']?>" /></td>
  </tr>
  <tr>
    <td height="">รหัสบัตรประชาชน</td>
    <td>
    <input type="text" name="empIdCard" id="memberIdIDCard" value="<?php echo $row['empIdCard']?>" 
    onFocus="checkEditForm();" onKeyUp="checkEditForm();" required><b id="memberIdIDCardResult"></b>
    </td>
  </tr>
  <tr>
    <td height="">ทีอยู่</td>
    <td><textarea class="checkInput" name="empAddress" id="empAddress" cols="45" rows="5" > <?php echo $row['empAddress']?></textarea></td>
  </tr>
  <tr>
    <td height="">วันเกิด</td>
    <td><input class="checkInput" type="date" name="empBirthDay" id="empBirthDay" value="<?php echo $row['empBirthDay']?>" /></td>
  </tr>
  <tr>
    <td height="">เบอร์โทรศัพ</td>
    
    <td><input name="empTel" type="text" required class="checkInput" id="empTel" 
    onClick="checkValue();" onKeyUp="checkValue();" value="<?php echo $row['empTel']?>" maxlength="10"></td>
  </tr>
  <tr>
    <td height="">สถานะ</td>
    <td><select class="checkInput" name="empStatus" id="empStatus">
    	<option value="emp" <?php if($row['empStatus']=='emp'){?>selected   <?php }?>>พนักงาน</option>
        <option value="owner"<?php if($row['empStatus']=='owner'){?>selected   <?php }?>>ผู้บริหาร</option>
        </select></td>
  </tr>
  <tr>
    <td height=""></td>
    <td><input class="checkInput" type="hidden" name="empId" id="empId" value="<?php echo $row['empId']?>" />
    <input type="submit" name="Add" id="Add" value="แก้ไขข้อมูลพนักงาน"  /></td>
  </tr>
</table><?php } ?>
</form>

