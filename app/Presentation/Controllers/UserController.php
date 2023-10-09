<?php

namespace app\Presentation\Controllers;

use app\Domain\User\UserService;

class UserController
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function registerUser()
    {
        // Handle a POST request to register a new user
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Call the UserService to register the user
            $success = $this->userService->registerUser($username, $email, $password);

            if ($success) {
                // Redirect to a success page or show a success message
                header('Location: /registration-success');
                exit();
            } else {
                // Handle registration failure, e.g., show an error message
                echo 'Registration failed.';
            }
        } else {
            // Display the registration form (GET request)
            // You can include an HTML form here to capture user registration data
            // Example: include('registration_form.php');
        }
    }

    public function viewProfile(int $userId)
    {
        // Handle a request to view a user's profile by their ID
        $user = $this->userService->getUserById($userId);

        if ($user !== null) {
            // Display the user's profile
            // Example: include('user_profile.php');
        } else {
            // Handle user not found, e.g., show a 404 page or error message
            echo 'User not found.';
        }
    }
}