<?php

namespace app\Domain\Todo;

class TodoService
{
    private $todoRepository;

    public function __construct(TodoRepository $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function createTodoItem(string $title, string $description): bool
    {
        // Validate todo item data (e.g., title and description not empty)

        // Create a new TodoItem instance
        $todoItem = new TodoItem(null, $title, $description);

        // Save the todo item to the repository
        return $this->todoRepository->save($todoItem);
    }

    public function markTodoItemAsCompleted(int $id): bool
    {
        // Fetch the todo item by its ID
        $todoItem = $this->todoRepository->getById($id);

        if ($todoItem !== null) {
            // Mark the todo item as completed
            $todoItem->markAsCompleted();

            // Update the todo item in the repository
            return $this->todoRepository->update($todoItem);
        }

        return false;
    }

    public function deleteTodoItem(int $id): bool
    {
        // Delete the todo item by its ID
        return $this->todoRepository->delete($id);
    }

    public function getAllTodoItems(): array
    {
        // Retrieve all todo items from the repository
        return $this->todoRepository->getAll();
    }
}
