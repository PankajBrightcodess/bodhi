<div class="container">
    <div class="row">
         <div class="col-md-12">
        	 <div class="row">
        		<?php
        		if(!empty($searchrecords)){
        			$i = 0;
        			foreach ($searchrecords as $key => $value) { $i++;
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
        		       <div class="col-sm-12 col-md-6 col-lg-3 mb-3">
					  		<div class="card home-india">
							  <a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;" class="img-hover"><img style="/*height: 10rem;*/ width:100%;" class="img-fluid" src="<?php echo base_url();?><?php echo $value['image'] ?>" alt="Card image cap"></a>
							  
							  <div class="card-body">
							  	<div class="row">
							  	<div class="col-md-12 slug">
									<label><?php if(!empty($value['submenu'])){
													echo $value['menu_name'].' | '.$value['submenu'];}else{echo $value['menu_name'];}?></label>
								</div>
							  	<div class="col-md-12 text-slug">
							    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $value['slug']);?>" style="color: black;"><?= $value['tittle'] ?></a></p>
							   </div>
							   <div class="col-md-12 slug-time">
								  <label><?php echo date('h:i A',strtotime($value['entrydate']));?>
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


