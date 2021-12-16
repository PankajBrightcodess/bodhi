
<div class="container">
    <div class="row text-center" >

        
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
        	<h4 style="font-family: 'Cinzel', serif; float: left; margin-top:0px;color: rgb(35 97 138);"> HEADLINE : <?= $result['tittle'] ?> </h4>
        	
        </div> -->
        <div class="col-md-12">
        <hr style="color:black;">
       </div>
        <div class="col-md-12">
        	<div class="tab" style="background-color: transparent;border: 0px solid #ccc;">
        	
			</div>
				

		<div id="Economy" class="tabcontent" style="border:0px;display:inline;">
				<!--   <h3>Economy</h3> -->
				<div class="container">
				  <div class="row">
				  	
				  	<div class="col-md-9 home-india" >
				  		<div class="row">
				  			<div class="col-md-12">
				  		   <h5 style="float: left;"><?php echo $result['straplines'] ?></h5>
				  		 </div> 
				  			<div class="col-md-12 mb-3">
				  		   <img  src="<?php echo base_url();?><?php echo $result['image'] ?>" class="img-fluid">
				  		   <label style="font-size: 11px; font-style: italic; font-weight:500;float: left;"><h5 style="color:black"><?php echo $result['img_caption'] ?></h5></label>
				  		 </div> 
				  		 <div class="col-md-12 mb-0">
				  		 	<label style="font-style: italic; float:left;">By Line : <?php echo $result['byline']?></label>
				  		 </div>
				  		<!--  <div class="col-md-12 slug" style="margin-top:10px; ">
								<label><?php if(!empty($result['submenu'])){
												echo $result['menu_name'].' | '.$result['submenu'];}else{echo $result['menu_name'];}?></label>
							</div> -->
							<div class="col-md-12 slug-time">
								<label><?php echo date('d-m-Y',strtotime($result['entrydate'])).',';?></label>
								<label ><?php echo date('h:i A',strtotime($result['entrydate'])).',';?></label>
								<?php 
								 $lastdate = $result['entrydate'];
								 $current = date('Y-m-d H:i:s');
									$date1 = new DateTime('2021-12-20 12:30:00');
									$date2 = new DateTime('2021-12-21 11:30:00');
									$diff = $date2->diff($date1);
								?>
								<label><?php echo 'Updated On ('.$diff->format('%a Day and %h hours').')';?></label>
						    <hr style="color:black;">
						  </div>
                         <div class="col-md-12" style="text-align: justify; padding: 25px;"><p ><?= $result['news'] ?></p></div>
                       <!--    <div class="col-md-12">
                               <div class="footer-social-icons" >
								   
										    <ul class="social-icons">
										        <li><a href="" class="social-icon"><i class="fa fa-facebook"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
										    </ul>
								</div> 
						</div> -->
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