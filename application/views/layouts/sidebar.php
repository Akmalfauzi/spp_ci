<!-- Main Sidebar Container -->
	<aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="" class="brand-link">
			<img src="<?= base_url('asset/template/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
					 style="opacity: .8">
			<span class="brand-text font-weight-light">Aplikasi SPP</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex">
				<div class="image">
					<img src="<?= base_url('asset/template/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="#" class="d-block"><?php echo $this->session->userdata('username'); ?></a>
				</div>
			</div>

			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class
							 with font-awesome or any other icon font library -->

					<!-- admin -->
					<?php if ($this->session->userdata('level') == 'admin') { ?>
						<li class="nav-item">
						<a href="<?php echo base_url('dashboard-admin') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'dashboard-admin' ? 'active' : ''; ?>">
							<i class="nav-icon fas fa-home""></i>
							<p>
								Dashboard
								<!-- <span class="right badge badge-danger">New</span> -->
							</p>
						</a>
					</li>
					<?php } ?>
					<!-- petugas -->
					<?php if ($this->session->userdata('level') == 'petugas') { ?>
						<li class="nav-item">
						<a href="<?php echo base_url('dashboard-petugas') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'dashboard-petugas' ? 'active' : ''; ?>">
							<i class="nav-icon fas fa-home"></i>
							<p>
								Dashboard
								<!-- <span class="right badge badge-danger">New</span> -->
							</p>
						</a>
					</li>

					<?php } ?>
					<li class="nav-header">MENU</li>
					<!-- admin -->
					<?php if ($this->session->userdata('level') == 'admin') { ?>					
					<li class="nav-item">
						<a href="<?php echo base_url('data-siswa') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'data-siswa' ? 'active' : ''; ?>">
							<i class="nav-icon fas fa-users"></i>
							<p>
								Data Siswa
								<!-- <span class="badge badge-info right">2</span> -->
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('data-spp') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'data-spp' ? 'active' : ''; ?>">
							<i class="nav-icon fas fa-money-bill"></i>
							<p>
								Data SPP
								<!-- <span class="badge badge-info right">2</span> -->
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('data-kelas') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'data-kelas' ? 'active' : ''; ?>">
							<i class="nav-icon fas fa-school"></i>
							<p>
								Data Kelas
								<!-- <span class="badge badge-info right">2</span> -->
							</p>
						</a>
					</li>
					
					<li class="nav-item">
						<a href="<?php echo base_url('data-petugas') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'data-petugas' ? 'active' : ''; ?>">
							<i class="nav-icon far fa-user"></i>
							<p>
								Data Petugas
								<!-- <span class="badge badge-info right">2</span> -->
							</p>
						</a>
					</li>
					<!-- <li class="nav-item">
						<a href="<?php echo base_url('data-tunggakan') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'data-tunggakan' ? 'active' : ''; ?>">
							<i class="nav-icon fas fa-minus-circle"></i>
							<p>
								Data Tunggakan
								<span class="badge badge-info right">2</span>
							</p>
						</a>
					</li> -->
					<li class="nav-item">
						<a href="<?php echo base_url('pembayaran') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'pembayaran' ? 'active' : ''; ?>">
							<i class="nav-icon fas fa-money-check"></i>
							<p>
								Pembayaran
								<!-- <span class="badge badge-info right">2</span> -->
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('history-pembayaran') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'history-pembayaran' ? 'active' : ''; ?>">
							<i class="nav-icon fa fa-history"></i>
							<p>
								History Pembayaran
								<!-- <span class="badge badge-info right">2</span> -->
							</p>
						</a>
					</li>
					<li class="nav-header">EXTRA</li>
					<li class="nav-item">
						<a href="<?php echo base_url('laporan') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'laporan' ? 'active' : ''; ?>">
							<i class="nav-icon fas fa-file"></i>
							<p>Laporan</p>
						</a>
					</li>
					<?php } ?>
					<!-- petugas -->
					<?php if ($this->session->userdata('level') == 'petugas') { ?>
					<li class="nav-item">
						<a href="<?php echo base_url('pembayaran') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'pembayaran' ? 'active' : ''; ?>">
							<i class="nav-icon fas fa-money-check"></i>
							<p>
								Pembayaran
								<!-- <span class="badge badge-info right">2</span> -->
							</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('history-pembayaran') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'history-pembayaran' ? 'active' : ''; ?>">
							<i class="nav-icon fa fa-history"></i>
							<p>
								History Pembayaran
								<!-- <span class="badge badge-info right">2</span> -->
							</p>
						</a>
					</li>
					<?php } ?>
					<!-- siswa -->
					<?php if ($this->session->userdata('level') == 'siswa') { ?>
					<li class="nav-item">
						<a href="<?php echo base_url('history-pembayaran-siswa') ?>" class="nav-link <?php echo $this->uri->segment(1) == 'history-pembayaran-siswa' ? 'active' : ''; ?>">
							<i class="nav-icon fa fa-history"></i>
							<p>
								History Pembayaran
								<!-- <span class="badge badge-info right">2</span> -->
							</p>
						</a>
					</li>
					<?php } ?>
					<!-- <li class="nav-item has-treeview">
						<a href="#" class="nav-link">
							<i class="nav-icon far fa-envelope"></i>
							<p>
								Data Kelas
								<i class="fas fa-angle-left right"></i>
							</p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="pages/mailbox/mailbox.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Inbox</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="pages/mailbox/compose.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Compose</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="pages/mailbox/read-mail.html" class="nav-link">
									<i class="far fa-circle nav-icon"></i>
									<p>Read</p>
								</a>
							</li>
						</ul>
					</li> -->

					

				</ul>
			</nav>
			<!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	</aside>
