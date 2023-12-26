<?php
require_once __DIR__ . "/../_config/db.php";
class User
{
    public $id;
    public $profil;
    public $email;
    public $username;
    private $password;

    public function __construct($id = null)
    {
        global $db;

        $result = $db->query("SELECT * FROM users WHERE users_id = '$id'");
        $user = $result->fetch_assoc();

        $this->id = $user['users_id'];
        $this->profil = $user['profile'];
        $this->email = $user['users_email'];
        $this->username = $user['users_username'];
        $this->password = $user['users_password'];
    }

    static function getAll()
    {
        global $db;
        $result = $db->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static function selectwhere($var)
{
    global $db;
    $result = $db->query("SELECT * FROM users $var");
    return $result->fetch_all(MYSQLI_ASSOC);
}

    function edit()
    {
        global $db;
        return $db->query("UPDATE users SET profile = '$this->profil', users_email = '$this->email', users_username = '$this->username' WHERE users_id = '$this->id'");
    }

    public static function INSERT($profil, $username, $email, $password)
    {
        global $db;
    
        try {

            if (!$db) {
                echo "Error: Database connection is not valid.";
                return false;
            }
    
            // Prepare the query
            $query = "INSERT INTO users (profile, users_username, users_email, users_password) VALUES (?, ?, ?, ?)";
            $stmt = $db->prepare($query);
    
            // Check if prepare was successful
            if ($stmt) {
                // Bind parameters
                $stmt->bind_param("ssss", $profil, $username, $email, $password);
    
                // Execute the statement
                $result = $stmt->execute();
    
                // Check for successful execution
                if ($result) {
                    echo "Data inserted successfully.";
                } else {
                    echo "Error executing query: " . $stmt->error;
                }
            } else {
                echo "Error preparing statement: " . $db->error;
            }
        } catch (mysqli_sql_exception $e) {
            echo "Exception: " . $e->getMessage();
        }
    }

}
