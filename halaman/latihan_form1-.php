<pre class="prettyprint linenums">
&lt;form class="form-horizontal" method="post" action=""&gt;
&lt;div class="form-group"&gt;
  &lt;label class="col-sm-2 control-label"&gt;Panjang&lt;/label&gt;
  &lt;div class="col-sm-4"&gt;
    &lt;input type="text" class="form-control" name="p"&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
  &lt;label class="col-sm-2 control-label"&gt;Lebar&lt;/label&gt;
  &lt;div class="col-sm-4"&gt;
    &lt;input type="text" class="form-control" name="l"&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
  &lt;div class="col-sm-offset-2 col-sm-6"&gt;
    &lt;button type="submit" class="btn btn-default"&gt;Hitung&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/form&gt;

&lt;?php

function hitungLuas($p,$l){
  $luas = $p * $l;
  return $luas;
}

if(isset($_POST['p'])){
  $hasil = hitungLuas($_POST['p'],$_POST['l']);
  echo "&lt;label class='col-sm-2 control-label'&gt;Luas Persegi Panjang : $hasil&lt;/label&gt;";
}
?&gt;</pre>