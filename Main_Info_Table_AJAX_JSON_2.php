<! DOCTYPE html>

<html>

	<head>

		<title>Test: Set Nummer</title>

		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

		<script type="text/javascript">

		</script>

	</head>

	<body>
		
		<!--<p id="test_1"></p><br>
		<p id="test_2"></p><br>
		<p id="test_3"></p><br>
		<p id="test_4"></p><br>-->
		
		<p>search: </p>
			<input type="text" id="txt1">
			<select id="txt2">
				<option value="ID">ID</option>
				<option value="Sensor_ID">Sensor_ID</option>
				<option value="Timestamp">Timestamp</option>
				<option value="Value">Value</option>
			</select>
		<button onclick="showHint()">Submit</button>
		
		<div id="id01"></div>

		<script>

		function showHint()
		{
			var str = document.getElementById("txt1").value
			var dbParam = document.getElementById("txt2").value
			//document.getElementById("test_1").innerHTML = document.getElementById("txt1").value;
			//document.getElementById("test_2").innerHTML = document.getElementById("txt2").value;
			//document.getElementById("test_3").innerHTML = str
			//document.getElementById("test_4").innerHTML = dbParam;
			
			var xmlhttp 

			if (str.length == 0)
			{ 
				document.getElementById("id01").innerHTML = "";
				return;
			}
			else
			{
				xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						var myArr = JSON.parse(this.responseText);
						myFunction(myArr);
					}
				};
			}
			xmlhttp.open("GET", "Todo_Step_2_Json_Tabel.php?q="+str+"&x="+dbParam, true);
			xmlhttp.send();
		}



		function myFunction(arr)
		{
			var out = "";
			var i;
			for(i = 0; i < arr.length; i++)
			{
				out += '<p>' + arr[i].ID + arr[i].Sensor_ID + arr[i].Timestamp + arr[i].Value + '</p><br>';
			}
			document.getElementById("id01").innerHTML = out;
		}

		</script>
		
	</body>
