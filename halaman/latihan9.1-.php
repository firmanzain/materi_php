<pre class="prettyprint linenums">
&lt;?php
	$x = 75;
	$y = 25;
	 
	function nilai() {
	    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	 
	nilai();
	echo $z; 
?&gt;</pre>