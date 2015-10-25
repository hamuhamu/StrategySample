<?php
class PaymentCalculator1
{
    public function calc(User $user, Amount $amount)
    {
        $grade  = $user->getGrade();
        $sex    = $user->getSex();

        if ($grade === 'ゴールド') {
            return new Amount(floor($amount->getValue() * 0.90));
        }

        if ($grade === 'シルバー') {
            return new Amount(floor($amount->getValue() * 0.95));
        }

        if ($grade === '一般' && $sex === '女性') {
            return new Amount(floor($amount->getValue() * 0.95));
        }

        return new Amount($amount->getValue());
    }
}
