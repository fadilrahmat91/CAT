<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin
        <small>Edit</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Edit data admin</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-admin="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_tambah">
		
		<form id="form_edit_admin" method="post"   enctype="multipart/form-data" >		
          <div class="row">
		    
            <div class="col-md-6">
			  <div class="form-group">
                <label>Nama:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Username"  type="text" class="form-control" value="<?php echo $d_admin_id->username;?>" name="username" id="username"  required>
                  <input   type="hidden" class="form-control" value="<?php echo $d_admin_id->id;?>" name="id_admin" id="id_admin"  >
                </div>
			  </div>
			</div>
			
			<div class="col-md-6">
			  <div class="form-group">
                <label>Password:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Masukkan Password Baru"  type="text" class="form-control" name="password" id="password"  required>
                </div>
			  </div>
			</div>
			
			
			<div class="col-md-12">				
				
					<input type="submit" class="btn btn-danger " value="Tambah data">
				
					<input type="button" onclick="batal_admin()" class="btn btn-primary " value="Batal">
				
			</div>
                <!-- /.input group -->
			</div>
		</form>
	</section>
	
	
<script>
$("#form_edit_admin").submit(function(evt){
    evt.preventDefault();
	loading_cool('.box-body');
	$.post("<?php echo site_url('admin/a_edit');?>",$(this).serialize(),function(res){
		eksekusi_controller('admin');
	});
	loading_cool('.box-body');
	return false;

}); //


function batal_admin(){
	loading_cool('.box-body');
		eksekusi_controller('admin');
	loading_cool('.box-body');
}

    

</script>
