<?php 
$A=2;
$B=7;
$C=1;
$D=$B*$B-4*$A*$C;
echo $A."x^2+".$B."x+".$C."=0<br>";
if ($D>0) {
$x1= (-$B -sqrt($D))/(2*$A);
$x2= (-$B +sqrt($D))/(2*$A);
echo "x1=".$x1."<br>";
echo "x2=".$x2."<br>";
} else if ($D==0) { 
$x= -$B/(2*$A);
echo "x=".$x."<br>";
} else
{
echo "Решений нет";
}
?>