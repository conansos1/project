<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ล็อกอิน</title>
<style>
.loginf{
	margin-top:5%;
	margin-left:60%;
	width:300px;
	height:*;
	border-radius:12;
	background-image:url(<?php echo base_url();?>img/bg-login.jpg);
	background-size:contain;
}
body{
	background-image:url(<?php echo base_url();?>img/bg2.jpg);
	background-attachment:fixed;
	background-size:cover;
	}
table tr td,th{
	font:
	color:#666;	
}

</style>
 
 
<style> 
    .textbox {
    background: #F1F1F1 url(http://html-generator.weebly.com/files/theme/input-text-40.png) no-repeat;
    background-position: 5px -7px !important;
    padding: 10px 10px 10px 25px;
    width: 150px;
    border: 1px solid #CCC;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
    -webkit-box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
}

.textbox:focus {
    background-color: #FFF;
    border-color: #E8C291;
    outline: none;
    -moz-box-shadow: 0 0 0 1px #e8c291 inset;
    -webkit-box-shadow: 0 0 0 1px #E8C291 inset;
    box-shadow: 0 0 0 1px #E8C291 inset;
}

.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #a6827e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #a6827e;
	box-shadow:inset 0px 1px 0px 0px #a6827e;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #b0753a), color-stop(1, #cc8942));
	background:-moz-linear-gradient(top, #b0753a 5%, #cc8942 100%);
	background:-webkit-linear-gradient(top, #b0753a 5%, #cc8942 100%);
	background:-o-linear-gradient(top, #b0753a 5%, #cc8942 100%);
	background:-ms-linear-gradient(top, #b0753a 5%, #cc8942 100%);
	background:linear-gradient(to bottom, #b0753a 5%, #cc8942 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#b0753a', endColorstr='#cc8942',GradientType=0);
	background-color:#b0753a;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #54381e;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #4d3534;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #cc8942), color-stop(1, #b0753a));
	background:-moz-linear-gradient(top, #cc8942 5%, #b0753a 100%);
	background:-webkit-linear-gradient(top, #cc8942 5%, #b0753a 100%);
	background:-o-linear-gradient(top, #cc8942 5%, #b0753a 100%);
	background:-ms-linear-gradient(top, #cc8942 5%, #b0753a 100%);
	background:linear-gradient(to bottom, #cc8942 5%, #b0753a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#cc8942', endColorstr='#b0753a',GradientType=0);
	background-color:#cc8942;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>	 


</head>
</div>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
		 <div class="loginf">
        <form action="<?php echo base_url();?>index.php/CheckLogin" method="post">
        <br>
        <table  width="40%" border="0" cellspacing="0" cellpadding="0" align="center">
          <tr>
            <th height="47" colspan="2" align="center" valign="middle" nowrap="nowrap" >ลงชื่อเข้าใช้ระบบ</th>
          </tr>
          <tr>
            <td height="59" align="right" nowrap="nowrap"><label for="username">ชื่อผู้ใช้&nbsp;:&nbsp;</label></td>
            <td nowrap="nowrap"><input type="text" size="20" class="textbox" name="username" required="required"/></td>
          </tr>
          <tr>
            <td height="47" align="right" nowrap="nowrap"><label for="password3">รหัสผ่าน&nbsp;:&nbsp;</label></td>
            <td nowrap="nowrap"><input type="password" class="textbox"  size="20" name="password" required="required"/></td>
          </tr>
          <tr>
            <td height="53" nowrap="nowrap">&nbsp;</td>
            <td nowrap="nowrap" id="last"><input type="submit"  class="myButton" value="Login"/>
            <?php echo $error; ?>
            </td>
          </tr>
      </table>
    </form>
    
</body>
</html>