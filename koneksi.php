<?php
//koneksi
$conn = mysqli_connect("localhost", "root", "", "futsal");

function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

 function book($data) {
    global $conn;

$nama_tim = $data["nama_tim"];
$jam = $data["jam"];
$tanggal = $data["tanggal"];
$no_tlpn = $data["no_tlpn"];

    $query = "INSERT INTO jadwala
    VALUES
    ('','$nama_tim','$jam','$tanggal','$no_tlpn' )
    ";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
 }
 function bookb($data) {
    global $conn;

$nama_tim = $data["nama_tim"];
$jam = $data["jam"];
$tanggal = $data["tanggal"];
$no_tlpn = $data["no_tlpn"];

    $query = "INSERT INTO jadwalb
    VALUES
    ('','$nama_tim','$jam','$tanggal','$no_tlpn' )
    ";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
 }


function bookc($data) {
   global $conn;

$nama_tim = $data["nama_tim"];
$jam = $data["jam"];
$tanggal = $data["tanggal"];
$no_tlpn = $data["no_tlpn"];

   $query = "INSERT INTO jadwalc
   VALUES
   ('','$nama_tim','$jam','$tanggal','$no_tlpn' )
   ";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}

function bookd($data) {
    global $conn;
 
 $nama_tim = $data["nama_tim"];
 $jam = $data["jam"];
 $tanggal = $data["tanggal"];
 $no_tlpn = $data["no_tlpn"];
 
    $query = "INSERT INTO jadwald
    VALUES
    ('','$nama_tim','$jam','$tanggal','$no_tlpn' )
    ";
 mysqli_query($conn,$query);
 
 return mysqli_affected_rows($conn);
 }

?>