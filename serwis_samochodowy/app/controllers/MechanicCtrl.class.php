<?php
class MechanicCtrl {
    public function updateStatus() {
        $db = App::getDB();
        $stmt = $db->prepare("UPDATE Appointment SET status=? WHERE idAppointment=?");
        $stmt->execute([$_GET['status'], $_GET['id']]);
        header('Location: /serwis_samochodowy/public/index.php?page=mechanic_appointments');
        exit;
    }
}
