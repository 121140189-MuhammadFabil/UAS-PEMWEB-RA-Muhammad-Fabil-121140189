<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Form Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h2>Form Mahasiswa</h2>
        <form id="mahasiswaForm" action="proses.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="prodi">Program Studi:</label>
            <input type="text" id="prodi" name="prodi" required>

            <label>Jalur Penerimaan:</label>
            <div class="radio-group">
                <input type="radio" id="snmptn" name="jalur" value="SNMPTN" required> SNMPTN
                <input type="radio" id="sbmptn" name="jalur" value="SBMPTN"> SBMPTN
                <input type="radio" id="mandiri" name="jalur" value="Mandiri"> Mandiri
            </div>

            <label for="angkatan">Angkatan:</label>
            <select id="angkatan" name="angkatan">
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit" name="submit">Submit</button>
        </form>

       <!-- ... (Bagian-bagian HTML sebelumnya) -->

<div id="tableContainer">
    <h3>Data Mahasiswa</h3>
    <table id="dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Jalur Penerimaan</th>
                <th>Angkatan</th>
                <th>Email</th>
                <th>Browser</th>
                <th>IP Adress</th>
                <th>Time Stamp</th>
                <th>Aksi</th> <!-- Kolom baru untuk Aksi -->
            </tr>
        </thead>
        <tbody>
            <?php
            // TODO: Fetch data from server and populate the table
            // ...

            // Example loop for displaying data
            if (isset($data) && is_array($data)) {
                for ($i = 0; $i < count($data); $i++) {
                    echo "<tr>";
                    echo "<td>" . ($i + 1) . "</td>";
                    echo "<td>" . $data[$i]['nama'] . "</td>";
                    echo "<td>" . $data[$i]['prodi'] . "</td>";
                    echo "<td>" . $data[$i]['jalur'] . "</td>";
                    echo "<td>" . $data[$i]['angkatan'] . "</td>";
                    echo "<td>" . $data[$i]['email'] . "</td>";
                    echo "<td>" . $data[$i]['browser'] . "</td>";
                    echo "<td>" . $data[$i]['ip_address'] . "</td>";
                    echo "<td>" . $data[$i]['timestamp'] . "</td>";
                    echo "<td><a href='edit.php?id=" . $data[$i]['id'] . "'>Edit</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10'>Tidak ada data.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- ... (Bagian-bagian HTML setelahnya) -->
    </div>

    <script src="script.js"></script>
</body>
</html>
