<!-- Content Header (Page header) -->
<script type="text/javascript" src="<?php echo base_url()?>assets/ckeditor/ckeditor.js"></script>
    <section class="content-header">
      <h1>
         Soal
        <small>Edit</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Edit data soal</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collasoale"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_form_edit">
		
		<form id="form_edit_soal" method="post"   enctype="multipart/form-data" >		
          <div class="row">
		  
            
		<div class="col-md-12">
			  <div class="form-group">	
					<div class="row">
						<div class="col-md-5">
							<label>Gambar:</label>
							<div class="input-group">
							 
							  <input   type="file"   name="gambar[]" id="gambar"   />
							</div>
						</div>
						<div class="col-md-7">
							<label>Judul Soal:</label>
							<div class="input-group">
							  
							  <textarea placeholder="Tulis Soal" id="ckedtor" type="text" class="form-control ckeditor"  name="j_soal" id="j_soal"  required >
									<?php echo $d_soal_id->petunjuk_soal;?>
							  </textarea>
							  
							</div>
						</div>
					</div>
			  </div>
		</div>
		<div class="col-md-12">
			  <div class="form-group">	
					<div class="row">
						<div class="col-md-5">
							<label>Gambar:</label>
							<div class="input-group">
							 
							  <input   type="file"   name="gambar[]" id="gambar"   />
							</div>
						</div>
						<div class="col-md-7">
							<label>Soal:</label>
							<div class="input-group">
							  <input type="hidden" name="id_soal" value="<?php echo $d_soal_id->id_soal?>" />
							  <textarea placeholder="Tulis Soal" id="ckedtor1" type="text" class="form-control ckeditor"  name="soal" id="soal"  required >
									<?php echo $d_soal_id->soal;?>
							  </textarea>
							  
							</div>
						</div>
					</div>
			  </div>
		</div>
		<div class="col-md-12">
			  <div class="form-group">	
					<div class="row">
						<div class="col-md-5">
							<label>Gambar Opsi A:</label>
							<div class="input-group">
							  
							  <input   type="file"   name="gambar[]" id="gambar"   />
							</div>
						</div>
						<div class="col-md-7">
							<label>Opsi A:</label>
							<div class="input-group">
							  
							  <textarea placeholder="Opsi A" id="ckedtor2" type="text" class="form-control ckeditor"  name="opsi_a" id="opsi_a"  required>
									<?php echo $d_soal_id->opsi_a;?>
							  </textarea>
							  
							</div>
						</div>
					</div>
			  </div>
		</div>
		<div class="col-md-12">
			  <div class="form-group">	
					<div class="row">
						<div class="col-md-5">
							<label>Gambar Opsi B:</label>
							<div class="input-group">
							 
							  <input   type="file"  name="gambar[]" id="gambar"   />
							</div>
						</div>
						<div class="col-md-7">
							<label>Opsi B:</label>
							<div class="input-group">
							 
							  <textarea placeholder="Opsi B" id="ckedtor3" type="text" class="form-control ckeditor"  name="opsi_b" id="opsi_b"  required>
									<?php echo $d_soal_id->opsi_b;?>
							  </textarea>
							  
							</div>
						</div>
					</div>
			  </div>
		</div>
		<div class="col-md-12">
			  <div class="form-group">	
					<div class="row">
						<div class="col-md-5">
							<label>Gambar Opsi C:</label>
							<div class="input-group">
							 
							  <input   type="file"   name="gambar[]" id="gambar"   />
							</div>
						</div>
						<div class="col-md-7">
							<label>Opsi C:</label>
							<div class="input-group">

							  <textarea placeholder="Opsi C" id="ckedtor4"  type="text" class="form-control ckeditor"  name="opsi_c" id="opsi_c"  required>
									<?php echo $d_soal_id->opsi_c;?>
							  </textarea>
							  
							</div>
						</div>
					</div>
			  </div>
		</div>
		<div class="col-md-12">
			  <div class="form-group">	
					<div class="row">
						<div class="col-md-5">
							<label>Gambar Opsi D:</label>
							<div class="input-group">
							  
							  <input   type="file"   name="gambar[]" id="gambar"   />
							</div>
						</div>
						<div class="col-md-7">
							<label>Opsi D:</label>
							<div class="input-group">
							 
							  <textarea placeholder="Opsi D" id="ckedtor5"  type="text" class="form-control ckeditor"  name="opsi_d" id="opsi_d"  required>
									<?php echo $d_soal_id->opsi_d;?>
							  </textarea>
							  
							</div>
						</div>
					</div>
			  </div>
		</div>
		<div class="col-md-12">
			  <div class="form-group">	
					<div class="row">
						<div class="col-md-5">
							<label>Gambar Opsi E:</label>
							<div class="input-group">
							  
							  <input   type="file"   name="gambar[]" id="gambar"   />
							</div>
						</div>
						<div class="col-md-7">
							<label>Opsi E:</label>
							<div class="input-group">
							 
							  <textarea placeholder="Opsi E" id="ckedtor6"  type="text" class="form-control ckeditor"  name="opsi_e" id="opsi_e"  required>
									<?php echo $d_soal_id->opsi_e;?>
							  </textarea>
							
							</div>
						</div>
					</div>
			  </div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<div class="row">
				<div class="col-md-5">
					<label>Jawaban:</label>
					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-lock"></i>
					  </div>
					  <select placeholder="Pilih Jawaban"  type="text" class="form-control"  name="jawaban" id="jawaban"  required>
							<option value='a'>A</option>
							<option value='b'>B</option>
							<option value='c'>C</option>
							<option value='d'>D</option>
							<option value='e'>E</option>
					  </select>                  
					</div>
				</div>
				
				<div class="col-md-7">
					<label>Kategori Soal:</label>
					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-lock"></i>
					  </div>
					  <select   type="text" class="form-control"  name="soal_kat" id="soal_kat"  >
							<option value='tbi'>Tbi</option>
							<option value='tpa'>Tpa</option>
					  </select>
					</div>
				</div>		
				
				<div class="col-md-5">
					<label>Bobot:</label>
					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-lock"></i>
					  </div>
					  <input placeholder="Bobot Soal"  type="text" class="form-control" value="<?php echo $d_soal_id->bobot;?>" name="bobot" id="bobot"  required>
					 
					</div>
				</div>
				
				<div class="col-md-7">
					<label>Nama Ujian:</label>
					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-lock"></i>
					  </div>
					  <select placeholder="Nama Ujian"  type="text" class="form-control"  name="nama_ujian" id="nama_ujian"  required >
							<?php
								foreach ($d_ujian->result() as $ujian){
									echo '<option value="'.$ujian->id_ujian.'">'.$ujian->nama_ujian.'</option>';
								}
							?>
							
					  </select>
					 
					</div>
				</div>
				
			</div>
		</div>
	</div>
			
			<div class="col-md-6">		
				
					<input type="submit" class="btn btn-danger btn-block" value="edit data">
			</div>
			<div class="col-md-6">			
					<input type="button" onclick="batal_soal()" class="btn btn-primary btn-block" value="Batal">
			</div>
                <!-- /.input group -->
			</div>
		</form>
	</section>
	
	
