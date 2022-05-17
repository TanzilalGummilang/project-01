<div class="card" style="width: 18rem;">
  <img src="/img/squad/<?= $model['player']['playerImage']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $model['player']['playerName']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $model['player']['playerCode']; ?></h6>
    
    <p class="card-text"><?= $model['player']['nationality']; ?></p>
    <p class="card-text"><?= $model['player']['position']; ?></p>
    <p class="card-text"><?= $model['player']['playerNumber']; ?></p>

    <a href="/player">Go back</a>
  </div>
</div>