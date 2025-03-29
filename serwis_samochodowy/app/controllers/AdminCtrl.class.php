<?php
class AdminCtrl {
    public function changeRole() {
        $db = App::getDB();
        $stmt = $db->prepare("UPDATE UserRole SET idRole = (SELECT idRole FROM Role WHERE roleName = ?) WHERE idUser = ?");
        $stmt->execute([$_GET['role'], $_GET['id']]);
        header('Location: /serwis_samochodowy/public/index.php?page=admin_users');
        exit;
    }
}
