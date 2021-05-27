<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stranica 6</h1>
    <form action="index6.php" method="get">
        <input type="email" name="email" placeholder="Unesite email" required="required"><br><br>
        <input type="password" name='lozinka' placeholder="Unesite lozinku" required="required"> <br><br>
        <input type="checkbox" name='zapamti' value="1"> Zapamti me na ovom racunaru <br><br>
        <button>Prijavite se</button>
    </form>
    <hr>









    <?php
        if(isset($_GET['email']) and isset($_GET['lozinka']))
        {
            $email=$_GET['email'];
            $lozinka=$_GET['lozinka'];
            if($email!="" and $lozinka!="")
            {
                
                if($email=="bbosko@skola.com" and $lozinka=="bbosko")
                {
                    echo "Uneli ste: $email ($lozinka)<br>";
                    if(isset($_GET['zapamti']))
                        echo "<p>Zelite da se zapamtite<br>";
                    else
                        echo "<p>Moracete opet da se prijavite</p>";
                }
                else
                    echo "<p>Korisnik ne postoji</p>";
            }
            else
                echo "<p>Svi podaci su obavezni!!!!<p>";
        }
        else
            echo "<p>Dobro dosli na stranicu za logovanje</p>";
    ?>
</body>
</html>