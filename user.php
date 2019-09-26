
<?php
include 'include/dbinfo.php';
include 'include/db.php';

$usersId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$sth = $dbh->prepare('SELECT * FROM users
                        WHERE id = :usersId');
$sth->bindParam(':usersId', $usersId);
$sth->execute();

$row = $sth->fetch(PDO::FETCH_ASSOC);

$title = 'Tweety - ' . $row['nickname'];

include 'views/user_layout.php';
?>