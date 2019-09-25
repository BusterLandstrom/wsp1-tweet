<?php include 'views/head.php'; ?>
    <div class="container">
        <?php foreach ($result as $row): ?>
            <?php include 'views/tweet_card.php'; ?>
        <?php endforeach ?>
    </div>
<?php include 'views/foot.php'; ?>