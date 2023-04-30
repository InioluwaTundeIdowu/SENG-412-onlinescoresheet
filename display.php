<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Score Sheet</title>
	
	<style>
		body{
			font-family:Arial;
			text-align:Justify;
			
		}

		.topnav{
	        background-color:yellow;
    	    color:black;
        	display:flex;
        	justify-content:center;
        	align-items:center;
        	height:60px;
        	font-size:34px;
        	font-weight:bold;
    	}
    	.sidenav{
        	background-color:#333;
        	color:white;
        	height:100%;
        	position:fixed;
        	top:0px;
        	left:0px;
        	width:150px;
        	padding:20px 0;
        	display:flex;
        	flex-direction:column;
        	align-items:center;
    	}
    	.sidenav a{
        	display:block;
        	color:white;
        	padding:10px 20px;
        	margin-bottom:10px;
        	text-align:center;
        	text-decoration:none;
    	}
    	.sidenav a:hover{
        	background-color:white;
        	color:#333;
    	}
		.sheet{
			display:flex;
			margin-left:160px;
		}

		table{
			margin: 10px auto;
			padding:10px 10px;
			background-color:white;
		}

		th{
			text-align:center;
			font-size:34px;
			width:250px;
			border:1px black solid;
		}

		td{
			text-align:center;
			font-size:24px;
			width:250px;
			border:1px black solid;
		}

	</style>
</head>
<body>
	<div class="topnav">Online Score Sheet</div>
	<div class="sidenav">
		<a href="#">Homepage</a>
		<a href="index.php">ScoreEntry</a>
		<a href="#">ScoreView</a>
	</div>

<div class="sheet">
	<table>
		<!-- <center>
			<h1>ONLINE SCORE SHEET</h1>
		</center> -->
		<thead>
			<tr>
				<th>MATRIC NO</th>
				<th>FULLNAME</th>
				<th>SENG 406</th>
				<th>SENG 412</th>
				<th>SENG 404</th>
				<th>SENG 408</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td>1</td>
			</tr><tr>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td>1</td>
				<td>1</td>
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>