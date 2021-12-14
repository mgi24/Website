
<?php
include('config.php');
$id=$_GET['id'];
$id2=$_GET['idclass'];
$run=($connect->query("delete from tma where id_tma = '$id'"));
if ($run){
    header("Location:index.php");
}
?>