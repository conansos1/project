<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/doshowcss.css"/>
<script type="text/javascript">

			 $("#searchEmployee").click(function(){
			
				   var str = $('#keywordEmployee').val();
				   
		$.post( 
             "<?php echo base_url()?>index.php/doEmployee/searchData",
             { keyword : str },
             function(data) {
                $('#5555').html(data);
             }

          ); 

          
		
      });	
	  
	  
			 $("#delete").click(function(event){
				 event.preventDefault();
				 var a = $(this).attr('href');
				 
				 c = con();
				 if(c==true){
				 $('#load').load(a);
				 }
				 
			 });
</script>
<script>
function con(){
	var c= confirm('คุนต้องการลบหรือไม่');

	
	return c;
	
}

</script>

<div class="form-wrapper cf" id="form1" name="form1" >
<center><h2>ข้อมูลรายชื่อ</h2></center>
<table width="" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td><input type="text" name="keywordEmployee" id="keywordEmployee" placeholder="ค้นหาจาก ชื่อ,นามสกุล,เลขบัตรประชาชน" /></td>
    <td><input type="button" name="searchEmployee" id="searchEmployee" value="ค้นหา"/></td>
    	<td>
       <a href="<?php echo base_url()?>index.php/doEmployee/doAddEmp" class="addEmployee" >
        <img height="80" src="<?php echo base_url()?>img/iconAdd.png" /></a></td>
  </tr>
</table>
</div>
<div class="searchReult" id="5555">
<table class="CSSTableGenerator">

  <tr>
    <td width="">ชื่อ</td>
    <td width="">นามสกุล</td>
    <td width="">รหัสบัตรประชาชน</td>
    <td width="">ที่อยู่</td>
    <td width="">วันเกิด</td>
    <td width="">หมายเลขโทรศัพย์</td>
    <td width="">วันที่เริ่มงาน</td>
    <td width="">สถานะ</td>
    <td width="">แก้ไข</td>
    <td width="">ลบ</td>
  </tr>
  <?php foreach($showAll as $row){?>
  <tr>
    <td><?php echo $row['empName'];?></td>
    <td><?php echo $row['empLastname'];?></td>
    <td><?php echo $row['empIdCard'];?></td>
    <td><?php echo $row['empAddress'];?></td>
    <td><?php echo $row['empBirthDay'];?></td>
    <td><?php echo $row['empTel'];?></td>
    <td><?php echo $row['empDateStart'];?></td>
    <td><?php echo $row['empStatus'];?></td>
    <td><a class="popupEdit" id="edit" name="update" href="<?php echo base_url();?>index.php/doEmployee/upDate/<?php echo $row['empId'];?>" class="submenu" >Edit</a> </td>
    <td><a class="popupLoad" id="delete" name="update"  href="<?php echo base_url()?>index.php/doEmployee/doDelete/<?php echo $row['empId'];?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>
<br/><br/><br/><br/>
</div>
