<?php
$numbers = array(
    'visa'       => array('4242424242424242', '4012888888881881'),
    'mastercard' => array('5555555555554444', '5105105105105100'),
    'amex'       => array('378282246310005', '371449635398431'),
    'discover'   => array('6011111111111117', '6011000990139424'),
    'diner'      => array('30569309025904', '38520000023237'),
    'jcb'        => array('3530111333300000', '3566002020360505'),
);

$fails = array(
    'address zip' => '4000000000000010',
    'address'     => '4000000000000028',
    'zip'         => '4000000000000036',
    'cvc check'   => '4000000000000101',
    'charge'      => '4000000000000341',
    'declined'    => '4000000000000002',
    'cvc'         => '4000000000000127',
    'expired'     => '4000000000000069',
    'processing'  => '4000000000000119'
);

$query   = trim(strtolower("{query}"));
$find    = array('mc', 'disc', 'diner\'s club','american express');
$replace = array('mastercard', 'discover', 'diner', 'amex');
$query   = str_replace($find, $replace, $query);
$rand    = rand(0, 1);

if (array_key_exists($query, $numbers)) {
    print $numbers[$query][$rand];
}
elseif (array_key_exists($query, $fails)) {
    print $fails[$query];
}
elseif (stristr($query, 'address') || stristr($query, 'zip')) {
    print $fails['address zip'];
}
elseif (stristr($query, 'cvc')) {
    print $fails['cvc check'];
}
elseif ($query == 'fail') {
    print $fails[array_rand($fails)];
}
else {
    print $numbers[array_rand($numbers)][$rand];
}
4242424242424242510510510510510040128888888818813566002020360505