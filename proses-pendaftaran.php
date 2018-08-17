<?php

include ("config.php");
//cek apakah tombol daftar telah ditekan atau belum
if (isset ($_POST['daftar']))
    {
        //ambil nama dari formulir
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST ['jenis_kelamin'];
        $agama = $_POST ['agama'];
        $sekolah_asal = $_POST ['sekolah_asal'];
        //buat query
        $sql = "INSERT INTO calon_siswa (nama,alamat,jenis_kelamin,agama,sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin','$agama','$sekolah_asal')";
        $query = mysqli_query($db, $sql);
        //apakah query simpan berhasil ?
        if ($query)
        {
            //jika berhasil maka alihkan ke halaman index dengan status sukses
            header ('location: konfirmasi-daftar.php?status=sukses');
        }
        else    
        {
                //jika gagal maka alihkan ke halaman index dengan status gagal
            header('location:konfirmasi-daftar.php?status=gagal');
            }
        
        }
        else {
    die("akses dilarang...");
}
?>