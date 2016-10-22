<pre class="prettyprint linenums">
&lt;?php
	$x = 100;
	$y = "100";

	echo "$x == $y : "; 
	var_dump($x == $y);		//Sama
	echo "$x === $y : "; 
	var_dump($x === $y);		//Identik
	echo "$x != $y : "; 
	var_dump($x != $y);		//Tidak sama
	echo "$x <> $y : "; 
	var_dump($x <> $y);		//Tidak sama
	echo "$x !== $y : "; 
	var_dump($x !== $y);		//Tidak identik
	echo "$x > $y : "; 
	var_dump($x > $y);		//Lebih dari
	echo "$x < $y : "; 
	var_dump($x < $y);		//Kurang dari
	echo "$x >= $y : "; 
	var_dump($x >= $y);		//Lebih dari sama dengan
	echo "$x <= $y : "; 
	var_dump($x <= $y);		//Kurang dari sama dengan
?&gt;</pre>