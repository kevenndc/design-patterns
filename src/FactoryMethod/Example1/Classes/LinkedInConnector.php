<?php

namespace Src\FactoryMethod\Example1\Classes;

use Src\FactoryMethod\Example1\Interfaces\SocialNetworkConnector;

class LinkedInConnector implements SocialNetworkConnector
{
    public function __construct(
        private string $email,
        private string $password,
    ) {}
    
    public function logIn(): void
    {
        echo "Logged in user '{$this->email}' on LinkedIn with password '{$this->password}'" . PHP_EOL;
    }
    
    public function logOut(): void
    {
        echo "User {$this->email} logged out of LinkedIn" . PHP_EOL;
    }
    
    public function createPost(string $content): void
    {
        echo "New LinkedIn post:" . PHP_EOL;
        echo $content . PHP_EOL;
    }
}