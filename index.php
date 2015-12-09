<?php 
  //http://programandolo.blogspot.com.ar/2013/08/php-y-curl-libcurl.html
 $ch = curl_init();  
 curl_setopt($ch, CURLOPT_URL, "localhost/test_php/rest.php");  
 //curl_setopt($ch, CURLOPT_HEADER, true);  //queremos las cabeceras de la respuesta
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  //el resultado lo almacenaremos en una cadena
 $data = curl_exec($ch);  
 curl_close($ch);  
 //var_dump($data);
 if(json_decode($data)){
 		echo "json sin problemas";

}    else
{
	echo "ERROR EN EL FORMATO JSON";
	echo $data;
	var_dump($data);
}
 ?>  
