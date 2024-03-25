<?php
class Menu {
    public $id;
    public $name;
    public $categorie_id;

    public function __construct(string $id, string $name, string $categorie_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->categorie_id = $categorie_id;
    }

    public static function getAllFromDatabase(mysqli $conn): array {
        $sql = "SELECT * FROM menu";
        $result = mysqli_query($conn, $sql);
        $menus = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $menus[] = new Menu($row['id'], $row['name'], $row['categorie_id']);
        }
        return $menus;
    }

    public function afficherMenu()
    {
        if (empty($this->menus)) {
            return false;
        }
    }
}
?>
