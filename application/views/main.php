<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chock Ja Roen Market</title>
<style>
	
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
		margin-bottom:50px;
		min-height:700px;
		margin-left:16%;
		margin-top:55px;
		background-color:#FFF;
		opacity:0.8;
		filter:alpha(opacity=80);
		box-shadow:0px 0px 5px 5px #CCCCCC;
	}
	body{
	background-image:url(<?php echo base_url();?>img/bg2.jpg);
	background-attachment:fixed;
	}
	
</style>
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url()?>js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />

 <script type="text/javascript">
<<<<<<< HEAD
  
=======
 
>>>>>>> 1a7c751c43a9f1f6c4dfa848937d211c39a7b0e0
		$(document).ready(function(){
			$('.load').load( "<?php echo base_url()?>index.php/admin/contantMain" );
			 $(".submenu").click(function(event) {
				    event.preventDefault();
                var href = $(this).attr('href');
                $('.load').load( href );

            });
			var $navList = $('.nav-list');

$navList.on('click', 'li:not(.selected)', function(e){
  $navList.find(".selected").removeClass("selected");
  $(e.currentTarget).addClass("selected");
});
		 });
<<<<<<< HEAD
		 /*
Navigation from YNAB (http://www.youneedabudget.com) made in pure CSS using pseudo elements.


Just for the DEMO

This JS just append the class "selected" to the clicked item.
*/

		 
		
			
	
		$('.popup').fancybox({
			height :	'100%',
				width :	'32%',
=======
		 $( "#settings" ).on( "click", function()
			{
			  $( "#menu" ).fadeToggle( "fast" );
			});
			
		$('.popup').fancybox({
			height :	'100%',
				width :	'40%',
>>>>>>> 1a7c751c43a9f1f6c4dfa848937d211c39a7b0e0
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('.load').load( "<?php echo base_url()?>index.php/admin/contantMain" );

    }	
});

$('.popupLoad').fancybox({
			height :	'110%',
				width :	'100%',
<<<<<<< HEAD
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('.load').load('<?php echo base_url();?>index.php/doEmployee/showAllData');

    }
	});
$('.popupEdit').fancybox({
			height :	'55%',
				width :	'40%',
=======
>>>>>>> 1a7c751c43a9f1f6c4dfa848937d211c39a7b0e0
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('.load').load('<?php echo base_url();?>index.php/doEmployee/showAllData');

    }
	
	
});

	    </script>
<link type="text/css" href="<?php echo base_url();?>css/font.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo base_url();?>css/menucss.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo base_url();?>css/table.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo base_url();?>css/header.css" rel="stylesheet"/>


<script>
		setInterval(function() {
		$('.alert').toggleClass('red','addOrRemove')
		},500);
</script>
<script>
		function alerts(){
			alert('แผงว่าง');
			$('.load').load( "<?php echo base_url()?>index.php/doDetail/viewAdd" );
		}
</script>
<style>
	.base{/*แผงว่าง*/
		height:30px;
		width:30px;
		margin:5px;
		opacity:80;
		float:left;
		display:block;

	}
	.normal{/*แผงว่าง*/
		height:30px;
		width:30px;
		margin:5px;
		background-color:#CCC;
		opacity:80;
		float:left;
		display:block;

	}
	.alert{/*เกิน3เดือน*/
		height:30px;
		width:30px;
		margin:5px;
		background-color:#CCC;
		opacity:80;
		float:left;
		display:block;	
	}
	.green{/*เกิน3เดือน*/
		height:30px;
		width:30px;
		margin:5px;
		background-color:#6F6;
		opacity:80;
		float:left;
		display:block;	
	}
	.red{/*เกิน3เดือน*/
		height:30px;
		width:30px;
		margin:5px;
		color:#000;
		background-color:#F00;
		opacity:80;
		float:left;
		display:block;

	}
</style>
</head>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div class="header"><center>
<<<<<<< HEAD
=======
<div class="logo"> <img src="<?php echo base_url();?>img/logo.png" </div>
</center></div>











>>>>>>> 1a7c751c43a9f1f6c4dfa848937d211c39a7b0e0
<div class="wrapper">
  <h1></h1>
  <!--ul.nav-list>li*5>a-->
  <ul class="nav-list">
    <li class="download selected"><a class="submenu" href="<?php echo base_url();?>index.php/admin/contantMain">Home</a></li>
    <li class="features"><a class="submenu" href="<?php echo base_url();?>index.php/doEmployee/showAllData">Employee</a></li>
    <li class="method"><a class="submenu" href="<?php echo base_url();?>index.php/doReport">Report</a></li>
  </ul> 
</div>
</center></div>
<div class="logo" > <img src="<?php echo base_url();?>img/logo.png" width="250px" ></div>









<<<<<<< HEAD


<div class="" id="loginform">
  <table width="14%" border="0" align="center" cellpadding="5" cellspacing="0">
=======
<div class="CSSTableStatus">
  <table width="100%" border="0" align="center">
>>>>>>> 1a7c751c43a9f1f6c4dfa848937d211c39a7b0e0
          <tbody>
            <tr>
              <td colspan="2" align="center">หน้า admin</td>
            </tr>
            <tr>
              <td width="92" align="center">username</td>
              <td width="203"><?php echo $loginData['u'];	?></td>
            </tr>
            <tr>
              <td align="center">status</td>
              <td><?php echo $loginData['s'];	?></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><a href="<?php echo base_url();?>index.php/home/logout">Logout</a></td>
            </tr>
          </tbody>
