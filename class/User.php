<?php
class User
{
    private $db;

	public function __construct()
	{
		try {
            include 'config.php';

			$this->db = new PDO("mysql:dbname=" . $config['db'] . ";host=" . $config['host'] . "", "" . $config['user'] . "", "" . $config['pass'] . "");
		} catch (PDOException $e) {
			echo "FALHA: " . $e->getMessage();
		}
	}

    /**
     * logar
     */
    public function get()
    {
        $sql = $this->db->prepare("
            SELECT * FROM users 
            WHERE id = :id
        ");
		$sql->bindValue(":id", $_SESSION['lg']);
		$sql->execute();

        $data = $sql->fetch(PDO::FETCH_ASSOC);

        return $data;
    }
}