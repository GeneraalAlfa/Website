<! DOCTYPE html>
<html>

	<head>

	

		<title>Test: Set Nummer</title>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

		<script type="text/javascript">
		</script>

	</head>

	

	<body>
		
		<div id="id01"></div>

		<script>
		var xmlhttp = new XMLHttpRequest();
		var url = "Main_Full_Table.php";

		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var myArr = JSON.parse(this.responseText);
				myFunction(myArr);
			}
		};
		xmlhttp.open("GET", url, true);
		xmlhttp.send();

		function myFunction(arr) {
			var out = "";
			var i;
			for(i = 0; i < arr.length; i++) {
				out += '<p>' + arr[i].display + '</p><br>';
			}
			document.getElementById("id01").innerHTML = out;
		}
		</script>

	</body>
<html/>