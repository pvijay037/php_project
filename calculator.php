<html>
<head>
<title> calculator </title>
</head>
<body>
<h1><center> calculator using php</center></h1>
<form action="calculator.php" method="get">
number1:<input type="number" name="number1"></br>
number2:<input type="number" name="number2"></br>
<button input type="submit" name="add" >add</button>
<button input type="submit" name="sub">sub</button>
<button input type="submit" name="mul">mul</button>
<button input type="submit" name="div">div</button>

</body>
<?php
//addition
$number1=$_GET["number1"];
$number2=$_GET["number2"];
$add=$number1+$number2;
echo "<h1>$add</h1>";
//subtraction
$number1=$_GET["number1"];
$number2=$_GET["number2"];
$sub=$number1-$number2;
echo "$sub</br>";
//multiplication
$number1=$_GET["number1"];
$number2=$_GET["number2"];
$mul=$number1*$number2;
echo "$mul</br>";
//division
$number1=$_GET["number1"];
$number2=$_GET["number2"];
$div=$number1/$number2;
echo "$div</br>";

?>
</html>