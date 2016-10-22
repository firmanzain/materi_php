<form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <label>Nama </label>
    <input type="text" class="form-control" name="nama">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    // collect value of input field
	    $name = $_POST['nama'];
	    if (empty($name)) {
	        echo "Nama kosong";
	    } else {
	        echo "Nama anda : ".$name;
	    }
	}
?>