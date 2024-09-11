<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li>
				<a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
			</li>
			<li>
				<a href="<?= base_url('mapel') ?>"><i class="fa fa-leanpub fa-fw"></i> Mata Pelajaran</a>
			</li>
			<li>
				<a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
			</li>
			<li>
				<a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="panels-wells.html">Panels and Wells</a>
					</li>
					<li>
						<a href="buttons.html">Buttons</a>
					</li>
					<li>
						<a href="notifications.html">Notifications</a>
					</li>
					<li>
						<a href="typography.html">Typography</a>
					</li>
					<li>
						<a href="icons.html"> Icons</a>
					</li>
					<li>
						<a href="grid.html">Grid</a>
					</li>
				</ul>
				<!-- /.nav-second-level -->
			</li>
			<li>
				<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Second Level Item</a>
					</li>
					<li>
						<a href="#">Third Level <span class="fa arrow"></span></a>
						<ul class="nav nav-third-level">
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
							<li>
								<a href="#">Third Level Item</a>
							</li>
						</ul>
						<!-- /.nav-third-level -->
					</li>
				</ul>
				<!-- /.nav-second-level -->
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
