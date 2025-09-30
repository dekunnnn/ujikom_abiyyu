<!DOCTYPE html>
<html>
<head>
    <title>CRUD DATA FILM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
        h2, h3 {
            text-align: center;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
        }
        input[type="text"], input[type="file"], input[type="submit"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .back-button {
            display: block;
            text-align: center;
            text-decoration: none;
            background-color: #555;
            color: white;
            padding: 10px 0;
            border-radius: 4px;
            margin-top: 10px;
        }
        .back-button:hover {
            background-color: #333;
        }
    </style>

</head>
<body>

    <div class="container">
        <h3>TAMBAH DATA FILM</h3>

        <form method="POST" action="aksi_create.php" enctype="multipart/form-data">

            <table>
                <tr>
                    <td><label for="img">Gambar</label></td>
                    <td><input type="file" id="img" name="img" accept="image/*"></td>
                </tr>

                <tr>
                    <td><label for="title">Judul</label></td>
                    <td><input type="text" id="title" name="title" required></td>
                </tr>

                <tr>
                    <td><label for="time">Tanggal</label></td>
                    <td><input type="text" id="time" name="time" placeholder="YYYY-MM-DD" required></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" value="SIMPAN">
                    </td>
                </tr>

            </table>
        </form>

                      <a href="admin.php" class="back-button">KEMBALI</a>

    </div>
    
</body>
</html>