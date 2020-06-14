
<section class="section">
        <div class="section-header">
            <h1>Locations</h1>
            <div class="section-header-button">
                <a href="<?=site_url('maps/locations/created')?>" class="btn btn-primary">Add New</a>
                <a href="<?=site_url('maps/locations/view_maps')?>" class="btn btn-primary">View Location</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

    <div class="section-body">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lokasi</th>
                                    <th>Keterangan</th>
                                    <th>Alamat</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($lokasi as $row): ?>
                                <tr>
                                    <td><?=$no++;?></td>
                                    <td><?=$row['nama_lokasi']?></td>
                                    <td><?=$row['keterangan']?></td>
                                    <td><?=$row['alamat']?></td>
                                    <td><?=$row['lat']?></td>
                                    <td><?=$row['long']?></td>
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

