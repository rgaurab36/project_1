<?php

if(isset($_POST["lessons"])){
	$var=$_POST["lessons"];
}
else $var=array("John","Arnold","Jeff","Aritra");

$var3=6;
$var2="<html><head></head>
<body><h1>Hello from Creative School</h1>
<form action='index.php' method='POST'>
<input type='text' name='name'>Your Name</input> <br />
<b>What lessons do you want to learn?</b><br>
<select name='lessons[]' size='4' multiple>
<option value='mysql'>My SQL</option>
<option value='web_dev'>Web Development</option>
<option value='oracle'>Oracle</option>
<option value='javascript'>JavaScript</option></select>
<input type='Submit' value='submit'>
</form></body></html>";
foreach($var as $index)
{
	echo $index;
    echo "<br>";	
}
//print_r($var);
echo $var2;


?>