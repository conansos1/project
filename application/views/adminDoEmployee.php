
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
 <!--#############################################################################################################-->
<script type="text/javascript">
		$(document).ready(function(){
	
			 $("#empUserName").keyup(function(event){
        		 $.post( 
             "<?php echo base_url();?>index.php/doEmployee/checkUser",
             { empUserName: $("#empUserName").val() },
          	function(data) { 
			if(data==false){
				$(".result").html("<img src='<?php echo base_url();?>img/x.png' width='50px' height='50px'>"),$("#usernamess").val(null);
			 }else{$("#usernamess").val(data),
			   	$(".result").html("<img src='<?php echo base_url();?>img/y.png' width='50px' height='50px'>"); 
			   }
				
			 }

          ); 
		
      });
		 $("#empPassword , #empPassword2").keyup(function(event){	
			if($("#empPassword").val()==$("#empPassword2").val()){
				
					$('.resultPass').html("<font color='GREEN'>password ใช้ได้</font>");
				}else{
					$('.resultPass').html("<font color='RED'>password ไม่ตรงกัน</font>");
				}
		
     		 });
	  
	     });
	  	
    $("#empBirthDay").datepicker({dateFormat: 'dd-M-yy'});
	    </script>		
  <div class="popupLoad">
  <form action="<?php echo base_url()?>index.php/doEmployee/doAdd" method="post">
<table width="" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="30%" height="35" align="left">Username</td>
    <td width="70%"><input class="checkInput" type="text" name="empUserName" id="empUserName" required="required"/>  
    <div class="result"></div></td>
  </tr>
  <tr>
    <td height="35" align="left">Password</td>
    <td><input class="checkInput" type="password" name="empPassword" id="empPassword" required="required"/></td>
  </tr>
  <tr>
    <td height="35" align="left">re-Password</td>
    <td><input class="checkInput" type="password" name="empPassword2" id="empPassword2" required="required" /><div class="resultPass"></div></td>
  </tr>
  <tr>
    <td height="34" align="left">ชื่อ</td>
    <td><input class="checkInput" type="text" name="empName" id="empName" required="required"/>    </tr>
  <tr>
    <td height="40">นามสกุล</td>
    <td><input class="checkInput" type="text" name="empLastname" id="empLastname" required="required"/></td>
  </tr>
  <tr>
    <td height="40">รหัสบัตรประชาชน</td>
    <td><input class="checkInput" type="text" name="empIdCard" id="empIdCard" required="required"/></td>
  </tr>
  <tr>
    <td height="40">ทีอยู่</td>
    <td><textarea class="checkInput" name="empAddress" id="empAddress" cols="45" rows="5" required="required"></textarea></td>
  </tr>
  <tr>
    <td height="31">วันเกิด</td>
    <td><input class="checkInput" type="date" name="empBirthDay" id="empBirthDay" required="required" /></td>
  </tr>
  <tr>
    <td height="35">เบอร์โทรศัพ</td>
    <td><input class="checkInput" type="text" name="empTel" id="empTel" required="required" /></td>
  </tr>
  <tr>
    <td height="40">สถานะ</td>
    <td><select class="checkInput" name="empStatus" id="empStatus">
    	<option value="emp">พนักงาน</option>
        <option value="owner">ผู้บริหาร</option>
        </select></td>
  </tr>
  <tr>
    <td height="40"></td>
    <td><input type="submit" name="Add" id="Add" value="เพิ่มข้อมูลผู้ขายสินค้า" /></td>
  </tr>
</table>
</form>
</div>
  <div class="bodys">
  
  </div>
