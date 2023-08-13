<?php

require 'koneksi.php';

    mysqli_query($koneksi,"DELETE FROM tb_data");
    mysqli_query($koneksi,"ALTER TABLE tb_data AUTO_INCREMENT=1");
    mysqli_query($koneksi,"INSERT INTO tb_data (id, waktu, datasensor)
                            VALUES ('','-','-')
                            ");

    echo "<script>
            document.location.href = 'index.php';
        </script>";


?>