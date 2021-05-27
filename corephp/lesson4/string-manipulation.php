<?php 

$x="my string1"; echo $x[9] + 4;

echo "<hr>";

// new row after 15 characters
$lipsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$lipsumArr = explode(" ", $lipsum);
$tmpContent = "";
for( $i = 0; $i < sizeof( $lipsumArr ); $i++ )
    {
        if((strlen($tmpContent . " ") + strlen($lipsumArr[$i])) < 15)
            $tmpContent .= " " . $lipsumArr[$i];
        else
            {
                if($tmpContent != "")
                    {
                        echo $tmpContent . "<br>";
                    }
                        $tmpContent = $lipsumArr[$i];
            }
    }
echo $tmpContent;
echo "<hr>";

// retain string with 12 letters and 3 dots
$lipsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$izlaz = (strlen( $lipsum ) > 15) ?substr( $lipsum, 0, 12 )."...": $lipsum;
echo $izlaz;
echo "<hr>";

echo str_word_count("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<hr>";

// password generator
$numberOfCharacters = 50;
$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$allCharacters = $characters . strtolower($characters);
$pass = "";
for($i=0;$i<$numberOfCharacters;$i++)
    $pass.=$allCharacters[rand(0,strlen($allCharacters)-1)];
echo $pass;
echo "<hr>";

$a = "my text";
echo $a[3];
echo "<hr>";

// get rid of empty spaces
$s = "my text";
for ($i = 0; $i < strlen ($s); $i++) {
if($s[$i] != " ")
echo $s[$i];
}
echo "<hr>";

// strcasecmp not case sensitive
echo strcmp("My text", "my text") . "<br>"; // result -1
echo strcasecmp("My text", "my text"); // result 0
echo "<hr>";


$arr1 = array("Java", "SQL", "CSS");
$arr2 = array("PHP","MySQL","HTML");
// 1st param is what we're looking for, 2nd is what we're inserting,
// 3rd is string we modify, 4th (optional) number of replacements
// str_ireplace not case sensitive
echo str_replace($arr1, $arr2, "I love Java", $a); 
echo "<br>" . $a;
echo "<hr>";

// trim last character
echo $x = "1,2,3,4,5,";
echo "<br>";
echo substr_replace($x, "", strlen($x)-1) . "<br>";
echo trim($x, ",");
echo "<hr>";

$x = "http://www.google.com";
echo substr($x,7,3);
echo "<hr>";

// set number of decimal spaces
echo number_format(30.4000667,3);
echo "<hr>";

setlocale(LC_MONETARY, "en_US"); 
setlocale(LC_MONETARY, "ja_JP");
echo "<hr>";

printf("My number: %d", 100); // decimal
echo "<br>";
printf("My number: %b", 10) . "<br>"; // binary
echo "<br>";
printf("My decimal number: %d, my binary number: %b, my floating point number: %f", 10,10,10) . "<br>";
echo "<br>";
echo "<hr>";

// regex
echo preg_match("/mytext/","mytext"); // 1
echo "<hr>";

$s = "my text"; 
for ($i = 0; $i < strlen($s); $i++) {       
    if($s[$i] != " ")             
    echo $s[$i]; }
    echo "<hr>";

    // create associative array
    $string = "http://myPage.php?id=25&cat=18&user=34";
    $pars = explode("?",$string);
    $pars = explode("&",$pars[1]);
    $parsedPars=array();
    for($i=0;$i<sizeof($pars);$i++)
        {
    
            $currentParam = explode("=",$pars[$i]);
            $parsedPars[$currentParam[0]] = $currentParam[1];
        }
    print_r($parsedPars);
    echo "<hr>";

    // isolate domain, folders and page name
    $string = "http://myDomain/home/index.php?id=25&cat=18&user=34";
    $pars = preg_replace("/http:\/\//","",$string);
    $pars = preg_replace("/\?[a-zA-Z0-9=&]+/","",$pars);
    print_r($pars);
    echo "<hr>";

    // reverse string
    function str_reverse($str){
        $rez = "";
        for($i=strlen($str)-1; $i>=0; $i--){
            $rez.=$str[$i];
        }
        return $rez;
    }
    $text = "my string"; 
    echo str_reverse($text); 
    echo "<hr>";













?>