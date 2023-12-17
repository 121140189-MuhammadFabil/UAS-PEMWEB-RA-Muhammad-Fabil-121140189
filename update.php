<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nama_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama = validateInput($_POST["nama"]);
    $prodi = validateInput($_POST["prodi"]);
    $jalur = validateInput($_POST["jalur"]);
    $angkatan = validateInput($_POST["angkatan"]);
    $email = validateInput($_POST["email"]);

    $sql = "UPDATE data_mahasiswa
            SET nama = '$nama', prodi = '$prodi', jalur = '$jalur', angkatan = '$angkatan', email = '$email'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php'); // Redirect back to the main page after successful update
        exit();
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

$conn->close();

function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
