<?php
include("../../functions.php");
$db=dbConnect();
if($db->connect_errno==0){
?>

<body>
<div class=" offset-lg-3 col-lg-6">
    <div class="container">
    <br>
    <h2>Laporan Absensi</h2>
    <form action="" method="post">
        <div class="container-fluid">
            <div class="p-2 bd-highlight">
                <label for="inputKet" class="form-label">Bulan:</label>
                    <div class="input-group">
                        <!--<span class="input-group-text">M</span>-->
                        <select class="form-select form-select-sm" name="bulan" id="bulan"
                        aria-label=".form-select-sm example" style="width: 70px;">
                        <option value="0" selected>Pilih Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                <button class="btn btn-primary mt-2" type="submit" name="submit-menu">Submit</button>
            </div>
        </div>
    </form>

    <?php $bulan = $db->escape_string($_POST["bulan"]); ?>

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
        $sql = "SELECT a.tanggal,a.ket,a.jam,p.nama,p.jabatan from absen a join pegawai p 
        using(id_pegawai) where month(a.tanggal)='$bulan'";
        // var_dump($sql);die();
        $res = $db->query($sql);
        $data = $res->fetch_all(MYSQLI_ASSOC);
        foreach($data as $row):
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
    </div>
</div>
<?php } ?>
</body>