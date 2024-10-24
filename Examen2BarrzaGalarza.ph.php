<?php
/* 
CBTIS89
Proframa que almacena los precios de 5 articulos e un arreglo,posteriormente por medio de un ciclo calcula el IVA de cada precio y lo guardaen otro arreglo y una vez alamecenada la suma de cada precio y su IVA en otro arreglo
Barraza Galarza Gabriel Abisahyd 
Programacion Matunito 3ºA 
*/
 
$ArrayPrecios = array(350,100,50,95,785);
$ArrayIVA = array();
$ArraySubtotal = array();
$ArrayDescuento = array();
$ArrayTotal = array();

for ($i=0; $i<5; $i++){
	$ArrayIVA[$i] = $ArrayPrecios[$i] *0.16;
	$ArraySubtotal[$i] = $ArrayPrecios[$i]* $ArrayIVA[$i];
	$ArrayDescuento[$i] = $ArraySubtotal[$i] *0.16;
	$ArrayTotal[$i] =  $ArraySubtotal[$i] - $ArrayDescuento[$i];
	}
	echo "Array Preio <br>";
	for ($i=0; $i<5; $i++){  
	echo $ArrayPrecios[$i];
	echo "<br>";  
}
    echo "Array IVA <br>";
    for ($i=0; $i<5; $i++){ 
	echo $ArrayIVA[$i];
	echo "<br>";  
}
    echo "Array Subtotal <br>";
    for ($i=0; $i<5; $i++){
    echo $ArraySubtotal[$i];
    echo "<br>"; 
    }
    echo "Array Descuento <br>";
    for ($i=0; $i<5; $i++){
    echo $ArrayDescuento[$i];
    echo "<br>"; 
}
    echo "Array Subtotal <br>";
    for ($i=0; $i<5; $i++){
    echo $ArraySubtotal[$i];
    echo "<br>";
} 
    echo "Array Subtotal <br>";
    for ($i=0; $i<5; $i++){
    echo $ArrayTotal[$i] ;
    echo "<br>";
 }

?>