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
								<h3 class="card-title">Tambah Tunggakan</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form role="form" action="<?php echo base_url('datatunggakan/store') ?>" method="POST">
								<div class="card-body">

								  <div class="form-group">
				                    <label>Siswa</label>
				                    <select name="nama_siswa" class="form-control">
				                    	<?php foreach ($data_siswa as $siswa) { ?>
				                      <option value="<?php echo $siswa->nisn ?>"><?php echo $siswa->nama ?></option>
				                    	<?php } ?>
				                    </select>
				                  </div>	
									<div class="form-group">
										<label for="exampleInputEmail1">Bulan</label>
										<input type="text" name="bulan" maxlength="8" class="form-control" id="exampleInputEmail1" placeholder="Bulan">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Tahun</label>
										<input type="text" name="tahun" maxlength="4" class="form-control" id="exampleInputEmail1" placeholder="Tahun">
									</div>

									<!-- <div class="form-group">
										<label for="exampleInputEmail1">Tahun</label>
										<input type="text" name="kompetensi_keahlian" maxlength="4" class="form-control" id="exampleInputEmail1" placeholder="Nominal">
									</div> -->

									
								</div>
								<!-- /.card-body -->

								<div class="card-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
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
