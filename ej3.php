<?php
$fecha_actual = strtotime(date("d-m-Y"));  
$fecha_fin_verano = strtotime("23-09-2022");
$fecha_inicio_verano = strtotime("21-06-2022");

if($fecha_actual > $fecha_fin_verano && $fecha_actual < $fecha_inicio_verano){
    echo "Good winter!";
}else{
    echo "Good summer!";
}
?>
<?php include "header.php";?>