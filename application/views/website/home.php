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
							  <img src="<?php echo base_url('assets/website/news_image/post-drive-with-space-cushion.jpg'); ?>" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><strong><a href="" style="color:black;"> What India's EV road looks like,
										</a></strong></h5>
							    <p class="card-text"><a href="" style="color:black;">The chief minister said the ongoing talks with Maruti to set up the plant on about 900 acres of land at Kharkhoda have been finalized on Saturday. Top cryptocurrency prices today: Bitcoin, Ethereum, Solana add up to 3% Top cryptocurrency prices today RBI, crypto players meet for the first time, discuss grey zones Tax optimiser: NPS, salary benefits can help Jain cut income tax by Rs 54,000</a></p>
							    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
							  </div>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- <img src="https://tpc.googlesyndication.com/simgad/14973722761020579337" border="0" width="300" height="250" alt="" class="img_ad"> -->
						<video width="300" height="250" controls>
						  <source src="<?php echo base_url('assets/website/news_image/start_en.mp4'); ?>" type="video/mp4">
						</video>
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
					if (!empty($result)) {
						foreach ($result as $val) {
							$i++;
							if ($i <5) { ?>
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
        <div class="col-md-12">
        	<div class="text-center" >
            	<h2 style="float:left;">Business</h2>
            </div>
        </div><div class="col-md-12"><hr style="color:black;"></div>
        <div class="col-md-12">
        	<div class="tab" style="background-color: transparent;border: 0px solid #ccc;">
				  <button class="tablinks" onclick="openCity(event, 'Economy')" style="color:black; float: left; ">Economy</button>
				  <button class="tablinks" onclick="openCity(event, 'Markets')" style="color:black; float: left;">Markets</button>
				  <button class="tablinks" onclick="openCity(event, 'Company')" style="color:black; float: left;">Company</button>
				  <button class="tablinks" onclick="openCity(event, 'Startups')" style="color:black; float: left;">Startups</button>
				  <button class="tablinks" onclick="openCity(event, 'Wealth')" style="color:black; float: left;">Wealth</button>
				</div>
				<hr>

				<div id="Economy" class="tabcontent" style="border:0px;display:inline;">
				<!--   <h3>Economy</h3> -->
				  <div class="row">
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Top cryptocurrency prices today: Bitcoin, Ethereum, Solana add up to 3% Top cryptocurrency prices today...</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image12.jpg');?>" width="100%"></div>

				  			
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Solana add up to 3% Why China’s cryptocurrency ban is an opportunity for India?...</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image11.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-8"><p style="text-align:justify; font-size: 14px;">RBI, crypto players meet for the first time, discuss grey zones</p></div>
				  			<div class="col-md-4"><img src="<?php echo base_url('assets/website/news_image/image15.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">The number of Indians trading in crypto assets looks highly exagge...</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image15.jpg');?>" width="100%"></div>
				  		</div>
				  	</div><div class="col-md-12"><hr style="color:black;"></div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Does high-intensity exercise affect your heart? mind? life spans? waistlines?</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image16.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">ITR filing: New annual information statement accessible on e-filing portal</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image17.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Tax optimiser: NPS, salary benefits can help Jain cut income tax by Rs 54,000</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image18.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">These SBI customers can avail up to Rs 2 lakh free insurance benefit: </p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image18.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  </div>
				</div>

				<div id="Markets" class="tabcontent" style="border:0px;display: none;">
				  <div class="row">
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Should you start investing in gold mutual funds, ETFs now?</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image21.jpg');?>" width="100%"></div>

				  			
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">ETF, digital gold, mutual funds: Where to invest to save Rs 25 lakh for daughter’s wedding</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image22.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">What is co-payment in health insurance?</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image23.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">SBI credit card to charge a fee of Rs 99 + tax on all EMI purchases from Dec 1</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image24.jpg');?>" width="100%"></div>
				  		</div>
				  	</div><div class="col-md-12"><hr style="color:black;"></div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Buy now, Pay later: What borrowers, shoppers must know before opting</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image25.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Not able to bag a job interview? These 10 resume mistakes could be the reason</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image26.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">To fail that job interview, any of these 5 mistakes is all it takes To fail that job interview</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image27.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">These SBI customers can avail up to Rs 2 lakh free insurance benefit: </p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image18.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  </div> 
				</div>

				<div id="Company" class="tabcontent" style="border:0px;display: none;">
				  <div class="row">
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Rights of landlord: What to do if a tenant refuses to vacate your house </p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image30.png');?>" width="100%"></div>

				  			
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Do daughters have same right to father’s property as sons?</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image28.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Digital pocket money: 5 smart cards, apps that can help children learn money management skills</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image31.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">3 out of 4 people still keep money idle in savings bank account: Survey</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image31.jpg');?>" width="100%"></div>
				  		</div>
				  	</div><div class="col-md-12"><hr style="color:black;"></div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Does high-intensity exercise affect your heart? mind? life spans? waistlines?</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image16.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">ITR filing: New annual information statement accessible on e-filing portal</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image17.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Tax optimiser: NPS, salary benefits can help Jain cut income tax by Rs 54,000</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image18.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">These SBI customers can avail up to Rs 2 lakh free insurance benefit: </p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image18.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  </div>
				</div>

				<div id="Startups" class="tabcontent" style="border:0px;display: none;">
				  <div class="row">
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Top cryptocurrency prices today: Bitcoin, Ethereum, Solana add up to 3% Top cryptocurrency prices today...</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image12.jpg');?>" width="100%"></div>

				  			
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Solana add up to 3% Why China’s cryptocurrency ban is an opportunity for India?...</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image11.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">RBI, crypto players meet for the first time, discuss grey zones</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image15.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">The number of Indians trading in crypto assets looks highly exagge...</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image15.jpg');?>" width="100%"></div>
				  		</div>
				  	</div><div class="col-md-12"><hr style="color:black;"></div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Does high-intensity exercise affect your heart? mind? life spans? waistlines?</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image16.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">ITR filing: New annual information statement accessible on e-filing portal</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image17.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Tax optimiser: NPS, salary benefits can help Jain cut income tax by Rs 54,000</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image18.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">These SBI customers can avail up to Rs 2 lakh free insurance benefit: </p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image18.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  </div>
				</div>

				<div id="Wealth" class="tabcontent" style="border:0px;display: none;">
				  <div class="row">
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Top cryptocurrency prices today: Bitcoin, Ethereum, Solana add up to 3% Top cryptocurrency prices today...</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image12.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Solana add up to 3% Why China’s cryptocurrency ban is an opportunity for India?...</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image11.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">RBI, crypto players meet for the first time, discuss grey zones</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image15.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">The number of Indians trading in crypto assets looks highly exagge...</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image15.jpg');?>" width="100%"></div>
				  		</div>
				  	</div><div class="col-md-12"><hr style="color:black;"></div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Does high-intensity exercise affect your heart? mind? life spans? waistlines?</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image16.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">ITR filing: New annual information statement accessible on e-filing portal</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image17.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">Tax optimiser: NPS, salary benefits can help Jain cut income tax by Rs 54,000</p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image18.jpg');?>" width="100%"></div>
				  		</div>
				  	</div>
				  	<div class="col-md-3">
				  		<div class="row">
				  			<div class="col-md-7"><p style="text-align:justify; font-size: 14px;">These SBI customers can avail up to Rs 2 lakh free insurance benefit: </p></div>
				  			<div class="col-md-5"><img src="<?php echo base_url('assets/website/news_image/image18.png');?>" width="100%"></div>
				  		</div>
				  	</div>
				  </div>
				</div>
			</div>
       </div><hr style="color:black;">

        <div class="col-md-12 " ></div>
        <div class="col-md-12">
            	<h2 style="margin-bottom: 30px;">Lifestyle</h2>
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
        </div>
        <div class="col-md-12"><hr style="color:black;"></div>
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