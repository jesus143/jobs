@extends('layouts.app')

@section('content')
    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area my-jobs">
        <h2 class="dashboard-tab-area-title"><span class="icon-jobs-active"></span>Invited Jobs</h2>
        <div class="dashboard-tab-inner">
            <div class="row dashboard-tab-content">
                <div style="padding:5px 30px;">
                    <a href="#" class="fa fa-long-arrow-left accent-color back-icon"></a>
                </div>
                <span class="divider"></span>

                <div class="form-sec view-job-head">
                    <p class="job-title"> {{ $job->position }} </p>
                    <p class="by-company"><a href="#" class="accent-color uppercase"><img
                                    src="{{ asset('img/sample-author-2.png') }}"> micro Software Inc.</a> <span
                                class="job-post-date">Posted an {{ $job->postAgo() }}</span></p>
                </div>

                <nav class="form-sec view-job-nav">
                    @include('job::jobseeker.includes.menu.invited', ['job' => $job, 'from_tab_name' => $from_tab_name])
                </nav>

                <div class="form-sec view-job-meta">
                    <div class="col-xs-3">
                        <p><b>Salary:</b></p>
                        <p style="font-size:20px;">
                            <span class="accent-color">{{ dollar_to_php($job->salary) }}
                                /mo.</span><br>(${{ number_format($job->salary) }})</p>
                    </div>
                    <div class="col-xs-3">
                        <p><b>Job Type:</b></p>
                        <p style="font-size:20px;" class="uppercase"><span
                                    class="accent-color-2">{{ $job->type }}</span></p>
                    </div>
                    <div class="col-xs-3">
                        <p><b>Skills required:</b></p>
                        <p>
                            @foreach($job->skills as $skill)
                                <a href="#" class="green-btn right-margin">{{ $skill }}</a>
                            @endforeach
                        </p>
                    </div>

                    <div class="col-xs-3">
                        <p><b>Expiring:</b> {{ $job->expiredAt() }}</p>
                        <p><b>Applicants:</b> {{ $job->totalApplicant() }} applied this</p>
                    </div>

                    <span class="clearfix"></span>
                </div>
                <div class="form-sec view-job-details">
                    <h3 class="form-sec-title">Details</h3>
                    <p> {{ $job->description }} </p>
                </div>
                <div class="view-job-button">
                    <a href="#accept-job" class="btn-secondary uppercase" data-toggle="modal">Accept Invitation</a>

                    {{ Form::open(['url'=> route('jobseeker-job.invited-reject', $job->id), 'method'=>'POST']) }}
                        {{
                            Form::submit(
                                'Reject Invitation',
                                [
                                    'class' => 'btn-secondary uppercase'
                                ]
                            )
                        }}
                    {{ Form::close() }}

                    {{ Form::open(['url'=> route('jobseeker-job.bookmark', $job->id), 'method'=>'POST']) }}
                        {{
                             Form::submit(
                                 'Bookmark this Job',
                                 [
                                     'class' => 'btn-secondary uppercase'
                                 ]
                             )
                        }}
                    {{ Form::close() }}


                </div>
            </div> <!-- .dashboard-tab-content -->
        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection


@section("more_content")
    <div id="accept-job" class="modal fade modal-form" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                <p style="border-bottom: 1px solid #eaeaea; padding: 0 0px 15px;margin-bottom:0;">
                    <a href="#" class="fa fa-long-arrow-left accent-color back-icon"></a> You are applying in <span
                            class="accent-color"> {{ $job->application }} </span></a>
                </p>
                <div class="view-job-head">
                    <p class="job-title">{{ $job->application }}</p>
                    <p class="by-company"><a href="#" class="accent-color uppercase"><img
                                    src="{{ asset('img/sample-author-2.png') }}"> micro Software Inc.</a> <span
                                class="job-post-date">{{ $job->postAgo() }}</span></p>
                </div>
                <div class="row view-job-meta" style="padding:0;">
                    <div class="col-xs-3">
                        <p><b>Salary:</b></p>
                        <p style="font-size:20px;"><span class="accent-color">PHP {{ dollar_to_php($job->salary) }}
                                /mo .</span><br>(${{ number_format($job->salary) }})</p>
                    </div>
                    <div class="col-xs-3">
                        <p><b>Job Type:</b></p>
                        <p style="font-size:20px;" class="uppercase"><span
                                    class="accent-color-2">{{ $job->type }}</span></p>
                    </div>
                    <div class="col-xs-3">
                        <p><b>Skills required:</b></p>
                        <p>
                            @foreach($job->skills as $skill)
                                <a href="#" class="green-btn right-margin">{{ $skill }}</a>
                            @endforeach
                        </p>
                    </div>
                    <div class="col-xs-3">
                        <p><b>Expiring:</b> {{ $job->expiredAt() }}</p>
                        <p><b>Applicants:</b> {{ $job->totalApplicant() }} applied this</p>
                    </div>
                    <span class="clearfix"></span>
                </div>

                {{ Form::open(['url'=> route('jobseeker-job.invited-accept', $job->id), 'method'=>'POST']) }}
                <p>
                    {{
                        Form::textarea(
                            'description',
                            null,
                            [
                                'placeholder' => 'Write your message'
                            ]
                        )
                    }}
                </p>

                <p>
                    {{
                        Form::submit(
                            'Submit Application', // it means that you are about to accept the invitation
                            [
                                'class' => 'btn-secondary'
                            ]
                        )
                    }}
                    {{
                        Form::submit(
                            'Cancel',
                            [
                                'class' => 'btn-secondary btn-cancel',
                                'data-dismiss' => 'modal'
                             ]
                        )
                    }}
                </p>
                {{ Form::close() }}
                <span class="clearfix"></span>
            </div>
        </div>
    </div>
@endsection