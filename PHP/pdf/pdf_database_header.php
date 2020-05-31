<?php
include "class.ezpdf.php";
$pdf = new Cezpdf();

$pdf->ezSetCmMargins(3, 3, 3, 3);

// Tampilkan Gambar
$pdf->setStrokeColor(0, 0, 0, 1);
$pdf->addJpegFromFile('logo.jpg', 20, 800, 69);

// Teks di tengah atas untuk judul header
$pdf->addText(220, 820, 16, '<b>Data Mahasiswa</b>');
$pdf->addText(100, 800, 14, '<b>PENS</b>');

// Garis untuk header
$pdf->line(10, 795, 578, 795);

mysql_connect("localhost", "root", "");
mysql_select_db("trikphp");

$sql=mysql_query("SELECT * FROM mahasiswa");

$i=1;
while($r=mysql_fetch_array($sql)){
    $data[$i]=array('No'=>$i
                    , 'Nama Mahasiswa'=>$r[nama]
                    , 'JK'=>$r[jk]
                    , 'Alamat'=>$r[alamat]);
    $i++;
}
$pdf->ezTable($data, '', 'Data Mahasiswa', '');
$pdf->ezStream();
?>