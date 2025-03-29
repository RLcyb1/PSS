<?php foreach ($appointments as $app): ?>
  <div>
    <strong>Data:</strong> <?= $app->appointmentDate ?><br>
    <strong>Status:</strong> <?= $app->status ?><br>
    <strong>Opis:</strong> <?= $app->description ?><br>
    <?php if ($app->status != 'zakończona'): ?>
        <a href="/serwis_samochodowy/public/index.php?action=updateStatus&id=<?= $app->idAppointment ?>&status=potwierdzona">Potwierdź</a> |
        <a href="/serwis_samochodowy/public/index.php?action=updateStatus&id=<?= $app->idAppointment ?>&status=w realizacji">W realizacji</a> |
        <a href="/serwis_samochodowy/public/index.php?action=updateStatus&id=<?= $app->idAppointment ?>&status=zakończona">Zakończ</a>
    <?php endif; ?>
    <hr>
  </div>
<?php endforeach; ?>