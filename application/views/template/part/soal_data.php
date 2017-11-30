<!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Soal
        <small>Data</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table data soal</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_tbl_admin">
			 <table id="tabelku" class="table table-bordered table-hover">
                <thead>
                <tr>                
                  
                  <th >No</th>
                  <th >Kategori</th>
                  
                  <th width="500px;">Petunjuk Soal</th>              
                  <th width="500px;">Soal</th>              
                  <th >Opsi A</th>              
                  <th >Opsi B</th>              
                  <th >Opsi C</th>              
                  <th >Opsi D</th>              
                  <th >Opsi E</th>              
                  <th >Jawaban</th>              
                  <th >Bobot Soal</th>              
                  <th >Pembuat Soal</th>              
                  <th >Nama Ujian</th>              
				  <th >Action</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
					$no=1;
					foreach($d_soal->result() as $soal)
					{
						
						
												
						$btn_edit 	= '<button  class="btn-xs btn-primary " onclick="edit_soal('.$soal->id_soal.')"> <span class="fa fa-edit"></span> Edit</button>';
						$btn_delete	= '<button  class="btn-xs btn-warning " onclick="delete_soal('.$soal->id_soal.')"> <span class="fa fa-remove "></span> Del</button>';

						echo '
								<tr>
								  
								  <td>'.$no++.'</td>						 			  
								  					 			  
								  <td>'.ucfirst($soal->soal_kat).'</td>		
									<td>'.ucfirst($soal->petunjuk_soal).'</td>	
								 					 			  
								  <td>'.$soal->soal.'</td>						 			  
								  <td>'.$soal->opsi_a.'</td>	
								  <td>'.$soal->opsi_b.'</td>	
								  <td>'.$soal->opsi_c.'</td>	
								  <td>'.$soal->opsi_d.'</td>	
								  <td>'.$soal->opsi_e.'</td>	
								  <td>'.strtoupper($soal->jawaban).'</td>	
								  <td>'.$soal->bobot.'</td>	
								  <td>'.ucfirst($soal->pembuat_soal).'</td>	
								  <td>'.ucfirst($soal->nama_ujian).'</td>	
								  <td>'. $btn_edit .$btn_delete.'</td>
								  
								 
								</tr>
						
						';
					}
					?>
				<tbody>
			</table>
		</div>
	</div>
	</section>
	
	
<script>
$("#tabelku").DataTable({
		"iDisplayLength": 50,
		"scrollX":true
	});
function edit_soal(id_soal)
{
	loading_cool('#t4_tbl_admin');
	$.get("<?php echo base_url()?>soal/edit_soal/"+id_soal,function(e){
		$(".content-wrapper").html(e);
		loading_cool_hide('#t4_tbl_admin');
	});
	
	
}


function delete_soal(id_soal)
{
	if(confirm("Anda yakin?"))
	{
		if(confirm("Anda benar-benar yakin?"))
		{
			loading_cool('#t4_tbl_admin');
			$.get("<?php echo base_url()?>soal/hapus/"+id_soal,function(e){
				eksekusi_controller('soal');
				loading_cool_hide('#t4_tbl_admin');
			});
			
			
		}
	}
}




</script>