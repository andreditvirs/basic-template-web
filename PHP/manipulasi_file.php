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

<!-- fgets(var file)
    digunakan untuk membuka baris per baris file yang dibuka -->

<?php
    echo fgets($file);
?>

<!-- feof(file)
    digunakan untuk memeriksa akhiran dari suatu file -->

<?php
    while(!feof($file)){
        echo fgets($file). "<br>";
    }
?>

<!-- fgetc(var file)
    digunakan untuk membaca karakter per karakter file yang dibuka -->

<?php
    echo fgetc($file);
?>

<!-- file_exists(path)
    digunakan untuk mengecek/memeriksa ada atau tidaknya sebuah file -->

<?php
    $file = "file/file.txt";
    if(file_exists($file)){
        echo "Ada file nya";
    }else{
        echo "Filenya tidak ada";
    }
?>

<!-- fputs(var file, tulisan baru)
    digunakan untuk menuliskan/menambahkan teks pada file
    yang dibuka. Disamping fputs ada perintah dengan fungsi
    yang sama yakni fwrite() -->

<?php
    fputs($file, "Tulisan baru");
?>

<!-- file(path)
    digunakan untuk membaca file kemudian memasukkannya ke dalam
    bentuk array -->

<?php
    print_r(file("file.txt")); // Hasil outputnya array([0] => Tulisan baru)
?>

<!-- fstat(var file)
    digunakan untuk mengetahui informasi dari sebuah file -->

<?php
    print_r(fstat($file));
?>

<!-- fread(var file, panjang)
    digunakan untuk mengetahui informasi dari sebuah file -->

<?php
    fread($file, "10");
?>

<!-- copy(pathAsal, pathTujuan)
    digunakan untuk mengcopy sebuah file menjadi file lain -->
<?php
    echo copy("file1.txt", "file2.txt");
?>

<!-- unlink(var file)
    digunakan untuk menghapus sebuah file -->
<?php
    $file = "file.txt";
    unlink($file);
?>

<!-- disk_free_space(path)
    digunakan untuk menampilkan informasi sisa ruang (space)
    dalam satuan bytes untuk direktori tertentu -->
<?php
    echo disk_free_space("C:");
?>

<!-- is_dir(var file)
    digunakan untuk memeriksa apakah file tersebut merupakan
    suatu direktori atau bukan -->
<?php
    $file = "gambar";
    if(is_dir($file)){
        echo "Direktori File";
    }else{
        echo "Bukan Direktori";
    }
?>

<!-- mkdir(nama file baru)
    digunakan untuk membuat direktori -->
<?php
    mkdir("file");
?>

<!-- rename(nama file, nama file baru)
    digunakan untuk merubah nama suatu file atau direktori -->
<?php
    rename("gambar", "file");
?>

