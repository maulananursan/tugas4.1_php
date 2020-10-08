<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	$h_beli= 8000;
	$t_keuntungan= 7500;
	$untung=300;

	$selisih=($h_beli-$t_keuntungan);
	$beli_k=$selisih/$untung;
	

	?>
	<p>Harga Beli = Rp. 8000</p>
	<p>Harga Jual = Rp. 7500</p>
	<p>Keuntungan = Rp. 300</p>
	<p>Berapa Jumlah kambing yang dibeli = ?</p>
	<p>Jawaban : <?php echo round($beli_k); ?> ekor</p>

</body>
</html>