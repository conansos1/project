
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
 <!--#############################################################################################################-->
<script language="javascript">
	$(document).ready(function() {
		$( "#empUsername" ).focus(function() {
				$( "#empUsername" ).trigger("click");
	});
	$( "#empUsername" ).keyup(function() {
				$( "#empUsername" ).trigger("click");
	});
	$( "#empUsername" ).click(function() {
		 if($(this).val()!=""){
		$.post("<?php echo base_url()?>index.php/doEmployee/checkUser",
						  {
							username:$(this).val()
						  },
						  function(data){
						    if(data==1){
								$('#memberUsernameResult').html("<img src='<?php echo base_url()?>img/x.png' width='25'>");
								$('#memberUsernameC').val($("#empUsername").val());
							}else if(data==0){
								$('#memberUsernameResult').html("<img src='<?php echo base_url()?>img/y.png' width='25'>");
								$('#memberUsernameC').val(0);
							}
						  });
		 }else{
			 $('#memberUsernameResult').html("<img src='<?php echo base_url()?>img/x.png' width='25'>");
			 $('#memberUsernameC').val(0);
		 }
	});
	
	
	
	
	$( "#empPassword" ).focus(function() {
				$( "#empPassword" ).trigger("click");
	});
	$( "#empPassword" ).keyup(function() {
				$( "#empPassword" ).trigger("click");
	});
$( "#empPassword" ).click(function() {
	var value = $(this).val();
if(value!=""){
		 if(value==$( "#memberPasswordC" ).val()){
			 $('#memberPasswordResult').html("<font color='GREEN'>รหัสผ่านสามารถใช้ได้</font>");
			 $('#memberPasswordCheck').val(value);
		 }else{
			 $('#memberPasswordResult').html("<font color='#E40003'>รหัสผ่านไม่ตรงกัน</font>");
			 $('#memberPasswordCheck').val(0);
		 }
}else{
	$('#memberPasswordResult').html("<font color='#E40003'>รหัสผ่านไม่ตรงกัน</font>");
	$('#memberPasswordCheck').val(0);
}
	});
	
$( "#memberPasswordC" ).focus(function() {
				$( "#memberPasswordC" ).trigger("click");
	});
	$( "#memberPasswordC" ).keyup(function() {
				$( "#memberPasswordC" ).trigger("click");
	});
$( "#memberPasswordC" ).click(function() {
	var value = $(this).val();
if(value!=""){
		 if(value==$( "#empPassword" ).val()){
			 $('#memberPasswordResult').html("<font color='GREEN'>รหัสผ่านสามารถใช้ได้</font>");
			 $('#memberPasswordCheck').val(value);
		 }else{
			 $('#memberPasswordResult').html("<font color='#E40003'>รหัสผ่านไม่ตรงกัน</font>");
			 $('#memberPasswordCheck').val(0);
		 }
}else{
	$('#memberPasswordResult').html("<font color='#E40003'>รหัสผ่านไม่ตรงกัน</font>");
	$('#memberPasswordCheck').val(0);
}
	});

	});
 </script>
 <script language="javascript">
function checkForm() 
{ if(!checkID(document.form1.empIdCard.value)) 
 $('#memberIdIDCardResult').html('<font color="red">รหัสประชาชนไม่ถูกต้อง</font>');
else  $('#memberIdIDCardResult').html('<font color="green">รหัสประชาชนถูกต้อง</font>');}
 function checkID(id){ 
		
if(id.length != 13) return false; 
for(i=0, sum=0; i < 12; i++) 
sum += parseFloat(id.charAt(i))*(13-i); if((11-sum%11)%10!=parseFloat(id.charAt(12))) 
return false; return true;}
		function chkSubmit()
	{
			a = document.getElementById("empTel");
			if(a.value*1!=a.value){
				alert('เบอร์โทศัพท์ กรุณากรอกเป็นตัวเลขเท่านั้น');
				return false;
			}else{
				return true;
			}

	}
function checkValue(){
	var num = document.getElementById("empTel").value;
	if(num<0){
		alert('กรุณากรอกเป็นตัวเลขเท่านั้น');
		document.getElementById("empTel").value = 0;
	}else{
				return true;
		}
	
}
 </script>
  <div class="popupLoad">
  <form name="form1" action="<?php echo base_url()?>index.php/doEmployee/doAdd" method="post" onSubmit="return chkSubmit();" >
<table width="" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="30%" height="35" align="left">Username</td>
    <td width="70%"><input name="empUsername" type="text"  required id="empUsername" autocomplete='off' maxlength="8" min="4">
        <a id="memberUsernameResult"></a><input type="hidden" name="memberUsernameC" id="memberUsernameC" value="0"  required></td>
  </tr>
  <tr>
    <td height="35" align="left">Password</td>
    <td><input name="empPassword" type="text"  required id="empPassword" maxlength="16" min="4"></td>
  </tr>
  <tr>
    <td height="35" align="left">re-Password</td>
    <td>
    <input name="memberPasswordC" type="text"  required id="memberPasswordC" maxlength="16">
<a id="memberPasswordResult"></a><input type="hidden" name="memberPasswordCheck" id="memberPasswordCheck"  required></td>
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
    <td><input type="text" name="empIdCard" id="memberIdIDCard" onFocus="checkForm();" onKeyUp="checkForm();" required><a id="memberIdIDCardResult"></a>
    </td>
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
    <td height="35">เบอร์โทรศัพท์</td>
    <td><input name="empTel" type="text" required class="checkInput" id="empTel" onClick="checkValue();" onKeyUp="checkValue();" maxlength="10"></td>
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