</table>
</div>

<div class="load" align="center">

<<<<<<< HEAD
=======
<body>
<br/>
<table width="400" border="0">
  <tr>
    <td colspan="4" align="center" valign="middle">
    <table width="330" border="1" align="center" >
  <tr align="center">
    <td width="300" height="*"  >
       <?php foreach($result as $r){
		 if($r['planZone']=='J'){ ?>
     <a href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/<?php echo $r['planId'] ?>" 
    <?php if($r['month']=='normal'){?> onclick="return alerts();"<?php }
	else{?>  class="popup"<?php }?>
      >
     <div class="<?php echo $r['month']?>" ><?php echo $r['planId'] ?> </div></a>
	 <?php 
	}
	} ?>
    </td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><table width="50" border="1" align="center" >
   
  <tr>
    <td width="40" height="*" align="center" valign="middle"><?php foreach($result as $r){
		 if($r['planZone']=='A'){ ?>
      <a href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/<?php echo $r['planId'] ?>" 
    <?php if($r['month']=='normal'){?> onclick="return alerts();"<?php }
	else{?>  class="popup"<?php }?>
      >
     <div class="<?php echo $r['month']?>" ><?php echo $r['planId'] ?> </div></a>
	 <?php 
	}
	} ?>
    
    </td>
  </tr>
</table>

</td>
    <td><table width="90" border="1" align="center" >
  <tr>
    <td width="80" height="*"align="center" >
       <?php foreach($result as $r){
		 if($r['planZone']=='B'){ ?>
     <a href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/<?php echo $r['planId'] ?>" 
    <?php if($r['month']=='normal'){?> onclick="return alerts();"<?php }
	else{?>  class="popup"<?php }?>
      >
     <div class="<?php echo $r['month']?>" ><?php echo $r['planId'] ?> </div></a>
	 <?php 
	}
	} ?>
    </td>
    <td width="80"align="center" >
     <?php foreach($result as $r){
		 if($r['planZone']=='C'){ ?>
     <a href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/<?php echo $r['planId'] ?>" 
    <?php if($r['month']=='normal'){?> onclick="return alerts();"<?php }
	else{?>  class="popup"<?php }?>
      >
     <div class="<?php echo $r['month']?>" ><?php echo $r['planId'] ?> </div></a>
	 <?php 
	}
	} ?>
    </td>
  </tr>
</table></td>
    <td><table width="90" border="1" align="center" >
  <tr>
    <td width="80" height="*" align="center" >
      <?php foreach($result as $r){
		 if($r['planZone']=='D'){ ?>
     <a href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/<?php echo $r['planId'] ?>" 
    <?php if($r['month']=='normal'){?> onclick="return alerts();"<?php }
	else{?>  class="popup"<?php }?>
      >
     <div class="<?php echo $r['month']?>" ><?php echo $r['planId'] ?> </div></a>
	 <?php 
	}
	} ?>
    </td>
    <td width="80" align="center" >  
	 <?php foreach($result as $r){
		 if($r['planZone']=='E'){ ?>
     <a href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/<?php echo $r['planId'] ?>" 
    <?php if($r['month']=='normal'){?> onclick="return alerts();"<?php }
	else{?>  class="popup"<?php }?>
      >
     <div class="<?php echo $r['month']?>" ><?php echo $r['planId'] ?> </div></a>
	 <?php 
	}
	} ?>
    </td>
  </tr>
</table></td>
    <td><table width="50" border="1" align="center" >
  <tr>
    <td width="40" height="*" align="center" >
       <?php foreach($result as $r){
		 if($r['planZone']=='F'){ ?>
     <a href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/<?php echo $r['planId'] ?>" 
    <?php if($r['month']=='normal'){?> onclick="return alerts();"<?php }
	else{?>  class="popup"<?php }?>
      >
     <div class="<?php echo $r['month']?>" ><?php echo $r['planId'] ?> </div></a>
	 <?php 
	}
	} ?>
    </td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td><table width="50" border="1" align="center" >
  <tr>
    <td width="40" height="*" align="center">
       <?php foreach($result as $r){
		 if($r['planZone']=='G'){ ?>
     <a href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/<?php echo $r['planId'] ?>" 
    <?php if($r['month']=='normal'){?> onclick="return alerts();"<?php }
	else{?>  class="popup"<?php }?>
      >
     <div class="<?php echo $r['month']?>" ><?php echo $r['planId'] ?> </div></a>
	 <?php 
	}
	} ?>
    </td>
  </tr>
</table></td>
    <td colspan="2" align="center" valign="middle"><h1>P</h1>    </td>
    <td><table width="50" border="1" align="center" >
      <tr>
        <td width="40" height="*" align="center">
      <?php foreach($result as $r){
		 if($r['planZone']=='H'){ ?>
     <a href="<?php echo base_url();?>index.php/doDetail/searchDataPlan/<?php echo $r['planId'] ?>" 
    <?php if($r['month']=='normal'){?> onclick="return alerts();"<?php }
	else{?>  class="popup"<?php }?>
      >
     <div class="<?php echo $r['month']?>" ><?php echo $r['planId'] ?> </div></a>
	 <?php 
	}
	} ?>
        </td>
        </tr>
      </table>
      
  </tr>
</table></td>
  </tr>
</table>


>>>>>>> 1a7c751c43a9f1f6c4dfa848937d211c39a7b0e0

</div>

</body>
</html>
