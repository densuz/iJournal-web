<?php if($content=="tabel-data-sekolah"){ ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon tip-top" title="Tambah data"><a href="<?= site_url('adminij/addsekolah') ?>"><i class="icon-plus "></i></a></span>
          <h5>Data Sekolah</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>IDS</th>
                <th>Nama Sekolah</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Kuota</th>
                <th>Min</th>
                <th width="9%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($datasekolah as $row){?>
              <tr class="gradeX">
                <td><?= $row->id_sekolah ?></td>
                <td><a href="<?= site_url('adminij/detailsekolah/'.$row->id_sekolah) ?>"> <?= $row->nama_sekolah ?> </a></td>
                <td><?= $row->alamat_sekolah ?></td>
                <td><?= $row->telp_sekolah ?></td>
                <td><?= $row->kuota ?></td>
                <td><?= $row->min_nilai ?></td>
                <td>
                  <center>
                  <a href="<?= site_url('adminij/detailsekolah/'.$row->id_sekolah) ?>">
                      <button type="button" class="btn btn-success btn-mini tip-bottom" title="Lihat data">
                          <i class="icon-eye-open"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/editsekolah/'.$row->id_sekolah) ?>">
                      <button type="button" class="btn btn-primary btn-mini tip-bottom" title="Ubah data">
                          <i class="icon-pencil"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/delete_sekolah/'.$row->id_sekolah) ?>">
                      <button type="button" class="btn btn-danger btn-mini tip-bottom" title="Hapus" onclick="return confirm('Apakah anda yakin akan menghapus record?')">
                          <i class="icon-trash"></i>
                      </button>
                  </a>
                  </center>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content=="tabel-data-sekolah2"){ ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-info-sign "></i></span>
          <h5>Data Sekolah</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>IDS</th>
                <th>Nama Sekolah</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Kuota</th>
                <th>Min</th>
                <th width="9%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($datasekolah as $row){?>
              <tr class="gradeX">
                <td><?= $row->id_sekolah ?></td>
                <td><a href="<?= site_url('adminij/detailsekolah/'.$row->id_sekolah) ?>"> <?= $row->nama_sekolah ?> </a></td>
                <td><?= $row->alamat_sekolah ?></td>
                <td><?= $row->telp_sekolah ?></td>
                <td><?= $row->kuota ?></td>
                <td><?= $row->min_nilai ?></td>
                <td>
                  <center>
                  <a href="<?= site_url('adminij/detailsekolah/'.$row->id_sekolah) ?>">
                      <button type="button" class="btn btn-success btn-mini tip-bottom" title="Lihat data">
                          <i class="icon-eye-open"></i>
                      </button>
                  </a>
                  </center>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content=="tabel-data-user"){ ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon tip-top" title="Tambah data"><a href="<?= site_url('adminij/adduser') ?>"><i class="icon-plus "></i></a></span>
          <h5>Data User</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>ID. User</th>
                <th>Username</th>
                <th>Level</th>
                <th>Password</th>
                <th>Email</th>
                <th width="9%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($datauser as $row){?>
              <tr class="gradeX">
                <td><?= $row->id_user ?></td>
                <td><?= $row->username ?></td>
                <td><?= $row->level ?></td>
                <td><?= $row->password ?></td>
                <td><?= $row->email ?></td>
                <td>
                  <center>
                  <a href="<?= site_url('adminij/detailuser/'.$row->id_user) ?>">
                      <button type="button" class="btn btn-success btn-mini tip-bottom" title="Lihat data">
                          <i class="icon-eye-open"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/edituser/'.$row->id_user) ?>">
                      <button type="button" class="btn btn-primary btn-mini tip-bottom" title="Ubah data">
                          <i class="icon-pencil"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/delete_user/'.$row->id_user) ?>">
                      <button type="button" class="btn btn-danger btn-mini tip-bottom" title="Hapus" onclick="return confirm('Apakah anda yakin akan menghapus record?')">
                          <i class="icon-trash"></i>
                      </button>
                  </a>
                  </center>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content=="tabel-data-siswa"){ ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon tip-top" title="Tambah data"><a href="<?= site_url('adminij/addsiswa') ?>"><i class="icon-plus "></i></a></span>
          <h5>Data Calon Peserta Didik</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>No. Pendaftaran</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>JK</th>
                <th>Asal Sekolah</th>
                <th>Sekolah Tujuan</th>
                <th>Telp</th>
                <th>Nilai</th>
                <th width="9%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($datasiswa as $row){?>
              <tr class="gradeX">
                <td><?= $row->no_pendaftaran ?></td>
                <td><?= $row->nama_siswa ?></td>
                <td><?= $row->alamat ?></td>
                <td><?= $row->jns_kel ?></td>
                <td><?= $row->asal_sekolah ?></td>
                <td><?= $row->nama_sekolah ?></td>
                <td><?= $row->telp_siswa ?></td>
                <td><?= $row->nilai_siswa ?></td>
                <td>
                  <center>
                  <a href="<?= site_url('adminij/detailsiswa/'.$row->no_pendaftaran) ?>">
                      <button type="button" class="btn btn-success btn-mini tip-bottom" title="Lihat data">
                          <i class="icon-eye-open"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/editsiswa/'.$row->no_pendaftaran) ?>">
                      <button type="button" class="btn btn-primary btn-mini tip-bottom" title="Ubah data">
                          <i class="icon-pencil"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/delete_siswa/'.$row->no_pendaftaran) ?>">
                      <button type="button" class="btn btn-danger btn-mini tip-bottom" title="Hapus" onclick="return confirm('Apakah anda yakin akan menghapus record?')">
                          <i class="icon-trash"></i>
                      </button>
                  </a>
                  </center>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content=="tabel-data-siswa2"){ ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon tip-top" title="Tambah data"><a href="<?= site_url('adminij/addsiswa') ?>"><i class="icon-plus "></i></a></span>
          <h5>Data Calon Peserta Didik</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>No. Pendaftaran</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>JK</th>
                <th>Asal Sekolah</th>
                <th>Sekolah Tujuan</th>
                <th>Telp</th>
                <th>Nilai</th>
                <th width="9%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($datasiswa as $row){?>
              <tr class="gradeX">
                <td><?= $row->no_pendaftaran ?></td>
                <td><?= $row->nama_siswa ?></td>
                <td><?= $row->alamat ?></td>
                <td><?= $row->jns_kel ?></td>
                <td><?= $row->asal_sekolah ?></td>
                <td><?= $row->nama_sekolah ?></td>
                <td><?= $row->telp_siswa ?></td>
                <td><?= $row->nilai_siswa ?></td>
                <td>
                  <center>
                  <a href="<?= site_url('adminij/detailsiswa/'.$row->no_pendaftaran) ?>">
                      <button type="button" class="btn btn-success btn-mini tip-bottom" title="Lihat data">
                          <i class="icon-eye-open"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/editsiswa/'.$row->no_pendaftaran) ?>">
                      <button type="button" class="btn btn-primary btn-mini tip-bottom" title="Ubah data">
                          <i class="icon-pencil"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/delete_siswa/'.$row->no_pendaftaran) ?>">
                      <button type="button" class="btn btn-danger btn-mini tip-bottom" title="Hapus" onclick="return confirm('Apakah anda yakin akan menghapus record?')">
                          <i class="icon-trash"></i>
                      </button>
                  </a>
                  </center>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content=="tabel-data-pendaftar"){ ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon tip-top" title="Tambah data"><a href="<?= site_url('adminij/addsiswa') ?>"><i class="icon-plus "></i></a></span>
          <h5>Data Calon Peserta Didik</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>No. Pendaftaran</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>JK</th>
                <th>Asal Sekolah</th>
                <th>Telp</th>
                <th>Nilai</th>
                <th width="9%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($datapendaftar as $row){?>
              <tr class="gradeX">
                <td><?= $row->no_pendaftaran ?></td>
                <td><?= $row->nama_siswa ?></td>
                <td><?= $row->alamat ?></td>
                <td><?= $row->jns_kel ?></td>
                <td><?= $row->asal_sekolah ?></td>
                <td><?= $row->telp_siswa ?></td>
                <td><?= $row->nilai_siswa ?></td>
                <td>
                  <center>
                  <a href="<?= site_url('adminij/detailsiswa/'.$row->no_pendaftaran) ?>">
                      <button type="button" class="btn btn-success btn-mini tip-bottom" title="Lihat data">
                          <i class="icon-eye-open"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/editsiswa/'.$row->no_pendaftaran) ?>">
                      <button type="button" class="btn btn-primary btn-mini tip-bottom" title="Ubah data">
                          <i class="icon-pencil"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/delete_siswa/'.$row->no_pendaftaran) ?>">
                      <button type="button" class="btn btn-danger btn-mini tip-bottom" title="Hapus" onclick="return confirm('Apakah anda yakin akan menghapus record?')">
                          <i class="icon-trash"></i>
                      </button>
                  </a>
                  </center>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<?php if($content=="tabel-data-pendaftar2"){ ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
          <h5>Data Calon Peserta Didik</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th>No. Pendaftaran</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>JK</th>
                <th>Asal Sekolah</th>
                <th>Telp</th>
                <th>Nilai</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($datapendaftar as $row){?>
              <tr class="gradeX">
                <td><?= $row->no_pendaftaran ?></td>
                <td><?= $row->nama_siswa ?></td>
                <td><?= $row->alamat ?></td>
                <td><?= $row->jns_kel ?></td>
                <td><?= $row->asal_sekolah ?></td>
                <td><?= $row->telp_siswa ?></td>
                <td><?= $row->nilai_siswa ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<!-- data masukan -->
<?php if($content=="tabel-data-masukan"){ ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><a href="#"><i class="icon-info-sign "></i></a></span>
          <h5>Data Masukan</h5>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered data-table">
            <thead>
              <tr>
                <th width="10%">ID. Masukan</th>
                <th>Email Masukan</th>
                <th>Isi Masukan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($datamasukan as $row){?>
              <tr class="gradeX">
                <td><center><?= $row->id_masukan ?></center></td>
                <td><?= $row->email_masukan ?></td>
                <td><?= $row->isi_masukan ?></td>
                <td>
                  <center>
                  <a href="<?= site_url('adminij/detailmasukan/'.$row->id_masukan) ?>">
                      <button type="button" class="btn btn-success btn-mini tip-bottom" title="Lihat data">
                          <i class="icon-eye-open"></i>
                      </button>
                  </a>
                  <a href="<?= site_url('adminij/delete_masukan/'.$row->id_masukan) ?>">
                      <button type="button" class="btn btn-danger btn-mini tip-bottom" title="Hapus" onclick="return confirm('Apakah anda yakin akan menghapus record?')">
                          <i class="icon-trash"></i>
                      </button>
                  </a>
                  </center>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php } ?>