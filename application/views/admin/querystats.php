
</div>
<section class="container main-content" style="margin-top:20px; width:1300px;">	
		<div class="question question-type-normal" style="margin-bottom:0px; padding-top:20px; padding-bottom:20px; border:0px;-webkit-box-shadow: 0 0 0px ;">											
            <div class="row" style="padding-left:10px; border-bottom:1px solid black">
               
                <div class="col-md-1 col-title  col-pd" >
                    User:ID
                </div>
                <div class="col-md-2 col-title  col-pd" >
                   User Name
                </div>
                <div class="col-md-1 col-title col-pd"  >
                  Total:Q
                </div>  
                <div class="col-md-1 col-title col-pd"  >
                  Points
                </div> 
                <div class="col-md-1 col-title col-pd"  >
                Stared:Q
                </div> 
                <div class="col-md-1 col-title col-pd"  >
                Best:reply
                </div>                             
               
                <div class="col-md-1     col-title col-pd"  >
           Answered
                </div>
            </div>
<?php foreach ($query as $q) {
 ?>
            <div class="row" style="border-bottom : 1px solid black;  margin-bottom:5px;padding-left:10px;">
                <div class="col-md-1  col-pd-2" >
                 <?=$q->id ?>
                </div>  
                <div class="col-md-2  col-pd-2" >
                <?=$q->user_first_name?> <?=$q->user_last_name?>
                </div> 
                <div class="col-md-1  col-pd-2" >
                <?=$q->ques_asked ?>
                </div> 
                <div class="col-md-1  col-pd-2" >
                <?=$q->user_points ?>
                </div>  
                <div class="col-md-1  col-pd-2" >
                <?=$q->ques_bookmarked ?>
                </div> 
                <div class="col-md-1 col-pd-2" >
                <?=$q->best_answers ?>
                </div> 
               
               <div class="col-md-1  col-pd-2" >
               <?=$q->ques_answered ?>
               </div> 
                
            </div>
<?php }  ?>
		</div>              
</section>
