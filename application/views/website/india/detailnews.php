
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
				  	
				  	<div class="col-md-12 home-india" >
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
									  	<?php ;}?>
                  </label>
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

                  <a target="_blank" href="https://twitter.com/intent/tweet?url=<?= base_url('website/detailnewsview/'.$result['slug']); ?>" class="social-links-item twitter-icon"></a>

                  <!-- <a class="social-links-item twitter-icon" title="Twitter" href="https://twitter.com/">Twitter</a> -->
                 

                  <a target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[summary]=<?= $result['slug']; ?>&p[url]=<?= base_url('website/detailnewsview/' . $result['slug']); ?>&p[title]=<?= $result['slug']; ?>" class="social-links-item facebook-icon"></a>

                  <!-- <a class="social-links-item facebook-icon" title="Facebook" href="https://www.facebook.com/">Facebook</a> -->



                  <!-- <a class="social-links-item linkedin-icon" title="Linked In" href="https://www.linkedin.com/">LinkedIn</a> -->
               <!--    <a class="social-links-item" title="Instagram" href="#nogo"><img src="../../assets/images/2111463.png" style="float: right;width: 33px!important;height: 33px!important;">Instagram</a> -->
                 <!--  <a class="social-links-item mail-icon" title="Gmail" href="#nogo">Email</a> -->

                  <a href="whatsapp://send?text=<?= base_url('website/detailnewsview/'.$result['slug']); ?>" data-action="share/whatsapp/share" target="_blank" class="social-links-item wp-icon" >
                  </a>


                  <!-- <a  title="Whatapp" href="#nogo">Whatsapp</a> -->
                </div>
				  		 </div>
				  		 <div class="col-md-12 slug-time">
								<label><?php echo date('d-m-Y',strtotime($result['entrydate'])).',';?></label>
								<label ><?php echo date('h:i A',strtotime($result['entrydate']));?></label>
						  </div>
				  			 <div class="col-md-3"></div>
				  			<div class="col-md-6 mb-3">
				  		   <img  src="<?php echo base_url();?><?php echo $result['image'] ?>" style="width:100%; height:auto!important;"  class="img-fluid">
				  		   <label style="font-size: 13px; font-style: italic; font-weight:500;float: left;"><span style="color:black"><?php echo $result['img_caption'] ?></span></label>
				  		 </div>
                <div class="col-md-3"></div> 
				  		 <div class="col-md-12">
				  		   <span style="float: left;"><span>	<b>*&nbsp;&nbsp;</b></span><i style="color: black;"><?php echo $result['straplines'] ?></i></span>
				  		 </div>
				  		 
				  		<!--  <div class="col-md-12 slug" style="margin-top:10px; ">
								<label><?php if(!empty($result['submenu'])){
												echo $result['menu_name'].' | '.$result['submenu'];}else{echo $result['menu_name'];}?></label>
							</div> -->
							
               <div class="col-md-12" style="text-align: left; padding: 25px;"><p ><?= $result['news'] ?></p></div>
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
				  	<!-- <div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-12"><img src="https://tpc.googlesyndication.com/simgad/6739417430419784616" border="0"  alt="" class="img-fluid"></div>
				  			<div class="col-md-12"><img src="<?php echo base_url('assets/website/news_image/367188368275824930.jpg'); ?>" style="margin-top: 5px;"  border="0"  alt="" class="img-fluid"></div>
				  			<div class="col-md-12"></div>
				  	   </div>
				  	</div> -->
				  </div>
				  </div>
				</div>

                
			</div>
     </div><!-- <hr style="color:black;"> -->
   </div>
</div>









