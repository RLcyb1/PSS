
// Dodaj do switch w public/index.php:

case 'admin_users':
    $db = App::getDB();
    $stmt = $db->query("SELECT * FROM User");
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
