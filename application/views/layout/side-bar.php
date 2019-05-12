           
			<aside class="col-md-3 sidebar">
				
                
                <div class="widget widget_tag_cloud">
					<h3 class="widget_title">Your Favourite Tags</h3>
					<a href="#">function</a>	
					<a href="#">Entertainment</a>
					<a href="#">Movie</a>
					<a href="#">Avengers</a>				
					<a href="#">HTML</a>
					<a href="#">pizza</a>
					<a href="#">COOKING</a>
                </div>
                

                <div class="widget widget_highest_points">
					<h3 class="widget_title">Highest Points</h3>
					<ul>
						<?php $val=1; foreach($points as $pt) { if($val<=5){ ?>
						<li style="height:80px; padding-bottom:0px">
							<span style="width:80px;height:60px;float:left;">
							<div class="reg-profile reg-profile-2" style="background-image:url('<?=base_url('assets/')?>/images/proimages/<?=$pt->user_profile_img?>'); background-size:120px;"></div>
							</span>
							<h6><a href="<?=base_url('index.php/home/view_profile?uid='.$pt->id)?>"> <?=$pt->user_first_name?> <?=$pt->user_last_name?></a></h6>
							<span style="font-size:16px">Points : <?=$pt->user_points?></span>
						</li> 
						<?php }$val++; } ?>
                       					
					</ul>
				</div>

				
				<div class="widget widget_login">
					<h3 class="widget_title">Send Invitation</h3>
					<div class="form-style form-style-2">
						<form method="post" action="<?=base_url('index.php/home/send_invite') ?>">
							<div class="form-inputs clearfix">
								<p class="login-text">
									<input type="text" name="invite_mail" value="Enter E-Mail" onfocus="if (this.value == 'Enter E-Mail') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter E-Mail';}">
									<i class="icon-user"></i>
								</p>
								
							</div>
							<p class="form-submit login-submit">
								<input type="submit" value="Send" class="button color small login-submit submit">
							</p>
							
						</form>						
						<div class="clearfix"></div>
					</div>
				</div>
				
				
				
				
			
				
			
				
				
				
			</aside><!-- End sidebar -->
		</div><!-- End row -->
	</section><!-- End container -->