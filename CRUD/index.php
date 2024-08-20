<?php
require_once __DIR__ . "/function.php";


if(isset($_POST['tambahData'])) {
  $tugas = $_POST['tugas'];
  $deadline = $_POST['deadline'];
  
  tambahData($tugas, $deadline);
  header("location: index.php");
}
if(isset($_GET['id'])) {
  $id = $_GET['id'];

  hapusData($id);
  header("location: index.php");
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav icon-->
    <link rel="icon" type="image/png"  href="https://img.icons8.com/ios-glyphs/32/0d6efd/xbox-b.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="bootstrap.css">

    <title>Website Todolist</title>
  </head>
  <body id="home">

    <!-- Navbar -->
    <div class="w-20 p-2" style="background-color: white;">Width 25%</div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Risu Studio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavALtMarkUp">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-uppertcase fs-6 active" aria-current="page" href="Home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppertcase fs-6" aria-current="page" href="Portfolio.html">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppertcase fs-6" aria-current="page" href="Team.html">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppertcase fs-6" aria-current="page" href="Contact.html">Contact</a>
              <li class="nav-item">
                <a class="nav-link text-uppertcase fs-6" aria-current="page" href="#">To do List</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->
  <div class="container">
   <div class="card" style="margin-top: 70px;">
   <div class="card-header">
   Mau apa?
  </div>
   <div class="card-body">
   <form action="" method="POST">
  <div class="mb-3">
    <label for="tugas" class="form-label">Tugas</label>
    <input type="text" name="tugas" class="form-control" id="tugas" required>
  </div>
  <div class="mb-3">
    <label for="deadline" class="form-label">Deadline</label>
    <input type="date" name="deadline" class="form-control" id="deadline" required>
  </div>
  <button type="submit" name="tambahData" class="btn btn-primary">Submit</button>
</form>
<p></p>
  <div class="card">
   <div class="card-body">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tugas</th>
      <th scope="col">Deadline</th>
      <th scope="col">Change or Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $nomor = 1;
    foreach (ambilData() as $data) { ?>
    <tr>
      <th scope="row"><?php echo $nomor++?></th>
      <td><?php echo $data['nama_tugas']?></td>
      <td><?php echo date("d F Y", strtotime($data['deadline']))?></td>
      <td>
      <a href="edit.php?id=<?php echo $data ['id'] ?>"><button class="btn btn-secondary">Edit</button>
      <a href="?id=<?php echo $data['id'] ?>" onclick="return confirm('are you willing to delete the data?')"><button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <?php } ?>
  </tbody>
    </table>
   </div>
  </div> 
   </div>
  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>