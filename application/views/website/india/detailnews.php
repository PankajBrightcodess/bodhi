<div class="container">
    <div class="row text-center" >
        
        <div class="col-md-12 mb-3" ></div>
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
				  	
				  	<div class="col-md-7 home-india" >
				  		<div class="row">
				  			<div class="col-md-12">
				  		   <img  src="<?php echo base_url();?><?php echo $result['image'] ?>" class="img-fluid">
				  		 </div> 
				  		 <div class="col-md-12 slug" style="margin-top:10px; ">
								<label><?php if(!empty($result['submenu'])){
												echo $result['menu_name'].' | '.$result['submenu'];}else{echo $result['menu_name'];}?></label>
							</div>
							<div class="col-md-12 slug-time">
								<label><?php echo date('h:i A',strtotime($result['entrydate']));?></label>
						        <hr style="color:black;">
						  </div>
				  		            <div class="col-md-12"><h3><?= $result['tittle'] ?></h3></div>
                         <div class="col-md-12" style="text-align: justify; padding: 25px;"><p ><?= $result['news'] ?></p></div>
                          <div class="col-md-12">
                               <div class="footer-social-icons" >
								    <!-- <h4 class="_14">Follow us on</h4> -->
										    <ul class="social-icons">
										        <li><a href="" class="social-icon"><i class="fa fa-facebook"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
										        <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
										    </ul>
								</div> 
						</div>
              </div>
				  	</div>
				  	<div class="col-md-5">
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