<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: justify;
            align-items: center;
            height: 50vh;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <label for="start">Nilai Awal:</label>
            <input type="number" id="start" name="start" required>
            <br>
            <label for="end">Nilai Akhir:</label>
            <input type="number" id="end" name="end" required>
            <br>
            <button type="submit" name="submit">Tampilkan Deret</button>
        </form>
        <?php
        if(isset($_POST['submit'])) {
            $start = $_POST['start'];
            $end = $_POST['end'];

            $count = 0; // Inisialisasi variabel untuk menghitung banyaknya deret bilangan
            $sum = 0; // Inisialisasi variabel untuk menghitung jumlah dari deret bilangan

            echo "<h2>Deret Bilangan Ganjil Habis Dibagi 3 :</h2>";
            echo "<ul>";

            for ($i = $start; $i <= $end; $i++) {
                if ($i % 2 != 0 && $i % 3 == 0) { // Cek apakah bilangan ganjil dan habis dibagi 3
                    echo "<li>$i</li>";
                    $count++;
                    $sum += $i;
                }
            }

            echo "</ul>";
            echo "<p>Banyaknya deret bilangan yang tampil: $count</p>";
            echo "<p>Jumlah dari deret bilangan tersebut: $sum</p>";
        }
        ?>
    </div>
</body>
</html>