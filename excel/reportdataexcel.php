<?php  
	include ('../koneksi.php');
	require 'vendor/autoload.php';
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	$spreadsheet = new Spreadsheet();
	$sheet = $spreadsheet->getActiveSheet();
	$sheet->setCellValue('A1',	'No');
	$sheet->setCellValue('B1',	'Tanggal Form');
	$sheet->setCellValue('C1',	'Jenis Pendaftaran');
	$sheet->setCellValue('D1',	'Tanggal Masuk Sekolah');
	$sheet->setCellValue('E1',	'NIS');
	$sheet->setCellValue('F1',	'Nomer Peserta');
	$sheet->setCellValue('G1',	'PAUD');
	$sheet->setCellValue('H1',	'TK');
	$sheet->setCellValue('I1',	'SKHUN');
	$sheet->setCellValue('J1',	'IJAZAH');
	$sheet->setCellValue('K1',	'Hobi');
	$sheet->setCellValue('L1',	'Cita - cita');
	$sheet->setCellValue('M1',	'Nama Lengkap');
	$sheet->setCellValue('N1',	'Jenis Kelamin');
	$sheet->setCellValue('O1',	'NISN');
	$sheet->setCellValue('P1',	'NIK');
	$sheet->setCellValue('Q1',	'Tempat Lahir');
	$sheet->setCellValue('R1',	'Tanggal Lahir');
	$sheet->setCellValue('S1',	'Agama');
	$sheet->setCellValue('T1',	'Berkebutuhan Khusus');
	$sheet->setCellValue('U1',	'Alamat');
	$sheet->setCellValue('V1',	'RT');
	$sheet->setCellValue('W1',	'RW');
	$sheet->setCellValue('X1',	'Nama Dusun');
	$sheet->setCellValue('Y1',	'Nama Desa');
	$sheet->setCellValue('Z1',	'Kecamatan');
	$sheet->setCellValue('AA1',	'Kode Pos');
	$sheet->setCellValue('AB1',	'Tinggal');
	$sheet->setCellValue('AC1',	'Transportasi');
	$sheet->setCellValue('AD1',	'No HP');
	$sheet->setCellValue('AE1',	'No Telp');
	$sheet->setCellValue('AF1',	'Email');
	$sheet->setCellValue('AG1',	'Penerima KIP');
	$sheet->setCellValue('AH1',	'NO KIP');
	$sheet->setCellValue('AI1',	'Kewarganegaraan');
	$sheet->setCellValue('AJ1',	'Nama Ayah');
	$sheet->setCellValue('AK1',	'Nama Ibu');

	$query = mysqli_query($koneksi, "SELECT * FROM peserta");
	$i = 2;
	$no = 1;
	while($row = mysqli_fetch_array($query)){
		$sheet->setCellValue('A'.$i, $no++);
		$sheet->setCellValue('B'.$i, $row['tglform']);
		$sheet->setCellValue('C'.$i, $row['jenispendaftaran']);
		$sheet->setCellValue('D'.$i, $row['tglmasuksekolah']);
		$sheet->setCellValue('E'.$i, $row['nis']);
		$sheet->setCellValue('F'.$i, $row['nmrpeserta']);
		$sheet->setCellValue('G'.$i, $row['paud']);
		$sheet->setCellValue('H'.$i, $row['tk']);
		$sheet->setCellValue('I'.$i, $row['skhun']);
		$sheet->setCellValue('J'.$i, $row['ijazah']);
		$sheet->setCellValue('K'.$i, $row['hobi']);
		$sheet->setCellValue('L'.$i, $row['cita']);
		$sheet->setCellValue('M'.$i, $row['namalengkap']);
		$sheet->setCellValue('N'.$i, $row['jk']);
		$sheet->setCellValue('O'.$i, $row['nisn']);
		$sheet->setCellValue('P'.$i, $row['nik']);
		$sheet->setCellValue('Q'.$i, $row['tempatlahir']);
		$sheet->setCellValue('R'.$i, $row['tgllahir']);
		$sheet->setCellValue('S'.$i, $row['agama']);
		$sheet->setCellValue('T'.$i, $row['bkpribadi']);
		$sheet->setCellValue('U'.$i, $row['alamat']);
		$sheet->setCellValue('V'.$i, $row['rt']);
		$sheet->setCellValue('W'.$i, $row['rw']);
		$sheet->setCellValue('X'.$i, $row['namadusun']);
		$sheet->setCellValue('Y'.$i, $row['namadesa']);
		$sheet->setCellValue('Z'.$i, $row['kecamatan']);
		$sheet->setCellValue('AA'.$i, $row['kdpos']);
		$sheet->setCellValue('AB'.$i, $row['tinggal']);
		$sheet->setCellValue('AC'.$i, $row['transportasi']);
		$sheet->setCellValue('AD'.$i, $row['nohp']);
		$sheet->setCellValue('AE'.$i, $row['notelp']);
		$sheet->setCellValue('AF'.$i, $row['email']);
		$sheet->setCellValue('AG'.$i, $row['penkip']);
		$sheet->setCellValue('AH'.$i, $row['nokip']);
		$sheet->setCellValue('AI'.$i, $row['kwn']);
		$sheet->setCellValue('AJ'.$i, $row['namaayah']);
		$sheet->setCellValue('AK'.$i, $row['namaibu']);
		$i++;
	}

	$styleArray = [
		'borders' => [
			'allBorders' => [
				'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
			],
		],
	];
	$i = $i - 1;
	$sheet->getStyle('A1:AK'.$i)->applyFromArray($styleArray);

	$writer = new Xlsx($spreadsheet);
	$writer->save('Report Data Siswa.xlsx');
	header("location:tersimpan.php");
?>