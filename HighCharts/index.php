<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstra
p.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous">
 <title>Bengawan Solo</title>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script src='code/highcharts.js'></script>

<script src='code/modules/exporting.js'></script>
<script src='code/modules/export-data.js'></script>
<script src='code/modules/accessibility.js'></script>


 </head>
 <body>
 <header>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container-fluid">
 <a class="navbar-brand" href="#">Bengawan Solo</a>
 <button class="navbar-toggler" type="button" data-bstoggle="collapse" data-bs-target="#navbarNavAltMarkup" ariacontrols="navbarNavAltMarkup" aria-expanded="false" arialabel="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse"
id="navbarNavAltMarkup">
 <div class="navbar-nav">

 <a class="nav-link" href="index.php"><b>Tinggi Muka Air</b></a>
 <a class="nav-link" href="ch.php">Curah Hujan</a>
 <a class="nav-link" href="kekeruhan.php">Kekeruhan</a>

 
 </div>
 </div>
 </div>
 </nav>
 </header>
 <main>
 <div class="container">
 <div class="row mt-3">
 <div class="card p-3">
   
 <center>





<h2>Tabel Tinggi Permukaan Air</h2>
<hr>
 
<div id='container'>
          <hr>
          <?php
          include 'config.php';
          $tma=($connect->query('select * from tma order by id_tma desc'));
          while ($item=$tma->fetch()){
            $data[]=array($item['waktu'],floatval($item['nilai']));

          }
          $json=json_encode($data);
          echo $json;
          

          ?>
<script type="text/javascript">
 Highcharts.chart('container', 
 
 {
  chart:{
   
   zoomType:'x'

 },

 title: {
 text: 'Tinggi Muka Air'
 },

 subtitle: {
 text: 'Latihan Highcharts'
 },
 yAxis: {
 title: {
 text: 'Nilai Ketinggian'
 }
 },
 xAxis: {
 type: 'category',
 accessibility: {
 rangeDescription: 'Waktu'
 }
 },
 tooltip: {
 pointFormat: '{point.y} Meter'
 },
 legend: {
 layout: 'vertical',
 align: 'right',
 verticalAlign: 'middle'
 },
 plotOptions: {
 series: {
 label: {
 connectorAllowed: false
 }
 }
 },
 series: [{
 name: 'Tinggi Muka Air',
 lineWidth: 2,
 data: <?= $json ?>
 }],
 responsive: {
 rules: [{
 condition: {
 maxWidth: 500
 },
 chartOptions: {
 legend: {
 layout: 'horizontal',
align: 'center',
 verticalAlign: 'bottom'
 }
 }
 }]
 }
 });
</script>
</div>













    </center>
    </div>
    </div>
    </main>


  


 <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.
bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
 </body>
</html>