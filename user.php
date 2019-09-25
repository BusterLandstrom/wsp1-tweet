
<?php
include 'include/dbinfo.php';
include 'include/db.php';

$usersId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$sth = $dbh->prepare('SELECT users.* FROM tweet
                        JOIN users
                        ON users.id = users.id
                        WHERE users.id=' . $usersId);
$sth->execute();

$row = $sth->fetch(PDO::FETCH_ASSOC);

include 'views/user_layout.php';
?>