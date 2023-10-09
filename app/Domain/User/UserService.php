<?php

namespace app\Domain\User;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerUser(string $username, string $email, string $password): bool
    {
        // Validate user input (e.g., check for valid email, strong password, unique username, etc.)

        // Hash the password for security (you should use a proper password hashing library)
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Create a new User instance
        $user = new User(null, $username, $email, $hashedPassword);

        // Save the user to the repository
        return $this->userRepository->save($user);
    }

    public function getUserById(int $userId): ?User
    {
        return $this->userRepository->getById($userId);
    }

    public function getUserByUsername(string $username): ?User
    {
        return $this->userRepository->getByUsername($username);
    }

    public function getUserByEmail(string $email): ?User
    {
        return $this->userRepository->getByEmail($email);
    }
}