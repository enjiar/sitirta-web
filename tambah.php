<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nilai=input($_POST["datasensor"]);
        date_default_timezone_set('Asia/Jakarta');
        $time = date('d-m-Y H:i:s'); 


        //Query input menginput data kedalam tabel anggota
        $query="insert into tb_data (datasensor,waktu) values
		('$nilai','$time')";


       

        //Mengeksekusi/menjalankan query diatas
        $result = mysqli_query($koneksi,$query);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($result) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>datasensor:</label>
            <input type="text" name="datasensor" class="form-control" placeholder="Masukan datasensor" required />
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>