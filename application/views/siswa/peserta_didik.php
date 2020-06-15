<!-- Notifikasi -->
<?php $this->load->view($alert); ?>


<div class="section">

    <div class="section-header">
        <a href="#addnew" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-sm" id="tableku">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>NISN</th>
                                    <th>Nama Lengkap</th>
                                    <th>JK</th>
                                    <th>Kelas / Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($siswa as $row): ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><?=$row['nisn'];?></td>
                                        <td><?=$row['nama_lengkap'];?></td>
                                        <td><?=$row['jenis_kelamin'];?></td>
                                        <td><?=$row['nama_kelas'];?>-<?=$row['title_jurusan'];?></td>
                                        <td width="25%" class="text-center">
                                            <a href="<?=site_url('siswa/siswa/view/'.$row['url_siswa'])?>" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-search"></i> Lihat</a>
                                            <a href="<?=site_url('siswa/siswa/updated/'.$row['url_siswa'])?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pencil-alt"></i> Ubah</a>
                                            <a href="<?=site_url('siswa/siswa/deleted/'.$row['id_siswa'])?>" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-times"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>



<!-- Modal Tambah -->
<div class="modal fade" id="addnew" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Peserta Didik</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('siswa/siswa/import_excel')?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Kelas / Jurusan</label>
                    <select name="id_kelas" class="form-control" required>
                        <?php foreach($kelas as $row): ?>
                            <option value="<?=$row['id_kelas']?>"><?=$row['nama_kelas']?> - <?=$row['title_jurusan']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih File Excel</label>
                    <input type="file" name="userfile" class="form-control" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
                    <button data-dismiss="modal" class="btn btn-danger"><i class="fas fa-times"></i> Tutup</button>
                </div>
            </form>
            </div>
        </div>
  </div>
</div>