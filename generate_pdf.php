<?php>
require_once('vendor/autoload.php'); // Lokasi pemuatan autoload TCPDF

use \setasign\Fpdi\Fpdi;

// Instansiasi objek TCPDF
$pdf = new Fpdi();

// Menambahkan halaman baru
$pdf->AddPage();

// Mengatur font
$pdf->SetFont('Arial', '', 12);

// Membuat header tabel
$pdf->Cell(40, 10, 'Title', 1);
$pdf->Cell(60, 10, 'Description', 1);
$pdf->Cell(40, 10, 'Start Date', 1);
$pdf->Cell(40, 10, 'End Date', 1);
$pdf->Ln(); // Pindah ke baris baru

// Database connection parameters
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'gadai_syariah';

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Fetch promotions from database
$query = "SELECT title, description, start_date, end_date FROM promotions";
$result = mysqli_query($connection, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $pdf->Cell(40, 10, $row['title'], 1);
        $pdf->Cell(60, 10, $row['description'], 1);
        $pdf->Cell(40, 10, $row['start_date'], 1);
        $pdf->Cell(40, 10, $row['end_date'], 1);
        $pdf->Ln(); // Pindah ke baris baru
    }
} else {
    echo "Error: " . mysqli_error($connection);
}

mysqli_close($connection);

// Menyimpan PDF ke file
$pdf->Output('promotions.pdf', 'D'); // 'D' untuk tampilkan dalam browser

?>