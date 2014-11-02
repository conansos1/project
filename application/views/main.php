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
		margin-left:85%;
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
	
	.load{
		width:900px;
		height:100%;
		margin-left:18%;
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
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url()?>js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
 <script type="text/javascript">
		$(document).ready(function(){
			 $(".submenu").click(function(event) {
				    event.preventDefault();
                var href = $(this).attr('href');
                $('.load').fadeOut("fast").hide().load( href ).fadeIn('fast');
            });
			
		 });
		$('.popup').fancybox({
			height :	'500',
				width :	'80%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe'
	
	
});

$('.popupLoad').fancybox({
			height :	'500',
				width :	'80%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('.load').load('<?php echo base_url();?>index.php/doEmployee/showAllData');

    }
	
	
});

	    </script>
<link type="text/css" href="<?php echo base_url();?>css/menucss.css" rel="stylesheet"/>


<script>
		setInterval(function() {
		$('.normal').toggleClass('red','addOrRemove')
		},500);
</script>

<style>

	.normal{
		height:30px;
		width:30px;
		margin:5px;
		background-color:#CCC;
		opacity:80;
		float:left;
		display:block;

	}
	.red{
		height:30px;
		width:30px;
		margin:5px;
		background-color:#F00;
		opacity:80;
		float:left;
		display:block;
	}
</style>
</head>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div class="header"><center><h2>Header</h2></center></div>

<div class="wrapper">
  <nav class="vertical">
    <ul>
      <li>
        <label for="home">Home</label>
        <input type="radio" name="verticalMenu" id="home" />
        <div>
          <ul>
            <li><a href="<?php echo base_url();?>index.php/" title="home">Index</a></li>
          </ul>
        </div>
      </li>
      <li>
        <label for="blog">Employee</label>
        <input type="radio" name="verticalMenu" id="blog" />
        <div>
          <ul>
            <li><a href="<?php echo base_url();?>index.php/doEmployee/showAllData" class="submenu" title="home">แสดงข้อมูลพนักงาน</a></li>
            <li><a href="<?php echo base_url()?>index.php/doEmployee/doAddEmp" class="popup" title="home">เพิ่มพนักงาน</a></li>
          </ul>
        </div>
      </li>
      <li>
        <label for="work">Report</label>
        <input type="radio" name="verticalMenu" id="work" />
        <div>
          <ul>
            <li><a href="#">Client Login</a></li>
            <li><a href="#">Get Quote</a></li>
            <li><a href="#">Portfolio</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
</div>





<div class="menu">
  <table width="100%" border="1" align="center">
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
</table>
</div>

<div class="load" align="center">

<body>
<table width="400" border="0">
  <tr>
    <td colspan="4" align="center" valign="middle">
    <table width="370" border="1" align="center" >
  <tr align="center">
    <td width="400" height="*"  >
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/J1" ><div class="normal">J1
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/J2" ><div class="normal">J2
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/J3" ><div class="normal">J3
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/J4" ><div class="normal">J4
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/J5" ><div class="normal">J5
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/J6" ><div class="normal">J6
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/J7" ><div class="normal">J7
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/J8" ><div class="normal">J8
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/J9" ><div class="normal">J9
    </div></a>
    </td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><table width="50" border="1" align="center" >
  <tr>
    <td width="40" height="*" align="center" valign="middle">
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/A1" ><div class="normal">A1
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/A2" ><div class="normal">A2
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/A3" ><div class="normal">A3
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/A4" ><div class="normal">A4
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/A5" ><div class="normal">A5
    </div></a>
    </td>
  </tr>
</table>

</td>
    <td><table width="90" border="1" align="center" >
  <tr>
    <td width="80" height="*"align="center" >
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/B1" ><div class="normal">B1
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/C1" ><div class="normal">C1
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/B2" ><div class="normal">B2
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/C2" ><div class="normal">C2
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/B3" ><div class="normal">B3
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/C3" ><div class="normal">C3
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/B4" ><div class="normal">B4
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/C4" ><div class="normal">C4
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/B5" ><div class="normal">B5
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/C5" ><div class="normal">C5
    </div></a>
    </td>
  </tr>
</table></td>
    <td><table width="90" border="1" align="center" >
  <tr>
    <td width="80" height="*" align="center" >
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/D1" ><div class="normal">D1
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/E1" ><div class="normal">E1
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/D2" ><div class="normal">D2
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/E2" ><div class="normal">E2
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/D3" ><div class="normal">D3
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/E3" ><div class="normal">E3
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/D4" ><div class="normal">D4
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/E4" ><div class="normal">E4
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/D5" ><div class="normal">D5
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/E5" ><div class="normal">E5
    </div></a>
    </td>
  </tr>
</table></td>
    <td><table width="50" border="1" align="center" >
  <tr>
    <td width="40" height="*" align="center" >
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/F1" ><div class="normal">F1
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/F2" ><div class="normal">F2
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/F3" ><div class="normal">F3
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/F4" ><div class="normal">F4
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/F5" ><div class="normal">F5
    </div></a>
    </td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><table width="50" border="1" align="center" >
  <tr>
    <td width="40" height="*" align="center">
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/H1" ><div class="normal">H1
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/H2" ><div class="normal">H2
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/H3" ><div class="normal">H3
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/H4" ><div class="normal">H4
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/H5" ><div class="normal">H5
    </div></a>
    </td>
  </tr>
</table></td>
    <td colspan="2" align="center" valign="middle"><h1>P</h1>    </td>
    <td><table width="50" border="1" align="center" >
      <tr>
        <td width="40" height="*" align="center">
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/I1" ><div class="normal">I1
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/I2" ><div class="normal">I2
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/I3" ><div class="normal">I3
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/I4" ><div class="normal">I4
    </div></a>
    <a class="popup" href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/I5" ><div class="normal">I5
    </div></a>
        </td>
        </tr>
      </table>
      
  </tr>
</table></td>
  </tr>
</table>



</div>

</body>
</html>
