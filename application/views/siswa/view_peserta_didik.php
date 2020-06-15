<div class="section">


    <div class="section-header">
        <a href="<?=site_url('siswa/siswa')?>" class="btn btn-sm btn-primary mr-2"><i class="fas fa-fw fa-user-friends"></i> Data Siswa</a>
        <a href="<?=site_url('siswa/siswa')?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fas fa-file-pdf"></i> Unduh Data Siswa</a>
    </div>


    <div class="section-body">
        <div class="row">
        <div class="col-md-3">
                <div class="card card-primary">
                    <img src="<?=site_url('assets/img/user.jpg')?>" class="w-100 img-fluid" alt="<?=$siswa['nama_lengkap']?>">
                    <div class="card-body">
                        <p class="card-title">

                            <i class="fas fa-fw fa-user-circle"></i> <?=$siswa['nisn']?>
                        </p>
                        <p class="card-title">
                            <i class="fas fa-fw fa-mobile"></i> <?=$siswa['no_hp']?>
                        </p>
                        <p class="card-title">
                            <i class="fas fa-fw fa-envelope"></i> <?=$siswa['email']?>
                        </p>
                        <p class="card-title">
                            <img src="<?=site_url('assets/qrcode/'.$siswa['qrcode_siswa'])?>" class="w-100 img-fluid" alt="">
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card card-primary">
                    <div class="card-body table-responsive">
                        <table class="table table-sm">
                            <tr><th>Nama Lengkap</th><td>:</td><td><?=$siswa['nama_lengkap']?></td></tr>
                            <tr><th>Kelas / Jurusan</th><td>:</td><td><?=$siswa['nama_kelas']?> / <?=$siswa['nama_jurusan']?></td></tr>
                            <tr><th>Tempat / Tgl. Lahir</th><td>:</td><td><?=$siswa['tmp_lahir']?> / <?=$siswa['tgl_lahir']?></td></tr>
                            <tr><th>Jenis Kelamin</th><td>:</td><td><?=$siswa['jenis_kelamin']?></td></tr>
                            <tr><th>Agama</th><td>:</td><td><?=$siswa['agama']?></td></tr>
                            <tr><th>NIK</th><td>:</td><td><?=$siswa['nik']?></td></tr>
                            <tr><th>Anak Ke-</th><td>:</td><td><?=$siswa['anak_ke']?></td></tr>
                            <tr><th>No. HP</th><td>:</td><td><?=$siswa['no_hp']?></td></tr>
                            <tr><th>Warga Negara</th><td>:</td><td><?=$siswa['kwarganegaraan']?></td></tr>
                            <tr><th>Berkebutuhan Khusus</th><td>:</td><td><?=$siswa['berkebutuhan_khusus']?></td></tr>
                            <tr><th>Alamat Jalan</th><td>:</td><td><?=$siswa['alamat_jalan']?></td></tr>
                            <tr><th>RT / RW</th><td>:</td><td><?=$siswa['rt']?> / <?=$siswa['rw']?></td></tr>
                            <tr><th>Nama Dusun</th><td>:</td><td><?=$siswa['nama_dusun']?></td></tr>
                            <tr><th>Nama Desa</th><td>:</td><td><?=$siswa['nama_desa']?></td></tr>
                            <tr><th>Kecamatan</th><td>:</td><td><?=$siswa['kecamatan']?></td></tr>
                            <tr><th>Kode POS</th><td>:</td><td><?=$siswa['kode_pos']?></td></tr>
                            <tr><th>Tempat Tinggal</th><td>:</td><td><?=$siswa['tempat_tinggal']?></td></tr>
                            <tr><th>Moda Transportasi</th><td>:</td><td><?=$siswa['moda_transportasi']?></td></tr>
                            <tr><th>No. KKS (<em>Kartu Keluarga Sejahtera</em>)</th><td>:</td><td><?=$siswa['no_kks']?></td></tr>
                            <tr><th>Penerima KPS / PKH</th><td>:</td><td><?=$siswa['penerima_pkh']?></td></tr>
                            <tr><th>Nomor KPS / PKH</th><td>:</td><td><?=$siswa['no_pkh']?></td></tr>
                            <tr><th>Usulan Dari Sekolah (<em>layak PIP</em>)</th><td>:</td><td><?=$siswa['usulan_kip']?></td></tr>
                            <tr><th>Penerima KIP</th><td>:</td><td><?=$siswa['penerima_kip']?></td></tr>
                            <tr><th>Nomor KIP</th><td>:</td><td><?=$siswa['nomor_kip']?></td></tr>
                            <tr><th>Nama Tertera di KIP</th><td>:</td><td><?=$siswa['nama_di_kip']?></td></tr>
                            <tr><th>Alasan Layak PIP</th><td>:</td><td><?=$siswa['alasan_layak_kip']?></td></tr>

                            <tr><th colspan="3"><hr></th></tr>
                            
                            <tr><th>Nama Ayah</th><td>:</td><td><?=$siswa['nama_ayah_kandung']?></td></tr>
                            <tr><th>NIK Ayah</th><td>:</td><td><?=$siswa['nik_ayah']?></td></tr>
                            <tr><th>Tahun Lahir Ayah</th><td>:</td><td><?=$siswa['tahun_lahir_ayah']?></td></tr>
                            <tr><th>Pendidikan Ayah</th><td>:</td><td><?=$siswa['pendidikan_ayah']?></td></tr>
                            <tr><th>Pekerjaan Ayah</th><td>:</td><td><?=$siswa['pekerjaan_ayah']?></td></tr>
                            <tr><th>Penghasilan Perbulan</th><td>:</td><td><?=$siswa['penghasilan_bulanan_ayah']?></td></tr>
                            <tr><th></th></tr>
                            <tr><th>Nama Ibu</th><td>:</td><td><?=$siswa['nama_ibu_kandung']?></td></tr>
                            <tr><th>NIK Ibu</th><td>:</td><td><?=$siswa['nik_ibu']?></td></tr>
                            <tr><th>Tahun Lahir Ibu</th><td>:</td><td><?=$siswa['tahun_lahir_ibu']?></td></tr>
                            <tr><th>Pendidikan Ibu</th><td>:</td><td><?=$siswa['pendidikan_ibu']?></td></tr>
                            <tr><th>Pekerjaan Ibu</th><td>:</td><td><?=$siswa['pekerjaan_ibu']?></td></tr>
                            <tr><th>Penghasilan Perbulan</th><td>:</td><td><?=$siswa['penghasilan_bulanan_ibu']?></td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>