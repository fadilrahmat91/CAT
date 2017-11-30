<!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Siswa
        <small>Data</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table data siswa</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_tbl_admin">
			 <table id="tabelku" class="table table-bordered table-hover">
                <thead class="text-center">
                <tr>                
                  <?php if($level=="siswa"){ ?>
				  
						  <th >No</th>
						  <th >Nama</th>
									  
						  <th >Asal Sekolah</th>              
				 
				  <?php }else {?>
						  <th >No</th>
						  <th >Nama</th>
						  <th >Id</th>
						  <th >Email</th>              
						  <th >Asal Sekolah</th>              
						  <th >Action</th>
				  <?php } ?>
                </tr>
                </thead>
                <tbody>
					
					<?php
					$no=1;
					foreach($d_siswa->result() as $siswa)
					{
						
						
												
						$btn_edit 	= '<button  class="btn-xs btn-primary " onclick="edit_siswa('.$siswa->id_siswa.')"> <span class="fa fa-edit"></span> Edit</button>';
						$btn_delete	= '<button  class="btn-xs btn-warning " onclick="delete_siswa('.$siswa->id_siswa.')"> <span class="fa fa-remove "></span> Del</button>';
						$btn_aktiv	= '<button  class="btn-xs btn-success " onclick="aktiv_siswa('.$siswa->id_siswa.',&quot;'.$siswa->s_username.'&quot;)"> <span class="fa fa-check-circle-o" aria-hidden="true"></span> Aktivkan</button>';
						if($level=="siswa"){
							echo '
										<tr class="text-center">
										
										
										  
										  <td>'.$no++.'</td>						 			  
										  <td>'.ucfirst($siswa->nama).'</td>	
										  <td>'.ucfirst($siswa->asal_sekolah).'</td>';						 			  
										 
										 
								echo	'</tr>
								
								';
						}else{
						
								echo '
										<tr class="text-center">
										
										
										  
										  <td>'.$no++.'</td>						 			  
										  <td>'.$siswa->nama.'</td>						 			  
										  <td>'.$siswa->id_siswa.'</td>						 			  
										  <td>'.$siswa->email.'</td>						 			  
										  <td>'.$siswa->asal_sekolah.'</td>';						 			  
										  if ($siswa->ada==0){
											  
											  echo  '<td>'. $btn_edit .$btn_delete.$btn_aktiv.'</td>';
											  
										  }else{
											  
											echo  '<td>'. $btn_edit .$btn_delete.'</td>';
										  }
										 
								echo	'</tr>
								
								';
						}
					}
					?>
				<tbody>
			</table>
		</div>
	</div>
	</section>
	
	
<script>
$('#tabelku').DataTable({
		"iDisplayLength": 50
		
	});
function edit_siswa(id_siswa)
{
	loading_cool('#t4_tbl_admin');
	$.get("<?php echo base_url()?>siswa/edit_siswa/"+id_siswa,function(e){
		$(".content-wrapper").html(e);
		loading_cool_hide('#t4_tbl_admin');
	});
	
	
}


function delete_siswa(id_siswa)
{
	if(confirm("Anda yakin?"))
	{
		if(confirm("Anda benar-benar yakin?"))
		{
			loading_cool('#t4_tbl_admin');
			$.get("<?php echo base_url()?>siswa/hapus/"+id_siswa,function(e){
				eksekusi_controller('siswa');
				loading_cool_hide('#t4_tbl_admin');
			});
			
			
		}
	}
}

function aktiv_siswa(id_siswa,nama){
	
	//alert(nama);
	
		if(confirm("Anda benar-benar yakin?"))
		{
			if (confirm("Catat!,Username="+nama)){
				loading_cool('#t4_tbl_admin');
				$.get("<?php echo base_url()?>siswa/aktiv_siswa/"+id_siswa,function(e){
					eksekusi_controller('siswa');
					loading_cool_hide('#t4_tbl_admin');
				});
			}
			
			
		}
	
	
}


</script>