<?php

namespace Src\FactoryMethod\Example1;

use Src\FactoryMethod\Example1\Classes\FacebookPoster;
use Src\FactoryMethod\Example1\Classes\LinkedInPoster;
use Src\FactoryMethod\Example1\Classes\SocialNetworkPoster;

class App
{
    public function __construct()
    {
        $this->post(new LinkedInPoster('kevenndc@email.com', 'passwd'));
    }
    
    public function post(SocialNetworkPoster $networkPoster): void
    {
        $networkPoster->post('Hello World!');
        $networkPoster->post('First real post.');
    }
}