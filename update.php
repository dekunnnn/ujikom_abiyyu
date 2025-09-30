<!DOCTYPE html>
<html>
<head>
    <title>Update Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

<div class="container mt-5">
    <div class="card shadow">

        <div class="card-header text-center">
                <h3>Edit Film</h3>
        </div>

        <div class="card-body">
        <?php
        include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM films WHERE id = '$id'");
            $d = mysqli_fetch_array($data);
        ?>

            <form method="POST" action="aksi_update.php">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar"  accept="image/" value="<?php echo $d['img']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo $d['title']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="time" class="form-label">Tanggal</label>
                        <input type="text" class="form-control" id="time" name="time" value="<?php echo $d['time']; ?>" required>
                    </div>

                    <div class="text-end">
                        <a href="admin.php" class="btn btn-secondary me-2">Batal</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>

            </form>
        
         </div>
       </div>
    </div>
</body>
</html>