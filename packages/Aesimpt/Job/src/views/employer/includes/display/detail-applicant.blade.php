<div class="form-sec applicant-item">
    <div class="col-lg-8 col-md-12">
        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
        <div class="applicant-content profile-meta">
            <h3 class="applicant-name"><a href="#" class="accent-color"> {{ $userJob->jobseeker->name }}</a><span class="accent-color-2 uppercase"> {{ $userJob->job->type }}</span><span class="accent-color-2"> </h3>
            <p class="uppercase"> {{ $userJob->skill() }}</p>
            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:{{ $userJob->rating() }}%"><strong class="rating">{{ $userJob->totalRating() }}</strong> out of 5</span></div>
            <p class="rating-num">{{ $userJob->totalRating() }} <span> {{ $userJob->totalReview() }}</span></p>
            <p>Applied in <a href="#" class="dashed">{{ $userJob->job->position }}</a></p>
            <p>
                <a href="#job-seeker-{{ $userJob->id }}" data-toggle="modal" class="btn-secondary uppercase right-margin">View Application</a>

                {{ Form::open(['url'=> route('employer-application.active', $userJob->id), 'method'=>'POST']) }}
                    {{ Form::submit('Hire Seeker', ['class'=>'btn-secondary uppercase right-margin']) }}
                {{ Form::close() }}

                @if($userJob->status === 'applied')
                    {{ Form::open(['url'=> route('employer-application.archived', $userJob->id), 'method'=>'POST']) }}
                    {{ Form::submit('Archive', ['class'=>'btn-secondary uppercase btn-cancel right-margin']) }}
                    {{ Form::close() }}
                @endif
            </p>
        </div>
        <span class="clearfix"></span>
    </div>

    <div class="col-lg-4 col-md-12">
        <p class="job-offered-salary">
            PHP {{ dollar_to_php($userJob->job->salary) }}/mo <br>
            (${{ number_format($userJob->job->salary) }})
        </p>

        <p class="job-duration uppercase accent-color-2">
            {{ $userJob->job->type }}
        </p>

        <p>
            @foreach($userJob->job->skills as $skill)
                <a href="#" class="green-btn right-margin">{{ $skill }}</a>
            @endforeach
        </p>
    </div>


    <span class="clearfix"></span>

    {{-- POPUP FOR VIEW APPLICATIONS --}}
    <div id="job-seeker-{{ $userJob->id }}" class="modal fade modal-form" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <span class="fa fa-close close-modal" data-dismiss="modal"></span>

                <p style="border-bottom: 1px solid #eaeaea; padding: 0 0px 15px;margin-bottom:0;">
                    <a href="#" class="fa fa-long-arrow-left accent-color back-icon"></a> You are applying in <span class="accent-color">{{ $userJob->job->position }}</span></a>
                </p>

                <div class="applicant-item">
                    <div class="col-lg-8 col-md-12">
                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">

                        <div class="applicant-content profile-meta">
                            <h3 class="applicant-name"><a href="#" class="accent-color"> {{ $userJob->jobseeker->name }}</a><span class="accent-color-2 uppercase"> {{ $userJob->job->type }}</span><span class="accent-color-2"> </h3>
                            <p class="uppercase"> {{ $userJob->skill() }}</p>
                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:{{ $userJob->rating() }}%"><strong class="rating">{{ $userJob->totalRating() }}</strong> out of 5</span></div>
                            <p class="rating-num">{{ $userJob->totalRating() }} <span> {{ $userJob->totalReview() }}</span></p>
                        </div>

                        <span class="clearfix"></span>
                        <p>Applied in <a href="#" class="dashed">{{ $userJob->job->position }}</a></p>
                        <p><i>Application submitted {{ my_date_format($userJob->created_at, 'M d, Y') }} </i></p>

                    </div>

                    <div class="col-lg-4 col-md-12">
                        <p class="applicant-rate"><span class="accent-color">  PHP {{ dollar_to_php($userJob->job->salary) }}/mo. </span> (${{ number_format($userJob->job->salary) }})</p>
                        <p>
                            @foreach($userJob->job->skills as $skill)
                                <a href="#" class="blue-btn right-margin">{{ $skill }}</a>
                            @endforeach
                        </p>
                    </div>
                    <span class="clearfix"></span>
                </div>

                <div class="application-content">
                    <p>{{ $userJob->description }} </p>
                </div>

                <div class="application-actions">
                    {{ Form::open(['url'=> route('employer-application.active', $userJob->id), 'method'=>'POST']) }}
                        {{ Form::submit('Hire Seeker', ['class'=>'btn-secondary uppercase right-margin']) }}
                    {{ Form::close() }}

                    @if($userJob->status === 'applied')
                        {{ Form::open(['url'=> route('employer-application.archived', $userJob->id), 'method'=>'POST']) }}
                            {{ Form::submit('Archive', ['class'=>'btn-secondary uppercase btn-cancel right-margin']) }}
                        {{ Form::close() }}
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
