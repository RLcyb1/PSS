<?php foreach ($users as $user): ?>
  <div>
    <?= $user->login ?> | <?= $user->email ?>
    <a href="/serwis_samochodowy/public/index.php?action=changeRole&id=<?= $user->idUser ?>&role=mechanik">Ustaw jako mechanik</a> |
    <a href="/serwis_samochodowy/public/index.php?action=changeRole&id=<?= $user->idUser ?>&role=klient">Ustaw jako klient</a>
    <hr>
  </div>
<?php endforeach; ?>