<pre class="prettyprint linenums">
&lt;a href="latihan.php?subject=PHP&place=ITATS"&gt;Test $_GET$lt;/a&gt;
&lt;?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		if ($_GET['subject']!=NULL) {
			echo "Belajar ".$_GET['subject']." di ".$_GET['place'];	
		}
	}
?&gt;</pre>