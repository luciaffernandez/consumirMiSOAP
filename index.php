<?php
//Como  no vamos a especificar wsdl, debemos detallar el url donde vamos a consumir el servicio                 
   $url="http://localhost/servidorWebSOAP/index.php";
   $uri="localhost/servidorWebSOAP/";
 
//Creamos el cliente con el segundo parámetro. El primero null 
   $cliente = new SoapClient(null, ['location' => $url, 'uri' => $uri]);
 
   $suma = $cliente->sumar(5,4);
   echo "Valor de la suma ".$suma."<br/>";
   $resta = $cliente->restar(5,4);
   echo "Valor de la resta ".$resta;
?>