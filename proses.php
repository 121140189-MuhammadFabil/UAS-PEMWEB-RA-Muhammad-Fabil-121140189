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
    $mahasiswaProcessor = new MahasiswaProcessor($conn);
    $mahasiswaProcessor->processFormData();
}

class MahasiswaProcessor
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function processFormData()
    {
        $nama = $this->validateInput($_POST["nama"]);
        $prodi = $this->validateInput($_POST["prodi"]);
        $jalur = $this->validateInput($_POST["jalur"]);
        $angkatan = $this->validateInput($_POST["angkatan"]);
        $email = $this->validateInput($_POST["email"]);

        $browser = $this->getBrowser();
        $ipAddress = $this->getIpAddress();

        $this->saveToDatabase($nama, $prodi, $jalur, $angkatan, $email, $browser, $ipAddress);
    }

    private function validateInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    private function saveToDatabase($nama, $prodi, $jalur, $angkatan, $email, $browser, $ipAddress)
    {
        $sql = "INSERT INTO data_mahasiswa (nama, prodi, jalur, angkatan, email, browser, ip_address)
                VALUES ('$nama', '$prodi', '$jalur', '$angkatan', '$email', '$browser', '$ipAddress')";

        if ($this->conn->query($sql) === TRUE) {
            // Redirect back to the form page
            header('Location:index.php');
            exit();
        } else {
            // Optional: You can send an error response back to the client if needed
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    private function getBrowser()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    private function getIpAddress()
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$conn->close();
?>