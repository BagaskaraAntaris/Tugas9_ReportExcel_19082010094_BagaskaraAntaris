<?php
//mengeksekusi file koneksi1.pdf
	include ('koneksi.php');
	//mengeksekusi library dompdf
	require_once("dompdf/autoload.inc.php");
	use Dompdf\Dompdf;
	//membuat konstruktor
	$dompdf = new Dompdf();
	//membaca data dari database
	$query = mysqli_query($koneksi,"SELECT * FROM peserta");
	//membuat script HTML
	$html ='<html><hr><center><h3>Daftar Nama Pendaftar</h3></center><br/><br/><hr/><br/>';
	$html .='<table border="1" width="300%" style="table-layout: fixed">
	<tr>
		<th>Jenis Pendaftaran</th>
		<th>Tanggal FORM</th>
		<th>Jenis Pendaftaran</th>
		<th>Tanggal Masuk sekolah</th>
		<th>NIS</th>
		<th>Nomor Peserta</th>
		<th>Pernah Paud ?</th>
		<th>Pernah TK ?</th>
		<th>SKHUN</th>
		<th>Ijazah</th>
		<th>Hobi</th>
		<th>Cita-cita</th>
		<th>Nama Lengkap</th>
		<th>Jenis Kelamin</th>
		<th>NISN</th>
		<th>NIK</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Agama</th>
		<th>Berkubutuhan Khusus</th>
		<th>Alamat</th>
		<th>RT</th>
		<th>RW</th>
		<th>Nama Dusun</th>
		<th>Nama Desa</th>
		<th>Kecamatan</th>
		<th>Kode Pos</th>
		<th>Tinggal</th>
		<th>Transportasi</th>
		<th>No HP</th>
		<th>No Telp</th>
		<th>Email</th>
		<th>KIP</th>
		<th>No KIP</th>
		<th>Kewarganegaraan</th>
		<th>Nama Ayah</th>
		<th>Tahun Lahir Ayah</th>
		<th>Pendidikan</th>
		<th>Kerja Ayah</th>
		<th>Gaji Ayah</th>
		<th>Berkebutuhan Khusus</th>
		<th>Nama Ibu</th>
		<th>Pendidikan</th>
		<th>Kerja Ibu</th>
		<th>Gaji Ibu</th>
		<th>Berkebuthan Khusus</th>
	</tr>';

while($row = mysqli_fetch_array($query))
{
	$html.="<tr>	
	<td>".$row['id']."</td>																									
	<td>".$row['tglform']."</td>
	<td>".$row['jenispendaftaran']."</td>
	<td>".$row['tglmasuksekolah']."</td>
	<td>".$row['nis']."</td>
	<td>".$row['nmrpeserta']."</td>
	<td>".$row['paud']."</td>
	<td>".$row['tk']."</td>
	<td>".$row['skhun']."</td>
	<td>".$row['ijazah']."</td>
	<td>".$row['hobi']."</td>
	<td>".$row['cita']."</td>
	<td>".$row['namalengkap']."</td>
	<td>".$row['jk']."</td>
	<td>".$row['nisn']."</td>
	<td>".$row['nik']."</td>
	<td>".$row['tempatlahir']."</td>
	<td>".$row['tgllahir']."</td>
	<td>".$row['agama']."</td>
	<td>".$row['bkpribadi']."</td>
	<td>".$row['alamat']."</td>
	<td>".$row['rt']."</td>
	<td>".$row['rw']."</td>
	<td>".$row['namadusun']."</td>
	<td>".$row['namadesa']."</td>
	<td>".$row['kecamatan']."</td>
	<td>". $row['kdpos']."</td>
	<td>". $row['tinggal']."</td>
	<td>". $row['transportasi']."</td>
	<td>". $row['nohp']."</td>
	<td>". $row['notelp']."</td>
	<td>". $row['email']."</td>
	<td>". $row['penkip']."</td>
	<td>". $row['nokip']."</td>
	<td>". $row['kwn']."</td>
	<td>". $row['namaayah']."</td>
	<td>". $row['thnlahirayah']."</td>	
	<td>". $row['pendikayah']."</td>
	<td>". $row['kerjaayah']."</td>
	<td>". $row['hasilayah']."</td>
	<td>". $row['bkayah']."</td>
	<td>". $row['namaibu']."</td>
	<td>". $row['thnlahiribu']."</td>
	<td>". $row['pendikibu']."</td>
	<td>". $row['kerjaibu']."</td>
	<td>". $row['hasilibu']."</td>
	<td>". $row['bkibu']."</td>	
	</tr>";
}

	$html.="</html>";
	$dompdf->loadHtml($html);
	//setting ukuran dan orientasi kertas
	$dompdf->setPaper('A0','landscape');
	//rendering dari HTML ke PDF
	$dompdf->render();
	//melakukan output ke file PDF
	$dompdf->stream('laporan_siswa.pdf');
?>