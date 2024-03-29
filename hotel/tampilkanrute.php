<?php
require '../connect.php';
$id_angkot=$_GET['id_angkot'];

$querysearch="SELECT St_AsGeoJSON(a.geom) AS geom , a.id, a.track, a.destination, a.cost, a.route_color, b.color,
					ST_X(ST_Centroid(a.geom)) AS lng, ST_Y(ST_CENTROID(a.geom)) AS lat
					FROM angkot AS a
					LEFT JOIN angkot_color AS b ON a.id = b.id
					WHERE a.id ='$id_angkot'";

$result=mysqli_query($conn, $querysearch);
$hasil = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);
while ($isinya = mysqli_fetch_assoc($result)) {
	$features = array(
		'type' => 'Feature',
		'geometry' => json_decode($isinya['geom']),
		'properties' => array(
			'id' => $isinya['id'],
			'lat' => $isinya['lat'],
			'lng' => $isinya['lng'],
			'track' => $isinya['track'],
			'destination' => $isinya['destination'],
			'route_color' => $isinya['route_color'])
		);
	array_push($hasil['features'], $features);
}
	echo json_encode($hasil);
?>
