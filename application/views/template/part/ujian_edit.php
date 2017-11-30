<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Ujian
        <small>Edit</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Edit data ujian</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collaujiane"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_tambah">
		
		<form id="form_edit_ujian" method="post"   enctype="multipart/form-data" >		
          <div class="row">
		  
            <div class="col-md-6">
			  <div class="form-group">
                <label>Nama Ujian:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input  placeholder="Nama Ujian" type="text" class="form-control" value="<?php echo $d_ujian_id->nama_ujian;?>"  name="nama_ujian" id="nama_ujian"  required />						
                  <input   type="hidden" class="form-control" value="<?php echo $d_ujian_id->id_ujian;?>" name="id_ujian" id="id_ujian"  >
                </div>
				

			</div>
		</div>
			
		<div class="col-md-6">
			<div class="form-group">
			
				
				<label>Jenis Ujian</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <select   type="text" class="form-control"  name="jenis" id="jenis"  required >
					<option value="acak">Acak </option>
				  </select>
                  
                </div>
			  </div>
			</div>
			
			<div class="col-md-6">		
				
					<input type="submit" class="btn btn-danger btn-block" value="Ubah data">
			</div>
			<div class="col-md-6">			
					<input type="button" onclick="batal_ujian()" class="btn btn-primary btn-block" value="Batal">
			</div>
                <!-- /.input group -->
		</div>
	</form>
</section>
	
	
<script>
$("#form_edit_ujian").submit(function(evt){
    evt.preventDefault();
	loading_cool('.box-body');
	
	if(confirm('Anda Yakin?')){
		$.post("<?php echo site_url('ujian/a_edit');?>",$(this).serialize(),function(res){
			eksekusi_controller('ujian');
		});
		loading_cool('.box-body');
		return false;
	}

}); //


function batal_ujianoal(){
	loading_cool('.box-body');
		eksekusi_controller('ujian');
	loading_cool('.box-body');
}

    

</script>
