<?php


$koneksi = mysqli_connect('localhost','root','','sitirta');


$data = $_GET['data'];
date_default_timezone_set('Asia/Jakarta');
$time = date('d-m-Y H:i:s'); 


//mengembalikan id menjadi 1
mysqli_query($koneksi,"ALTER TABLE tb_data AUTO_INCREMENT=1");

$simpan = mysqli_query($koneksi,"INSERT INTO tb_data (id, waktu, datasensor)
                                VALUES ('','$time','$data')");

if($simpan){
    echo "Berhasil Dikirim \n";
} else {
    echo "Gagal Dikirim";
}

?>