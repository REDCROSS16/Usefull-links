<?php

$invoker = new Invoker();
$invoker->setOnFinish(new SimpleCommand('Say hello'));

$receiver = new Receiver();
$invoker->setOnFinish(new ComplexCommand($receiver, 'Send email', 'Send report'));
$invoker->doSomethingImportant();
