<html>
<head>

<title>Homepage</title>
<link rel="stylesheet" href="Menu.css" type="text/css">
	<style type="text/css">
	<!--
	.style2 {font-family: "Times New Roman", Times, serif}
	.style4 {font-family: "Times New Roman", Times, serif; color: #000000; }
	-->
	</style>
	
	<script>
	window.onload = function() 
	{ 
	function draw() 
	{ 
		var ctx = document.getElementById('clock').getContext('2d'); 
		ctx.strokeStyle = "rgba(0, 0, 0, 1)"; 
		ctx.clearRect(0, 0, 100, 100); 
		ctx.beginPath(); 
		ctx.lineWidth = 1; 
		ctx.arc(50, 50, 48, 0, Math.PI * 2, true); 
		ctx.stroke(); 
		var i; for(i=0; i < 360; i+=6) 
		{ 
			ctx.lineWidth = ((i % 30)==0)?3:1; 
			ctx.strokeStyle = ((i % 30)==0)?"rgb(200,0,0)":"rgb(0,0,0)"; 
			var r = i * Math.PI / 180; 
			ctx.beginPath(); 
			ctx.moveTo(50+(45 * Math.sin(r)), 50+(45 * Math.cos(r))); 
			ctx.lineTo(50+((((i % 30)==0)?37:40) * Math.sin(r)),
			50+((((i % 30)==0)?37:40) * Math.cos(r))); 
			ctx.closePath(); 
			ctx.stroke(); 
		} 
		ctx.strokeStyle = "rgba(32, 32, 32, 0.6)"; 
		// hour
		var d = new Date(); 
 		var h = (d.getHours() % 12) + (d.getMinutes() / 60); 
 		ctx.lineWidth = 4; 
	    ctx.beginPath(); 
        ctx.moveTo(50+(25 * Math.sin(h * 30 * Math.PI / 180)), 
        50+(-25 * Math.cos(h * 30 * Math.PI / 180))); 
        ctx.lineTo(50+(5 * Math.sin((h+6) * 30 * Math.PI / 180)), 
        50+(-5 * Math.cos((h+6) * 30 * Math.PI / 180))); 
        ctx.closePath(); ctx.stroke(); 
        //minute 
 		var m = d.getMinutes() + (d.getSeconds() / 60); 
 		ctx.strokeStyle = "rgba(32, 32, 62, 0.8)"; 
 		ctx.lineWidth = 2; 
 		ctx.beginPath(); 
 		ctx.moveTo(50+(38 * Math.sin(m * 6 * Math.PI / 180)),
 		50+(-38 * Math.cos(m * 6 * Math.PI / 180))); 
 		ctx.lineTo(50+(3 * Math.sin((m+30) * 6 * Math.PI / 180)),
 		50+(-3 * Math.cos((m+30) * 6 * Math.PI / 180))); 
 		ctx.closePath(); 
 		ctx.stroke(); 
	 	//second
 		var s = d.getSeconds() + (d.getMilliseconds() / 1000);
		ctx.strokeStyle = "rgba(0, 255, 0, 0.7)";
 		ctx.lineWidth = 1; 
		ctx.beginPath(); 
		ctx.moveTo(50+(45 * Math.sin(s * 6 * Math.PI / 180)), 
		50+(-45 * Math.cos(s * 6 * Math.PI / 180))); 
		ctx.lineTo(50+(10 * Math.sin((s+30) * 6 * Math.PI / 180)), 
		50+(-10 * Math.cos((s+30) * 6 * Math.PI / 180)));
		ctx.closePath(); ctx.stroke(); } setInterval(draw, 100); } 
  
</script>
</head>

<body>
<?php include_once 'Header.php'; ?>

<table width="80%" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
  	<td width="194">
		<table width="100%" border="0" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
		<tr>
			<td colspan="7" bgcolor="#1877bb" height="30"><font color="white">&nbsp; &nbsp;<span class="style2">Time</span></font></td>
		</tr>
		<tr>
			<td>
			<table border="0" align="center" bgcolor="white">
			<tr>
				<td>
				<canvas id="clock" width="100" height="100"></canvas> 

				</td>
			</tr>	
			</table>
			</td>
		</tr>
		</table>	
	</td>
	<td rowspan="3" bgcolor="#CCCCCC" valign="top" >
		<table width="100%" border="0" cellpadding="0" cellspacing="4" bgcolor="#CCCCCC">
		<tr>
			<td width="5%"><img src="Gambar/img_3.jpg" /></td>
			<td valign="top"><div><b>Jadwal Kuliah</b></div>
				<p>Melihat Jadwal Matakuliah Setiap Jurusan</p></td>
		</tr>
		<tr>
			<td width="5%"><img src="Gambar/img_8.jpg" /></td>
			<td valign="top"><div><b>Pengaturan</b></div>
				<p>Khusus Admin digunakan untuk mengatur jadwal Matakuliah yang didaftarkan Dosen</td>
				
		</tr>
		</table> 
	</td>
  </tr>
  <tr>
    <td width="194">
				<table width="100%" border="0" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
				<tr>
					<td colspan="7" bgcolor="#1877bb" height="30"><font color="white">&nbsp; &nbsp;<span class="style2">Calendar</span></font></td>
				</tr>
				<?php
					$hari = date("d");
					$bulan = date ("m");
					$tahun = date ("Y");
					$jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
				?>				
				<tr>
					<th colspan="2" scope="col">&lt;</th>
       				<th colspan="3" scope="col">Januari</th>
        			<th colspan="2" scope="col">&gt;</th>
				</tr>
				<tr>
					<td width="15%"><div align="center">Sun</div></td>
        			<td width="15%"><div align="center">Mon</div></td>
        			<td width="15%"><div align="center">Tue</div></td>
       				<td width="15%"><div align="center">Wed</div></td>
       				<td width="15%"><div align="center">Thu</div></td>
        			<td width="15%"><div align="center">Fri</div></td>
        			<td width="15%"><div align="center">Sat</div></td>
				</tr>
				<?php
					$s = date ("w", mktime(0,0,0,$bulan,1,$tahun));
					for ($ds = 1; $ds <= $s; $ds++)
					{
						echo "<td width=15%><div align=center></div></td>";
					}
					for($d = 1; $d <= $jumlahhari; $d++)
					{
						if(date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 0 )
						{
							echo "<tr>";
						}
						$warna = "#000000";
						if(date ("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Saturday" || date ("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday")
						{
							$warna = "#FF0000";
						}
						echo "<td width=15%><div align=center style=\"color:$warna\">$d</div></td>";
						if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) 
						{
							echo "</tr>";
						}
					}
					 
				?>
				</table>
	</td>
    
  </tr>
  <tr>
    <td>
		<table width="100%" border="0" cellpadding="0" cellspacing="3" bgcolor="#CCCCCC">
		<tr>
			<td bgcolor="#1877bb" height="30"><font color="white">&nbsp; <span class="style2">&nbsp;Main Menu</span></font></td>
		</tr>	
		<tr>
			<td align="left"><img src="Gambar/File.png" width="24" height="24" align="texttop" /> <span class="style4">Panduan untuk Admin</span>								        </tr>
	  </table>		
	</td>
  </tr>
  <tr>
  	<td colspan="2">
		<table border="0" width="100%" bgcolor="#CCCCCC">
		<tr>
			<td  bgcolor="#1877bb" height="30" colspan="2"><font color="white">&nbsp; &nbsp;<span class="style2">Berita</span></font></td>
		</tr>
		<tr>
			<td valign="top">
				<table border="0" cellspacing="3" width="100%">
				<tr>
					<td valign="top"><img src="Gambar/Posting.jpg" /></td>
					<td valign="top">
						<div><b>Pengumuman Persiapan Pendaftaran Matakuliah Semester Ganjil T.A 2013/2014</b></div>
						<div><font color="#BC2510">30 November 2013 12:52:10</font></div>
						<div>Diumumkan kepada seluruh dosen pengajar STMIK-STIE bahwa, untuk mempersiapkan pendaftaran matakuliah Semester Ganjil T.A. 2013/2014, yang akan dilaksanakan pada tanggal...</div>
						<div><font color="blue"><u>Baca Selengkapnya...</u></font></div>
					</td>
				</tr> 
				</table>
			</td>
			<td valign="top">
				<table border="0" cellspacing="3" width="100%">
				<tr>
					<td valign="top"><img src="Gambar/Posting.jpg" /></td>
					<td valign="top">
						<div><b>Informasi Penting mengenai Pendaftaran Jadwal Matakuliah</b></div>
						<div><font color="#BC2510">25 November 2013 09:20:10</font></div>
						<div>Kepada seluruh dosen pengajar STMIK-STIE, diharapkan untuk meng-unduh, membaca, dan menyimak kembali Pengumuman tentang Sistem Pendaftaran Matakuliah yang diterapkan di Mikroskil...</div>
						<div><font color="blue"><u>Baca Selengkapnya...</u></font></div>
					</td>
				</tr> 
				</table>
			</td>
		</tr>
		</table>
	</td>
  </tr>
</table>
</body>
</html>
