<!-- MENGENAL FUNGSI WAKTU -->
<!-- 1. checkdate(bulan, hari, tahun) 
    digunakan untuk memeriksa keabsahan tanggal dan waktu (Boolean) -->

<?php
    var_dump(checkdate(12,31,2000));
    var_dump(checkdate(2,39,2003));
?>

<!-- 2. date('fungsi tanggal')
    digunakan untuk menampilkan waktu saat ini 
    Format
        a = "am/pm"
        A = "AM/PM"
        B = swatch internet time
        d = day of the month (01 - 31)
        D = day of the week ("Fri")
        F = month ("January")
        Y = year 4 digits
        m = month (01 -12)
        M = month ("Apr")
        n = month tanpa ada awalan nol (1 -12) -->

<?php
    $waktu = date('Y-m-d');
    echo "$waktu";
?>

