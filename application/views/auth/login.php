<section class="container main-content">
		<div class="login">
			<div class="row">
				<div class="col-md-6">
					<div class="page-content">
						<h2>Login</h2>
						<div class="form-style form-style-3">
							<form method="post" action="<?= base_url('index.php/home/login'); ?>">
								<div class="form-inputs clearfix">
									<p class="login-text">
										<input type="text" placeholder=" Email" name="u_mail" onfocus="if (this.value == 'Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email';}">
										<i class="icon-user"></i>
                                    </p>
                                    <?php echo form_error('u_mail'); ?>
									<p class="login-password">
										<input type="password" placeholder="Password" name="u_password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
										<i class="icon-lock"></i>
										<a href="#">Forget</a> 
									</p>
									<?php echo form_error('u_password'); ?>
								</div>
								<p class="form-submit login-submit" >
									<input type="submit" value="Log in" class="button color small login-submit submit">
								</p>
								<div class="rememberme">
									<label><input type="checkbox" checked="checked"> Remember Me</label>
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
				<form method="post" action="<?=base_url('index.php/home/register_page')?>">				
			<input type="submit" value="Register" class="button medium dark-blue-button" style="width:95%;margin-left:12px;text-align:center;">
				</form>
		</div>
			<div class="col-md-6"></div>
			</div>
		</div><!-- End login -->
	</section>







			
	</section><!-- End container -->


	</div><!-- End wrap -->

<div class="go-up"><i class="icon-chevron-up"></i></div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

 

<!-- End js -->

</body>
<!-- Copied from https://2code.info/demo/html/ask-me-html/login.html by Cyotek WebCopy 1.6.0.559, 12 February 2019, 10:35:54 -->
</html>