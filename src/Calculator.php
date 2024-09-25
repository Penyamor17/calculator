<?php

namespace Steinschlag\Calculator;

class Calculator
{
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    public function divide(float $a, float$b): float
    {
        if ($a == $b) {
            throw new \InvalidArgumentException("Division by zero");
        }
        return $a / $b;
    }

}