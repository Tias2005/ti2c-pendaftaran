<?php include("config.php"); ?>  
<!DOCTYPE html>
<html>	 
 
<head>	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title></title>
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

    <div class="container">
      <table class="table table-striped table-hover table-bordered mt-5">
        <thead class="table-dark">
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Sekolah Asal</th>
          <th>Tindakan</th>
        </thead>

        <?php	 			
          $sql = "SELECT * FROM calon_siswa";
          $query = mysqli_query($db, $sql);
  
          while($siswa = mysqli_fetch_array($query)){
              echo "<tr>";	 
              echo "<td>".$siswa['id']."</td>";
              echo "<td>".$siswa['nama']."</td>";
              echo "<td>".$siswa['alamat']."</td>";
              echo "<td>".$siswa['jenis_kelamin']."</td>";
              echo "<td>".$siswa['agama']."</td>";
              echo "<td>".$siswa['sekolah_asal']."</td>";
          
              echo "<td>";	 
              echo "<a class='btn btn-success' href='form-edit.php?id=".$siswa['id']."'>Edit</a> ";
              echo "<a class='btn btn-primary' href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
              echo "</td>";
              echo "</tr>";
              }	 
        ?>		 
    </table>

    <div class="bg-white bg-opacity-75 text-black fw-bold text-center rounded" style="margin-right: 1000px;">
    <p>Total : <?php echo mysqli_num_rows($query) ?></p>
    </div>

    </div>

    </body>
</html>	 
