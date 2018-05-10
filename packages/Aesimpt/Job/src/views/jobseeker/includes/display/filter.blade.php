
<div class="col-xs-4">

    {{ Form::open(['url'=>url()->full(), 'method'=>'GET']) }}
    {{
        Form::select('type',
            trans('filter.job.type'),
            null,
            [
                'class' => 'filter-select',
                'onchange' => 'this.form.submit()'
            ]
        )
    }}
    {{ Form::close() }}


</div>

<div class="col-xs-4">
    <p class="job-notice uppercase">You have <span class="accent-color"><b>{{ $userJobs->total() }}</b></span> posted jobs</p>
</div>

<div class="col-xs-4">
    <p class="job-notice uppercase" style="text-align:right;">Showing <b>{{ session('from') }} - {{ session('to') }}</b> out of <b>{{ $userJobs->total() }} Jobs</b> </p>
</div>





