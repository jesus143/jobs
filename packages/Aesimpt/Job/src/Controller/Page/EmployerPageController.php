<?php

namespace Aesimpt\Job\Controllers\Page;

use Illuminate\Http\Request;
use Aesimpt\Job\Controllers\Controller;

use Auth;
use Redis;
use App\User;
use Illuminate\Support\Facades\Input as Input;

use Aesimpt\Job\Traits\Controller\Page\ApplicationJobPageControllerTrait as Application;
use Aesimpt\Job\Traits\Controller\Page\PostJobPageControllerTrait as Post;

class EmployerPageController extends Controller
{
    use Application, Post;
}