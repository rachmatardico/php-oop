<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodbye(?string $name):void
    {
        if (is_null($name)) {
            echo "Goodbye" . PHP_EOL;
        }else {
            echo "Goodbye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name):void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        }else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName 
{
    public string $name;
}

trait CanRun
{
    public abstract function run():void;
}

class ParentPerson
{
    public function goodbye(?string $name): void
    {
        echo "Goodbye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

trait All 
{
    use SayGoodBye, SayHello, HasName, CanRun{
        // Bisa diubah visibility nya
        // hello as private;
        // goodbye as private; 
    }
}

class Person extends ParentPerson
{
    use All;
    
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}