<?php
	session_start();
	include 'koneksi.php';
	if (isset($_POST['btn-login'])){
		$username = $_POST['username'];
		$password = sh1($_POST['password']);
		
		$sql_query = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
		
		if(mysql_query($sql_query)){
			$num_rows = mysql_num_rows(mysql_query($sql_query));
			if($num_rows == 1){
				$_session['username'] = $username;
				?>
		<script type="text/javascript">
			alerts('Anda Berhasil Login');
			window.location.href='home.php';
		</script>
		<?php
			}
		else{
			?>
		<script type="text/javascript">
			alerts('Username anda Password Tidak cocok');
			window.location.href='index.php';
		</script>
		<?php
		}
		} else {
			?>
		<script type="text/javascript">
			alerts('Terjadi Error');
			window.location.href='index.php';
		</script>
		<?php
		}
	}
	if(isset($_POST['batal'])){
		?>
		<script type="text/javascript">
			window.location.href='index.php';
		</script>
		<?php
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Operasi CRUD</title>
		<style>
			div.container {
				width:100px;
				border: 1px solid gray;
			}
			header, footer {
				padding: 1em;
				color:#FFFFFF;
				background-color:#00C;
				clear:left;
				text-align :center;
			}
			nav {
				float:left; 
				max-width: 160px;
				margin:0;
				padding:1em;
			}
			nav ul {
				list-style-type:none;
				padding:0;
			}
			nav ul a{
				text-decoration:none;
			}
			article {
				margin-left:170px;
				border-left:1px solid gray;
				padding:1em;
				overflow:hidden;
			}
		</style>
	</head>
	<body>
		<div class="Container">
			<!-- Start Bagian Header -->
			<header>
				<h1>Operasi CRUD</h1>
			</header>
			<!-- End Bagian Header -->
			<!-- Start Bagian SideNav -->			
			<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li>
				</ul>
			</nav>
			<!-- End Bagian SideNav -->
			<!-- Start Bagian Article -->
			<article>
				<form method="POST">
					<table border="1" width="75%" align="center">
						<tr>
							<th colspan="2" align="center">Login <a href="#">Daftar</a></th>
							</tr>
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" size="80"/></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" size="80"/></td>
						</tr>
						<tr>
							<td colspan="2" align="right"><input type="submit" value="Simpan" name="btn-login"/> <input type="submit" value="Batal" name="btn-batal"/></td>
						</tr>
					</table>
				</form>
			</article>
			<!-- End Bagian Article -->
			<!-- Start Bagian Footer -->
			<footer>@Mohamad Fauzi - 14.111.146</footer>
			<!-- End Bagian Footer -->
		</div>
	</body>
</html>