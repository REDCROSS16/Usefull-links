<?php

/**
 * Некоторые команды способны выполнять простые операции самостоятельно.
 */
class SimpleCommand implements CommandInterface
{
    private string $payload;

    public function __construct(string $payload)
    {
        $this->payload = $payload;
    }

    public function execute(): void
    {
        echo "SimpleCommand: See, I can do simple things like printing (" . $this->payload . ")" . PHP_EOL;
    }
}