<?php
class ClientCtrl {
    public function addAppointment() {
        session_start();
        $db = App::getDB();
        $stmt = $db->prepare("INSERT INTO Appointment (idUser, appointmentDate, description, status) VALUES (?, ?, ?, 'zgłoszona')");
        $stmt->execute([$_SESSION['user']->idUser, $_POST['appointmentDate'], $_POST['description']]);
        header('Location: /serwis_samochodowy/public/index.php?page=my_appointments');
        exit;
    }
}
