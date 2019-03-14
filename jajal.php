<!DOCTYPE html>
<html>
	<head>
		<title>Penghitung Umur</title>
		<link rel="stylesheet" type="text/css" href="css/boostrap.min.js">
	</head>
	<body>
		<div class="row">
			<div class="col">
				<form action="" method="POST";
					top: -50px; left: 50px;">.
					<input type="date" name="tgl_lahir">
					<input type="submit" value="Submit" name="input_lahir">
				</form>
				<?php
						if ($Tanggal == "")
						{
						
						} else {
							$Tanggal = $_POST['tgl_lahir'];
							$biday = new DateTime($Tanggal);
							$today = new DateTime();
							
							$diff = $today->diff($biday);
							echo "Tanggal Lahir: ". date('d M Y', strtotime($Tanggal)) .'<br />';
					}
				?>
			</div>
		</div>
	</body>
</html>