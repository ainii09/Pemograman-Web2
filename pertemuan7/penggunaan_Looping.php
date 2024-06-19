<html>
    <body>
        <form action="" method="post">
            <table>

            <td><center>
                <h2>Deret Bilangan<br></h2>
            </center></td>
         
            <tr>
                <td>Nilai Awal</td>
                <td>: <input type="text" id="awal" name="awal" required></td>
            </tr>
            <tr>
                <td>Nilai Akhir</td>
                <td>: <input type="text" id="akhir"  name="akhir" required></td>
            </tr>
           
            <td><button type="submit" name="Hitung" >Hitung</button></td>
        </form>
            </table>
           


<?php 
    if(isset($_POST["Hitung"])){
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];

        function deret_bilangan_dibagi3($awal, $akhir){
            $jumlah = 0;
            $banyaknya = 0;

            echo "Maka deret bilangan yang tampil : <br>";
            for($i = $awal; $i <= $akhir; $i++) {
                if($i % 2 != 0 && $i % 3 == 0){
                    echo $i . " ";
                    $jumlah += $i;
                    $banyaknya++;
                }
            }

            echo "<br>Jumlah bilangan : $banyaknya <br>";
            echo "<br>Jumlah nilai bilangan : $jumlah";
        }

        deret_bilangan_dibagi3($awal, $akhir);
        

        
    } else {}
    
?>
    </body>
</html>