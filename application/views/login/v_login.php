<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url('asset/template/') ?>plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">

<script>
	window.setTimeout(function(){
		$(".alert-info").fadeTo(500,0).slideUp(500,function(){
			$(this).remove();
		});
	}, 2000);
</script>

<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo base_url('') ?>"><b>Aplikasi</b>SPP</a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<?php if ($this->session->flashdata('login_gagal')) { ?>
			<div class="alert alert-info">
				<?php echo $this->session->flashdata('login_gagal'); ?>
			</div>
			<?php } ?>
			<p class="login-box-msg">Silahkan Login !</p>
	
			<form action="<?= base_url('login/proses_login') ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" name="username" required="" class="form-control" placeholder="Username">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" required="" class="form-control" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<!-- /.col -->
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('asset/template/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('asset/template/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('asset/template/') ?>plugins/toastr/toastr.min.js"></script>

</body>
</html>
