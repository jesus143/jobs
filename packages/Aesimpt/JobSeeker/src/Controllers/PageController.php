<?php

namespace Aesimpt\JobSeeker\Controllers;

use Illuminate\Http\Request;
use Aesimpt\JobSeeker\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;

class PageController extends Controller
{
    public function bookmarked()
    {
        $user = Auth::user();

        return view('jobseeker::bookmarked');
    }

    public function search()
    {
        $user = Auth::user();

        return view('jobseeker::search');
    }
}
