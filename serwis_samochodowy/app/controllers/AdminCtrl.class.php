
public function action_usersList(){
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $perPage = 10;
    $offset = ($page - 1) * $perPage;

    $total = $this->db->query("SELECT COUNT(*) FROM users")->fetchColumn();
    $stmt = $this->db->prepare("SELECT * FROM users LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    $users = $stmt->fetchAll();

    $this->smarty->assign('users', $users);
    $this->smarty->assign('totalPages', ceil($total / $perPage));
    $this->smarty->assign('currentPage', $page);

    $this->smarty->display('admin/users.php');
}
