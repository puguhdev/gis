
<section class="section">

    <div class="section-header">
        <h1>Peta Digital</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="peta" id="peta" style="height: 500px;"></div>
            </div>
        </div>
    </div>

</section>
     
<script>
    var mapOptions = {
    center: [2.282405,97.789382],
    zoom: 10
}

var peta = new L.map('peta', mapOptions);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(peta);

var care = L.icon({
    iconUrl: '<?=site_url('assets/marker/care.png')?>',
    iconSize: [25,32],
});

var gov = L.icon({
    iconUrl: '<?=site_url('assets/marker/gov.png')?>',
    iconSize: [25,32],
});

var edu = L.icon({
    iconUrl: '<?=site_url('assets/marker/edu.png')?>',
    iconSize: [25,32],
});

var public = L.icon({
    iconUrl: '<?=site_url('assets/marker/public.png')?>',
    iconSize: [25,32],
});

<?php foreach($kecamatan as $row){ ?>
    var marker = new L.Marker([<?=$row->latitude ?>,<?=$row->longitude ?>],{icon:<?=$row->ico_type?>});
    marker.bindPopup("<b><?=$row->nama_kecamatan ?></b> <br> Latitude : <?=$row->latitude ?> <br>Longitude : <?=$row->longitude ?>").openPopup();
    marker.addTo(peta);
<?php } ?>

</script>

