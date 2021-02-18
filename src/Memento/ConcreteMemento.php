<?php


namespace App\Memento;


class ConcreteMemento implements MementoInterface
{
    private string $state;

    private string $date;

    public function __construct(string $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getName(): string
    {
        return $this->date . " / (" . substr($this->state, 0, 9) . "...)";
    }

}