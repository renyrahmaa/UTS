<?php
include 'model.php';
//tabel jadwal kuliah
if (isset($_POST['submit_simpan_jadwal'])) {
    $id = $_POST['id'];
    $jadwalid = $_POST['jadwalid'];
    $kodedosen = $_POST['kodedosen'];
    $hari = $_POST['hari'];
    $thnakademik = $_POST['thnakademik'];
    $semester = $_POST['semester'];
    $kodemk = $_POST['kodemk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->insert_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
    header('location:jadwal.php');
}
if (isset($_POST['submit_edit_jadwal'])) {
    $id = $_POST['id'];
    $jadwalid = $_POST['jadwalid'];
    $kodedosen = $_POST['kodedosen'];
    $hari = $_POST['hari'];
    $thnakademik = $_POST['thnakademik'];
    $semester = $_POST['semester'];
    $kodemk = $_POST['kodemk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->update_jadwal($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
    header('location:jadwal.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete_jadwal($id);
    header('location:jadwal.php');
}

//tabel data dosen
if (isset($_POST['submit_simpan_dosen'])) {
    $kodedosen = $_POST['kodedosen'];
    $nidn = $_POST['nidn'];
    $nip = $_POST['nip'];
    $namadosen = $_POST['namadosen'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->insert_dosen($kodedosen, $nidn, $nip, $namadosen, $kodeprodi);
    header('location:dosen.php');
}
if (isset($_POST['submit_edit_dosen'])) {
    $kodedosen = $_POST['kodedosen'];
    $nidn = $_POST['nidn'];
    $nip = $_POST['nip'];
    $namadosen = $_POST['namadosen'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->update_dosen($kodedosen, $nidn, $nip, $namadosen, $kodeprodi);
    header('location:dosen.php');
}
if (isset($_GET['kodedosen'])) {
    $id = $_GET['kodedosen'];
    $model = new Model();
    $model->delete_dosen($id);
    header('location:dosen.php');
}

//tabel absen
if (isset($_POST['submit_simpan_absen'])) {
    $idabsen = $_POST['idabsen'];
    $tglabsen = $_POST['tglabsen'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $kodedosen = $_POST['kodedosen'];
    $sesi = $_POST['sesi'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->insert_absen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
    header('location:absen.php');
}
if (isset($_POST['submit_edit_absen'])) {
    $idabsen = $_POST['idabsen'];
    $tglabsen = $_POST['tglabsen'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $kodedosen = $_POST['kodedosen'];
    $sesi = $_POST['sesi'];
    $kelassesi = $_POST['kelassesi'];
    $model = new Model();
    $model->update_absen($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
    header('location:absen.php');
}
if (isset($_GET['idabsen'])) {
    $id = $_GET['idabsen'];
    $model = new Model();
    $model->delete_absen($id);
    header('location:absen.php');
}

//tabel matakuliah
if (isset($_POST['submit_simpan_matakuliah'])) {
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->insert_matakuliah($kodemk, $namamk, $sks, $smt, $kodeprodi);
    header('location:matakuliah.php');
}
if (isset($_POST['submit_edit_matakuliah'])) {
    $kodemk = $_POST['kodemk'];
    $namamk = $_POST['namamk'];
    $sks = $_POST['sks'];
    $smt = $_POST['smt'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->update_matakuliah($kodemk, $namamk, $sks, $smt, $kodeprodi);
    header('location:matakuliah.php');
}
if (isset($_GET['kodemk'])) {
    $id = $_GET['kodemk'];
    $model = new Model();
    $model->delete_matakuliah($id);
    header('location:matakuliah.php');
}

//tabel program studi
if (isset($_POST['submit_simpan_prodi'])) {
    $kodeprodi = $_POST['kodeprodi'];
    $namaprodi = $_POST['namaprodi'];
    $model = new Model();
    $model->insert_prodi($kodeprodi, $namaprodi);
    header('location:prodi.php');
}
if (isset($_POST['submit_edit_prodi'])) {
    $kodeprodi = $_POST['kodeprodi'];
    $namaprodi = $_POST['namaprodi'];
    $model = new Model();
    $model->update_prodi($kodeprodi, $namaprodi);
    header('location:prodi.php');
}
if (isset($_GET['kodeprodi'])) {
    $id = $_GET['kodeprodi'];
    $model = new Model();
    $model->delete_prodi($id);
    header('location:prodi.php');
}

