@extends('layouts.app')

@section('content')
    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area job-applicants">
        <h2 class="dashboard-tab-area-title"><span class="icon-jobs-invited"></span>Job Applicants</h2>
        <div class="dashboard-tab-inner">

            @include('job::employer.includes.menu.applicant')

            <div class="dashboard-top-filter">
                @include('job::employer.includes.display.filter-applicatant', ['userJobs' => $userJobs])
            </div>

            <div class="row dashboard-tab-content">
                @each('job::employer.includes.display.detail-applicant', $userJobs, 'userJob', 'job::jobseeker.includes.display.empty')
            </div>

            {{ $userJobs->appends(request()->input())->links() }}

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection