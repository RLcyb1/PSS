<form action="/serwis_samochodowy/public/index.php?action=addAppointment" method="POST">
  <label>Data wizyty:</label><br>
  <input type="datetime-local" name="appointmentDate" required><br>
  <label>Opis:</label><br>
  <textarea name="description" required></textarea><br>
  <button type="submit">Zarezerwuj</button>
</form>