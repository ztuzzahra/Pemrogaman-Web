<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1','id');
$sheet->setCellValue('B1','namalengkap');
$sheet->setCellValue('C1','jeniskelamin');
$sheet->setCellValue('D1','nisn');
$sheet->setCellValue('E1','nik');
$sheet->setCellValue('F1','tempatlahir');
$sheet->setCellValue('G1','tanggallahir');
$sheet->setCellValue('H1','noakta');
$sheet->setCellValue('I1','agama');
$sheet->setCellValue('J1','kewarganegaraan');
$sheet->setCellValue('K1','berkebutuhankhusus');
$sheet->setCellValue('L1','alamatjalan');
$sheet->setCellValue('M1','rt');
$sheet->setCellValue('N1','rw');
$sheet->setCellValue('O1','namadusun');
$sheet->setCellValue('P1','desa');
$sheet->setCellValue('Q1','kecamatan');
$sheet->setCellValue('R1','kodepos');
$sheet->setCellValue('S1','lintang');
$sheet->setCellValue('T1','bujur');
$sheet->setCellValue('U1','tempattinggal');
$sheet->setCellValue('V1','modatransportasi');
$sheet->setCellValue('W1','nomorkks');
$sheet->setCellValue('X1','anakke');
$sheet->setCellValue('Y1','kpskph');
$sheet->setCellValue('Z1','nokpskph');

$query = mysqli_query($koneksi,"select * from form");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
$sheet->setCellValue('A'.$i,$no++);
$sheet->setCellValue('B'.$i,$row['namalengkap']);
$sheet->setCellValue('C'.$i,$row['jeniskelamin']);
$sheet->setCellValue('D'.$i,$row['nisn']);
$sheet->setCellValue('E'.$i,$row['nik']);
$sheet->setCellValue('F'.$i,$row['tempatlahir']);
$sheet->setCellValue('G'.$i,$row['tanggallahir']);
$sheet->setCellValue('H'.$i,$row['noakta']);
$sheet->setCellValue('I'.$i,$row['agama']);
$sheet->setCellValue('J'.$i,$row['kewarganegaraan']);
$sheet->setCellValue('K'.$i,$row['berkebutuhankhusus']);
$sheet->setCellValue('L'.$i,$row['alamatjalan']);
$sheet->setCellValue('M'.$i,$row['rt']);
$sheet->setCellValue('N'.$i,$row['rw']);
$sheet->setCellValue('O'.$i,$row['namadusun']);
$sheet->setCellValue('P'.$i,$row['desa']);
$sheet->setCellValue('Q'.$i,$row['kecamatan']);
$sheet->setCellValue('R'.$i,$row['kodepos']);
$sheet->setCellValue('S'.$i,$row['lintang']);
$sheet->setCellValue('T'.$i,$row['bujur']);
$sheet->setCellValue('U'.$i,$row['tempattinggal']);
$sheet->setCellValue('V'.$i,$row['modatransportasi']);
$sheet->setCellValue('W'.$i,$row['nomorkks']);
$sheet->setCellValue('X'.$i,$row['anakke']);
$sheet->setCellValue('Y'.$i,$row['kpskph']);
$sheet->setCellValue('Z'.$i,$row['nokpskph']);
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
$sheet->getStyle('A1:Z'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('data fiks.xlsx');
?>