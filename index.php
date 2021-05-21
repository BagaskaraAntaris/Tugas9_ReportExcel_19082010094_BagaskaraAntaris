<?php  
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.warning {color : #FF0000;}
		.hitam{
			background-color: black;
			color: white;
		}
		.tengah{
			margin-left: 5px;
		}
	 	.card{
			width: 200%;
		}
		.tulis{
			font-size: 12px;
		}
		.form-group row{
			width: 140%;
		}
		.a{

		}
	</style>
</head>
<body>
	<div class="tengah">
	<div class="row">
	<div class="col-md-6">
	<div class="card">
		<div class="card-header">
			<h1 style="text-align: center;">Data Peserta Didik</h1><br>
		</div>
		<div class="card-body">
			<div class="form-group row">
				<table border="1" class="tulis">
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Jenis Pendaftaran</th>
						<th>NIS</th>
						<th>Jenis Kelamin</th>
						<th>NISN</th>
						<th>NIK</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Agama</th>
						<th>Berkebutuhan Khusus</th>
						<th>Alamat</t>
						<th>Kecamatan</th>
						<th>Kode Pos</th>
						<th>Tempat Tinggal</th>
						<th>Moda Transportasi</th>
						<th>Nomor HP</th>
						<th>Nomor Telepon</th>
						<th>Email</th>
						<th>Kewarganegaraan</th>
					</tr>
					<?php  
						$peserta = mysqli_query($koneksi, "SELECT * FROM peserta");
						foreach ($peserta as $row ) {
						echo 	"<tr>
									<td>".$row['id']."</td>
									<td>".$row['namalengkap']."</td>
									<td>".$row['jenispendaftaran']."</td>
									<td>".$row['nis']."</td>
									<td>".$row['jk']."</td>
									<td>".$row['nisn']."</td>
									<td>".$row['nik']."</td>
									<td>".$row['tempatlahir']."</td>
									<td>".$row['tgllahir']."</td>
									<td>".$row['agama']."</td>
									<td>".$row['bkpribadi']."</td>
									<td>".$row['alamat']."</td>
									<td>".$row['kecamatan']."</td>
									<td>".$row['kdpos']."</td>
									<td>".$row['tinggal']."</td>
									<td>".$row['transportasi']."</td>
									<td>".$row['nohp']."</td>
									<td>".$row['notelp']."</td>
									<td>".$row['email']."</td>
									<td>".$row['kwn']."</td>
								</tr>";
						}
					?>
				</table>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" name="submit" class="btn btn-primary"><a href="formpendaftaran.php" style="color: white;
			text-decoration: none;">Daftar</a></button>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" name="submit" class="btn btn-primary"><a href="report.php" style="color: white;
			text-decoration: none;">EXPORT TO PDF</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>