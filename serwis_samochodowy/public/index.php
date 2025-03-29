<?php
session_start();

require '../app/core/Config.class.php';
require '../app/core/App.class.php';
require '../app/controllers/AuthCtrl.class.php';
require '../app/controllers/ClientCtrl.class.php';
require '../app/controllers/MechanicCtrl.class.php';
require '../app/controllers/AdminCtrl.class.php';

// Akcje (POST/GET)
$action = $_GET['action'] ?? '';
if ($action === 'register') {
    (new AuthCtrl())->registerUser();
    exit;
}
if ($action === 'login') {
    (new AuthCtrl())->loginUser();
    exit;
}
if ($action === 'addAppointment') {
    (new ClientCtrl())->addAppointment();
    exit;
}
if ($action === 'updateStatus') {
    (new MechanicCtrl())->updateStatus();
    exit;
}
if ($action === 'changeRole') {
    (new AdminCtrl())->changeRole();
    exit;
}

// Widoki (GET)
$page = $_GET['page'] ?? '';
switch ($page) {
    case 'register':
        include '../app/views/auth/register.php';
        break;

    case 'login':
        include '../app/views/auth/login.php';
        break;

    case 'logout':
        session_destroy();
        header("Location: /serwis_samochodowy/public/index.php");
        break;

    case 'new_appointment':
        include '../app/views/client/new_appointment.php';
        break;

    case 'my_appointments':
        $db = App::getDB();
        $stmt = $db->prepare("SELECT * FROM Appointment WHERE idUser = ?");
        $stmt->execute([$_SESSION['user']->idUser]);
        $appointments = $stmt->fetchAll(PDO::FETCH_OBJ);
        include '../app/views/client/my_appointments.php';
        break;

    case 'mechanic_appointments':
        $db = App::getDB();
        $stmt = $db->query("SELECT * FROM Appointment");
        $appointments = $stmt->fetchAll(PDO::FETCH_OBJ);
        include '../app/views/mechanic/appointments.php';
        break;

    case 'admin_users':
        $db = App::getDB();
        $stmt = $db->query("SELECT * FROM User");
        $users = $stmt->fetchAll(PDO::FETCH_OBJ);
        include '../app/views/admin/users.php';
        break;

    default:
        if (isset($_SESSION['user'])) {
            echo "Witaj, " . htmlspecialchars($_SESSION['user']->login) . "!<br><br>";
            echo "<a href='?page=my_appointments'>Moje wizyty</a><br>";
            echo "<a href='?page=new_appointment'>Zarezerwuj wizytę</a><br>";
            echo "<a href='?page=mechanic_appointments'>Panel mechanika</a><br>";
            echo "<a href='?page=admin_users'>Panel administratora</a><br>";
            echo "<a href='?page=logout'>Wyloguj się</a><br>";
        } else {
            echo "Aplikacja Amelia gotowa do działania! Wybierz akcję: <br><br>";
            echo "<a href='?page=register'>Rejestracja</a><br>";
            echo "<a href='?page=login'>Logowanie</a><br>";
        }
        break;
}
