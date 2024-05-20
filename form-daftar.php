<!DOCTYPE html>	 
<html>	 
 	
<head>		
    <title>Formulir Pendaftaran Siswa Baru</title>
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
    <form action="proses-pendaftaran.php" method="POST">

            <label for="nama">Nama :</label>
            <input type="text" class="form-control" id="nama" placeholder="" name="nama" required/>
            
            <label for="alamat">Alamat :</label>
            <textarea class="form-control" placeholder="" id="alamat" name="alamat" required></textarea>
        
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <select class="form-select" id="jk" aria-label="jenis_kelamin" name="jenis_kelamin" required>
                <option>-</option>
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
            </select>

            <label for="agama">Agama :</label>
            <select class="form-select" id="agama" aria-label="agama" name="agama" required>
                <option>-</option>
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
                <option value="konghucu">Konghucu</option>
            </select>
        
            <label for="sekolah_asal">Sekolah Asal :</label>
            <input type="text" class="form-control" id="sekolah_asal" placeholder="" name="sekolah_asal" required/>
            
            <input type="submit" class="bg-secondary rounded mt-3" value="Daftar" name="daftar" />
    </form> 
    </div>
 
    </body>
</html>	 
