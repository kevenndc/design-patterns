<?php

namespace Src\FactoryMethod\Example1\Classes;

use Src\FactoryMethod\Example1\Interfaces\SocialNetworkConnector;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;
    
    public function post(string $content): void
    {
        $network = $this->getSocialNetwork();
        $network->logIn();
        $network->createPost($content);
        $network->logOut();
    }
}