<section class="" style="margin-top:20px;margin-bottom:20px">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="accordion" id="accordionExample">
  				<div class="accordion-item">
    				<h2 class="accordion-header" id="headingOne">
      				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        				Support Bodhi Wire
      				</button>
    				</h2>
            <form action="<?php echo base_url('website/payments'); ?>" method="POST">
    				<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      				<div class="accordion-body" style="border:1px solid #69c9ff">
        				<p>Support Bodhi Wire with one time or regular contributions to protect independent journalism in the interest of society and the world at large. Contributions from responsible readers like you enable us in covering the world events following the highest standards of journalism. Write to us at office@bodhiwire.com</u>
  			    		<p style="font-weight: 700;">I would like to contribute.</p>
  			    		<div class="row justify-content-center">
                  <div class="col-md-1">
                    <input  type="radio" id="once" name="fav_language" value="once">
                  </div>
  			    			<div class="col-md-3">
                   <label class="btn btn-transparent btn-block" style="background:#e7f1ff;" for="once">Once</label>
  			    			</div>
  			    			<div class="col-md-4">
  			    				<p class="btn btn-transparent btn-block" style="background:#e7f1ff;">Monthly</p>
  			    			</div>
  			    			<div class="col-md-4">
  			    				<p class="btn btn-transparent btn-block" style="background:#e7f1ff;">Yearly</p>
  			    			</div>
  			    			<p style="font-weight: 700;">Select Amount</p>
  			    			<div class="col-md-3">
  			    				<p class="btn btn-transparent btn-block" style="background:#e7f1ff;">₹100</p>
  			    			</div>
  			    			<div class="col-md-3">
  			    				<p class="btn btn-transparent btn-block" style="background:#e7f1ff;">₹500</p>
  			    			</div>
  			    			<div class="col-md-3">
  			    				<p class="btn btn-transparent btn-block" style="background:#e7f1ff;">₹1000</p>
  			    			</div>
  			    			<div class="col-md-3">
  			    				<input type="number" name="amount" placeholder="Enter Your Amount"class="form-control">
  			    				<!-- <p class="btn btn-primary btn-block">enter your amount</p>-->
  			    			</div>
  			    			<div class="col-md-12">
  			    				<p class="btn btn-primary"type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="	collapseTwo">Continue</p>
  			    			</div>
								</div>
    				</div>
  				</div>
  				<div class="accordion-item">
    				<h2 class="accordion-header" id="headingTwo">
      				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="	collapseTwo">Add Contact Details
      				</button>
    				</h2>
    				<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      				<div class="accordion-body" style="border:1px solid #69c9ff">
        				<p>Invoice will be sent to this email address. If you already have Bodhi Wire account, the invoice will also show in your dashboard.</p>
        				<div class="row">
        					<div class="col-md-6">
        						<input type="text" name="name" placeholder="First Name"class="form-control" style="margin-top:10px">
        					</div>
        					<div class="col-md-6">
        						<input type="text" name="last" placeholder="Last Name"class="form-control" style="margin-top:10px">
        					</div>
        					<div class="col-md-12">
        						<input type="email" name="email" placeholder="Email"class="form-control" style="margin-top:10px">
        					</div>
        					<div class="col-md-12">
        						<input type="number" name="phone" placeholder="Phone"class="form-control" style="margin-top:10px">
        					</div>
        					<div class="col-md-12">
        						<input type="text" name="pan" placeholder="Pan No"class="form-control" style="margin-top:10px">
        					</div>
        					<div class="col-md-12">
        						<input type="checkbox" id="vehicle1" name="checkvalue" value="Bike">
  									<label for="vehicle1"> I declare that I am a citizen of India</label>
        					</div>
        					<div class="col-md-12">
  			    				<p class="btn btn-primary"type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Continue</p>
  			    			</div>
        				</div>
      				</div>
    				</div>
  				</div>
  				<div class="accordion-item">
    				<h2 class="accordion-header" id="headingThree">
      				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Review & Pay
      				</button>
    				</h2>
    				<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      				<div class="accordion-body" style="border:1px solid #69c9ff">
        				<div class="row">
        					<div class="col-md-6">
  			    				<p>Thank you for supporting us with ₹1000.</p>
  			    				<p>This amount will be charged once from your payment method. Your invoice will be sent to info@bodhiwire.com.</p>
  			    			</div>
  			    			<div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Continue</button>
  			    		<!-- 	<p  type="submit"></p> -->
  			    		</div>
        				</div>
								
      				</div>
    				</div>
  				</div>
          </form>
				</div>
			</div>
		</div>
	</div>
</section>





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