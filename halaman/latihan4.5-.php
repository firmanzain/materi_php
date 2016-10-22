<pre class="prettyprint linenums">
&lt;?php
	$x = 10;
	$y = 20;

	//Bernilai benar jika $x dan $y benar
	if ($x==10 and $y==20) {
		echo "OK";
	}

	//Bernilai benar jika $x atau $y benar
	if ($x==10 or $y==30) {
		echo "OK";
	}

	//Bernilai benar jika $x atau $y benar, tetapi bukan keduanya
	if ($x==10 xor $y==30) {
		echo "OK";
	}

	//Bernilai benar jika $x dan $y benar
	if ($x==10 && $y==20) {
		echo "OK";
	}

	//Bernilai benar jika $x atau $y benar
	if ($x==10 || $y==20) {
		echo "OK";
	}

	//Bernilai benar jika $x salah
	if ($x != 20) {
		echo "OK";
	}
?&gt;</pre>