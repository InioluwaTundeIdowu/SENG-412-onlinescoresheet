<!DOCTYPE html>
<html>
<head>
	<title>Online Score Sheet</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.topnav {
			background-color: yellow;
			color: black;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 60px;
			font-size: 24px;
			font-weight: bold;
		}

		.sidenav {
			background-color: #333;
			color: white;
			height: 100%;
			position: fixed;
			top: 60px;
			left: 0;
			width: 150px;
			padding: 20px 0;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.sidenav a {
			display: block;
			color: white;
			padding: 10px 20px;
			margin-bottom: 10px;
			text-align: center;
			text-decoration: none;
		}

		.sidenav a:hover {
			background-color: white;
			color: #333;
		}

		.main {
			margin-top: 60px;
			margin-left: 150px;
			padding: 20px;
		}

		.main h2 {
			font-size: 24px;
			font-weight: bold;
			margin-bottom: 20px;
		}

		.form-table {
			border-collapse: collapse;
			margin-bottom: 20px;
		}

		.form-table td {
			padding: 10px;
			border: 1px solid #ccc;
		}

		.form-table input[type="text"] {
			padding: 5px;
			font-size: 16px;
			width: 100%;
			box-sizing: border-box;
		}

		.submit-btn {
			background-color: blue;
			color: white;
			padding: 10px 20px;
			font-size: 16px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
            text-align: center;
		}

		.submit-btn:hover {
			background-color: #0066cc;
		}
	</style>
</head>
<body>
	<div class="topnav">Online Score Sheet</div>

	<div class="sidenav">
		<a href="#">Homepage</a>
		<a href="#">Score Entry</a>
		<a href="#">Score View</a>
	</div>

	<form class="main" action="insert.php" method="POST">
		
		<table class="form-table">
            <tr>
				<td colspan="2"><h2>Details Entry</h2></td>
			</tr>
			<tr>
				<td>Matric Number</td>
				<td><input type="text" name="matric_number" id="matric_number"></td>
			</tr>
			<tr>
				<td>Fullname</td>
				<td><input type="text" name="fullname" id="fullname"></td>
			</tr>
			<tr>
				<td colspan="2"><h2>Score Entry</h2></td>
			</tr>
			<tr>
				<td>SENG406</td>
				<td><input type="text" name="seng406" id="seng406"></td>
			</tr>
			<tr>
				<td>SENG412</td>
				<td><input type="text" name="seng412" id="seng412"></td>
			</tr>
			<tr>
				<td>SENG404</td>
				<td><input type="text" name="seng404" id="seng404"></td>
            </tr>
            <tr>
				<td>SENG408</td>
				<td><input type="text" name="seng408" id="seng408"></td>
            </tr>
            <tr>
				<td colspan="2" class="submit-btn">
                    <button type="submit" >
                        Submit
                    </button>
                </td>
			</tr>
        </table>
    </form>
</body>


