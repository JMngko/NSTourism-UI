<?php
include_once('admin/admin/koneksi.php');
$query = "SELECT id_kuliner as id_wisata, lat as latitude, lng as longitude, nama_kuliner as nama, nama_daerah as daerah, alamat_kuliner as alamat, deskripsi FROM kuliner, daerah WHERE kuliner.id_daerah = daerah.id_daerah AND kuliner.id_daerah = '$_GET[id]' ORDER BY id_kuliner DESC LIMIT 50";
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