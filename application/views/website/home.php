<div class="container">
	<div class="row text-center">
		<div class="col-lg-12 mb-3" style="margin-top: 10px;">
			<div class="card text-center" style=" box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); color: #E0B899;">
				<div  class="row">
			<div class="col-md-1 col-sm-1">
				<!-- <input type="button" class="form-control" style="background-color:black; color: white;" onclick="toggleMarquee();" value="||" /> -->
				<button class="form-control" style="background-color:black; color: white;" onclick="toggleMarquee();">Stop
				</button>
				
			</div>
			<div class="col-md-11 col-sm-11">
			   <marquee id="marq">
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

		<div class="col-md-7">
			<div class="text-center">
				<div class="col-md-12">
					<h4>Top News</h4>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="card mb-3">
								<?php $i = 0;
									if (!empty($gettopnews)) {
										foreach ($gettopnews as $val) {
											$i++;
											if ($i <2) { ?>
												<img src="<?php echo base_url();?><?php echo $val['image'] ?>" class="card-img-top" alt="Card image cap">
												 <div class="card-body">
												    <h5 class="card-title"><strong><p style="text-align:justify; font-size: 14px;"><a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black; text-decoration: none;"><?php echo $val['tittle'] ?></a></p>
													<hr style="color:black;"></strong></h5>
												   
												    <p class="card-text"><small class="text-muted">Last updated : <?php echo date('H:i', strtotime($val['entrydate']))?></small></p>
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
						<video width="300" height="250" controls>
						  <source src="<?php echo base_url('assets/website/news_image/start_en.mp4'); ?>" type="video/mp4">
						</video>
						<img src="<?php echo base_url('assets/website/news_image/8724268316456981339.jpg'); ?>" class="img-fluid">

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 mb-3">
			<div class="text-center">
				<h4>News</h4>
				<hr>
				<div class="row">
					<?php $i = 0;
					if (!empty($gettopnews)) {
						foreach ($gettopnews as $val) {
							$i++;
							if ($i>1 && $i<6) { ?>
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
									<p style="text-align:justify; font-size: 14px;"><a href="<?php echo base_url('website/detailnewsview/' . $val['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $val['tittle'] ?></a></p>
									<hr style="color:black;">
								</div>
					<?php }
						}
					} ?>
				</div>
			</div>
		</div>
		
		<div class="col-md-12 mb-3" ></div>
		<div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12 mb-3">
        	<div class="text-center" >
            	<h2 style="float:left;">Business</h2>
            </div>
        </div>
        <div class="row">
        	<?php
        		if(!empty($businesstopnews)){
        			foreach ($businesstopnews as $key => $value) {
        				?>
        				<div class="col-md-3">
				        	<div class="row">
				        		<div class="col-md-7"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
				        		<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
				        	</div>
				        </div>
        				<?php
        			}
        		}
        	?>
        </div>
       </div><hr style="color:black;">

        <div class="col-md-12 " ></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px;">Lifestyle</h2>
        </div>
        <div class="row">
        	<?php
        		if(!empty($lifestyletopnews)){
        			foreach ($lifestyletopnews as $key => $value) {
        				?>
        				<div class="col-md-3">
				        	<div class="row">
				        		<div class="col-md-7"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']); ?>" style="color: black; text-decoration: none;"><?php echo $value['tittle']?></a></div>
				        		<div class="col-md-5"><img class="card-img-top" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></div>
				        	</div>
				        </div>
        				<?php
        			}
        		}
        	?>

        
        </div>
        <div class="col-md-12"><hr style="color:black;"></div>

        <div class="col-md-12 " ></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px;">Technology</h2>
        </div>
        <div class="row">
        <div class="col-md-3">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Home rentals in cities set to recover as more cos start calling back employees</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image34.jpg');?>" width="100%"></div>
        	</div>
        </div>
        <div class="col-md-3">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Kisan Credit Cards: Ground realities for KCCs defy agriculture sector stress commentary</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image10.gif');?>" width="100%"></div>
        	</div>
        </div>

        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Confused about which Nifty stocks to buy? Here are top recommendations</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image42.jpg');?>" width="100%"></div>
        	</div>
        </div>

        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Worst might be over for Kisan Credit Cards. Thanks to CIBIL scores.</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image38.jpg');?>" width="100%"></div>
        	</div>
        </div><div class="col-md-12"><hr style="color:black;"></div>
         <div class="col-md-3 mb-3">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Starved for funds, China's AI quartet walks through valley of death</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image39.jpg');?>" width="100%"></div>
        	</div>
        </div>



        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">From F&B to cosmetics, try-before-you-buy is bringing a new charm to sampling</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image40.jpg');?>" width="100%"></div>
        	</div>
        </div>

        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">India’s economic conversation with the world needs a reality check</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image41.jpg');?>" width="100%"></div>
        	</div>
        </div>
        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">India’s economic conversation with the world needs a reality check</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image41.jpg');?>" width="100%"></div>
        	</div>
        </div>
        </div>
        <div class="col-md-12"><hr style="color:black;"></div>

        <div class="col-md-12 " ></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px;">Deplomacy</h2>
        </div>
        <div class="row">
        <div class="col-md-3">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Home rentals in cities set to recover as more cos start calling back employees</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image34.jpg');?>" width="100%"></div>
        	</div>
        </div>
        <div class="col-md-3">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Kisan Credit Cards: Ground realities for KCCs defy agriculture sector stress commentary</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image10.gif');?>" width="100%"></div>
        	</div>
        </div>

        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Confused about which Nifty stocks to buy? Here are top recommendations</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image42.jpg');?>" width="100%"></div>
        	</div>
        </div>

        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Worst might be over for Kisan Credit Cards. Thanks to CIBIL scores.</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image38.jpg');?>" width="100%"></div>
        	</div>
        </div><div class="col-md-12"><hr style="color:black;"></div>
         <div class="col-md-3 mb-3">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Starved for funds, China's AI quartet walks through valley of death</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image39.jpg');?>" width="100%"></div>
        	</div>
        </div>



        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">From F&B to cosmetics, try-before-you-buy is bringing a new charm to sampling</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image40.jpg');?>" width="100%"></div>
        	</div>
        </div>

        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">India’s economic conversation with the world needs a reality check</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image41.jpg');?>" width="100%"></div>
        	</div>
        </div>
        <div class="col-md-3 ">
        	<div class="row">
        		<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">India’s economic conversation with the world needs a reality check</p></div>
        		<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image41.jpg');?>" width="100%"></div>
        	</div>
        </div>
        </div>
        <div class="col-md-12"><hr style="color:black;"></div>


        
       
        	



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