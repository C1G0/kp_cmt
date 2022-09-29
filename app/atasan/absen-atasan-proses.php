<!Doctype html>
<html>

<?php
    session_start();
?>

<?php
    include_once("../../functions.php");
    $db=dbconnect();
?>

    <title>Proses Absen</title>
    <body>
        

        <?php
        //navigasi_P22();
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>"
        if($db-> connect_errno==0)
        {
            $id_pegawai = $db->escape_string($_SESSION["id_pegawai"]);
            $ket = $db->escape_string($_POST["ket"]);
            $tanggal = $db->escape_string($_POST["tanggal"]);
            $jam = $db->escape_string($_POST["jam"]);

            $sql = "insert into absen values (null , '$id_pegawai','$ket', '$tanggal', '$jam')";            
            // var_dump($jam);
            // var_dump($sql);die();
            //echo $sql1;
            //echo $sql2;

            $res=$db->query($sql);
            

            if($res)
            {
                if($db->affected_rows > 0)
            {
                ?>
                    <script>
                        alert("Data Berhasil Ditambahkan");
                        document.location.href = 'index.php?page-atasan=riwayat';
                     </script>
                         
            <?php
            }
            else
            {
                ?>
                     <script>
                        alert("Gagal Absen");
                    </script>
                <?php
            }
            }
            else
            ?>
            <script>
                alert("Gagal Absen");
            </script>
            <?php
        }
        else
        echo "error : " .$db->connect_error."<br>";
        ?>
    </body>