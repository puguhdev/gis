<!-- Notifikasi -->
<?php $this->load->view($alert); ?>

<!-- Content -->
<div class="section">

    <div class="section-header">
        <a href="<?=site_url('siswa/siswa')?>" class="btn btn-sm btn-primary mr-2"><i class="fas fa-fw fa-user-friends"></i> Data Siswa</a>
        <a href="<?=site_url('siswa/siswa')?>" data-toggle="modal" class="btn btn-sm btn-danger"><i class="fas fa-file-pdf"></i> Unduh Data Siswa</a>
    </div>

    <div class="section-body">
        <div class="card card-primary">
            <div class="card-body">
                
                <form method="post" action="">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" value="<?=$siswa['nama_lengkap']?>">
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tmp_lahir" value="<?=$siswa['tmp_lahir']?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" required>
                                    <?php if($siswa['jenis_kelamin'] == 'L'): ?>
                                        <option value="<?=$siswa['jenis_kelamin']?>"><?=$siswa['jenis_kelamin']?></option>
                                        <option value="P">P</option>
                                    <?php elseif($siswa['jenis_kelamin'] == 'P'): ?>
                                        <option value="<?=$siswa['jenis_kelamin']?>"><?=$siswa['jenis_kelamin']?></option>
                                        <option value="L">L</option>
                                    <?php endif; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama" class="form-control" required>
                                    <option value="<?=$siswa['agama']?>"><?=$siswa['agama']?></option>
                                    <option value="">-----</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kewarganegaraan</label>
                                <select name="kewarganegaraan" class="form-control" required>
                                    <option value="<?=$siswa['kwarganegaraan']?>"><?=$siswa['kwarganegaraan']?></option>
                                    <option value="">-----</option>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                            </div>
                            
                            
                        </div>
                        <div class="col-md-6">
                        
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" class="form-control" name="nisn" value="<?=$siswa['nisn']?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="text" class="form-control" name="tgl_lahir" value="<?=$siswa['tgl_lahir']?>">
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" class="form-control" name="nik" value="<?=$siswa['nik']?>">
                            </div>
                            <div class="form-group">
                                <label>No. Registrasi Akta Lahir</label>
                                <input type="text" class="form-control" name="no_akta_lahir" value="<?=$siswa['regis_akta_lahir']?>">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>