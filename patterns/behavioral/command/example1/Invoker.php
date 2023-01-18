<?php

class Invoker
{

    private CommandInterface $onStart;
    private CommandInterface $onFinish;

    public function setOnStart(CommandInterface $command): void
    {
        $this->onStart = $command;
    }

    public function setOnFinish(CommandInterface $command): void
    {
        $this->onFinish = $command;
    }

    public function doSomethingImportant(): void
    {
        echo "Invoker: does anybody want do it before?\n";

        $this->onStart->execute();

        echo "Invoker: doing something real important...";

        $this->onFinish->execute();
    }

}