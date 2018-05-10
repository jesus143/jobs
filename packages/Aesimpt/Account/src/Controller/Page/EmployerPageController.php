<?php

namespace Aesimpt\Account\Controllers\Page;

use Illuminate\Http\Request;
use Aesimpt\Account\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;

class EmployerPageController extends Controller
{
    public function email()
    {
        return view('account::employer.email');
    }

    public function password()
    {
        return view('account::employer.password');
    }

    public function name()
    {
        return view('account::employer.name');
    }

    public function deactivate()
    {
        return view('account::employer.deactivate');
    }

    public function paymentDetail()
    {
        return view('account::employer.payment-detail');
    }
}
