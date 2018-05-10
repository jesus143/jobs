
@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area my-jobs">
        <h2 class="dashboard-tab-area-title"><span class="icon-jobs-active"></span>Post a New Job</h2>
        <div class="dashboard-tab-inner">

            <nav class="dashboard-tab-titles" style="margin:0;">
                @include('job::employer.includes.menu.post')
            </nav>

            <div class="dashboard-top-filter">
                @include('job::employer.includes.display.filter', ['jobs' => $jobs])
                <span class="clearfix"></span>
            </div>

            <div class="row dashboard-tab-content">
                @each('job::employer.includes.display.detail', $jobs, 'job', 'job::employer.includes.display.empty')
            </div>

                {{ $jobs->appends(request()->input())->links() }}

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection