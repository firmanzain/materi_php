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

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
          <a href="#1" aria-controls="1" role="tab" data-toggle="tab">Pengenalan</a>
        </li>
        <li role="presentation">
          <a href="#2" aria-controls="2" role="tab" data-toggle="tab">Variabel</a>
        </li>
        <li role="presentation">
          <a href="#3" aria-controls="3" role="tab" data-toggle="tab">Konstanta</a>
        </li>
        <li role="presentation">
          <a href="#4" aria-controls="4" role="tab" data-toggle="tab">Operator</a>
        </li>
        <li role="presentation">
          <a href="#5" aria-controls="5" role="tab" data-toggle="tab">Kondisi</a>
        </li>
        <li role="presentation">
          <a href="#6" aria-controls="6" role="tab" data-toggle="tab">Perulangan</a>
        </li>
        <li role="presentation">
          <a href="#7" aria-controls="7" role="tab" data-toggle="tab">Functions</a>
        </li>
        <li role="presentation">
          <a href="#8" aria-controls="8" role="tab" data-toggle="tab">Arrays</a>
        </li>
        <li role="presentation">
          <a href="#9" aria-controls="8" role="tab" data-toggle="tab">Variabel Superglobal</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="1">
          <h2>Syntax</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan1-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan1.php');?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="2">
          <h2>Variabel</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan2.1-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan2.1.php');?>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan2.2-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan2.2.php');?>
            </div>
          </div>
          <h2>Variabel Global dan Lokal</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan2.3-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan2.3.php');?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="3">
          <h2>Konstanta dengan keyword const</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan3.1-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan3.1.php');?>
            </div>
          </div>
          <h2>Konstanta dengan fungsi define</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan3.2-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan3.2.php');?>
            </div>
          </div>
          <h2>Konstanta bersifat Global</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan3.3-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan3.3.php');?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="4">
          <h2>Operator PHP</h2>
          <ul>
            <li>Operator Arithmetic </li>
            <li>Operator Assignment </li>
            <li>Operator Comparison </li>
            <li>Operator Increment/Decrement </li>
            <li>Operator Logical </li>
            <li>Operator String </li>
          </ul>
          <h2>Operator Arithmetic</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan4.1-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan4.1.php');?>
            </div>
          </div>
          <h2>Operator Assignment</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan4.2-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan4.2.php');?>
            </div>
          </div>
          <h2>Operator Comparison</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan4.3-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan4.3.php');?>
            </div>
          </div>
          <h2>Operator Increment/Decrement</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan4.4-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan4.4.php');?>
            </div>
          </div>
          <h2>Operator Logical</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan4.5-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan4.5.php');?>
            </div>
          </div>
          <h2>Operator String</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan4.6-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan4.6.php');?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="5">
          <h2>If Else</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan5.1-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan5.1.php');?>
            </div>
          </div>
          <h2>Switch</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan5.2-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan5.2.php');?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="6">
          <h2>While</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan6.1-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan6.1.php');?>
            </div>
          </div>
          <h2>Do While</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan6.2-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan6.2.php');?>
            </div>
          </div>
          <h2>For</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan6.3-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan6.3.php');?>
            </div>
          </div>
          <h2>Foreach</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan6.4-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan6.4.php');?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="7">
          <h2>Function User Define</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan7.1-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan7.1.php');?>
            </div>
          </div>
          <h2>Function Argumen</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan7.2-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan7.2.php');?>
            </div>
          </div>
          <h2>Function Argumen Awal</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan7.3-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan7.3.php');?>
            </div>
          </div>
          <h2>Function Return Value</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan7.4-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan7.4.php');?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="8">
          <h2>Array</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan8.1-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan8.1.php');?>
            </div>
          </div>
          <h2>Menghitung Array</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan8.2-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan8.2.php');?>
            </div>
          </div>
          <h2>Perulangan Array</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan8.3-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan8.3.php');?>
            </div>
          </div>
          <h2>Asosiatif Array</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan8.4-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan8.4.php');?>
            </div>
          </div>
          <h2>Perulangan Asosiatif Array</h2>
          <div class="panel panel-primary">
            <div class="panel-body">
              <h4>Kode</h4>
              <?php include_once('halaman/latihan8.5-.php');?>
              <h4>Hasil</h4>
              <?php include_once('halaman/latihan8.5.php');?>
            </div>
          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="9">
          <h2>Variabel Global / Superglobal</h2>
          <ul>
            <li>$GLOBALS </li>
            <li>$_SERVER </li>
            <li>$_REQUEST </li>
            <li>$_POST </li>
            <li>$_GET </li>
            <li>Operator String </li>
          </ul>
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