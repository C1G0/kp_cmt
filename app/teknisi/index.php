<!DOCTYPE html>
<html>
<head>
<title>Halaman Teknisi</title>
<link href="css/style.css" rel="stylesheet">
</head>

<?php
    session_start();
    if (!isset($_SESSION["id_pegawai"])){
        header("Location: ../../index.php?error=4");
        }else if($_SESSION["jabatan"]!="teknisi"){
            $jabatan = $_SESSION["jabatan"];
            if($jabatan=="atasan"){
                echo "
                <script>
                alert('Anda tidak memiliki akses ke halaman tersebut');
                document.location.href = '../teknisi/';
                </script>";
            }
        }
?>

<body>
<?php include("navbar-teknisi.php"); ?>

<?php
if (isset($_GET['page-teknisi'])){
    $page = $_GET['page-teknisi'];

    if ($page == 'home'){
        include "home-teknisi.php";
    }
    else if ($page == 'absen'){
        include "absen-teknisi.php";
    }
    else if ($page == 'riwayat'){
        include "riwayat.php";
    }
    else if ($page == 'logout'){
        include "../../logout.php";
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