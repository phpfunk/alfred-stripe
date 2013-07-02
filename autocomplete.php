<?php

function arrayToXML($a)
{
    if (! is_array($a)) {
        return false;
    }

    $items = new SimpleXMLElement("<items></items>");

    foreach($a as $b) {
        $c = $items->addChild('item');
        $c_keys = array_keys($b);
        foreach($c_keys as $key) {
            if ($key == 'uid') {
                $c->addAttribute('uid', $b[$key]);
            }
            elseif ($key == 'arg') {
                $c->addAttribute('arg', $b[$key]);
            }
            else {
                $c->addChild($key, $b[$key]);
            }
        }
    }

    return $items->asXML();
}

$query    = trim(strtolower("{query}"));
$len      = strlen($query);
$commands = array(
    'visa'             => 'A valid Visa card number',
    'mastercard'       => 'A valid Mastercard card number',
    'discover'         => 'A valid Discover card number',
    'american express' => 'A valid American Express card number',
    'diner\'s club'    => 'A valid Diner\'s Club card number (they still make these?)',
    'jcb'              => 'A valid JCB card number',
    'random'           => 'A valid random credit number',
    'address zip'      => 'An invalid card number for Address &amp; Zip failure',
    'address'          => 'An invalid card number for Address failure',
    'zip'              => 'An invalid card number for Zip Code failure',
    'cvc check'        => 'An invalid card number for CVC check failure',
    'charge'           => 'An invalid card number for Charge failure',
    'declined'         => 'An invalid card number for Card Declined',
    'cvc'              => 'An invalid card number for invalid CVC',
    'expired'          => 'An invalid card number for an expired credit card',
    'processing'       => 'An invalid card number for general processing error',
    'fail'             => 'A random invalid card number'
);

ksort($commands);

$results = array();
foreach ($commands as $key => $subtitle) {
    $title = ucwords($key);
    $title = ($title =='Jcb') ? 'JCB' : $title;
    $title = str_replace('Cvc', 'CVC', $title);
    $title = ($title =='Address Zip') ? 'Address &amp; Zip' : $title;
    if (empty($query) || substr($key, 0, $len) == $query) {
        $key = ($key == "diner's club") ? 'diner' : $key;
        array_push($results, array(
            'uid'             => str_replace(' ', '-', $key),
            'arg'             => $key,
            'title'           => $title,
            'subtitle'        => $subtitle,
            'icon'            => 'icon.png',
            'autocomplete'    => $key
        ));
    }
}

if (! empty($results)) {
    print arrayToXML($results);
}
