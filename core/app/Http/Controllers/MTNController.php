<?php

namespace App\Http\Controllers;

use App\Models\Deposits;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Gateway;
use App\Models\Settings;
use App\Models\Currency;
use App\Models\Charges;
use Session;
use Stripe\Stripe;
use Stripe\Token;
use Stripe\Charge;

class MTNController extends Controller
{
   
    public function request_auth()
    {
        // This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://sandbox.momodeveloper.mtn.com/collection/v1_0/bc-authorize');
$url = $request->getUrl();

$headers = array(
    // Request headers
    'Authorization' => '',
    'X-Target-Environment' => '',
    'X-Callback-Url' => '',
    'Content-Type' => 'application/x-www-form-urlencoded',
    'Ocp-Apim-Subscription-Key' => '{subscription key}',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_POST);

// Request body
$request->setBody("{body}");

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}
    }



}