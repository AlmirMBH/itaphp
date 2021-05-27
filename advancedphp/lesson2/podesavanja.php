<?php
    $poruka="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="podesavanja.php" method="post">
        <select name="pb" id="pb">
            <option value="0">--Izaberite pozadinsku boju--</option>
            <option value="red">Crvena</option>
            <option value="blue">Plava</option>
            <option value="green">Zelena</option>
            <option value="white">Bela</option>
        </select><br><br>
        <select name="bs" id="bs">
            <option value="0">--Izaberite boju slova--</option>
            <option value="red">Crvena</option>
            <option value="blue">Plava</option>
            <option value="green">Zelena</option>
            <option value="white">Bela</option>
        </select><br><br>

        <select name="vs" id="vs">
            <option value="0">--Izaberite velicinu slova--</option>
            <option value="20">20</option>
            <option value="40">40</option>
            <option value="60">60</option>
            <option value="80">80</option>
        </select><br><br>
        <button>Snimi podesavanja</button>
    </form>
    <hr>
    <?php
    if(isset($_POST['pb']) and isset($_POST['bs']) and isset($_POST['vs']))
    {
        $pb=$_POST['pb'];
        $bs=$_POST['bs'];
        $vs=$_POST['vs'];
        if($pb!="0" and $bs!="0" and $vs!="0")
        {
            setcookie("pb", $pb, time()+60, "/");
            setcookie("bs", $bs, time()+60, "/");
            setcookie("vs", $vs, time()+60, "/");
            $poruka="Uspesno snimljena podesavanja";
        }
        else
        {
            setcookie("pb", "", time()-1, "/");
            setcookie("bs", "", time()-1, "/");
            setcookie("vs", "", time()-1, "/");
            $poruka="Vraceno na pocetna podesavanja";
        }
    }

    ?>
    <div><?php echo $poruka?></div>
</body>
</html>