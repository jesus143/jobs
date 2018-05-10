@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title"><span class="icon-jobs-active"></span>Post a New Job</h2>
        <div class="dashboard-tab-inner">
            <div class="row dashboard-tab-content">
                {{ Form::open(['url' => route('employer-job.store'), 'class'=>'dashboard-form']) }}
                    <div class="col-md-6">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Position<span data-toggle="tooltip" title="" data-original-title="Lorem Ipsum Dolor Sit Amet">?</span>
                            </p>

                            {{
                                Form::text(
                                    'position',
                                    old('position'),
                                    [
                                        'name'=>'position'
                                    ]
                                )
                            }}

                            @include('job::errors.form-field', ['name' => 'position'])

                        </div>

                        <div class="form-sec">
                            <p class="label uppercase accent-color">How many hours are needed for the job per week?</p>

                            {{
                                 Form::select(
                                    'hours',
                                    [
                                        'Part-time - Less than 20 hours/week' => 'Part-time - Less than 20 hours/week',
                                        'Part-time - Less than 30 hours/week' => 'Part-time - Less than 30 hours/week',
                                        'Part-time - Less than 40 hours/week' => 'Part-time - Less than 40 hours/week',
                                        'Part-time - Less than 50 hours/week' => 'Part-time - Less than 50 hours/week',
                                    ],
                                    old('hours'),
                                    [
                                        'placeholder' => 'Select hours..'
                                    ]
                                )
                            }}

                            @include('job::errors.form-field', ['name' => 'hours'])

                        </div>

                        <div class="form-sec">
                            <p class="label uppercase"><span class="accent-color">How Much salary are you willing to provide?</span>(USD/mo)</p>

                            {{
                                Form::select(
                                    'salary',
                                    [
                                        '200' => '$200 / month',
                                        '300' => '$300 / month',
                                        '400' => '$400 / month',
                                    ],
                                    old('salary'),
                                    [
                                        'placeholder' => 'Select salary range..'
                                    ]
                                 )
                            }}

                            @include('job::errors.form-field', ['name' => 'salary'])

                        </div>

                        <div class="form-sec">
                            <p class="label uppercase accent-color">Skills or Tools needed for this project<span data-toggle="tooltip" title="" data-original-title="Lorem Ipsum Dolor Sit Amet">?</span> </p>

                            <p>
                                {{
                                    Form::textarea(
                                        'skills',
                                        old('skills'),
                                        [
                                            'placeholder'=>'Adobe Photoshop, Adobe Illustrator, Graphic Design, Photo Editing, Photo Manipulation'
                                        ]
                                    )
                                 }}
                            </p>

                            <p>If you have more than one skills or tools, separate them with comma. (e.g. "Adobe
                                Photoshop, Graphic Design, 3D modeling")</p>

                            @include('job::errors.form-field', ['name' => 'skills'])

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-sec">
                            <p class="label uppercase accent-color">Project Details<span data-toggle="tooltip" title=""
                                                                                         data-original-title="Lorem Ipsum Dolor Sit Amet">?</span>
                            </p>
                            <p>Write more details about the project like company info, products or services, project
                                duraton, job details, etc. Note that <strong>putting URL links is strictly
                                    prohibited</strong>.</p>
                                 {{
                                      Form::textarea(
                                          'description',
                                          old('description'),
                                          [
                                              'placeholder'=>''
                                          ]
                                      )
                                 }}

                            @include('job::errors.form-field', ['name' => 'description'])

                        </div>
                    </div>
                    <div class="submit-area">
                        {{ Form::submit('Post This Job', ['name'=>'post', 'class'=>'btn-secondary btn-small']) }}
                        {{ Form::submit('Save as Draft', ['name'=>'draft', 'class'=>'btn-secondary btn-small']) }}
                        <a href="{{ url()->previous() }}">
                            {{ Form::button('cancel', ['name'=>'draft', 'class'=>'btn-secondary btn-small']) }}
                        </a>

                    </div>

                {{ Form::close() }}

            </div> <!-- .dashboard-tab-content -->
        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection