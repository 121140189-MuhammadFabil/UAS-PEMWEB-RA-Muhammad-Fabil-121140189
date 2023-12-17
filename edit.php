<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM data_mahasiswa WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
            margin-bottom: 5px;
            color: #333;
        }

        input, select {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .radio-group {
            display: flex;
            margin-bottom: 15px;
        }

        .radio-group input {
            margin-right: 5px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Mahasiswa</h2>
        <form id="editForm" action="update.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>

            <label for="prodi">Program Studi:</label>
            <input type="text" id="prodi" name="prodi" value="<?php echo $row['prodi']; ?>" required>

            <label>Jalur Penerimaan:</label>
            <div class="radio-group">
                <input type="radio" id="snmptn" name="jalur" value="SNMPTN" <?php echo ($row['jalur'] === 'SNMPTN') ? 'checked' : ''; ?> required> SNMPTN
                <input type="radio" id="sbmptn" name="jalur" value="SBMPTN" <?php echo ($row['jalur'] === 'SBMPTN') ? 'checked' : ''; ?>> SBMPTN
                <input type="radio" id="mandiri" name="jalur" value="Mandiri" <?php echo ($row['jalur'] === 'Mandiri') ? 'checked' : ''; ?>> Mandiri
            </div>

            <label for="angkatan">Angkatan:</label>
            <select id="angkatan" name="angkatan">
                <option value="2018" <?php echo ($row['angkatan'] === '2018') ? 'selected' : ''; ?>>2018</option>
                <option value="2019" <?php echo ($row['angkatan'] === '2019') ? 'selected' : ''; ?>>2019</option>
                <option value="2020" <?php echo ($row['angkatan'] === '2020') ? 'selected' : ''; ?>>2020</option>
                <option value="2021" <?php echo ($row['angkatan'] === '2021') ? 'selected' : ''; ?>>2021</option>
                <option value="2022" <?php echo ($row['angkatan'] === '2022') ? 'selected' : ''; ?>>2022</option>
                <option value="2023" <?php echo ($row['angkatan'] === '2023') ? 'selected' : ''; ?>>2023</option>
                
            
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
