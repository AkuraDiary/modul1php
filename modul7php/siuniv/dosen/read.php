<?php
include "../connect.php";
    $query = "SELECT * FROM dosen";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Dosen</title>
    </head>
    <body>
        <table border="1">
            <h2>Data Dosen</h2>
            <tr>
                <th>No.</th>
                <th>Nama Dosen</th>
                <th>Telepon</th>
            </tr>
            <?php
            if ($num>0) {
                $no = 1;
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $data["nama_dosen"] . "</td>";
                    echo "<td>" . $data["telp"] . "</td>";
                    echo "</tr>";
                    $no++;
                }
            }else {
                echo " <td colspan='3'> Tidak ada data</td>";
            }
            ?>
        </table>
    </body>
</html>