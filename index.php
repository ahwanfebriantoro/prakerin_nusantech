<html>
	<head>
		<title>Ahwan Febriantoro | Prakerin Nusantech</title>
	</head>
	
	<body>
	
		<?php
		if (isset($_POST['tambah'])){
		$f1 = $_POST['f1'];
		$f2 = $_POST['f2'];
		$f3 = $_POST['f3'];
		$htambah = $f1+$f2+$f3;
		}
		if (isset($_POST['kurang'])){
		$f1 = $_POST['f1'];
		$f2 = $_POST['f2'];
		$f3 = $_POST['f3'];
		$hkurang = $f1-$f2-$f3;
		}
		if (isset($_POST['kali'])){
		$f1 = $_POST['f1'];
		$f2 = $_POST['f2'];
		$f3 = $_POST['f3'];
		$hkali = $f1*$f2*$f3;
		}
		if (isset($_POST['bagi'])){
		$f1 = $_POST['f1'];
		$f2 = $_POST['f2'];
		$f3 = $_POST['f3'];
		$hbagi = $f1/$f2/$f3;
		}
		?>
		<form action="" method="POST">
			<input type="number" class="bil" name="f1" placeholder="angka pertama"><br><br>
			<input type="number" class="bil" name="f2" placeholder="angka kedua"><br><br>
			<input type="number" class="bil" name="f3" placeholder="angka ketiga"><br><br>
			
			<input type="submit" name="tambah" value="+">
			<input type="submit" name="kurang" value="-">
			<input type="submit" name="kali" value="x">
			<input type="submit" name="bagi" value="/">
		</form>
		-----------------------
			<br>
			
			<?php 
			if(isset($_POST['tambah'])){ 
			echo "Hasil : <input type='number' value= '$htambah' class='bil'>";
			}
			?>
			
			<?php 
			if(isset($_POST['kurang'])){ 
			echo "Hasil : <input type='number' value= '$hkurang' class='bil'>";
			}
			?>
			
			<?php 
			if(isset($_POST['kali'])){ 
			echo "Hasil : <input type='number' value= '$hkali' class='bil'>";
			}
			?>
			
			<?php 
			if(isset($_POST['bagi'])){ 
			echo "Hasil : <input type='number' value= '$hbagi' class='bil'>";
			}
			?>
	</body>
</html>


