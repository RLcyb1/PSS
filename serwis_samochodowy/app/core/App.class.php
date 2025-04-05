
<?php


class App {
    private static $db;
    public static function getDB() {
        if (!isset(self::$db)) {
            $db_config = Config::$db;
            try {
                self::$db = new PDO(
                    "mysql:host={$db_config['host']};dbname={$db_config['database']};charset={$db_config['charset']}",
                    $db_config['user'],
                    $db_config['password']
                );
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                exit("Błąd połączenia z bazą: " . $e->getMessage());
            }
        }
        return self::$db;
    }
    public static function run() {
        echo "Aplikacja Amelia gotowa do działania!";
    }
}
