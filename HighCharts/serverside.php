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
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">


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
<a class="nav-link" href="serverside.php"><b>Server Side</b></a>
 <a class="nav-link" href="index.php">Client Side</a>
 
 
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





<h2>Tabel Tinggi Permukaan Air - Server Side</h2>
<hr>
 <table  id='tabel-data' >
            
          
          <thead>
            <tr>
                <th>NO</th>
                <th>Nilai</th>
                <th>Waktu</th>
                
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                
                
            </tr>
        </tfoot>
    </table>
 </center>
 </div>
 </div>
 </main>


<script>
	$(document).ready(function() {
    $('#tabel-data').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "data.php"
        
        
    } );
} );
</script>
 <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.
bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
 </body>
</html>