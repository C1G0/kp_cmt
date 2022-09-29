<!DOCTYPE html>
<html>
<head>
<title>Halaman Atasan</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php
    session_start();
    if (!isset($_SESSION["id_pegawai"])){
        header("Location: ../../index.php?error=4");
        }else if($_SESSION["jabatan"]!="atasan"){
            $jabatan = $_SESSION["jabatan"];
            if($jabatan=="teknisi"){
                echo "
                <script>
                alert('Anda tidak memiliki akses ke halaman tersebut');
                document.location.href = '../teknisi/';
                </script>";
            }
        }
?>

<?php include("navbar-atasan.php"); ?>

<?php
if (isset($_GET['page-atasan'])){
    $page = $_GET['page-atasan'];

    if ($page == 'home'){
        include_once "index.php";
    }
    else if ($page == 'absen'){
        include_once "absen-atasan.php";
    }
    else if ($page == 'riwayat'){
        include_once "riwayat.php";
    }
    else if ($page == 'laporan'){
        include_once "laporan2.php";
    }
    else if ($page == 'logout'){
        include_once "../../logout.php";
    }
    else {
        echo "Halaman Tidak Ditemukan!";
    }
    
}
else { ?>
        <!---Welcome Page-->
        <div class ="bg">
            <div class = "container-fluid-welcome padding">
                <div class = "row welcome text-center">
                    <div class = "col-12">
                        <div class = "col-12">
                        <p class = "lead">Selamat datang <?=$_SESSION['nama'];?>, di Website Resmi PT Carita Mandiri Teknik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
}
?>
</body>
</html>