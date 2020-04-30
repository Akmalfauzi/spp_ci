<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<!-- <h1>DataTables</h1> -->
				</div>
				<!-- <div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">DataTables</li>
						</ol>
					</div> -->
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<?php if ($this->session->flashdata('sukses')) { ?>
				<div class="alert alert-info">
					<?php echo $this->session->flashdata('sukses'); ?>
				</div>
				<?php } ?>

				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Pembayaran</h3>
						<!-- <a href="<?php echo base_url('tambah-pembayaran') ?>" class="btn btn-sm btn-primary">Tambah Data</a> -->
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<form class="form-inline">
							<div class="row ">
								<div class="col-md-12">
									<div class="form-group">
										<label>Cari Siswa</label>
										<input type="text" name="cari" placeholder="Masukkan NISN" class=" ml-md-3 ml-sm-3 ml-lg-3 form-control">
										<button type="submit" class="ml-sm-3 ml-md-3 ml-lg-3 btn btn-sm btn-primary">Cari</button>
									</div>
								</div>
							</div>
						</form>


					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->

				<?php if ($siswa) { ?>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Data Siswa</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<table class="table table-condensed">
								<thead>
									<tr>
										<th>NISN</th>
										<th>Nama</th>
										<th>Kelas</th>
										<th>Progress</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo $siswa->nisn ?></td>
										<td><?php echo $siswa->nama ?></td>
										<td><?php echo $siswa->nama_kelas ?></td>
										<td>
											<a href="<?php echo base_url('pembayaran-detail/' . $siswa->nisn) ?>" class="btn btn-primary btn-sm">Bayar</a>
											<!-- <a href="<?php echo base_url('history-pembayaran/' . $siswa->nisn) ?>" class="btn btn-primary btn-sm">History</a> -->
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
				<?php } ?>
				<!-- /.card -->

			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
