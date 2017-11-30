<!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Rangking
        <small>Siswa</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table Rangking Siswa</h3><br>
		  
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
		  <a role="button" href="<?php echo site_url('mpdf/pdf/'.$hasil_ujian->row()->id_h_uj)?>" class="btn btn-primary">Lihat Pdf</a><br>
        </div>
        <!-- /.box-header -->
		
        <div class="box-body" id="t4_tbl_admin">
			

			 <table id="tabelku" class="table table-bordered table-hover">
                <thead>
                <tr class="text-center">                
                  
                  <th >Peringkat</th>
                  <th >Nama Siswa</th>
                  <th >Nama Ujian</th>
				  <th >Nilai Tpa</th>
                  <th >Nilai Tbi</th> 
				<th >Total Nilai </th>				  
				  <th >Status</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
						$no			=	1;
						
						foreach ($hasil_ujian->result_array() as  $hasil){
							$status=($hasil["status"]=="lulus") ? "<i class='fa fa-check' id='lulus' aria-hidden='true'></i> Anda Lulus Nilai Mati" : "<i class='fa fa-times' id='gagal' aria-hidden='true'></i> Anda Tidak Lulus Nilai Mati"; 
							echo '
									<tr class="text-center">
											  
										  <td>'.$no++.'</td>						 			  
										  <td>'.ucfirst($hasil["h_namasiswa"]).'</td>						 			  
										  <td>'.ucfirst($hasil["nama_ujian"]).'</td>						 			  
										 						 			  
										  
										  <td>'.$hasil["h_nil_tpa"].'</td>
										  <td>'.$hasil["h_nil_tbi"].'</td>
										  <td>'.$hasil["h_tot_nilai"].'</td>						 			  
										  <td>'.$status.'</td>		
										
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

</script>