<?php

namespace app\Presentation\Controllers;

use app\Domain\Todo\TodoService;

class TodoController
{
    private $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function index()
    {
        // Handle a request to display a list of todo items
        $todoItems = $this->todoService->getAllTodoItems();

        // Display the list of todo items
        // You can include an HTML view to render the list
    }

    public function create()
    {
        // Handle a POST request to create a new todo item
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];

            // Call the TodoService to create a new todo item
            $success = $this->todoService->createTodoItem($title, $description);

            if ($success) {
                // Redirect to the list of todo items or a success page
                header('Location: /todos');
                exit();
            } else {
                // Handle creation failure, e.g., show an error message
                echo 'Todo creation failed.';
            }
        } else {
            // Display the todo creation form (GET request)
            // You can include an HTML form here to capture todo item data
            // Example: include('create_todo_form.php');
        }
    }

    public function complete(int $id)
    {
        // Handle a request to mark a todo item as completed by its ID
        $success = $this->todoService->markTodoItemAsCompleted($id);

        if ($success) {
            // Redirect to the list of todo items or a success page
            header('Location: /todos');
            exit();
        } else {
            // Handle completion failure, e.g., show an error message
            echo 'Todo completion failed.';
        }
    }

    public function delete(int $id)
    {
        // Handle a request to delete a todo item by its ID
        $success = $this->todoService->deleteTodoItem($id);

        if ($success) {
            // Redirect to the list of todo items or a success page
            header('Location: /todos');
            exit();
        } else {
            // Handle deletion failure, e.g., show an error message
            echo 'Todo deletion failed.';
        }
    }
}