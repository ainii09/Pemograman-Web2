<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Segitiga Cara 1</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Menghitung Luas Segitiga</h2>

<?php
$alas = array(10, 15, 20, 25, 30);
$tinggi = array(8, 12, 16, 20, 24);
$luas = array();

for ($i = 0; $i < count($alas); $i++) {
    $luas[$i] = 0.5 * $alas[$i] * $tinggi[$i];
}

echo "<table>";
echo "<tr><th>No</th><th>Alas</th><th>Tinggi</th><th>Luas</th></tr>";

for ($i = 0; $i < count($alas); $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $alas[$i] . "</td>";
    echo "<td>" . $tinggi[$i] . "</td>";
    echo "<td>" . $luas[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
