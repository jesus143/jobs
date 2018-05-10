@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area job-applicants">
        <h2 class="dashboard-tab-area-title"><span class="icon-jobs-invited"></span>Job Applicants</h2>
        <div class="dashboard-tab-inner">

            <nav class="dashboard-tab-titles" style="margin:0;">
                <ul>
                    <li class="active"><a href="#">Active Applications</a></li>
                    <li><a href="#">Archived Applications</a></li>
                </ul>
                <span class="clearfix"></span>
            </nav>

            <div class="dashboard-top-filter">
                <div class="col-lg-3 job-applicant-search">
                    <input type="text">
                    <input type="submit" value="Search">
                </div>
                <div class="col-lg-9 job-applicant-filters">
                    <select class="filter-select">
                        <option>All</option>
                        <option>Part-time</option>
                        <option>Full-time</option>
                    </select>
                    <select class="filter-select">
                        <option>All</option>
                        <option>Part-time</option>
                        <option>Full-time</option>
                    </select>
                    <select class="filter-select">
                        <option>All</option>
                        <option>Part-time</option>
                        <option>Full-time</option>
                    </select>
                    <select class="filter-select">
                        <option>All</option>
                        <option>Part-time</option>
                        <option>Full-time</option>
                    </select>
                </div>
                <span class="clearfix"></span>
                <div class="col-xs-6">
                    <p class="job-notice uppercase" style="text-align:left;">Found <span class="accent-color"><b>3</b></span> jobseekers</p>
                </div>
                <div class="col-xs-6">
                    <p class="job-notice uppercase" style="text-align:right;">Showing <b>1-3</b> out of <b>5 Jobseekers</b> </p>
                </div>
                <span class="clearfix"></span>
            </div>

            <div class="row dashboard-tab-content">
                <div class="form-sec applicant-item">
                    <div class="col-lg-8 col-md-12">
                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                        <div class="applicant-content profile-meta">
                            <h3 class="applicant-name"><a href="#" class="accent-color">Raffy Ilagan</a><span class="accent-color-2 uppercase">Part-time</span><span class="accent-color-2"> </h3>
                            <p class="uppercase">Concept Artist and Illustrator</p>
                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                            <p>Applied in <a href="#" class="dashed">Adobe Illustrator | Photoshop Graphic Designer Wanted!</a></p>
                            <p><a href="#job-seeker-1" data-toggle="modal" class="btn-secondary uppercase right-margin">View Application</a><a href="#" class="btn-secondary uppercase right-margin">Hire Seeker</a><a href="#" class="btn-secondary uppercase btn-cancel right-margin">Archive</a></p>
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
                    <div id="job-seeker-1" class="modal fade modal-form" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                                <p style="border-bottom: 1px solid #eaeaea; padding: 0 0px 15px;margin-bottom:0;">
                                    <a href="#" class="fa fa-long-arrow-left accent-color back-icon"></a> You are applying in <span class="accent-color">Adobe Illustrator | Photoshop Graphic Designer Wanted!</span></a>
                                </p>
                                <div class="applicant-item">
                                    <div class="col-lg-8 col-md-12">
                                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                                        <div class="applicant-content profile-meta">
                                            <h3 class="applicant-name"><a href="#" class="accent-color">Raffy Ilagan</a><span class="accent-color-2 uppercase">Part-time</span></h3>
                                            <p class="uppercase">Concept Artist and Illustrator</p>
                                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                                        </div>
                                        <span class="clearfix"></span>
                                        <p>Applied in <a href="#" class="dashed">Adobe Illustrator | Photoshop Graphic Designer Wanted!</a></p>
                                        <p><i>Application submitted September 15, 2016</i></p>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <p class="applicant-rate"><span class="accent-color">PHP 10, 000/mo.</span>($ 213)</p>
                                        <p class="applicant-skills"><a href="#" class="blue-btn right-margin">Graphic Design</a>
                                            <a href="#" class="blue-btn right-margin">Brand Identity</a>
                                            <a href="#" class="blue-btn right-margin">Illustration</a>
                                            <a href="#" class="blue-btn right-margin">infographics</a>
                                            <a href="#" class="blue-btn right-margin">Photo Editing</a>
                                            <a href="#" class="blue-btn right-margin">Graphics Editing</a></p>
                                    </div>
                                    <span class="clearfix"></span>
                                </div>
                                <div class="application-content">
                                    <p>Hi Ricky!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                                    <p>Best Regards,<br>Raffy</p>
                                </div>
                                <div class="application-actions">
                                    <a href="#" class="btn-secondary uppercase right-margin">Hire Seeker</a><a href="#" class="btn-secondary uppercase btn-cancel right-margin">Archive</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-sec applicant-item">
                    <div class="col-lg-8 col-md-12">
                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                        <div class="applicant-content profile-meta">
                            <h3 class="applicant-name"><a href="#" class="accent-color">Raffy Ilagan</a><span class="accent-color-2 uppercase">Part-time</span></h3>
                            <p class="uppercase">Concept Artist and Illustrator</p>
                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                            <p>Applied in <a href="#" class="dashed">Adobe Illustrator | Photoshop Graphic Designer Wanted!</a></p>
                            <p><a href="#job-seeker-2" data-toggle="modal" class="btn-secondary uppercase right-margin">View Application</a><a href="#" class="btn-secondary uppercase right-margin">Hire Seeker</a><a href="#" class="btn-secondary uppercase btn-cancel right-margin">Archive</a></p>
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
                    <div id="job-seeker-2" class="modal fade modal-form" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                                <p style="border-bottom: 1px solid #eaeaea; padding: 0 0px 15px;margin-bottom:0;">
                                    <a href="#" class="fa fa-long-arrow-left accent-color back-icon"></a> You are applying in <span class="accent-color">Adobe Illustrator | Photoshop Graphic Designer Wanted!</span></a>
                                </p>
                                <div class="applicant-item">
                                    <div class="col-lg-8 col-md-12">
                                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                                        <div class="applicant-content profile-meta">
                                            <h3 class="applicant-name"><a href="#" class="accent-color">Raffy Ilagan</a><span class="accent-color-2 uppercase">Part-time</span></h3>
                                            <p class="uppercase">Concept Artist and Illustrator</p>
                                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                                        </div>
                                        <span class="clearfix"></span>
                                        <p>Applied in <a href="#" class="dashed">Adobe Illustrator | Photoshop Graphic Designer Wanted!</a></p>
                                        <p><i>Application submitted September 15, 2016</i></p>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <p class="applicant-rate"><span class="accent-color">PHP 10, 000/mo.</span>($ 213)</p>
                                        <p class="applicant-skills"><a href="#" class="blue-btn right-margin">Graphic Design</a>
                                            <a href="#" class="blue-btn right-margin">Brand Identity</a>
                                            <a href="#" class="blue-btn right-margin">Illustration</a>
                                            <a href="#" class="blue-btn right-margin">infographics</a>
                                            <a href="#" class="blue-btn right-margin">Photo Editing</a>
                                            <a href="#" class="blue-btn right-margin">Graphics Editing</a></p>
                                    </div>
                                    <span class="clearfix"></span>
                                </div>
                                <div class="application-content">
                                    <p>Hi Ricky!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                                    <p>Best Regards,<br>Raffy</p>
                                </div>
                                <div class="application-actions">
                                    <a href="#" class="btn-secondary uppercase right-margin">Hire Seeker</a><a href="#" class="btn-secondary uppercase btn-cancel right-margin">Archive</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-sec applicant-item">
                    <div class="col-lg-8 col-md-12">
                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                        <div class="applicant-content profile-meta">
                            <h3 class="applicant-name"><a href="#" class="accent-color">Raffy Ilagan</a><span class="accent-color-2 uppercase">Part-time</span></h3>
                            <p class="uppercase">Concept Artist and Illustrator</p>
                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                            <p>Applied in <a href="#" class="dashed">Adobe Illustrator | Photoshop Graphic Designer Wanted!</a></p>
                            <p><a href="#job-seeker-3" data-toggle="modal" class="btn-secondary uppercase right-margin">View Application</a><a href="#" class="btn-secondary uppercase right-margin">Hire Seeker</a><a href="#" class="btn-secondary uppercase btn-cancel right-margin">Archive</a></p>
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
                    <div id="job-seeker-3" class="modal fade modal-form" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                                <p style="border-bottom: 1px solid #eaeaea; padding: 0 0px 15px;margin-bottom:0;">
                                    <a href="#" class="fa fa-long-arrow-left accent-color back-icon"></a> You are applying in <span class="accent-color">Adobe Illustrator | Photoshop Graphic Designer Wanted!</span></a>
                                </p>
                                <div class="applicant-item">
                                    <div class="col-lg-8 col-md-12">
                                        <img src="{{ asset('img/sample-author-2.png') }}" width="65" height="65">
                                        <div class="applicant-content profile-meta">
                                            <h3 class="applicant-name"><a href="#" class="accent-color">Raffy Ilagan</a><span class="accent-color-2 uppercase">Part-time</span></h3>
                                            <p class="uppercase">Concept Artist and Illustrator</p>
                                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                                        </div>
                                        <span class="clearfix"></span>
                                        <p>Applied in <a href="#" class="dashed">Adobe Illustrator | Photoshop Graphic Designer Wanted!</a></p>
                                        <p><i>Application submitted September 15, 2016</i></p>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <p class="applicant-rate"><span class="accent-color">PHP 10, 000/mo.</span>($ 213)</p>
                                        <p class="applicant-skills"><a href="#" class="blue-btn right-margin">Graphic Design</a>
                                            <a href="#" class="blue-btn right-margin">Brand Identity</a>
                                            <a href="#" class="blue-btn right-margin">Illustration</a>
                                            <a href="#" class="blue-btn right-margin">infographics</a>
                                            <a href="#" class="blue-btn right-margin">Photo Editing</a>
                                            <a href="#" class="blue-btn right-margin">Graphics Editing</a></p>
                                    </div>
                                    <span class="clearfix"></span>
                                </div>
                                <div class="application-content">
                                    <p>Hi Ricky!</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                                    <p>Best Regards,<br>Raffy</p>
                                </div>
                                <div class="application-actions">
                                    <a href="#" class="btn-secondary uppercase right-margin">Hire Seeker</a><a href="#" class="btn-secondary uppercase btn-cancel right-margin">Archive</a>
                                </div>

                            </div>
                        </div>
                    </div>
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