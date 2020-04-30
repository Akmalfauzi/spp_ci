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
								<h3 class="card-title">Edit Siswa</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form role="form" action="<?php echo base_url('datasiswa/update/'.$siswa->nisn) ?>" method="POST">
								<div class="card-body">
		

									<div class="form-group">
										<label for="exampleInputEmail1">NISN</label>
										<input type="text" name="nisn" class="form-control" id="exampleInputEmail1" value="<?php echo $siswa->nisn ?>" placeholder="NISN">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">NIS</label>
										<input type="text" name="nis" class="form-control" id="exampleInputEmail1" value="<?php echo $siswa->nis ?>" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Nama</label>
										<input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $siswa->nama ?>" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Username</label>
										<input type="text" name="username" class="form-control" id="exampleInputEmail1" value="<?php echo $siswa->username ?>" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Password</label>
										<input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
									</div>
									<b style="color: red;">*Kosongkan password jika tidak ingin diubah!</b>
									<div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas" class="form-control">
                      <?php foreach ($data_kelas as $kelas) { ?>
                      <option value="<?php echo $kelas->id_kelas ?>"><?php echo $kelas->nama_kelas ?></option>
                    	<?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat"><?php echo $siswa->alamat ?></textarea>
                  </div>
									<div class="form-group">
										<label for="exampleInputPassword1">No Telepon</label>
										<input type="text" name="no_telp" class="form-control" id="exampleInputPassword1" value="<?php echo $siswa->no_telp ?>" placeholder="Password">
									</div>
									<!-- <div class="form-group">
				                    <label>Tahun Masuk</label>
				                    <select name="tahun" class="form-control">
				                    	<?php foreach ($data_spp as $spp) { ?>
				                      <option  value="<?php echo $spp->id_spp ?>"><?php echo $spp->tahun ?> - SPP Rp.<?php echo $spp->nominal ?></option>
				                    	<?php } ?>
				                    </select>
				                  </div> -->
								</div>
								<!-- /.card-body -->

								<div class="card-footer">
									<button type="submit" class="btn btn-sm btn-primary">Update</button>
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
