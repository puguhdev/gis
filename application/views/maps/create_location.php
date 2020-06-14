<section class="section">
    <div class="section-header">
        <h1>Add Location</h1>
        <div class="section-header-button">
            <a href="<?=site_url('maps/locations')?>" class="btn btn-primary">Data Maps</a>
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
                    <div class="card-header bg-primary text-white"><i class="fas fa-map-marker-alt"></i>&nbsp; Add New Location</div>
                    <div class="card-body table-responsive">
                        
                        <form method="post" action="<?=site_url('maps/locations/created')?>">
                            <div class="form-group">
                                <label>Nama Lokasi</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" class="form-control" name="keterangan">
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" name="lat" id="lat">
                            </div>
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" class="form-control" name="lng" id="lng">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-check"></i> Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
     