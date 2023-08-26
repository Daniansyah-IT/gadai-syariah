
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_5GYXBXFcBakmqjN-nLrDhARSEr1J6Bc"></script>
    
</head>

<body>
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="center-text text-center">Branch Locations</h2>
            <div id="map" style="width: 100%; height: 555px;">
            <script>
                function initMap() {
                const mapCenter = { lat: -0.4281436, lng: 117.021297 }; // Pusat peta
                const map = new google.maps.Map(document.getElementById('map'), {
                    center: mapCenter,
                    zoom: 8,
                });
                

                const places = [
                    { lat: -0.5104358038137312, lng: 117.0234565104356, name: 'Gadai Syariah KC.Loa Kulu' },
                    { lat: -0.4116327658012494, lng: 116.9795589249593, name: 'Gadai Syariah Kc. Kartini' },
                    { lat: -0.3786554989803559, lng: 117.1130117404769, name: 'Gadai Syariah Kc. Tenggarong Seberang L2' },
                    { lat: -0.5913212331742328, lng: 117.06481551927075, name: 'Gadai Syariah Kc. Loa Duri' },
                    { lat: -0.5580990091045469, lng: 117.08619242480214, name: 'Gadai Syariah Kc. Loa Janan' },
                    { lat: -0.5112966017567384, lng: 117.13973066746728, name: 'Gadai Syariah Kc. Samarinda Seberang' },
                    { lat: -0.5649289361485095, lng: 117.17247039561303, name: 'Gadai Syariah Kc. Palaran' },
                    { lat: -0.5108132028817459, lng: 117.1653899539724, name: 'Gadai Syariah Kc. Sambutan' },
                    { lat: -0.45549349420767754, lng: 117.16736036388774, name: 'Gadai Syariah Kc. PM. Noor' },
                    { lat: -0.5090863607828418, lng: 117.09325635399762, name: 'Gadai Syariah Kc. Loa Bakung' },
                    { lat: -0.49266286008074905, lng: 117.15570874047746, name: 'Gadai Syariah Kc. A. Dahlan 1' },
                    { lat: -0.49390411512240245, lng: 117.15505685212705, name: 'Gadai Syariah Kc. A. Dahlan 2' },
                    { lat: -0.5706671050430537, lng: 117.26184882513758, name: 'Gadai Syariah Kc. Anggana' },
                    { lat: 0.5320678, lng: 117.5268741, name: 'Gadai Syariah Kc. Sangata' },
                    { lat: 0.11717714734478117, lng: 117.4755055539694, name: 'Gadai Syariah Kc. Bontang' },
                    { lat: -1.2629969565864627, lng: 116.84676500454677, name: 'Gadai Syariah Kc. Balikpapan 1' },
                    { lat: -1.2508977418483198, lng: 116.90367074560785, name: 'Gadai Syariah Kc. Balikpapan 2' },
                    // Tambahkan lokasi lain sesuai kebutuhan cabang
                ];

                places.forEach(place => {
                    const marker = new google.maps.Marker({
                    position: { lat: place.lat, lng: place.lng },
                    map: map,
                    title: place.name,
                    image: place.image,
                    });
                    // Tambahkan event listener untuk mengarahkan ke Google Maps saat marker di-klik
                    marker.addListener('click', () => {
                    window.open(`https://www.google.com/maps/search/?api=1&query=${place.lat},${place.lng}`, '_blank');
                });
                });
                }
            </script>
            </div>
            </div>
        </div>
    </div>
</section>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_5GYXBXFcBakmqjN-nLrDhARSEr1J6Bc&callback=initMap"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
