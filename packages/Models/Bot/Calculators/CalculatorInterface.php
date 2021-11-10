<?php

namespace Packages\Models\Bot\Calculators;

use Packages\Models\Turn\Turn;

interface CalculatorInterface
{
    public function __construct(Turn $turn);

    public function culculate(): int;
}