<div class="container">
    <div class="row text-center">
        <div class="col-md-12 mb-3" ></div>
        <div class="col-md-12 sub-news">
        	<h4> 
        	<?= $menu ;?> | <?= str_replace('%20', ' ', $submenu); ?></h4>
        	
        </div><div class="col-md-12">
        <hr style="color:black;">
       </div>
        <div class="col-md-12">
        	<div class="tab" style="background-color: transparent;border: 0px solid #ccc;">
        	
			</div>
				

		<div id="Economy" class="tabcontent" style="border:0px;display:inline;">
				<!--   <h3>Economy</h3> -->
				  <div class="row top-news topnews1">
				  	<div class="col-md-7 main-topnews topnews2" >
					  <?php $j=0; if(!empty($result)){     
                         foreach($result as $val){ $j++;if($val['big_news_status'] == 1){ 
                          ?>
				  		<a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black;" class="img-hover"><img src="<?php echo base_url();?><?php echo $val['image'] ?>" style="margin-top: 10px;" class="img-fluid"></a><hr>
				  		<div class="col-md-12 slug">
							<label><?php if(!empty($val['submenu'])){
								echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?>
					        </label>
					       </div>
					    <div class="card-body text-slug">
					 	      <a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black;"><h2 class="card-title"><strong>
					 	      	
					 	      		<?php echo substr(strip_tags($val['tittle']), 0, 50); 
												if (strlen($val['tittle']) > 50) {
                            				echo '...'; 
                            			}
                            	?>
					 	      	</strong></h2></a>
						  </div>
						  <div class="col-md-12 slug-time">
								<label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?></label>
						        
						  </div>
						  <!-- <div class="col-md-12">
                               <div class="footer-social-icons" >								    <ul class="social-icons">
								        <li><a href="" class="social-icon"><i class="fa fa-facebook"></i></a></li>
								        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
								        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
								        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
								        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
								        <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
								    </ul>
								</div> 
						</div> -->
				  	<?php }} }?>
					</div>
				  	<div class="col-md-5">
				  		<div class="text-center other-topnews">
				  		<div class="row">
						  <?php if(!empty($result)){
                              $i=0;
                              foreach($result as $val){ if($val['big_news_status'] != 1){ 
																$i++;if($i>=1 && $i<5){
                              	?>
                      <div class="col-md-12">
													<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px; margin-top: 3px;"><?php if(!empty($val['submenu'])){
												echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?></label>
							       </div>
				  			<div class="col-md-7 mb-3" style="text-align:justify;"><p><a href="<?php echo base_url('website/detailnewsview/' . $val['slug']);?>" style="color: black;">
				  					<?php //echo substr(strip_tags($val['tittle']), 0, 50); 
											// 	if (strlen($val['tittle']) > 50){
           //                  				echo '...'; 
           //                  			}
                            	?>
                            	<?= $val['tittle']; ?>
				  				</a></p></div>
				  			<div class="col-md-5 mb-3"><a href="<?php echo base_url('website/detailnewsview/' . $val['slug']);?>" style="color: black;" class="img-hover"><img src="<?php echo base_url();?><?php echo $val['image'] ?>" class="img-fluid"></a></div>
				  			<div class="col-md-12 slug-time">
							    <label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?></label><?php if($i!=4){ ?><hr style="color:black;">
							    <?php } ?>
					     </div>
                             <?php } } }}?>
				  			
				  	   </div>
				  	 </div>
				  	</div>
				  </div><hr>
				  <div class="row">
					  <?php $k=0; if(!empty($result)){
                      foreach($result as $val){ $k++; if($k >= 5){ ?>
					  <div class="col-md-4 col-lg-3 mb-3">
				  		<div class="card  home-india cardsec">
						  <a href="<?php echo base_url('website/detailnewsview/' . $val['slug']);?>" style="color: black;" class="img-hover"><img class="card-img-top" src="<?php echo base_url();?><?php echo $val['image'] ?>" alt="Card image cap"></a>
						  <div class="card-body">
						  	<div class="row">
						  		<div class="col-md-12 slug">
								<label><?php if(!empty($val['submenu'])){
												echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?></label>
							</div>
							
							<div class="col-md-12 text-slug">
						    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $val['slug']);?>" style="color: black;">
						    	
						    		<?php echo substr(strip_tags($val['tittle']), 0, 40); 
												if (strlen($val['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
						    	</a></p></div>
						    <div class="col-md-12 slug-time">
							  <label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?>
					        </label>
					      </div>

						  </div>
						  </div>
						</div>
				  	</div>
					  <?php }} }?>
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