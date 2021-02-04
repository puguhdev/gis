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


// membuat marker
<?php foreach($kecamatan as $row){ ?>
	L.Marker([<?= $row->latitude ?>,<?= $row->longitude ?>]);
	.bindPopup("<?=$row->nama_kecamatan?>").openPopup();
	.addTo(peta);
<?php } ?>