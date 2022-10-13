<?php
$dos = date('d')-2;
echo "<h3>Two days ago it was $dos</h3>";

$mes_anterior = date('M', strtotime('+1 motnh'));
echo "<h3>The next month is $mes_anterior</h3>";

	$total_mes = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));
	$transcurrido = date("d");
	$dias_finales = $total_mes - $transcurrido;
echo "<h3>There are $dias_finales left in next month.</h3>";

$mes_actual = date('m');
$faltan_meses = 12 - $mes_actual;
echo "<h3>There are $faltan_meses months left in the current year</h3>";
?>