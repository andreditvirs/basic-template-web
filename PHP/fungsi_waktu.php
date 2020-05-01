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

<!-- 3. date_default_timezone_set('zona daerah')
    digunakan untuk menentukan/menerapkan zona waktu. Berdasarkan daerah dimana Anda tinggal -->

<?php
    echo (date_default_timezone_set("Asia/Jakarta"));
?>

<!-- 4. getdate(timestamp)
    digunakan untuk memperoleh informasi mengenai tanggal dan waktu saat ini dalam bentuk array 
    yang dimaksud timestamp adalah : 
    [hours]     = jam
    [minutes]   = menit
    [seconds]   = detik
    [mday]      = hari dalam satu bulan
    [wday]      = hari dalam satu minggu
    [year]      = tahun
    [yday]      = hari dalam satu tahun[weekday] ("Sunday, Monday, ...")
    [month]     = nama bulan dalam satu tahun ("January", ... )-->

<?php
    $tgl = getdate();
    print("$tgl[weekday], $tgl[mday], $tgl[month], $tgl[year]");

?>

<!-- 5. idate(format ,timestamp)
    digunakan untuk men-set waktu dan tanggal lokal ke dalam bentuk integer (bilangan bulat) sehingga tanggal
    yang mengandung format string, tidak akan ditampilkan -->

<?php
    $idate = idate("Y");
    echo "$idate";
?>

<!-- 6. strtotime(time, now)
    digunakan untuk merubah tipe string menjadi format penanggalan / waktu -->

<?php
    $date = date('F-d-Y', strtotime('3-9-2009'));
    echo "$date";
?>

<?php
    $sekarang = date("d-m-Y");
    $besok = date('d-m-Y', strtotime('-34 day'));
    echo "$besok";
?>


