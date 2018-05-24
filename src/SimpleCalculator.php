<?php
namespace Test;

class SimpleCalculator
{
    private $total = 0; #used to keep the running total

    #constructor, optional paramater $total sets a starting value for the running total or 0 if not specified
    public function __construct(int $total = 0)
    {
        $this->total = $total;
    }

    #function add, adds $addend to the running total
    public function add(int $addend)
    {
        $this->total += $addend;
    }

    #function sub, subtracts $subtrahend from the running total
    public function sub(int $subtrahend)
    {
        $this->total -= $subtrahend;
    }

    #function total, returns the running total
    public function total(): int
    {
        return $this->total;
    }

    #static function factory, returns a new SimpleCalculator object with a running total of 0
    public static function factory(): SimpleCalculator
    {
        return new SimpleCalculator();
    }
}
