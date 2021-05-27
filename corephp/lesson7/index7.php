<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Stranica 7</h1>
    <form action="index7.php" method="post">
        <input type="email" name="email" placeholder="Unesite email" required="required"><br><br>
        <input type="password" name='lozinka' placeholder="Unesite lozinku" required="required"> <br><br>
        <input type="checkbox" name='zapamti' value="1"> Zapamti me na ovom racunaru <br><br>
        <button>Prijavite se</button>
    </form>
    <hr>

    <?php
        if(isset($_POST['email']) and isset($_POST['lozinka']))
        {
            $email=$_POST['email'];
            $lozinka=$_POST['lozinka'];
            if($email!="" and $lozinka!="")
            {
                
                if($email=="bbosko@skola.com" and $lozinka=="bbosko")
                {
                    echo "Uneli ste: $email ($lozinka)<br>";
                    if(isset($_POST['zapamti']))
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