<?php
/**
 * Классы Получателей содержат некую важную бизнес-логику. Они умеют выполнять
 * все виды операций, связанных с выполнением запроса. Фактически, любой класс
 * может выступать Получателем.
 */
class Receiver
{

    public function doSomething(string $a): void
    {
        echo "Receiver working on ( $a )\n";
    }

    public function doSomethingElse(string $b): void
    {
        echo "Receiver also working on ( $b )\n";
    }
}