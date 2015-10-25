<?php
require_once 'User.php';
require_once 'Amount.php';
require_once 'Strategy.php';
require_once 'PaymentCalculator3.php';

$calculator = new PaymentCalculator3();

$user   = new User('ゴールド', '女性');
$amount = new Amount(1000);

$calcedAmount = $calculator->calc($user, $amount);

echo $calcedAmount->getValue();
echo "\r\n";


$user   = new User('シルバー', '女性');
$amount = new Amount(1000);

$calcedAmount = $calculator->calc($user, $amount);

echo $calcedAmount->getValue();
echo "\r\n";


$user   = new User('一般', '女性');
$amount = new Amount(1000);

$calcedAmount = $calculator->calc($user, $amount);

echo $calcedAmount->getValue();
echo "\r\n";


$user   = new User('一般', '男性');
$amount = new Amount(1000);

$calcedAmount = $calculator->calc($user, $amount);

echo $calcedAmount->getValue();
echo "\r\n";
