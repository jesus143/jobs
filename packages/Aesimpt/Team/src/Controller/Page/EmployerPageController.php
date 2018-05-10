<?php

namespace Aesimpt\Team\Controllers\Page;

use Illuminate\Http\Request;
use Aesimpt\Team\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;

class EmployerPageController extends Controller
{
    public function active()
    {
        return view('team::employer.active');
    }

    public function invited()
    {
        return view('team::employer.invited');
    }

    public function pastEmployees()
    {
        return view('team::employer.past-employees');
    }
}
