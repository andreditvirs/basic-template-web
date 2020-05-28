<?php
include "class.ezpdf.php";
$pdf = new Cezpdf();

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