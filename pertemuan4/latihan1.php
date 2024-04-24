<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perkalian</title>
    <style>
        body {
            font-family: Arial;
            display: flex;
            justify-content: justify;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabel Perkalian</h1>
        <table>
            <?php
            $rowCount = 10;
            $colCount = 10;

            for ($i = 1; $i <= $rowCount; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $colCount; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>