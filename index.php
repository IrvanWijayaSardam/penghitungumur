.<!DOCTYPE html>
<html>
	<head>
		<title>Hitung Umur</title>
		<link rel="stylesheet" type="text/css" href="css/boostrap.min.js">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="../formulir_pkl_griyasoft/animate.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container mt-5 mr-4 ">
			<div class="row">
				<div class="col-md-4 offset-md-3" style="background-color:; border: 1px solid black;">
					<div class="panel panel-primary" style="margin-top:100px">
						
						<?php
							
							// Display
						?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<form action="" method="POST" style="position: relative;
							top: -50px;left: 50px;">.
							<input type="date" name="tgl_lahir">
							<input type="submit" value="Submit" name="input_lahir">
						</form>
				<?php 
				$Tanggal = $_POST['tgl_lahir'];
						// Tanggal Lahir
						// $birthday = "2001-12-15";
						
						// Convert Ke Date Time
							$biday = new DateTime($Tanggal);
							$today = new DateTime();
							
							$diff = $today->diff($biday);
							echo "Tanggal Lahir: ". date('d M Y', strtotime($Tanggal)) .'<br />';
							echo "Umur Anda Adalah : ". $diff->y ." Tahun".$diff->m." Bulan".$diff->d." Hari";
				 ?>
			</div>
		</div>
	</body>
</html>