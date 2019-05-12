
	
	
	

	<section class="container main-content" style="margin-top:40px;">
		<div class="row">
			<div class="col-md-9">				
				<div class="tabs-warp question-tab">							
					           <div class="tab-inner-warp" >
										  	<?php foreach($ques as $q) { ?>
													<div class="tab-inner" style="margin-bottom:25px;">
														<article class="question question-type-normal" style="padding-top:5px;paddng-bottom:5px;">											
															<div class="question-inner" >
																<form>
																	<div class="row" style="height:35px;">								
																		<div class="col-md-9 ques_title"> <a style="text-decoration:none;" href="<?= base_url('index.php/home/ques_open?id='.$q->ID);?>"><?php echo $q->QUES_TITLE;  ?> </a></div>
																		<div class="col-md-3">
																		<?php if($q->user_mail == $_SESSION['user_email']){ ?>
							       			<a href="<?=base_url('index.php/home/del_ques?id='.$q->ID);?>" class="button small red-button">Delete</a>
									<?php } else { ?>
									
									<?php } ?> 
																			</div>
																	</div>

																	<?php	if($q->QUES_DSRCP=="empty"){ $display="none";} else{$display="block";} ?>
																	<div class="row row-mrgin" style="display:<?php echo $display; ?>">								
																		<div class="col-md-12 ">
																		<span class="col-md-2  title" >Description :</span> 	
																		<span class="col-md-8 value " ><?php echo $q->QUES_DSRCP ;  ?></span>
																		</div>															
																	</div>

																	<?php	if($q->IMG_FILES){ $display="block";} else{$display="none";} ?>
																		    <?php		if($q->IMG_FILES) { ?>	
																							<div class="row row-mrgin" style="display:<?php echo $display; ?>">																							
																								<div class="col-md-12 ">
																								
																								<span class="col-md-12 value" >			
																									<?php
																										$img_data=explode(',',$q->IMG_FILES);
																											foreach($img_data as $ig)
																													{									
																													  	echo "<div class='col-md-6 images' style='background-image:url(".base_url('asset/images/ques_images/').$ig.");'> </div>";
																													}
																									?> 
																									</span>					
																									</div>													
																								</div>
																					<?php }?>

																					<?php	if($q->DOC_FILES){ $display="block";} else{$display="none";} ?>
																					<?php		if($q->DOC_FILES) { ?>
																							<div class="row row-mrgin" style="display:<?php echo $display; ?>">								
																								<div class="col-md-12 docs">
																								<span class="col-md-2  title" >Documents :</span>
																								<span class="col-md-8 value value-doc" >
																									<?php
																										$doc_data=explode(',',$q->DOC_FILES);
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

																					<?php	if($q->LINK_1){ $display="block";} else{$display="none";} ?>	
																							<div class="row" style="display:<?php echo $display; ?>">				
																								<div class="col-md-12 links">
																								<span class="col-md-2  title" >Links :</span>
																										<?php echo" <a class='col-md-8 value value-link' href='".$q->LINK_1."'><i class='icon-globe'></i>  Link Attached 1 </a>"; ?>																							
																								</div>													
																							</div>

																					<?php	if($q->LINK_2){ $display="block";} else{$display="none";} ?>	
																							<div class="row" style="display:<?php echo $display; ?>">				
																								<div class="col-md-12 links">	
																								<span class="col-md-2  title" ></span>																					
																									<?php echo"<a  class='col-md-8 value value-link' href='".$q->LINK_2."'> <i class='icon-globe'></i> Link Attached 2 </a>"; ?>
																								</div>																																	
																							</div>
																							
																					<?php	if($q->LINK_3){ $display="block";} else{$display="none";} ?>	
																							<div class="row" style="display:<?php echo $display; ?>">				
																								<div class="col-md-12 links">		
																								<span class="col-md-2  title" ></span>																					
																									<?php echo"<a  class='col-md-8 value value-link' href='".$q->LINK_3."'><i class='icon-globe'></i> Link Attached 2 </a>"; ?>																								
																								</div>													
																							</div>

																					<?php	if($q->LINK_4){ $display="block";} else{$display="none";} ?>	
																							<div class="row" style="display:<?php echo $display; ?>" >				
																								<div class="col-md-12 links">	
																								<span class="col-md-2  title" ></span>																					
																									<?php echo"<a  class='col-md-8 value value-link' href='".$q->LINK_4."'> <i class='icon-globe'></i> Link Attached 4 </a>"; ?>																							
																								</div>													
																							</div>
																							<div class="row row-mrgin" >																							
							<div class="col-md-12 " style="padding-left:18px;">															
											<a style="padding-top:2px;padding-bottom:2px;"  href="<?=base_url('index.php/home/show_tag?tagid='.$q->USRDEF_ID);?>"  class="button small dark-blue-button ">#<?=$q->USRDEF_ID?> </a>
											<a style="padding-top:2px;padding-bottom:2px;"  href="<?=base_url('index.php/home/show_tag?tagid='.$q->CAT_ID);?>"  class="button small dark-blue-button ">#<?=$q->CAT_ID?> </a>
							</div>													
						</div>
																</form>

							                </div>
										<?php  foreach($user as $u) {
											if($q->user_id==$u->id){?>
											<div class="question-author  reg-profile-2" style="background-image:url('<?=base_url('assets/')?>/images/proimages/<?=$u->user_profile_img?>'); background-size:120px;"></div>
										<?php } } ?>
							                						<div class="question-inner ques-actions" style="margin-bottom:0px;" >																
															       		<span  class="solved " style="margin-left:0px;">
																		   <?php if($q->QUES_STATUS=="unsolved") $icon_class="icon-ban-circle txt-r"; else $icon_class="icon-ok txt-g" ?>
                                 											 <i class="<?php echo $icon_class; ?>"  ></i> <span> <?php echo $q->QUES_STATUS; ?> </span>
																		</span>														
																		<span class="solved">
                      														 <i class="icon-comments txt-b"></i> <span></span> <?php echo $q->reply_count;?> Reply
																		</span>
																		<span  class="solved">
																			<?php if($q->view_count==0) $icon= "icon-eye-close txt-r"; else  $icon= "icon-eye-open txt-g";   ?>																	
                       														<i class="<?php echo $icon; ?>"></i> <span><?php echo $q->view_count; ?> </span>
																		</span>															
																		<span  class="solved">
                       														<i class="icon-time txt-b"></i> <?php echo date('(d:M:y) h:i:s',strtotime($q->date_time)) ; ?>
																		</span>
																		<span  class="solved">
																		<i class="icon-warning-sign txt-r"></i> <?php echo $q->report_count;?>
																		</span>
																		<span  class="solved">
																		<?php if($q->star_count==0) $icon= "icon-star-empty txt-y"; else  $icon= "icon-star txt-y";   ?>	
																		<i class="<?php echo $icon; ?>" style="font-size:23px;"></i> <?php echo $q->star_count;?>
																		</span>
																		
																	</div>
							              </article>
										</div>
									<?php } ?>
								</div>															
		        </div><!-- End page-content -->
			</div><!-- End main -->









