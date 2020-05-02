<!-- fopen(filename, mode, include_path, context)
    digunakan untuk membuka sebuah file atau URL dalam dokumen PHP. 
    File yang bisa dibua, bisa yang mempunyai ekstensi .doc, .xls, .php, .html, .htm, dll.
    fopen memiliki beberapa parameter (mode) yang dapat kita gunakan, diantaranya
    r : read only
    r+ : read/write
    w : write only (data yang lama dihapus, diganti dengan data yang baru)
    w+ : read/write
    a : append (menambahkan data)
    a+ : read/append
    x : write only
    x+ : read/write -->

<?php
    $file = fopen("file.txt", "r");
?>

<!-- fclose(var file)
    digunakan untuk menutup perintah open -->

<?php
    fclose($file)
?>