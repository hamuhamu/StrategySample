<?php

interface StrategyCalcInterface {
    public function calc(Amount $amount);
}

class NineDiscountAmountStrategy implements StrategyCalcInterface
{
    public function calc(Amount $amount)
    {
        return new Amount(floor($amount->getValue() * 0.90));
    }
}

class NineFiveDiscountAmountStrategy implements StrategyCalcInterface
{
    public function calc(Amount $amount)
    {
        return new Amount(floor($amount->getValue() * 0.95));
    }
}

class NormalAmountStrategy implements StrategyCalcInterface
{
    public function calc(Amount $amount)
    {
        return new Amount($amount->getValue());
    }
}
