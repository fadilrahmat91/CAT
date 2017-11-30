
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
	  
	  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		<?php if($level=="admin"){?>
		
				<li class="treeview">
				  <a href="#">
					<i class="fa fa-folder"></i> <span>Admin</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-left pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					  <li><a onclick="eksekusi_controller('admin')" href="#"><i class="fa fa-circle-o"></i>Admin data</a></li>
					           
				  </ul>
				</li>
				<li class="treeview">
						  <a href="#">
							<i class="fa fa-folder"></i> <span>Pembuat Soal</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						  </a>
						  <ul class="treeview-menu">
							  <li><a onclick="eksekusi_controller('psoal')" href="#"><i class="fa fa-circle-o"></i>Pembuat Soal data</a></li>
							  <li><a onclick="eksekusi_controller('psoal/f_psoal')" href="#" ><i class="fa fa-circle-o"></i>Pembuat Soal tambah</a></li>          
						  </ul>
				</li>
				<li class="treeview">
						  <a href="#">
							<i class="fa fa-folder"></i> <span>Siswa</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						  </a>
						  <ul class="treeview-menu">
							  <li><a onclick="eksekusi_controller('siswa')" href="#"><i class="fa fa-circle-o"></i>Siswa data</a></li>
							  <li><a onclick="eksekusi_controller('siswa/f_siswa')" href="#" ><i class="fa fa-circle-o"></i>Siswa tambah</a></li>          
						  </ul>
				</li>
				<li class="treeview">
						  <a href="#">
							<i class="fa fa-folder"></i> <span>Soal</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						  </a>
						  <ul class="treeview-menu">
							  <li><a onclick="eksekusi_controller('soal')" href="#"><i class="fa fa-circle-o"></i>Soal data</a></li>
							  <li><a onclick="eksekusi_controller('soal/f_soal')" href="#" ><i class="fa fa-circle-o"></i>Soal tambah</a></li>          
						  </ul>
				</li>
				<li class="treeview">
						  <a href="#">
							<i class="fa fa-folder"></i> <span>Ujian</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						  </a>
						  <ul class="treeview-menu">
							  <li><a onclick="eksekusi_controller('ujian/f_ujian')" href="#"><i class="fa fa-circle-o"></i>Tambah Ujian</a></li>
							  <li><a onclick="eksekusi_controller('ujian')" href="#"><i class="fa fa-circle-o"></i>Data Ujian</a></li>
							         
						  </ul>
				</li>
				<li class="treeview">
						  <a href="#">
							<i class="fa fa-folder"></i> <span>Hasil Ujian</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						  </a>
						  <ul class="treeview-menu">
							<?php 
								$n_ujian=$this->db->query("SELECT * FROM d_ujian");
								foreach($n_ujian->result() as $ujian){
							?>
							  <li><a onclick="eksekusi_controller('ujian/hasil_ujian/<?php echo $ujian->id_ujian ?>')" href="#"><i class="fa fa-circle-o"></i><?php echo $ujian->nama_ujian;?> </a></li>
								<?php }?>        
						  </ul>
				</li>
      
				  
		<?php }else if($level=="psoal"){ ?>
					<li class="treeview">
						  <a href="#">
							<i class="fa fa-folder"></i> <span>Soal</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						  </a>
						  <ul class="treeview-menu">
							  <li><a onclick="eksekusi_controller('soal')" href="#"><i class="fa fa-circle-o"></i>Soal data</a></li>
							  <li><a onclick="eksekusi_controller('soal/f_soal')" href="#" ><i class="fa fa-circle-o"></i>Soal tambah</a></li>          
						  </ul>
				</li>
				<li class="treeview">
						  <a href="#">
							<i class="fa fa-folder"></i> <span>Ujian</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						  </a>
						  <ul class="treeview-menu">
							  <li><a onclick="eksekusi_controller('ujian/f_ujian')" href="#"><i class="fa fa-circle-o"></i>Tambah Ujian</a></li>
							  <!-- <li><a onclick="eksekusi_controller('ujian')" href="#"><i class="fa fa-circle-o"></i>Mulai Ujian</a></li> -->
							  <li><a onclick="eksekusi_controller('ujian/hasil_ujian')" href="#" ><i class="fa fa-circle-o"></i>Hasil Ujian</a></li>          
						  </ul>
				</li>  
		<?php	}?>
		
        </ul>
    </section>
   
  </aside>