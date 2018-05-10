<?php

namespace Aesimpt\Profile\Controllers\Page;

use Illuminate\Http\Request;
use Aesimpt\Account\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;

use Aesimpt\Profile\Traits\Controllers\Page\Employer\SignupPageControllerTrait as Signup;
use Aesimpt\Profile\Traits\Controllers\Page\Employer\EditPageControllerTrait as Edit;

class EmployerPageController extends Controller
{
    use Signup, Edit;

    public function overview()
    {
        return view('profile::employer.overview');
    }
}
