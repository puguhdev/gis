
<section class="section">

    <div class="section-header">
         <a href="#addnew" data-toggle="modal" class="btn btn-sm btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kecamatan</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach ($kecamatan as $row): ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td><?=$row->nama_kecamatan;?></td>
                                        <td><?=$row->latitude;?></td>
                                        <td><?=$row->longitude;?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
     


<!-- Modal -->
<div class="modal fade" id="addnew" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kecamatan</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?=site_url('maps/kecamatan/created')?>">
                <div class="form-group">
                    <label>Nama Kecamatan</label>
                    <input type="text" class="form-control" name="nama_kecamatan" placeholder="Nama Kecamatan">
                </div>
                <div class="form-group">
                    <label>Latitude</label>
                    <input type="text" class="form-control" name="latitude" placeholder="Latitude">
                </div>
                <div class="form-group">
                    <label>Longitude</label>
                    <input type="text" class="form-control" name="longitude" placeholder="Longitude">
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
