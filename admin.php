
<?php
include "function.php";  //
$films = getDataFilms(); //mengambil data film dari fungsi get & disimpan di films
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="web.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!--pembuka navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top navbar">

    <div class="container">
           <div class="navbar">
           <div class="logo1">YUFILM
           </div>
    </div>

    <div class="navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      

          <div class="log">
            <a href="create.php">
              <button type="button" class="btn btn-danger custom-button w-100 fw-bold"><i 
              class="fa-solid fa-pen"></i> Tambah</button>
            </a>
          </div>

       
    
    <div class="log">
           <a href="index.php">
                <button type="button" class="btn btn-danger custom-button w-100 fw-bold"><i
                 class="fa-solid fa-right-to-bracket"></i> Logout</button>
           </a>
    </div>
    
    </ul>
      </div>
        
</nav>
    <!--penutup navbar-->

    <!--pembuka content-->
 
    <br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-3"></div>
    <div class="col-md-6">
       
        <div class="container">
            <form action="function.php" class="d-flex" method="post">
                <input type="text" class="form-control  me-2" name="user_query" size="100" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword" />
                <input type="submit" name="search" value="Cari Film" class="btn btn-light text-dark fw-bold" id="tombol-cari"/>
            </form>
        </div>

    </div>
    </div>

    <br>
    <br>

    <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <div class="container my-5">
      <div class="row d-flex justify-content-center">

        <?php foreach ($films as $film): ?>

    <div class="col-md-4 my-3">
      <div class="card border h-50" width="500px">

        <img src="<?= $film['img'] ?>" class="card-img-top" alt="..." height="240" width="100%">
            <div class="card-body">
               <h5 class="card-title"><?= $film['title']; ?></h5>
               <p class="card-text"><?= $film['time'] ?></p>
            </div>

            <div class="card-footer border d-flex justify-content-center">
    <small class="text-body-secondary">
        <a href="update.php?id=<?php echo $film['id']; ?>" class="btn btn-warning btn-sm me-2">EDIT</a>
        <a href="delete.php?id=<?php echo $film['id']; ?>" class="btn btn-danger btn-sm">HAPUS</a>
    </small>
</div>

      </div>
    </div>

         <?php endforeach; ?>

      </div>
    </div>

         </body>
     </html>
</body>

</html>

