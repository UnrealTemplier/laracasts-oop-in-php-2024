<?php

namespace Lesson07;

class Person
{
    protected string $address;
    protected string $job;
    protected int $salary;

    public function __construct(
        protected string $name,
        protected int $age,
        protected string $town,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getTown(): string
    {
        return $this->town;
    }

    public function setAge(int $age): void
    {
        // check age range
        $this->age = $age;
    }

    public function setTown(string $town): void
    {
        // check town validity
        $this->town = $town;
    }

    protected function checkArea(): void
    {
        $address = $this->address;
        // do something with address
    }

    protected function roundUpStats(): array
    {
        // calculate some stats
        $job = $this->job;
        $salary = $this->salary;
        return compact('job', 'salary');
    }
}

$person = new Person('John', 25, 'Boston');
echo $person->getName() . PHP_EOL;
echo $person->getAge() . PHP_EOL;
echo $person->getTown() . PHP_EOL;
$person->setAge(27);
echo $person->getAge() . PHP_EOL;
$person->setTown('New York');
echo $person->getTown() . PHP_EOL;
