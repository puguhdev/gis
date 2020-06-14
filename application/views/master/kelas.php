<!-- Notifikasi -->
<?php if($this->session->flashdata('notif_true')): ?>
    <div class="alert alert-success alert-dismissible fade show notifikasi" role="alert">
        <?=$this->session->flashdata('notif_true')?>
    </div>
<?php elseif($this->session->flashdata('notif_false')): ?>
    <div class="alert alert-danger alert-dismissible fade show notifikasi" role="alert">
        <?=$this->session->flashdata('notif_false')?>
    </div>
<?php endif; ?>

<!-- Section -->

<div class="section">
    <div class="section-header">
        <a href="#addnew" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($kelas as $row): ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><?=$row['nama_kelas'];?></td>
                                        <td><?=$row['nama_jurusan'];?></td>
                                        <td width="20%" class="text-center">
                                            <a href="#ubah<?=$row['id_kelas']?>" data-toggle="modal" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pencil-alt"></i> Ubah</a>
                                            <a href="<?=site_url('master/kelas/deleted/'.$row['id_kelas'])?>" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-times"></i> Hapus</a>
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


<!-- Add New Kelas -->
<div class="modal fade" id="addnew" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kelas</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('master/kelas/created')?>">
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="jurusan_id" class="form-control" required>
                        <option value="">Pilih Jurusan</option>
                        <?php foreach($jurusan as $row): ?>
                            <option value="<?=$row['id_jurusan']?>"><?=$row['nama_jurusan']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Kelas</label>
                    <input type="text" class="form-control" name="nama_kelas" placeholder="contoh: Kelas X">
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


<!-- Update Data Kelas -->
<?php $no=1; foreach($kelas as $row): ?>
<div class="modal fade" id="ubah<?=$row['id_kelas']?>" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Perbarui Kelas</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('master/kelas/updated')?>">
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="hidden" class="form-control" name="id_kelas" value="<?=$row['id_kelas']?>">
                    <select name="jurusan_id" class="form-control" required>
                        <option value="<?=$row['jurusan_id']?>"><?=$row['nama_jurusan']?></option>
                        <option value="">-----</option>
                        <?php foreach($jurusan as $rows): ?>
                            <option value="<?=$rows['id_jurusan']?>"><?=$rows['nama_jurusan']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Kelas</label>
                    <input type="text" class="form-control" name="nama_kelas" value="<?=$row['nama_kelas']?>" >
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
<?php endforeach; ?>