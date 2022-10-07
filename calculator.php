<html>
<head>
<title> calculator </title>
</head>
<body>
<h1><center> calculator using php</center></h1>
<form action="calculator.php" method="get">
number1:<input type="number" name="number1"></br>
number2:<input type="number" name="number2"></br>
operator:<input type="op" name="operator"></br>
<input type="submit">

</body>
<?php
//addition
$number1=$_GET["number1"];
$number2=$_GET["number2"];
$operator=$_GET["operator"];
if($operator=="+")
{
echo $number1+$number2;
}
//subtraction
elseif($operator=="-")
{
echo $number1-$number2;
}
//multiplication
elseif($operator=="*")
{
echo $number1*$number2;
}
//division
elseif($operator=="/"){
echo $number1/$number2;
}
else{
echo"invalid operator";
}
?>
</html>