<?php

namespace Src\FactoryMethod\Example1\Interfaces;

interface SocialNetworkConnector
{
    public function logIn(): void;
    
    public function logOut(): void;
    
    public function createPost(string $content): void;
}