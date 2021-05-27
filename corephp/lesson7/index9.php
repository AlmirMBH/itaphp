<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stranica 9</h1>
    <form action="index9.php?funkcija=brojevi" method="post">
        <input type="number" name="op1"><br><br>
        <input type="number" name="op2"><br><br>
        <button>Klikni za brojeve</button>
    </form>
    <hr>
    <form action="index9.php?funkcija=stringovi" method="post">
        <input type="text" name="tekst1"><br><br>
        <input type="text" name="tekst2"><br><br>
        <button>Klikni za stringove</button>
    </form>
    <hr>
    <?php
    if(isset($_REQUEST['funkcija']))
    {
        $f=$_REQUEST['funkcija'];
        if($f=="brojevi")
        {
            $op1=$_REQUEST['op1'];
            $op2=$_REQUEST['op2'];
            if($op1!="" and $op2!="")
		        echo "<p>Zbir brojeva $op1 i $op2 je: ".($op1+$op2)."</p>";
		    else 
			    echo "<p>Svi podaci su obavezni</p>";
        }
        else
        {
            $tekst1=$_REQUEST['tekst1'];
            $tekst2=$_REQUEST['tekst2'];
            echo "<p>Konkatenacija stringova je: $tekst1$tekst2</p>";
        }
    }
    else
        echo "<p>Dobro dosli na stranicu</p>";
    ?>
</body>
</html>