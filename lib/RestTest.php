<?php

class RestTest {
	
	public function __construct($base_url)
	{
		  //http://programandolo.blogspot.com.ar/2013/08/php-y-curl-libcurl.html
	}

	public function execute($test_description, $method="GET", $end_point=""){
		$this->test_description = $test_description;
		$this->ch = curl_init();  
		curl_setopt($this->ch, CURLOPT_URL, $base_url);  
 		
 		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);  //el resultado lo almacenaremos en una cadena 
 	  	$this->data = curl_exec($this->ch);
	
	}

	public function isJsonType()
	{
		 
		if(json_decode($this->data)){
			echo "FORMATO JSON";

	}    else
	{
		echo "ERROR EN EL FORMATO JSON";
		echo $data;
		var_dump($this->data);
	}}

	public function isFormatEqual(array $format=array()) {
		//comparar size->longitus, keys-> llaves, types->tipos de valores
		return $this->data;
		
	}

	public function isResponseEqual() {
		//compara los json como string y muestra la diferencia valor por valor
	}

	public function isStatus200() {
		//devuelve el status de la respuesta
	}

	public function close()
	{
		curl_close($this->ch);
		echo $this->test_description." finalizado!";
	}
	
}