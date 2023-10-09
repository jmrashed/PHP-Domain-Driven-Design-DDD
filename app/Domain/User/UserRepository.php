<?php

namespace app\Domain\User;

interface UserRepository
{
    public function getById(int $id): ?User;

    public function getByUsername(string $username): ?User;

    public function getByEmail(string $email): ?User;

    public function save(User $user): bool;

    public function update(User $user): bool;

    public function delete(int $id): bool;
}