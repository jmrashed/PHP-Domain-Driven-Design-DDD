<?php

namespace app\Infrastructure\Persistence\User;

use app\Domain\User\User;
use app\Domain\User\UserRepository;

class MySQLUserRepository implements UserRepository
{
    private $db; // Your database connection

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getById(int $id): ?User
    {
        // Implement fetching a user by their ID from the MySQL database
        // Use prepared statements to prevent SQL injection
        // Example query: "SELECT * FROM users WHERE id = :id"

        // Return a User instance or null if not found
    }

    public function getByUsername(string $username): ?User
    {
        // Implement fetching a user by their username from the MySQL database
        // Example query: "SELECT * FROM users WHERE username = :username"

        // Return a User instance or null if not found
    }

    public function getByEmail(string $email): ?User
    {
        // Implement fetching a user by their email from the MySQL database
        // Example query: "SELECT * FROM users WHERE email = :email"

        // Return a User instance or null if not found
    }

    public function save(User $user): bool
    {
        // Implement saving a new user to the MySQL database
        // Example query: "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)"

        // Return true on success, false on failure
    }

    public function update(User $user): bool
    {
        // Implement updating a user in the MySQL database
        // Example query: "UPDATE users SET username = :username, email = :email, password = :password WHERE id = :id"

        // Return true on success, false on failure
    }

    public function delete(int $id): bool
    {
        // Implement deleting a user from the MySQL database by their ID
        // Example query: "DELETE FROM users WHERE id = :id"

        // Return true on success, false on failure
    }
}
