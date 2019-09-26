<?php

include 'include/dbinfo.php';

include 'include/db.php';

$tweetId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$sth = $dbh->prepare('SELECT tweet.*, users.name, users.nickname FROM tweet
            JOIN users
            ON tweet.user_id = users.id
            WHERE tweet.id = :tweetId');
$sth->bindParam(':tweetId', $tweetId);
$sth->execute();

$row = $sth->fetch(PDO::FETCH_ASSOC);

$title = 'Tweety by ' . $row['nickname'];

include 'views/tweet_layout.php';
?>