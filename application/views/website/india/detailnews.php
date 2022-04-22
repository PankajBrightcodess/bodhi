
<div class="container">
    <div class="row text-center" >

        
        
        
        <!-- <div class="col-md-12">
        	<h4 style="font-family: 'Cinzel', serif; float: left; margin-top:0px;color: rgb(35 97 138);"> HEADLINE : <?= $result['tittle'] ?> </h4>
        	
        </div> -->
        
        <!-- <div class="col-md-12">
        	<div class="tab" style="background-color: transparent;border: 0px solid #ccc;">
			  </div> -->
				

		<div id="Economy" class="tabcontent" style="border:0px;display:inline;">
				<!--   <h3>Economy</h3> -->
				<div class="container">
				  <div class="row">
				  	
				  	<div class="col-md-9 home-india" >
				  		<div class="row">
				  			<div class="col-md-12 slug mb-3" style="margin-top:10px;">
								 <label style="float:left; font-weight:400; color:#23618a !important;">
									<?php if(!empty($result['submenu']))
									{
									  ?><a href="<?php echo base_url('/')?>" style="color: #23618a !important;"><?php	echo 	'HOME'?></a><a href="<?php echo base_url('website/india/'.$result['menu_id'].'/'.$result['menu_name'])?>" style="color: #23618a !important;">
									  	<?php echo '  |  '.$result['menu_name']  ?>
									  </a>
									  <a href="<?php echo base_url('website/north/'.$result['submenu_id'].'/'.$result['menu_name'].'/'.$result['submenu'])?>" style="color: #23618a !important;">
									  <?php echo '  |  '.$result['submenu'];

									  	?></a><?php
									}else{?>
									  	<a href="<?php echo base_url('/')?>" style="color: #23618a !important;"><?php	echo 	'HOME'?></a>
									  	<a href="<?php echo base_url('website/india/'.$result['menu_id'].'/'.$result['menu_name'])?>" style="color: #23618a !important;">
									  	<?php echo '  |  '.$result['menu_name']  ?>
									  </a>
									  	<?php ;}?></label>
				        </div>
				        <div class="col-md-12 sub-news">
        	          <h4><?= $result['tittle'] ?></h4>
        	      </div>
        	      <!-- <div class="col-md-12">
        						<hr style="color:black;">
       					</div> -->
       					<div class="col-md-6">
				  		 	  <label style="font-style: italic; float:left;">By : <?php echo $result['byline']?></label>
				  		 </div>
				  		 <div class="col-md-6">
				  		 	<div class="social-links2">
            <a class="social-links-item twitter-icon" title="Twitter" href="https://twitter.com/">Twitter</a>
            <a class="social-links-item facebook-icon" title="Facebook" href="https://www.facebook.com/">Facebook</a>
            <a class="social-links-item linkedin-icon" title="Youtube" href="https://www.linkedin.com/">LinkedIn</a>
            <a class="social-links-item rss-icon" title="Youtube" href="#nogo">RSS</a>
            <a class="social-links-item mail-icon" title="Google Groups" href="#nogo">Email</a>
        </div>
				  		 </div>
				  		 <div class="col-md-12 slug-time">
								<label><?php echo date('d-m-Y',strtotime($result['entrydate'])).',';?></label>
								<label ><?php echo date('h:i A',strtotime($result['entrydate']));?></label>
						  </div>
				  			 
				  			<div class="col-md-12 mb-3">
				  		   <img  src="<?php echo base_url();?><?php echo $result['image'] ?>" style="height: 700px; width:100%;"  class="img-fluid">
				  		   <label style="font-size: 13px; font-style: italic; font-weight:500;float: left;"><span style="color:black"><?php echo $result['img_caption'] ?></span></label>
				  		 </div> 
				  		 <div class="col-md-12">
				  		   <span style="float: left;"><span>	<b>*&nbsp;&nbsp;</b></span><i><?php echo $result['straplines'] ?></i></span>
				  		 </div>
				  		 
				  		<!--  <div class="col-md-12 slug" style="margin-top:10px; ">
								<label><?php if(!empty($result['submenu'])){
												echo $result['menu_name'].' | '.$result['submenu'];}else{echo $result['menu_name'];}?></label>
							</div> -->
							
               <div class="col-md-12" style="text-align: justify; padding: 25px;"><p ><?= $result['news'] ?></p></div>
               <?php
               			if(!empty($result['other_image'])){
               				?>
               					<div class="col-md-6 mb-3">
							  		     <img  src="<?php echo base_url();?><?php echo $result['other_image'] ?>" class="img-fluid">
							  		     <label style="font-size: 13px; font-style: italic; font-weight:500;float: left;"><span style="color:black"><?php echo $result['other_img_caption'] ?></span></label>
							  		    </div>
               				<?php
               			}?><?php
               		if(!empty($result['other_image_one'])){

               			?>
               				<div class="col-md-6 mb-3">
							  		   <img  src="<?php echo base_url();?><?php echo $result['other_image_one'] ?>" class="img-fluid">
							  		   <label style="font-size: 13px; font-style: italic; font-weight:500;float: left;"><span style="color:black"><?php echo $result['other_img_caption_one'] ?></span></label>
							  		 </div>
               			<?php
               		}
               ?>  
              </div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-12"><img src="https://tpc.googlesyndication.com/simgad/6739417430419784616" border="0"  alt="" class="img-fluid"></div>
				  			<div class="col-md-12"><img src="<?php echo base_url('assets/website/news_image/367188368275824930.jpg'); ?>" style="margin-top: 5px;"  border="0"  alt="" class="img-fluid"></div>
				  			<div class="col-md-12"></div>
				  	   </div>
				  	</div>
				  </div>
				  </div>
				</div>

                
			</div>
     </div><hr style="color:black;">
   </div>

