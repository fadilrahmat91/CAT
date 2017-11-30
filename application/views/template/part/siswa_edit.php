<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Siswa
        <small>Edit</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Edit data siswa</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_tambah">
		
		<form id="form_edit_siswa" method="post"   enctype="multipart/form-data" >		
          <div class="row">
		  <div class="col-md-12">
		    <input type="submit" onclick="eksekusi_controller('siswa/f_pass')" class="btn btn-warning " value="Change Password">
		</div>
            <div class="col-md-6">
			  <div class="form-group">
                <label>Nama:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Nama Siswa"  type="text" class="form-control" value="<?php echo $d_siswa_id->nama;?>" name="nama" id="nama"  required>
                  <input   type="hidden" class="form-control" value="<?php echo $d_siswa_id->id_siswa;?>" name="id_siswa" id="id_siswa"  >
                </div>
			  </div>
			</div>
			
			<div class="col-md-6">
			  <div class="form-group">
                <label>Email:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Nama Email"  type="text" class="form-control"value="<?php echo $d_siswa_id->email;?>" name="email" id="email"  required>
                </div>
			  </div>
			</div>
			
			<div class="col-md-6">
			  <div class="form-group">
                <label>Asal Sekolah:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Asal Sekolah"  type="text" class="form-control" value="<?php echo $d_siswa_id->asal_sekolah;?>" name="sekolah" id="sekolah"  required>
                </div>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <select type="text" id="jenis" name="jenis"  placeholder="Gender" class="form-control" required>							
							<option value="laki-laki">Laki-Laki</option>
							<option value="perempuan">Perempuan</option>							
				</select>
                </div>
			  </div>
			</div>
			<div class="col-md-12">				
				
					<input type="submit" class="btn btn-danger " value="Ubah data">
				
					<input type="button" onclick="batal_siswa()" class="btn btn-primary " value="Batal">
				
			</div>
                <!-- /.input group -->
			</div>
		</form>
	</section>
	
	
<script>
$("#form_edit_siswa").submit(function(evt){
    evt.preventDefault();
	loading_cool('.box-body');
	$.post("<?php echo site_url('siswa/a_edit');?>",$(this).serialize(),function(res){
		window.location.assign("<?php echo base_url()?>");
	});
	loading_cool('.box-body');
	return false;

}); //


function batal_siswa(){
	window.location.assign("<?php echo base_url()?>");
}

    

</script>
