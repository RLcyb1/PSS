<?php
class AuthCtrl {
  public function registerUser() {
    echo "➡️ START REJESTRACJI<br>";

    if (!isset($_POST['login']) || !isset($_POST['password'])) {
        echo "❌ Brak loginu lub hasła<br>";
        exit;
    }

    $login = $_POST['login'];
    $password = $_POST['password'];

    echo "📥 Dane otrzymane: login = $login<br>";

    $db = App::getDB();
    $stmt = $db->prepare("INSERT INTO User (login, password) VALUES (?, ?)");
    $result = $stmt->execute([
        $login,
        password_hash($password, PASSWORD_DEFAULT)
    ]);

    if ($result) {
        echo "✅ Użytkownik dodany do bazy<br>";
        header('Location: /serwis_samochodowy/public/index.php?page=login');
        exit;
    } else {
        echo "❌ Błąd zapisu do bazy";
    }
  }

  public function loginUser() {
    $db = App::getDB();
    $stmt = $db->prepare("SELECT * FROM User WHERE login = ?");
    $stmt->execute([$_POST['login']]);
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if ($user && password_verify($_POST['password'], $user->password)) {
      session_start();
      $_SESSION['user'] = $user;
      header('Location: /serwis_samochodowy/public/index.php');
      exit;
    } else {
      echo "❌ Nieprawidłowy login lub hasło";
    }
  }
}
