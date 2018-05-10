@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area job-applicants">
        <h2 class="dashboard-tab-area-title"><span class="icon-jobs-bookmarked"></span>Bookmarked Seekers</h2>
        <div class="dashboard-tab-inner">

            <div class="dashboard-top-filter">
                <div class="col-xs-4">
                    <select class="filter-select">
                        <option>All</option>
                        <option>Part-time</option>
                        <option>Full-time</option>
                    </select>
                    <select class="filter-select">
                        <option>Search Skills</option>
                        <option>Graphic Design</option>
                        <option>Illustration</option>
                    </select>
                </div>
                <div class="col-xs-4">
                    <p class="job-notice uppercase">Found <span class="accent-color"><b>3</b></span> jobsekeers</p>
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
                            <div id="seeker-review-1" class="panel-collapse collapse">
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">English Proficiency</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Communication</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Work Quality</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Timeliness</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Reliability</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                            </div>
                            <p><span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#seeker-review-1">View More</span></p>
                            <p><a href="#" class="btn-secondary uppercase right-margin">View Profile</a><a href="#invite-seeker" data-toggle="modal" class="btn-secondary uppercase right-margin">Invite for job</a></p>
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
                            <div id="seeker-review-2" class="panel-collapse collapse">
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">English Proficiency</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Communication</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Work Quality</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Timeliness</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Reliability</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                            </div>
                            <p><span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#seeker-review-2">View More</span></p>
                            <p><a href="#" class="btn-secondary uppercase right-margin">View Profile</a><a href="#invite-seeker" data-toggle="modal" class="btn-secondary uppercase right-margin">Invite for job</a></p>
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
                            <div id="seeker-review-3" class="panel-collapse collapse">
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">English Proficiency</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Communication</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Work Quality</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Timeliness</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                                <div class="skill-rate-item">
                                    <p class="skill-rate-label">Reliability</p>
                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                    <p class="skill-rate-num">4.5</p>
                                </div>
                            </div>
                            <p><span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#seeker-review-3">View More</span></p>
                            <p><a href="#" class="btn-secondary uppercase right-margin">View Profile</a><a href="#invite-seeker" data-toggle="modal" class="btn-secondary uppercase right-margin">Invite for job</a></p>
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

@section('more_content')

    <div id="invite-seeker" class="modal fade modal-form" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                <p style="border-bottom: 1px solid #eaeaea; padding: 0 0px 15px;margin-bottom:0;">
                    <a href="#" class="fa fa-long-arrow-left accent-color back-icon"></a> You are inviting <span class="accent-color">Raffy Ilagan</span> for work</a>
                </p>
                <form>
                    <div class="row" style="margin-top:30px;">
                        <div class="form-sec col-xs-6">
                            <p class="label uppercase accent-color">What Project do you want this jobseeker to be in?<span data-toggle="tooltip" title="" data-original-title="Lorem Ipsum Dolor Sit Amet">?</span></p>
                            <select>
                                <option>Adobe Illustrator | Photoshop Graphic Designer Wanted!</option>
                            </select>
                        </div>
                        <div class="col-xs-12">
                            <p class="label uppercase accent-color">Message<span data-toggle="tooltip" title="" data-original-title="Lorem Ipsum Dolor Sit Amet">?</span></p>
                            <p>Write more details about the project like company info, products or services, project duration, job details, etc.</p>
                            <textarea></textarea>
                        </div>
                    </div>

                    <div class="application-actions">
                        <button href="#" class="btn-secondary uppercase right-margin">Invite Jobseeker</button><button href="#" class="btn-secondary uppercase btn-cancel right-margin">Archive</button>
                    </div>

            </div>
        </div>
    </div>

@endsection