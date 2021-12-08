<body>

    <div class="top-bar abcd"> 
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-4">
                     <a href="<?php echo base_url('/')?>"><img src="<?php echo base_url('assets/images/logo.png') ?>" height="90%" width="95%" style="float:center;" style="margin:0px;"></a>
                </div>
                <div class="col-md-6 col-8 main-heading">
                    <a href="<?php echo base_url('/')?>"><h2>BODHI <span >WIRE</span></h2><h5>INTERNATIONAL NEWS AGENCY</h5>   </a>
                    <!-- <a href="<?php echo base_url('/')?>"><img src="<?php echo base_url('assets/website/news_image/bodhi.png') ?>" style="float:center; margin-top: 10px;" width="100%" ></a> -->
                </div>
                <div class="col-md-4 mb-3" style="float:right;">
                    <!-- '''''''''''''''''''''''''search''''''''''''''''''''''''' -->


                    <!-- '''''''''''''''''''''''end search''''''''''''''''''''''' -->
                    <div class="input-group btn-group rounded" >

                       <div class="search-box btn-space">
                        <button class="btn-search btn-space"><i class="fas fa-search"></i></button>
                        <input type="text" class="input-search"  placeholder="Type to Search...">
                      </div>
                      <div class="btn-toolbar">
                      <a href="<?php echo base_url('website/signin')?>" class="btn btn-sm mr-2 btn-outline-dark " data-mdb-ripple-color="dark" style="float:right;margin-top:10px;">Sign In</a>
                      <a href="<?php echo base_url('website/signup')?>" style="float:right;margin-top:10px;" class="btn mr-2 btn-sm btn-dark btn-space">Register</a>  
                      </div>                 
                  </div>
                   
                    
                </div>
            </div>
        </div>

    <!-- =========================================== -->
    <nav class="navbar navbar-expand-lg bg-light" style="background: #23618a !important; padding:0px; ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color:white;" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left:10px;">
                <ul class="navbar-nav  me-auto mb-2 mb-lg-0" id="menu" >
                    <li class="nav-item"> 
                        <a href="<?php echo base_url("website/") ?>" style="color: white;" class="nav-link active">HOME </a>
                    </li>
                    <?php if (!empty($result4)) {

                        foreach ($result4 as $val) {
                            $m = $val['menu_name']; 
                            $id = $val['id'];
                            ?>
                            <li class="nav-item"><a href="<?php echo base_url('website/india/'. $val['id'].'/'.$val['menu_name'])?>" class="drop nav-link"><?= $val['menu_name'] ?></a>
                                <?php if ($val['menu_name']=='INDIA' ||  $val['menu_name']=='WORLD'|| $val['menu_name']=='BUSINESS' ||  $val['menu_name']=='MORE') {
                                    ?>
                                    <div class="dropdown_4columns container">
                                        <div class="row">
                                      <div class="col-md-3 news-list">
                                    <!-- Begin 4 columns container -->
                                            <div class="col_1">
                                                <ul>
                                                </ul>
                                            </div>
                                            <div class="col_1">
                                                <ul>
                                                    <li>
                                                        <h5><?= $val['menu_name'] ?></h5>
                                                        <hr>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <?php $result = $this->Account_model->getsubmenuslist(array('menu' => $val['menu_name'])) ?>
                                                    <?php if (!empty($result)) {
                                                        foreach ($result as $val) {  ?>
                                                            <li><a href="<?php echo base_url('website/north/' . $val['id'] . '/' . $m . '/' . $val['submenu']) ?>"><?= $val['submenu'] ?></a></li>
                                                    <?php }
                                                    } ?>
                                                </ul>
                                            </div>
                                      </div>
                                  <div class="col-md-9 news-array">
                                        <?php $result = $this->Website_model->getsubmenuslistbyid(array('menu' => $id));?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <a href="<?php echo base_url('website/detailnewsview/'.$result[0]['slug']);?>"><p><?= $result[0]['tittle'] ?></p></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                         <a href="<?php echo base_url('website/detailnewsview/'.$result[0]['slug']);?>"><img src="<?php echo base_url();?><?php echo $result[0]['image'] ?>" class="card-img-top" style="margin-top: 10px;" alt="Card image cap"></a>
                                                    </div>
                                                </div>        

                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <a href="<?php echo base_url('website/detailnewsview/'.$result[1]['slug']);?>"><p> <?= $result[1]['tittle'] ?></p></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="<?php echo base_url('website/detailnewsview/'.$result[1]['slug']);?>"><img src="<?php echo base_url();?><?php echo $result[1]['image'] ?>" class="card-img-top" style="margin-top: 10px;" alt="Card image cap"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>    
                                            </div>
                                             <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <a href="<?php echo base_url('website/detailnewsview/'.$result[2]['slug']);?>"><p><?= $result[2]['tittle'] ?></p></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="<?php echo base_url('website/detailnewsview/'.$result[2]['slug']);?>" ><img src="<?php echo base_url();?><?php echo $result[2]['image'] ?>" class="card-img-top" style="margin-top: 10px;" alt="Card image cap"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <a href="<?php echo base_url('website/detailnewsview/'.$result[3]['slug']);?>"><p><?= $result[3]['tittle'] ?></p></a>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <a href="<?php echo base_url('website/detailnewsview/'.$result[3]['slug']);?>"><img src="<?php echo base_url();?><?php echo $result[3]['image'] ?>" class="card-img-top" style="margin-top: 10px;" alt="Card image cap"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- '''''''''''''''''''''''''share'''''''''''''''''''''' -->
                                           
                                            
                                            
                                            <!-- '''''''''''''''''''''''''share end'''''''''''''''''''' -->
                                        </div>
                                      
                                  </div>
                                </div>
                                </div>
                                    <?php
                                }?>
                         </li> <?php }
                     } ?>
                </ul>

                 
            </div>
        </div>
    </nav>
  
</div>
<div class="header-gap"></div>
