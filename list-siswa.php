<?php
include ("config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title> Pendaftaran Siswa Baru </title>
</head>

<body>
    <header>
        <h3 style="text-aligment:center"> List Daftar Siswa yang sudah mendaftar </h3>
    </header>

<nav>
    <a href="form-daftar.php" style="text-aligment:center"> [+] Tambah Siswa Baru </a>
</nav>
<br>
<table border ="1">
    <thead>
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama </th>
            <th> Sekolah Asal </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while ($siswa = mysqli_fetch_array($query))
            {
                echo "<tr>";
                echo "<td>".$siswa['id']."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";

                echo "<td>";
                echo "<a href = 'form-edit.php?id=".$siswa['id']."'>Edit</a>  | ";
                echo "<a href = 'hapus.php?id=".$siswa['id']."'>Hapus </a>;";
                echo "</td>";

                echo "</tr>";
            }
            ?>
    </tbody>
</table>
<p> Total : <?php echo mysqli_num_rows($query)  ?></p>
</body>
</html>