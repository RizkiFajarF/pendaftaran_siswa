<!DOCTYPE html>
<html>
<head>
<title> Formulir Pendaftaran Siswa Baru Kursus Coding </title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action = "proses-pendaftaran.php" method = "POST">

        <fieldset>
        <p>
            <label for = "nama">Nama: </label>
            <input type = "text" name = "nama" placeholder = "nama lengkap" />
        </p>
        <p>
            <label for = "alamat"> Alamat </label>
            <textarea name = "alamat" placeholder = "alamat lengkap"></textarea>
        </p>
        <p> 
            <label for = "jenis_kelamin"> Jenis Kelamin</label>
            <input type = "radio" name = "jenis_kelamin" value = "laki-laki"> Laki - Laki </label>
            <input type = "radio" name = "jenis_kelamin" value = "perempuan"> Perempuan </label>
        </p>
        <p>
            <label for "agama"> Agama </label>
            <select name = "agama">
                <option> Islam </option>
                <option> Kristen </option>
                <option> Hindu </option>
                <option> Budha </option>
                <option> Kepercayaan </option>
            </select>
        </p>
        <p>
            <label for = "sekolah_asal">Sekolah Asal : </label>
            <input type = "text" name = "sekolah_asal" placeholder = "nama sekolah saat ini" />
        </p>
        <p>
            <input type = "submit" value = "Daftar" name = "daftar" />
        </p>
        </fieldset>
    </form>
</body>
</html>
