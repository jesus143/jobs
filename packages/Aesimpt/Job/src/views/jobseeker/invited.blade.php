@extends('layouts.app')

@section('content')
    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area my-jobs">
        <h2 class="dashboard-tab-area-title"><span class="icon-jobs-active"></span>Invited Jobs</h2>
        <div class="dashboard-tab-inner">

            <div class="dashboard-top-filter">
                @include('job::jobseeker.includes.display.filter', ['userJobs' => $userJobs])
                <span class="clearfix"></span>
            </div>

            <div class="row dashboard-tab-content">
                @each('job::jobseeker.includes.display.detail', $userJobs, 'userJob', 'job::jobseeker.includes.display.empty')
            </div>
dfgdf 11111111



            {{ $userJobs->appends(request()->input())->links() }}

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>
@endsection