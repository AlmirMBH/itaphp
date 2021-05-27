<?php
session_start();
require_once("_require.php");
$db=new Baza();
if(!$db->connect())exit();
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineweb</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <?php include_once("_menu.php");?>
    <div class="content">
        <div id="main">
        
        <?php
          
              if(isset($_GET['id']))$upit="SELECT * FROM vwproizvodi WHERE obrisan=0 AND id=".$_GET['id'];

              $rez=$db->query($upit);
              if($db->error())
              {
                  echo "Greska prilikom izvrsavanja upita!!!!<br>";
                  echo $db->error()." (".$db->errno().")";
                  exit();
              }
              
              while($red=$db->fetch_object($rez))
              {
                  echo "<div style='border: 1px solid black; width:100%;margin:2px;padding:2px'>";
                  echo "<a href='index.php?kategorija=".$red->kategorija."'>".$red->naziv."</a><br>";
                  echo "<h3><a href='proizvodi.php?id=".$red->id."'>".$red->naslov."</a></h3>";
                  echo $red->tekst;
                  echo "<p><b><a href='index.php?autor=".$red->autor."'>".$red->ime ." ".$red->prezime."</a></b> <i>".$red->vreme."</i><br></p>";
                  echo "</div>";
                  $pogledan=$red->pogledan;
              }
              $upit="UPDATE proizvodi SET pogledan=pogledan+1 WHERE id=".$_GET['id'];
              $db->query($upit);
              
          ?>
               <?php
               if(login())
               {
                   if($_SESSION['status']=='Administrator')
                   {
                        echo "Pogledan puta: ".$pogledan;
                   }
               }
               unset($db);
               ?> 

        </div>

        <?php include_once("_sidebar.php")?>
        </div>
        <?php include_once("_futer.php")?>
    </div>
</div>
</body>
</html>