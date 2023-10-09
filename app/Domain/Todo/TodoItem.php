<?php

namespace app\Domain\Todo;

class TodoItem
{
    private $id;
    private $title;
    private $description;
    private $completed;

    public function __construct(int $id, string $title, string $description, bool $completed = false)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }

    public function markAsCompleted(): void
    {
        $this->completed = true;
    }

    public function markAsIncomplete(): void
    {
        $this->completed = false;
    }
}