<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 5</title>
</head>
<body>
    <form action="">
    <div>
    <input type="number" name="angka" placeholder="5~20">
    </div>
    <div>
    <select name="yah" id="">
        <option value="ganjil">ganjil</option>
        <option value="genap">genap</option>
    </select>
    </div>
    <button>submit</button>
    </form>
    <?php

    $heem=@$_GET['angka'];
    $yep=@$_GET['yah'];
    if($yep== 'genap'){for($i=0;$i<=$heem;$i++){if($i%2== 0){echo $i.' >ropiq <br>';}else{echo $i.'<br>';}}}
    else if($yep== 'ganjil'){for($i=0;$i<=$heem;$i++){if($i%2== 1){echo $i.' >ropiq <br>';}else{echo $i.'<br>';}}}
    ?>
</body>
</html>