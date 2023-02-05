<?php
    $pageTitle = 'Suche';
    include("templates/base.php");
if (isset($_POST['search'])) {
	$qr = $_POST['qr'];
	$result = $db->query("SELECT farbe FROM qrpatients WHERE qr = '$qr'");
	$farbe = $result->fetchArray();
	if ($farbe === false) {
		echo "QR Code doesn't exist.";
	} else {
		if (empty($farbe['farbe'])) {
			header("Location: input.php?qr=" . $qr);
		} else {
			header("Location: output.php?qr=" . $qr);
		}
	}
}
?>


<!-- Content -->
<div class="container">
	<form action="" method="POST">
		<h1> Suche via QR Code Nummer  </h1>
		<input type="text" class="form-control" id="qr" name="qr" placeholder="QR Code Nummer" required>
		<input type="submit" class="btn btn-outline-secondary float-right" name="search" value="Search"><a href="output.php"></a>
	</form>
</div>