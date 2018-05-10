{{ Form::open(['url'=>url()->full(), 'method'=>'GET']) }}
<div class="col-xs-4">
    {{
        Form::select('category',
            __('filter.job.category'),
            null,
            [
                'class' => 'filter-select',
                'onchange' => 'this.form.submit()'
            ]
        )
    }}

    {{-- defaul all pages will have this select filter --}}
    {{
        Form::select('type',
            __('filter.job.type'),
            null,
            [
                'class' => 'filter-select',
                'onchange' => 'this.form.submit()'
            ]
        )
    }}
</div>
{{ Form::close() }}

<div class="col-xs-4">
    <p class="job-notice uppercase">You have <span class="accent-color"><b>{{ $jobs->total() }}</b></span> posted jobs</p>
</div>

<div class="col-xs-4">
    <p class="job-notice uppercase" style="text-align:right;">Showing <b>{{ session('from') }} - {{ session('to') }}</b> out of <b>{{  $jobs->total() }} Jobs</b> </p>
</div>





