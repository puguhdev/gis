
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

<section class="section">


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
                                    <th>Nama Jurusan</th>
                                    <th>Title Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($jurusan as $row): ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><?=$row['nama_jurusan'];?></td>
                                        <td><?=$row['title_jurusan'];?></td>
                                        <td width="20%" class="text-center">
                                            <a href="#ubah<?=$row['id_jurusan']?>" data-toggle="modal" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-pencil-alt"></i> Ubah</a>
                                            <a href="<?=site_url('master/jurusan/deleted/'.$row['id_jurusan'])?>" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-times"></i> Hapus</a>
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


<!-- Modal -->
<div class="modal fade" id="addnew" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Jurusan</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('master/jurusan/created')?>">
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan" placeholder="contoh: Rekayasa Perangkat Lunak">
                </div>
                <div class="form-group">
                    <label>Title Jurusan</label>
                    <input type="text" class="form-control" name="title_jurusan" placeholder="contoh: RPL">
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


<!-- Update Data Jurusan -->
<?php $no=1; foreach($jurusan as $row): ?>
<div class="modal fade" id="ubah<?=$row['id_jurusan']?>" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Perbarui Jurusan</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('master/jurusan/updated')?>">
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="hidden" class="form-control" name="id_jurusan" value="<?=$row['id_jurusan']?>">
                    <input type="text" class="form-control" name="nama_jurusan" value="<?=$row['nama_jurusan']?>">
                </div>
                <div class="form-group">
                    <label>Title Jurusan</label>
                    <input type="text" class="form-control" name="title_jurusan"  value="<?=$row['title_jurusan']?>">
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