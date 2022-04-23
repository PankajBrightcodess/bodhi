<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                    	<h3 class="card-title"><?php echo $title; ?></h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body" sty>
                    <div class="row ">
                        	<div class="col-md-12 col-lg-12">
                                <?php echo form_open_multipart('home/savenews');?>
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Menu</lable>
                                        <select name="menu_id" onchange="getsubmenulist(this.value)" class="form-control">
                                            <option value="">Select Menu</option>
                                            <?php if (!empty($result1)) {  
                                                $i = 0;
                                                foreach ($result1 as $val) {
                                                    ?>
                                                    <option value="<?php echo $val['id'] ?>"><?php echo $val['menu_name'] ?></option>
                                            <?php }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-md-6 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Sub Menu</lable>
                                         <select class="form-control submenus"   name="submenu_id">
                                                    <option value="">----SELECT----</option>
                                         </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-6 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Tittle</lable>
                                        <?php echo form_input(array('type'=>'text','name'=>'tittle','id'=>'activate_not','class'=>'form-control','placeholder'=>'News Tittle','required'=>'required'));?>
                                    </div>                                    
                                    <div class="col-sm-6 col-md-6 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">By Line</lable>
                                        <?php echo form_input(array('type'=>'text','name'=>'byline','id'=>'activate_not','class'=>'form-control','placeholder'=>'By Line'));?>
                                    </div> 
                                </div>
                                 
                                
                                <div class="form-group col-md-12 row">
                                    <div class="col-sm-12 mb-2">
                                    <lable style="font-size: 15px; font-weight:600">News Description</lable>
                                    <textarea class="form-control" name="news" id="editor1" rows="6" col="12"></textarea>
                                    </div>                                    
                                </div>
                                <div class="form-group col-md-12 row">
                                    <div class="col-sm-12 mb-2">
                                    <lable style="font-size: 15px; font-weight:600">Straplines</lable>
                                    <textarea class="form-control" name="straplines"  rows="5" col="12"></textarea>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">News Image</lable><span style="color:red;"> (Maximum Height: 52913 pixels, Minimum Height 7cm)</span>
                                        <?php echo form_input(array('type'=>'file','name'=>'image','id'=>'activate_not','class'=>'form-control','placeholder'=>'Enter Image','required'=>'required'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Other Image</lable>
                                        <?php echo form_input(array('type'=>'file','name'=>'other_image','id'=>'activate_not','class'=>'form-control','placeholder'=>'Enter Other Image'));?>
                                    </div>                                    
                                </div>

                                 <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">One More Image</lable>
                                        <?php echo form_input(array('type'=>'file','name'=>'other_image_one','id'=>'activate_not','class'=>'form-control','placeholder'=>'Enter Other Image'));?>
                                    </div>                                    
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Image Caption</lable>
                                        <?php echo form_input(array('type'=>'text','name'=>'img_caption','id'=>'activate_not','class'=>'form-control','placeholder'=>'By Line'));?>
                                    </div>                                   
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Other Image Caption</lable>
                                        <?php echo form_input(array('type'=>'text','name'=>'other_img_caption','id'=>'activate_not','class'=>'form-control','placeholder'=>'Other Image By Line'));?>
                                    </div>                                   
                                </div>
                                  <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">One More Image Caption</lable>
                                        <?php echo form_input(array('type'=>'text','name'=>'other_img_caption_one','id'=>'activate_not','class'=>'form-control','placeholder'=>'Other Image By Line'));?>
                                    </div>                                   
                                </div>


                                 <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                        <lable style="font-size: 15px; font-weight:600">Top News :</lable>
                                        <?php echo form_input(array('type'=>'checkbox','name'=>'top_news_status','id'=>'activate_not','value'=>'1'));?>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-12 mb-2">
                                      <lable style="font-size: 15px; font-weight:600">Chargable :</lable>
                                      <input type="checkbox" name="chargestatus" id="pay" onchange="" value="1">

                                    </div>   
                                    <div class="col-sm-12 col-md-12 mb-2" >
                                      <lable style="font-size: 15px; font-weight:600" id="amtlable">Amount :</lable>
                                      <input type="text" name="payment" class="form-control" id="amount">
                                    </div>                                 
                                </div>
                            <script> 
                                CKEDITOR.replace( 'editor1'); 
                            </script>                
            <div class="form-group row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo form_submit(array('name'=>'save_news','id'=>'save_cat','value'=>'Upload News','class'=>'form-control btn btn-success'));?>
                </div>
                <div class="col-md-4"></div>                                    
                </div>
                <?php echo form_close();?>
           </div>
            <div class="col-md-12">
                <hr>
            </div>
            <?php 
                if($_SESSION['role']=='admin'){
                    ?>
                    <div class="col-md-12 table-responsive" >
                <table class="table data-table stripe hover nowrap table-bordered">
                    <thead>
                        <tr style="background-color: #23618a !important; color:white;">    
                            <th>S.no</th>
                            <th>ENTRY ID</th> 
                            <th>MENU NAME</th> 
                            <th>SUBMENU NAME</th> 
                            <th>IMAGE</th>   
                            <th width="20%">TITTLE</th>  
                            <th>By Line</th>
                            <!-- <th>SLUG</th>  -->
                            <th>Published</th>                                         
                            <th>Action</th>                                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; if(!empty($result)){
                            foreach($result as $val){ $i++;$id=$val['id']; ?>
                        <tr>
                            <td ><?= $i?></td>
                            <td ><?= $val['id']?></td>
                            <td><?php echo $menu = $this->Account_model->getmenuname($val['menu_id']);?></td>
                            <td><?php echo $submenu = $this->Account_model->getsubmenuname($val['submenu_id']);?></td>
                            <!-- <td ><= $val['menu_id']?></td> -->
                            <!-- <td ><= $val['submenu_id']?></td> -->
                            <td><img src="<?php echo file_url($val['image']); ?>" alt="Image" class="img-thumbnail" alt="Responsive image"></td>
                            <td width="20%"><?= $val['tittle']?></td>
                            
                            <!-- <td ><?= $val['slug']?></td> -->
                            <td ><?= $val['byline']?></td>
                            <td style="text-align: center;"> <?php
                                    if($val['published']==1){
                                        ?><button class="btn btn-info btn-xs published" value="<?php echo $val['id'];?>"><i class="fa fa-check"></i></button><?php
                                    }else{
                                        ?><button class="btn btn-warning btn-xs published" value="<?php echo $val['id'];?>"><i class="fa fa-window-close-o" aria-hidden="true"></i></button><?php
                                    }
                        ?> </td>
                            <td><span class="float-right">
                            <button class="btn btn-danger btn-xs delete" value="<?php echo $val['id'];?>"><i class="fa fa-trash"></i></button> 
                            <a href="<?php echo base_url('home/edit_news/?id='.$val['id'])?>"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                           <!-- <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-id="<?php echo $val['id'];?>" data-menu="<?php echo $val['menu_id'];?>" data-submenu="<?php echo $val['submenu_id'];?>" data-tittle="<?php echo $val['tittle'];?>" data-byline="<?php echo $val['byline'];?>"  data-straplines="<?php echo $val['straplines'];?>" data-image="<?php echo $val['image'];?>" data-img_caption="<?php echo $val['img_caption'];?>" data-topnews="<?php echo $val['top_news_status'];?>" data-target=".bd-example-modal-lg"><i class="fa fa-edit"></i></button> -->

                           <!--  <button class="btn btn-info btn-xs duplicate" type="button" data-dupid=""><i class="fa fa-network-wired"></i></button> -->
                            </span></td>
                        </tr>
                        <?php } } ?> 
                    </tbody>
                </table>
            </div>
                    <?php
                }


            ?>
        	
        </div>
    </div>
</div>
</div>
</div>
</div>
</section> 
<!-- --------------------------------------------Modal----------------------------------------------- -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update News</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col-md-6 col-6">
              <div class="row">
                  <div class="col-md-12">
                     <lable style="font-size: 15px; font-weight:600">Menu</lable>
                   <select name="menu_id" onchange="getsubmenulist(this.value)" class="form-control">
                        <option value="">Select Menu</option>
                        <?php if (!empty($result1)) {  
                            $i = 0;
                            foreach ($result1 as $val) {
                                ?>
                                <option value="<?php echo $val['id'] ?>"><?php echo $val['menu_name'] ?></option>
                        <?php }
                        }
                        ?>
                </select>
                  </div>
                  <div class="col-md-12">
                     <lable style="font-size: 15px; font-weight:600">Sub Menu</lable>
                       <select class="form-control submenus"   name="submenu_id">
                        <option value="">----SELECT----</option>

                       
                       </select>
                  </div>
                  <div class="col-md-12">
                    <lable style="font-size: 15px; font-weight:600">Tittle</lable>
                    <?php echo form_input(array('type'=>'text','name'=>'tittle','id'=>'tittle','class'=>'form-control','placeholder'=>'News Tittle','required'=>'required'));?>
                  </div>
                  <div class="col-md-12">
                      <lable style="font-size: 15px; font-weight:600">By Line</lable>
                      <?php echo form_input(array('type'=>'text','name'=>'byline','id'=>'byline','class'=>'form-control','placeholder'=>'By Line'));?>
                  </div>
              </div>    
           </div>
           <div class="col-md-6 col-6">
               <div class="row">
                    <div class="col-md-6"><lable style="font-size: 15px; font-weight:600">News Image</lable>
                        <?php echo form_input(array('type'=>'file','name'=>'image','id'=>'image','class'=>'form-control','placeholder'=>'Enter Submenu name','required'=>'required'));?></div>
                  <div class="col-md-6"> <lable style="font-size: 15px; font-weight:600">Image Caption</lable>
                    <?php echo form_input(array('type'=>'text','name'=>'img_caption','id'=>'img_caption','class'=>'form-control','placeholder'=>'By Line'));?></div>
               </div>
           </div>
           <div class="col-md-12 col-12">
               <div class="row">
                   <div class="col-md-6"><lable style="font-size: 15px; font-weight:600">News Description</lable>
                        <textarea class="form-control" name="news" id="news" rows="6" col="12"></textarea></div>
                  <div class="col-md-6 mb-3"><lable style="font-size: 15px; font-weight:600">Straplines</lable>
                        <textarea class="form-control" name="straplines" id="straplines"  rows="5" col="12"></textarea></div>
                 
                        
                  <div class="col-md-12"> <lable style="font-size: 15px; font-weight:600">Top News :</lable>
                        <?php echo form_input(array('type'=>'checkbox','name'=>'top_news_status','id'=>'top_news_status','value'=>'1'));?></div>
               </div>
           </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Update</button>
      </div>
    </div>
  </div>
</div>
<!-- --------------------------------------------Modal End------------------------------------------- -->
<script>
    $(document).ready(function(e) {
        $('.amount').hide(true);

    var table=$('.data-table').DataTable({
            scrollCollapse: true,
            autoWidth: false,
            responsive: true,
            columnDefs: [{
                targets: "no-sort",
                orderable: false,
            }],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "language": {
                "info": "_START_-_END_ of _TOTAL_ entries",
                searchPlaceholder: "Search"
            },
        }); 
        let editor;
        ClassicEditor
        .create(document.querySelector('#editor1'), {

        })
        .then(newEditor => {
            editor = newEditor;
            //console.log(editor.config._config.toolbar); 
        }, editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

        $('.hoverable').mouseenter(function(){
            //$('[data-toggle="popover"]').popover();
            $(this).popover('show');                    
        }); 

        $('.hoverable').mouseleave(function(){
            $(this).popover('hide');
        });

        function convertToSlug(Text) {
    return Text.toLowerCase()
             .replace(/[^\w ]+/g, '')
             .replace(/ +/g, '-');
    }

    $('.body').on('change','.menu_id',function(){
    debugger;
    var menu_id =$(this).val();
    $.ajax({
        type:"POST",
        // url:"<?php echo base_url("home/get_submenulist");?>",
        data:{menu_id :menu_id},
        type:"json",
        success:function(data){
            alert(data);
        }

    });
    });

    $('.duplicate').click(function(){
        var dupid = $(this).data('dupid');
        $.ajax({
            url:"<?php echo base_url('home/ajax_sidebar') ;?>",
            method:"POST",
            data:{dupid:dupid},
            success:function(data){
                //console.log(data);
                var setdata = JSON.parse(data);
                //console.log(setdata);
                $('#activate_menu').val(setdata.activate_menu);
                $('#activate_not').val(setdata.activate_not);
                $('#base_url').val(setdata.base_url);
                $('#icon').val(setdata.icon);
                $('#parent_id').val(setdata.parent).trigger('change');
                $('#position').val(setdata.position);
                var role_text = setdata.role_id;                    
                $('#roles').val(role_text);
                $('#status').val(setdata.status);
            }
        });
    });
        
    $('body').on('change','#parent_id',function(){
        var parent_id=$(this).val();
        var option="<select name='position' id='position' class='form-control' required>";
        option+="<option value=''>Select </option>";
        option+="<option value='0'>Top</option>";
        $.ajax({
            type:"POST",
            url:"<?php echo base_url("home/getOrderList"); ?>",
            data:{parent_id:parent_id},
            dataType:"json",
            beforeSend: function(){
                //$(".box-overlay").show();
            },
            success: function(data){
                $(data).each(function(i, val) {
                    option+="<option value='"+val['position']+"'>After "+val['name']+"</option>";
                });
                option+='</select>';
                $('#position').replaceWith(option);
                $('.box-overlay').hide();
            }
        });
    });
    $('#parent_id').trigger('change');
    });
</script>

    <script type="text/javascript">

         function getsubmenulist(id){
            // debugger;
    $.ajax({
            type:'POST',
            url:"<?PHP echo base_url('home/get_submenulist'); ?>",
            data: {id:id},
            dataType: 'json',
            success: function(result){
                 $('.submenus').append('<option value="">---SELECT---</option>');
             $.each(result,function(ind,val){
                            $('.submenus').append('<option value="'+val.id+'">'+val.submenu+'</option>');
                          });
                          
                },
                // 
                error: function(){
                alert("error");
                }
        });
        $('.submenus').html(''); 
       } 


    $('.delete').click(function(e){
        debugger;
        var id=$(this).closest('tr').find('.delete').val();
        if(confirm('Are you Sure !')){
        $.ajax({
                type:'GET',
                url:"<?PHP echo base_url('home/delete_news'); ?>",
                data: {id:id},
                success: function(result){
                    // alert(result);
                    console.log(result);
                    location.reload();
                    },
                    error: function(){
                    alert("error");
                    }
        });
    }
    return false;
    });

     $('.published').click(function(e){
        debugger;
        var id=$(this).closest('tr').find('.published').val();
        if(confirm('Are You Want To Change ?')){
        $.ajax({
                type:'GET',
                url:"<?PHP echo base_url('home/published_news'); ?>",
                data: {id:id},
                success: function(result){
                    // alert(result);
                    console.log(result);
                    location.reload();
                    },
                    error: function(){
                    alert("error");
                    }
        });
    }
    return false;
    });

       $('.updt').click(function(e){
    var id = $(this).data('id');
    var menu_id = $(this).data('menu_id');
    var submenu_id = $(this).data('submenu_id');
    var tittle = $(this).data('tittle');
    var byline = $(this).data('byline');
    var news = $(this).data('news');
    var straplines = $(this).data('straplines');
    var image = $(this).data('image');
    var img_caption = $(this).data('img_caption');
    var topnews = $(this).data('topnews');
    $('#id').val(id);
    $('#menu_id').val(menu_id);
    $('#submenu_id').val(submenu_id);
    $('#tittle').val(tittle);
    $('#byline').val(byline);
    $('#news').val(news);
    $('#straplines').val(straplines);
    $('#image').val(image);
    $('#img_caption').val(img_caption);
    $('#topnews').val(topnews);

  

    
})
       $('#amount').hide();
    $('#amtlable').hide();

 $('#pay').click(function(e){
    debugger;
    $('#amount').show();
    $('#amtlable').show();
});




    </script>  
