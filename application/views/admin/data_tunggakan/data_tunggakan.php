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

					<div class="card">
						<div class="card-header">
							<!-- <h3 class="card-title">DataTable with default features</h3> -->
							<a href="<?php echo base_url('tambah-tunggakan') ?>" class="btn btn-sm btn-primary">Tambah Data</a>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
								<tr>
									<th>NO</th>
									<th>Nama Siswa</th>
									<th>Nama Petugas</th>
									<th>Bulan</th>
									<th>Tahun</th>
									<th>Opsi</th>
								</tr>
								</thead>
								<tbody>
								<?php $no=1; foreach ($data_tunggakan as $tunggakan) { ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $tunggakan->nama ?></td>
									<td><?php echo $tunggakan->nama_petugas ?></td>
									<td><?php echo $tunggakan->bulan ?></td>
									<td><?php echo $tunggakan->tahun ?></td>
									<td>
										<!-- <a href="<?php echo base_url('edit-tunggakan/'.$tunggakan->id_tunggakan) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a> -->
										<a href="<?php echo base_url('hapus-tunggakan/'.$tunggakan->id_tunggakan) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?php } ?>
								
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
