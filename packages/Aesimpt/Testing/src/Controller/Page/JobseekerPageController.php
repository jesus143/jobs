<?php

namespace Aesimpt\Account\Controllers\Page;

use Illuminate\Http\Request;
use Aesimpt\Account\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;

class JobseekerPageController extends Controller
{
    public function email()
    {
        return view('account::jobseeker.email');
    }

    public function password()
    {
        return view('account::jobseeker.password');
    }

    public function name()
    {
        return view('account::jobseeker.name');
    }

    public function deactivate()
    {
        return view('account::jobseeker.deactivate');
    }
}
