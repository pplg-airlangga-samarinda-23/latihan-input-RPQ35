<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form >
        <input type="number" name="jarijari"placeholder="jari jari"> <br>
        <input type="number" name="tinggi" placeholder="tinggi"> <br>
        <button type="submit" value="1">Hitung Volume</button>
        <button type="reset" value="0">Reset</button>
    </form>
    <?php
        // tambahkan perhitungan volume tabung di sini
        $rr=@$_GET['jarijari'];
        $T=@$_GET['tinggi'];
        $Tabung=$rr*$rr*$T* 3.14159265;
        echo 'luas tabung ='.$Tabung;
    ?>
</body>
</html>