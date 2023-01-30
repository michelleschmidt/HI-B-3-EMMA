<!-- Include header content -->
<?php
    $pageTitle = 'Search';
    include("base.php");

	if (isset($_POST['search'])) {
		$qr = $_POST['qr'];
		echo $qr;
		$results = $db->query("SELECT * FROM qrpatients WHERE qr = '$qr'");
		$farbe = $results->fetchArray();
		
		if(empty($farbe['farbe'])){
			header("Location: index.php?qr=".$qr);
		}
		else{
			header("Location: output.php?qr=".$qr);
		}
		}

		
?>

<!-- Content -->
<div class="container">
	<form action="" method="POST" onsubmit="appendQRnumber();">
		<h1> Suche via QR Code Nummer  </h1>
		<input type="text" class="form-control" id="qr" name="qr" placeholder="QR Code Nummer" required>
		<input type="submit" class="btn btn-outline-secondary float-right" name="search" value="Search"><a href="output.php"></a>
	</form>
 
</div>

