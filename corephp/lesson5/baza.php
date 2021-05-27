<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$serverName = 'localhost';
$username = 'root';
$password = '';
$database = 'corephp';

// @ enables customized error processing
@ $dbConnection = mysqli_connect($serverName, $username, $password, $database);

if($dbConnection){
    echo "You're connected<br>";
}else{
    // mistake number or 0
    echo mysqli_connect_errno() . "<br>" . mysqli_connect_error($dbConnection);
}

// query 1
$query1 = 'show variables like "max_connections"';
$results1 = mysqli_query($dbConnection, $query1); // db query or false
$numResults = mysqli_num_rows($results1);
echo "Number of DB fetched rows: " . $numResults . "<br>";

    foreach ($results1 as $items){
        foreach($items as $item){
            $numOfConnections = substr($item, 15);
        }    
    }
    echo "Number of allowed DB connections: " . $item;

    mysqli_free_result($results1);
    mysqli_close($dbConnection);
    
    // print_r($results);
    // print_r($dbConnection);

?>
    
</body>
</html>


