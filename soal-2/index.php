<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <select name="asal" id="">
                <option value="km">km</option>
                <option value="hm">hm</option>
                <option value="dam">dam</option>
                <option value="m">m</option>
                <option value="dm">dm</option>
                <option value="cm">cm</option>
                <option value="mm">mm</option>
            </select>
            <input type="number" name="isi-asal" placeholder="masukan nilai awal">
        </div>
        
        <div>
            <select name="tujuan" id="">
                <option value="km">km</option>
                <option value="hm">hm</option>
                <option value="dam">dam</option>
                <option value="m">m</option>
                <option value="dm">dm</option>
                <option value="cm">cm</option>
                <option value="mm">mm</option>
            </select>
          
        </div>
        <button>submit</button>
    </form>

<?php
$kamus=array("km"=>1,"hm"=>2,"dam"=>3,"m"=>4,"dm"=>5,"cm"=>6,"mm"=>7);
$permulaan=@$_GET['asal'];
$akhir=@$_GET['tujuan'];
$nilai=@$_GET['isi-asal'];

$hitung=@$kamus[$akhir]-@$kamus[$permulaan];
$hitung=$nilai*10**$hitung;

echo' hasil= '.$hitung.'';




?>
</body>
</html>