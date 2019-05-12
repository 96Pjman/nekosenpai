
	<footer id="footer" style="margin-top:0px;">
		<section class="container">
			<div class="row">
				<div class="col-md-4">	
					<div style="padding:15px ; background-color:#fff;">
						<form method="post" action="<?=base_url('index.php/home/post_feedback')?>">
						<textarea placeholder="Please give us your Feedback ." rows="6" cols="34" type="text" name="feeddata"></textarea>
						<input class="button medium dark-blue-button" style="margin-top:10px; width:100%" value="Send Feedback" type="submit">
						</form>
					</div>
					</div>
					<div class="col-md-3">
					<div class="widget" style="padding-left:20px;">
						<h2 style="color:#35bdbf;">Quick Links</h2>
						<ul>
							<li><a <?= base_url('index.php/home/panel') ?> >Home</a></li>
							<li><a <?= base_url('index.php/home/ask_question') ?> >Ask Question</a></li>
							<li><a <?= base_url('index.php/home/answers') ?> >Timeline</a></li>
							<li><a <?= base_url('index.php/home/user_profile') ?> >Edit Profile</a></li>
							<li><a <?= base_url('index.php/home/') ?> >Notification</a></li>
							<li><a <?= base_url('index.php/home/') ?> >See Followers</a></li>							
						</ul>
					</div>
					</div>
					<div class="col-md-5" >
						<h2 style="color:#35bdbf;">Contacts Details</h2>
						<div><h3 style="margin-bottom:5px;">Prayas Jadli</h3></div>
						<div><h4 style="margin-bottom:5px; margin-left:20px;">Developer</h4></div>
						<div style="border-bottom:2px solid #35bdbf"><h4 style="margin-left:20px; margin-bottom:0px;padding-bottom:10px; ">prayasjadli18@gmail.com</h4></div>
						<div><h3 style="margin-bottom:5px; margin-top:10px;">Shubham Gaur</h3></div>
						<div><h4 style="margin-left:20px; margin-bottom:5px;">Designer</h4></div>
						<div><h4 style="margin-left:20px; margin-bottom:5px;">yoshubham.kumar96@gmail.com </h4></div>
					</div>				
							
			</div><!-- End row -->
		</section><!-- End container -->
	</footer><!-- End footer -->


	<footer id="footer-bottom">
		<section class="container">
			<div class="copyrights f_left">Copyright 2019 NEkO.com  </div>			
		</section><!-- End container -->
	</footer><!-- End footer-bottom -->
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



<!-- End js -->

</body>
<!-- Copied from https://2code.info/demo/html/ask-me-html/login.html by Cyotek WebCopy 1.6.0.559, 12 February 2019, 10:35:54 -->
</html>