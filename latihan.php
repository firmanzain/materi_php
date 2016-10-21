<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan PHP</title>
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