@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title"><span class="icon-team-workplace"></span>Team Workplace</h2>
        <div class="dashboard-tab-inner">

            <div class="row dashboard-tab-content">
                <div class="col-xs-4">
                    <img src="{{ asset('img/oes-graphic.jpg') }}">
                </div>
                <div class="col-xs-8">
                    <h3 class="accent-color">Lorem ipsum dolor sit amet. Aenean commodo ligula eget dolor!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    <a href="#" class="btn-secondary uppercase">Go to my team</a>
                </div>
                <span class="clearfix"></span>
            </div> <!-- .dashboard-tab-content -->

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection