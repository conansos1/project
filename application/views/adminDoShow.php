<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="<?php echo base_url()?>index.php/doEmployee/searchData">
<table width="" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <input type="text" name="keyword" id="keyword" />
    </td>
    <td><input name="submit" type="submit" value="ค้นหา"/></td></form>
    <form id="form1" name="form1" method="post" action="<?php echo base_url()?>index.php/doEmployee/doAddEmp">
    	<td><input name="submit" type="submit" value="เพิ่มพนักงาน"/></td>
	</form>
  </tr>
</table>


<table width="" border="1" cellpadding="0" cellspacing="0" id="8">

  <tr>
    <td width="">id</td>
    <td width="">ชื่อ</td>
    <td width="">นามสกุล</td>
    <td width="">รหัสบัตรประชาชน</td>
    <td width="">ที่อยู่</td>
    <td width="">วันเกิด</td>
    <td width="">หมายเลขโทรศัพย์</td>
    <td width="">สถานะ</td>
    <td width="">แก้ไข</td>
    <td width="">ลบ</td>
  </tr>
  <?php foreach($showAll as $row){?>
  <tr>
    <td><?php echo $row['empId'];?></td>
    <td><?php echo $row['empName'];?></td>
    <td><?php echo $row['empLastname'];?></td>
    <td><?php echo $row['empIdCard'];?></td>
    <td><?php echo $row['empAddress'];?></td>
    <td><?php echo $row['empBirthDay'];?></td>
    <td><?php echo $row['empTel'];?></td>
    <td><?php echo $row['empStatus'];?></td>
    <td><a name="update" href="<?php echo base_url()?>index.php/doEmployee/upDate/<?php echo $row['empId'];?>">แก้ไข</a></td>
    <td><a name="update" href="<?php echo base_url()?>index.php/doEmployee/doDelete/<?php echo $row['empId'];?>">ลบ</a></td>
  </tr>
  <?php } ?>
</table>



</body>
</html>
