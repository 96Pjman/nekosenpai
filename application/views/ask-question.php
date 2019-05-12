


<section class="container main-content" style="margin-top:40px; width:1200px;">

	<div class="page-content ">
							<div class="boxedtitle page-title"><h2>What is your Question ?</h2></div>
							<div class="tabs-warp">
							  
									
							    <div class="tab-inner-warp" >
							    	<div class="tab-inner ">

  <!----------------------- general question tab ------------------------->
<div class="container" style="width:1050px;">
<form method="POST" action="<?= base_url('index.php/home/post_ques'); ?>" enctype="multipart/form-data" >
  <div class="rows ask-q-row">
    <div class="col-md-2">
    <label class="ask-q-label">Ouestion Title</label>
    </div>
    <div class="col-md-10">
	<input class="form-control simple-input-field" required type="text" name="ques_title"  >
    </div>
  </div>


  <div class="rows ask-q-row">
    <div class="col-md-2">
    <label class="ask-q-label">Tags</label>
    </div>
    <div class="col-md-5">
<span class="styled-select">
										<select name="cat_name" required >
											<option selected disabled value="">Select a Category</option>
                      <?php
           foreach($cat as $value)
           {
              echo '<option  value="'.$value->CAT_NAME.'">'.$value->CAT_NAME.'</option>';
                }  
       ?>
										</select>
									</span>
    </div>   
	<div class="col-md-5">
	<input class="form-control simple-input-field-2" required type="text" name="user_tag">
    </div>
  </div>
  <div class="rows ask-q-row">
    <div class="col-md-2">
		<label class="ask-q-label">Your Description</label>
    </div>
    <div class="col-md-10">
    <textarea rows="4" cols="200" class="form-control" name="gen_desp" > </textarea>
    </div>
  </div>


  <div class="rows ask-q-row">
    <div class="col-md-3">
	<label class="ask-q-label">Image Attachment</label>
    </div>
  	<div class="col-md-4">
    <div class="fileinputs">
									<input type="file" name="image_file[]"  accept="image/* " class="file">
									<div class="fakefile">
										<button type="button" class="button small margin_0">select image</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
    </div>
    <div class="col-md-4">
    <div class="fileinputs">
									<input type="file" name="image_file[]"  accept="image/* " class="file">
									<div class="fakefile">
										<button type="button" class="button small margin_0">select image</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
    </div>
   
  </div>

  <div class="rows ask-q-row">
    <div class="col-md-3">

    </div>
    <div class="col-md-4">
    <div class="fileinputs">
									<input type="file" name="image_file[]"  accept="image/* " class="file">
									<div class="fakefile">
										<button type="button" class="button small margin_0">select image</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
    </div>
  	<div class="col-md-4">
    <div class="fileinputs">
									<input type="file" name="image_file[]"  accept="image/* " class="file">
									<div class="fakefile">
										<button type="button" class="button small margin_0">select image</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
    </div>
  </div>

  <div class="rows ask-q-row">
    <div class="col-md-3">
	<label class="ask-q-label">Document Attachment</label>
    </div>
  	<div class="col-md-4">
    <div class="fileinputs">
									<input type="file" name="doc_file[]"  class="file">
									<div class="fakefile">
										<button type="button" class="button small margin_0">select file</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
    </div>
  	<div class="col-md-4">
    <div class="fileinputs">
									<input type="file"  name="doc_file[]"  class="file">
									<div class="fakefile">
										<button type="button" class="button small margin_0">select file</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
    </div>
  </div>

  <div class="rows ask-q-row">
    <div class="col-md-3">

    </div>
  	<div class="col-md-4">
    <div class="fileinputs">
									<input type="file" name="doc_file[]"  class="file">
									<div class="fakefile">
										<button type="button" class="button small margin_0">select file</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
    </div>
    	<div class="col-md-4">
    <div class="fileinputs">
									<input type="file" name="doc_file[]"   class="file">
									<div class="fakefile">
										<button type="button" class="button small margin_0">select file</button>
										<span><i class="icon-arrow-up"></i>Browse</span>
									</div>
								</div>
    </div>
  </div>

  <div class="rows ask-q-row">
    <div class="col-md-3">
	<label class="ask-q-label">Link Attachment</label>
    </div>
  	<div class="col-md-4">
	<input class="form-control simple-input-field-2" name="link_1" type="url">
    </div>
    <div class="col-md-4">
	<input class="form-control simple-input-field-2" name="link_2" type="url">
    </div>
  </div>

  <div class="rows ask-q-row">
    <div class="col-md-3">

    </div>
  	<div class="col-md-4">
	<input class="form-control simple-input-field-2" name="link_3" type="url">
    </div>
    <div class="col-md-4">
	<input class="form-control simple-input-field-2" name="link_4" type="url">
    </div>
  </div>
  

  

  <div class="rows ask-q-row">
    <div class="col-md-4">
     
    </div>
    <div class="col-md-4">
   
	</div>
	<div class="col-md-4">
  <input style="float:right;" type="submit" value="Post Question" name="general_sub"  class="button medium dark-blue-button">
    </div>
  </div>
  
</form>
</div>


 <!----------------------- general question tab ends ------------------------->


							        </div>
							    </div>							   
							</div>
						</div>



	
	</section>