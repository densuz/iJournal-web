<?php if($content == "view-data-sekolah") { ?>	
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
					<h5>Informasi Detail Sekolah</h5>
					<?php foreach ($detsekolah as $row) { ?>
					<div class="buttons"> <a href="<?= site_url('adminij/data_pendaftar/'.$row['id_sekolah']) ?>" class="btn btn-info btn-mini">Lihat Data Pendaftar <i class=" icon-arrow-right icon-white"></i></a></div>
				</div>
				<div class="widget-content">
            		<div class="row-fluid">
            			<div class="span12">
            				<h3><center><?= $row['nama_sekolah'] ?></center></h3>
						        <div class="widget-box">
							        <div class="widget-title"><span class="icon"><i class="icon-info-sign"></i></span>
							            <h5>Detail Sekolah</h5>
							        </div>
						            <div class="widget-content">
						            	<table class="table table-bordered table-invoice">
						                  	<tbody>
						                    <tr>
							                    <tr>
							                      <td class="width30">ID. Sekolah</td>
							                      <td class="width70"><strong><?= $row['id_sekolah'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Alamat</td>
							                      <td><strong><?= $row['alamat_sekolah'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Telepon</td>
							                      <td><strong><?= $row['telp_sekolah'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Email</td>
							                      <td><strong><?= $row['email_sekolah'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Website</td>
							                      <td><strong><?= $row['website_sekolah'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Kuota</td>
							                      <td><strong><?= $row['kuota'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Minimal Nilai</td>
							                      <td><strong><?= $row['min_nilai'] ?></strong></td>
							                    </tr>
							                </tr>
						                    </tbody>
						                </table>
						            </div>
						          	<div class="widget-title"> <span class="icon"><i class="icon-info-sign"></i></span>
						            	<h5>Info Umum</h5>
						            </div>
						            <div class="widget-content"> <?= $row['info_umum'] ?> </div>
						        </div>
			                <?php } ?>
            			</div>
            		</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if($content == "view-data-user") { ?>	
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
					<h5>Informasi Detail User</h5>
				</div>
				<div class="widget-content">
            		<div class="row-fluid">
            			<div class="span12">
            				<?php foreach ($detuser as $row) { ?>
            				<h3><center><?= $row['username'] ?></center></h3>
						        <div class="widget-box">
							        <div class="widget-title"> <span class="icon"><i class="icon-info-sign"></i></span>
							            <h5>Detail User</h5>
							            </div>
						            <div class="widget-content">
						            	<table class="table table-bordered table-invoice">
						                  	<tbody>
						                    <tr>
							                    <tr>
							                      <td class="width30">ID. User</td>
							                      <td class="width70"><strong><?= $row['id_user'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Username</td>
							                      <td><strong><?= $row['username'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Level</td>
							                      <td><strong><?= $row['level'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Email</td>
							                      <td><strong><?= $row['email'] ?></strong></td>
							                    </tr>>
							                </tr>
						                    </tbody>
						                </table>
						            </div>
						        </div>
			                <?php } ?>
            			</div>
            		</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if($content == "view-data-siswa") { ?>	
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
					<h5>Informasi Detail Calon Peserta Didik</h5>
				</div>
				<div class="widget-content">
            		<div class="row-fluid">
            			<div class="span12">
            				<?php foreach ($detsiswa as $row) { ?>
            				<h3><center>No. Pendaftaran : <?= $row['no_pendaftaran'] ?></center></h3>
						        <div class="widget-box">
							        <div class="widget-title"><span class="icon"><i class="icon-info-sign"></i></span>
							            <h5>Detail Calon Peserta Didik</h5>
							         </div>
						            <div class="widget-content">
						            	<table class="table table-bordered table-invoice">
						                  	<tbody>
						                    <tr>
							                    <tr>
							                      <td class="width30">No. Pendaftaran</td>
							                      <td class="width70"><strong><?= $row['no_pendaftaran'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Nama</td>
							                      <td><strong><?= $row['nama_siswa'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Alamat</td>
							                      <td><strong><?= $row['alamat'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Jenis Kelamin</td>
							                      <?php 
							                      	if ($row['jns_kel']=='L') {
							                      		echo "<td><strong>Laki - Laki</strong></td>";
							                      	} else if ($row['jns_kel']=='P') {
							                      		echo "<td><strong>Perempuan</strong></td>";
							                      	}
							                      ?>
							                    </tr>
							                    <tr>
							                      <td>Asal Sekolah</td>
							                      <td><strong><?= $row['asal_sekolah'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Telepon</td>
							                      <td><strong><?= $row['telp_siswa'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>Nilai</td>
							                      <td><strong><?= $row['nilai_siswa'] ?></strong></td>
							                    </tr>
							                    <tr>
							                      <td>ID. Sekolah Tujuan</td>
							                      <td><strong><?= $row['id_sekolah'] ?></strong></td>
							                    </tr>
							                </tr>
						                    </tbody>
						                </table>
						            </div>
						        </div>
			                <?php } ?>
            			</div>
            		</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<!-- view detail masukan -->
<?php if($content == "view-data-masukan") { ?>	
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
					<h5>Informasi Detail Masukan</h5>
				</div>
				<div class="widget-content">
					<?php foreach ($detmasukan as $row) { ?>
					<ul class="recent-posts">
		              	<li>
		                	<div class="user-thumb"> <img width="40" height="40" alt="User" src="<?= base_url() ?>admin-matrix/img/demo/av1.jpg"> </div>
			                <div class="article-post">
			                  	<span class="user-info"> ID: <?= $row['id_masukan'] ?> / By: <?= $row['email_masukan'] ?> </span>
			                  	<p><?= $row['isi_masukan'] ?></p>
			                </div>
		              	</li>
		            </ul>
	                <?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<!-- View box sekolah / data peserta didik-->
<?php if($content == "view-data-peserta-didik") { ?>
<div class="quick-actions_homepage">
	<h2>Pilih Sekolah Tujuan</h2>
	<hr>
    <ul class="quick-actions">
	    <center>
	     	<?php foreach ($datasekolah as $row){?>
	   		<li class="bg_lr span3"> <a href="<?= site_url('adminij/data_pendaftar/'.$row->id_sekolah) ?>"> <i class="icon-home"></i> <?= $row->nama_sekolah ?> </a> </li>
	   	<?php } ?>
		</center>
	</ul>
</div>
<div class="pagination alternate">
	<center>
  	<?= $link ?>
  	</center>
</div>
<?php } ?>


<!-- View About Us -->
<?php if($content == "view-about-us") { ?>
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
	         <div class="widget-title"><span class="icon"><i class="icon-info-sign"></i></span>
	            <h5>About</h5>
	         </div>
            <div class="widget-content">
            	<div class="error_ex">
            		<?php foreach ($dataabout as $row) { ?>
            		<img src="<?= base_url() ?>admin-matrix/img/demo/demo-logo.png" alt="demo-image"/><br><br>
            		<h4><?= $row->tagline ?></h4><br>
            		<p><?= $row->detail_aboutus ?></p>
            		<?php } ?>
				</div>
            </div>
	         <div class="widget-title"><span class="icon"><i class="icon-thumbs-up"></i></span>
            	<h5>Why Choose Us</h5>
            </div>
        	<div class="widget-content">
        		<div class="row-fluid">
        			<div class="span4">
							<div class="widget-box">
								<div class="widget-content">
	                        <h4><i class="icon-asterisk"></i> Mobile <strong>App Design</strong></h4>
	                        <p>Design Feature yang interaktif dan atraktif, support feksibility support.</p>
								</div>
							</div>
					   </div>
					   <div class="span4">
							<div class="widget-box">
								<div class="widget-content">
									<h4><i class="icon-heart"></i> Love <strong>Our Client</strong></h4>
                    		<p>Helping our client is our passion. We love our clients because they teach us new things every day.</p>
								</div>
							</div>
					   </div>
					   <div class="span4">
							<div class="widget-box">
								<div class="widget-content">
									<h4><strong><i class="icon-cogs"></i> Framework</strong> Integrated</h4>
                    		<p>Terintegrasi dengan framework menjadikan pekerjaan yang kompleks dapat diselesaikan lebih mudah.</p>
								</div>
							</div>
					   </div>
					</div>
					<div class="row-fluid">
					   <div class="span4">
							<div class="widget-box">
								<div class="widget-content">
									<h4><strong><i class="icon-time"></i> Real-Time</strong> Data</h4>
                    		<p>Sistem akan memproses secara langsung setiap perubahan data dalam waktu nyata (real-time).</p>
								</div>
							</div>
					   </div>
					   <div class="span4">
							<div class="widget-box">
								<div class="widget-content">
									<h4><strong><i class="icon-wrench"></i> Service and</strong> Maintenance</h4>
                   			<p>Gabung dengan kami dan anda akan mendapatkan pelayanan dan solusi pemeliharaan terbaik.</p>
								</div>
							</div>
					   </div>
					   <div class="span4">
							<div class="widget-box">
								<div class="widget-content">
									<h4><strong><i class="icon-star"></i> Trust in</strong> Our Experience</h4>
                    		<p>Trust our experience in reapir, design and maintenance.</p>
								</div>
							</div>
					   </div>
					</div>
        	</div>
          	<div class="widget-title"><span class="icon"><i class="icon-group"></i></span>
            	<h5>Our Awesome Team</h5>
            </div>
            	<div class="widget-content">
            		<div class="row-fluid">

            			<div class="span3">
								<div class="widget-box">
									<div class="widget-content">
										<center>
											<img src="<?= base_url() ?>ijournal/img/team/project-manager.jpg" alt="demo-image" width='160px' height='580px' /><br><br>
											<h4>M. RIZALUDIN, M.Kom</h4>
											<h5>Project Manager</h5>
										</center>
									</div>
								</div>
							</div>
            			<div class="span2">
								<div class="widget-box">
									<div class="widget-content">
										<center>
											<img src="<?= base_url() ?>ijournal/img/team/team-member-1.jpg" alt="demo-image" width='160px' height='580px' /><br><br>
											<h4>ERIK WIBOWO</h4>
											<h5>UI & UX Designer</h5>
										</center>
									</div>
								</div>
							</div>
							<div class="span2">
								<div class="widget-box">
									<div class="widget-content">
										<center>
											<img src="<?= base_url() ?>ijournal/img/team/team-member-2.jpg" alt="demo-image" width='160px' height='580px' /><br><br>
											<h4>DEWI SAKINAH</h4>
											<h5>Front-End Developer</h5>
										</center>
									</div>
								</div>
							</div>
							<div class="span2">
								<div class="widget-box">
									<div class="widget-content">
										<center>
											<img src="<?= base_url() ?>ijournal/img/team/team-member-3.jpg" alt="demo-image" width='160px' height='580px' /><br><br>
											<h4>QOMARIYAH</h4>
											<h5>Back-End Developer</h5>
										</center>
									</div>
								</div>
							</div>
							<div class="span3">
								<div class="widget-box">
									<div class="widget-content">
										<center>
											<img src="<?= base_url() ?>ijournal/img/team/team-member-4.jpg" alt="demo-image" width='160px' height='580px' /><br><br>
											<h4>AFRIZAL AHMED A</h4>
											<h5>Database Administrator</h5>
										</center>
									</div>
								</div>
							</div>
						</div>
            	</div>
		   </div>
	   </div>
	</div>
<?php } ?>