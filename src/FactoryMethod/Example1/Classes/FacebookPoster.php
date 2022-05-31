<?php

namespace Src\FactoryMethod\Example1\Classes;

use Src\FactoryMethod\Example1\Interfaces\SocialNetworkConnector;

class FacebookPoster extends SocialNetworkPoster
{
    public function __construct(
        private string $login,
        private string $password,
    ) {}
    
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}