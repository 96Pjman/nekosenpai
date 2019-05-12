</div>
<section class="container main-content" style="margin-top:20px; width:1300px;">	
		<div class="question question-type-normal" style="margin-bottom:0px; padding-top:20px; padding-bottom:20px; border:0px;-webkit-box-shadow: 0 0 0px ;">											
            <div class="row" style="padding-left:10px; border-bottom:1px solid black">
                <div class="col-md-1 col-title  col-pd" >
                    ID
                </div>
                <div class="col-md-1 col-title col-pd"  >
                  Image
                </div>
                <div class="col-md-2 col-title col-pd"  >
                   Name
                </div>
                <div class="col-md-1 col-title col-pd"  >
                  User Name
                </div>
                <div class="col-md-3 col-title col-pd"  >
                  User E-mail
                </div>
                <div class="col-md-1 col-title col-pd" >
                 Gender
                </div>
                <div class="col-md-3 col-title col-pd"  >
               Lives In
                </div>
            </div>
<?php foreach($users as $u)
{
   if($u->user_mail!=$_SESSION['user_email'])
   { ?>
            <div class="row" style="border-bottom : 1px solid black;  margin-bottom:5px;padding-left:10px;">
                <div class="col-md-1 col-value col-pd" >
                   <?=$u->id?>
                </div>
                <div class="col-md-1  col-pd"  >
                <div class="reg-profile reg-profile-2" style="background-image:url('<?=base_url('assets/')?>/images/proimages/<?=$u->user_profile_img?>'); background-size:120px;"></div>
                </div>
                <div class="col-md-2 col-value col-pd"  >
                <?=$u->user_first_name?>  <?=$u->user_last_name?>
                </div>
                <div class="col-md-1 col-value col-pd"  >
                <?=$u->user_name?>
                </div>
                <div class="col-md-3 col-value col-pd"  >
                <?=$u->user_mail?>
                </div>
                <div class="col-md-1 col-value col-pd" >
                <?=$u->user_gender?>
                </div>
                <div class="col-md-3 col-value col-pd"  >
                <?=$u->user_city?>,<?=$u->user_state?>,<?=$u->user_country?>
                </div>
            </div>
   <?php  } } ?>
		</div>              
</section>