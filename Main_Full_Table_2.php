<?php

	require_once('../Todo_Step_2_Connect.php');
	$q = $_REQUEST["q"];
	$x = $_REQUEST["x"];

	$sql = "SELECT ID, Sensor_ID, Timestamp, Value, FROM Main where '$x' like '%$q%'";
	$result = mysqli_query($conn, $sql);
	$all = array();

	if (mysqli_num_rows($result) > 0)
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result))
		{
			$all[] = $row;
		}
		print( json_encode( $all ) );
	}
	else
	{
		echo "0 results";
	}

	mysqli_close($conn);
?>