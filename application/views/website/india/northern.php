<div class="container">
    <div class="row text-center">
        <div class="col-md-12 mb-3" ></div>
        <div class="col-md-12">
        	<h4 style="font-family: 'Cinzel', serif; float: left; margin-top:0px;color: rgb(35 97 138);"> 
        	<?= $menu ;?> | <?= $submenu ;?></h4>
        	
        </div><div class="col-md-12">
        <hr style="color:black;">
       </div>
        <div class="col-md-12">
        	<div class="tab" style="background-color: transparent;border: 0px solid #ccc;">
        	
			</div>
				

		<div id="Economy" class="tabcontent" style="border:0px;display:inline;">
				<!--   <h3>Economy</h3> -->
				  <div class="row">
				  	<div class="col-md-7" >
					  <?php $j=0; if(!empty($result)){                  
                         foreach($result as $val){  $j++;if($j==1){?>
				  		<img src="<?php echo base_url();?><?php echo $val['image'] ?>" style="width:600px; height;400px;" class="img-fluid"><hr>
				  		<p><a href="<?php echo base_url('website/detailnewsview/'.$val['slug']);?>" style="color: black;"><?= $val['tittle'] ?></a></p>
				  	<?php }} }?>
					</div>
				  	<div class="col-md-5">
				  		<div class="row">
						  <?php if(!empty($result)){
                              $i=0;
                              foreach($result as $val){ $i++;if($i>1 && $i<6){ ?>
                      <div class="col-md-12">
													<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px; margin-top: 3px;"><?php if(!empty($val['submenu'])){
												echo $val['submenu'];}else{echo $val['menu_name'];}?></label>
							       </div>
				  			<div class="col-md-7 mb-3" style="text-align:justify;"><p><a href="<?php echo base_url('website/detailnewsview/' . $val['slug']);?>" style="color: black;"><?= $val['tittle'] ?></a></p></div>
				  			<div class="col-md-5 mb-3"><img src="<?php echo base_url();?><?php echo $val['image'] ?>" class="img-fluid"></div>
                             <?php } }}?>
				  			
				  	   </div>
				  	</div>
				  </div><hr>
				  <div class="row">
					  <?php $k=0; if(!empty($result)){
                      foreach($result as $val){ $k++; if($k >= 6){ ?>
					  <div class="col-md-3 mb-3">
				  		<div class="card" style=" height: 20rem;">
						  <img class="card-img-top" src="<?php echo base_url();?><?php echo $val['image'] ?>" alt="Card image cap">
						  <div class="card-body">
						  	<div class="row">
						  		<div class="col-md-12">
								<label style="float:left; color: #5E6563; font-weight: 500; font-size:10px; margin-top: 3px;"><?php if(!empty($val['submenu'])){
												echo $val['submenu'];}else{echo $val['menu_name'];}?></label>
							</div>
							<div class="col-md-12">
						    <p class="card-text"><a href="<?php echo base_url('website/detailnewsview/' . $val['slug']);?>" style="color: black;"><?= $val['tittle'] ?></a></p></div></div>
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