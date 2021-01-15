<?php
    include("../connect.php");
    $id_hotel = $_GET['id'];

    $result=  mysqli_query($conn, "SELECT detail_hotel.id_hotel, detail_hotel.id_angkot, hotel.name, angkot.*, st_x(st_centroid(hotel.geom))
    as lng2, st_y(st_centroid(hotel.geom)) as lat2, detail_hotel.lat, detail_hotel.lng, detail_hotel.description
    FROM detail_hotel left join hotel on hotel.id = detail_hotel.id_hotel
    left join angkot on angkot.id = detail_hotel.id_angkot where detail_hotel.id_hotel='$id_hotel' ");

    while($baris = mysqli_fetch_array($result)){
        $id=$baris['id_angkot'];
        $name=$baris['name'];
        $destination=$baris['destination'];
        $lat=$baris['lat'];
        $lng=$baris['lng'];
        $lat2=$baris['lat2'];
        $lng2=$baris['lng2'];
        $color=$baris['color'];
        $cost=$baris['cost'];
        $description=$baris['description'];
        $dataarray[]=array('id'=>$id,'destination'=>$destination,'name'=>$name,'lat'=>$lat,'lng'=>$lng,'lat2'=>$lat2,'lng2'=>$lng2,'color'=>$color,'cost'=>$cost,'description'=>$description);
    }
    echo json_encode ($dataarray);
?>
