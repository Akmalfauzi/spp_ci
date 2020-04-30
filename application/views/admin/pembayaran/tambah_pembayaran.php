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
								<h3 class="card-title">Tambah Pembayaran</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form role="form" action="<?php echo base_url('pembayaran/add') ?>" method="POST">
								<div class="card-body">
		

									<div class="form-group">
										<label for="exampleInputEmail1">NISN</label>
										<input type="text" name="nisn" value="<?php echo $detail->nisn ?>" class="form-control" readonly placeholder="Tahun">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Siswa</label>
										<input type="text" name="nama_siswa" value="<?php echo $detail->nama ?>" class="form-control" readonly placeholder="Tahun">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Kelas</label>
										<input type="text" name="nama_kelas" value="<?php echo $detail->nama_kelas ?>" class="form-control" readonly placeholder="Tahun">
									</div>
									<!-- <div class="form-group">
					                    <label>Kelas</label>
					                    <select name="kelas" class="form-control">
					                    	<?php foreach ($data_spp as $spp) { ?>
					                      <option value="<?php echo $spp->id_spp ?>"> <?php echo $spp->tahun ?> </option>
					                    	<?php } ?>
					                    </select>
					                </div> -->
									<div class="form-group">
										<label for="exampleInputEmail1">Bulan dibayar</label>
										<input type="text" name="bulan_dibayar" class="form-control" id="exampleInputEmail1" placeholder="Bulan">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Tahun dibayar</label>
										<input type="text" name="tahun_dibayar" class="form-control" id="exampleInputEmail1" placeholder="Tahun	">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Jumlah Bayar</label>
										<input type="text" name="jumlah_bayar" class="form-control" id="exampleInputEmail1" placeholder="Nominal">
									</div>
									
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
