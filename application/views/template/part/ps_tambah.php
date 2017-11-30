<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pembuat Soal
        <small>Tambah</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah data Ps</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_tambah">
		
		<form id="form_tambah_ps" method="post"   enctype="multipart/form-data" >		
          <div class="row">
		  
            <div class="col-md-6">
			  <div class="form-group">
                <label>Nama:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                  <input placeholder="Nama Pembuat Soal"  type="text" class="form-control" name="nama" id="nama"  required>
                </div>
			  </div>
			</div>
			<div class="col-md-12">				
				
					<input type="submit" class="btn btn-danger " value="Tambah data">
				
					<input type="button" onclick="batal_produk()" class="btn btn-primary " value="Batal">
				
			</div>
                <!-- /.input group -->
			</div>
		</form>
	</section>
	
	
<script>
$("#form_tambah_ps").submit(function(evt){
    evt.preventDefault();
	loading_cool('.box-body');
	$.post("<?php echo site_url('psoal/add_psoal');?>",$(this).serialize(),function(res){
		eksekusi_controller('psoal');
	});
	loading_cool('.box-body');
	return false;

}); //


function batal_produk(){
	loading_cool('.box-body');
		eksekusi_controller('psoal');
	loading_cool('.box-body');
}

    

</script>
