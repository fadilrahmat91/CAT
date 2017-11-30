<!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Hasil
        <small>Ujian</small>
      </h1>     
    </section>

    <!-- Main content -->
    <section class="content">
      
	  
	   <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Table hasil ujian</h3>
			<a role="button" href="<?php echo site_url('mpdf/pdf/'.$hasil_ujian->row()->id_h_uj)?>" class="btn btn-primary">Lihat Pdf</a><br>
        
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="t4_tbl_admin">
			 <table id="tabelku" class="table table-bordered table-hover">
                <thead>
                <tr>
                       <th  colspan="5" scope="colgroup"></th>
                    <th class="text-center" colspan="4" scope="colgroup">Tes Potensi Akademik</th>
                    <th class="text-center" colspan="4" scope="colgroup">Tes Bahasa Inggris</th>
                    <td rowspan="1"></td>
                </tr>  
                <tr>                
                  
                  <th >No</th>
                  <th >Nama Siswa</th>
                  <th >Nama Ujian</th>
                  <th >Waktu Ujian</th>
                  <th >Total Nilai </th>
                  <th >Benar</th>
				  <th >Salah</th>
				  <th >Kosong</th>
				  <th >Nilai </th>
                  <th >Benar </th>
                  <th >Salah </th>
                  <th >Kosong </th>        
                  <th >Nilai </th>                            
				  <th >Status</th>
                </tr>
                </thead>
                <tbody>
					
					<?php
						$no			=	1;
						
						foreach ($hasil_ujian->result_array() as  $hasil){
							$status=($hasil["status"]=="lulus") ? "<i class='fa fa-check' id='lulus' aria-hidden='true'></i> Anda Lulus Nilai Mati" : "<i class='fa fa-times' id='gagal' aria-hidden='true'></i> Anda Tidak Lulus Nilai Mati"; 
							echo '
									<tr>
											  
										  <td>'.$no++.'</td>						 			  
										  <td>'.ucfirst($hasil["h_namasiswa"]).'</td>						 			  
										  <td>'.ucfirst($hasil["nama_ujian"]).'</td>						 			  
										  <td>'.$hasil["h_waktu_ujian"].' Menit</td>						 			  
										  <td>'.$hasil["h_tot_nilai"].'</td>						 			  
										  <td>'.$hasil["h_benar_tpa"].' Soal</td>
										  <td>'.$hasil["h_sal_tpa"].' Soal</td>	
										  <td>'.$hasil["h_kos_tpa"].' Soal</td>	
										  <td>'.$hasil["h_nil_tpa"].'</td>
										  <td>'.$hasil["h_benar_tbi"].' Soal</td>
										  <td>'.$hasil["h_sal_tbi"].' Soal</td>	
										  <td>'.$hasil["h_kos_tbi"].' Soal</td>	
										  <td>'.$hasil["h_nil_tbi"].'</td>						 			  
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