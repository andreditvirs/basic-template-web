<?php
// Buat class paging untuk mahasiswa
class Pagging{
    // Fungsi untuk mencek halaman dan posisi data
    function cariPosisi($batas){
        if(empty($_GET[halaman])){
            $posisi=0;
            $_GET[halaman]=1;
        }else{
            $posisi=($_GET[halaman]-1)*$batas;
        }
    return $posisi;
    }

    // Fungsi untuk menghitung total halaman
    function jumlahHalaman($jmldata, $batas){
        $jmlhalaman=ceil($jmldata/$batas);
        return $jmlhalaman;
    }
}
?>