@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area job-applicants">
        <h2 class="dashboard-tab-area-title"><span class="icon-team"></span>My Team</h2>
        <div class="dashboard-tab-inner">

            @include('team::employer.includes.menu')

            <div class="dashboard-top-filter">
                <div class="col-xs-4">
                    <select class="filter-select">
                        <option>All</option>
                        <option>Part-time</option>
                        <option>Full-time</option>
                    </select>
                </div>
                <div class="col-xs-4">
                    <p class="job-notice uppercase">You have <span class="accent-color"><b>3</b></span> active Part-time  Employees</p>
                </div>
                <div class="col-xs-4">
                    <p class="job-notice uppercase" style="text-align:right;">Showing <b>1-3</b> out of <b>5 Jobseekers</b> </p>
                </div>
                <span class="clearfix"></span>
            </div>

            <div class="row dashboard-tab-content">
                <div class="form-sec applicant-item">
                    <div class="col-lg-8 col-md-12">
                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                        <div class="applicant-content profile-meta">
                            <h3 class="applicant-name"><a href="#" class="accent-color">Raffy Ilagan</a><span class="accent-color-2 uppercase">Part-time</span></h3>
                            <p class="uppercase">Concept Artist and Illustrator</p>
                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                            <p>Working in <a href="#" class="dashed">Adobe Illustrator | Photoshop Graphic Designer Wanted!</a></p>
                            <p><b>Date Hired:</b> October 15, 2016</p>
                            <p><a href="#" class="btn-secondary uppercase right-margin">View Profile</a><a href="#" class="btn-secondary uppercase right-margin">Mark as Completed</a><a href="#" class="btn-secondary uppercase btn-cancel right-margin">Discontinue Job</a></p>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <p class="applicant-rate"><span class="accent-color">PHP 10, 000/mo.</span>($ 213)</p>
                        <p><a href="#" class="blue-btn right-margin">Graphic Design</a>
                            <a href="#" class="blue-btn right-margin">Brand Identity</a>
                            <a href="#" class="blue-btn right-margin">Illustration</a>
                            <a href="#" class="blue-btn right-margin">infographics</a>
                            <a href="#" class="blue-btn right-margin">Photo Editing</a>
                            <a href="#" class="blue-btn right-margin">Graphics Editing</a></p>
                    </div>
                    <span class="clearfix"></span>
                </div>
                <div class="form-sec applicant-item">
                    <div class="col-lg-8 col-md-12">
                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                        <div class="applicant-content profile-meta">
                            <h3 class="applicant-name"><a href="#" class="accent-color">Raffy Ilagan</a><span class="accent-color-2 uppercase">Part-time</span></h3>
                            <p class="uppercase">Concept Artist and Illustrator</p>
                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                            <p>Working in <a href="#" class="dashed">Adobe Illustrator | Photoshop Graphic Designer Wanted!</a></p>
                            <p><b>Date Hired:</b> October 15, 2016</p>
                            <p><a href="#" class="btn-secondary uppercase right-margin">View Profile</a><a href="#" class="btn-secondary uppercase right-margin">Mark as Completed</a><a href="#" class="btn-secondary uppercase btn-cancel right-margin">Discontinue Job</a></p>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <p class="applicant-rate"><span class="accent-color">PHP 10, 000/mo.</span>($ 213)</p>
                        <p><a href="#" class="blue-btn right-margin">Graphic Design</a>
                            <a href="#" class="blue-btn right-margin">Brand Identity</a>
                            <a href="#" class="blue-btn right-margin">Illustration</a>
                            <a href="#" class="blue-btn right-margin">infographics</a>
                            <a href="#" class="blue-btn right-margin">Photo Editing</a>
                            <a href="#" class="blue-btn right-margin">Graphics Editing</a></p>
                    </div>
                    <span class="clearfix"></span>
                </div>
                <div class="form-sec applicant-item">
                    <div class="col-lg-8 col-md-12">
                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                        <div class="applicant-content profile-meta">
                            <h3 class="applicant-name"><a href="#" class="accent-color">Raffy Ilagan</a><span class="accent-color-2 uppercase">Part-time</span></h3>
                            <p class="uppercase">Concept Artist and Illustrator</p>
                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                            <p>Working in <a href="#" class="dashed">Adobe Illustrator | Photoshop Graphic Designer Wanted!</a></p>
                            <p><b>Date Hired:</b> October 15, 2016</p>
                            <p><a href="#" class="btn-secondary uppercase right-margin">View Profile</a><a href="#" class="btn-secondary uppercase right-margin">Mark as Completed</a><a href="#" class="btn-secondary uppercase btn-cancel right-margin">Discontinue Job</a></p>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <p class="applicant-rate"><span class="accent-color">PHP 10, 000/mo.</span>($ 213)</p>
                        <p><a href="#" class="blue-btn right-margin">Graphic Design</a>
                            <a href="#" class="blue-btn right-margin">Brand Identity</a>
                            <a href="#" class="blue-btn right-margin">Illustration</a>
                            <a href="#" class="blue-btn right-margin">infographics</a>
                            <a href="#" class="blue-btn right-margin">Photo Editing</a>
                            <a href="#" class="blue-btn right-margin">Graphics Editing</a></p>
                    </div>
                    <span class="clearfix"></span>
                </div>
            </div> <!-- .dashboard-tab-content -->

            <ul class="pagination">
                <li class="active"><a href="#" class="page_link active">1</a></li>
                <li><a href="#" class="page_link">2</a></li>
                <li><a href="#" class="next_link"><span class="fa fa-angle-right"></span></a></li>
            </ul>

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection