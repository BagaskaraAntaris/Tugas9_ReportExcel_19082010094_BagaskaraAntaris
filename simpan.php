<?php  
	include 'koneksi.php';
		if(isset($_POST['submit'])) {
			$tglform					= $_POST['tglform'];
			$jenispendaftaran			= $_POST['jenispendaftaran'];
			$tglmasuksekolah			= $_POST['tglmasuksekolah'];
			$nis						= $_POST['nis'];
			$nmrpeserta					= $_POST['nmrpeserta'];
			$paud 						= $_POST['paud'];
			$tk 						= $_POST['tk'];
			$skhun 						= $_POST['skhun'];
			$ijazah 					= $_POST['ijazah'];
			$hobi 						= $_POST['hobi'];
			$cita 						= $_POST['cita'];
			$namalengkap 				= $_POST['namalengkap'];
			$jk 						= $_POST['jk'];
			$nisn 						= $_POST['nisn'];
			$nik 						= $_POST['nik'];
			$tempatlahir 				= $_POST['tempatlahir'];
			$tgllahir 					= $_POST['tgllahir'];
			$agama 						= $_POST['agama'];
			$bkpribadi 					= $_POST['bkpribadi'];
			$alamat 					= $_POST['alamat'];
			$rt 						= $_POST['rt'];
			$rw 						= $_POST['rw'];
			$namadusun 					= $_POST['namadusun'];
			$namadesa 					= $_POST['namadesa'];
			$kecamatan 					= $_POST['kecamatan'];
			$kdpos 						= $_POST['kdpos'];
			$tinggal 					= $_POST['tinggal'];
			$transportasi 				= $_POST['transportasi'];
			$nohp 						= $_POST['nohp'];
			$notelp 					= $_POST['notelp'];
			$email 						= $_POST['email'];
			$penkip 					= $_POST['penkip'];
			$nokip					 	= $_POST['nokip'];
			$kwn 						= $_POST['kwn'];
			$namaayah 					= $_POST['namaayah'];
			$thnlahirayah 				= $_POST['thnlahirayah'];
			$pendikayah					= $_POST['pendikayah'];
			$kerjaayah 					= $_POST['kerjaayah'];
			$hasilayah 					= $_POST['hasilayah'];
			$bkayah 					= $_POST['bkayah'];
			$namaibu 					= $_POST['namaibu'];
			$thnlahiribu 				= $_POST['thnlahiribu'];
			$pendikibu 					= $_POST['pendikibu'];
			$kerjaibu 					= $_POST['kerjaibu'];
			$hasilibu 					= $_POST['hasilibu'];
			$bkibu 						= $_POST['bkibu'];
			$query = "INSERT INTO peserta (tglform,jenispendaftaran,tglmasuksekolah,nis,nmrpeserta,paud,tk,skhun,ijazah,hobi,cita,namalengkap,jk,nisn,nik,tempatlahir,tgllahir,agama,bkpribadi,alamat,rt,rw,namadusun,namadesa,kecamatan,kdpos,tinggal,transportasi,nohp,notelp,email,penkip,nokip,kwn,namaayah,thnlahirayah,pendikayah,kerjaayah,hasilayah,bkayah,namaibu,thnlahiribu,pendikibu,kerjaibu,hasilibu,bkibu) 
			VALUES ('$tglform','$jenispendaftaran','$tglmasuksekolah','$nis','$nmrpeserta','$paud','$tk','$skhun','$ijazah','$hobi','$cita','$namalengkap','$jk','$nisn','$nik','$tempatlahir','$tgllahir','$agama','$bkpribadi','$alamat','$rt','$rw','$namadusun','$namadesa','$kecamatan','$kdpos','$tinggal','$transportasi','$nohp','$notelp','$email','$penkip','$nokip','$kwn','$namaayah','$thnlahirayah','$pendikayah','$kerjaayah','$hasilayah','$bkayah','$namaibu','$thnlahiribu','$pendikibu','$kerjaibu','$hasilibu','$bkibu')";
			$sql = mysqli_query($koneksi,$query);
			if ($sql) {
				header("location:index.php");
			}else{
				echo "Error";
			}
		}
	?>