<?php

namespace Lesson08;

class Person
{
    private(set) string $id;

    public int $age {
        set {
            // check age range
            $this->age = $value;
        }
    }
    public string $town {
        set {
            // check town validity
            $this->town = $value;
        }
    }

    protected string $address;
    protected string $job;
    protected int $salary;

    public function __construct(public readonly string $name) {}

    protected function checkArea(): void
    {
        $address = $this->address;
        // do something with address
    }

    protected function roundUpStats(): array
    {
        // calculate some stats
        $id = $this->id;
        $job = $this->job;
        $salary = $this->salary;
        return compact('id', 'job', 'salary');
    }
}

$person = new Person('Jack');
$person->age = 23;
$person->town = 'Lawrence, KS';
echo $person->name . PHP_EOL;
echo $person->age . PHP_EOL;
echo $person->town . PHP_EOL;
$person->age = 24;
echo $person->age . PHP_EOL;
$person->town = 'Detroit, MI';
echo $person->town . PHP_EOL;
