<!DOCTYPE html>
<html>
<head>
    <title>CRUD DATA FILM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            display: inline-block;
            padding: 10px 15px;
            margin-bottom: 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
            transition: background 0.3s;
        }
        a:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            text-align: center;
            padding: 12px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .action-buttons a {
            padding: 5px 10px;
            margin: 0 5px;
            color: white;
            border-radius: 4px;
            transition: background 0.3s;
        }
        .action-buttons a:first-child {
            background-color: #ffa500; /* Edit */
        }
        .action-buttons a:first-child:hover {
            background-color: #e69500;
        }
        .action-buttons a:last-child {
            background-color: #f44336; /* Delete */
        }
        .action-buttons a:last-child:hover {
            background-color: #d32f2f;
        }
    </style>

</head>
<body>

    <div class="container">
        <h2> DATA FILM</h2>
        <a href="create.php">+ TAMBAH FILM</a>
        <a href="admin.php">- kembali</a>

        <table>
            <tr>
                <th>NO</th>
                <th>Gambar</th>
                <th>Title</th>
                <th>Tanggal</th>
                <th>OPSI</th>
            </tr>

            <?php 
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM films");
            while ($d = mysqli_fetch_array($data)) {
            ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><img src="<?php echo $d['img']; ?>" alt="img" style="width: 100px; height: auto;"></td>
                <td><?php echo $d['title']; ?></td>
                <td><?php echo $d['time']; ?></td>
                <td class="action-buttons">
                    <a href="update.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="delete.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">HAPUS</a>
                </td>
            </tr>

            <?php 
            }
            ?>

        </table>
    </div>
    
</body>
</html>