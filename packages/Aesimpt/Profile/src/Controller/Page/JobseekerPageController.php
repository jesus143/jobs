<?php

namespace Aesimpt\Profile\Controllers\Page;

use Illuminate\Http\Request;
use Aesimpt\Account\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;

use Aesimpt\Profile\Traits\Controllers\Page\Jobseeker\SignupPageControllerTrait as Signup;
use Aesimpt\Profile\Traits\Controllers\Page\Jobseeker\EditPageControllerTrait as Edit;

class JobseekerPageController extends Controller
{
    use Signup, Edit;

    public function overview()
    {
        return view('profile::jobseeker.overview');
    }

    public function takeTest()
    {
        return view('profile::jobseeker.take-tests');
    }
}
