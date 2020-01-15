<?php
date_default_timezone_set('Europe/Tallinn');
$fname='Nikol';
$sname='Brals';
$course='SKTVRp19';
?>
<html>
<head>
	<meta charset="utf-8">
<title>
	My First PHP
</title>
</head>
<body>
<h1>first PHP</h1>
<p>
<?php
echo 'Name - '.$fname. ' Secondname - '.$sname. ' course - '.$course. '<br>';
echo date('d.m.Y G:i:s' ,time());
?>
</p>
<?php
function hello($fname=' dear', $sname='guest'){
	return "Hello $fname $sname";
}
echo hello();
?>
</body>
</html>