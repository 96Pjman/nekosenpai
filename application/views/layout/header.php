<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en">
<!-- Copied from https://2code.info/demo/html/ask-me-html/login.html by Cyotek WebCopy 1.6.0.559, 12 February 2019, 10:35:54 --> <!--<![endif]-->
<head>
<?php 

if(isset($_SESSION['user_id'])){

	redirect('index.php/home/panel');
				
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- custom Style -->

	
	<!-- Skins -->
	<link rel="stylesheet" href="<?= base_url('assets/') ;?>css/skins/green.css">
	
	<!-- Responsive Style -->
	<link rel="stylesheet" href="<?= base_url('assets/') ;?>css/responsive.css">
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?= base_url('assets/') ;?>images/nekologotab.png">
	<link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet"> 


  

	
  
</head>
<body style="background-image:url('<?= base_url('assets/') ;?>/images/nekogirl2.png');
							background-position: inherit;
							background-attachment: fixed;
							background-repeat: no-repeat;
							background-size: 1400px; ">
	

            <div class="loader"><div class="loader_html"></div></div>
              <div id="wrap" class="grid_1200">
	
	
	
	
	
	
<div class="panel-pop" id="lost-password">
	<h2>Lost Password<i class="icon-remove"></i></h2>
		<div class="form-style form-style-3">
			<p>Lost your password? Please enter your username and email address. You will receive a link to create a new password via email.</p>
			<form method="post"  action="<?= base_url('index.php/home/forgot_pswd') ?>">
			<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="text" placeholder=" Email" name="u_mail" onfocus="if (this.value == 'Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email';}">
										<i class="icon-user"></i>
                                    </p>
                                    <?php echo form_error('u_mail'); ?>
									<p class="login-password">
										<input type="text" placeholder="Username" name="u_name" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
										<i class="icon-user"></i>
										
									</p>
									<?php echo form_error('u_name'); ?>
								</div>
				<p class="form-submit">
					<input type="submit" value="Reset Password" class=" button color small ">
				</p>
			</form>		
		</div>
	</div><!-- End lost-password -->
		
	<div class="breadcrumbs" style=" height:190px;background-image:url('<?= base_url('assets/') ;?>/images/logoback2.png');
																		background-position:  	5% 15%;
																	  background-attachment: scroll;
																		background-repeat: no-repeat;
																		background-size: 400px;" >		
	</div><!-- End breadcrumbs -->

	<section class="container  " style="margin-bottom:5px;">					
			  	<div class="row ">				
						<div class="col-md-6 alert">
						<?php  if ($error = $this->session->flashdata('error')) { ?> 
                              <div class="alert-message warning" style="width: 95%; margin-left: 12px;">
						        <i class="icon-exclamation-sign"></i>
						        <p> <span> <?php  echo  $error ; unset($_SESSION['error']); ?></span><br>
						       </p>
						    </div>
                            	<?php  } else if($success = $this->session->flashdata('success')) { ?>
                            <div class="alert-message info" style="width: 95%; margin-left: 12px;">
						        <i class="icon-bullhorn"></i>
						        <p> <span> <?php  echo  $success ;    unset($_SESSION['success']); ?> </span><br>
						       </p>
						    </div>
                             <?php } ?>					
					</div>
					<div class="col-md-6 "></div>
				
			 
			</div>
	</section>
		
		
