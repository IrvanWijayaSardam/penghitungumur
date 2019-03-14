<?php
	$Tanggal = $_POST['tgl_lahir'];
	// Tanggal Lahir
	// $birthday = "2001-12-15";
	
	// Convert Ke Date Time
	$biday = new DateTime($Tanggal);
	$today = new DateTime();
	
	$diff = $today->diff($biday);
	
	// Display
	echo "Tanggal Lahir: ". date('d M Y', strtotime($Tanggal)) .'<br />';
	echo "Umur: ". $diff->y ." Tahun";
	echo "Tahun: ".$diff->y.'<br />';
	echo "Bulan: ".$diff->m.'<br />';
	echo "Hari: ".$diff->d.'<br />';
?>