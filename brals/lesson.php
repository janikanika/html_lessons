<?php
include ('config.php');
?>
<form method="get" action="">
Поиск<input type="text" name="search">
<input type="submit" value="поиск..."> 
</form>

<?php
if (!empty($_GET['search'])) {
	$search=$_GET['search'];
	$search= htmlspecialchars(trim($search));

	$query='select *from clients where name like "%'.$search.'%"';
	$output=mysqli_query($connection, $query);
    
    $results=mysqli_num_rows($output);
	echo 'Поиск по: '.$search.'<br>';
	echo 'Ответы: <br>';
	if($results == 0 ){
		echo "0 ответов найдено!";
	}
	else{
		echo 'Найдено - '.$results.' ответов'.'<br>';
	}

	while($line= mysqli_fetch_assoc($output)) {
		echo $line['name'].'  '.$line['email'].'  '.$line['phone'].'<br
		.>';
	}
	mysqli_free_result($output);
    mysqli_close($connection);
}

?>

