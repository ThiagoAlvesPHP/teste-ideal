<?php
class Login
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
    public function Logar($params)
    {
        $sql = $this->db->prepare("
            SELECT * FROM users 
            WHERE email = :email 
            AND password = :password
        ");
		$sql->bindValue(":email", $params['email']);
		$sql->bindValue(":password", md5($params['password']));
		$sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $_SESSION['lg'] = $data['id'];
            
            return true;
        } else {
            return false;
        }
    }
}