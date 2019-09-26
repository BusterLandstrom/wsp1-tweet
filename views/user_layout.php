
<?php include 'views/head.php';?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?=$row['nickname']?></h1>
    <p class="lead"><?=$row['userdescription']?></p>
  </div>
</div>
    <div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$row['nickname']?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?=$row['name']?></h6>
            <p class="card-text"></p>
        </div>
    </div>
</div>
<?php include 'views/foot.php';?>
