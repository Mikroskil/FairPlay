<?php
require_once __DIR__.'/user.php';
require_once __DIR__.'/daftar.php';
?>
<html>
<head>
	<title>Pengaturan</title>
	<link rel="stylesheet" type="text/css" href="global.css">
	<link rel="stylesheet" type="text/css" href="link.css">
</head>
<body>
<?php include_once 'Header.php';?>
<div class="container">
	<h3>Pengaturan</h3>
    <div id="contain">
 		<strong>Jenis Pengaturan</strong>
		<br> 
		<br>
	<table width="100%"  cellspacing="5">
	<tr>
		<td align="center"><a href="pengaturan.php">Tambah Matakuliah</a></td>
		<td align="center"><a href="ganti.php">Ganti Matakuliah</a></td>
		<td align="center"><a href="hapus.php">Hapus Matakuliah</a></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
		<?php
			$error = "&nbsp";
			if (isset($_POST["submit"]))
			{
				if (!preg_match("/^[a-zA-Z]/",$_POST["nama"]))
					$error = "Matakuliah Tidak boleh kosong!";
				else if (!preg_match("/^[a-zA-Z]/",$_POST["jurusan"]))
					$error = "Jurusan Tidak boleh kosong!";
				else if (!preg_match("/^[0-9]/",$_POST["sks"]))
					$error = "SKS Tidak boleh kosong!";
				else if (!preg_match("/^[a-zA-Z]/",$_POST["namadosen"]))
					$error = "Nama Dosen Tidak boleh kosong!";
				else if (!preg_match("/^[a-zA-Z]/",$_POST["hari"]))
					$error = "Hari Tidak boleh kosong!";
				else if (!preg_match("/^[a-z0-9.]/",$_POST["jam"]))
					$error = "Jam Tidak boleh kosong!";
				else if (!preg_match("/^[a-zA-Z0-9]/",$_POST["kelas"]))
					$error = "Kelas Tidak boleh kosong!";				
				else
				{
						$matkul = $_POST["matkul"];
                        $nama = $_POST["nama"];
						$jurusan = $_POST["jurusan"];
						$shift = $_POST["shift"];
						$sks = $_POST["sks"];
						$semester = $_POST["semester"];
						$namadosen = $_POST["namadosen"];
						$hari = $_POST["hari"];
						$jam = $_POST["jam"];
						$kelas = $_POST["kelas"];
						
                        hapusJadwal($matkul, $nama, $jurusan, $shift, $sks, $semester, $namadosen, $hari, $jam, $kelas);
			
					
				}
				echo $error;
			}
		?>
		<form action="" method="post">
		<table size="50%" border="0">
			<tr>
				<td>Matkul</td>
				<td>:</td>
				<td><input type="text" name="matkul" size="10"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<input type="text" name="jurusan" size="30"></td>
			</tr>
			<tr>
				<td>Mata kuliah</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" size="30">
				</td>
			</tr>
			<tr>
				<td>Shift</td>
				<td>:</td>
				<td>
					<select name="shift">
						<option>Pagi</option>
						<option>Sore</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah SKS</td>
				<td>:</td>
				<td><input type="text" size="30" name="sks"></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td>:</td>
				<td>
					<select name="semester">
						<option>I</option>
						<option>II</option>
						<option>III</option>
						<option>IV</option>
						<option>V</option>
						<option>VI</option>
						<option>VII</option>
						<option>VIII</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama dosen</td>
				<td>:</td>
				<td><input type="text" size="27" name="namadosen"></td>
			</tr>
			<tr>
				<td>Hari</td>
				<td>:</td>
				<td><input type="text" name="hari" size="15"></td>
			</tr>
			<tr>
				<td>Jam</td>
				<td>:</td>
				<td><input type="text" name="jam" size="15"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas" size="15"></td>
			</tr>
			<tr>
				<td colspan = "3" align="center">
				<input type="submit" name="submit" value="Hapus">
				<input type="reset" value="Reset">
				<input type="button" value="Back">
				</td>
			</tr>
		</table>
		</form>
		</td>
	</tr>
	</table>
<br />
</div>
<br />
</div>
</body>
</html>
