<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>蔡岳倫簡介</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>

	<script>
		function change1() {
  			document.getElementById("pic").src = "fireflyguruguru.gif";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "fireflyguruguru.gif";
  			document.getElementById("h2text").innerText = "Yueh-Lun,Tasi";
		}
	</script>

</head>
<body>
	<table width="70%">
		<tr>
			<td>
				<img src="fireflyguruguru.gif" width="110%"id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>

			<td>
				<h1>蔡岳倫</h1>
				<h2 id="h2text">Yueh-Lun,Tasi</h2>
			</td>
		</tr>
	</table>

	<table width="70%" border="1">
		<tr>
			<td>
				Github:<a href="https://github.com/alleneric1106">eric88116@gmail.com</a><br>
				Email:<a href="eric88116@gmail.com">eric88116@gmail.com</a><br>
			</td>

			<td>
				大象席地而坐電影配樂<br>
				<audio controls>
					<source src="elephant.mp3" type="audio/mP3">
				</audio><br>
			</td>

			<td>
				春日影<br>
				<iframe src="https://www.youtube.com/embed/NJ1tne9u8YM" allowfullscreen></iframe>
			</td>
		</tr>
	</table>		
<?php echo date("Y-m-d") ?></body>
</html>