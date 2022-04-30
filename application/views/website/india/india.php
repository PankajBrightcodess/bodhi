<div class="container">
    <div class="row text-center " >
        <div class="col-md-12 mb-3" ></div>
        <div class="col-md-12 sub-news">
        	<h4><?php echo str_replace('%20', ' ', $menu);?></h4>
        	
        </div>
        <div class="col-md-12">
        <hr style="color:black;">
       </div>
        <div class="col-md-12">
		<div class="">
				<!--   <h3>Economy</h3> -->
				  <div class="row top-news topnews1">
				  	<div class="col-md-7 main-topnews topnews2" >
				  		<?php $j=0; if(!empty($result)){             
                         foreach($result as $val){ $j++;if($val['big_news_status'] == 1){ 
                          ?>
                           	<div class="col-md-12">
				  		       <a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black;" class="img-hover"><img src="<?php echo base_url();?><?php echo $val['image'] ?>" class="card-img-top" style="margin-top: 10px;" alt="Card image cap"></a><hr>
				  		   </div>
				  		   <div class="col-md-12 slug">
							<label><?php if(!empty($val['submenu'])){
								echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?>
					        </label>
					       </div>
					       <div class="card-body text-slug">
					 	  <a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black;"><h2 class="card-title">
					 	  		<?php echo substr(strip_tags($val['tittle']), 0, 50); 
												if (strlen($val['tittle']) > 50) {
                            				echo '...'; 
                            			}
                            	?>
					 	  	</h2></a>
						
						  </div>
						  <div class="col-md-12 slug-time">
								<label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?></label>
						        
						  </div>
				  	<?php }} }?>
				  	</div>
				  	<div class="col-md-5 ">
				  		<div class="text-center other-topnews">
				  		<div class="row">
			  			 <?php if(!empty($result)){
                              $i=0;
                              foreach($result as $val){ if($val['big_news_status'] != 1){ 
																$i++;if($i>=1 && $i<5){
                              	?>
                          <div class="col-md-12 slug">
								<label><?php if(!empty($val['submenu'])){
												echo $val['menu_name'].' | '.$val['submenu'];}else{echo $val['menu_name'];}?></label>
							</div>
			  			<div class="col-md-7 mb-3 text-slug"><p><a href="<?php echo base_url('website/detailnewsview/' . $val['slug']);?>" style="color: black;">
			  					<?php echo substr(strip_tags($val['tittle']), 0, 50); 
												if (strlen($val['tittle']) > 50) {
                            				echo '...'; 
                            			}
                            	?>
			  				</a></p></div>
			  			<div class="col-md-5 mb-3"><a href="<?php echo base_url('website/detailnewsview/' . $val['slug']);?>" style="color: black;" class="img-hover"><img src="<?php echo base_url();?><?php echo $val['image'] ?>" class="img-fluid"></a></div>
			  			<div class="col-md-12 slug-time">
							<label><?php echo date('d-m-Y, h:i A',strtotime($val['entrydate']));?></label><hr style="color:black;">
					   </div>
                         <?php } } }}?>
				  	   </div>
				  	</div>
				  	</div>
				  </div><hr>
				  <div class="row">
				  	 <?php $k=0; if(!empty($result)){
                      foreach($result as $val){ $k++; if($k >= 5){ ?>
					  <div class="col-md-3 mb-3">
				  		<div class="card home-india cardsec">
						  <a href="<?php echo base_url('website/detailnewsview/' . $val['slug']);?>" style="color: black;" class="img-hover"><img style="width:100%;" class="img-fluid" src="<?php echo base_url();?><?php echo $val['image'] ?>" alt="Card image cap"></a>
						  
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
						    	</a></p>
						   </div>
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
				<div id="Markets" class="tabcontent" style="border:0px;display: none;">
				  <!--   <h3>Economy</h3> -->
				  <div class="row">
				  	<div class="col-md-7" >
				  		<img src="<?php echo base_url('assets/website/news_image/image56.jpg');?>" class="img-fluid">
				  		<p><strong>The inevitable shift to electric vehicles is marred with structural and behavioral, </strong></p>
				  	</div>
				  	<div class="col-md-5">
				  		<div class="row">
				  			<div class="col-md-8" style="text-align:justify;"><p>Omar Abdullah, Mehbooba Mufti demand impartial probe in Hyderpora encounterOmar Abdullah, </p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image58.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8 mb-3" style="text-align:justify;"><p>Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image59.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8 mb-3" style="text-align:justify;"><p>Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image60.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8 mb-3" style="text-align:justify;"><p>Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image103.png');?>" class="img-fluid"></div>
				  	   </div>
				  	</div>
				  </div><hr>
				  <div class="row">
				  	<div class="col-md-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image61.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image62.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image63.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Omar Abdullah, Mehbooba Mufti demand impartial probe in Hyderpora encounterOmar Abdullah,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image64.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>

				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image65.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Strategic Compass': EU sets dates for new military force</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image66.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Top EU court lashes Hungary over 'Stop Soros' migrant lawTop EU court lashes Hungary over 'Stop Soros'</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image67.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image68.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>
				  </div>
				</div>
				<div id="Company" class="tabcontent" style="border:0px;display: none;">
				  ><div class="row">
				  	<div class="col-md-7" >
				  		<img src="<?php echo base_url('assets/website/news_image/image55.jpg');?>" class="img-fluid">
				  		<p><strong>The inevitable shift to electric vehicles is marred with structural and behavioral, </strong></p>
				  	</div>
				  	<div class="col-md-5">
				  		<div class="row">
				  			<div class="col-md-8" style="text-align:justify;"><p>Omar Abdullah, Mehbooba Mufti demand impartial probe in Hyderpora encounterOmar Abdullah, </p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image69.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8" style="text-align:justify;"><p>Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image70.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8" style="text-align:justify;"><p>Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image71.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8" style="text-align:justify;"><p>Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image104.jpg');?>" class="img-fluid"></div>
				  	   </div>
				  	</div>
				  </div><hr>
				  <div class="row">
				  	<div class="col-md-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image72.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image73.jpeg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image74.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Nardendra Modi demand impartial probe in Hyderpora encounterOmar Abdullah,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image75.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>

				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image76.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Strategic Compass': EU sets dates for new military force</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image79.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Top EU court lashes Hungary over 'Stop Soros' migrant lawTop EU court lashes Hungary over 'Stop Soros'</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image78.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image77.png');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>
				  </div>
				</div>
				<div id="Startups" class="tabcontent" style="border:0px;display: none;">
				  <div class="row">
				  	<div class="col-md-7" >
				  		<img src="<?php echo base_url('assets/website/news_image/image56jpg.jpg');?>" class="img-fluid">
				  		<p><strong>The inevitable shift to electric vehicles is marred with structural and behavioral, </strong></p>
				  	</div>
				  	<div class="col-md-5">
				  		<div class="row">
				  			<div class="col-md-8" style="text-align:justify;"><p>Omar Abdullah, Mehbooba Mufti demand impartial probe in Hyderpora encounterOmar Abdullah, </p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image80.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8" style="text-align:justify;"><p>Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image81.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8" style="text-align:justify;"><p>Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image82.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8" style="text-align:justify;"><p>Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image105.jpg');?>" class="img-fluid"></div>
				  	   </div>
				  	</div>
				  </div><hr>
				  <div class="row">
				  	<div class="col-md-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image83.jpg');?>" height="170px" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image84.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image86.jpg');?>" alt="Card image cap" height="170px">
						  <div class="card-body">
						    <p class="card-text">Omar Abdullah, Mehbooba Mufti demand impartial probe in Hyderpora encounterOmar Abdullah,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image87.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>

				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image88.jpeg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Strategic Compass': EU sets dates for new military force</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" height="170px" src="<?php echo base_url('assets/website/news_image/image88.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Top EU court lashes Hungary over 'Stop Soros' migrant lawTop EU court lashes Hungary over 'Stop Soros'</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image89.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image50.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>
				  </div>
				</div>
				<div id="Wealth" class="tabcontent" style="border:0px;display: none;">
				  <div class="row">
				  	<div class="col-md-7" >
				  		<img src="<?php echo base_url('assets/website/news_image/wealth.jpg');?>" class="img-fluid">
				  		<p><strong>The inevitable shift to electric vehicles is marred with structural and behavioral, </strong></p>
				  	</div>
				  	<div class="col-md-5">
				  		<div class="row">
				  			<div class="col-md-8" style="text-align:justify;"><p>Omar Abdullah, Mehbooba Mufti demand impartial probe in Hyderpora encounterOmar Abdullah, </p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image90.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8" style="text-align:justify;"><p>Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image91.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8" style="text-align:justify;"><p>Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image92.jpg');?>" class="img-fluid"></div>

				  			<div class="col-md-8" style="text-align:justify;"><p>Can new-age 'technical' traders survive a bear market?</p></div>
				  			<div class="col-md-4 mb-3"><img src="<?php echo base_url('assets/website/news_image/image101.jpg');?>" class="img-fluid"></div>
				  	   </div>
				  	</div>
				  </div><hr>
				  <div class="row">
				  	<div class="col-md-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image93.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Mere smell of alcohol cannot be construed to mean that person is intoxicated,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" height="170px" src="<?php echo base_url('assets/website/news_image/image94.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Air India sale, Tatas' EV arm keep deal street busy in October with USD 9.2 billion fund flows</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="card">
						  <img class="card-img-top" height="170px" src="<?php echo base_url('assets/website/news_image/image95.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Omar Abdullah, Mehbooba Mufti demand impartial probe in Hyderpora encounterOmar Abdullah,</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image96.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>

				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image97.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Strategic Compass': EU sets dates for new military force</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image98.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Top EU court lashes Hungary over 'Stop Soros' migrant lawTop EU court lashes Hungary over 'Stop Soros'</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" height="170px" src="<?php echo base_url('assets/website/news_image/image99.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						  </div>
						</div>
				  	</div>
				  	<div class="col-md-3 mb-3">
				  		<div class="card">
						  <img class="card-img-top" src="<?php echo base_url('assets/website/news_image/image50.jpg');?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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