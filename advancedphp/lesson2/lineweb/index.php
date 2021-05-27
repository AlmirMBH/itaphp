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
        <form action="index.php" method="post">
        <input type="text" name="termin" placeholder='Unesite termin pretrage'> <button>Pretrazi</button>
    </form>
        <?php
          //meni($db);
              $upit="SELECT * FROM vwproizvodi WHERE obrisan=0";
              if(isset($_GET['id']))$upit="SELECT * FROM vwproizvodi WHERE obrisan=0 AND id=".$_GET['id'];
              if(isset($_GET['kategorija']))$upit="SELECT * FROM vwproizvodi WHERE obrisan=0 AND kategorija='".$_GET['kategorija']."'";
              if(isset($_GET['autor']))$upit="SELECT * FROM vwproizvodi WHERE obrisan=0 AND autor='".$_GET['autor']."'";
              if(isset($_POST['termin']))$upit="SELECT * FROM vwproizvodi WHERE obrisan=0 AND (naslov LIKE ('%".$_POST['termin']."%') OR tekst LIKE ('%".$_POST['termin']."%'))";
              $rez=$db->query($upit);
              if($db->error())
              {
                  echo "Greska prilikom izvrsavanja upita!!!!<br>";
                  echo $db->error()." (".$db->errno().")";
                  exit();
              }
              echo "Broj proizvoda: ".$db->num_rows($rez)."<hr>";
              $vesti= array();
              while($red=$db->fetch_object($rez))
                  //$vesti[]=new Vest($red->id, $red->naslov, $red->tekst, $red->vreme, $red->autor, $red->kategorija, $red->obrisan, $red->izmena);
              //foreach($vesti as $vest)
              {
                  echo "<div style='border: 1px solid black; width:100%;margin:2px;padding:2px'>";
                  echo "<a href='index.php?kategorija=".$red->kategorija."'>".$red->naziv."</a><br>";
                  echo "<h3><a href='proizvodi.php?id=".$red->id."'>".$red->naslov."</a></h3>";
                  if(isset($_GET['id']))
                      echo $red->tekst;
                  else
                  {
                      //$a=$vest->deoTeksta();
                      $tmp=explode(" ", $red->tekst);
                      $novi=array_slice($tmp, 0, 20);
                      $a=implode(" ", $novi).".....<br>";
                      if(isset($_POST['termin']))
                          echo str_replace(strtolower($_POST['termin']), "<span style='background-color:yellow'>".$_POST['termin']."</span>", strtolower($a));
                      else
                          echo $a;
                  }
                      
                  
                  
                  echo "<b><a href='index.php?autor=".$red->autor."'>".$red->ime ." ".$red->prezime."</a></b> <i>".$red->vreme."</i><br>";

                  echo "</div>";
              }
              unset($db);
          ?>
                <!--<h1>We are Lineweb</h1>
                <div class="content">
                <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit harum placeat optio quisquam voluptatem rerum, praesentium, iure laborum in? Nostrum tempora magnam doloremque, minima ex a repellendus! Assumenda veritatis, deserunt? <a href="#">Read more...</a></p>
                <img src="images/computer.png" alt="">
                </div>
                <div id="kontakt">
                        <h2>Contact us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias fugit vitae deleniti, doloremque nulla assumenda eligendi dolorem suscipit. Iste voluptatibus voluptas, voluptate maxime neque ut accusamus a nihil harum. Voluptatem? <a href="#">Read more...</a> </p>
                </div>
                <div id="news">
                        <h2>Latest news</h2>
                    <div class="content">
                        <div class="news">
                          <h3>Lorem ipsum dolor sit amet</h3>
                          <img src="images/news1.jpg" alt="news">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab in similique cum omnis nam maxime suscipit quas fuga quo dignissimos, debitis repudiandae, explicabo a minus soluta cupiditate exercitationem. Praesentium, magnam. <a href="#">Read more...</a></p></div>
                    
                    <div>
                        <div class="news">
                          <h3>Sed rutrum tristique</h3>
                          <img src="images/news2.jpg" alt="news">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit voluptas doloremque fugiat molestias doloribus recusandae dolore obcaecati aut dignissimos vero temporibus accusamus, sed possimus. Non deserunt ipsam natus aut voluptates! <a href="#">Read more...</a></p></div>
                        </div>
                    </div>
                    </div>-->

        </div>

        <?php include_once("_sidebar.php")?>
        <?php include_once("_futer.php")?>
    </div>
</div>
</body>
</html>