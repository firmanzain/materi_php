<pre class="prettyprint linenums">
&lt;form class="form-inline" method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;
  &lt;div class="form-group"&gt;&lt;    
  &lt;label&gt;Nama&lt;/label&gt;
    &lt;input type="text" class="form-control" name="nama"&gt;
  &lt;/div&gt;
  &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
&lt;?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    // collect value of input field
	    $name = $_REQUEST['nama'];
	    if (empty($name)) {
	        echo "Nama kosong";
	    } else {
	        echo $name;
	    }
	}
?&gt;</pre>