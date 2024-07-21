<?php

namespace App;

class Student
{
    public function __construct(
        private string $name,
        private int $age,
        private float $avgGrade,
        private ?string $gender = null,
        private ?string $groupName = null,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getAvgGrade(): float
    {
        return $this->avgGrade;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getGroupName(): string
    {
        return $this->groupName;
    }

    public function showInfo(): void
    {
        echo "Имя - {$this->name}, Возраст - {$this->age}, Средний балл - {$this->avgGrade}";
    }

    public function getAvgGradeString(): string
    {
        return match(true) {
            $this->avgGrade > 8 => 'Отлично',
            $this->avgGrade >= 6 => 'Хорошо',
            $this->avgGrade >= 4 => 'Удовлетворительно',
            default => 'Неудовлетворительно'
        };
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;
        return $this;
    }

    public function setAvgGrade(float $avgGrade): static
    {
        $this->avgGrade = $avgGrade;
        return $this;
    }

    public function setGender(string $gender): static
    {
        if (($gender !== 'M') && ($gender !== 'F')) {
            throw new \RuntimeException('Unknown gender');
        }
        $this->gender = $gender;
        return $this;
    }

    public function setGroupName(string $groupName): static
    {
        $this->groupName = $groupName;
        return $this;
    }
}
