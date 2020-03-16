<?php 
$n1 = $_GET['numero1'];
$n2 = $_GET['numero2'];

somar ($n1,$n2);
subtrair ($n1,$n2);
multiplicar ($n1,$n2);
divisao ($n1,$n2);
function somar($num1, $num2 )
{

	echo '<br>';
	$resultado=$num1+$num2;
	echo 'total:'.$resultado;

}

function subtrair($num1,$num2)
{
	echo '<br>';
	$resultado=$num1-$num2;
	echo 'total:'.$resultado;
}
function multiplicar ($num1,$num2){

	echo '<br>';
	$resultado=$num1*$num2;
	echo 'total:'.$resultado;

}


function divisao ($num1,$num2){

if ($num2!=0){

	echo '<br>';
	$resultado=$num1/$num2;
	echo 'total:'.$resultado;
}
else
{
	echo 	"não é possivel dividir por 0!!";
} 
}
 



 ?>
