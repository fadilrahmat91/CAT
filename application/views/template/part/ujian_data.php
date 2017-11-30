<!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Ujian
        <small>Data</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table data ujian</h3>

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
                  <th >Nama Ujian</th>
                  <th >Jumlah Soal</th>
                  <th >Waktu</th>              
                  <th >Jenis</th>                            
				  <th >Action</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
					$no=1;
					
					foreach($d_ujian->result() as $ujian)
					{
						
						
								
						$btn_edit 	= '<button  class="btn-xs btn-primary " onclick="edit_ujian('.$ujian->id_ujian.')"> <span class="fa fa-edit"></span> Edit</button>';
						$btn_delete	= '<button  class="btn-xs btn-warning " onclick="delete_ujian('.$ujian->id_ujian.')"> <span class="fa fa-remove "></span> Del</button>';
						$btn_mulai	= '<button  class="btn-xs btn-success " onclick="mulai_ujian('.$ujian->id_ujian.',&quot;tpa&quot;)"> <span class="fa fa-book "></span> Mulai</button>';
						$btn_proses	= '<button  class="btn-xs btn-success " onclick="mulai_ujian('.$ujian->id_ujian.',&quot;tbi&quot;)"> <span class="fa fa-file-text-o" aria-hidden="true"></span> Ujian B.inggris</button>';
						$btn_selesai= '<button  class="btn-xs btn-info  " onclick="eksekusi_controller(&quot;ujian/h_ujian_name/'.$ujian->id_ujian.'&quot;)"> <span class="fa fa-bar-chart" ></span></span> Rangking	</button>';
						$btn_aksi   = ($a_level=="siswa") ? "" : $btn_edit.$btn_delete;
						if($ujian->cek==1){
							
							$cek=$btn_aksi.$btn_proses;
						}else if($ujian->cek==2){
							$cek=$btn_aksi.$btn_selesai;
						}else{
							if($a_level!="siswa"){
								$cek=$btn_aksi;
							}else{
							
								$cek=$btn_aksi.$btn_mulai;
							}
						}
						echo '
								<tr>
								  
								  <td>'.$no++.'</td>						 			  
								  <td>'.ucfirst($ujian->nama_ujian).'</td>						 			  
								  <td>'.$ujian->jumlah_soal.' Soal</td>						 			  
								  <td>'.$ujian->waktu.' Menit</td>						 			  
								  <td>'.ucfirst($ujian->jenis).'</td>	
								  <td>'.$cek.'</td>
								  
								 
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
function edit_ujian(id_ujian)
{
	loading_cool('#t4_tbl_admin');
	$.get("<?php echo base_url()?>ujian/edit_ujian/"+id_ujian,function(e){
		$(".content-wrapper").html(e);
		loading_cool_hide('#t4_tbl_admin');
	});
	
	
}


function delete_ujian(id_ujian)
{
	if(confirm("Anda yakin?"))
	{
		if(confirm("Anda benar-benar yakin?"))
		{
			loading_cool('#t4_tbl_admin');
			$.get("<?php echo base_url()?>ujian/hapus/"+id_ujian,function(e){
				eksekusi_controller('ujian');
				loading_cool_hide('#t4_tbl_admin');
			});
			
			
		}
	}
}

function mulai_ujian(id_ujian,soal_kat) {
	
	if(soal_kat=="selesai"){
		alert("Anda sudah selesai ujian beralih ke menu hasil ujian untuk melihat hasil ujian Anda!");
		return false;
	}
    window.open("<?php echo base_url()?>ujian/m_ujian/"+id_ujian+"/"+soal_kat);
}


</script>