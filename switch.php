<?php

abstract class Question {}
class Single extends Question{}
class Multiple extends Question{}

$input = 'single';
switch ($input) {
    case 'single':
        $question = new Single();
        break;
    case 'multi':
        $question = new Multiple();
        break;
    default:
        throw new Exception('Invalid question type');
}

var_dump($question);

switch (1) {
    case 0:
        $result = 'Foo';
        break;
    case 1:
        $result = 'Bar';
        break;
    case 2:
        $result = 'Baz';
        break;
}

echo $result;

echo match (1) {
    0 => 'Foo',
    1 => 'Bar',
    2 => 'Baz',
};