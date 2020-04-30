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
								<h3 class="card-title">Tambah Siswa</h3>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form role="form" action="<?php echo base_url('datasiswa/store') ?>" method="POST">
								<div class="card-body">		

									<div class="form-group">
										<label for="exampleInputEmail1">NISN</label>
										<input type="text" name="nisn" class="form-control" value="<?php echo set_value('nisn') ?>" id="exampleInputEmail1" placeholder="NISN">
									</div>
										<b style="color: red;"><?php echo form_error('nisn') ?></b>
									<div class="form-group">
										<label for="exampleInputEmail1">NIS</label>
										<input type="text" name="nis" class="form-control" value="<?php echo set_value('nis') ?>" id="exampleInputEmail1" placeholder="NIS">
									</div>
									<b style="color: red;"><?php echo form_error('nis') ?></b>
									<div class="form-group">
										<label for="exampleInputEmail1">Nama</label>
										<input type="text" name="nama" class="form-control" value="<?php echo set_value('nama') ?>" id="exampleInputEmail1" placeholder="Nama">
									</div>
									<b style="color: red;"><?php echo form_error('nama') ?></b>
									<div class="form-group">
										<label for="exampleInputEmail1">Username</label>
										<input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>" id="exampleInputEmail1" placeholder="Username">
									</div>
									<b style="color: red;"><?php echo form_error('username') ?></b>
									<div class="form-group">
										<label for="exampleInputEmail1">Password</label>
										<input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>" id="exampleInputEmail1" placeholder="Password">
									</div>
									<b style="color: red;"><?php echo form_error('password') ?></b>
									<div class="form-group">
					                    <label>Kelas</label>
					                    <select name="kelas" class="form-control">
					                    	<?php foreach ($data_kelas as $kelas) { ?>
					                      <option value="<?php echo $kelas->id_kelas ?>"> <?php echo $kelas->nama_kelas ?> </option>
					                    	<?php } ?>
					                    </select>
					                  </div>
					                  <div class="form-group">
					                    <label>Alamat</label>
					                    <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat"><?php echo set_value('alamat') ?></textarea>
					                  </div>
					                  <b style="color: red;"><?php echo form_error('alamat') ?></b>
									<div class="form-group">
										<label for="exampleInputPassword1">No Telepon</label>
										<input type="text" name="no_telp" class="form-control" value="<?php echo set_value('no_telp') ?>" id="exampleInputPassword1" placeholder="No Telepon">
									</div>
									<b style="color: red;"><?php echo form_error('no_telp') ?></b>
									<div class="form-group">
                    <label>Tahun Masuk</label>
                    <select name="tahun" class="form-control">
                    	<?php foreach ($data_spp as $spp) { ?>
                      <option value="<?php echo $spp->id_spp ?>"><?php echo $spp->tahun ?> - SPP Rp.<?php echo $spp->nominal ?></option>
                    	<?php } ?>
                    </select>
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
<!-- <div class="modal fade" id="delsiswa">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="overlay d-flex justify-content-center align-items-center">
                <i class="fas fa-2x fa-sync fa-spin"></i>
            </div>
            <div class="modal-header">
              <h4 class="modal-title">Hapus Siswa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          /.modal-content
        </div>
        /.modal-dialog
      </div>
      /.modal -->
