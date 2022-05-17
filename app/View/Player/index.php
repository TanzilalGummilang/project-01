

<div class="container-fluid">
  <div class="row">
    <div class="col-4 mt-4">

      <h5>Chelsea Squad 2021/2022</h5>

      <!-- list squad -->
      <ul class="list-group">
        <?php foreach($model['player'] as $player) : ?>
          <li class="list-group-item">
            <a href="/detail/<?= $player['player_code']; ?>"><strong>#<?= $player['player_number'] ?></strong></a>
            <?= $player['player_name'] ?>
            <a href="/detail/<?= $player['player_code']; ?>" class="badge bg-info text-dark float-end">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
      <!-- end list squad -->

    </div>
  </div>
</div>