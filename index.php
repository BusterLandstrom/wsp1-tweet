<?php
//Förbereder dbinfo.php
include 'include/dbinfo.php';

include 'include/db.php';

$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet
            JOIN users
            ON tweet.user_id = users.id');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

//Förbereder index_layout.php
include 'views/index_layout.php';
?>