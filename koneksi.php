<?php
$databaseHost = 'localhost';
$databaseName = 'sitirta';
$databaseUsername = 'root';
$databasePassword = '';

$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName,);
function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}
?>