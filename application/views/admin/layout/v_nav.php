<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li>
				<a href="<?= base_url('admin') ?>"><i class="fa fa-home fa-fw"></i> Dashboard</a>
			</li>
			<li>
				<a href="<?= base_url('mapel') ?>"><i class="fa fa-leanpub fa-fw"></i> Mata Pelajaran</a>
			</li>
			<li>
				<a href="<?= base_url('guru') ?>"><i class="fa fa-users fa-fw"></i> Data Guru</a>
			</li>
			<li>
				<a href="<?= base_url('siswa') ?>"><i class="fa fa-mortar-board fa-fw"></i> Data Siswa</a>
			</li>
			<li>
				<a href="<?= base_url('pengumuman') ?>"><i class="fa fa-bullhorn fa-fw"></i> Pengumuman</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-indent fa-fw"></i> Berita</a>
			</li>
			<li class="active">
				<a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				<!-- /.nav-second-level -->
			</li>
		</ul>
	</div>
	<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header"><?= $title2 ?></h2>
