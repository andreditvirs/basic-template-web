<?php
// Dibuat menggunakan class.pdf.php dari Ezpdf
// Panggil (include class ezPDF)
include "class.ezpdf.php";

// Buat objek PDF
$pdf = new Cezpdf();

// Tampilkan teks
$pdf->ezText("\n TEXT HERE");

// Tampilkan dokumen PDF di browser
$pdf->ezStream();
?>