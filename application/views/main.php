<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Chock Ja Roen Market</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/main.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/helpers/jquery.fancybox-thumbs.css?v=2.1.5"  />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/jquery.fancybox.css?v=2.1.5"/>
<link type="text/css" href="<?php echo base_url();?>css/font.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo base_url();?>css/menucss.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo base_url();?>css/table.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo base_url();?>css/header.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jqueryui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/fancy/helpers/jquery.fancybox-thumbs.js?v=2.1.5"></script>
 <script type="text/javascript">
  
		$(document).ready(function(){
			$('#load').load( "<?php echo base_url()?>index.php/admin/contantMain" );
					 $(".submenu").click(function(event) {
							event.preventDefault();
						var href = $(this).attr('href');
						$('#load').load( href );

            });
var $navList = $('.nav-list');

$navList.on('click', 'li:not(.selected)', function(e){
  $navList.find(".selected").removeClass("selected");
  $(e.currentTarget).addClass("selected");
});

setInterval(function() {
		$('.alert').toggleClass('red','addOrRemove')
		},500);
});
</script>
<script>
$('.pop1').fancybox({
				maxWidth	: 450,
				maxHeight	: 520,
				fitToView	: true,
				width		: '100%',
				height		: '100%',
				autoSize	: false,
				type  : 'iframe',
				afterClose : function() {
					
       		$('#load').load( "/index.php/admin/contantMain" );

    }	
});

$('#pdfpopup').fancybox({
			height :	'100%',
				width :	'40%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('.load').load( "<?php echo base_url()?>index.php/doReport" );

    }	
});

$('.addEmployee').fancybox({
			height :	'100%',
				width :	'40%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('#load').fadeOut("fast").hide().load( "<?php echo base_url()?>index.php/doEmployee/showAllData" ).fadeIn('fast');

    }
});

$('.popupEdit').fancybox({
			height :	'60%',
				width :	'40%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('#load').fadeOut("fast").hide().load( "<?php echo base_url()?>index.php/doEmployee/showAllData" ).fadeIn('fast');

    }
});


</script>

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
	
	#load{
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
		background-image:url("<?php echo base_url();?>img/bg2.jpg");
		background-size:100% 100%;
	background-attachment:fixed;
	background-repeat:no-repeat;
	 	margin-left: 0px;
	margin-top: -10px;
	margin-right: 0px;
	margin-bottom: 0px;

	}

</style>
</head>
<body>

<div class="header"><center>
<div class="wrapper">
  <h1></h1>
  <!--ul.nav-list>li*5>a-->
  <ul class="nav-list">
    <li class="download selected"><a class="submenu" onClick="return false;" href="<?php echo base_url();?>index.php/admin/contantMain">Home</a></li>
    <li class="features"><a class="submenu" onClick="return false;" href="<?php echo base_url();?>index.php/doEmployee/showAllData">Employee</a></li>
    <li class="method"><a class="submenu" onClick="return false;" href="<?php echo base_url();?>index.php/doReport">Report</a></li>
  </ul> 
</div>
</center></div>
<div class="logo" > <img src="<?php echo base_url();?>img/logo.png" width="250px" ></div>

<div class="" id="loginform">
  <table width="14%" border="0" align="center" cellpadding="5" cellspacing="0">
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
<div id="load" align="center">

</div>
</body>
</html>
