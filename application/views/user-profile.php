<div class="breadcrumbs">
		<section class="container">
			
		</section><!-- End container -->
	</div><!-- End breadcrumbs -->
	
	<section class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="user-profile">
						<div class="col-md-12">
						<?php  if ($error = $this->session->flashdata('error')) { ?> 
                              <div class="alert-message warning alert" style="width: 95%; margin-left: 15px; margin-bottom:15px;">
						        <i class="icon-exclamation-sign"></i>
						        <p> <span> <?php  echo  $error ; unset($_SESSION['error']); ?></span><br>
						       </p>
							</div>
						<?php } ?>
						<script>

	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
</script>
						<div class="page-content" style="margin-bottom:10px;">
								<h2>Update Profile</h2>
								<?php
								 foreach($stats as $pp){ 
									?>
								<form method="POST" enctype="multipart/form-data" action="<?=base_url('index.php/home/update_profile');?>">
								<div class="row">
								
								
								<div class="col-md-6 col-u-margin ">
									<input class="simple-input-field-4" type="text" name="fname" value="<?=$pp->user_first_name?>">
								</div>
								<div class="col-md-6 col-u-margin">
									<input class="simple-input-field-4" type="text" name="lname" value="<?=$pp->user_last_name?>">
								</div>
								<div class="col-md-6 col-u-margin">
									<input class="simple-input-field-4" type="text" name="uname" value="<?=$pp->user_name?>">
								</div>
								<div class="col-md-6 col-u-margin">
								<span class="styled-select" style="width:95.5%">
								<select name="gender" >
									<option selected  value="<?=$pp->user_gender?>" >update gender from <?=$pp->user_gender?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="Trans">Trans</option>
								</select>
								</span>
								</div>
								
								<div class="col-md-4 col-u-margin">
									<input class="simple-input-field-5" type="text" name="city" value="<?=$pp->user_name?>">
								</div>
								<div class="col-md-4 col-u-margin">
									<input class="simple-input-field-5" type="text" name="state" value="<?=$pp->user_name?>">
								</div>
								<div class="col-md-4 col-u-margin">
									<input class="simple-input-field-5" type="text" name="country" value="<?=$pp->user_name?>">
								</div>

								<div class="col-md-12" style="margin-bottom:10px; margin-top:10px;"><input style="float:right; margin-right:50px;" type="submit" value="Update Porfile" class="button medium dark-blue-button"></div>
								</form>								                         
								<?php } ?>
								</div><!-- end row  -->
								</div><!-- End page-content -->


						<div class="page-content" style="margin-bottom:10px;">
								<h2>Update Profile Image</h2>
								
								
								<form method="POST" enctype="multipart/form-data" action="<?=base_url('index.php/home/update_profile_image');?>">
								<div class="row">
								<div class="col-md-12" style="margin-bottom:25px; margin-top:10px;">									
								<div class="col-md-2">
								<div class="reg-profile reg-profile-2" style="background-image:url('<?=base_url('assets/')?>/images/proimages/<?=$pp->user_profile_img?>'); background-size:120px;"></div>
								</div> 
								<div class="col-md-10" style="padding-top:20px;">
								
									<input required type="file" name="image_file" style="width:90%; border:1px solid #35bdbf;" >
								
								
								</div>
								</div>
						

								<div class="col-md-12" style="margin-bottom:10px; margin-top:10px;"><input style="float:right; margin-right:50px;" type="submit" value="Update Profile Image" class="button medium dark-blue-button"></div>
								</form>								                         
								
								</div><!-- end row  -->
								</div><!-- End page-content -->

							<div class="page-content" style="margin-bottom:10px;">
								<h2>Update Password</h2>
								
								<form method="POST"  action="<?=base_url('index.php/home/update_profile_password');?>">
								<div class="row">					
								
								<div class="col-md-12 col-u-margin">
									<input required class="simple-input-field-4" type="password" name="oldpswd" placeholder="Old Paasword" >
								</div>
								<div class="col-md-12 col-u-margin">
									<input required class="simple-input-field-4" type="password" name="newpswd" placeholder="New Paasword" >
								</div>
								<div class="col-md-12 col-u-margin">
									<input required class="simple-input-field-4" type="password" name="cnewpswd" placeholder="Confirm New Paasword">
								</div>

								<div class="col-md-12" style="margin-bottom:10px; margin-top:10px;"><input style="float:right; margin-right:50px;" type="submit" value="Update Password" class="button medium dark-blue-button"></div>
								</form>								                         
							
								</div><!-- end row  -->
							</div><!-- End page-content -->
                        </div><!-- End col-md-12 -->
                        

						
					</div><!-- End user-profile -->
				</div><!-- End row -->
				<div class="clearfix"></div>
			 </div><!-- End main -->
            

 
