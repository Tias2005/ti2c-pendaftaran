<?php
include("config.php");

if( !isset($_GET['id']) ){
 header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
   }
   ?>

 
<!DOCTYPE html>

<html>
<head>
 <title>Formulir Edit Siswa</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body style="background-image: url('bg.jpg'); background-size: 2000px; background-position: center;">
<nav class="navbar navbar-expand-lg bg-black bg-gradient">
    <div class="container-fluid">
        <a class="navbar-brand text-white my-3" href="#"><h1>DIGITAL TALENT</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active text-secondary" aria-current="page" href="index.php">Home</a>
            <a class="nav-link text-secondary" href="form-daftar.php">Daftar</a>
            <a class="nav-link text-secondary" href="list-siswa.php">List Siswa</a>
        </div>
        </div>
    </div>
    </nav>

    <div class="w-50 mx-auto border bg-dark bg-opacity-75 text-white p-3 mt-4">
    <form action="proses-edit.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>"/>

            <label for="nama">Nama :</label>
            <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="<?php echo $siswa['nama'] ?>"/>
            
            <label for="alamat">Alamat :</label>
            <textarea class="form-control" placeholder="" id="alamat" name="alamat" <?php echo $siswa['alamat'] ?>></textarea>
        
            <label for="jk">Jenis Kelamin :</label> <?php $jk = $siswa['jenis_kelamin']; ?>
            <select name="jenis_kelamin" class="form-select">
                <option>-</option>
                <option <?php echo ($jk == 'laki-laki') ? "selected": "" ?>>Laki-laki</option>
                <option <?php echo ($jk == 'perempuan') ? "selected": "" ?>>Perempuan</option>
            </select>

            <label for="agama">Agama :</label> <?php $agama = $siswa['agama']; ?>
            <select name="agama" class="form-select">
                <option>-</option>
                <option <?php echo ($agama == 'islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'konghucu') ? "selected": "" ?>>Konghucu</option>
            </select>
        
            <label for="sekolah_asal">Sekolah Asal :</label>
            <input type="text" class="form-control" id="sekolah_asal" placeholder="" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>" />

            <input type="submit" class="bg-secondary mt-3 rounded" value="Simpan" name="simpan" />
    </form>
 
</body>
</html>