<!DOCTYPE html>
<?php 
  error_reporting(0);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar PHP</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="code-prettify/src/run_prettify.js?skin=sons-of-obsidian"></script>
  </head>
  <body>

    <div class="container-fluid">
      <h1>Belajar PHP</h1>
      <hr>

      <h2>Menghitung Luas Persegi Panjang</h2>
      <div class="panel panel-primary">
        <div class="panel-body">
          <h4>Kode</h4>
          <?php include_once('halaman/latihan_form1-.php');?>
          <h4>Hasil</h4>
          <form class="form-horizontal" method="post" action="">
            <div class="form-group">
              <label class="col-sm-2 control-label">Panjang</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="p">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Lebar</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" name="l">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-6">
                <button type="submit" class="btn btn-default">Hitung</button>
              </div>
            </div>
          </form>

          <?php

            function hitungLuas($p,$l){
              $luas = $p * $l;
              return $luas;
            }

            if(isset($_POST['p'])){
              $hasil = hitungLuas($_POST['p'],$_POST['l']);
              echo "<label class='col-sm-2 control-label'>Luas Persegi Panjang : $hasil</label>";
            }
          ?>
        </div>
      </div>

    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      });
    </script>
  </body>
</html>