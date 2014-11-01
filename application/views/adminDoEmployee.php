
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.10.2.min.js"></script>
   	<script type="text/javascript">
$( document ).ready(function() {
        
 $("#Add").click(function(event){
	 var elem = document.getElementsByClassName("checkInput");
	 var sum = 0;
  	for (var i = 0; i < elems.length; ++i) {
    if (typeof elems[i].value !== "undefined") {
		 
		  sum += 1;
		  alert(sum);
      }
    }
        		 $.post( 
             "<?php echo base_url()?>index.php/doEmployee/doAdd",
          		{empUserName: $("#empUserName").val(),
			 	 empPassword:$("#empPassword").val(),
				 empName: $("#empName").val(),
				 empLastname: $("#empLastname").val(),
				 empIdCard: $("#empIdCard").val(),
				 empAddress: $("#empAddress").val(),
			  	 empBirthDay:$("#empBirthDay").val(),
				 empStatus: $("#empStatus").val()
			  },
             function(data) {
                $('div.bodys').html(data);
				alert("สมัคสมาชิกสำเร็จ");
             }
          ); 
	    });
});
 $("#empBirthDay").datepicker({dateFormat: 'dd-M-yy'});

	  </script>
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
	  	
   
	    </script>		
  <div class="sss">
<table width="" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="30%" height="35" align="left">Username</td>
    <td width="70%"><input class="checkInput" type="text" name="empUserName" id="empUserName" /> <input class="checkInput" type="text" name="usernamess" id="usernamess" /> <div class="result"></div></td>
  </tr>
  <tr>
    <td height="35" align="left">Password</td>
    <td><input class="checkInput" type="password" name="empPassword" id="empPassword" /></td>
  </tr>
  <tr>
    <td height="35" align="left">re-Password</td>
    <td><input class="checkInput" type="password" name="empPassword2" id="empPassword2" /><div class="resultPass"></div></td>
  </tr>
  <tr>
    <td height="34" align="left">ชื่อ</td>
    <td><input class="checkInput" type="text" name="empName" id="empName" />    </tr>
  <tr>
    <td height="40">นามสกุล</td>
    <td><input class="checkInput" type="text" name="empLastname" id="empLastname" /></td>
  </tr>
  <tr>
    <td height="40">รหัสบัตรประชาชน</td>
    <td><input class="checkInput" type="text" name="empIdCard" id="empIdCard" /></td>
  </tr>
  <tr>
    <td height="40">ทีอยู่</td>
    <td><textarea class="checkInput" name="empAddress" id="empAddress" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td height="">วันเกิด</td>
    <td><input class="checkInput" type="date" name="empBirthDay" id="empBirthDay" /></td>
  </tr>
  <tr>
    <td height="">เบอร์โทรศัพ</td>
    <td><input class="checkInput" type="date" name="empTel" id="empTel" value="<?php echo $row['empTel']?>" /></td>
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
    <td><input type="button" name="Add" id="Add" value="เพิ่มข้อมูลผู้ขายสินค้า"  /></td>
  </tr>
</table>
</div>
  <div class="bodys">
  
  </div>
