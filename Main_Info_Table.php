<! DOCTYPE html PUBLIC "-//WC//DTD HTML 4.01 Transistional//EN" "http://www.w3.org/TR/html4:loose.dtd">
<html>

	<head>

	

		<title>Test: Get Values From Main</title>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

		<link rel="stylesheet" href="Style.css">

		<script type="text/javascript">
			window.onload = function() {
			document.getElementById('oneButton').onclick = Del_ID;
			document.getElementById('twoButton').onclick = Del_Name;
			document.getElementById('threeButton').onclick = Del_Number;
			document.getElementById('fourButton').onclick = Del_Bool;
			document.getElementById('fiveButton').onclick = Del_Reg_Date;
			document.getElementById('sixButton').onclick = Show_ID;
			document.getElementById('sevenButton').onclick = Show_Name;
			document.getElementById('eightButton').onclick = Show_Number;
			document.getElementById('nineButton').onclick = Show_Bool;
			document.getElementById('tenButton').onclick = Show_Reg_Date;
			};
			
			function Del_ID()
			{
				$("td.first").fadeOut();
			}
			function Del_Name()
			{
				$("td.second").fadeOut();
			}
			function Del_Number()
			{
				$("td.therd").fadeOut();
			}
			function Del_Bool()
			{
				$("td.fourght").fadeOut();
			}
			function Del_Reg_Date()
			{
				$("td.fifht").fadeOut();
			}
			
			function Show_ID()
			{
				$("td.first").show();
			}
			function Show_Name()
			{
				$("td.second").show();
			}
			function Show_Number()
			{
				$("td.therd").show();
			}
			function Show_Bool()
			{
				$("td.fourght").show();
			}
			function Show_Reg_Date()
			{
				$("td.fifht").show();
			}
			
		</script>

	</head>

	

	<body>
		
		<form>
			<button type="button" id="oneButton">ID Del</button>
			<button type="button" id="twoButton">Name Del</button>
			<button type="button" id="threeButton">Number Del</button>
			<button type="button" id="fourButton">Bool Del</button>
			<button type="button" id="fiveButton">Reg_Date Del</button>
			<button type="button" id="sixButton">ID Show</button>
			<button type="button" id="sevenButton">Name Show</button>
			<button type="button" id="eightButton">Number Show</button>
			<button type="button" id="nineButton">Bool Show</button>
			<button type="button" id="tenButton">Reg_Date Show</button>
		</form>
		</br>
		
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

				echo '<table align="left" cellspacing="5" cellpadding="8">
						<tr><td class="first" align="left"><b>ID</b></td>

						<td class="second" align="left"><b>Sensor ID</b></td>

						<td class="therd" align="left"><b>Timestamp</b></td>

						<td class="fourght" align="left"><b>Value</b></td>

						<td class="fifht" align="left"><b>Eenheid</b></td></tr>';

				if (mysqli_num_rows($result) > 0)
				{
					// output data of each row
					while($row = mysqli_fetch_assoc($result))
					{
						echo '<tr>
						
						<td class="first" align="left">' . $row['Main.ID'] . '</td>
						
						<td class="second" align="left">' . $row['Main.Sensor_ID'] . '</td>
						
						<td class="therd" align="left">' . $row['Main.Timestamp'] . '</td>
						
						<td class="fourght" align="left">' . $row['Main.Value'] . '</td>
						
						<td class="fifht" align="left">' . $row['Eenheid.Eenheid'] . '</td>';
						
						echo '</tr>';
					}
				}
				else
				{
					echo "0 results";
				}
			}

			mysqli_close($conn);
			
		?>
	</body>
<html/>