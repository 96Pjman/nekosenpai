<section class="container main-content">
		<div class="login">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Register</h2>
						<div class="form-style form-style-3">
							 <form method="post" action="<?= base_url('index.php/home/register'); ?>">
								<div class="form-inputs clearfix">
									<div class="row">
			                                <div class="col-md-6">
                                                <p>
													<input type="text" name="u_fname" placeholder="First Name">
												
						                        </p>
					                               
											</div>
											
                                            <div class="col-md-6">
                                                <p>
													<input type="text" name="u_lname" placeholder="Last Name">
													
					                            </p>
					                              
											</div>
											<div class="col-md-6"><?php echo form_error('u_fname'); ?></div>
											<div class="col-md-6"><?php echo form_error('u_lname'); ?></div>
		                                </div>					
					                            <p>
													<input type="text" name="u_username" placeholder="Username">
													
					                            </p>
												<?php echo form_error('u_username'); ?>
					                            <p>
													<input type="email" name="u_email" placeholder="Email Address">
													<?php echo form_error('u_email'); ?>
					                            </p>
					                               
					                            <p>
												<span class="styled-select" style="width:100%;">
					                                    <select  name="u_gender">
					                                        <option selected disabled>Gender</option>
					                                        <option value="male">Male</option>
					                                        <option value="female">Female</option>
					                                        <option value="trans">Trans</option>
														</select>
												</span>	
												<?php echo form_error('u_gender'); ?>
					                            </p>
					                               
					                    <div class="row">
			                                <div class="col-md-4">	
                                                <p>
						                            <input type="text" name="u_city" placeholder="City">
						    					</p>					
                                            </div>
                                            <div class="col-md-4">
                                                <p>
						                            <input type="text" name="u_state" placeholder="State">
					                            </p>					
			                                </div>
			                                <div class="col-md-4">
                                                <p>
						                            <input type="text" name="u_country" placeholder="Country">
					                            </p>					
			                                </div>
                                        </div>
		                              		                     
				                                <p class="form-submit">
					                                <input type="submit" value="Signup" class="button color small login-submit submitt">
				                                </p>
								</div>
							</form>
						</div>
					</div><!-- End page-content -->
				</div><!-- End col-md-6 -->
				<div class="col-md-6">					
				</div><!-- End col-md-6 -->
			</div><!-- End row -->
			<div class="row" style="margin-top:10px;">
			<div class="col-md-6">
				<form method="post" action="<?=base_url('index.php/home/index')?>">				
			<input type="submit" value="Sing In" class="button medium dark-blue-button" style="width:95%;margin-left:12px;text-align:center;">
				</form>
		</div>
			<div class="col-md-6"></div>
			</div>
		</div><!-- End login -->
	</section>
                          
</div><!-- End wrap -->
    
<!-- js -->
<script>

	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);



    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>
<script src="<?= base_url('assets/') ;?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery.easing.1.3.min.js"></script>
<script src="<?= base_url('assets/') ;?>js/html5.js"></script>
<script src="<?= base_url('assets/') ;?>js/twitter/jquery.tweet.js"></script>
<script src="<?= base_url('assets/') ;?>js/jflickrfeed.min.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery.inview.min.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery.tipsy.js"></script>
<script src="<?= base_url('assets/') ;?>js/tabs.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery.flexslider.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery.prettyPhoto.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery.scrollTo.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery.nav.js"></script>
<script src="<?= base_url('assets/') ;?>js/tags.js"></script>
<script src="<?= base_url('assets/') ;?>js/jquery.bxslider.min.js"></script>
<script src="<?= base_url('assets/') ;?>js/custom.js"></script>
<script src="<?= base_url('assets/') ;?>js/custom-x.js"></script>
<!-- End js -->
</body>
<!-- Copied from https://2code.info/demo/html/ask-me-html/login.html by Cyotek WebCopy 1.6.0.559, 12 February 2019, 10:35:54 -->
</html>