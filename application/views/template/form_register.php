

	<div class="col-md-1"></div>
	<div class="col-md-10">
	<h3 class="text-center">Welcome to MentoringSTAN</h3>	<br>			
		<form id="f_register" action="<?php echo site_url('siswa/add_siswa');?>" method="POST">
			<div class="panel panel-default">
				<div class="panel-heading"><h4> Daftar</h4></div>
				<div class="panel-body">	
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user-o" aria-hidden="true"></i></span>
							<input type="text" id="nama" name="nama" autofocus="" value="" placeholder="Nama Lengkap" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-university" aria-hidden="true"></i></span>
							<input type="text" id="asal_sekolah" name="sekolah"  placeholder="Asal Sekolah" class="form-control" required>
						</div>
						
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" id="username" name="username"  placeholder="Username" class="form-control" required>
						</div>
						 
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="password" name="password"  placeholder="Password" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="password1" name=""  placeholder="Ulangi Password" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"> @ </span>
							<input type="text" id="email" name="email"  placeholder="Email" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-genderless" aria-hidden="true"></i></span>
							<select type="text" id="jenis" name="genre"  placeholder="Gender" class="form-control" required>
								
								<option value="laki-laki">Laki-Laki</option>
								<option value="perempuan">Perempuan</option>
								
							</select>
						</div>
						 <br>
						<button type="submit"  class="btn btn-primary btn-block"> <b><i class="fa fa-sign-out" aria-hidden="true"></i> Daftar</b></button>
					</div>
				
				</div>
			</div>
		</form>
	</div>
	<script>
	//validasi
	$("#f_register").submit(function(evt){
    evt.preventDefault();
	if($("#password").val()!= $("#password1").val() ){
		alert("Password Yang Anda Input Tidak Sama !");
		return false;
	}
	loading_cool('.box-body');
	$.post($(this).attr("action"),$(this).serialize(),function(res){
	    alert("Anda Sudah Mendaftar!");
		window.location.assign("<?php echo site_url()?>");
	});
	loading_cool('.box-body');
	return false;

}); 
	
	</script>


