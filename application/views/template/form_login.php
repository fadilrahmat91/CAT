
<head>

	<meta 	name="viewport" 	content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>"  rel="stylesheet">
	<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo base_url()?>assets/custom.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.form{position:relative;
			
			display:block;}

body {
	margin-top:100px;
	margin-bottom:50px;
   background-image: url('uploads/ujian.png');
   background-repeat: no-repeat;
   color:white;
   background-size: cover;
   
 }
	</style>
</head>
	
<body>
	
	<div class="col-md-4   col-lg-4"></div>	
	<div class="col-md-4   col-lg-4 form">	
		<div class="col-md-1  col-sm-2 col-lg-1 "></div>
		<div class="col-md-10 col-xs-12 col-sm-12 col-lg-10">
		<h3 class="text-center">Welcome to MentoringSTAN</h3>	<br>		
		<form action="<?php echo site_url('login/cek_login');?>" id="f_login" method="POST">
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Silahkan Login</h4></div>
				<div class="panel-body">
					<div class="status"></div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input type="text" id="username" name="username" autofocus="" value="" placeholder="Username" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="username" name="password"  placeholder="password" class="form-control" required>
						</div>
						 <br>
						<button type="submit"  class="btn  btn-block"> <b><i class="fa fa-sign-in" aria-hidden="true"></i> Login</b></button>
						<a role="button" onclick="daftar('<?php echo site_url()?>login/daftar')"  class="btn btn-primary btn-block"> <b><i class="fa fa-sign-out" aria-hidden="true"></i> Register</b></a>
					</div>
					
				</div>
			</div>
		</form>
		</div>
	</div>
	<div class="col-md-12 col-xs-12 col-sm-12">
		<p class="text-center"><i>Copyright &copy 	MentoringSTAN.com</i></p> 
	</div>
</body>
<script>
	$("#f_login").submit(function(e){
		e.preventDefault();
		$.post("<?php echo site_url()?>login/cek_login",$(this).serialize(),function(hasil){
			
			if(hasil.status==="ok"){
				window.location.assign("<?php echo site_url()?>home");
			}else{
				$(".status").html("").hide().html("<div class='alert alert-danger'>Maaf,Username atau Password Salah!</div>").show("slow");
			}
		});
	});
	function daftar(url){
		$.get(url,function(hasil){
			$(".form").html("").hide().html(hasil).show("slow");
		})
	}
</script>