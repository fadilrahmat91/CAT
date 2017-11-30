<!-- Small boxes (Stat box) -->
      <div class="row">
	  <?php if($level=="psoal" || $level=="admin"){ ?>
			<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-aqua">
				<div class="inner">
				  <h3><?php echo $t_antri;?></h3>

				  <p>Total Antrian</p>
				</div>
				<div class="icon">
				 <i class="fa fa-user-times" ></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			 <div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-green">
				<div class="inner">
				  <h3><?php echo $t_siswa;?></h3>

				  <p>Total Siswa Aktiv</p>
				</div>
				<div class="icon">
				  <i class="fa fa-users"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-yellow">
				<div class="inner">
				  <h3><?php echo $a_psoal; ?></h3>

				  <p>Total Pembuat Soal </p>
				</div>
				<div class="icon">
				  <i class="fa fa-users"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			  <div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-red">
				<div class="inner">
				  <h3><?php echo$t_to;?></h3>

				  <p>Total TryOut</p>
				</div>
				<div class="icon">
				  <i class="fa fa-file-text-o" aria-hidden="true"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
	  <?php }else if($level=="siswa"){?>
				
				<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-aqua">
				<div class="inner">
				  <h3>-</h3>

				  <p>Mulai TryOut</p>
				</div>
				<div class="icon">
				<i class="fa fa-book" aria-hidden="true"></i>
				</div>
				<a onclick="eksekusi_controller('ujian')" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<!-- ./col -->
			 <div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-green">
				<div class="inner">
				  <h3>-</h3>

				  <p>Hasil TryOut</p>
				</div>
				<div class="icon">
				
				  <i class="fa fa-file-text-o" aria-hidden="true"></i>
				</div>
				<a onclick="eksekusi_controller('ujian/hasil_ujian')" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			<div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-yellow">
				<div class="inner">
				  <h3>-</h3>

				  <p>Rangking </p>
				</div>
				<div class="icon">
				  <i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<a onclick="eksekusi_controller('ujian')" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
			  <div class="col-lg-3 col-xs-6">
			  <!-- small box -->
			  <div class="small-box bg-red">
				<div class="inner">
				   <h3><?php echo $t_siswa;?></h3>

				  <p>Total Siswa Aktiv</p>
				</div>
				<div class="icon">
				    <i class="fa fa-users"></i>
				</div>
				<a  onclick="eksekusi_controller('siswa')" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			  </div>
			</div>
		  
	  <?php }else{?>
				<div class="col-md-12 col-xs-12">
					<div class="jumbotron">
						<h1>Welcome To MentoringStan <?php echo  $nama;?></h1> 
						<p>Anda Sudah Selesai Mendaftar D MentoringStan Beberapa Saat Lagi Akun Anda Akan Diaktivkan</p> 
				  </div>
				 <div>
	 <?php } ?>
	 </div>