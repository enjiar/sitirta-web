<?php

$koneksi = mysqli_connect('localhost','root','','sitirta');

$result = mysqli_query($koneksi,'SELECT * FROM tb_data ORDER BY id DESC');

$sql = mysqli_fetch_assoc($result);

$nilai = $sql['datasensor'];

if($sql == "") $nilai = 0;

echo $nilai;


?>