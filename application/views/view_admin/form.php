<?php if($content == "add-data-sekolah") { ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Tambah Data Sekolah</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?= site_url('adminij/create_sekolah') ?>" class="form-horizontal" method="POST">
            <div class="control-group">
              <label class="control-label">ID. Sekolah</label>
              <div class="controls">
                <input type="text" name="id_sekolah" placeholder="ID. Sekolah" class="span8" autofocus required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Sekolah</label>
              <div class="controls">
                <input type="text" name="nama_sekolah" placeholder="Nama Sekolah" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat Sekolah</label>
              <div class="controls">
                <input type="text" name="alamat_sekolah" placeholder="Alamat Sekolah" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Telepon</label>
              <div class="controls">
                <input type="text" name="telp_sekolah" placeholder="Telepon" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email Sekolah</label>
              <div class="controls">
                <input type="email" name="email_sekolah" id="email" placeholder="Email Sekolah" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Website</label>
              <div class="controls">
                <input type="text" name="website_sekolah" id="url" placeholder="Website" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kuota</label>
              <div class="controls">
                <input type="number" name="kuota" placeholder="Kuota" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Min</label>
              <div class="controls">
                <input type="number" name="min_nilai" placeholder="Min" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Info Umum</label>
              <div class="controls">
                <textarea class="span8" name="info_pendaftaran" required></textarea>
                <span class="help-block">Informasi yang berkaitan dengan pendaftaran.</span>
              </div>
              <div class="controls">
                <textarea class="span8" name="info_pengumuman" required></textarea>
                <span class="help-block">Informasi yang berkaitan dengan pengumuman.</span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ID. User</label>
              <div class="controls">
                <input type="text" name="id_user" placeholder="Id. User" class="span8" value="<?= $this->session->userdata('id_user'); ?>"  readonly />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Save" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content == "edit-data-sekolah") { ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Edit Data Sekolah</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?= site_url('adminij/update_sekolah') ?>" class="form-horizontal" method="POST">
          <?php foreach ($getsekolah as $row) { ?>
            <div class="control-group">
              <label class="control-label">ID. Sekolah</label>
              <div class="controls">
                <input type="text" name="id_sekolah" placeholder="ID. Sekolah" class="span2" value="<?= $row['id_sekolah'] ?>" readonly />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Sekolah</label>
              <div class="controls">
                <input type="text" name="nama_sekolah" placeholder="Nama Sekolah" class="span8" value="<?= $row['nama_sekolah'] ?>" autofocus required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat Sekolah</label>
              <div class="controls">
                <input type="text" name="alamat_sekolah" placeholder="Alamat Sekolah" class="span8" value="<?= $row['alamat_sekolah'] ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Telepon</label>
              <div class="controls">
                <input type="text" name="telp_sekolah" id="mask-phone" placeholder="Telepon" class="span8" value="<?= $row['telp_sekolah'] ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email Sekolah</label>
              <div class="controls">
                <input type="email" name="email_sekolah" id="email" placeholder="Email Sekolah" class="span8" value="<?= $row['email_sekolah'] ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Website</label>
              <div class="controls">
                <input type="text" name="website_sekolah" id="url" placeholder="Website" class="span8" value="<?= $row['website_sekolah'] ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kuota</label>
              <div class="controls">
                <input type="number" name="kuota" placeholder="Kuota" class="span8" value="<?= $row['kuota'] ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Min</label>
              <div class="controls">
                <input type="number" name="min_nilai" placeholder="Min" class="span8" value="<?= $row['min_nilai'] ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Info Umum</label>
              <div class="controls">
                <textarea class="span8" name="info_umum" required><?= $row['info_umum'] ?></textarea>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ID. User</label>
              <div class="controls">
                <input type="text" name="id_user" id="required" placeholder="Id. User" class="span2" value="<?= $row['id_user'] ?>" readonly />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Save" />
              <a href="<?= site_url('adminij/sekolah') ?>" class="btn btn-danger" >Batal</a>
            </div>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>


<?php if($content == "add-data-user") { ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Tambah Data User</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?= site_url('adminij/create_user') ?>" class="form-horizontal" method="POST">
            <div class="control-group">
              <label class="control-label">ID. User</label>
              <div class="controls">
                <input type="text" name="id_user" placeholder="ID. User" class="span8" autofocus required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Username</label>
              <div class="controls">
                <input type="text" name="username" placeholder="Username" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password</label>
              <div class="controls">
                <input type="password" name="password" placeholder="Password" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Level</label>
              <div class="controls">
                <select class="span8" name="level" required>
                  <option value="">-- Level User --</option>
                  <option value="Administrator">Administrator</option>
                  <option value="Operator">Operator</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email Sekolah</label>
              <div class="controls">
                <input type="email" name="email" id="email" placeholder="Email" class="span8" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Save" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content == "edit-data-user") { ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Edit Data User</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?= site_url('adminij/update_user') ?>" class="form-horizontal" method="POST">
            <?php foreach ($getuser as $row) { ?>
            <div class="control-group">
              <label class="control-label">ID. User</label>
              <div class="controls">
                <input type="text" name="id_user" placeholder="ID. User" class="span8" value="<?= $row['id_user'] ?>" readonly required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Username</label>
              <div class="controls">
                <input type="text" name="username" placeholder="Username" class="span8" value="<?= $row['username'] ?>" required autofocus />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password</label>
              <div class="controls">
                <input type="password" name="password" placeholder="Password" class="span8" value="<?= $row['password'] ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Level</label>
              <div class="controls">
                <select class="span8" name="level" required>
                  <option value="<?= $row['level'] ?>"><?= $row['level'] ?></option>
                  <option value="Administrator">Administrator</option>
                  <option value="Operator">Operator</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email Sekolah</label>
              <div class="controls">
                <input type="email" name="email" id="email" placeholder="Email" class="span8" value="<?= $row['email'] ?>" required />
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Save" />
              <a href="<?= site_url('adminij/data_user') ?>" class="btn btn-danger" >Batal</a>
            </div>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>


<?php if($content == "add-data-siswa") { ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Tambah Data Calon Peserta Didik</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?= site_url('adminij/create_siswa') ?>" class="form-horizontal" method="POST">
            <div class="control-group">
              <label class="control-label">No. Pendaftaran</label>
              <div class="controls">
                <input type="text" name="no_pendaftaran" placeholder="No. Pendaftaran" class="span8" autofocus required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama</label>
              <div class="controls">
                <input type="text" name="nama_siswa" placeholder="Nama Calon Peserta Didik" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat</label>
              <div class="controls">
                <input type="text" name="alamat" placeholder="Alamat Calon Peserta Didik" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kelamin</label>
              <div class="controls">
                <select class="span8" name="jns_kel" required="">
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Asal Sekolah</label>
              <div class="controls">
                <input type="text" name="asal_sekolah" id="Asal Sekolah" placeholder="Asal Sekolah" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Telepon</label>
              <div class="controls">
                <input type="text" name="telp_siswa" placeholder="Telepon" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nilai</label>
              <div class="controls">
                <input type="text" name="nilai_siswa" placeholder="Nilai" class="span8" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sekolah Tujuan</label>
              <div class="controls">
                <?php
                  if ($this->session->userdata('level') == 'Administrator') { ?>
                      <select class="span8" name="id_sekolah" required>
                        <option value="">-- Pilih Sekolah Tujuan --</option>
                        <?php foreach ($getidsekolah as $row){?>
                            <option value="<?= $row->id_sekolah ?>"><?= $row->nama_sekolah ?></option>
                        <?php } ?>
                      </select>
                  <?php } else { ?>
                      <select class="span8" name="id_sekolah" required>
                        <option value="<?= $this->session->userdata('id_user'); ?>"><?= $this->session->userdata('username'); ?></option>
                      </select>
                 <?php }
                ?>
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Save" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content == "edit-data-siswa") { ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Edit Data Calon Peserta Didik</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?= site_url('adminij/update_siswa') ?>" class="form-horizontal" method="POST">
            
            <div class="control-group">
              <label class="control-label">No. Pendaftaran</label>
              <div class="controls">
                <input type="text" name="no_pendaftaran" placeholder="No. Pendaftaran" class="span8" value="<?= $siswa->no_pendaftaran ?>" readonly required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama</label>
              <div class="controls">
                <input type="text" name="nama_siswa" placeholder="Nama Calon Peserta Didik" class="span8" value="<?= $siswa->nama_siswa ?>"  autofocus required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat</label>
              <div class="controls">
                <input type="text" name="alamat" placeholder="Alamat Calon Peserta Didik" class="span8" value="<?= $siswa->alamat ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kelamin</label>
              <div class="controls">
                <select class="span8" name="jns_kel" required="">
                  <?php if($siswa->jns_kel=="L") {
                    echo '<option value="L">Laki-Laki</option>';
                  } else if($siswa->jns_kel=="P") {
                    echo '<option value="P">Perempuan</option>';
                  } ?>
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Asal Sekolah</label>
              <div class="controls">
                <input type="text" name="asal_sekolah" id="Asal Sekolah" placeholder="Asal Sekolah" class="span8" value="<?= $siswa->asal_sekolah ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Telepon</label>
              <div class="controls">
                <input type="text" name="telp_siswa" placeholder="Telepon" class="span8" value="<?= $siswa->telp_siswa ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nilai</label>
              <div class="controls">
                <input type="text" name="nilai_siswa" placeholder="Nilai" class="span8" value="<?= $siswa->nilai_siswa ?>" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Sekolah Tujuan</label>
              <div class="controls">
                <?php
                  if ($this->session->userdata('level') == 'Administrator') { ?>
                    <select class="span8" name="id_sekolah" required>
                      <?php foreach($sekolah as $sekolah) { ?>
                      <option value="<?= $sekolah->id_sekolah ?>" 
                      <?php if($siswa->id_sekolah==$sekolah->id_sekolah) { echo "selected"; } ?>
                      ><?php echo $sekolah->nama_sekolah ?></option>
                      <?php } ?>
                    </select>
                  <?php } else { ?>
                      <select class="span8" name="id_sekolah" required>
                        <option value="<?= $this->session->userdata('id_user'); ?>"><?= $this->session->userdata('username'); ?></option>
                      </select>
                 <?php }
                ?>
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Save" />
              <a href="<?= site_url('adminij/siswa') ?>" class="btn btn-danger" >Batal</a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content == "add-data-masukan") { ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Masukan</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?= site_url('adminij/create_masukan') ?>" class="form-horizontal" method="POST">
            <div class="control-group">
              <label class="control-label">Email</label>
              <div class="controls">
                <input type="email" name="email_masukan" placeholder="Email" class="span8" readonly value="<?= $this->session->userdata('email'); ?>" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Masukan</label>
              <div class="controls">
                <textarea rows="5" class="span8" name="isi_masukan" required></textarea>
              </div>
            </div>
            <div class="form-actions">
              <input type="submit" class="btn btn-success" value="Save" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>