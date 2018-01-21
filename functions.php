<?php 
// koneksi database
$conn = mysqli_connect("localhost","root","","penilaian");

// membuat function tambah
function tambah($data) {
	global $conn;
    $nama = htmlspecialchars($data["nama"]);  
    $email = htmlspecialchars($data["email"]);  
    $telp = htmlspecialchars($data["telp"]);  
    $gender = htmlspecialchars($data["gender"]);  
    $pesan = htmlspecialchars($data["pesan"]);  

  // $query insert data
  	$query = " INSERT INTO komentar VALUES ('', '$nama', '$email', '$telp', '$gender', '$pesan') ";

  	mysqli_query($conn, $query);

  	return mysqli_affected_rows($conn);
}

?>