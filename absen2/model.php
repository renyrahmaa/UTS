<?php
include 'connection.php';
class Model extends Connection
{
	//tabel jadwal
	public function __construct()
    {
        $this->conn = $this->get_connection();
    }
	public function insert_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
	{
	    $sql = "INSERT INTO tbljadwal (id, jadwalid, kodedosen, hari, thnakademik, semester, kodemk, sesi, jammasuk, jamkeluar, kelas, ruang, status, kelassesi) VALUES ('$id', '$jadwalid', '$kodedosen', '$hari', '$thnakademik', '$semester', '$kodemk', '$sesi', '$jammasuk', '$jamkeluar', '$kelas', '$ruang', '$status', '$kelassesi',)";
	    $this->conn->query($sql);
	}
	public function tampil_jadwal()
	{
	    $sql = "SELECT * FROM tbljadwal";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
		}
	}
	public function edit_jadwal($id)
	{
	    $sql = "SELECT * FROM tbljadwal WHERE id='$id'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
	{
	    $sql = "UPDATE tbljadwal SET jadwalid='$jadwalid', kodedosen='$kodedosen', hari='$hari', thnakademik='$thnakademik',semester='$semester', kodemk='$kodemk', sesi='$sesi', jammasuk='$jammasuk', jamkeluar='$jamkeluar', kelas='$kelas', ruang='$ruang', status='$status', kelassesi='$kelassesi' WHERE id='$id'";
	    $this->conn->query($sql);
	}
	public function delete_jadwal($id)
	{
	    $sql = "DELETE FROM tbljadwal WHERE id='$id'";
	    $this->conn->query($sql);
	}
	//tabel Dosen
	public function insert_dosen($kodedosen, $nidn, $nip, $namadosen, $kodeprodi)
	{
	    $sql = "INSERT INTO tbldosen (kodedosen, nidn, nip, namadosen, kodeprodi) VALUES ('$kodedosen', '$nidn', '$nip', '$namadosen', '$kodeprodi')";
	    $this->conn->query($sql);
	}
	public function tampil_dosen()
	{
	    $sql = "SELECT * FROM tbldosen";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_dosen($kodedosen)
	{
	    $sql = "SELECT * FROM tbldosen WHERE kodedosen='$kodedosen'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_dosen($kodedosen, $nidn, $nip, $namadosen, $kodeprodi)
	{
	    $sql = "UPDATE tbldosen SET nidn='$nidn', nip='$nip', namadosen='$namadosen', kodeprodi='$kodeprodi' WHERE kodedosen='$kodedosen'";
	    $this->conn->query($sql);
	}
	public function delete_dosen($kodedosen)
	{
	    $sql = "DELETE FROM tbldosen WHERE kodedosen='$kodedosen'";
	    $this->conn->query($sql);
	}
	//tabel absen
	public function insert_absen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
	{
	    $sql = "INSERT INTO tblabsen (idabsen, tglabsen, masuk, keluar, kodedosen, sesi, kelassesi) VALUES ('$idabsen', '$tglabsen', '$masuk', '$keluar', '$kodedosen', '$sesi', '$kelassesi')";
	    $this->conn->query($sql);
	}
	public function tampil_absen()
	{
	    $sql = "SELECT * FROM tblabsen";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_absen($idabsen)
	{
	    $sql = "SELECT * FROM tblabsen WHERE idabsen='$idabsen'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_absen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
	{
	    $sql = "UPDATE tblabsen SET tglabsen='$tglabsen', masuk='$masuk', keluar='$keluar', kodedosen='$kodedosen', sesi='$sesi', kelassesi='$kelassesi' WHERE idabsen='$idabsen'";
	    $this->conn->query($sql);
	}
	public function delete_absen($idabsen)
	{
	    $sql = "DELETE FROM tblabsen WHERE idabsen='$idabsen'";
	    $this->conn->query($sql);
	}
	//tabel matakuliah
	public function insert_matakuliah($kodemk, $namamk, $sks, $smt, $kodeprodi)
	{
	    $sql = "INSERT INTO tblmkuliah (kodemk, namamk, sks, smt, kodeprodi) VALUES ('$kodemk', '$namamk', '$sks', '$smt', '$kodeprodi')";
	    $this->conn->query($sql);
	}
	public function tampil_matakuliah()
	{
	    $sql = "SELECT * FROM tblmkuliah";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_matakuliah($kodemk)
	{
	    $sql = "SELECT * FROM tblmkuliah WHERE kodemk='$kodemk'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_matakuliah($kodemk, $namamk, $sks, $smt, $kodeprodi)
	{
	    $sql = "UPDATE tblmkuliah SET kodemk='$kodemk', namamk='$namamk', sks='$sks', smt='$smt', kodeprodi='$kodeprodi' ";
	    $this->conn->query($sql);
	}
	public function delete_matakuliah($kodemk)
	{
	    $sql = "DELETE FROM tblmkuliah WHERE kodemk='$kodemk'";
	    $this->conn->query($sql);
	}
	//tabel program studi
	public function insert_prodi($kodeprodi, $namaprodi)
	{
	    $sql = "INSERT INTO tblprodi (kodeprodi, namaprodi) VALUES ('$kodeprodi', '$namaprodi')";
	    $this->conn->query($sql);
	}
	public function tampil_prodi()
	{
	    $sql = "SELECT * FROM tblprodi";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	   		$baris[] = $obj;
	    }
	    if(!empty($baris)){
	        return $baris;
	    }
	}
	public function edit_prodi($kodeprodi)
	{
	    $sql = "SELECT * FROM tblprodi WHERE kodeprodi='$kodeprodi'";
	    $bind = $this->conn->query($sql);
	    while ($obj = $bind->fetch_object()) {
	    	$baris = $obj;
	    }
	    return $baris;
	}
	public function update_prodi($kodeprodi, $namaprodi)
	{
	    $sql = "UPDATE tblprodi SET kodeprodi='$kodeprodi', namaprodi='$namaprodi'";
	    $this->conn->query($sql);
	}
	public function delete_prodi($kodeprodi)
	{
	    $sql = "DELETE FROM tblprodi WHERE kodeprodi='$kodeprodi'";
	    $this->conn->query($sql);
	}
}
