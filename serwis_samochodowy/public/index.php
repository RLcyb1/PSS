
<?php

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch($action){
    case 'admin_users':
        $db = App::getDB();
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perPage = 10;
        $offset = ($page - 1) * $perPage;
        $stmt = $db->prepare("SELECT * FROM User LIMIT :limit OFFSET :offset");
        $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_OBJ);
        include '../app/views/admin/users.php';
        break;

    case 'mechanic_appointments':
        $db = App::getDB();
        $stmt = $db->query("SELECT * FROM Appointment");
        $appointments = $stmt->fetchAll(PDO::FETCH_OBJ);
        include '../app/views/mechanic/appointments.php';
        break;

    case 'my_appointments':
        session_start();
        $db = App::getDB();
        $stmt = $db->prepare("SELECT * FROM Appointment WHERE idUser = ?");
        $stmt->execute([$_SESSION['user']->idUser]);
        $appointments = $stmt->fetchAll(PDO::FETCH_OBJ);
        include '../app/views/client/my_appointments.php';
        break;

    case 'new_appointment':
        include '../app/views/client/new_appointment.php';
        break;
        
    case 'login':
        include '../app/views/auth/login.php';
        break;

    case 'register':
        include '../app/views/auth/register.php';
        break;

    default:
        include '../app/views/auth/start.php';
        break;
}
