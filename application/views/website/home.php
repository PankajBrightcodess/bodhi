<div class="container">
	<div class="row text-center">
		<div class="col-lg-12 mb-3" style="margin-top: 20rem; overflow: hidden;">
			<div class="card text-center" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); color: #E0B899;">
				<div  class="row">
			<div class="col-md-1 col-sm-1">
				<!-- <input type="button" class="form-control" style="background-color:black; color: white;" onclick="toggleMarquee();" value="||" /> -->
				<!-- <button class="form-control" style="background-color:black; color: white;" onclick="toggleMarquee();">Stop
				</button> -->
				
			</div>
			<div class="col-md-11 col-sm-11">
			   <marquee >  <!-- id="marq" -->
			   	<?php 
			   		if(!empty($result1)){
			   			?>
			   			 <span><strong><?php echo $result1[0]['type']?></strong></span> : <span style="color:green;"><?php  echo $result1[0]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[1]['type']?></strong></span> : <span style="color:green;"><?php  echo $result1[1]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[2]['type']?></strong></span> : <span style="color:red;"><?php  echo $result1[2]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[3]['type']?></strong></span> : <span style="color:green;"><?php  echo $result1[3]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[4]['type']?></strong></span> : <span style="color:red;"><?php  echo $result1[4]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[5]['type']?></strong></span> : <span style="color:green;"><?php  echo $result1[5]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[6]['type']?></strong></span> : <span style="color:green;"><?php  echo $result1[6]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[7]['type']?></strong></span> : <span style="color:green;"><?php  echo $result1[7]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[8]['type']?></strong></span> : <span style="color:green;"><?php  echo $result1[8]['percentage']?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><strong><?php echo $result1[9]['type']?></strong></span> : <span style="color:green;"><?php  echo $result1[9]['percentage']?></span>
			   			<?php
			   		}
			   	?>
			   </marquee>
			</div>
				</div>
				
			</div>
		</div>
		<div class="col-md-10">
		<div class="row">
			<div class="col-md-12">
				<h4 style="text-align:center;">Top News</h4><hr>
			</div>
		<div class="col-md-9">
			<div class="text-center">
				<div class="col-md-12">
					
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
								<?php $i = 0;
									if (!empty($gettopnews)) {
										foreach ($gettopnews as $val) {
											$i++;
											if ($i <2) { ?>
												<!-- <div class="col-md-12">
													<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($val['submenu'])){
																	echo $val['submenu'];}else{echo $val['menu_name'];}?></label>
												</div> -->
												<img src="<?php echo base_url();?><?php echo $val['image'] ?>" class="card-img-top" alt="Card image cap">
												<div class="col-md-12">
														<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($val['submenu'])){
																		echo $val['submenu'];}else{echo $val['menu_name'];}?>
												        </label>
												</div>
												 <div class="card-body">
												    <h5 class="card-title"><strong><p style="text-align:justify; font-size: 14px;"><a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black; text-decoration: none;"><?php echo $val['tittle'] ?></a></p>
													<hr style="color:black;"></strong></h5>
												   
												    <!-- <p class="card-text"><small class="text-muted">Last updated : <?php echo date('H:i', strtotime($val['entrydate']))?></small></p> -->
												  </div>
												<!-- <div class="col-md-8">
													<p style="text-align:justify; font-size: 14px;"><a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black; text-decoration: none;"><?php echo $val['tittle'] ?></a></p> 
													<hr style="color:black;">
												</div> -->
									<?php }
										}
									} ?>
							  
							 
							</div>
						</div>
					</div>
					<div class="row">
						<!-- <img src="https://tpc.googlesyndication.com/simgad/14973722761020579337" border="0" width="300" height="250" alt="" class="img_ad"> -->
						<img src="<?php echo base_url('assets/website/news_image/8724268316456981339.jpg'); ?>" style="margin-top: 10px;" class="img-fluid">
						 <video width="300" height="250" controls>
						  <source src="<?php echo base_url('assets/website/news_image/start_en.mp4'); ?>" type="video/mp4">
						</video> 
						

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-3">
			<div class="text-center">
				
				<div class="row">

					<?php $i = 0;
					if (!empty($gettopnews)) {
						foreach ($gettopnews as $val) {
							$i++;
							if ($i>1 && $i<7) { ?>
								<div class="col-md-12">
									<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($val['submenu'])){
													echo $val['submenu'];}else{echo $val['menu_name'];}?></label>
								</div>
								<div class="col-md-8">

									<p style="text-align:justify; font-size: 14px;"><a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black; text-decoration: none;"><?php echo $val['tittle'] ?></a></p>
									<hr style="color:black;">
								</div>
								<div class="col-md-4">

									<img class="card-img-top" src="<?php echo base_url();?><?php echo $val['image'] ?>" alt="Card image cap">
								</div>
					<?php }
						}
					} ?>
				</div>
				<div class="row">
					<img src="https://tpc.googlesyndication.com/simgad/6739417430419784616" border="0" width="300" height="600" alt="" class="img_ad">
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="col-md-2">
		<div class="text-center">
			<h4>Recent News</h4>
			<hr>
			<div class="row">
				<?php $i = 0;
				if (!empty($result)) {
					foreach ($result as $val) {
						$i++;
						if ($i < 12) { ?>
							<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($val['submenu'])){
												echo $val['submenu'];}else{echo $val['menu_name'];}?></label>
							</div>
							<div class="col-md-12">
								<p style="text-align:justify; font-size: 14px;"><a href="<?php echo base_url('website/detailnewsview/' . $val['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $val['tittle'] ?></a></p>
								<hr style="color:black;">
							</div>
				<?php }
					}
				} ?>
			</div>
		</div>
	</div>


	 <div class="col-md-12 " ></div>
	 <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px; float: left;">India</h2>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $indianews[0]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $indianews[0]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $indianews[0]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($indianews)){
        			$i = 0;
        			foreach ($indianews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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





	 <div class="col-md-12 " ></div>
	 <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px; float: left;">South Asia</h2>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $southasianews[2]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $southasianews[2]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $southasianews[2]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($southasianews)){
        			$i = 0;
        			foreach ($southasianews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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
       <div class="col-md-12 " ></div>
	 <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px; float: left;">World</h2>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $worldnews[2]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $worldnews[2]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $worldnews[2]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($worldnews)){
        			$i = 0;
        			foreach ($worldnews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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
		<div class="col-md-12 mb-3" ></div>
		<div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12 mb-3">
        	<div class="text-center" >
            	<h2 style="float:left;">Business</h2>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $businesstopnews[0]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $businesstopnews[0]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $businesstopnews[0]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($businesstopnews)){
        			$i = 0;
        			foreach ($businesstopnews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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
       <div class="col-md-12 " ></div>
	 <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px; float: left;">Tech</h2>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $technews[2]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $technews[2]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $technews[2]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($technews)){
        			$i = 0;
        			foreach ($technews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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
       <div class="col-md-12 " ></div>
	 <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px; float: left;">World</h2>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $worldnews[2]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $worldnews[2]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $worldnews[2]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($worldnews)){
        			$i = 0;
        			foreach ($worldnews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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



		<!-- '''''''''''''''''''''''''''''''''''''''''''''Climate''''''''''''''''''''''''''''''''''''''''''''' -->
		<div class="col-md-12 mb-3" ></div>
		<div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12 mb-3">
        	<div class="text-center" >
            	<h2 style="float:left;">Climate</h2>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $climatenews[2]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $climatenews[2]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $climatenews[2]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($climatenews)){
        			$i = 0;
        			foreach ($climatenews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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

        <div class="col-md-12 " ></div>
         <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px; float: left;">Lifestyle</h2>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $lifestyletopnews[0]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $lifestyletopnews[0]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $lifestyletopnews[0]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($lifestyletopnews)){
        			$i = 0;
        			foreach ($lifestyletopnews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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
       <div class="col-md-12 " ></div>
         <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px; float: left;">Sport</h2>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $sportnews[0]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $sportnews[0]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $sportnews[0]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($sportnews)){
        			$i = 0;
        			foreach ($sportnews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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
       <div class="col-md-12 " ></div>
         <div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px; float: left;">Openion</h2>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="card mb-3" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        		<div class="row">
        			<div class="col-md-12">
        				<img class="card-img-top" src="<?php echo base_url();?><?php echo $openionnews[0]['image'] ?>" alt="Card image cap">
        			</div>
        			<div class="col-md-12">
        				<a href="<?php echo base_url('website/detailnewsview/' . $openionnews[0]['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $openionnews[0]['tittle']?></a>
        			   
        		    </div>
        		</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div class="row">
        		<?php
        		if(!empty($openionnews)){
        			$i = 0;
        			foreach ($openionnews as $key => $value) { $i++;
        				if($i>2 || $i<5){
        				?>
        				
        				<div class="col-md-6 mb-5">
        					<div class="row">
        						<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px;"><?php if(!empty($value['submenu'])){
												echo $value['submenu'];} else{echo $value['menu_name'];}?>
						        </label>
								</div>
		        			<div class="col-md-7" style="text-align: justify;"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
		        			<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
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


