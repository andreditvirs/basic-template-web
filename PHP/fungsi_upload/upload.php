<?php
$n = $_POST['n'];

// setting nama folder tempat upload
$uploadDir ='data/';

for ($i=0; $i<=$n-1; $i++){
    // membaca nama file yang diupload
    $fileName = $_FILES['userfile'.$i]['nmae'];

    // membaca ukuran file yang diupload
    $fileSize = $_FILES['userfile'.$i]['size'];

    // nama file temporary yang akan disimpan di server
    $tmpName = $_FILES['userfile'.$i]['tmp_name'];

    // menggabungkan nama folder dan nama file
    $uploadFile = $uploadDir.$fileName;

    // proses upload file ke folder 'data'
    if($fileSize>0){
        if(move_uploaded_file($tmpName, $uploadFile)){
            echo "File ".$fileName." telah diupload<br>";
        }else{
            echo "File ".$fileName." gagal diupload<br>";
        }
    }
}
?>