<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class Greeting 
{

    /**
     * @var LoggerInterface
     */

    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function greet(string $name): string
    {
        $this->logger->info( "Greet " . $name );
        return "Hello " . $name;
    }
}