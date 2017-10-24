<html>
<head>
	<title> Hello World </title>
<head>

<body>

<?php
echo "Hello, World start <br>";
?>

<?php
# phpinfo();
?>

<?php
echo "Hello, World just begin<br>";
?>

<?php
$string_1 = "This is a string in double quotes";
$string_2 = 'This is a somewhat longer, singly quoted string';
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters
?>

<?php
	$variable = "name";
	$literally = 'My $variable will not print!';
	print($literally);
	print "<br>";

	$literally = "My $variable will print!";
	print($literally);
	print "<br>";
?>

<?php
	define("MINSIZE", 50);
	echo MINSIZE;
	print "<br>";
	echo constant("MINSIZE");
?>

<body>

</html>

