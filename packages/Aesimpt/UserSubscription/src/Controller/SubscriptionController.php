<?php
namespace Aesimpt\UserSubscription\Controllers;

use Illuminate\Http\Request;
use Auth;

class SubscriptionController extends Controller
{
    public function subscribe(Request $requests)
    {
        $user = Auth::user();

        $request  = $requests->all();

        $token = $this->getToken($request); // 'tok_1C86FfFm41XctqusAzOOezDM';

        $selectedPlanName = $request['plan_name']; // main
        $selectedPlanId = $request['plan_id']; // 1

        return $user->newSubscription($selectedPlanName, $selectedPlanId)->create($token, [
            'email' => $user->email,
        ]);
    }

    public function changeSubscription(Request $requests)
    {
        $user = Auth::user();

        $request  = $requests->all();
        $newPlanId   = $request['plan_id'];

        $subscription = $user->subscription()
            ->orderBy('id', 'desc')
            ->get()
            ->first();

       return $user->subscription($subscription->name)
            ->swap($newPlanId);
    }

    public function resume()
    {
        $user = Auth::user();

        $subscription = $user->subscription()
            ->orderBy('id', 'desc')
            ->get()
            ->first();

        return $user->subscription($subscription->name)->resume();
    }

    public function cancel()
    {
        $user = Auth::user();

        $subscription = $user->subscription()
            ->orderBy('id', 'desc')
            ->get()
            ->first();

        return $user->subscription($subscription->name)->cancel();
    }

    private function getToken($requst)
    {
        $pubKey = env('STRIPE_KEY');
        // $pubKey = 'pk_test_LWt6tWSaL3yrSctl4aKVbn9R';
        $cardNumber = $requst['cardNumber']; // "4242424242424242";
        $cvc = $requst['cvc']; //"123";
        $expMonth = $requst['expMonth']; //"11";
        $expYear = $requst['expYear'];//"2018";

        $client = new \GuzzleHttp\Client();

        $headers = [
            'Pragma' => 'no-cache',
            'Origin' => 'https://js.stripe.com',
            'Accept-Encoding' => 'gzip, deflate',
            'Accept-Language' => 'en-US,en;q=0.8',
            'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.104 Safari/537.36',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'Accept' => 'application/json',
            'Cache-Control' => 'no-cache',
            'Referer' => 'https://js.stripe.com/v2/channel.html?stripe_xdm_e=http%3A%2F%2Fwww.beanstalk.dev&stripe_xdm_c=default176056&stripe_xdm_p=1',
            'Connection' => 'keep-alive'
        ];

        $postBody = [
            'key' => $pubKey,
            'payment_user_agent' => 'stripe.js/Fbebcbe6',
            'card[number]' => $cardNumber,
            'card[cvc]' => $cvc,
            'card[exp_month]' => $expMonth,
            'card[exp_year]' => $expYear,
        ];

        $response = $client->post('https://api.stripe.com/v1/tokens', [
            'headers' => $headers,
            'form_params' => $postBody
        ]);

        $response = json_decode($response->getbody()->getContents());

        return $response->id;
    }
}
