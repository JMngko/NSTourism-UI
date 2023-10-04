<?php
include_once('admin/admin/koneksi.php');
$query = "SELECT wisata.id_daerah as id_wisata, lat as latitude, lng as longitude, nama_wisata as nama, nama_daerah as daerah, wisata.gambar as gambarx, alamat FROM wisata, daerah WHERE wisata.id_daerah = daerah.id_daerah ORDER BY id_wisata DESC LIMIT 50";
$result = mysqli_query($con,$query);
$array_data = array();
while($baris = mysqli_fetch_assoc($result))
{
  $array_data[]=$baris;
}


header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");
header('Content-type: application/json');
echo json_encode($array_data);

?>