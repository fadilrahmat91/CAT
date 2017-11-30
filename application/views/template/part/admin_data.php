<!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Admin
        <small>Data</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table data admin</h3>

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
                  <th >Usernsme</th>
                  <th >User Level</th>
				  <th >Action</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
					$no=1;
					foreach($d_admin->result() as $admin)
					{
						
						
												
						$btn_edit 	= '<button  class="btn-xs btn-primary " onclick="edit_admin('.$admin->id.')"> <span class="fa fa-edit"></span> Edit</button>';
						$btn_delete	= '<button  class="btn-xs btn-warning " onclick="delete_admin('.$admin->id.')"> <span class="fa fa-remove "></span> Del</button>';
						
						if($admin->level=="admin"){
							continue;
						}
						
						echo '
								<tr>
								  
								  <td>'.$no++.'</td>						 			  
								  <td>'.$admin->username.'</td>						 			  
								  <td>'.$admin->level.'</td>	
								  <td>'. $btn_edit .$btn_delete.'</td>
								  
								</tr>';
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
function edit_admin(id)
{
	loading_cool('#t4_tbl_admin');
	$.get("<?php echo base_url()?>admin/edit_admin/"+id,function(e){
		$(".content-wrapper").html(e);
		loading_cool_hide('#t4_tbl_admin');
	});
	
	
}


function delete_admin(id)
{
	if(confirm("Anda yakin?"))
	{
		if(confirm("Anda benar-benar yakin?"))
		{
			loading_cool('#t4_tbl_admin');
			$.get("<?php echo base_url()?>admin/hapus/"+id,function(e){
				eksekusi_controller('admin');
				loading_cool_hide('#t4_tbl_admin');
			});
			
			
		}
	}
}




</script>