<?php


namespace App\Memento;


class Originator
{
    const MAIN_MESSAGE = "Hello World";

    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function handleState(): void
    {
        echo "Originator: I'm doing something important.\n";
        $this->state = self::MAIN_MESSAGE . ' - ' . rand(99, 999);
        echo "Originator: and my state has changed to: {$this->state}\n";
    }

    public function save(): MementoInterface
    {
        return new ConcreteMemento($this->state);
    }

    public function restore(MementoInterface $memento): void
    {
        $this->state = $memento->getState();
        echo "Originator: My state has changed to: {$this->state}\n";
    }
}