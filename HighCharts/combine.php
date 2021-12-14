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
<a class="nav-link" href="combine.php"><b>Combine</b></a>
 
 <a class="nav-link" href="ch.php">Curah Hujan</a>
 <a class="nav-link" href="index.php">Tinggi Muka Air</a>
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





<h2>Grafik Hidrologi</h2>
<hr>
 
<div id='container'>
          <hr>
          <?php
          include 'config.php';
          $kekeruhan=($connect->query('select * from kekeruhan'));
          while ($item=$kekeruhan->fetch()){
            $data[]=array($item['waktu'],floatval($item['nilai']));

          }
          $json=json_encode($data);
          echo $json;

          $ch=($connect->query('select * from ch'));
          while ($item=$ch->fetch()){
            $datach[]=array($item['waktu'],floatval($item['nilai']));

          }
          $json2=json_encode($datach);
          echo $json2;

          $tma=($connect->query('select * from tma order by id_tma desc'));
          while ($item=$tma->fetch()){
            $datatma[]=array($item['waktu'],floatval($item['nilai']));

          }
          $json3=json_encode($datatma);
          echo $json3;
          

          ?>
<script type="text/javascript">
 Highcharts.chart('container', 
 
 {
  chart:{
      

 },

 title: {
 text: 'Hidrologi Bengawan Solo'
 },

 subtitle: {
 text: 'Latihan Highcharts'
 },
 yAxis: [{
      min:40,
      max:60,
      title:'Nilai Kekeruhan dan Tinggi Muka Air'
      
    },{
      reversed: true,
      opposite:true,
      title:'Nilai Curah Hujan'
    }
  ],
 
 xAxis: {
 type: 'category',
 accessibility: {
 rangeDescription: 'Waktu'
 }
 },
 tooltip: {
 pointFormat: '{point.y} NTU',
 shared: true
 },
 legend: {
 layout: 'vertical',
 align: 'right',
 verticalAlign: 'middle'
 },

 plotOptions: {
  area: {
          fillColor: {
              
            linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
    stops: [
        [0, '#FF0000'],
        [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
    ]},

        



          marker: {
            radius: 2
          },
          lineWidth: 1,
          states: {
            hover: {
              lineWidth: 1
            }
          },
          threshold: null
        }
 },

series: [{
    type: 'area',
    name: 'kekeruhan',
    
    lineWidth: 2,
    data: <?= $json ?>
}, {
    type: 'column',
    name: 'Curah Hujan',
    yAxis:1,
    colors:['#00FF00'],
    lineWidth: 2,
    data: <?= $json2 ?>
    
}, {
    type: 'line',
    name: 'Tinggi Muka Air',
    
    lineWidth: 2,
    data: <?= $json3 ?>
    
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