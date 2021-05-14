<?php
namespace App\Utils;

use Twilio\Rest\Client;
use App\Models\BibleRequest;
use App\Http\Controllers\BibleStudyController;
use Exception;
use Log;

class Twilio
{
    public static function sendMessage($fname, $phone, $bsdate, $bstime)
    {
    // Your Account SID and Auth Token from twilio.com/console
    $account_sid = 'XXXXXXXXXXXXXXXXXXXXXXXXXXX'; 
    $auth_token = 'XXXXXXXXXXXXXXXXXXXXXXXXXXX';
    // In production, these should be environment variables. E.g.:
    // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

    // A Twilio number you own with SMS capabilities
    $twilio_number = "+17026239363";

    $message = 'Hi ' . $fname . ', you have succesfully registered a Bible Study request on '. $bsdate .' at exactly ' . $bstime . '. See you there!';
    $errormessage = 'Error!';
            try {
                $client = new Client($account_sid, $auth_token);
                $client->messages->create(
                    $phone,
                    array(
                        'from' => $twilio_number,
                        'body' => $message
                    )
                );
            } catch (Exception $e) {
                $errormessage;
            }

    }
}
