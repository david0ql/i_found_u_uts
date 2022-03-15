<?php
ini_set('max_execution_time', 0);
set_time_limit(0);
$url = "http://desercion.uts.edu.co/docentes/funciones/fcitaTutoria.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "periodo=2022-1&tipo=buscarTipo&cargo=docente");
echo $result = curl_exec($ch);

curl_close($ch);

?>