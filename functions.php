<?php
define("DEVELOPMENT",TRUE);
function dbConnect(){
	global $db;
	$db=new mysqli("localhost","root","","kp_cmt");
	return $db;
}

function get(){
	$db=dbConnect();
	if($db->connect_errno==0){
		$sql = "select * from menu where stok > 0 and status = 'disajikan' order by id_menu";
		$res=$db->query($sql);
		if($res){
			$data=$res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}

function getAdmin(){
	$db=dbConnect();
	if($db->connect_errno==0){
		$sql= "SELECT id_pegawai,nama,jabatan,username from pegawai where jabatan='admin'";
		$res=$db->query($sql);
		if($res){
			$data=$res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}

function getAtasan(){
	$db=dbConnect();
	if($db->connect_errno==0){
		$sql= "SELECT id_pegawai,nama,jabatan,username from pegawai where jabatan='atasan'";
		$res=$db->query($sql);
		if($res){
			$data=$res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}

function getTeknisi(){
	$db=dbConnect();
	if($db->connect_errno==0){
		$sql= "SELECT id_pegawai,nama,jabatan,username from pegawai where jabatan='teknisi'";
		$res=$db->query($sql);
		if($res){
			$data=$res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}

function getAbsenAtasan(){
	$db=dbConnect();
	if($db->connect_errno==0){
		// SELECT p.id_pinjam,pt.nm_petugas,a.nm_anggota,b.id_barang,b.nm_barang,r.jml_barang,s.nm_satuan 
		// FROM peminjaman p JOIN anggota a USING(id_anggota) join petugas pt using(id_petugas) 
		// join rincian_peminjaman r using(id_pinjam) join barang b using(id_barang) join satuan s using(id_satuan) where id_pinjam ='$id_pinjam'";
		$sql= "SELECT a.tanggal,a.ket,a.jam,p.nama,p.jabatan from absen a join pegawai p using(id_pegawai) where id_pegawai = '000001'";
		$res=$db->query($sql);
		if($res){
			$data=$res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}

function getAbsenTeknisi(){
	$db=dbConnect();
	if($db->connect_errno==0){
		// SELECT p.id_pinjam,pt.nm_petugas,a.nm_anggota,b.id_barang,b.nm_barang,r.jml_barang,s.nm_satuan 
		// FROM peminjaman p JOIN anggota a USING(id_anggota) join petugas pt using(id_petugas) 
		// join rincian_peminjaman r using(id_pinjam) join barang b using(id_barang) join satuan s using(id_satuan) where id_pinjam ='$id_pinjam'";
		$sql= "SELECT a.tanggal,a.ket,a.jam,p.nama,p.jabatan from absen a join pegawai p using(id_pegawai) where id_pegawai = '000002'";
		$res=$db->query($sql);
		if($res){
			$data=$res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}

function getAbsen(){
	$db=dbConnect();
	if($db->connect_errno==0){
		// SELECT p.id_pinjam,pt.nm_petugas,a.nm_anggota,b.id_barang,b.nm_barang,r.jml_barang,s.nm_satuan 
		// FROM peminjaman p JOIN anggota a USING(id_anggota) join petugas pt using(id_petugas) 
		// join rincian_peminjaman r using(id_pinjam) join barang b using(id_barang) join satuan s using(id_satuan) where id_pinjam ='$id_pinjam'";
		$sql= "SELECT a.tanggal,a.ket,a.jam,p.nama,p.jabatan from absen a join pegawai p using(id_pegawai) where month(a.tanggal)='9'";
		$res=$db->query($sql);
		if($res){
			$data=$res->fetch_all(MYSQLI_ASSOC);
			$res->free();
			return $data;
		}
		else
			return FALSE; 
	}
	else
		return FALSE;
}

function showError($message){
	?>
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
        class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path
            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </svg>
    <div>
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?=$message;?>
    </div>
</div>
<?php
}

?>