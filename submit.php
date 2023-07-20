<?php
$setdate = "Tanggal: ";
    $date = date('d/m/Y');
$setnama = "Nama: ";
    $nama = $_POST['nama'];
$setkomentar = "Komentar: ";
	$komentar = $_POST['komentar'];
$file = fopen("komentar.txt", "a");
fwrite($file, $setnama);
fwrite($file, $nama . "\n");
fwrite($file, $setdate);
fwrite($file, $date . "\n");
fwrite($file, $setkomentar);
fwrite($file, $komentar . "\n\n");
fclose($file);
header('Location: http://kacung.diimz.site:2020/');
?>
