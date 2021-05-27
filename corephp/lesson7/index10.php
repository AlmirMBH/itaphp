<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index10.php" method="post">
        <select name="sajt" id="sajt">
            <option value="0">--Izaberite sajt--</option>
            <option value="https://www.blic.rs/">Blic</option>
            <option value="https://www.b92.net/">B92</option>
            <option value="https://www.it-akademija.com/">IT akademija</option>
        </select><br><br>
        <button>Idi na sajt......</button>
    </form>

    <hr>
    <?php
    if(isset($_POST['sajt']))
    {
        $sajt=$_POST['sajt'];
        if($sajt!="0")
        {
            header("location: $sajt");
        }
        else
            echo "<p>Morate izabrati sajt</p>";
    }
    else
        echo "<p>Dobro dosli na stranicu za redirekciju</p>";
    ?>
</body>
</html>