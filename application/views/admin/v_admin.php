  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div> --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
    <?php if ($this->session->userdata('level') == "admin") { ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $siswa; ?></h3>

                <p>Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('data-siswa') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $kelas; ?></h3>

                <p>Kelas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
    <?php } ?>



          <!-- ./col -->
<!--           <div class="col-lg-3 col-6">
  small box
  <div class="small-box bg-warning">
    <div class="inner">
      <h3>44</h3>

      <p>User Registrations</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div> -->
          <!-- ./col -->
<!--           <div class="col-lg-3 col-6">
  small box
  <div class="small-box bg-danger">
    <div class="inner">
      <h3>65</h3>

      <p>Unique Visitors</p>
    </div>
    <div class="icon">
      <i class="ion ion-pie-graph"></i>
    </div>
    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
  </div>
</div> -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
     <?php if ($this->session->userdata('level') == "petugas") { ?>
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">DataTable with default features</h3> -->
              <!-- <a href="<?php echo base_url('tambah-siswa') ?>" class="btn btn-sm btn-primary">Tambah Data</a> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
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
                  <!-- <th>Opsi</th> -->
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($data_siswa as $siswa) { ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $siswa->nisn ?></td>
                  <td><?php echo $siswa->nis ?></td>
                  <td><?php echo $siswa->nama ?></td>
                  <!-- <td><?php echo $siswa->username ?></td> -->
                  <td><?php echo $siswa->nama_kelas ?></td>
                  <td><?php echo $siswa->alamat ?></td>
                  <td><?php echo $siswa->no_telp ?></td>
                  <!-- <td>
                  	<a href="<?php echo base_url('edit-siswa/'.$siswa->nisn) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                  	<a onclick="return confirm('Beneran ? Hapus Data == Hapus Kenangan:v')" href="<?php echo base_url('hapus-siswa/'.$siswa->nisn) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                  </td> -->
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

    <?php } ?>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
