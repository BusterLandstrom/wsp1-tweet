<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/main.js"></script> 
        <title>Bruh!</title>
    </head>
    <body>
        <div class="container">
            <h1>THIS IS A LIE</h1>
<?php
//Förbereder dbinfo.php
include 'include/dbinfo.php';

try{
    $dbh = new PDO(
        'mysql:host=localhost;dbname=' . $database . '',
        $user,
         $password
    );
} catch (PDOException $e){
    print "Error! " . $e->getMessage() . "</br>";
    die();
}

$sth = $dbh->prepare('SELECT * FROM tweet
            JOIN users
            ON tweet.user_id = users.id');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

//Skriver "Tweets"
foreach($result as $row){
    echo "<div class='tweets'>";
    echo "<h2>" . $row['body'] . "</h2>";
    echo "<p>" . $row['name'] . "</p>"; 
    echo "<p>" . $row['created_at'] . "</p>";
    echo "</div>";
}

?>
<input type="button" value="Random Color" onclick="randomizeColor()">
<input type="button" value="Reset Color" onclick="resetColor()">

        </div>
    </body>
</html>