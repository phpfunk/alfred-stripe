If you are working with Stripe and like me, I never remember the test credit card numbers. I always have to look them up. Look no more.

This extension will assign a credit card number to your clipboard and automatically paste to your front most application (not Alfred). That means if you are testing you place your cursor at your input field, press a key command and get a random successful or failure Stripe number.

You can also get exactly the number you would like by invoking Alfred rather than the hotkeys so if you want to test CVC failure you can, Discover Card, you can, etc.

## Quick Video
<iframe width="560" height="315" src="//www.youtube.com/embed/-wWHEIG-cwU" frameborder="0" allowfullscreen></iframe>

## Hotkeys
Both will copy the number to your clipboard and automatically paste to your front most window. So just highlight your form field and press one of the hotkeys below.

### A Valid Credit Card Number
    Option + Command + S

### An Invalid Credit Card Number
    Option + Command + Control + S

## Valid Numbers
If you want to get a specific card type's number you can invoke Alfred search box and type one of the following commands. Each one will give you one of two random valid credit card numbers for that card type, copy it to your clipboard and try to paste into your front most application.

### Visa
    stripe visa

### Mastercard
    stripe mc
    stripe mastercard

### American Express
    stripe amex
    stripe american express

### Discover Card
    stripe disc
    stripe discover

### Diner's Club
    stripe diner
    stripe diner's club

### JCB
    stripe jcb

### Random
    stripe

## Error Numbers
If you want to test specific error response, you can do that to. Same process as above, will copy to clipboard as well as attempt to paste to front most app.

### Address & Zip Code Failure
    stripe address zip

### Address Failure
    stripe address

### Zip Code Failure
    stripe zip

### CVC Check Failure
    stripe cvc check

### Charge Failure
    stripe charge

### Card Declined
    stripe declined

### Invalid CVC
    stripe cvc

### Card Expired
    stripe expired

### Processing Error
    stripe processing

### Random Error
    stripe fail


## Change Log

#### 1.0.0 - July 2, 2013
- Initial Release