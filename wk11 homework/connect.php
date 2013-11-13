<?php
	
	mysql_connect('localhost', 'root', 'buff2904100');
	mysql_select_db('MYDATA');

	$sql = "SELECT * FROM counter LIMIT 1";
	$query = mysql_query($sql);

	$data = mysql_fetch_assoc($query);

	$id = $data['id'];
	$count = $data['count'] + 1;
	$sql = "UPDATE counter SET count = {$count} WHERE id = {$id} LIMIT 1";
	mysql_query($sql);

?>

<!DOCTYPE>

<html>
	
	<body>

		<p>Hits: <?php echo $count;	?></p>

	</body>



</html>