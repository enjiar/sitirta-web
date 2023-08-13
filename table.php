<?php 

require 'koneksi.php';

$datasensor = mysqli_query($koneksi, "SELECT * FROM tb_data ORDER BY id DESC LIMIT 0,5");
$result = mysqli_fetch_assoc($datasensor);
$data = $result['datasensor'];
$harga = intval($data) * 5000;
$denda =0;
$biayaadmin = 2500;
$total = $harga+$denda+$biayaadmin;
$no=1;

?>

<?php $i = 1;?>
<?php foreach($datasensor as $data): ?>
   
    <tr class="text-center">
        <td><?= $i;?></td>
        <td><?= $data["waktu"];?></td>
        <td><?= $data["datasensor"]/1000;?>m³</td>
        <td><?= $denda;?></td>
        <td>Rp.<?= $biayaadmin;?></td>
        <td>Rp.<?= ($data["datasensor"]/1000) * 5000 + 2500;?></td>
    </tr>
<?php $i++;?>
<?php endforeach;?>