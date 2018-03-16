<?php if($content == "box-administrator") { ?>
<div class="quick-actions_homepage">
  <ul class="quick-actions">
    <li class="bg_lb span3"> <a href="<?= site_url('adminij') ?>"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
    <li class="bg_lo span3"> <a href="<?= site_url('adminij/data_sekolah') ?>"> <i class="icon-home"></i> <span class="label label-important"><?= $sekolah  ?></span> Sekolah</a> </li>
    <li class="bg_lg span3"> <a href="<?= site_url('adminij/siswa') ?>"> <i class="icon-group"></i> <span class="label label-important"><?= $siswa  ?></span> Calon Peserta Didik</a> </li>
    <li class="bg_ly span3"> <a href="<?= site_url('adminij/data_user') ?>"> <i class="icon-user"></i><span class="label label-important"><?= $user  ?></span> User </a> </li>
    <li class="bg_lb"> <a href="<?= site_url('adminij/masukan') ?>"> <i class="icon-envelope-alt"></i> <span class="label label-important"><?= $masukan  ?></span> Masukan</a> </li>
    <li class="bg_ls"> <a href="<?= site_url('adminij/aboutus') ?>"> <i class="icon-info-sign"></i> About</a> </li>
  </ul>
</div>
<?php } ?>

<?php if($content == "box-operator") { ?>
<div class="quick-actions_homepage">
  <ul class="quick-actions">
    <li class="bg_lb span3"> <a href="<?= site_url('adminij') ?>"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
    <li class="bg_lo span3"> <a href="<?= site_url('adminij/data_sekolah') ?>"> <i class="icon-home"></i> Sekolah</a> </li>
    <li class="bg_lg span3"> <a href="<?= site_url('adminij/siswa') ?>"> <i class="icon-group"></i> Calon Peserta Didik</a> </li>
    <li class="bg_ly span3"> <a href="<?= site_url('adminij/masukan') ?>"> <i class="icon-envelope-alt"></i>  Masukan</a> </li>
    <li class="bg_ls span3"> <a href="<?= site_url('adminij/aboutus') ?>"> <i class="icon-info-sign"></i> About</a> </li>
  </ul>
</div>
<?php } ?>