<section class="content">
      <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                    	<h3 class="card-title"><?php echo $title; ?></h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div class="row">
                        	<div class="col-md-5 col-lg-4">
                                <?php echo form_open_multipart('home/savenews');?>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select <?php echo form_input(array('name' => 'menu_id', 'id' => 'name', 'class' => 'form-control', 'placeholder' => '')); ?>>
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
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select <?php echo form_input(array('name' => 'submenu_id', 'id' => 'name', 'class' => 'form-control', 'placeholder' => '')); ?>>
                                            <option value="">Select sub Menu</option>
                                            <?php if (!empty($result2)) {  
                                                $i = 0;
                                                foreach ($result2 as $val) {
                                                    ?>
                                                    <option value="<?php echo $val['id'] ?>"><?php echo $val['submenu'] ?></option>
                                            <?php }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <?php echo form_input(array('type'=>'text','name'=>'tittle','id'=>'activate_not','class'=>'form-control','placeholder'=>'News Tittle','required'=>'required'));?>
                                    </div>                                    
                                </div>
                                <!-- <div class="form-group row">
                                    <div class="col-sm-12">
                                        <php echo form_input(array('type'=>'hidden','name'=>'slag','id'=>'activate_not','class'=>'form-control','placeholder'=>'News Tittle','required'=>'required','onkeyup'=>'return convertToSlug(this);'));?>
                                    </div>                                    
                                </div> -->
                                
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                    <lable>News Description</lable>
                                    <textarea class="form-control" name="news" id="editor1" rows="8" col="12"></textarea>
                                    </div>                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                    <lable>News Image</lable>
                                        <?php echo form_input(array('type'=>'file','name'=>'image','id'=>'activate_not','class'=>'form-control','placeholder'=>'Enter Submenu name','required'=>'required'));?>
                                    </div>                                    
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-12">
                                    <lable>Top News :</lable>
                                        <?php echo form_input(array('type'=>'checkbox','name'=>'top_news_status','id'=>'activate_not','value'=>'1'));?>
                                    </div>                                    
                                </div>
                                <script> 
                // Replace the <textarea id="editor1"> with a CKEditor 
                // instance, using default configuration. 
                CKEDITOR.replace( 'editor1' ); 
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
                            <div class="col-md-1"></div>
                        	<div class="col-md-7 table-responsive">
                            	<table class="table data-table stripe hover nowrap table-bordered">
                                    <thead>
                                        <tr>    
                                            <th>S.no</th>
                                            <th>ENTRY ID</th> 
                                            <th>MENU NAME</th> 
                                            <th>SUBMENU NAME</th> 
                                            <th>IMAGE</th>   
                                            <th>TITTLE</th>  
                                           
                                            <th>SLUG</th> 
                                            <th>VIEWS</th>                                         
                                            <th>Action</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; if(!empty($result)){
                                            foreach($result as $val){ $i++;$id=$val['id']; ?>
                                        <tr>
                                            <td ><?= $i?></td>
                                            <td ><?= $val['id']?></td>
                                            <td><?php echo $this->Account_model->getmenuname($val['menu_id']);?></td>
                                            <td><?php echo $this->Account_model->getsubmenuname($val['submenu_id']);?></td>
                                            <!-- <td ><= $val['menu_id']?></td> -->
                                            <!-- <td ><= $val['submenu_id']?></td> -->
                                            <td><img src="<?php echo file_url($val['image']); ?>" alt="Image" class="img-thumbnail" style="width: 1050px ;height:250 !important" alt="Responsive image"></td>
                                            <td ><?= $val['tittle']?></td>
                                            
                                            <td ><?= $val['slug']?></td>
                                            <td ><?= $val['view']?></td>
                                            <td><span class="float-right">
                                            <a href='<?php echo base_url("home/delete_sidebar/");?>'><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
                                            <a href="<?php echo base_url("home/edit_sidebar/");?>"><button class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button></a>
                                            <button class="btn btn-info btn-xs duplicate" type="button" data-dupid=""><i class="fa fa-network-wired"></i></button>
                                            </span></td>
                                        </tr>
                                        <?php } } ?>
                                        
                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>    
<script>
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
	
	$(document).ready(function(e) {
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