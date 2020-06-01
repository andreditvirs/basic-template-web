<?php
// Nama file Excel
$date = date('Ymd-his');
$namaFile = "report".$date."xls";

// Fungsi penanda awal
function xlsBOF(){
    echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
    return;
}

?>