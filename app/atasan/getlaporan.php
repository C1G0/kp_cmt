<?php
if(isset($_POST['bulan'])){
include_once("../../functions.php");
$db=dbConnect();
$tahun = $_POST['tahun'];
$bulan = $_POST['bulan'];
function bulan($bulan){
    if($bulan==1) echo "Januari";
    else if($bulan==2) echo "Februari";
    else if($bulan==3) echo "Maret";
    else if($bulan==4) echo "April";
    else if($bulan==5) echo "Mei";
    else if($bulan==6) echo "Juni";
    else if($bulan==7) echo "Juli";
    else if($bulan==8) echo "Agustus";
    else if($bulan==9) echo "September";
    else if($bulan==10) echo "Oktober";
    else if($bulan==11) echo "November";
    else if($bulan==12) echo "Desember";
}
?>
<h5>Periode Bulan : <?=bulan($bulan);?> <?=$tahun;?></h5>

        <table class="table table-striped rounded table-hover mt-3">
        <thead>
            <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama</th>
            <th scope="col">Jam Absen Masuk</th>
            <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <?php
        $k = getAbsen();
        foreach ($k as $row):
        ?>
        <tbody>
            <tr>
            <th scope="row"><?=$row['tanggal']?></th>
            <td><?=$row['nama']?></td>
            <td><?=$row['jam']?></td>
            <td><?=$row['ket']?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>

<?php } ?>

<script>
$(document).ready(function() {
    $(".cetak").on("click", function() {
        window.print()
    });
});
</script>