
<section class="container main-content" style="margin-top:40px; width:1100px;">

    <?php foreach($particular_ques as $pq) {} ?>
		
		<div class="question question-type-normal" style="margin-bottom:0px; padding-top:20px; padding-bottom:6px; border:0px;-webkit-box-shadow: 0 0 0px ;">											
			

				<form>

					<div class="row">
					<?php foreach($username as $un){ ?>
					  <div class="col-md-1" > 	<div class="reg-profile reg-profile-2" style="background-image:url('<?=base_url('assets/')?>/images/proimages/<?=$un->user_profile_img?>'); background-size:120px;"></div></div>								
						<div class="col-md-9 ">
						<div class="col-md-12 ques_username">
						
								Asked By : <a href="<?=base_url('index.php/home/view_profile?uid='.$un->id)?>" class="ques_username"><?=$un->user_first_name;?> <?=$un->user_last_name;?></a>
							
							 </div>
						<div class="col-md-12 ques_title"> 
							<a style="text-decoration:none;" ><?php echo $pq->QUES_TITLE;  ?> </a>
						</div>
						</div>
						<?php }?>
							<div class="col-md-2">

								<?php if($pq->user_mail == $_SESSION['user_email']){ ?>
							       			<a href="<?=base_url('index.php/home/del_ques?id='.$pq->ID);?>" class="button small red-button">Delete</a>
									<?php } else { ?>
										<a href="<?= base_url('index.php/home/report_ques?qid='.$pq->ID); ?>" class="button small red-button">Report</a>
									<?php } ?> 
									<?php
									  $icon="star-btn button small red-button";
									  $class="icon-star-empty";
									 foreach($check_star as $ck)
									               { 
													  if($ck->value==1) {  $icon=" button small yellow-button";  $class="icon-star"; } 
													  } ?>
											 			 <a href="<?=base_url('index.php/home/starbook_ques?qid='.$pq->ID); ?>" style=" margin-left:2px;" class="<?=$icon;?>"><i class="<?=$class?>"></i></a>			 
							</div>
						</div>

									<?php	if($pq->QUES_DSRCP=="empty"){ $display="none";} else{$display="block";} ?>
						<div class="row row-mrgin" style="display:<?php echo $display; ?>"style="display:<?php echo $display; ?>">								
							<div class="col-md-12 " style="padding-left:120px;"	>
								<span class="col-md-2  title" >Description :</span> 	
								<span class="col-md-8 value " ><?php echo $pq->QUES_DSRCP ;  ?></span>
							</div>															
						</div>

									<?php	if($pq->IMG_FILES){ $display="block";} else{$display="none";}
											if($pq->IMG_FILES) { ?>	
						<div class="row row-mrgin" style="display:<?php echo $display; ?>">																							
							<div class="col-md-12 " style="padding-left:120px;">
								<span class="col-md-2  title" >Images :</span>
								<span class="col-md-8 value" >			
									<?php
									$img_data=explode(',',$pq->IMG_FILES);
									foreach($img_data as $ig)
										{									
											echo "<div class='col-md-6 images' style='background-image:url(".base_url('asset/images/ques_images/').$ig.");'><div class='ques_image'> <span class='view'>view</span> </div> </div>";
										}
									?> 
								</span>					
							</div>													
						</div>
									<?php }?>

									<?php	if($pq->DOC_FILES){ $display="block";} else{$display="none";} 
											if($pq->DOC_FILES) { ?>
						<div class="row row-mrgin" style="display:<?php echo $display; ?>">								
							<div class="col-md-12 docs" style="padding-left:120px;">
								<span class="col-md-2  title" >Documents :</span>
								<span class="col-md-8 value value-doc" >
									<?php
										$doc_data=explode(',',$pq->DOC_FILES);
										 $file=1;
										foreach($doc_data as $doc)
											{									
												echo"<div style='margin-bottom:5px;'><i class='icon-file-alt'></i><a href='".base_url('asset/documents/ques_files/').$doc."'> File Attachment ".$file."  </div>";
												++$file;
											}
									?> 
								</span> 
							</div>													
						</div>
									<?php }?>
  									<?php	if($pq->LINK_1){ $display="block";} else{$display="none";} ?>	
						<div class="row" style="display:<?php echo $display; ?>">				
							<div class="col-md-12 links" style="padding-left:120px;">
								<span class="col-md-2  title" >Links :</span>
									<?php echo" <a class='col-md-8 value value-link' href='".$pq->LINK_1."'><i class='icon-globe'></i>  Link Attached 1 </a>"; ?>																							
							</div>													
						</div>

									<?php	if($pq->LINK_2){ $display="block";} else{$display="none";} ?>	
						<div class="row" style="display:<?php echo $display; ?>">				
							<div class="col-md-12 links" style="padding-left:120px;">	
								<span class="col-md-2  title" ></span>																					
									<?php echo"<a  class='col-md-8 value value-link' href='".$pq->LINK_2."'> <i class='icon-globe'></i> Link Attached 2 </a>"; ?>
							</div>																																	
						</div>
																							
									<?php	if($pq->LINK_3){ $display="block";} else{$display="none";} ?>	
						<div class="row" style="display:<?php echo $display; ?>">				
							<div class="col-md-12 links" style="padding-left:120px;">		
								<span class="col-md-2  title" ></span>																					
									<?php echo"<a  class='col-md-8 value value-link' href='".$pq->LINK_3."'><i class='icon-globe'></i> Link Attached 2 </a>"; ?>																								
							</div>													
						</div>

									<?php	if($pq->LINK_4){ $display="block";} else{$display="none";} ?>	
						<div class="row" style="display:<?php echo $display; ?>" >				
							<div class="col-md-12 links" style="padding-left:120px;">	
								<span class="col-md-2  title" ></span>																					
									<?php echo"<a  class='col-md-8 value value-link' href='".$pq->LINK_4."'> <i class='icon-globe'></i> Link Attached 4 </a>"; ?>																							
							</div>													
						</div>

							
						<div class="row row-mrgin" >																							
							<div class="col-md-12 " style="padding-left:120px;">															
											<a style="padding-top:2px;padding-bottom:2px;"  href="<?=base_url('index.php/home/show_tag?tagid='.$pq->USRDEF_ID);?>"  class="button small dark-blue-button ">#<?=$pq->USRDEF_ID?> </a>
											<a style="padding-top:2px;padding-bottom:2px;"  href="<?=base_url('index.php/home/show_tag?tagid='.$pq->CAT_ID);?>"  class="button small dark-blue-button ">#<?=$pq->CAT_ID?> </a>
							</div>													
						</div>
								

				</form>

		
			
																	

										</div>
   
										<div class="question question-type-normal" style=" border:0px;-webkit-box-shadow: 0 0 0px ; margin-bottom:0px; padding-top:6px; padding-bottom:6px;">
                            <div class="row" style="background-color:; margin-bottom:10px;margin-top:10px; margin-left:85px">              
          						<div class="col-md-12">	
									  <?php if($pq->user_id==$_SESSION['user_id']){ ?>										
									 <span  class="solved " style="margin-left:0px;">
									 
										 Set Question Status:<span><?php $pad="padding-top:1px; padding-bottom:1px";
										 if($pq->QUES_STATUS=="unsolved")  {
										 ?>
											
											<a style="<?=$pad?>" href="<?=base_url('index.php/home/update_stat?stat=solved&id='.$pq->ID);?>"  class="button small blue-button custom-button">Solved </a>
									 
									  <?php } else { ?>
									
										<a style="<?=$pad?>" href="<?=base_url('index.php/home/update_stat?stat=unsolved&id='.$pq->ID);?>"  class="button small blue-button custom-button">UnSolved </a>
										<?php }  ?>
										 </span>											
									</span>
									  <?php } else{ ?>
										<span  class="solved " style="margin-left:0px;">
										<?php if($pq->QUES_STATUS=="unsolved") $icon_class="icon-ban-circle txt-r"; else $icon_class="icon-ok txt-g"; ?>
                                 		<i class="<?php echo $icon_class; ?>"  ></i> <span> <?php echo $pq->QUES_STATUS; ?> </span>
									</span>
									<?php } ?>
									<span class="solved">
                      					 <i class="icon-comments txt-b"></i> <span></span> <?php echo $pq->reply_count;?> Reply
									</span>
									<span  class="solved">
									<?php if($pq->view_count==0) $icon= "icon-eye-close txt-r"; else  $icon= "icon-eye-open txt-g";   ?>																	
                       					<i class="<?php echo $icon; ?>"></i> <span><?php echo $pq->view_count; ?> </span>
									</span>
									<span  class="solved">
                       					<i class="icon-time txt-r"></i> <?php echo $pq->date_time;?>
									</span>
									<span  class="solved">
																		<i class="icon-warning-sign txt-r"></i> <?php echo $pq->report_count;?>
																		</span>
																		<span  class="solved">
																		<?php if($pq->star_count==0) $icon= "icon-star-empty txt-y"; else  $icon= "icon-star txt-y";   ?>	
																		<i class="<?php echo $icon; ?>" style="font-size:23px;"></i> <?php echo $pq->star_count;?>
																		</span>
                                </div> 
							</div>
							<?php if($pq->QUES_STATUS=="unsolved"){ ?>
           					<div class="row" style="margin-bottom:20px" >
                   					<form method="POST" action="<?=base_url('index.php/home/post_reply?id='.$pq->ID);?>">                  
                      					<div class="col-md-10">                          
                           					<input style="width: 91.3%;margin-top: 1px;margin-left: 102px;" name="reply" type="text">                           
                       					</div>
                      					<div class="col-md-2">                          
                       						<input type="submit" value="Post Reply" class="button small blue-button custom-button">                         
                       					</div>                 
                   					</form>          
							   </div> 
							<?php }?>
						</div>
                                    <?php foreach($get_reply as $r ) {?>	
                        <div class="question question-type-normal" style="margin-bottom:0px; padding-top:6px; border:0px;-webkit-box-shadow: 0 0 0px ; padding-bottom:10px;">
                            <div class="row">
															<?php $this->db->select("user_profile_img");
															$this->db->where("id=",$r->Userid);
															$this->db->from('neko_user_data');
															$img=$this->db->get()->row()->user_profile_img; ?>
														<div class="col-md-1" > 	<div class="reg-profile reg-profile-2" style="background-image:url('<?=base_url('assets/')?>/images/proimages/<?=$img?>'); background-size:120px;"></div></div>								
								
                                <div class="col-md-9">
									 <div class="col-md-12 post_username">
									
								Answered By : <a href="<?=base_url('index.php/home/view_profile?uid='.$r->Userid)?>" class="post_username"><?=$r->fname;?> <?=$r->lname;?></a>

										  </div>
									 <div class="col-md-12 post_reply" ><?php echo $r->Reply ;  ?> </div>
								</div>
                                    <?php foreach($particular_ques as $u) {?>
                                    <?php  
                                            if($r->Userid==$_SESSION['user_id']){												
                                    ?>
                                <div class="col-md-2">
									 <a href="<?=base_url('index.php/home/reply_delete?rid='.$r->ID.'&qid='.$pq->ID)?>" style="margin-top:10px"  class="button small red-button">Delete </a>
									</div>
                                    <?php  } else if($pq->user_id==$_SESSION['user_id']) { ?>								
								<div class="col-md-2">								
									<a href="<?=base_url('index.php/home/reply_report?rid='.$r->ID.'&qid='.$pq->ID)?>" style="margin-top:10px"  class="button small dark-blue-button reply-report-hover"> <i class="icon-warning-sign"></i> </a>
									
									<?php if($r->value=="undefined")  {
										 ?>
											
										 <a href="<?=base_url('index.php/home/reply_valid?rid='.$r->ID.'&qid='.$pq->ID.'&stat=valued')?>" style="margin-top:10px"  class="button small dark-blue-button reply-ok-hover "> <i class=" icon-ok"> </i> </a>
									 
									  <?php } else { ?>
									
										<a href="<?=base_url('index.php/home/reply_valid?rid='.$r->ID.'&qid='.$pq->ID.'&stat=undefined')?>" style="margin-top:10px;"  class="button small green-button reply-cross "> <i class=" icon-remove"> </i> </a>
										<?php }  ?>
									</div>
								<?php  } else{  ?>
								
								<div class="col-md-2">
								<a href="<?=base_url('index.php/home/reply_report?rid='.$r->ID.'&qid='.$pq->ID)?>" style="margin-top:10px"  class="button small red-button reply-report-hover"> Report </a>
								</div>
								
								<?php  }}  ?>  
                            </div> 
                                                                                                                                               
                   </div>												
                 <?php } ?>                       
    		</section>
	<footer id="bottom-field" style="background-color:white; ">
		<section class="container" >
                                                                  
		</section><!-- End container -->
	</footer><!-- End footer-bottom -->
</div><!-- End wrap -->

<!-- js -->
<script>

	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);


$(document).ready(function(){

    $('#').on("change",function () {
        var categoryId = $(this).find('option:selected').val();
        $.ajax({
            url: base_url().'/home/selectbycat',
            type: "POST",
            data: "categoryId="+categoryId,
            success: function (response) {
                console.log(response);
                $("#").html(response);
            },
        });
    }); 

});




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