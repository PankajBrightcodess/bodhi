<body>

    <div class="top-bar sticky-top" style="background-color:white;">
        <div class="container">
            <div class="row ">
                <div class="col-md-2 col-sm-12">
                     <a href="<?php echo base_url('/')?>"><img src="<?php echo base_url('assets/images/logo.jpg') ?>" height="100px" width="100px" style="float:center"></a>
                </div>
                <div class="col-md-6">
                    <a href="<?php echo base_url('/')?>" style="text-decoration: none;"><h2 style="font-family: 'Cinzel', serif; text-align: center; margin-top:30px;color: rgb(35 97 138);"> Bodhiwire</h2></a>
                </div>
                <div class="col-md-4">
                    <div class="input-group rounded">
                      <input type="search" class="form-control rounded" style="margin-top:30px;" placeholder="Search" aria-label="Search"
                      aria-describedby="search-addon" />
                      <span class="input-group-text border-0" style="margin-top:30px; margin-right: 7px;" id="search-addon">
                        <i class="fas fa-search"></i>
                      </span>
                      <button type="button" class="btn btn-sm btn-space btn-outline-dark " data-mdb-ripple-color="dark" style="float:right;margin-top:30px; margin-right: 7px;">Sign In</button>
                    <button type="button"  style="float:right;margin-top:30px;" class="btn btn-sm btn-dark ">Register</button>
                    </div>
                   
                    
                </div>
            </div>
        </div>

    <!-- =========================================== -->
    <nav class="navbar navbar-expand-lg" style="background-color:rgb(35 97 138);">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color:white;" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  me-auto mb-2 mb-lg-0" id="menu">
                    <li class="nav-item"> <!--  -->
                        <a href="<?php echo base_url("website/") ?>" style="color: white;" class="nav-link active">HOME </a>
                    </li>
                    <?php if (!empty($result4)) {
                        foreach ($result4 as $val) {
                            $m = $val['menu_name']; 
                            ?>
                            <li class="nav-item"><a href="<?php echo base_url('website/india/'. $val['id'].'/'.$val['menu_name'])?>" class="drop nav-link"><?= $val['menu_name'] ?></a>
                                <?php if ($val['menu_name']=='INDIA' ||  $val['menu_name']=='WORLD'|| $val['menu_name']=='BUSINESS' ||  $val['menu_name']=='MORE') {
                                    ?>
                                    <div class="dropdown_4columns container">
                                    <!-- Begin 4 columns container -->
                                    <div class="col_1">
                                        <ul>
                                        </ul>
                                    </div>
                                    <div class="col_1">
                                        <ul>
                                        </ul>
                                    </div>
                                    <div class="col_1">
                                        <ul>
                                            <li>
                                                <h5>BROWSE <?= $val['menu_name'] ?></h5>
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
                                    <?php
                                }?>
                         </li> <?php }
                     } ?>
                </ul>
                 
            </div>
        </div>
    </nav>
  </div>