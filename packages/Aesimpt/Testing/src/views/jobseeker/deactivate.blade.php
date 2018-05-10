@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title"><span class="nav-icon icon-my-account"></span>My Account</h2>
        <div class="dashboard-tab-inner">

            @include('account::jobseeker.includes.menu')

            <div class="row dashboard-tab-content">
                <form class="dashboard-form">
                    <div class="col-md-12 form-sec">
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                    </div>
                    <div class="col-md-12 form-sec">
                        <a href="#" class="btn btn-secondary uppercase">Deactivate Account</a>
                    </div>
                </form>
            </div> <!-- .dashboard-tab-content -->
        </div> <!-- .dashboard-tab-inner -->
    </div><!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection