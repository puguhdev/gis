<div class="main-sidebar">
	<aside id="sidebar-wrapper">

		<div class="sidebar-brand">
            <a href="index.html">SISFO</a>
    	</div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SF</a>
		</div>

		<!-- Main Menu -->
		<ul class="sidebar-menu">
			<li class="menu-header">Super Admin</li>
			<li><a class="nav-link" href="<?=site_url()?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

			<li class="nav-item dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Data Peserta Didik</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?=site_url()?>">Semua Peserta Didik</a></li>
					<li><a class="nav-link" href="<?=site_url()?>">Tambah Peserta Didik</a></li>
					<li><a class="nav-link" href="<?=site_url()?>">Nilai Peserta Didik</a></li>
				</ul>
			</li>

			<li class="nav-item dropdown">
				<a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i><span>Data Master</span></a>
				<ul class="dropdown-menu">
					<li><a class="nav-link" href="<?=site_url('master/jurusan')?>">Master Jurusan</a></li>
					<li><a class="nav-link" href="<?=site_url('master/kelas')?>">Master Kelas</a></li>
					<li><a class="nav-link" href="<?=site_url()?>">Master Rombel</a></li>
					<li><a class="nav-link" href="<?=site_url()?>">Master Pendidikan</a></li>
					<li><a class="nav-link" href="<?=site_url()?>">Master Pekerjaan</a></li>
					<li><a class="nav-link" href="<?=site_url()?>">Master Jabatan</a></li>
					<li><a class="nav-link" href="<?=site_url()?>">Master Status GTK</a></li>
				</ul>
			</li>


		</ul>
		  
	</aside>
</div>