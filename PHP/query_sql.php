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

<!-- mysql_fetch_array()
    digunakan untuk mendapatkan data berdasarkan nama field -->
<?php
    $sql = mysql_query("SELECT * FROM tKomentar");
    while ($data = mysql_fetch_array($sql)){
        echo "$data[id] | $data[nama] | $data[komentar]";
    }
?>

<!-- mysql_fetch_row()
    digunakan untuk mendapatkan data berdasarkan kolom field -->
<?php
    $sql = mysql_query("SELECT * FROM tKomentar");
    while ($data = mysql_fetch_row($sql)){
        echo "$data[0] | $data[1] | $data[2]";
    }
?>

<!-- mysql_fetch_object()
    digunakan untuk mendapatkan data dan menjadikannya sebagai objek -->
<?php
    $sql = mysql_query("SELECT * FROM tKomentar");
    while ($data = mysql_fetch_object($sql)){
        echo "$data->id | $data->nama | $data->komentar";
    }
?>

<!-- mysql_field_name()
    digunakan untuk mendapatkan informasi nama field dalam suatu tabel -->
<?php
    $sql = mysql_query("SELECT * FROM tKomentar");
    $data = mysql_field_name($sql, 0);
    echo $data;
?>

<!-- mysql_num_fields()
    digunakan untuk mendapatkan informasi jumlah field pada suatu tabel -->
<?php
    $sql = mysql_query("SELECT * FROM tKomentar");
    echo mysql_num_fields($sql);
?>