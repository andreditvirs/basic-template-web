<!-- mysql_query()
    digunakan untuk menjalankan query pada database SQL -->
<?php
    mysql_query("SELECT * FROM tKomentar");
?>

<!-- mysql_connect()
    digunakan untuk menghubungkan file php dengan database MySQL -->
<?php
    mysql_connect("localhost", "root", "123456");
?>

<!-- mysql_close()
    digunakan untuk memutus hubungan dengan
    database MySQL -->
<?php
    mysql_close(connection);
?>

<!-- mysql_select_db()
    digunakan untuk memilih database MySQL yang akan digunakan -->
<?php
    mysql_select_db("dbasfamedia");
?>

<!-- mysql_num_rows()
    digunakan untuk menghitung seluruh data 
    yang terdapat pada suatu tabel dalam database -->
<?php
    mysql_num_rows(mysql_query(
        "SELECT * FROM tkomentar"
    ));
?>

<!-- mysql_affected_rows()
    digunakan untuk mendapatkan jumlah record
    yang dihasilkan dari operasi MySQL sebelumnya -->
<?php
    mysql_query("DELETE FROM tKomentar WHERE id < 5");
    $a = mysql_affected_rows();
    echo "Jumlah record terhapus : $a";
?>