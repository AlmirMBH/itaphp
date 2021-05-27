<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red po red</title>
</head>
<body>
    <h1>Citanje iz datoteke red po red do NULL podatka</h1>
    <?php

        $ime="datoteka.txt";
        if(file_exists($ime))
        {
            $i=1;
            $f=fopen($ime, "r");
            while(($red=fgets($f))!=NULL)
               echo $i++.": ".$red."<br>";
            fclose($f);
        }
        else
            echo "Ne postoji datoteka";
        
    ?>
    <hr>
    <h1>Citanje iz datoteke red po red do EOF</h1>
    <?php
        $ime="datoteka.txt";
        if(file_exists($ime))
        {
            $i=1;
            $f=fopen($ime, "r");
            while(!feof($f))
            {
                $red=fgets($f);
                echo $i++.": ".$red."<br>";
            }
               
            fclose($f);
        }
        else
            echo "Ne postoji datoteka";
        
    ?>
    <hr>
    <h2>Trazim rec bosko u datoteci</h2>
   <?php
   if(file_exists($ime))
   {
       $i=1;
       $f=fopen($ime, "r");
       while(($red=fgets($f))!=NULL)
           if(strpos($red, "bosko")!==false)echo $i++.": ".$red."<br>";
       fclose($f);
   }
   else
       echo "Ne postoji datoteka";
   ?>
</body>
</html>