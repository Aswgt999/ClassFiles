<?php
if($_POST)
{
$name=$_POST['name'];
$basic=$_POST['basic'];
$desig=$_POST['desig'];
$CA=0;
$EA=0;
$HRA=($basic*25)/100;
$inc_tax=0;

if($desig=="manager"){
$CA=1000;
$EA=500;
}
elseif($desig=="supervisor"){
$CA=750;
$EA=200;
}
elseif($desig=="clerk"){
$CA=500;
$EA=100;
}
elseif($desig=="peon"){
$CA=250;
}

$gross=$basic+$HRA+$CA+$EA;

if($gross<=2500){
$inc_tax=0;
}
elseif($gross>2500 && $gross<=4000){
$inc_tax=(3/100)*$gross;
}
elseif($gross>4000 && $gross<=5000){
$inc_tax=(5/100)*$gross;
}
else{
$inc_tax=(8/100)*$gross;
}

$net=$gross-$inc_tax;

echo "<br><h1>Pay Slip</h1>";
echo "Name:".$name;
echo "<br><b>Designation:</b>".$desig;
echo "<br><b>Basic Pay:</b>".$basic;
echo "<br><b>Conveyance Allowance:</b>".$CA;
echo "<br><b>Extra Allowance:</b>".$EA;
echo "<br><b>HRA:</b>".$HRA;
echo "<br><b>Gross:</b>".$gross;
echo "<br><b>Income Tax:</b>".$inc_tax;
echo "<br><b>Net Salary:</b>".$net;
}
?>