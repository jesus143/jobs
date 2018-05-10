<div class="form-sec job-item">
    <div class="col-lg-8 col-md-12">
        <h3 class="job-title accent-color"><a href="#">{{ $userJob->job->position }}</a></h3>
        <p class="job-short-desc">{{ $userJob->job->description }}</p>

        <p class="by-company">
            <a href="#" class="accent-color uppercase"><img src="{{ asset('img/sample-author-2.png') }}"> micro Software Inc.</a>
            <span class="job-post-date">Posted an hour ago</span>
        </p>

        <p>
            <a href="{{ route('jobseeker-job.overview', ['id' =>$userJob->job->id, 'from_tab_name' => get_current_tab_name()]) }}" class="btn-secondary uppercase right-margin">View Job Details</a>
            {{--<a href="#" class="btn-secondary uppercase right-margin">View Job Details</a>--}}
            <a href="#" class="btn-secondary uppercase btn-cancel right-margin">Discontinue Job</a>
        </p>

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
</div>