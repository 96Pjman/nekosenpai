
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
    .col-title{ font-size: 16px; font-weight: bold;}
        .col-value{ font-size: 14px;padding-top:30px;}
    </style>

	   

</head>
<body style="background-color:#2f3239; " >
<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">	
	<header id="header">
		<section class="container clearfix">
		<div class="logo"><div style=" height:80px ; width:300px;padding:1px; background-size:180px; background-repeat:no-repeat; backgrpond-position:center center;background-image:url('<?= base_url('assets/') ;?>/images/logoback2.png');"></div></div>			
		<nav class="navigation">
				<ul>
				
                  
					<li class="current_page_item"><a href="<?=base_url('index.php/home/panel')?>">Go Back to <i class="icon-home"></i>&nbsp;Cattery </a></li>
					
				</ul>
		</nav>
		</section><!-- End container -->
    </header><!-- End header --> 
    
</div>






<div style="background-image:url('<?=base_url('assets/')?>/images/curious.gif');background-position: 95% 40%;
background-repeat: no-repeat; background-color:#ff6161;">
<section class="container main-content" style="margin-bottom:0px;"   >
	
    <div class="row">      
      <div class="colr-md-12">
      <h1 style="border:0px; padding-bottom:15px; padding-top:50px; border-bottom:2px solid #322d35; color:#322d35;"> Admin Login : Enter Master PASSWORD </h1>
      </div>
    </div>
    <div class="row" style="margin-bottom:10px;">
    <div class="col-md-5 ">
						<?php  if ($error = $this->session->flashdata('error')) { ?> 
                              <div class="alert-message error	" style="width: 95%; margin-left: 12px;">
						        <i class="icon-exclamation-sign"></i>
						        <p> <span> <?php  echo  $error ; unset($_SESSION['error']); ?></span><br>
						       </p>
						    </div>                           
                             <?php } ?>					
					</div>
    </div>
          <div class="row" style="padding-bottom:100px; paffing-left:30px;  padding-top:2 0px; ">
         
              <div class="col-md-5" style=" background-color:#322d35; padding:30px;">
              <form method="post" action="<?= base_url('index.php/home/admin_login_check'); ?>">
								<div >
									<p class="login-text" >
										<input style=" width:100%; color:#322d35; border-color:#322d35;" type="text" placeholder=" Email" value="<?=$_SESSION['user_email']?>" name="u_mail" >
										<i style="color:#322d35;" class="icon-user"></i>
                                    </p>
                                   
									<p class="login-password" >
										<input style="  width:100%; border-color:#322d35; color:#322d35;" type="password" placeholder="Password" name="u_password" >
										<i style="color:#322d35;" class="icon-lock"></i>									
                                    </p>
								</div>
								<p class="form-submit login-submit" >
									<input type="submit" value="Log in" class="button medium dark-blue-button">
								</p>
								
							</form>
              </div><!-- End col-md-6 -->
              <div class="col-md-7">
                  <div >
                  </div>					
              </div><!-- End col-md-3 -->
          </div><!-- End row -->
 
  
  </section>
</div>