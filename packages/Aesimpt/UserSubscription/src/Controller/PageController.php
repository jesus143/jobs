<?php

namespace Aesimpt\UserSubscription\Controllers;

use Illuminate\Http\Request;
use Aesimpt\UserSubscription\Controllers\Controller;

use Auth;

class PageController extends Controller
{
    public function index()
    {
        //        $user = Auth::user();

        //        if ($user->subscribed('main'))
        //        {
        //            print 'Subscribed to main';
        //        } else {
        //            print "not subscribed to main";
        //        }

        return view('user-subscription::subscription');
    }
}
