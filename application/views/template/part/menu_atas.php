<style>
	#nama_user{color:white;
				padding-top:15px;}
  </style>
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>AT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Mentoring</b>Stan</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Notifications: style can be found in dropdown.less -->
          
		  
		  
		  
		  
		  
		   <!-- Modal -->
			
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
          <!-- User Account: style can be found in dropdown.less -->
		  <li id="nama_user">
			<?php echo $this->session->userdata('nama');?>
				
		  </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" aria-expanded="true" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                 
                  <small>Last Update </small>
                </p>
              </li>
             
			 
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
					<?php $id_siswa = $this->session->userdata('kon_id');?>
					<?php if($level=="siswa"){?>
							<a href="#profil_admin" onclick="eksekusi_controller('siswa/edit_siswa/<?php echo $id_siswa?>')" class="btn btn-default btn-flat">Profile</a>
					<?php }?>
				</div>
                <div class="pull-right">
					
                  <a href="<?php echo base_url()?>login/logout" class="btn btn-default btn-flat" >Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  
 <script>
	function logout()
	{
			set_log('<?php echo $this->session->userdata('id_admin')?>', '<?php echo $this->session->userdata('username')?>', 'Logout admin', '<?php echo date('Y-m-d H:i:s')?>',function(){
				window.location.replace("<?php echo base_url()?>login/logout");
			})
			
			
	}
	
 </script>
 
 
 
 </script>