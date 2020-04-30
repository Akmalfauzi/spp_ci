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
								<h3 class="card-title">Edit</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form role="form" action="<?php echo base_url('datapetugas/update/'.$petugas->id_petugas) ?>" method="POST">
								<div class="card-body">
		

									<div class="form-group">
										<label for="exampleInputEmail1">Nama</label>
										<input type="text" name="nama_petugas" class="form-control" id="exampleInputEmail1" value="<?php echo $petugas->nama_petugas ?>" placeholder="NISN">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Username</label>
										<input type="text" name="username" class="form-control" id="exampleInputEmail1" value="<?php echo $petugas->username ?>" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Password</label>
										<input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Password">
									</div>
									<b style="color: red;">*Kosongkan password jika tidak ingin diubah!</b>
									<div class="form-group">
					                    <label>Level</label>
					                    <select name="level" class="form-control">
					                      <option <?php if ($petugas->level == "admin") { echo "selected";
					                      } ?> value="admin">Admin</option>
					                      <option <?php if ($petugas->level == "petugas") { echo "selected";
					                      } ?>  value="petugas">Petugas</option>
					                    </select>
					                  </div>
									
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
