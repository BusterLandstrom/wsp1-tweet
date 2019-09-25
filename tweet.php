<?php

include 'include/dbinfo.php';

include 'include/db.php';

$tweetId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet
            JOIN users
            ON tweet.user_id = users.id
            WHERE tweet.id=' . $tweetId);
$sth->execute();

$row = $sth->fetch(PDO::FETCH_ASSOC);

include 'views/tweet_layout.php';
?>