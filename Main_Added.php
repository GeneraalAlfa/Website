<! DOCTYPE html PUBLIC "-//WC//DTD HTML 4.01 Transistional//EN" "http://www.w3.org/TR/html4:loose.dtd">
<html>

	<head>

	

		<title>Test: Set Main Values & Set Values In Database</title>

		

		<link rel="stylesheet" href="Style.css">

		

	</head>

	

	<body>
		
		<?php
			
			if(isset($_POST['Submit']))
			{
				
				$data_missing = array();
				
				if(empty($_POST['Sensor_ID']))
				{
					$data_missing[] = 'Sensor ID';
				}
				else
				{
					$f_name = trim($_POST['Sensor_ID']);
				}
				
				if(empty($_POST['Value']))
				{
					$data_missing[] = 'Value';
				}
				else
				{
					$f_name = trim($_POST['Value']);
				}
				
				if(empty($data_missing))
				{
					require_once('../Main_Connect.php');
					
					$sql = "INSERT INTO Main (Sensor_ID, Value )
							VALUES (".$_POST['SensorID'].", ".$_POST['Value'].")";

					if (mysqli_query($conn, $sql))
					{
						echo "New record created successfully";
					}
					else
					{
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
				}
				else
				{
					echo 'You need to enter the following data<br />';
					foreach($data_missing as $missing)
					{
						echo "$missing<br />";
					}
				}

				$conn->close();
			}
			
		?>
		
		<form action="Main_Added.php" method="post">
		
			<h1>Geeft de value in:</h1>
			<br>
			<p>Sensor ID</p>
			<input type="text" name="SensorID" size="64" />
			<br>
			<p>Value</p>
			<input type="int" name="Value" />
			<br>
			<p>De ID en timestamp worden geautoincrement.</p>
			<br>
			<input type="submit" value="Submit" name="Submit" />

		</form>
		
	</body>
<html/>