
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.10.2.min.js"></script>
   	<script type="text/javascript">
 $("#empBirthDay").datepicker({dateFormat: 'dd-M-yy'});

	  </script>
 <!--#############################################################################################################-->
  <form action="<?php echo base_url()?>index.php/doEmployee/doUpdate" method="post">
  <?php foreach($update as $row){?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td height="34" align="left">ชื่อ</td>
    <td><input class="checkInput" type="text" name="empName" id="empName" value="<?php echo $row['empName']?>"; />     </tr>
  <tr>
    <td height="40">นามสกุล</td>
    <td><input class="checkInput" type="text" name="empLastname" id="empLastname" value="<?php echo $row['empLastname']?>" /></td>
  </tr>
  <tr>
    <td height="40">รหัสบัตรประชาชน</td>
    <td><input class="checkInput" type="text" name="empIdCard" id="empIdCard" value="<?php echo $row['empIdCard']?>" /></td>
  </tr>
  <tr>
    <td height="40">ทีอยู่</td>
    <td><textarea class="checkInput" name="empAddress" id="empAddress" cols="45" rows="5" value="<?php echo $row['empAddress']?>"> </textarea></td>
  </tr>
  <tr>
    <td height="40">วันเกิด</td>
    <td><input class="checkInput" type="date" name="empBirthDay" id="empBirthDay" value="<?php echo $row['empBirthDay']?>" /></td>
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
    <td><input type="submit" name="Add" id="Add" value="แก้ไขข้อมูลพนักงาน"  />
    <input  type="hidden" name="empId" id="empId" value="<?php echo $row['empId']?>"; /></td>
  </tr>
</table><?php } ?>
</form>
