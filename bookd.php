<?php 
require 'koneksi.php';

if (isset($_POST["bookd"])) {
                    
    if(bookd($_POST)> 0) {
        echo "Book Successed!";
    }
  
        else {
            echo "Book Failed";
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>
body {
  background-color: #9BD770;
}
</style>
<body> 
    <div class="container">
    
            <h1>BOOK FUTSAL FIELD</h1>   

            <form action="" method="post">
                
  <div class="mb-3">
    <label for="nama_tim" class="form-label">Team Name:</label>
    <input type="nama_tim" class="form-control" id="nama_tim" placeholder="Enter" name="nama_tim">
  </div>
  <div class="mb-3">
  <label for="jam" class="form-label">Time:</label>
    <input type="Time" class="form-control" id="jam" placeholder="Enter" name="jam">
    </label>
  </div>
  <div class="mb-3">
    <label for="tanggal" class="form-label">Date:</label>
    <input type="Date" class="form-control" id="tanggal" placeholder="Enter" name="tanggal">
  </div>
  <div class="mb-3">
    <label for="no_tlpn" class="form-label">Phone Number:</label>
    <input type="Phone" class="form-control" id="no_tlpn" placeholder="Enter " name="no_tlpn">
  </div>
  <button type="bookd" name="bookd" class="btn btn-primary">Book</button>
</form>
<div class="mb-3 mt-3">
<div class="row1">
    <div class="col1">
        <button type="button" class="btn btn-light"><a href="jadwald.php">Back</a></button></button>
    </div>
</div>
</div>
            </div>
            
            </body>

