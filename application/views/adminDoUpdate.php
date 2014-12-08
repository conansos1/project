
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
   	<script type="text/javascript">
 $("#empBirthDay").datepicker({dateFormat: 'dd-M-yy'});

	  </script>
 <!--#############################################################################################################-->
  <form action="<?php echo base_url()?>index.php/doEmployee/doUpdate" method="post">
  <?php foreach($update as $row){?>
<table width="" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td height="" align="left">ชื่อ</td>
    <td><input class="checkInput" type="text" name="empName" id="empName" value="<?php echo $row['empName']?>"; />     </tr>
  <tr>
    <td height="">นามสกุล</td>
    <td><input class="checkInput" type="text" name="empLastname" id="empLastname" value="<?php echo $row['empLastname']?>" /></td>
  </tr>
  <tr>
    <td height="">รหัสบัตรประชาชน</td>
    <td><input class="checkInput" type="text" name="empIdCard" id="empIdCard" value="<?php echo $row['empIdCard']?>" /></td>
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
    <td><input class="checkInput" type="text" name="empTel" id="empTel" value="<?php echo $row['empTel']?>" /></td>
  </tr>
  <tr>
    <td height="">สถานะ</td>
    <td><select class="checkInput" name="empStatus" id="empStatus">
    	<option value="emp">พนักงาน</option>
        <option value="owner">ผู้บริหาร</option>
        </select></td>
  </tr>
  <tr>
    <td height=""></td>
    <td><input class="checkInput" type="hidden" name="empId" id="empId" value="<?php echo $row['empId']?>" />
    <input type="submit" name="Add" id="Add" value="แก้ไขข้อมูลพนักงาน"  /></td>
  </tr>
</table><?php } ?>
</form>

