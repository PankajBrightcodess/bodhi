<div class="container homesensex">
	<div class="row text-center">
		<div class="col-lg-12 mb-3">
			<div class="" >  <!-- style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); color: #E0B899;" -->
				<div  class="row text-center">  
			<div class="col-md-12 col-lg-12 col-sm-12">
			   <marquee class="mar1">  <!-- id="marq" -->
			   	<?php 
			   		if(!empty($result1)){
			   			?>
			   			 <span><strong><?php echo $result1[0]['type']?></strong></span> :<span style="color:gray;"><strong><?php echo $result1[0]['value']?></strong></span>: <span style="color:green;"><?php  echo $result1[0]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[1]['type']?></strong></span> :<span style="color:gray;"><strong><?php echo $result1[1]['value']?></strong></span>: <span style="color:green;"><?php  echo $result1[1]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[2]['type']?></strong></span> :<span style="color:gray;"> <strong><?php echo $result1[2]['value']?></strong></span>: <span style="color:red;"><?php  echo $result1[2]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[3]['type']?></strong></span> :<span style="color:gray;"><strong><?php echo $result1[3]['value']?></strong></span>: <span style="color:green;"><?php  echo $result1[3]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[4]['type']?></strong></span> :<span style="color:gray;"><strong><?php echo $result1[4]['value']?></strong></span>: <span style="color:red;"><?php  echo $result1[4]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[5]['type']?></strong></span> :<span style="color:gray;"><strong><?php echo $result1[5]['value']?></strong></span>: <span style="color:green;"><?php  echo $result1[5]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[6]['type']?></strong></span> :<span style="color:gray;"><strong><?php echo $result1[6]['value']?></strong></span>: <span style="color:green;"><?php  echo $result1[6]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[7]['type']?></strong></span> : <span style="color:gray;"><strong><?php echo $result1[7]['value']?></strong></span> :<span style="color:green;"><?php  echo $result1[7]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[8]['type']?></strong></span> :<span style="color:gray;"><strong><?php echo $result1[8]['value']?></strong></span>: <span style="color:green;"><?php  echo $result1[8]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[9]['type']?></strong></span> : <span style="color:gray;"><strong><?php echo $result1[9]['value']?></strong></span>: <span style="color:green;"><?php  echo $result1[9]['percentage']?></span>
			   			<?php
			   		}
			   	?>
			   </marquee>
			</div>
			
				</div>
				
			</div>
		</div>
		<div class="col-md-9 col-sm-12">
		<div class="row top-news">
			
		<v class="col-md-8 main-topnews">
			<div class="text-center">
				<div class="col-md-12">
					
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3" > 
								<?php $i = 0;
									if (!empty($gettopnews)) {
										// print_r($gettopnews[0]);
										foreach ($gettopnews as $val) {
											$i++;
											if ($i <2) { 
													if($val['chargestatus']!=1){
												?>
												 <div class="col-md-12">
				                              <h4>Top News</h4>
                                     </div>     
                                     <div class="col-md-12">
				                              <br>		
                                     </div> 
			                            <div class="card-body text-slug">
			                               	
												 	  <a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black; text-decoration: none;"><h2 class="card-title"><strong><?php echo $val['tittle'] ?></strong></h2></a>
													
												  </div>
												  <div class="col-md-12 slug-time">
														<label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?></label>
												        
												  </div>

												<a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black; text-decoration: none;" class="img-hover"><img src="<?php echo base_url();?><?php echo $val['image'] ?>"  class="img-fluid" alt="Card image cap">
													<label style="font-size: 13px; font-style: italic; font-weight:400;float: left;"><span style="color:black"><?php echo $val['img_caption'] ?></span></label></a>
												<div class="col-md-12 slug">
													<label style="float:left;"><?php if(!empty($val['submenu'])){
																	echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?>
											        </label>
												</div>
												   
												   <div class="card-body text-slug mb-5">
												 	  <a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black; text-decoration: none; float: left !important;"><span class="card-title"><strong style="float: left !important;">*&nbsp;<i><?php echo $val['straplines'] ?></i></strong></span></a>
												  </div>  
												  <div class="card-body text-slug">
												 	  <a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black; text-decoration: none; "><span class="card-title"><strong style="float: left !important;"><?php echo substr(strip_tags($val['news']), 0, 280);?></strong></span></a>
												  </div>  

												  
									<?php }
									else{?>

										<
										h4>Top News</h4>
			                                     <!-- </div> -->
			                                <div class="card-body text-slug">
											 	  <a href="<?php echo base_url('website/signin/?slug='.$val['slug'].'&payment='.$val['payment']);?>" style="color: black; text-decoration: none;"><h2 class="card-title"><strong><?php echo $val['tittle'] ?></strong></h2></a>
												
											  </div>
											  <div class="col-md-12">
														<label style="float:right; background:rgb(35 97 138); padding: 10px; color:#fff;border-radius: 10px;"><strong>Payble</strong></label>
												        
											 </div>
											  <div class="col-md-12 slug-time">
													<label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?></label>  
											  </div>
												<a href="<?php echo base_url('website/signin/?slug='.$val['slug'].'&payment='.$val['payment']);?>" style="color: black; text-decoration: none;" class="img-hover"><img src="<?php echo base_url();?><?php echo $val['image'] ?>"  class="img-fluid" alt="Card image cap">
													<label style="font-size: 13px; font-style: italic; font-weight:400;float: left;"><span style="color:black"><?php echo $val['img_caption'] ?></span></label></a>
													
												<div class="col-md-12 slug">
													<label style="float:left;"><?php if(!empty($val['submenu'])){
													echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?>
											      </label>
												</div>
												 <div class="card-body text-slug">
												 	  <a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black; text-decoration: none;"><span class="card-title"><strong><?php echo $val['straplines'] ?></strong></span></a>
												  </div>
											   
										<?php
									}
										}
										}
									} ?>
							  
							 
							</div>
						</div>
					
						<div class="col-md-12">
							<hr style="color:black;">
						</div>
					</div>
					<div class="row">
						<!-- <img src="https://tpc.googlesyndication.com/simgad/14973722761020579337" border="0" width="300" height="240" alt="" class="img_ad"> -->
					<!-- 	<img src="<?php echo base_url('assets/website/news_image/8724268316456981339.jpg'); ?>" style="margin-top: 25px;" class="img-fluid"> -->
						 <!-- <video class="vid_home" controls>
						  <source src="<?php echo base_url('assets/website/news_image/start_en.mp4'); ?>" type="video/mp4">
						</video> -->
						<!-- <img src="<?php echo base_url('assets/website/news_image/healthimage.jpg'); ?>" style="margin-top:25px;" class="img-fluid"> -->
						<!-- <img src="<?php echo base_url('assets/website/news_image/tractor.jpg'); ?>" style="margin-top: 25px;" class="img-fluid"> -->
						
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12 mb-3">
			<div class="text-center other-topnews">
				
				<div class="row">

					<?php $i = 0;
					if (!empty($gettopnews)) {
						foreach ($gettopnews as $val) {
							$i++;
							if ($i>1 && $i<7) {
									if($val['chargestatus']!=1){

							 ?>
								<div class="col-md-12 slug ">
									<label><?php if(!empty($val['submenu'])){
													echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?></label>
								</div>
								
								<div class="col-md-12 img-hover">

									<a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" ><img class=" img-fluid" src="<?php echo base_url();?><?php echo $val['image'] ?>" alt="Card image cap"></a>
								</div>
								<div class="col-md-12 text-slug">

									<!-- style="text-align:justify; font-size: 14px;" --> <p><a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" ><?php echo $val['tittle'];  ?></a></p>
									
								</div>

								<div class="col-md-12 slug-time">
										<label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?>
								        </label>
								        <hr style="color:black;">
								</div>
					<?php }else{
							?>
							<div class="col-md-12 slug ">
									<label><?php if(!empty($val['submenu'])){
													echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?></label>
								</div>
								

								<div class="col-md-12 img-hover">

									<a href="<?php echo base_url('website/signin/?slug='.$val['slug'].'&payment='.$val['payment']);?>" ><img class=" img-fluid" src="<?php echo base_url();?><?php echo $val['image']; ?>" alt="Card image cap"></a>
								</div>
								<div class="col-md-5 text-slug">

									<!-- style="text-align:justify; font-size: 14px;" --> <p><a href="<?php echo base_url('website/signin/?slug='.$val['slug'].'&payment='.$val['payment']);?>" ><?php echo $val['tittle']; ?></a></p>
									
								</div>
								<div class="col-md-12 slug-time">
										<label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?>
								        </label>
								        <hr style="color:black;">
								</div>

						<?php
						}
					}
					}
					} ?>
				</div>
				<div class="col-md-12 col-12 mb-3 add">
					<!-- <img src="https://tpc.googlesyndication.com/simgad/6739417430419784616" alt="" class="img-fluid"> -->
				</div>
			</div>
		</div>
	</div>
	</div>



 


<!-- 
            <div class="col-md-12">
              
            </div>
 -->



	<div class="col-md-3 col-sm-12 mb-3">
		<div class="text-center recent-news">
			<h4>Recent News</h4>
			  <iframe  class="iframedit" src="https://www.youtube.com/embed/NDy5ebew7gI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p class="viedo" >Security Breach in pm Modi's Karnataka Roadshow</p><hr>
			
			<div class="row Re-news">
				<?php $i = 0;
				if (!empty($result)) {
					foreach ($result as $val) {
						$i++;
						if ($i < 13) { ?>
							<!-- <div class="col-md-12 slug">
								<label><?php if(!empty($val['submenu'])){
												echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?></label>
							</div> -->
							<div class="col-md-12 text-slug">
								<p>
									<a href="<?php echo base_url('website/detailnewsview/' . $val['slug']); ?>">
										<?php //echo $val['tittle'] ?>
										<?php echo substr(strip_tags($val['tittle']), 0, 37); 
												if (strlen($val['tittle']) > 37) {
                            				echo '...'; 
                            			}
                            	?>
									</a>
								</p>
							</div>
							<!-- <div class="col-md-12 slug-time">
										<label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?>
								        </label> 
								</div> -->
								<div class="col-md-12">
									<?php if($i!=12){ ?>
								  		<hr style="color:black;">
								  <?php } ?>
							  </div>
				<?php }
					}
				} ?>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<!--  <div class="col-md-12 " ></div> -->
	 <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12 india-heading">
            	<h2>India</h2>
        </div>
        <div class="row">
         <div class="col-md-12">
        	 <div class="row">
        		<?php
        		if(!empty($indianews)){
        			$i = 0;
        			foreach ($indianews as $key => $value) { $i++;
        				if($i<5){
        				?>
        				
        			<!-- 	<div class="col-md-6 mb-3">
        					<div class="container">
        					<div class="row home-india">
        					<div class="col-md-12 slug">
								<label><?php if(!empty($value['submenu'])){
												echo $value['menu_name'].' | '.$value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
							 </div>
		        			<div class="col-md-7 text-slug"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" ><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" ><img class="img-fluid"  src="<?php echo base_url();?><?php echo $value['image'] ?>"></a></div>
		        			 <div class="col-md-12 slug-time">
										<label><?php echo date('h:i A',strtotime($value['entrydate']));?>
								        </label>
								</div>
		        		</div>
		        		</div>
        		       </div> -->
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text">
							    	<a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black; ">
							    		<?php echo substr(strip_tags($value['tittle']), 0, 20); 
												if (strlen($value['tittle']) > 20) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a>
							   </p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        
    </div>
       </div>





	 <!-- <div class="col-md-12 " ></div> -->
	 <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12 india-heading">
            	<h2>South Asia</h2>
        </div>
        <div class="row">
       
        <div class="col-md-12">
        	<div class="row">
        		<?php
        		if(!empty($southasianews)){
        			$i = 0;
        			foreach ($southasianews as $key => $value) { $i++;
        				if($i<5){
        				?>
        			
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>  <!-- style="height: 10rem; width:100%;" -->
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;">
						
							    		<?php echo substr(strip_tags($value['tittle']), 0, 40); 
												if (strlen($value['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        </div>
       </div>


       <!-- ''''''''''''''''''''''''''''''''''''''''''''World'''''''''''''''''''''''''''''''''''''''' -->
       <!-- <div class="col-md-12 " ></div> -->
	 <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12 india-heading">
            	<h2 >World</h2>
        </div>
        <div class="row">
     
        <div class="col-md-12">
        	<div class="row">
        		<?php
        		if(!empty($worldnews)){
        			$i = 0;
        			foreach ($worldnews as $key => $value) { $i++;
        				if($i<5){
        				?>
        				
        		
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;">
							    	
							    		<?php echo substr(strip_tags($value['tittle']), 0, 40); 
												if (strlen($value['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        </div>
       </div>



		<!-- '''''''''''''''''''''''''''''''''''''''''''''Business''''''''''''''''''''''''''''''''''''''''''''' -->
		<!-- <div class="col-md-12 mb-3" ></div> -->
		<div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12 mb-3">
        	<div class="text-center  india-heading" >
            	<h2 style="float:left;">Business</h2>
            </div>
        </div>
        <div class="row">
     
        <div class="col-md-12">
        	<div class="row">
        		<?php
        		if(!empty($businesstopnews)){
        			$i = 0;
        			foreach ($businesstopnews as $key => $value) { $i++;
        				if($i<5){
        				?>
        				
        			
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" cla
							  	="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;">
							    	
							    		<?php echo substr(strip_tags($value['tittle']), 0, 40); 
												if (strlen($value['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        </div>
        <!-- <div class="col-md-12"><hr style="color:black;"></div> -->
       </div>
       <!-- '''''''''''''''''''''''''''''''''''''''''''Tech'''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->
       <!-- <div class="col-md-12 " ></div> -->
	 <div class="col-md-12"><hr style="color:black;"></div>
	 <div class="col-md-12 mb-3">
        	<div class="text-center  india-heading" >
            	<h2>Technology</h2>
            </div>
        </div>
        <div class="row">
      
        <div class="col-md-12">
        	<div class="row">
        		<?php
        		if(!empty($technews)){
        			$i = 0;
        			foreach ($technews as $key => $value) { $i++;
        				if($i<5){
        				?>
        				
        			
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;">
							    	
							    		<?php echo substr(strip_tags($value['tittle']), 0, 40); 
												if (strlen($value['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        </div>
       </div>


       <!-- ''''''''''''''''''''''''''''''''''''''''''''World'''''''''''''''''''''''''''''''''''''''' -->
   



		<!-- '''''''''''''''''''''''''''''''''''''''''''''Climate''''''''''''''''''''''''''''''''''''''''''''' -->
		<!-- <div class="col-md-12 mb-3" ></div> -->
		<div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12 mb-3">
        	<div class="text-center  india-heading" >
            	<h2>Climate</h2>
            </div>
        </div>
        <div class="row">
       
        <div class="col-md-12">
        	<div class="row">
        		<?php
        		if(!empty($climatenews)){
        			$i = 0;
        			foreach ($climatenews as $key => $value) { $i++;
        				if($i<5){
        				?>
        			
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;">
							    	
							    		<?php echo substr(strip_tags($value['tittle']), 0, 40); 
												if (strlen($value['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label ><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        </div>
        <!-- <div class="col-md-12"><hr style="color:black;"></div> -->
       </div>




       <!-- ''''''''''''''''''''''''''''''''''''''''''''''Lifestyle''''''''''''''''''''''''''''''''''''''''' -->

        <!-- <div class="col-md-12 " ></div> -->
         <div class="col-md-12"><hr style="color:black;"></div>
         <div class="col-md-12 mb-3">
        	<div class="text-center  india-heading" >
            	<h2>Lifestyle</h2>
            </div>
        </div>
        <div class="row">
       
        <div class="col-md-12">
        	<div class="row">
        		<?php
        		if(!empty($lifestyletopnews)){
        			$i = 0;
        			foreach ($lifestyletopnews as $key => $value) { $i++;
        				if($i<5){
        				?>
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;">
							    	
							    		<?php echo substr(strip_tags($value['tittle']), 0, 40); 
												if (strlen($value['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        </div>
        <!-- <div class="col-md-12"><hr style="color:black;"></div> -->
       </div>
       <!-- ''''''''''''''''''''''''''''''''''''''''Sport''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->
       <!-- <div class="col-md-12 " ></div> -->
         <div class="col-md-12"><hr style="color:black;"></div>
         <div class="col-md-12 mb-3">
        	<div class="text-center  india-heading" >
            	<h2>Sport</h2>
            </div>
        </div>
        <div class="row">
    
        <div class="col-md-12">
        	<div class="row">
        		<?php
        		if(!empty($sportnews)){
        			$i = 0;
        			foreach ($sportnews as $key => $value) { $i++;
        				if($i<5){
        				?>
        				
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;">
							   
							    		<?php echo substr(strip_tags($value['tittle']), 0, 40); 
												if (strlen($value['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        </div>
       </div>

       <!-- '''''''''''''''''''''''''''''''''''''''''''''''Openion''''''''''''''''''''''''''''''''''''''''''''''''''' -->
       <!-- <div class="col-md-12 " ></div> -->
         <div class="col-md-12"><hr style="color:black;"></div>
         <div class="col-md-12 mb-3">
        	<div class="text-center  india-heading" >
            	<h2>Opinion</h2>
            </div>
        </div>
        <div class="row">
        
        <div class="col-md-12">
        	<div class="row">
        		<?php
        		if(!empty($openionnews)){
        			$i = 0;
        			foreach ($openionnews as $key => $value) { $i++;
        				if($i<5){
        				?>
        				
        			
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;">
							    	
							    		<?php echo substr(strip_tags($value['tittle']), 0, 40); 
												if (strlen($value['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        </div>
        <div class="col-md-12"><hr style="color:black;"></div>
       </div>
        <!-- '''''''''''''''''''''''''''''''''''''''''''''''More''''''''''''''''''''''''''''''''''''''''''''''''''' -->
       <!-- <div class="col-md-12 " ></div> -->
         <div class="col-md-12"></div>
         <div class="col-md-12 mb-3">
        	<div class="text-center  india-heading" >
            	<h2>More</h2>
            </div>
        </div>
        <div class="row">
        
        <div class="col-md-12">
        	<div class="row">
        		<?php
        		if(!empty($topmorenews)){
        			$i = 0;
        			foreach ($topmorenews as $key => $value) { $i++;
        				if($i<5){
        				?>
        				
        			
        		       <div class="col-md-3 mb-3">
					  		<div class="card home-india cardsec">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img  class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;">
							    	
							    		<?php echo substr(strip_tags($value['tittle']), 0, 40); 
												if (strlen($value['tittle']) > 40) {
                            				echo '...'; 
                            			}
                            	?>
							    	</a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('d-m-Y, h:i A',strtotime($value['entrydate']));?>
						        </label>
						      </div>
							   </div>
							  </div>
							</div>
				  	</div>
        				<?php
        			}
        			}
        		}
        		?>
        		
        	</div>

        </div>
        <div class="col-md-12"><hr style="color:black;"></div>
       </div>

       <!-- '''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->

       <!-- '''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->
      
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

	$('body').on('click', '.passingID', function() {
        var submenus = $(this).attr('data-submenu');
        $("#submenus").val(submenus);
        // $('#updatemodal').modal('show');

    });

    var state = 'play';
	function toggleMarquee() {
	    var marquee = document.getElementById("marq");
	    if (state === 'play') {
	        marquee.stop();
	        state = 'stop';
	    } else {
	        marquee.start();
	        state = 'play';
	    }

	}
</script>


