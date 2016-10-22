<pre class="prettyprint linenums">
&lt;?php
	$buah = array("Apel","Jeruk","Nanas");
	$panjang = count($buah); //Mencari panjang array

	for ($i=0; $i<$panjang; $i++) { 
		echo "$buah[$i]";
	}
?&gt;</pre>