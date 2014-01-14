<html>
	<head>
		<title>header</title>
		<link rel="stylesheet" type="text/css" href="Menu.css" />
	</head>
	<body>
	<table width="80%" border="0" align="center" cellpadding="3" cellspacing="0">
 	 <tr>
    	<th colspan="3" scope="col"><img src="Gambar/Logo(1).jpg" width="100%" height="214" /></th>
 	 </tr>
	 <tr>
				<?php
					session_start();
					if (isset($_SESSION["status"]))
					{
						echo "<td colspan='3'><ul id='menu'>
								<li><a href='Homepage.php' target='_self'>Home</a></li>
			 					<li><a  rel='nofollow' target='_blank'>Jurusan</a>
		 						<ul>
		 						<li><a rel='dofollow' target='_blank'>Teknik Informatika</a></li>
		 						<li><a  rel='dofollow' target='_blank'>Sistem Informasi</a>
		 
								<ul>
							<li><a  rel='dofollow' target='_blank'>Bisnis</a>
							<li><a  rel='dofollow' target='_blank'>Akutansi</a>
							</ul></li>
							<li><a  rel='dofollow' target='_blank'>Manajemen</a>
							<li><a  rel='dofollow' target='_blank'>Akutansi</a>
							<li><a  rel='dofollow' target='_blank'>Praktek</a>
								
								</ul>
								</li>
							<li><a href='pengaturan.php' rel='nofollow' target='_self'>Pengaturan</a></li>
							<li><a href='logout.php' rel='nofollow' target='_self'>Logout</a></li>
							</ul>
					</td>
					</tr>
					</table>";
					}
					else
					{
						echo "<td colspan='3'><ul id='menu'>
								<li><a href='Homepage.php' target='_self'>Home</a></li>
			 					<li><a  rel='nofollow' target='_blank'>Jurusan</a>
		 						<ul>
		 						<li><a rel='dofollow' target='_blank'>Teknik Informatika</a></li>
		 						<li><a  rel='dofollow' target='_blank'>Sistem Informasi</a>
		 
								<ul>
							<li><a  rel='dofollow' target='_blank'>Bisnis</a>
							<li><a  rel='dofollow' target='_blank'>Akutansi</a>
							</ul></li>
							<li><a  rel='dofollow' target='_blank'>Manajemen</a>
							<li><a  rel='dofollow' target='_blank'>Akutansi</a>
							<li><a  rel='dofollow' target='_blank'>Praktek</a>
								
								</ul>
								</li>
							<li><a href='Download.php'rel='nofollow' target='_self'>Download</a></li>
							<li><a href='login.php'rel='nofollow' target='_self'>Login</a></li>
							</ul>
							</td>
							</tr>
							</table>";
					}
				?>
		</tr>
		
	
	</body>
</html>
