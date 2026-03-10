<?php

namespace Secuconnect\Client\Printer;

/**
 * Class ImitationDevicePrinter
 */
class ImitationDevicePrinter implements Printer
{
    /**
     * Function to print user code for imitation device from an obtained token.
     *
     * @param object $token
     * @return void
     */
    public function printUserCode($token): void
    {
        if (isset($token->user_code)) {
            echo 'Your user code is: ' . $token->user_code . PHP_EOL;

            if (isset($token->verification_url)) {
                echo "Please enter this code on: {$token->verification_url} or ";
            } else {
                echo 'Please ';
            }

            echo ' call +49(0)35955/7550825 to verify your device.' . PHP_EOL;
        } else {
            echo 'Something went wrong. Please try to obtain user code again.' . PHP_EOL;
        }
    }
}
