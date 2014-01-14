<?php

require_once __DIR__.'/config.php';

function checkJadwal($nama) {
    global $mysql;

    $nama = mysql_escape_string($nama);
    $query = mysql_query("SELECT * FROM matakuliah WHERE matkul = '$matkul'");

    return mysql_num_rows($query);
}

function registerJadwal($matkul, $nama, $jurusan, $shift, $sks, $semester, $namadosen, $hari, $jam, $kelas) {
    global $mysql;
	
	$matkul = mysql_escape_string($matkul);
	$nama = mysql_escape_string($nama);
    $jurusan = mysql_escape_string($jurusan);
    $shift = mysql_escape_string($shift);
    $sks = mysql_escape_string($sks);
	$semester = mysql_escape_string($semester);
    $namadosen = mysql_escape_string($namadosen);
	$hari = mysql_escape_string($hari);
	$jam = mysql_escape_string($jam);
	$kelas = mysql_escape_string($kelas);

    return mysql_query("INSERT INTO matakuliah (matkul, nama, jurusan, shift, sks, semester, namadosen, hari, jam, kelas) VALUES ('$matkul', '$nama' ,'$jurusan' , '$shift' , '$sks', '$semester', '$namadosen' , '$hari', '$jam' ,'$kelas')
    ", $mysql);
}

function editJadwal($matkul, $nama, $jurusan, $shift, $sks, $semester, $namadosen, $hari, $jam, $kelas) {
	global $mysql;
	
	$matkul = mysql_escape_string($matkul);
	$nama = mysql_escape_string($nama);
    $jurusan = mysql_escape_string($jurusan);
    $shift = mysql_escape_string($shift);
    $sks = mysql_escape_string($sks);
	$semester = mysql_escape_string($semester);
    $namadosen = mysql_escape_string($namadosen);
	$hari = mysql_escape_string($hari);
	$jam = mysql_escape_string($jam);
	$kelas = mysql_escape_string($kelas);
	
	return mysql_query("
	UPDATE matakuliah SET nama = '$nama', jurusan = '$jurusan' ,shift = '$shift' , sks = '$sks' , semester = '$semester', namadosen = '$namadosen' , hari = '$hari', jam = '$jam', kelas = '$kelas'
	WHERE matkul = '$matkul'
	", $mysql);
}

function hapusJadwal($matkul, $nama, $jurusan, $shift, $sks, $semester, $namadosen, $hari, $jam, $kelas) {
	global $mysql;
	
	$matkul = mysql_escape_string($matkul);
	$nama = mysql_escape_string($nama);
    $jurusan = mysql_escape_string($jurusan);
    $shift = mysql_escape_string($shift);
    $sks = mysql_escape_string($sks);
	$semester = mysql_escape_string($semester);
    $namadosen = mysql_escape_string($namadosen);
	$hari = mysql_escape_string($hari);
	$jam = mysql_escape_string($jam);
	$kelas = mysql_escape_string($kelas);

	return mysql_query("
	DELETE  FROM matakuliah WHERE matkul = '$matkul'
	", $mysql);
}
?>
