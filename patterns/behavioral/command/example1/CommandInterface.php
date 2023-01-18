<?php

/**
 * Интерфейс Команды объявляет метод для выполнения команд.
 */
interface CommandInterface
{
    public function execute(): void;
}