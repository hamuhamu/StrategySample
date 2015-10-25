<?php
class PaymentCalculator2
{
    public function calc(User $user, Amount $amount)
    {
        $grade  = $user->getGrade();
        $sex    = $user->getSex();

        if ($grade === 'ゴールド') {
            return (new NineDiscountAmountStrategy())->calc($amount);
        }

        if ($grade === 'シルバー') {
            return (new NineFiveDiscountAmountStrategy())->calc($amount);
        }

        if ($grade === '一般' && $sex === '女性') {
            return (new NineFiveDiscountAmountStrategy())->calc($amount);
        }

        return (new NormalAmountStrategy())->calc($amount);
    }
}
