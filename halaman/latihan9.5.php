<a href="latihan.php?subject=PHP&place=ITATS">Test $_GET</a>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		if ($_GET['subject']!=NULL) {
			echo "<br>Belajar ".$_GET['subject']." di ".$_GET['place'];	
		}
	}
?>