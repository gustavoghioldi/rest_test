<?php 

include_once 'lib/RestTest.php';

$test = new RestTest("localhost/rest_test/lib/");

$test->start("GET", "rest.php", "descripcion del test");
$test->isStatus200();
$test->isJsonType();
$test->isFormatEqual(array("size"=>2, "keys"=>array("id", "name"), "valueTypes"=>array("id"=>"is_numeric" , "nombre"=>"is_string")));
$test->isResponseEqual('{"id":1, "name":"Gustavo Ghioldi"}');
$test->end();
 