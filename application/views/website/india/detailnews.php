<div class="container">
    <div class="row text-center" >
        
        <div class="col-md-12 mb-3" ></div>
        <div class="col-md-12">
        	<h4 style="font-family: 'Cinzel', serif; float: left; margin-top:0px;color: rgb(35 97 138);"> HEADLINE : <?= $result['tittle'] ?> </h4>
        	
        </div>
        <div class="col-md-12">
        <hr style="color:black;">
       </div>
        <div class="col-md-12">
        	<div class="tab" style="background-color: transparent;border: 0px solid #ccc;">
        	
			</div>
				

		<div id="Economy" class="tabcontent" style="border:0px;display:inline;">
				<!--   <h3>Economy</h3> -->
				  <div class="row">
				  	
				  	<div class="col-md-7" >
				  		<div class="row">
				  			<div class="col-md-12">
				  		   <img  src="<?php echo base_url();?><?php echo $result['image'] ?>" class="img-fluid">
				  		 </div> 
				  		 <div class="col-md-12">
										<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px; margin-top: 3px;"><?php if(!empty($result['submenu'])){
									echo $result['submenu'];}else{echo $result['menu_name'];}?></label><hr>
		            </div>
				  		            <div class="col-md-12"><p><?= $result['tittle'] ?></p></div>
                         <div class="col-md-12" style="text-align: justify;"><p ><?= $result['news'] ?></p></div>
              </div>
				  	</div>
				  	<div class="col-md-5">
				  		<div class="row">
				  			<div class="col-md-12"><img src="https://tpc.googlesyndication.com/simgad/6739417430419784616" border="0" width="300" height="600" alt="" class="img_ad"></div>
				  			<div class="col-md-12"><img src="<?php echo base_url('assets/website/news_image/367188368275824930.jpg'); ?>" style="margin-top: 5px;"  border="0" width="300" height="600" alt="" class="img_ad"></div>
				  			<div class="col-md-12"></div>
				  			<!-- <div class="col-md-7 mb-3" style="text-align:justify;"><p>Omar Abdullah, Mehbooba Mufti demand impartial probe in Hyderpora encounterOmar Abdullah, </p></div> -->
				  			<!-- <div class="col-md-5 mb-3"><img src="<php echo base_url('assets/website/news_image/image43.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-7 mb-3" style="text-align:justify;"><p>Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p></div>
				  			<div class="col-md-5 mb-3"><img src="<php echo base_url('assets/website/news_image/image32.png');?>" class="img-fluid"></div>

				  			<div class="col-md-7 mb-3" style="text-align:justify;"><p>Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p></div>
				  			<div class="col-md-5 mb-3"><img src="<php echo base_url('assets/website/news_image/image19.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-7 mb-3" style="text-align:justify;"><p>Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p></div>
				  			<div class="col-md-5 mb-3"><img src="<php echo base_url('assets/website/news_image/image43.jpg');?>" class="img-fluid"></div> -->
				  	   </div>
				  	</div>
				  </div><hr>
				  <!-- <div class="row">
				  	<div class="col-md-3">
				  		<div class="card" style=" height: 20rem;">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image115.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card" style=" height: 20rem;">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/iamge116.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="card" style=" height: 20rem;">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image117.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Omar Abdullah, Mehbooba Mufti demand impartial probe in Hyderpora encounterOmar Abdullah,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card" style=" height: 20rem;">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image119.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>

				  	<div class="col-md-3 mb-3">
				  		<div class="card" style=" height: 20rem;">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image120.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Strategic Compass': EU sets dates for new military force</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card" style=" height: 20rem;">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image121.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Top EU court lashes Hungary over 'Stop Soros' migrant lawTop EU court lashes Hungary over 'Stop Soros'</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card" style=" height: 20rem;">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image223.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card" style=" height: 20rem;">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image122.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>
				  </div> -->
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