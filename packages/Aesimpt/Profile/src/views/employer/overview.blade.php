@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title"><span class="icon-my-profile"></span>My Profile</h2>
        <div class="dashboard-tab-inner">

            @include('profile::employer.includes.menu-edit')

            <div class="row dashboard-tab-content">

                <div class="col-lg-7 col-xs-12">
                    <div class="form-sec profile-short-info">
                        <div class="profile-img">
                            <p><img src="{{ asset('img/sample-author-2.png') }}" height="100px" width="200px"></p>
                        </div>
                        <div class="profile-meta">
                            <h2 class="uppercase">Rafael Ilagan</h2>
                            <p class="uppercase accent-color">Micro Software Inc.</p>
                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                            <div class="skill-rate-item">
                                <p class="skill-rate-label">Communication</p>
                                <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                <p class="skill-rate-num">4.5</p>
                            </div>
                            <div class="skill-rate-item">
                                <p class="skill-rate-label">Reliability</p>
                                <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                <p class="skill-rate-num">4.5</p>
                            </div>
                            <div class="skill-rate-item">
                                <p class="skill-rate-label">Timeliness</p>
                                <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                <p class="skill-rate-num">4.5</p>
                            </div>
                            <div class="skill-rate-item">
                                <p class="skill-rate-label">Salary</p>
                                <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                <p class="skill-rate-num">4.5</p>
                            </div>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                </div>

                <div class="col-lg-5 col-xs-12 form-sec">
                    <p style="font-size:16px;"><span class="accent-color" style="font-size:20px;">0 Jobs Posted</span><br>0 Completed, 0 Active</p>
                    <p style="font-size:16px;"><span class="accent-color" style="font-size:20px;">0 Seekers Hired in Total</span><br>0 Active</p>
                    <p><strong>Location:</strong><br>Seville, Spain</p>
                    <p><strong>Member since:</strong><br>October 30, 2016</p>
                </div>
                <span class="clearfix"></span>

                <div class="col-xs-12">
                    <h3 class="form-sec-title">About the Employer</h3>
                </div>

                <div class="col-lg-5 col-xs-12">
                    <div class="form-sec">
                        <p><span class="info-label">Contact:</span> Ricky Mateo</p>
                        <p><span class="info-label">Company Name:</span> Micro Software Inc.</p>
                        <p><span class="info-label">Position:</span> Project Manager</p>
                        <p><span class="info-label">Location:</span> Seville, Spain</p>
                    </div>
                </div>

                <div class="col-lg-7 col-xs-12">
                    <div class="form-sec profile-video-area">
                        <div class="video-wrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/_qIRtFE6aIc" frameborder="0" allowfullscreen></iframe></div>
                    </div>
                </div>
                <span class="clearfix"></span>

                <div class="col-xs-12">
                    <div class="form-sec">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                    </div>
                    <div class="form-sec">
                        <a href="#" class="dashed">Edit About the Employer</a>
                    </div>
                </div>

                <div class="col-xs-12">
                    <h3 class="form-sec-title">Employer Reviews</h3>
                </div>

                <div class="col-xs-12">
                    <div class="form-sec">
                        <div class="client-review-item">
                            <p class="client-review-title">Quality Work and Fast!</p>
                            <div>
                                <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                            </div>

                            <div class="client-review-content">
                                <p class="client-avatar"><img src="{{ asset('img/sample-author.png') }}" class="author-img" width="45" height="45"> <a href="#">John Doe</a></p>
                                <div class="row">
                                    <div id="client-review-1" class="col-xs-12 panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                                            <div class="client-ratings">
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">English Proficiency</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">Communication</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">Work Quality</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">Timeliness</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">Reliability</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="view-more-less" data-text-swap="View less" data-text-original="View full review" data-toggle="collapse" data-target="#client-review-1">View full review</span>
                                    </div>
                                    <div class="col-xs-6" style="text-align:right;">
                                        <button class="btn-secondary btn-cancel uppercase" data-toggle="modal" data-target="#request-delete-edit-review">Request to Delete/edit</button>
                                    </div>
                                    <span class="clearfix"></span>
                                </div>
                            </div>
                        </div> <!-- client-review-item -->
                        <div class="client-review-item">
                            <p class="client-review-title">Really satisfied with Rafael’s work!</p>
                            <div>
                                <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                <p class="rating-num">4.5 <span>(3 reviews)</span></p>
                            </div>

                            <div class="client-review-content">
                                <p class="client-avatar"><img src="{{ asset('img/sample-author.png') }}" class="author-img" width="45" height="45"> <a href="#">John Doe</a></p>
                                <div class="row">
                                    <div id="client-review-2" class="col-xs-12 panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                                            <div class="client-ratings">
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">English Proficiency</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">Communication</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">Work Quality</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">Timeliness</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                                <div class="skill-rate-item">
                                                    <p class="skill-rate-label">Reliability</p>
                                                    <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="view-more-less" data-text-swap="View less" data-text-original="View full review" data-toggle="collapse" data-target="#client-review-2">View full review</span>
                                    </div>
                                    <div class="col-xs-6" style="text-align:right;">
                                        <button class="btn-secondary btn-cancel uppercase" data-toggle="modal" data-target="#request-delete-edit-review">Request to Delete/edit</button>
                                    </div>
                                    <span class="clearfix"></span>
                                </div>
                            </div>
                        </div> <!-- client-review-item -->
                    </div>
                </div>
            </div>
        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection

@section('more_content')

    <div id="request-delete-edit-review" class="modal fade modal-form" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                <p style="border-bottom: 1px solid #eaeaea; padding: 15px 0px 30px;margin-bottom:0;">
                    <a href="#" class="fa fa-long-arrow-left accent-color back-icon"></a> You are requesting edit/delete on client review <a href="#">Quality Work and Fast!</a> from <a href="#">John Doe</a>
                </p>
                <p style="border-bottom: 1px solid #eaeaea; padding: 30px 0px;font-size:25px;font-weight:700;">Request Delete/Edit Client Review</p>
                <form>
                    <p class="label uppercase accent-color">Subject</p>
                    <p><input type="text"></p>
                    <p class="label uppercase accent-color">Message</p>
                    <p><textarea></textarea></p>
                    <p><input type="submit" class="btn-secondary" value="Send Message"></p>
                    <p>Please note: sending abusive messages or messages isn't acceptable and is likely to result in your account being suspended.</p>
                </form>
                <span class="clearfix"></span>
            </div>
        </div>
    </div>

@endsection