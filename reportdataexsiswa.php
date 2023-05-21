<?php
include('koneksi.php');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Kelas');
$sheet->setCellValue('D1', 'Alamat');
$sheet->setCellValue('E1', 'Umur');
$sheet->setCellValue('F1', 'Cita - Cita');

$query = mysqli_query($koneksi, "SELECT * FROM tb_siswabaru");
$i = 2;
$no = 1;

while($row = mysqli_fetch_array($query))
{
    $sheet->setCellValue('A'.$i, $no++);
    $sheet->setCellValue('B'.$i, $row['nama']);
    $sheet->setCellValue('C'.$i, $row['kelas']);
    $sheet->setCellValue('D'.$i, $row['alamat']);
    $sheet->setCellValue('E'.$i, $row['umur']);
    $sheet->setCellValue('F'.$i, $row['cita']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$i = $i-1;
$sheet->getStyle('A1:F'.$i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa Baru.xlsx');
?>