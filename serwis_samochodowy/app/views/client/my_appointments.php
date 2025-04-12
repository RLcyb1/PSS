<?php foreach ($appointments as $app): ?>
  <div>
    Data: <?= $app->appointmentDate ?><br>
    Status: <?= $app->status ?><br>
    Opis: <?= $app->description ?><br>
  </div>
<?php endforeach; ?>