<!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Pembuat Soal
        <small>Data</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table data Ps</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_tbl_admin">
			 <table id="tabelku" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                  
                  <th width="100px;">No</th>                 
                  <th width="100px;">Nama</th>                
				 
                  <th width="120px;">Action</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
					$no=1;
					foreach($d_ps->result() as $ps)
					{
						
						
												
						$btn_edit 	= '<button  class="btn-xs btn-primary " onclick="edit_ps('.$ps->id_psoal.')"> <span class="fa fa-edit"></span> Edit</button>';
						$btn_delete	= '<button  class="btn-xs btn-warning " onclick="delete_ps('.$ps->id_psoal.')"> <span class="fa fa-remove "></span> Del</button>';
						$btn_aktiv	= '<button  class="btn-xs btn-success " onclick="aktiv_ps('.$ps->id_psoal.')"> <span class="fa fa-check-circle-o" aria-hidden="true"></span>  Aktivkan</button>';
						
						echo '
								<tr>
								  
								  <td>'.$no++.'</td>						 			  
								  <td>'.$ps->nama.'</td>';
									
								if($ps->ada==0){
									
									echo '<td>'. $btn_edit .$btn_delete.$btn_aktiv.'</td>';
									
								}else{			
								  
								  echo '<td>'. $btn_edit .$btn_delete.'</td>';
								}
								 
						echo	'</tr>
						
						';
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
function edit_ps(id_ps)
{
	loading_cool('#t4_tbl_admin');
	$.get("<?php echo base_url()?>psoal/edit_ps/"+id_ps,function(e){
		$(".content-wrapper").html(e);
		loading_cool_hide('#t4_tbl_admin');
	});
	
	
}


function delete_ps(id_ps)
{
	if(confirm("Anda yakin?"))
	{
		if(confirm("Anda benar-benar yakin?"))
		{
			loading_cool('#t4_tbl_admin');
			$.get("<?php echo base_url()?>psoal/hapus/"+id_ps,function(e){
				eksekusi_controller('psoal');
				loading_cool_hide('#t4_tbl_admin');
			});
			
			
		}
	}
}

function aktiv_ps(id_ps){
	
	if(confirm("Anda benar-benar yakin?"))
		{ if(confirm("Catat! username="+id_ps+"psoal password=admin")){
				loading_cool('#t4_tbl_admin');
				$.get("<?php echo base_url()?>psoal/aktiv_ps/"+id_ps,function(e){
					eksekusi_controller('psoal');
					loading_cool_hide('#t4_tbl_admin');
				});
		}
			
			
		}
}


</script>