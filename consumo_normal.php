<?php
ini_set('max_execution_time', 0);
set_time_limit(0);
$url = "http://desercion.uts.edu.co/docentes/funciones/buscar_id_academusoft.php";
$cedula = $_GET['cedula'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "tipo=buscar_cedula&bus={$cedula}");
$result = curl_exec($ch);
echo json_encode(json_decode($result, true));
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

?>