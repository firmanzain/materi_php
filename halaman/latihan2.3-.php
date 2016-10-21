<pre class="prettyprint linenums">
&lt;?php
	//Variabel Global
	$x = 4;
	$y = 6;

	function myFunction1(){
		echo "Function 1 Nilai x = $x, y = $y";
	}

	function myFunction2(){
		//Variabel Lokal
		$x = 4;
		$y = 6;
		echo "Function 2 Nilai x = $x, y = $y";	
	}

	function myFunction3(){
		//Global Keyword
		global $x, $y;
		echo "Function 3 Nilai x = $x, y = $y";	
	}


	echo "Nilai x = $x, y = $y";
	myFunction1();
	myFunction2();
	myFunction3();
?&gt;</pre>