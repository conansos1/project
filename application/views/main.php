<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	.header{
		position:fixed;
		width:100%;
		height:50px;
		z-index:1000;
		margin-top:-55px;
		box-shadow:0px 3px 5px 1px #CCCCCC;	
		
		background: #e6f0a3; /* Old browsers */
background: -moz-linear-gradient(top,  #e6f0a3 0%, #e6f0a3 71%, #d2e638 81%, #d2e638 83%, #d2e638 87%, #c3d825 94%, #c3d825 97%, #dbf043 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e6f0a3), color-stop(71%,#e6f0a3), color-stop(81%,#d2e638), color-stop(83%,#d2e638), color-stop(87%,#d2e638), color-stop(94%,#c3d825), color-stop(97%,#c3d825), color-stop(100%,#dbf043)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #e6f0a3 0%,#e6f0a3 71%,#d2e638 81%,#d2e638 83%,#d2e638 87%,#c3d825 94%,#c3d825 97%,#dbf043 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #e6f0a3 0%,#e6f0a3 71%,#d2e638 81%,#d2e638 83%,#d2e638 87%,#c3d825 94%,#c3d825 97%,#dbf043 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #e6f0a3 0%,#e6f0a3 71%,#d2e638 81%,#d2e638 83%,#d2e638 87%,#c3d825 94%,#c3d825 97%,#dbf043 100%); /* IE10+ */
background: linear-gradient(to bottom,  #e6f0a3 0%,#e6f0a3 71%,#d2e638 81%,#d2e638 83%,#d2e638 87%,#c3d825 94%,#c3d825 97%,#dbf043 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e6f0a3', endColorstr='#dbf043',GradientType=0 ); /* IE6-9 */


	}
	.menu{
		
		position:fixed;
		width:200px;
		height:*;
		z-index:1000;
	}
	.menu table tr th{
		box-shadow:3px 3px 5px 1px #CCCCCC;
		border-radius:5px;
		
		background: #f8ffe8; /* Old browsers */
background: -moz-linear-gradient(top,  #f8ffe8 0%, #e3f5ab 33%, #b7df2d 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f8ffe8), color-stop(33%,#e3f5ab), color-stop(100%,#b7df2d)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #f8ffe8 0%,#e3f5ab 33%,#b7df2d 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #f8ffe8 0%,#e3f5ab 33%,#b7df2d 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #f8ffe8 0%,#e3f5ab 33%,#b7df2d 100%); /* IE10+ */
background: linear-gradient(to bottom,  #f8ffe8 0%,#e3f5ab 33%,#b7df2d 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8ffe8', endColorstr='#b7df2d',GradientType=0 ); /* IE6-9 */

		
	}
	.menu table tr td{
		box-shadow:3px 3px 5px 1px #CCCCCC;
		border-radius:5px;
		
		background: #fefcea; /* Old browsers */
background: -moz-linear-gradient(top,  #fefcea 0%, #f1da36 50%, #f1da36 55%, #fefcea 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fefcea), color-stop(50%,#f1da36), color-stop(55%,#f1da36), color-stop(100%,#fefcea)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #fefcea 0%,#f1da36 50%,#f1da36 55%,#fefcea 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #fefcea 0%,#f1da36 50%,#f1da36 55%,#fefcea 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #fefcea 0%,#f1da36 50%,#f1da36 55%,#fefcea 100%); /* IE10+ */
background: linear-gradient(to bottom,  #fefcea 0%,#f1da36 50%,#f1da36 55%,#fefcea 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefcea', endColorstr='#fefcea',GradientType=0 ); /* IE6-9 */

		
	}
	
	.content{
		width:1000px;
		height:*;
		margin-left:210px;
		margin-top:55px;
		background-color:#FFF;
		opacity:0.8;
		filter:alpha(opacity=80);
		box-shadow:0px 0px 5px 5px #CCCCCC;
	}
	body{
	background-image:url(<?php echo base_url();?>img/bg.png);
	background-attachment:fixed;
	}
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div class="header"><center><h2>Header</h2></center></div>

<div class="menu">
  <table width="100%" border="0" cellspacing="10" cellpadding="5">
    <tr>
      <th>menu</th>
    </tr>
    <tr>
      <td><a href="doEmployee">จัดการข้อมูลพนักงาน</td>
    </tr>
    <tr>
      <td>sup menu</td>
    </tr>
    <tr>
      <td><table width="100%" border="1" align="center">
          <tbody>
            <tr>
              <td colspan="2" align="center">หน้า admin</td>
            </tr>
            <tr>
              <td width="92" align="center">username</td>
              <td width="203"><?php echo $loginData['username'];	?></td>
            </tr>
            <tr>
              <td align="center">status</td>
              <td><?php echo $loginData['status'];	?></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><a href="<?php echo base_url();?>index.php/home/logout">Logout</a></td>
            </tr>
          </tbody>
</table></td>
    </tr>
  </table>
</div>

<div class="content"><center><br><br><br><br><br><br><br><br><br><br><br><br><br><h1>content</h1><br><br><br><br><br><br><br><br><br><br><br><br><br></center>
</div>

</body>
</html>
