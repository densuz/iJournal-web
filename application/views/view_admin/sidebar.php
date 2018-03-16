<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <?php
  	if ($this->session->userdata('level') == 'Operator') { ?>
  		<ul>
		    <li><a href="<?= site_url('adminij') ?>"><i class="icon icon-dashboard"></i> <span>Dashboard</span></a> </li>
		    <li><a href="<?= site_url('adminij/sekolah') ?>"><i class="icon icon-home"></i> <span>Data Sekolah</span></a> </li>
		    <li><a href="<?= site_url('adminij/siswa') ?>"><i class="icon icon-group"></i> <span>Data Calon Peserta Didik</span></a> </li>
		    <li><a href="<?= site_url('adminij/masukan') ?>"><i class="icon icon-envelope-alt"></i> <span>Masukan</span></a></li>
		    <li><a href="<?= site_url('adminij/aboutus') ?>"><i class="icon icon-info-sign"></i> <span>About</span></a></li>
		 </ul>
  <?php } else { ?>
  		<ul>
		    <li><a href="<?= site_url('adminij') ?>"><i class="icon icon-dashboard"></i> <span>Dashboard</span></a> </li>
		    <li><a href="<?= site_url('adminij/data_user') ?>"><i class="icon icon-user"></i> <span>Data User</span></a> </li>
		    <li><a href="<?= site_url('adminij/sekolah') ?>"><i class="icon icon-home"></i> <span>Data Sekolah</span></a> </li>
		    <li><a href="<?= site_url('adminij/siswa') ?>"><i class="icon icon-group"></i> <span>Data Calon Peserta Didik</span></a> </li>
		    <li><a href="<?= site_url('adminij/masukan') ?>"><i class="icon icon-envelope-alt"></i> <span>Masukan</span></a></li>
		    <li><a href="<?= site_url('adminij/aboutus') ?>"><i class="icon icon-info-sign"></i> <span>About</span></a></li>
		 </ul>
  <?php } ?>
</div>