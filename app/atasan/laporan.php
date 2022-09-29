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
        <form action="getlaporan.php">
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
                    <div class="p-2 bd-highlight">Tahun</div>
                    <select name='tahun' class="form-select form-select-sm" id="tahun"
                        aria-label=".form-select-sm example" style="width: 100px;">
                        <?php
                    $qry=mysqli_query($db, "SELECT tanggal FROM absen GROUP BY year(tanggal)");
                    while($t=mysqli_Fetch_array($qry)){
                    $data = explode('-',$t['tanggal']);
                    $tahun = $data[0];
                    echo "<option value='$tahun'>$tahun</option>";
                    }
                    ?>
                    </select>
                </div>
                <!-- <div class="mb-3 mt-2" col="3">
                    <button class="btn btn-primary" type="submit" name="submit-menu">Submit</button>
                </div> -->
            </div>
    </div>
                </form>
</div>
<?php } ?>
</body>

<script>
$(document).ready(function() {
    $("#bulan").on("change", function() {
        var bulan = $("#bulan").val();
        var tahun = $("#tahun").val();
        if ($("#bulan").val() != 0) {
            $.ajax({
                url: "getlaporan.php",
                method: "post",
                data: {
                    bulan: bulan,
                    tahun: tahun
                },
                success: function(data) {
                    $(".detail").html(data);
                }
            });
        } else {
            $("#detail").html("Tidak ada bulan yang terpilih!");
        }
    });
});
</script>