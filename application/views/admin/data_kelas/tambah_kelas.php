	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1></h1>
					</div>
				<!-- 	<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">General Form</li>
						</ol>
					</div> -->
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Tambah Kelas</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form role="form" action="<?php echo base_url('datakelas/store') ?>" method="POST">
								<div class="card-body">
		

									<div class="form-group">
										<label for="exampleInputEmail1">Nama Kelas</label>
										<input type="text" required="" name="nama_kelas" class="form-control" id="exampleInputEmail1" placeholder="Nama Kelas">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Kompetensi Keahlian</label>
										<input type="text" required="" name="kompetensi_keahlian" class="form-control" id="exampleInputEmail1" placeholder="Kompetensi Keahlian">
									</div>
									
								</div>
								<!-- /.card-body -->

								<div class="card-footer">
									<button type="submit" class="btn btn-sm btn-primary">Tambah</button>
								</div>
							</form>
						</div>
						<!-- /.card -->

					</div>
					<!--/.col (left) -->

				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
