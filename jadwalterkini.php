<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Go Futsal</title>
</head>
    <body>
        <div class="container">
            <div class="jadwalterkini">
                <h1>JADWAL LAPANGAN TERKINI</h1>
                <div class="jadwala">
                    <h4>JADWAL LAPANGAN A</h4>

                    <table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <th>Nama Tim</th>
                            <th>Jam</th>
                            <th>Tanggal</th>
                            <th>No Telepon</th>
                        </tr>

                        <?php
                        // koneksi database
                        $conn = mysqli_connect("localhost", "root", "", "futsal");

                        $result = mysqli_query($conn, "SELECT * FROM jadwala");

                        ?>

                        <?php $i = 1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result)): ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["nama_tim"]; ?></td>
                            <td><?= $row["jam"]; ?></td>
                            <td><?= $row["tanggal"]; ?></td>
                            <td><?= $row["no_tlpn"]; ?></td>
                        </tr>

                        <?php $i++; ?>
                        <?php endwhile; ?>

                    </table>
                </div>
                <div class="jadwalb">
                    <h4>JADWAL LAPANGAN B</h4>

                    <table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <th>Nama Tim</th>
                            <th>Jam</th>
                            <th>Tanggal</th>
                            <th>No Telepon</th>
                        </tr>

                        <?php
                        // koneksi database
                        $conn = mysqli_connect("localhost", "root", "", "futsal");

                        $result = mysqli_query($conn, "SELECT * FROM jadwalb");

                        ?>

                        <?php $i = 1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result)): ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["nama_tim"]; ?></td>
                            <td><?= $row["jam"]; ?></td>
                            <td><?= $row["tanggal"]; ?></td>
                            <td><?= $row["no_tlpn"]; ?></td>
                        </tr>

                        <?php $i++; ?>
                        <?php endwhile; ?>

                    </table>
                </div>

                <div class="jadwalc">
                    <h4>JADWAL LAPANGAN C</h4>

                    <table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <th>Nama Tim</th>
                            <th>Jam</th>
                            <th>Tanggal</th>
                            <th>No Telepon</th>
                        </tr>

                        <?php
                        // koneksi database
                        $conn = mysqli_connect("localhost", "root", "", "futsal");

                        $result = mysqli_query($conn, "SELECT * FROM jadwalc");

                        ?>

                        <?php $i = 1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result)): ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["nama_tim"]; ?></td>
                            <td><?= $row["jam"]; ?></td>
                            <td><?= $row["tanggal"]; ?></td>
                            <td><?= $row["no_tlpn"]; ?></td>
                        </tr>

                        <?php $i++; ?>
                        <?php endwhile; ?>

                    </table>
                </div>

                <div class="jadwald">
                    <h4>JADWAL LAPANGAN D</h4>

                    <table border="1" cellpadding="10" cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <th>Nama Tim</th>
                            <th>Jam</th>
                            <th>Tanggal</th>
                            <th>No Telepon</th>
                        </tr>

                        <?php
                        // koneksi database
                        $conn = mysqli_connect("localhost", "root", "", "futsal");

                        $result = mysqli_query($conn, "SELECT * FROM jadwald");

                        ?>

                        <?php $i = 1; ?>
                        <?php while( $row = mysqli_fetch_assoc($result)): ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $row["nama_tim"]; ?></td>
                            <td><?= $row["jam"]; ?></td>
                            <td><?= $row["tanggal"]; ?></td>
                            <td><?= $row["no_tlpn"]; ?></td>
                        </tr>

                        <?php $i++; ?>
                        <?php endwhile; ?>

                    </table>
                </div>
            </div>

            <div class="row1">
                <div class="col1">
                       <button type="button"><a href="Dashboard.html">Back</a></button>
                </div>
            </div>
    </body>
</head>