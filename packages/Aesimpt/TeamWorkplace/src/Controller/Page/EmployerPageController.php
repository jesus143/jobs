<?php

namespace Aesimpt\TeamWorkplace\Controllers\Page;

use Illuminate\Http\Request;
use Aesimpt\TeamWorkplace\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;

class EmployerPageController extends Controller
{
    public function soon()
    {
        return view('team-workplace::employer.soon');
    }
}