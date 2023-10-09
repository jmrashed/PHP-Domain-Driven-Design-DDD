<?php

namespace app\Domain\Todo;

interface TodoRepository
{
    /**
     * Get a todo item by its ID.
     *
     * @param int $id
     * @return TodoItem|null
     */
    public function getById(int $id): ?TodoItem;

    /**
     * Get all todo items.
     *
     * @return array
     */
    public function getAll(): array;

    /**
     * Save a todo item.
     *
     * @param TodoItem $todoItem
     * @return bool
     */
    public function save(TodoItem $todoItem): bool;

    /**
     * Update a todo item.
     *
     * @param TodoItem $todoItem
     * @return bool
     */
    public function update(TodoItem $todoItem): bool;

    /**
     * Delete a todo item by its ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool;
}