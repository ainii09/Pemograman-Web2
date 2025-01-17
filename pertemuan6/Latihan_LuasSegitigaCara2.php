<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Segitiga Cara 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-bottom: 10px; 
        }
        label {
            font-weight: bold;
            display: inline-block;
            margin-bottom: 10px;
             width: 60%;
            
        }
        input[type="number"] {
            width: 35%;
            padding: 6px; 
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 5px; 
            box-sizing: border-box;
        }
        input[type="submit"],
        .hapus {
            padding: 8px 20px; 
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover,
        .hapus:hover {
            filter: brightness(0.9);
        }
        input[type="submit"][name="hitung"] {
            background-color: #0000FF; 
            color: white;
        }
        .hasil {
            background: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px; 
            font-size: 14px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Menghitung Luas Segitiga</h2>

        <form method="post">
            <?php
            $jumlah_input = 6;
            for ($i = 1; $i < $jumlah_input; $i++) {
                echo "<label for='alas{$i}'>Alas Segitiga {$i}</label>";
                echo "<input type='number' name='alas{$i}' id='alas{$i}' required>";
                echo "<br>";

                echo "<label for='tinggi{$i}'>Tinggi Segitiga {$i}</label>";
                echo "<input type='number' name='tinggi{$i}' id='tinggi{$i}' required>";
                echo "<br><br>";
            }
            ?>

            <input type="submit" name="hitung" value="Hitung">
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            echo "<div class='hasil'>";
            echo "<p><strong>Hasil:</strong></p>";

            for ($i = 1; $i < $jumlah_input; $i++) {
                $alas = $_POST["alas{$i}"];
                $tinggi = $_POST["tinggi{$i}"];
                $luas = 0.5 * $alas * $tinggi;

                echo "<p>Luas segitiga dengan alas $alas dan tinggi $tinggi adalah : $luas </p>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
