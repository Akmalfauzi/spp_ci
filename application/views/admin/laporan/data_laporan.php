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
              <h3 class="card-title">Laporan Pembayaran</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
            	<div class="table-responsive">
            		
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NISN</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <!-- <th>Username</th> -->
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <!-- <th>status</th> -->
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($pembayaran as $siswa) { ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $siswa->nisn ?></td>
                  <td><?php echo $siswa->nis ?></td>
                  <td><?php echo $siswa->nama ?></td>
                  <!-- <td><?php echo $siswa->username ?></td> -->
                  <td><?php echo $siswa->nama_kelas ?></td>
                  <td><?php echo $siswa->alamat ?></td>
                  <td><?php echo $siswa->no_telp ?></td>
                  <!-- <td><p>Sudah Bayar</p></td> -->
                </tr>
                <?php } ?>
                
                </tbody>
              </table>
            	</div>
              
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
