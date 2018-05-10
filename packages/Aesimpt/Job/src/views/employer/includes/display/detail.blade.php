<div class="form-sec job-item">
    <div class="col-lg-8 col-md-12">
        <h3 class="job-title accent-color"><a href="#">{{ $job->position }}</a></h3>
        <p class="job-short-desc">{{ $job->description }}</p>
        <p class="by-company"><a href="#" class="accent-color uppercase">{{ $job->totalApplicant() }} Applicants</a> <span class="job-post-date">Expires in {{ $job->expire()->days() }} days</span></p>

            <p>
                @can('edit', $job)
                    <a href="{{ route('employer-job.post-edit', $job->id) }}" class="btn-secondary uppercase right-margin">
                        Edit Job Post
                    </a>
                @endcan

                @can('destroy', $job)
                    {{ Form::open(['url' => route('employer-job.destroy', $job->id), 'method'=> 'DELETE'])  }}
                        {{ Form::submit('Delete Job Post', ['class' => 'btn-secondary uppercase btn-cancel right-margin']) }}
                    {{ Form::close() }}
                @endcan
            </p>

    </div>
    <div class="col-lg-4 col-md-12">
        <p class="job-offered-salary">
            PHP {{ dollar_to_php($job->salary) }}/mo <br>
            (${{ number_format($job->salary) }})
        </p>

        <p class="job-duration uppercase accent-color-2">
            {{ $job->type }}
        </p>

        <p>
            @foreach($job->skills as $skill)
                <a href="#" class="green-btn right-margin">{{ $skill }}</a>
            @endforeach
        </p>
    </div>
    <span class="clearfix"></span>
</div>

