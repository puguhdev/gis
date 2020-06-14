<style>
	#map-canvas { width: 100%; height: 500px; padding: 0; }
</style>


<section class="section">
    <div class="section-header">
        <h1>Locations</h1>
        <div class="section-header-button">
            <a href="<?=site_url('maps/locations')?>" class="btn btn-primary">Data Maps</a>
            <a href="<?=site_url('maps/locations/created')?>" class="btn btn-primary">Add Maps</a>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">

                        <div class="mb-4">
                            <form method="post" name="form_lokasi" data-ajax="true">
                                <div class="row">
                                    <div class="col-md-10">
                                        <select name="loka" id="loka" class="form-control" data-ajax="true">
                                            <option>Pilih Nama Lokasi</option>
                                                <?php foreach($q as $row){
                                                    echo '<option value="'.$row->lat.','.$row->long.','.$row->nama_lokasi.','.$row->alamat.','.$row->keterangan.'">'.$row->nama_lokasi.'</option>';
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary" onclick="lokasi()" data-ajax="true">Tampilkan Lokasi</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id="map-canvas"></div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?callback=initMap">
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOZkwjLkd58PG_5hzUOFVVC_FqbGDoNBc&callback=initMap"></script>
    
<script type="text/javascript">
    function Initialize() 
    {											
        var myLatlng = new google.maps.LatLng(2.422874, 97.92232);
        var mapOptions = {
            zoom: 30,
            center: myLatlng,
            scrollwheel: true
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        google.maps.event.addDomListener(window, 'load', Initialize);
    }

    function lokasi() {

        var lokasi = document.getElementById('loka').value;
        var koordinat = lokasi.split(',');
            var x = koordinat[0];
            var y = koordinat[1];
            var nama_lokasi=koordinat[2];
            var alamat=koordinat[3];
            var keterangan=koordinat[4];
        
        var myLatlng = new google.maps.LatLng(x,y);
        var mapOptions = {
            zoom: 15,
            scrollwheel: true,
            center: myLatlng
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var contentString = '<div style="color:black; font-weight: bold;" data-ajax="false">'+
        '<div id="" data-ajax="false">'+
        '<h3>'+nama_lokasi+'</h3>'+
        '</div>'+
        '<div data-ajax="false">'+
        '<p>Bujur :' +x+', Lintang : '+y+'<br/>'+
        'Alamat : '+alamat+'</p>'+
        '<p></p>'+
        '</div>'+
        '</div>';
    
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
    
        var marker = new google.maps.Marker({
            position: myLatlng,
            scrollwheel: false,
            map: map
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
        google.maps.event.addDomListener(window, 'load', lokasi);
    }
</script>