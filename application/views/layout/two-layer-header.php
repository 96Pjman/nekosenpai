

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en">
<!-- Copied from https://2code.info/demo/html/ask-me-html/index.html by Cyotek WebCopy 1.6.0.559, 12 February 2019, 10:35:54 --> <!--<![endif]-->
<head>
<?php 

if(!isset($_SESSION['user_id'])){

	redirect(base_url());
				
			}
	
?>
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


</head>

<body  class="yellow_pattern" style="background-image:url('<?= base_url('assets/') ;?>/images/nekogirl.png');">

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">
	
	<div class="login-panel">
		<section class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="user-profile">
						<div class="col-md-12">
                        <div class="page-content">
						<?php foreach ($stats as $udata) {?>
								<h2>User Profile : <?php echo $udata->user_first_name." ".$udata->user_last_name; ?></h2>
								<div class="reg-profile reg-profile-4" style="background-image:url('<?=base_url('assets/')?>/images/proimages/<?=$udata->user_profile_img?>'); background-size:200px;"></div>
								<div class="ul_list ul_list-icon-ok profile_list  ">
									<ul>
										<li><i class=""></i>Gender : <span> <?php echo $udata->user_gender; ?> </span></li>
										<li><i class=""></i>Username : <span> <?php echo $udata->user_name; ?> </span></li>
										<li><i class=""></i>E-Mail : <span> <?php echo $_SESSION['user_email']; ?> </span></li>
									
										<li><i class=""></i>Lives in : <span> <?php echo $udata->user_city.",".$udata->user_state.",".$udata->user_country; ?> </span></li>
									</ul>
								</div>
								<div class="clearfix"><a href="<?= base_url('index.php/home/user_profile') ?>" class="button small green-button profile-edit"><i class="icon-pencil"></i> Edit Profile</a></div>
						<?php }?>
							</div>
						</div><!-- End col-md-12 -->
					
					</div>
				</div><!-- End col-md-6 -->
				<div class="col-md-6">
                <div class="col-md-12">
							<div class="page-content page-content-user-profile">
								<div class="user-profile-widget">
									<h2>User Stats</h2>
									<div class="ul_list ul_list-icon-ok">
									<?php foreach ($stats as $stat) {?>
										<ul>
											<li><i class="icon-question-sign"></i><a>Questions Asked<span> ( <span><?php echo $stat->ques_asked; ?></span> ) </span></a></li>
											<li><i class="icon-comment"></i><a >Answers<span> ( <span><?php echo $stat->ques_answered; ?></span> ) </span></a></li>
											<li><i class="icon-star"></i><a>Favorite Questions<span> ( <span><?php echo $stat->ques_bookmarked; ?></span> ) </span></a></li>
											<li><i class="icon-heart"></i><a >Points<span> ( <span><?php echo $stat->user_points; ?></span> ) </span></a></li>
											<li><i class="icon-asterisk"></i><a>Best Answers<span> ( <span><?php echo $stat->best_answers; ?></span> ) </span></a></li>
										</ul>
									<?php }?>
									</div>
								</div><!-- End user-profile-widget -->
							</div><!-- End page-content -->
						</div><!-- End col-md-12 -->
				</div><!-- End col-md-6 -->
			</div>
		</section>
	</div><!-- End login-panel -->
	

	
	
	
	<div id="header-top">
		<section class="container clearfix">
			
			<nav class="header-top-nav">
				<ul>
				    
					<li><a href="javascript:void();"><i class="icon-envelope"></i><?php echo $_SESSION['user_email']; ?></a></li>
					<li><a href="javascript:void();" id="login-panel"><i class="icon-info"></i>View Profile </a></li>
					<li><a href="<?= base_url('index.php/home/logout?uid=').$_SESSION['user_id']; ?>" id="login-panel"><i class="icon-signout"></i>Logout </a></li>
				</ul>
			</nav>
		</section><!-- End container -->
	</div><!-- End header-top -->



	<header id="header">
		<section class="container clearfix">
		<div class="logo"><div style=" height:80px ; width:300px;padding:1px; background-size:180px; background-repeat:no-repeat; backgrpond-position:center center;background-image:url('<?= base_url('assets/') ;?>/images/logoback2.png');"></div></div>
			<nav class="navigation">
				<ul>
					<li class="current_page_item"><a href="<?= base_url('index.php/home') ?>"><i class="icon-home"></i> &nbsp;Cattery</a>
						
					</li>
					<li class="ask_question"><a href="<?= base_url('index.php/home/ask_question') ?>"> <i class="icon-file-alt"></i>&nbsp; Ask</a></li>
					<li class="ask_question"><a href="<?= base_url('index.php/home/answer') ?>"> <i class="icon-pencil"></i>&nbsp; Timeline </a></li>					
					
					
				</ul>
			</nav>
		</section><!-- End container -->
	</header><!-- End header -->


<!-------------------------------- End TOP header ----------------------------------------->

