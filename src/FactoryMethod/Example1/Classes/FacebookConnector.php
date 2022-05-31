<?php

namespace Src\FactoryMethod\Example1\Classes;

use Src\FactoryMethod\Example1\Interfaces\SocialNetworkConnector;

class FacebookConnector implements SocialNetworkConnector
{
    public function __construct(
        private string $login,
        private string $password,
    ) {}
    
    public function logIn(): void
    {
        echo "Logged in user '{$this->login}' in Facebook with password '{$this->password}'" . PHP_EOL;
    }
    
    public function logOut(): void
    {
        echo "User {$this->login} logged out of Facebook" . PHP_EOL;
    }
    
    public function createPost(string $content): void
    {
        echo "New Facebook post:" . PHP_EOL;
        echo $content . PHP_EOL;
    }
}