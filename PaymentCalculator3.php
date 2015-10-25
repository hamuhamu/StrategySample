<?php
class PaymentCalculator3
{
    public function calc(User $user, Amount $amount)
    {
        $strategy = UserAmountStrategy::create($user);

        return $strategy->calc($amount);
    }
}

class UserAmountStrategy
{
    public static function create(User $user)
    {
        $grade  = $user->getGrade();
        $sex    = $user->getSex();

        if ($grade === 'ゴールド') {
            return new NineDiscountAmountStrategy();
        }

        if ($grade === 'シルバー') {
            return new NineFiveDiscountAmountStrategy();
        }

        if ($grade === '一般' && $sex === '女性') {
            return new NineFiveDiscountAmountStrategy();
        }

        return new NormalAmountStrategy();
    }
}
