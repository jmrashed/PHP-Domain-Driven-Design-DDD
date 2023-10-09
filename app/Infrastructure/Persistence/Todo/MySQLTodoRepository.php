<?php

namespace app\Infrastructure\Persistence\Todo;

use app\Domain\Todo\TodoItem;
use app\Domain\Todo\TodoRepository;

class MySQLTodoRepository implements TodoRepository
{
    private $db; // Your database connection

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getById(int $id): ?TodoItem
    {
        // Implement fetching a todo item by its ID from the MySQL database
        // Use prepared statements to prevent SQL injection
        // Example query: "SELECT * FROM todo_items WHERE id = :id"

        // Return a TodoItem instance or null if not found
    }

    public function getAll(): array
    {
        // Implement fetching all todo items from the MySQL database
        // Example query: "SELECT * FROM todo_items"

        // Return an array of TodoItem instances
    }

    public function save(TodoItem $todoItem): bool
    {
        // Implement saving a new todo item to the MySQL database
        // Example query: "INSERT INTO todo_items (title, description) VALUES (:title, :description)"

        // Return true on success, false on failure
    }

    public function update(TodoItem $todoItem): bool
    {
        // Implement updating a todo item in the MySQL database
        // Example query: "UPDATE todo_items SET title = :title, description = :description, completed = :completed WHERE id = :id"

        // Return true on success, false on failure
    }

    public function delete(int $id): bool
    {
        // Implement deleting a todo item from the MySQL database by its ID
        // Example query: "DELETE FROM todo_items WHERE id = :id"

        // Return true on success, false on failure
    }
}