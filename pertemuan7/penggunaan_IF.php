<html>
    <body>
        <form action="" method="post">
            <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>: <input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>: <input type="text" name="nilaitugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>: <input type="text" name="nilaiuts"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>: <input type="text" name="nilaiuas"></td>
            </tr>
            
            <td><input type="submit" value="Hitung" name="hasil"></td>
        </form>
            </table>
           


<?php 
    if(isset($_POST["hasil"]) && $_POST["hasil"]=="Hitung"){
        $nama = $_POST["nama"]; //$_GET
        $jurusan = $_POST["jurusan"]; //$_REQUEST(bisa untuk Get dan Post)
        $nilaitugas = $_POST["nilaitugas"];
        $nilaiUts = $_POST["nilaiuts"];
        $nilaiUas = $_POST["nilaiuas"];
       

        echo"Nama : $nama<br>";
        echo"Jurusan : $jurusan <br>";
        echo"Nilai Tugas : $nilaitugas<br>";
        echo"Nilai UTS : $nilaiUts<br>";
        echo"Nilai UAS : $nilaiUas<br>";
       

    } else {}
    
?>
    </body>
</html>