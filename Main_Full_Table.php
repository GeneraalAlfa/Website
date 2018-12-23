<?php

	require_once('../Main_Connect.php');

	

			$sql = "SELECT Main.ID, Main.Sensor_ID, Main.Timestamp, Main.Value, Eenheid.Eenheid	FROM Main, Eenheid";

			$result = mysqli_query($conn, $sql);

			if($result == false)
			{
				echo "Fail to connect.";
			}
			else
			{
				if (mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						$all[] = $row;					}
				}
				else
				{
					echo "0 results";
				}
			}
	mysqli_close($conn);
	
?>