<div class="card text-center">
                <div class="card-header">
                    <a href="user.php?id=<?=$row['id']?>">
                        <strong><?= $row['name']?></strong>
                    </a>
                      <br> 
                      <?= $row['created_at']?> <?= $row['updated_at']?>
                </div>
                <div class="card-body">
                    <h5 class="card-subtitle mb-2 text-muted nickname"><?= $row['nickname']?></h5>
                    <a href="tweet.php?id=<?=$row['id']?>">
                        <p class="card-text text-dark" ><?= $row['body']?></p>
                    </a>
                </div>
                <div class="card-footer text-muted">
                    <img type="button" onclick="like()" src="../img/like.png" class="like">
                </div>
            </div>