<?php
include_once 'koneksi.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM mahasiswa WHERE no=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-edit']))
{
 $nama = $_POST['nama'];
 $nim = $_POST['nim'];
 $alamat = $_POST['alamat'];
 
 $sql_query = "UPDATE mahasiswa SET nama='$nama',nim='$nim',alamat='$alamat' WHERE no=".$_GET['edit_id'];

 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data berhasil di edit');
  window.location.href='home.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Terjadi error saat edit data');
  </script>
  <?php
 }
}
if(isset($_POST['btn-batal']))
{
 header("Location: home.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Operasi Update Data</title>
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
				<h1>Operator CRUD</h1>
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
			<!-- Start Bagian Article -->
			<article>
				<form method="POST">
					<table border="1" width="60%" align="center">
						<tr>
							<th><align ="center" colspan="2">Simpan data</th>
						</tr>
						<tr>
							<td bgcolor="#00FFFF"><strong>Nama</strong></td>
						  <td><Input style="text" name="nama" size="80" value="<?php echo $fetched_row['nama']; ?>" /></td>
						</tr>
						<tr>
							<td bgcolor="#00FFFF"><strong>NIM</strong></td>
						  <td><input type=" text" name="nim" size="80" value="<?php echo $fetched_row['nim']; ?>"></td>
						</tr>
						<tr>
							<td bgcolor="#00FFFF"><strong>Alamat</strong></td>
						  <td><input type=" text" name="alamat" size="80"value="<?php echo $fetched_row['alamat']; ?>"></td>
						</tr>
							<td colspan="2" align="right"><input type="submit" name="btn-edit" value="Simpan" /> <input type="submit" value="Batal" name="btn-batal" /></td>
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
