<h6>Chelsea Squad 2021/2022</h6>

<!-- list squad -->
<ul class="list-group">
  <?php foreach($model['player'] as $player) : ?>
    <li class="list-group-item">
      <u><strong><?= $player['player_number'] ?></strong></u>
      <?= $player['player_name'] ?>
    </li>
  <?php endforeach; ?>
</ul>
<!-- end list squad -->