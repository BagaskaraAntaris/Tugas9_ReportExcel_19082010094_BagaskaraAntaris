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
			width: 150%;
			margin-left: 180px;
			height: auto;
		}
	</style>
</head>
<body>
	<div class="tengah">
	<div class="row">
	<div class="col-md-6">
	<div class="card">
		<div class="card-header">
			<h1 style="text-align: center;">Formulir Peserta Didik</h1><br>
			Tanggal : <input type="date" name="tglform"  form="peserta" required="">
		</div>
		<div class="hitam">Registrasi Peserta Didik</div>
		<div class="card-body">
			<form method="POST" action="simpan.php" id="peserta">
				<!-- Jenis Pendaftaran -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
					<div class="col-sm-10">
						<select name="jenispendaftaran" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Siswa Baru">Siswa Baru</option>
							<option value="Pindahan">Pindahan</option>
						</select>
					</div>
				</div>
				<!-- Tanggal Masuk Sekolah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
					<div class="col-sm-10">
						<input type="date" name="tglmasuksekolah" class="form-control" required="">
					</div>
				</div>
				<!-- NIS -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NIS</label>
					<div class="col-sm-10">
						<input type="number" name="nis" class="form-control"  placeholder="NIS" required="">
					</div>
				</div>
				<!-- Nomor Peserta Ujian -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
					<div class="col-sm-10">
						<input type="number" name="nmrpeserta" class="form-control" required="" placeholder="Nomor Peserta Ujian"> 
						<span style="font-size: 11px; text-decoration-line: initial;">
							<p>
								<i>
									* Nomor Peserta Ujian adalah 20 Digit yang Tertera dalam Sertifikat 
									<i style="color: red; font-weight: bold;">SKHUN SD</i>
									, diisi bagi peserta didik jenjang SMP 	
								</i>
							</p>
						</span>
					</div>
				</div>
				<!-- Paud -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
					<div class="col-sm-10">
						<input type="radio" name="paud" value="Ya" required=""> Ya
						<input type="radio" name="paud" value="Tidak" required=""> Tidak
					</div>
				</div>
				<!-- TK -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Apakah Pernah TK</label>
					<div class="col-sm-10">
						<input type="radio" name="tk" value="Ya" required=""> Ya
						<input type="radio" name="tk" value="Tidak" required=""> Tidak
					</div>
				</div>
				<!-- No. seri SKHUN  -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
					<div class="col-sm-10">
						<input type="number" name="skhun" class="form-control"  placeholder="No. Seri SKHUN" required=""> 
						<span style="font-size: 11px; text-decoration-line: initial;">
							<p>
								<i>
									Diisi 16 digit yang tertera di
									<i style="color: red; font-weight: bold;">SKHUN SD</i>
									- diisi bagi peserta didik jenjang SMP 	
								</i>
							</p>
						</span>
					</div>
				</div>
				<!-- No. seri IJAZAH  -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No. Seri IJAZAH Sebelumnya</label>
					<div class="col-sm-10">
						<input type="number" name="ijazah" class="form-control"  placeholder="No. Seri IJAZAH" required=""> 
						<span style="font-size: 11px; text-decoration-line: initial;">
							<p>
								<i>
									Diisi 16 digit yang tertera di
									<i style="color: red; font-weight: bold;">IJAZAH SD</i>
									- diisi bagi peserta didik jenjang SMP 	
								</i>
							</p>
						</span>
					</div>
				</div>
				<!-- Hobi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Hobi</label>
					<div class="col-sm-10">
						<select name="hobi" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Olahraga">Olahraga</option>
							<option value="Kesenian">Kesenian</option>
							<option value="Membaca">Membaca</option>
							<option value="Menulis">Menulis</option>
							<option value="Travelin">Travelin</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Cita -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Cita - Cita</label>
					<div class="col-sm-10">
						<select name="cita" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="PNS">PNS</option>
							<option value="TNI/POLRI">TNI/POLRI</option>
							<option value="Guru/Dosen">Guru/Dosen</option>
							<option value="Dokter">Dokter</option>
							<option value="Politikus">Politikus</option>
							<option value="Wiraswasta">Wiraswasta</option>
							<option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Data Pribadi -->
				<div class="hitam">Data Pribadi</div>
				<!-- Nama Lengkap -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Lengkap</label>
					<div class="col-sm-10">
						<input type="text" name="namalengkap" class="form-control"  placeholder="Nama Lengkap" required="">
					</div>
				</div>
				<!-- Jenis Kelamin -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<input type="radio" name="jk" value="Laki - laki" required=""> Laki - laki
						<input type="radio" name="jk" value="Perempuan" required=""> Perempuan
					</div>
				</div>
				<!-- NISN -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NISN</label>
					<div class="col-sm-10">
						<input type="number" name="nisn" class="form-control"  placeholder="NISN" required="">
					</div>
				</div>
				<!-- NIK -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-10">
						<input type="number" name="nik" class="form-control"  placeholder="NIK" required="">
					</div>
				</div>
				<!-- Tempat Lahir -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Lahir</label>
					<div class="col-sm-10">
						<input type="text" name="tempatlahir" class="form-control"  placeholder="Tempat Lahir" required="">
					</div>
				</div>
				<!-- Tanggal Lahir -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="tgllahir" class="form-control" required="">
					</div>
				</div>
				<!-- Agama -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Agama</label>
					<div class="col-sm-10">
						<select name="agama" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Islam">Islam</option>
							<option value="Kristen Protestan">Kristen Protestan</option>
							<option value="Katholik">Katholik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Khong Hu Chu">Khong Hu Chu</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Berkebutuhan Khusus Pribadi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-10">
						<select name="bkpribadi" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak">Tidak</option>
							<option value="Netra">Netra</option>
							<option value="Rungu">Rungu</option>
							<option value="Grahita Sedang">Grahita Sedang</option>
							<option value="Daksa Ringan">Daksa Ringan</option>
							<option value="Daksa Sedang">Daksa Sedang</option>
							<option value="Laras">Laras</option>
							<option value="Wicara">Wicara</option>
							<option value="Tuna Ganda">Tuna Ganda</option>
							<option value="Hiper Aktif">Hiper Aktif</option>
							<option value="Cerdas Istimewa">Cerdas Istimewa</option>
							<option value="Bakat Istimewa">Bakat Istimewa</option>
							<option value="Kesulitan Belajar">Kesulitan Belajar</option>
							<option value="Narkoba">Narkoba</option>
							<option value="Indigo">Indigo</option>
							<option value="Down Sindrome">Down Sindrome</option>
							<option value="Autis">Autis</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Alamat Pribadi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Alamat Jalan</label>
					<div class="col-sm-10">
						<input type="text" name="alamat" class="form-control"  placeholder="Alamat" required="">
					</div>
				</div>
				<!-- RT -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">RT</label>
					<div class="col-sm-10">
						<input type="text" name="rt" class="form-control"  placeholder="RT" required="">
					</div>
				</div>
				<!-- RW -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">RW</label>
					<div class="col-sm-10">
						<input type="text" name="rw" class="form-control"  placeholder="RW" required="">
					</div>
				</div>
				<!-- Nama Dusun -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Dusun</label>
					<div class="col-sm-10">
						<input type="text" name="namadusun" class="form-control"  placeholder="Nama Dusun" required="">
					</div>
				</div>
				<!-- Nama Kelurahan/Desa -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
					<div class="col-sm-10">
						<input type="text" name="namadesa" class="form-control"  placeholder="Nama Kelurahan/Desa" required="">
					</div>
				</div>
				<!-- Kecamatan -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kecamatan</label>
					<div class="col-sm-10">
						<input type="text" name="kecamatan" class="form-control"  placeholder="Kecamatan" required="">
					</div>
				</div>
				<!-- Kode Pos -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kode Pos</label>
					<div class="col-sm-10">
						<input type="text" name="kdpos" class="form-control"  placeholder="Kode Pos" required="">
					</div>
				</div>
				<!-- Tempat Tinggal -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tempat Tinggal</label>
					<div class="col-sm-10">
						<select name="tinggal" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Bersama Orangtua">Bersama Orangtua</option>
							<option value="Wali">Wali</option>
							<option value="Kos">Kos</option>
							<option value="Asrama">Asrama</option>
							<option value="Panti Asuhan">Panti Asuhan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Moda Transportasi -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Moda Transportasi</label>
					<div class="col-sm-10">
						<select name="transportasi" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Jalan kaki">Jalan kaki</option>
							<option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
							<option value="Kendaraan Umum">Kendaraan Umum</option>
							<option value="Jemputan Sekolah">Jemputan Sekolah</option>
							<option value="Kereta Api">Kereta Api</option>
							<option value="Ojek">Ojek</option>
							<option value="Dokar/Becak">Dokar/Becak</option>
							<option value="Perahu Penyebrangan">Perahu Penyebrangan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Nomor HP -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nomor Handphone</label>
					<div class="col-sm-10">
						<input type="number" name="nohp" class="form-control"  placeholder="Nomor Handphone" required="">
					</div>
				</div>
				<!-- Nomor Telepon -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nomor Telepon</label>
					<div class="col-sm-10">
						<input type="number" name="notelp" class="form-control"   placeholder="Nomor Handphone" required="">
					</div>
				</div>
				<!-- Email -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Email Pribadi</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control"  placeholder="Email" required="">
					</div>
				</div>
				<!-- Penerima KPS/KIP/PKH -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Penerima KPS/KIP/PKH</label>
					<div class="col-sm-10">
						<input type="radio" name="penkip" value="Ya" required=""> Ya
						<input type="radio" name="penkip" value="Tidak" required=""> Tidak
					</div>
				</div>
				<!-- No. KPS/KIP/PKH/KKS -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">No. KPS/KIP/PKH/KKS</label>
					<div class="col-sm-10">
						<input type="number" name="nokip" placeholder="No. KPS/KIP/PKH/KKS" > <i>*)Apabila Menerima</i>
					</div>
				</div>
				<!-- Kewarganegaraan -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Kewarganegaraan</label>
					<div class="col-sm-10">
						<input type="radio" name="kwn" value="Indonesia(WNI)" required=""> Indonesia(WNI)
						<input type="radio" name="kwn" value="Asing(WNA)" required=""> Asing(WNA)
					</div>
				</div>
				<!-- Data Ayah Kandung -->
				<div class="hitam">Data Ayah Kandung</div>
				<!-- Nama Ayah Kandung -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
					<div class="col-sm-10">
						<input type="text" name="namaayah" class="form-control"  placeholder="Nama Ayah Kandung" required="">
					</div>
				</div>
				<!-- Tahun Lahir Ayah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tahun Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="thnlahirayah" class="form-control" required="">
					</div>
				</div>
				<!-- Pendidikan Ayah-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pendidikan</label>
					<div class="col-sm-10">
						<select name="pendikayah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Sekolah">Tidak Sekolah</option>
							<option value="Putus SD">Putus SD</option>
							<option value="SD Sederajat">SD Sederajat</option>
							<option value="SMP Sederajat">SMP Sederajat</option>
							<option value="SMA Sederajat">SMA Sederajat</option>
							<option value="D1">D1</option>
							<option value="D2">D2</option>
							<option value="D3">D3</option>
							<option value="D4/S1">D4/S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Pekerjaan Ayah-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pekerjaan</label>
					<div class="col-sm-10">
						<select name="kerjaayah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Bekerja">Tidak Bekerja</option>
							<option value="Nelayan">Nelayan</option>
							<option value="Petani">Petani</option>
							<option value="Peternak">Peternak</option>
							<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
							<option value="Karyawan Swasta">Karyawan Swasta</option>
							<option value="Pedagang Kecil">Pedagang Kecil</option>
							<option value="Pedagang Besar">Pedagang Besar</option>
							<option value="Wiraswasta">Wiraswasta</option>
							<option value="Wirausaha">Wirausaha</option>
							<option value="Buruh">Buruh</option>
							<option value="Pensiunan">Pensiunan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Penghasilan Ayah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Penghasilan</label>
					<div class="col-sm-10">
						<select name="hasilayah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Kurang dari 500,000">Kurang dari 500,000</option>
							<option value="500,000 - 999,999">500,000 - 999,999</option>
							<option value="1 jt - 1,999,999">1 jt - 1,999,999</option>
							<option value="4,2 jt - 4,9 jt">4,2 jt - 4,9 jt</option>
							<option value="5,5 jt - 20 jt">5,5 jt - 20 jt</option>
							<option value="6 Lebih dari 20 jt">6 Lebih dari 20 jt</option>
						</select>
					</div>
				</div>
				<!-- Berkebutuhan Khusus Ayah -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-10">
						<select name="bkayah" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak">Tidak</option>
							<option value="Netra">Netra</option>
							<option value="Rungu">Rungu</option>
							<option value="Grahita Sedang">Grahita Sedang</option>
							<option value="Daksa Ringan">Daksa Ringan</option>
							<option value="Daksa Sedang">Daksa Sedang</option>
							<option value="Laras">Laras</option>
							<option value="Wicara">Wicara</option>
							<option value="Tuna Ganda">Tuna Ganda</option>
							<option value="Hiper Aktif">Hiper Aktif</option>
							<option value="Cerdas Istimewa">Cerdas Istimewa</option>
							<option value="Bakat Istimewa">Bakat Istimewa</option>
							<option value="Kesulitan Belajar">Kesulitan Belajar</option>
							<option value="Narkoba">Narkoba</option>
							<option value="Indigo">Indigo</option>
							<option value="Down Sindrome">Down Sindrome</option>
							<option value="Autis">Autis</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Data Ibu Kandung -->
				<div class="hitam">Data Ibu Kandung</div>
				<!-- Nama Ibu Kandung -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
					<div class="col-sm-10">
						<input type="text" name="namaibu" class="form-control"  placeholder="Nama Ibu Kandung" required="">
					</div>
				</div>
				<!-- Tahun Lahir Ibu -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tahun Lahir</label>
					<div class="col-sm-10">
						<input type="date" name="thnlahiribu" class="form-control" required="">
					</div>
				</div>
				<!-- Pendidikan Ibu-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pendidikan</label>
					<div class="col-sm-10">
						<select name="pendikibu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Sekolah">Tidak Sekolah</option>
							<option value="Putus SD">Putus SD</option>
							<option value="SD Sederajat">SD Sederajat</option>
							<option value="SMP Sederajat">SMP Sederajat</option>
							<option value="SMA Sederajat">SMA Sederajat</option>
							<option value="D1">D1</option>
							<option value="D2">D2</option>
							<option value="D3">D3</option>
							<option value="D4/S1">D4/S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Pekerjaan Ibu-->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pekerjaan</label>
					<div class="col-sm-10">
						<select name="kerjaibu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak Bekerja">Tidak Bekerja</option>
							<option value="Nelayan">Nelayan</option>
							<option value="Petani">Petani</option>
							<option value="Peternak">Peternak</option>
							<option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
							<option value="Karyawan Swasta">Karyawan Swasta</option>
							<option value="Pedagang Kecil">Pedagang Kecil</option>
							<option value="Pedagang Besar">Pedagang Besar</option>
							<option value="Wiraswasta">Wiraswasta</option>
							<option value="Wirausaha">Wirausaha</option>
							<option value="Buruh">Buruh</option>
							<option value="Pensiunan">Pensiunan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<!-- Penghasilan Ibu -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Penghasilan</label>
					<div class="col-sm-10">
						<select name="hasilibu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Kurang dari 500,000">Kurang dari 500,000</option>
							<option value="500,000 - 999,999">500,000 - 999,999</option>
							<option value="1 jt - 1,999,999">1 jt - 1,999,999</option>
							<option value="4,2 jt - 4,9 jt">4,2 jt - 4,9 jt</option>
							<option value="5,5 jt - 20 jt">5,5 jt - 20 jt</option>
							<option value="6 Lebih dari 20 jt">6 Lebih dari 20 jt</option>
						</select>
					</div>
				</div>
				<!-- Berkebutuhan Khusus Ibu -->
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
					<div class="col-sm-10">
						<select name="bkibu" class="form-control" required="">
							<option selected disabled value="">-- Pilih --</option>
							<option value="Tidak">Tidak</option>
							<option value="Netra">Netra</option>
							<option value="Rungu">Rungu</option>
							<option value="Grahita Sedang">Grahita Sedang</option>
							<option value="Daksa Ringan">Daksa Ringan</option>
							<option value="Daksa Sedang">Daksa Sedang</option>
							<option value="Laras">Laras</option>
							<option value="Wicara">Wicara</option>
							<option value="Tuna Ganda">Tuna Ganda</option>
							<option value="Hiper Aktif">Hiper Aktif</option>
							<option value="Cerdas Istimewa">Cerdas Istimewa</option>
							<option value="Bakat Istimewa">Bakat Istimewa</option>
							<option value="Kesulitan Belajar">Kesulitan Belajar</option>
							<option value="Narkoba">Narkoba</option>
							<option value="Indigo">Indigo</option>
							<option value="Down Sindrome">Down Sindrome</option>
							<option value="Autis">Autis</option>
							<option value="Lainnya">Lainnya</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" name="submit" class="btn btn-primary">Daftar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
	</div>
	</div>
	
</body>
</html>