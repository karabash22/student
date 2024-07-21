<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Student;

$st1 = new Student('Вася', 18, 9);
$st2 = new Student('Петя', 29, 4);
$st3 = new Student('Анна', 22, 7, 'F', 'Прикладная информатика');

echo 'Студент 1: ' . PHP_EOL;
$st1->showInfo();
echo PHP_EOL . 'Оценка - ' . $st1->getAvgGradeString() . PHP_EOL;

echo PHP_EOL;
echo 'Студент 2: ' . PHP_EOL;
$st2->showInfo();
echo PHP_EOL . 'Оценка - ' . $st2->getAvgGradeString() . PHP_EOL;

echo PHP_EOL;
echo 'Студент 3: ' . PHP_EOL;
$st3->showInfo();
echo PHP_EOL . 'Оценка - ' . $st3->getAvgGradeString() . PHP_EOL;
echo 'Пол - ' . $st3->getGender() . PHP_EOL;
echo 'Группа - ' . $st3->getGroupName() . PHP_EOL;

echo PHP_EOL;
echo 'Изменение данных о студенте 1:' . PHP_EOL;
$st1->setName('Вася 2')
    ->setAge(19)
    ->setAvgGrade(2)
    ->setGender('M')
    ->setGroupName('Группа 1');

echo PHP_EOL;
$st1->showInfo();
echo PHP_EOL . 'Оценка - ' . $st1->getAvgGradeString() . PHP_EOL;
echo 'Пол - ' . $st1->getGender() . PHP_EOL;
echo 'Группа - ' . $st1->getGroupName() . PHP_EOL;