<script>
/**$("#form_add_soal").submit(function(evt){
    evt.preventDefault();
	loading_cool('.box-body');
	$.post("<?php echo site_url('soal/add_soal');?>",$(this).serialize(),function(res){
		eksekusi_controller('soal');
	});
	loading_cool('.box-body');
	return false;

}); //**/

$("#form_edit_soal").submit(function(evt){
    evt.preventDefault();
	loading_cool('.box-body');
	if(confirm("Anda yakin edit data Soal?"))
	{
	
	//post ckeditor
	for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
    var url = "<?php echo site_url('soal/a_edit')?>";
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
			loading_cool('.box-body');
           eksekusi_controller('soal');
        },
        error: function (error) {
            console.log(error);
        }
    }); // End: $.ajax()  
	}
	loading_cool('.box-body');
	return false;

}); //

function batal_soal(){
	loading_cool('.box-body');
		eksekusi_controller('soal');
	loading_cool('.box-body');
}

    

</script>
<script>
    $(function () {
        CKEDITOR.replace('ckedtor');
        CKEDITOR.replace('ckedtor1');
        CKEDITOR.replace('ckedtor2');
        CKEDITOR.replace('ckedtor3');
        CKEDITOR.replace('ckedtor4');
        CKEDITOR.replace('ckedtor5');
        CKEDITOR.replace('ckedtor6');
		
    });
</script>
