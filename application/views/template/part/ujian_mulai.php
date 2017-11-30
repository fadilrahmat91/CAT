<?php
			$uri3=addslashes($this->uri->segment(3));
			$uri4=addslashes($this->uri->segment(4));
		?>
<html>
	
	<head>
	
		<link 	rel="stylesheet" 	href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
		<meta 	name="viewport" 	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.11.3.min.js"></script>
		<script src="<?php echo base_url()?>assets/bootstrap/js/jquery.countdown.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style>
			body{background:#ffffff;
				font-size:18px;
				height:100%;
				font-family:Nunito;
				
				}
			
			label{
				  font-size:13px;
				  font-family:Nunito;
			  }
			 .ujian_soal .panel-heading{
				 background:white;
				 
			 } 
			 .ujian_soal{border-color:white;
						
						border-radius:0px;		}
			#p{color:red;}
			#soal{margin-bottom:20px;}
			#ujian{padding:0px;
					margin:0px;}
			.jawaban{position:fixed;
					 top:150px;
					 					
						right:0;}
			
			.jawaban .panel-body {
				 height: 300px;
				 overflow-y: scroll;
				
			}
			.jawaban{height:1000px;
				background:#41a58e;}
			.panel-ujian{position:relative;}
			
			#t_body tr:nth-child(odd) {
				background: #f2f2f2;
			}
			.data_s{position:fixed;
					background:#41a58e;
					right:0;
					top:0;}
			.alert-success {
					color: #3c763d;
					background-color: #fdfdfd;
					border-color: #d6e9c6;
			}
			.p_jawab{background-color: #fdfdfd;
					border-color: #d6e9c6;}
			#selesai, #lanjut{background:white;
			}
			#selesai{color:#4386dc;
					border:2px solid #4386dc;
			}
			#next{background:#41a58e;
					border-color:#41a58e;
					color:white;}
			#lanjut{color:#d6ae37;
					border:2px solid #d6ae37;}
			
		</style>
	</head>
	
	<body>
		<section id="ujian">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-xs-12 data_s">
						<div class="alert alert-success">
							<b><i class="fa fa-file-o" aria-hidden="true"></i> Data Siswa : </b><br><br>
							
							Nama 		 <?php echo ":  ".ucfirst($data_user->nama)?><br>
							Asal Sekolah <?php echo ":  ".ucfirst($data_user->asal_sekolah)?><br>
						</div>
					</div>
						
					<div class="col-md-8  col-xs-12 panel-ujian">
					
						<div class="panel panel-default ujian_soal">
						
							<div class="panel-heading">
							<?php $kat=($uri4=="tpa") ? "Tes Potensi Akademik" : "Tes Bahasa Inggris"; 
								$wak=($uri4=="tpa") ? "100" : "50"; 
								$tsoal=($uri4=="tpa") ? "120" : "60"; ?>
								<h3 class="text-center"><b>Politeknik Pkn Stan</b></h3>
								<p class="text-center"><?php echo "Nama Ujian    : ".ucfirst($d_ujian->nama_ujian)."|  
											   Total Waktu Ujian   : ".$wak." Menit | Jumlah Soal : ".$tsoal." |
											    Kategori Ujian: ".ucfirst($uri4)."(".$kat.")";?></p>
								
							</div>
							<div class="panel-body">
								<?php
									$no=1;
									$jumlah =$d_soal->num_rows();
									
									foreach ($d_soal->result() as $soal){
										$cek_o=($soal->opsi_e=="") ? "" : "E. ".$soal->opsi_e."<br>"; 
										echo 	"<div id='soal' ><i>".ucfirst($soal->petunjuk_soal)."</i><br><br>".$no++.". ".ucfirst($soal->soal)."<br>
										
														A. ".$soal->opsi_a."<br>
														B. ".$soal->opsi_b."<br>	
														C. ".$soal->opsi_c."<br>	
														D. ".$soal->opsi_d."<br>"	
														.$cek_o."
												</div>";
									}
									
								?>
								<button id="back" onclick="back()" class="btn btn-danger back"> Back</button>
								<button id="next" onclick="next()" class="btn btn-success next"> Next</button>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 lanjut">
						
					</div>
					
					<div class="col-md-4 col-xs-12 jawaban">
						<div class="panel p_jawab">
							<div class="panel-heading">
								
									<div class="alert alert-danger">
										<i class="fa fa-clock-o" aria-hidden="true"></i> Waktu Mengerjakan Tinggal: <div id="clock" style="display: inline; font-weight: bold"></div>
									</div>
								
								<button id="lanjut" onClick="lanjut()" class="btn btn-primary tbi"><i class="fa fa-share" aria-hidden="true"></i> Lanjut Ke Soal Tbi</button>
								<button id="selesai" onClick="selesai()" class="btn btn-success s_ujian"><i class="fa fa-check-square-o" aria-hidden="true"></i> Selesai Ujian</button>
							</div>
							<div class="panel-body">
								<form id="_form">
								 <table  class="table table-hover table-bordered t_jawab">
									<thead>
									  <tr>
										<th>No Soal</th>
										<th><center>Pilihan Jawaban</center></th>
									 </tr>
									</thead>
									<tbody id="t_body">
										
								<?php
									$noj=1;
									$jawaban	=	array("A","B","C","D","E");
									$id_soal	=	array();
									foreach ($d_soal->result() as $dat_soal){
										echo	'<tr><td class="text-center">'.$noj.'</td><td class="text-center">';
												foreach($jawaban as $j){
													 echo '		
																<input type="hidden" id="text" name="id_soal'.$noj.'" value="'.$dat_soal->id_soal.'"> 
																<label class="radio-inline">
																  <input  type="radio" id="radio" value="'.$j.'" onClick="simpan()" name="jawab'.$noj.'">'.$j.'   '.'
															   </label>
														  
														  ';
												}
										echo '	<input type="hidden" id="text" name="id_soal'.$noj.'" value="'.$dat_soal->id_soal.'">
												<label class="radio-inline"><input value="" onClick="simpan()" type="radio" name="jawab'.$noj.'" checked>KOSONG</label></p></td></tr>';
										$jumlah--;
										$noj++;
										//$id_soal[]=$dat_soal->id_soal;
									}
									
								?>
									<input type="hidden" name="jml_soal" value="<?php echo $d_soal->num_rows;?>"> 	
								</tbody>
							  </table>	
							</form>	
							
						</div>
					
				</div>	
				</div>
			</div>
		</section>
	</body>
	<script>
	alert("Note! Benar Nilai +4,Salah Nilai -1, Kosong Nilai +-0");
	<?php $detil  =   $this->db->query("SELECT * FROM d_mulai_ujian WHERE id_user='$id_admin' AND id_ujian='$uri3'  AND soal_kat='$uri4'")->row();?>
	    var jam_selesai ="<?php echo $detil->waktu_selesai; ?>";         
         $('div#clock').countdown(jam_selesai)
          .on('update.countdown', function (event) { 
            $(this).html(event.strftime('%H:%M:%S'));
          })
          .on('finish.countdown', function (event) {
			  if(soal_kat=="tpa"){
				  lanjut();
			  }else{
              alert("waktu selesai selesai");
			  selesai();
              }
              
              return false;
          });
	
		function getFormData($form){
			var unindexed_array = $form.serializeArray();
			var indexed_array = {};

			$.map(unindexed_array, function(n, i){
				indexed_array[n['name']] = n['value'];
			});

			return indexed_array;
		}
		var id_ujian="<?php echo $uri3?>";
		var soal_kat="<?php echo $uri4?>";
		$(".s_ujian").hide();
		if(soal_kat=="tbi"){
			$(".tbi").hide();
			$(".s_ujian").show();
		}
		function simpan(){
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);

        $.ajax({    
          type: "POST",
          url: "<?php echo site_url()?>ujian/m_ujian/simpan_satu/"+id_ujian+"/"+soal_kat,
          data: JSON.stringify(form),
          dataType: 'json',
          contentType: 'application/json; charset=utf-8'
        }).done(function(response) {
         
        });
        return false;
      }
	  
	  function simpan_semua(){
		   var f_asal  = $("#_form");
		   var form  = getFormData(f_asal);
		   
		  if(confirm("Apakah Anda Yakin ?")){
			  
				
					$.ajax({    
					  type: "POST",
					  url: "<?php echo site_url()?>ujian/m_ujian/simpan_semua/"+id_ujian+"/"+soal_kat,
					  data: JSON.stringify(form),
					  dataType: 'json',
					  contentType: 'application/json; charset=utf-8'
					}).done(function(response) {
					        if(response.kat=='tpa'){
					            window.location.assign("<?php echo site_url()?>ujian/m_ujian/"+id_ujian+"/tbi");
					        }
					});
					return false;
			  }
			
	  }
	  function lanjut(){
			
			if(confirm("Jika ya Anda tidak dapat kembali ke halaman ini lagi")){
				simpan_semua();
			}
			
	  }
		  <?php
			$query=$this->db->query("SELECT list_jawaban FROM d_mulai_ujian WHERE id_ujian='$uri3' AND soal_kat='$uri4' AND id_user=$id_admin")->result_array();
			$pisah=explode(',',$query[0]['list_jawaban']);
			
			
		  ?>

		var a		=	<?php echo json_encode($pisah) ?>;
		var c=[];
		var ja=[];
		for(var j=0; j<a.length; j++){
			var num	=	a[j].split(":");
			c.push(num[0]);
			ja.push(num[1]);
			for(var i=0; i<$("#_form input[type='radio']").length; i++){
			    //i=i+5;
				if($("#_form input[type='radio']").eq(i).val()==ja[j] && $("#_form input[type='hidden']").eq(i).val()==c[j]){
					
					$("#_form input[type='radio']").eq(i).attr("checked",true);
					
					break;
				}
				
			}
		}
		  console.log(c);
		  console.log(ja);
		  
		 // paging prosess 
		 var limit=20;
		 var offset=20;
		 
		$(".back").hide();
		$(".panel-body #soal").not(":lt("+limit+")").hide();
		
		function next(){
			
			var tot=limit+offset;	
			
			$(".panel-body #soal:lt("+tot+")").show();			
			$(".panel-body #soal:lt("+limit+")").hide();			
			limit=limit+offset;
			
			
			if(limit>$(".panel-body #soal").length){
				
				  $(".next").hide();
				  $(".back").show();
				  
			}else if(limit<$(".panel-body #soal").length){
				
				  $(".next").show();
				  $(".back").show();
			}
			
			
			
		}
		function back(){
			//alert(limit);
			
			limit=limit-offset;
			
			$(".panel-body #soal").not(":lt("+limit+")").hide();			
			$(".panel-body #soal:lt("+limit+")").show();
			
			limit=limit-offset;
			
			$(".panel-body #soal:lt("+limit+")").hide();
			
			limit=limit+offset;
			
			if(limit==offset){
				
			  $(".next").show();
			  $(".back").hide();
			  
			 }else if(limit<=$(".panel-body #soal").length){
				 
				  $(".next").show();
				  $(".back").show();
			 }
				
			//limit=limit-1;	
		}
		
		function selesai(){
			simpan_semua();
			$.get("<?php echo site_url()?>ujian/add_h_ujian/"+id_ujian,function(dapat){
				
				alert("Anda Telah Selesai Ujian");
				window.location.assign("<?php echo base_url()?>mpdf/pdf/"+id_ujian);
				
			});
		}
		  
		 

	</script>
	<script>
		 if( /Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )  {
		 
			$(".data_s").hide();
		   $(".jawaban").css({"top":"40%"});
		   $(".ujian_soal").css({"margin-bottom":"450px"});
		   
		
		   
		}
	</script>
	
	
</html>