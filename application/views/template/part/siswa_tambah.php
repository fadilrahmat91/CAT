<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Siswa
        <small>Tambah</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah data siswa</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_tambah">
		
		<form id="form_tambah_siswa" method="post"   enctype="multipart/form-data" >		
          <div class="row">
		    
            <div class="col-md-6">
			  <div class="form-group">
                <label>Nama:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Nama Siswa"  type="text" class="form-control" name="nama" id="nama"  required>
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
                  <input placeholder="Nama Email"  type="text" class="form-control" name="email" id="email"  required>
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
                  <input placeholder="Asal Sekolah"  type="text" class="form-control" name="sekolah" id="sekolah"  required>
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
                  <select type="text" id="jenis" name="genre"  placeholder="Gender" class="form-control" required>							
							<option value="laki-laki">Laki-Laki</option>
							<option value="perempuan">Perempuan</option>							
				</select>
                </div>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
                <label>Username:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input type="text" id="username" name="username"  placeholder="Username" class="form-control" required>							
							
                </div>
			  </div>
			</div>
			
			<div class="col-md-6">
			  <div class="form-group">
                <label>Password :</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input type="password" id="password" name="password"  placeholder="Password" class="form-control" required>							
							
                </div>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="form-group">
                <label>Confirm Password :</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input type="password" id="password1" name="password1"  placeholder="Ulangi Password" class="form-control" required>							
							
                </div>
			  </div>
			</div>
			
			<div class="col-md-12">				
				
					<input type="submit" class="btn btn-danger " value="Tambah data">
				
					<input type="button" onclick="batal_siswa()" class="btn btn-primary " value="Batal">
				
			</div>
                <!-- /.input group -->
			</div>
		</form>
	</section>
	
	
<script>
$("#form_tambah_siswa").submit(function(evt){
    evt.preventDefault();
	if($("#password").val()!= $("#password1").val() ){
		alert("Password Yang Anda Input Tidak Sama !");
		return false;
	}
	loading_cool('.box-body');
	$.post("<?php echo site_url('siswa/add_siswa');?>",$(this).serialize(),function(res){
		eksekusi_controller('siswa');
	});
	loading_cool('.box-body');
	return false;

}); //


function batal_produk(){
	loading_cool('.box-body');
		eksekusi_controller('siswa');
	loading_cool('.box-body');
}

    

</script>
