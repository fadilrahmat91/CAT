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
		
		<form id="form_edit_pass" method="post"   enctype="multipart/form-data" >		
          <div class="row">
		  
            <div class="col-md-6">
			  <div class="form-group">
                <label>Password Lama:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Input Password Lama"  type="password" class="form-control"  name="passwordlama" id="pass_lama"  required>
                  <input   type="hidden" class="form-control" value="<?php echo $this->session->userdata('nama');?>" name="id_siswa" id="id_siswa"  >
                </div>
			  </div>
			</div>
			
			<div class="col-md-6">
			  <div class="form-group">
                <label>Password Baru:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Password Baru"  type="password" class="form-control" name="password" id="p_l"  required>
                </div>
			  </div>
			</div>
			
			<div class="col-md-6">
			  <div class="form-group">
                <label>Confirm Password Baru:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Confirm Password"  type="password" class="form-control"  name="pass_baru" id="cpass_baru"  required>
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

//validasi
	
	
$("#form_edit_pass").submit(function(evt){
    evt.preventDefault();
	var pass_lama = $("#pass_lama").val();
	
	$.get("<?php echo site_url()?>siswa/cek_pass/"+pass_lama,function(hasil){
		if(hasil.status=="belum"){
			alert("Password Lama Yang Anda Input Tidak Ditemukan !");
			return false;
		}else{
			if($("#cpass_baru").val()!= $("#p_l").val() ){
				alert("Password Yang Anda Input Tidak Sama !");
				return false;
			}else{
				if(confirm("Anda Yakin Ingin Mengubah Password ?")){
					loading_cool('.box-body');
					$.post("<?php echo site_url('siswa/ganti_pass');?>",$("#form_edit_pass").serialize(),function(res){
						window.location.assign("<?php echo base_url()?>");
					});
					loading_cool('.box-body');
					return false;
				}
			}
		}
		
	});
	
	
	

}); //


function batal_siswa(){
	window.location.assign("<?php echo base_url()?>");
}

    

</script>
