<?php

use Order\Command;

class PaymentValidation
{
    private string $manager;

    public function setCommand(Command $command): Command
    {
        $command->setValidated(true)
            ->setValidatedAt(new \DateTime());

        return $command;
    }

    public function checkCommand(Command $command): bool
    {
        return $command->isValidated();
    }

    public function removeCommand(Command $command): void
    {
        $command->removed();
    }
}
