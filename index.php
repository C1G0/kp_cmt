<?php
session_start();
if(isset($_SESSION["jabatan"])){
    $jabatan = $_SESSION["teknisi"];
    if($jabatan=="teknisi"){
        header("Location: app/teknisi/");
    }
    else if($jabatan=="atasan"){
        header("Location: app/atasan/");
    }
};
// $status = session_status();
// if($status == PHP_SESSION_ACTIVE)
//     //Destroy current and start new one
//     session_destroy();

include("functions.php");

?>
<?php
include("navbar-home.php");
if (isset($_GET["error"])) {
$error = $_GET["error"];
if ($error == 1)
showError("Id Petugas dan password tidak sesuai.");
else if ($error == 2)
showError("Error database. Silahkan hubungi administrator");
else if ($error == 3)
showError("Koneksi ke Database gagal. Autentikasi gagal.");
else if ($error == 4)
showError("Anda tidak boleh mengakses halaman sebelumnya karena belum login.
Silahkan login terlebih dahulu.");
else
showError("Unknown Error.");
};
if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch($page){
        case 'home':
            include_once "home.php";
            break;
        case 'login':
            include_once "loginform.php";
            break;    
        default:
        echo "Halaman Tidak ditemukan";
    }
}else{
    include("home.php");
}
include("footer.php");

?>