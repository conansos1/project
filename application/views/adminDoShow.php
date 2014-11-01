<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><table width="" border="1" cellpadding="0" cellspacing="0" id="8">

  <tr>
    <td width="12">id</td>
    <td width="23">ชื่อ</td>
    <td width="65">นามสกุล</td>
    <td width="131">รหัสบัตรประชาชน</td>
    <td width="50">ที่อยู่</td>
    <td width="51">วันเกิด</td>
    <td width="71">หมายเลขโทรศัพย์</td>
    <td width="71">สถานะ</td>
    <td width="71">แก้ไข</td>
    <td width="71">ลบ</td>
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