</div>









<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="accordion" id="accordionExample">
  				<div class="accordion-item">
    				<h2 class="accordion-header" id="headingOne">
      				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
			</div>
		</div>
	</div>
</section>



<!-- <section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="accordion" id="accordionExample">
  				
  				<div class="card">
  			  	<div class="card-header" id="headingOne">
  			    	<h2 class="mb-0">
  			      	<button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Support Bodhi Wire<span class="btn btn-secondary" style="float:right;font-size: 19px;border-radius: 20px;">₹2400</span>
  			      	</button>
  			    	</h2>
  			  	</div>
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
  			    	<div class="card-body">The founding premise of The Wire is this: if good journalism is to survive and thrive, it can only do so by being both editorially and financially independent.This means relying principally on contributions from readers and concerned citizens who have no interest other than to sustain a space for quality journalism. For any query or help write to us at bodhiwire@gmail.com
  			    		<p>I would like to contribute.</p>
  			    		<div class="row">
  			    			<div class="col-md-4">
  			    				<p class="btn btn-primary btn-block">Once</p>
  			    			</div>
  			    			<div class="col-md-4">
  			    				<p class="btn btn-primary btn-block">Monthly</p>
  			    			</div>
  			    			<div class="col-md-4">
  			    				<p class="btn btn-primary btn-block">Yearly</p>
  			    			</div>
  			    			<p>Select Amount</p>
  			    			<div class="col-md-3">
  			    				<p class="btn btn-primary btn-block">Once</p>
  			    			</div>
  			    			<div class="col-md-3">
  			    				<p class="btn btn-primary btn-block">Monthly</p>
  			    			</div>
  			    			<div class="col-md-3">
  			    				<p class="btn btn-primary btn-block">Yearly</p>
  			    			</div>
  			    			<div class="col-md-3">
  			    				<p class="btn btn-primary btn-block">Yearly</p>
  			    			</div>

  			    			

  			    		</div>
  			    		<p class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Continue</p>
  			    	</div>
  			  	</div>
  				</div>
  				
  				<div class="card">
    				<div class="card-header" id="headingTwo">
      				<h2 class="mb-0">
        				<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2
        				</button>
      				</h2>
    				</div>
    				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      				<div class="card-body">Some placeholder content for the second accordion panel. This panel is hidden by default.</div>
    				</div>
  				</div>
  				
  				<div class="card">
    				<div class="card-header" id="headingThree">
      				<h2 class="mb-0">
        				<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3
        				</button>
      				</h2>
    				</div>
    				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      				<div class="card-body">And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.</div>
    				</div>
  				</div>
				
				</div>
			</div>
		</div>
	</div>
</section>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>