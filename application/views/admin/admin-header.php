
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en">
<!-- Copied from https://2code.info/demo/html/ask-me-html/index.html by Cyotek WebCopy 1.6.0.559, 12 February 2019, 10:35:54 --> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>Neko.com</title>
	<meta name="description" content="Ask me Responsive Questions and Answers Template">
	<meta name="author" content="2code.info">
	
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="<?= base_url('assets/') ;?>main-y.css">


	
	<!-- Skins -->
	<link rel="stylesheet" href="<?= base_url('assets/') ;?>css/skins/green.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="<?= base_url('assets/') ;?>css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?= base_url('assets/') ;?>images/nekologotab.png">
	<link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet"> 
<style>
    .col-pd{padding:8px;}
	.col-pd-2{padding-bottom:15px;padding-top:15px;font-size: 15px;}
    .col-title{ font-size: 16px; font-weight: bold;}
        .col-value{ font-size: 14px;padding-top:30px;}
    </style>

	   

</head>
<body style="background-color:#2f3239; " >
<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">	
	<header id="header">
		<section class="container clearfix">			
			<nav class="navigation" style="float:left;">
				<ul>
				
                    <li class="ask_question"><a href="#"> <i class="icon-file-alt"></i>&nbsp; Admin Portal</a></li>
                    <li class="ask_question"><a href="#"> <i class="icon-file-alt"></i>&nbsp; Loged In ID : <?=$_SESSION['user_email']?></a></li>
					<li class="current_page_item"><a href="<?=base_url('index.php/home/admin_logout')?>"> <i class="icon-pencil"></i>&nbsp; Logout </a></li>
					
				</ul>
			</nav>
		</section><!-- End container -->
    </header><!-- End header --> 
    <header id="header">
		<section class="container clearfix">
		<div class="logo"><div style=" height:80px ; width:300px;padding:1px; background-size:180px; background-repeat:no-repeat; backgrpond-position:center center;background-image:url('<?= base_url('assets/') ;?>/images/logoback2.png');"></div></div>
			<nav class="navigation">
				<ul>
					<li class="ask_question"><a href="<?= base_url('index.php/home/admin_site_users') ?>"><i class="icon-home"></i> &nbsp;Site Users</a></li>
					<li class="ask_question"><a href="<?= base_url('index.php/home/admin_unsolvedfeedback') ?>"> <i class="icon-file-alt"></i>&nbsp; Feedbacks</a></li>
                   
                    <li class="ask_question"><a href="<?= base_url('index.php/home/admin_querystats') ?>"> <i class="icon-pencil"></i>&nbsp; Querry Sats</a></li>
				</ul>
			</nav>
		</section><!-- End container -->
    </header><!-- End header --> 






