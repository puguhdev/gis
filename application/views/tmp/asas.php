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
var marker = new L.Marker([2.387421,97.947868]);
marker.bindPopup("Kecamatan Gunung Meriah").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.43622,98.0336103]);
marker.bindPopup("Kecamatan Simpang Kanan").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.32088,98.1123713]);
marker.bindPopup("Kecamatan Danau Paris").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.520403,98.0310713]);
marker.bindPopup("Kecamatan Suro Makmur").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.533646,97.9315513]);
marker.bindPopup("Kecamatan Singkohor").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.461113,97.8534573]);
marker.bindPopup("Kecamatan Kota Baharu").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.273896,98.0082413]);
marker.bindPopup("Kecamatan Singkil Utara").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.295356,97.8061463]);
marker.bindPopup("Kecamatan Singkil").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.352397,97.7210163]);
marker.bindPopup("Kecamatan Kuala Baru").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.33771,97.4014043]);
marker.bindPopup("Kecamatan Pulau Banyak").openPopup();
marker.addTo(peta);

var marker = new L.Marker([2.154159,97.2704183]);
marker.bindPopup("Kecamatan Pulau Banyak Barat").openPopup();
marker.addTo(peta);


// Kecmatan Gunung Meriah
var polygon = L.polygon([
 	[2.361453,97.8553993],
 	[2.387926,97.8785053],
 	[2.387429,97.8799683],
 	[2.387309,97.8805403],
 	[2.386752,97.8821263],
 	[2.385831,97.8829013],
 	[2.3862,97.8842373],
 	[2.387172,97.8843853],
 	[2.387018,97.8867203],
 	[2.386705,97.8870773],
 	[2.386449,97.8887203],
 	[2.387055,97.8896243],
 	[2.387846,97.8902513],
 	[2.38784,97.8919343]
]).addTo(peta);
