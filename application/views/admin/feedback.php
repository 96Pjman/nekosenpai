<header id="header">
		<section class="container clearfix">
			<div class="logo"><div style=" height:80px ; width:300px;padding:1px; background-size:180px; background-repeat:no-repeat; backgrpond-position:center center;background-image:url('<?= base_url('assets/') ;?>/images/nekoco.png');"></div></div>
			<nav class="navigation">
				<ul>
					<li class="ask_question"><a href="<?= base_url('index.php/home/admin_solvedfeedback') ?>"><i class="icon-home"></i> &nbsp;Solved Feedbacks</a></li>
					<li class="ask_question"><a href="<?= base_url('index.php/home/admin_unsolvedfeedback') ?>"> <i class="icon-file-alt"></i>&nbsp; Unsolved Feedbacks</a></li>
   	</ul>
			</nav>
		</section><!-- End container -->
    </header><!-- End header --> 
</div>
<section class="container main-content" style="margin-top:20px; width:1300px;">	
		<div class="question question-type-normal" style="margin-bottom:0px; padding-top:20px; padding-bottom:20px; border:0px;-webkit-box-shadow: 0 0 0px ;">											
            <div class="row" style="padding-left:10px; border-bottom:1px solid black">
                <div class="col-md-1 col-title  col-pd" >
                    ID
                </div>
                  
                <div class="col-md-3 col-title col-pd"  >
                  User E-mail
                </div>               
                <div class="col-md-7     col-title col-pd"  >
              Feedback
                </div>
                <div class="col-md-1     col-title col-pd"  >
             Action
                </div>
            </div>
<?php  foreach($feedback as $fb)
{
 ?>
            <div class="row" style="border-bottom : 1px solid black;  margin-bottom:5px;padding-left:10px;">
                <div class="col-md-1 col-pd col-pd-2" >
                 <?=$fb->uid?>
                </div>                
                       
                <div class="col-md-3  col-pd col-pd-2"  >
                <?=$fb->email?>
                </div>               
                <div class="col-md-7  col-pd col-pd-2"  >
                <?=$fb->feedback?>
                </div>
                
                <div class="col-md-1  col-pd col-pd-2"  >
                  <?php if($fb->status==0) { ?>
                <a href="<?=base_url('index.php/home/feed_valid?fid='.$fb->id)?>" style="padding:7px;"  class="button small dark-blue-button reply-ok-hover "> <i class=" icon-ok"> </i> </a>                 
                  <?php } ?>
                <a href="<?=base_url('index.php/home/feed_del?fid='.$fb->id)?>" style="padding:7px;"  class="button small green-button reply-cross "> <i class=" icon-remove"> </i> </a>
                </div>
            </div>
<?php  } ?>
		</div>              
</section>
      


