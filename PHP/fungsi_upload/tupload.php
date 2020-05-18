<?php
// ubah dke dalam bentuk variabel
$judul = $_POST['judul'];
$Fl = $_FILES['F1']['tmp_name'];
$Fl_name = $_FILES['Fl']['name'];
$Fl_type = $_FILES['Fl']['type'];
$Fl_size = $_FILES['Fl']['size'];

// pindah file ke folder file
$move = move_uploaded_file($Fl, 'file/'.$Fl_name);
if($move){
    // tampilkan file yang telah di upload
    echo "<h4><b> Berhasil disimpan </b></h4>";
    echo " Judul : <b> $judul </b><br>";
    echo " Name : <b> $Fl_name </b><br>";
    echo " Type : <b> $Fl_type </b><br>";
    echo " Size : <b> $Fl_size </b><br>";
} // jika upload gagal
else{
    echo "Gagal diupload";
}
?>