<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 4</title>
</head>
<body>
    <form action="">
    <div>
        <input type="date" name="tanngal" id="">
    </div>
    <button>hitung</button>
    </form>
    <?php
        $tgl=@$_GET['tanngal'];
        $date=new DateTime('now');
        $bgtlah= new DateTime($tgl);
        $diff = $bgtlah ->diff($date);
          
        echo "You are " . $diff->y . " years, " . $diff->m . " months, and " . $diff->d . " days old.";
    ?>
</body>
</html>