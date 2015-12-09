<?php

class RestTest {
	
	public function __construct($base_url)
	{
		  //http://programandolo.blogspot.com.ar/2013/08/php-y-curl-libcurl.html
		$this->ch = curl_init();  
		curl_setopt($this->ch, CURLOPT_URL, $base_url);  
 		//curl_setopt($ch, CURLOPT_HEADER, true);  //queremos las cabeceras de la respuesta

 		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);  //el resultado lo almacenaremos en una cadena
 		$this->data = curl_exec($this->ch);  
 		curl_close($this->ch);  
	}

	public function isJsonType($servicio, $method="GET" ,$json="")
	{
		if(json_decode($this->data)){
			echo "json sin problemas";

	}    else
	{
		echo "ERROR EN EL FORMATO JSON";
		echo $data;
		var_dump($this->data);
	}

	public function isFormatEqual($servicio, $method="GET" ,$json="") {

		//testea longitud / idem tipo de tipo de datos
		}
	}

	public function isResponseEqual($servicio, $method="GET", $json="") {
		//compara los json como string
	}

	public function isStatus200($servicio, $method="GET", $json="") {
		//devuelve el status de la respuesta
	}
	
}