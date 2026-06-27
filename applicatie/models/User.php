<?php

require_once __DIR__ . '/BaseModel.php';

class User extends BaseModel
{
    /**
     * Get all users.
     * 
     * @return array
     */
    public function all(): array
    {
        return $this->db->query("SELECT * FROM [User]")->fetchAll();
    }

    /**
     * Check if user is logged in
     *
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return isset($_SESSION['auth']) && $_SESSION['auth'] === true;
    }

    /**
     * Check if user has a certain role
     *
     * @param  mixed $role
     * @return bool
     */
    public function hasRole(string $role): bool
    {
        return $this->isLoggedIn() && $_SESSION['role'] === $role;
    }

    /**
     * Get the currently logged in user.
     *
     * @return array|false
     */
    public function getCurrentUser(): array|false
    {
        if (!$this->isLoggedIn()) {
            return false;
        }

        $stmt = $this->db->prepare("SELECT TOP 1 * FROM [User] WHERE username = :username");
        $stmt->execute(['username' => $_SESSION['username']]);
        return $stmt->fetch();
    }

    /**
     * Try to login the user with given credentials.
     * NOTE: Because passwords in the DB are hard coded, no password_verify is used.
     * 
     * @param string $username The username of the user
     * @param string $password The password of the user
     * @return bool
     */
    public function login(string $username, string $password): bool
    {
        $user = $this->db->prepare("SELECT TOP 1 * FROM [User] WHERE username = :username AND password = :password");
        $user->execute(['username' => $username, 'password' => $password]);
        $user = $user->fetch();

        if (!$user) {
            return false;
        }

        session_regenerate_id(true);
        $_SESSION['auth'] = true;
        $_SESSION['role'] = $user['role'];
        $_SESSION['username'] = $user['username'];

        return true;
    }

    /**
     * Register a new user.
     *
     * @param string $firstname The firstname of the user
     * @param string $lastname The lastname of the user
     * @param string $username The username of the user
     * @param string $password The password of the user
     * @return bool
     */
    public function register(string $firstname, string $lastname, string $username, string $password): bool
    {
        // Check if username already exists
        $stmt = $this->db->prepare("SELECT TOP 1 * FROM [User] WHERE username = :username");
        $stmt->execute(['username' => $username]);

        if ($stmt->fetch()) {
            return false;
        }

        // Password is hardcoded instead of hashed, because the rest of the passwords are also hardcoded
        $stmt = $this->db->prepare("INSERT INTO [User] (username, password, first_name, last_name, role) VALUES (:username, :password, :firstname, :lastname, 'Client')");
        $stmt->execute([
            'username' => $username,
            'password' => $password,
            'firstname' => $firstname,
            'lastname' => $lastname
        ]);

        session_regenerate_id(true);
        $_SESSION['auth'] = true;
        $_SESSION['role'] = 'Client';
        $_SESSION['username'] = $username;

        return true;
    }

    /**
     * Log the user out
     *
     * @return void
     */
    public function logout(): void
    {
        unset($_SESSION['auth']);
        unset($_SESSION['role']);
        unset($_SESSION['username']);
        session_regenerate_id();
    }
}
