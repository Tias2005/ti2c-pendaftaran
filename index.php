<!DOCTYPE html>	 
<html>	 
 	
<head>		
    <title>Pendaftaran Siswa Baru</title>
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
        <a class="nav-link text-secondary" href="form-daftar.php">Pendaftaran</a>
        <a class="nav-link text-secondary" href="list-siswa.php">List Siswa</a>
      </div>
    </div>
  </div>
</nav>
 

<div class="container text-center text-white my-5 fw-bold">
        <h1>"Hello World"</h1>
</div>

<div class="container text-center text-white my-5">
  <p style="margin-left: 50px; margin-right: 50px;">
  Selamat datang di laman web Digital Talent. <br>
  Silahkan mengisi data diri pada menu PENDAFTARAN. <br> 
  Lihat nama Anda pada menu LIST SISWA. <br>
  </p>
</div>

    <?php if(isset($_GET['status'])): ?>	
        <p class="bg-light text-primary-emphasis fw-bold bg-opacity-75 rounded p-3 text-center" style="margin-left: 400px; margin-right: 400px ;">	 
        <?php	 
            if($_GET['status'] == 'sukses'){	 
                echo "Pendaftaran siswa baru berhasil!";
            } else {	 
                echo "Pendaftaran gagal!";
            }	 
        ?>	 	
    </p>	 		
<?php endif; 
?>	 

</body>
</html>	 
