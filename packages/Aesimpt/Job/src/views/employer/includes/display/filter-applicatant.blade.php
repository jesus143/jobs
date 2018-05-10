
{{ Form::open(['url'=>url()->full(), 'method'=>'GET']) }}
    <div class="col-lg-3 job-applicant-search">
        <input type="text" name="search" value="{{ request('search') }}" autocomplete="off">
        <input type="submit" value="Search">
    </div>

    <div class="col-lg-9 job-applicant-filters">
        <div class="col-xs-4">
            {{
                Form::select('type',
                    trans('filter.job.type'),
                    null,
                    [
                        'class' => 'filter-select',
                        'onchange' => 'this.form.submit()',
                        'style' => 'width:100%'
                    ]
                )
            }}

        </div>

        <div class="col-xs-4">
            <p class="job-notice uppercase">You have <span class="accent-color"><b>{{ $userJobs->total() }}</b></span> posted jobs</p>
        </div>

        <div class="col-xs-4">
            <p class="job-notice uppercase" style="text-align:right;">Showing <b>{{ session('from') }} - {{ session('to') }}</b> out of <b>{{  $userJobs->total() }} Jobs</b> </p>
        </div>
    </div>
{{ Form::close() }}



