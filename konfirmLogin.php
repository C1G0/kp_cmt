<?php include_once("functions.php");?>
<?php
    $db = dbConnect();
    if ($db->connect_errno == 0) {
        if (isset($_POST["btnLogin"])) {
        $username = $db->escape_string($_POST["uname"]);
        $password = $db->escape_string($_POST["pass"]);
        // $sql = "SELECT id_pegawai, nama, jabatan FROM pegawai
        // WHERE id_pegawai='$id_pegawai' and pass=md5('$password')";
        $sql = "SELECT id_pegawai, nama, jabatan FROM pegawai
        WHERE uname='$username' and pass='$password'";
        // var_dump($sql);
        $res = $db->query($sql);
        // var_dump($res);die();

        if ($res) {
            if($res->num_rows == 1){
                $data = $res->fetch_assoc();
                session_start();
                $_SESSION["id_pegawai"] = $data["id_pegawai"];
                $_SESSION["nama"] = $data["nama"];
                $_SESSION["jabatan"] = $data["jabatan"];
                if($_SESSION["jabatan"] == "teknisi"){
                    header("Location: app/teknisi/");
                    }
                    else if($_SESSION["jabatan"]=="atasan"){
                        header("Location: app/atasan/");
                    }
            } else
                header("Location: index.php?error=1");
        }
    } else
        header("Location: index.php?error=2");
} else
    header("Location: index.php?error3");
?>
