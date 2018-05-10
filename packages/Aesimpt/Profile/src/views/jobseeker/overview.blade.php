@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area my-profile-tab">
        <h2 class="dashboard-tab-area-title"><span class="icon-my-profile"></span>My Profile</h2>
        <div class="dashboard-tab-inner">

            @include('profile::jobseeker.includes.menu')

            <div class="row dashboard-tab-content">
                <div class="col-lg-7 col-xs-12">
                    <div class="form-sec profile-short-info">
                        <div class="profile-img">
                            <p><img src="{{ asset('img/sample-author-2.png') }}" height="100px" width="200px"></p>
                            <p><span class="green-btn">Available</span><br><span class="green-btn" style="background:none;color:#63be39;">Part-Time</span></p>
                        </div>
                        <div class="profile-meta">
                            <h2 class="uppercase">Rafael Ilagan</h2>
                            <p class="uppercase accent-color">Concept Artist and Illustrator</p>
                            <div class="star-review" title="Rated 4.5 out of 5"><span style="width:90%"><strong class="rating">4.5</strong> out of 5</span></div>
                            <p class="rating-num">4.5 <span>(3 reviews)</span></p>

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
                        <span class="clearfix"></span>
                    </div>
                </div>

                <div class="col-lg-5 col-xs-12">
                    <div class="form-sec suggested-salary">
                        <p><span class="accent-color">PhP 25, 000/mo.</span><br>(US$ 213)</p>
                        <p class="my-top-skills"><a href="#" class="blue-btn">Graphic Design</a><a href="#" class="blue-btn">Brand Identity</a><a href="#" class="blue-btn">Illustration</a><a href="#" class="blue-btn">infographics</a><a href="#" class="blue-btn">Photo Editing</a><a href="#" class="blue-btn">Graphics Editing</a></p>
                        <button class="btn-secondary uppercase hire-me">Hire Rafael</button>
                    </div>
                </div>
                <span class="clearfix"></span>

                <div class="col-xs-12">
                    <h3 class="form-sec-title">Basic Information</h3>
                </div>

                <div class="col-lg-5 col-xs-12">
                    <div class="form-sec">
                        <p><span class="info-label">Age:</span> 35</p>
                        <p><span class="info-label">Gender:</span> Male</p>
                        <p><span class="info-label">Address:</span> Cubao, Quezon City</p>
                        <p><span class="info-label">Phone:</span> 0923-456-7890</p>
                        <p><span class="info-label">Website:</span> rafaelilagan.com</p>
                        <p><span class="info-label">Verified ID:</span> Driver’s License</p>
                        <p><span class="info-label"></span> <a href="#" class="lightbox-toggle" data-toggle="modal" data-target="#verified-id"><img src="{{ asset('img/license.png') }}" height="0" width="145"></a></p>
                        <p><span class="info-label"></span> <a href="#" class="lightbox-toggle" data-toggle="modal" data-target="#verified-id">nbi_clearance.jpg</a></p>

                        <div id="verified-id" class="modal fade modal-lightbox" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                                    <img src="{{ asset('img/license-large.png') }}"  />
                                </div>
                            </div>
                        </div> <!-- verified-id -->
                    </div>
                    <div class="form-sec">
                        <a href="#" class="dashed">Edit Basic Information</a>
                    </div>
                </div>

                <div class="col-lg-7 col-xs-12">
                    <div class="form-sec profile-video-area">
                        <div class="video-wrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/_qIRtFE6aIc" frameborder="0" allowfullscreen></iframe></div>
                    </div>
                </div>
                <span class="clearfix"></span>

                <div class="col-xs-12">
                    <h3 class="form-sec-title">About Me</h3>
                </div>

                <div class="col-xs-12">
                    <div class="form-sec">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                    </div>
                    <div class="form-sec">
                        <a href="#" class="dashed">Edit About Me</a>
                    </div>
                </div>
                <span class="clearfix"></span>

                <div class="col-xs-12">
                    <h3 class="form-sec-title">Tests Taken</h3>
                </div>
                <div class="col-lg-3 col-xs-4 test-item">
                    <div class="form-sec">
                        <p class="label uppercase accent-color">DISC Tests</p>
                        <p><span class="info-label">Dominance:</span>	 41	<br>
                            <span class="info-label">Influence:</span> 11	<br>
                            <span class="info-label">Steadiness:</span>	15	<br>
                            <span class="info-label">Compliance:</span> 34</p>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-4 test-item">
                    <div class="form-sec">
                        <p class="label uppercase accent-color">IQ Test</p>
                        <p>115</p>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-4 test-item">
                    <div class="form-sec">
                        <p class="label uppercase accent-color">English Proficiency Test</p>
                        <p>Pre-advanced 1</p>
                    </div>
                </div>
                <span class="clearfix"></span>

                <div class="col-lg-6 col-xs-12">
                    <h3 class="form-sec-title">Working Environment</h3>
                    <div class="form-sec">
                        <p><span class="info-label">Work Place:</span> Home</p>
                        <p><span class="info-label">Work Station:</span> Desktop</p>
                        <p><span class="info-label">Internet Speed:</span> 2-4 Mbps</p>
                    </div>
                    <div class="form-sec"><a href="#" class="dashed">Edit Working Environment</a></div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <h3 class="form-sec-title">English Proficiency</h3>
                    <div class="form-sec">
                        <p><span class="info-label">Speaking:</span> Fluent English</p>
                        <p><span class="info-label">Writing:</span> College Level</p>
                    </div>
                    <div class="form-sec"><a href="#" class="dashed">Edit English Proficiency</a></div>
                </div>
                <span class="clearfix"></span>

                <div class="col-xs-12">
                    <h3 class="form-sec-title">Previous Work Experience</h3>
                    <div class="dashboard-add-experience form-sec">
                        <div class="add-experience-item added-experience">
                            <p class="step-num"><span>1</span></p>
                            <div class="experience-content">
                                <div class="experience-verified"><p><span class="info-label">Position:</span> Graphic Designer</p>
                                    <p><span class="info-label">Company Name:</span> Brilliant Ideas Inc.</p>
                                    <p><span class="info-label">Time Period:</span> Less than 6 months</p>
                                    <p><span class="info-label">Work Description:</span></p></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.</p>
                            </div>
                            <span class="clearfix"></span>
                        </div>
                        <div class="add-experience-item added-experience">
                            <p class="step-num"><span>2</span></p>
                            <div class="experience-content">
                                <div class="experience-verified"><p><span class="info-label">Position:</span> Graphic Designer</p>
                                    <p><span class="info-label">Company Name:</span> Brilliant Ideas Inc.</p>
                                    <p><span class="info-label">Time Period:</span> Less than 6 months</p>
                                    <p><span class="info-label">Work Description:</span></p></div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.</p>
                            </div>
                            <span class="clearfix"></span>
                        </div>
                        <span class="clearfix"></span>
                        <a href="#" class="dashed">Add more work exprerience</a>
                    </div> <!-- dashboard-add-experience -->
                </div>

                <div class="col-xs-12">
                    <h3 class="form-sec-title">Top Skills</h3>
                </div>
                <span class="clearfix"></span>

                <div class="form-sec">
                    <div class="col-xs-12">
                        <ul class="nav nav-tabs top-skills-tab">
                            <li class="active"><a data-toggle="tab" href="#5-stars">5 stars</a></li>
                            <li><a data-toggle="tab" href="#4-stars">4 stars</a></li>
                            <li><a data-toggle="tab" href="#3-stars">3 stars</a></li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div id="5-stars" class="tab-pane fade in active">
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 5 <span>(I’m an expert)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-1" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-1">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div>
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 5 <span>(I’m an expert)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-2" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-2">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div>
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 5 <span>(I’m an expert)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-3" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-3">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div>
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 5 <span>(I’m an expert)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-4" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-4">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div><!-- top-skill-item -->
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 5 <span>(I’m an expert)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-5" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-5">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div><!-- top-skill-item -->
                        </div><!-- 5 stars -->

                        <div id="4-stars" class="tab-pane fade">
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 4 <span>(I’m knowledgeable)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-1" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-1">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div>
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 4 <span>(I’m knowledgeable)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-2" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-2">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div>
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 4 <span>(I’m knowledgeable)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-3" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-3">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div>
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 4 <span>(I’m knowledgeable)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-4" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-4">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div><!-- top-skill-item -->
                            <div class="top-skill-item">
                                <div class="col-lg-2 col-xs-3 skill-name">Adobe Photoshop</div>
                                <div class="col-lg-2 col-xs-3"><div class="star-review" title="Rated 4 out of 5"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div></div>
                                <div class="col-xs-4 level-label"><p class="rating-num">Level 4 <span>(I’m knowledgeable)</span></p></div>
                                <span class="clearfix"></span>
                                <div class="col-lg-10 col-xs-9 pull-right">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div id="skill-desc-5" class="accordion-body collapse">
                                                <div class="accordion-inner">
                                                    <p>I am using Photoshop for 12 years already in almost all my design tasks especially for graphics that are to be published in the web. Most of my tasks with this tool are static ad design, photo retouching/manipulation, character design, simple animations to name a few.</p>
                                                </div>
                                            </div>
                                            <span class="view-more-less" data-text-swap="View less" data-text-original="View More" data-toggle="collapse" data-target="#skill-desc-5">View More</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="clearfix"></span>
                            </div><!-- top-skill-item -->
                        </div><!-- 4 stars -->
                    </div> <!-- tab-content -->

                </div>

                <div class="col-xs-12">
                    <div class="form-sec">
                        <a href="#" class="dashed">Edit top skills</a>
                    </div>
                </div>

                <div class="col-xs-12 form-sec">
                    <h3 class="form-sec-title">Portfolio</h3>
                    <div class="row portfolio-list">
                        <div class="col-lg-3 col-xs-6 portfolio-item">
                            <div class="portfolio-preview portfolio-document" data-toggle="modal" data-slide-to="0" data-target="#carousel-lightbox">
                                <p>.pdf</p>
                                <span class="form-toggle"><i class="fa fa-plus"></i> View Details</span>
                            </div>
                            <p class="text-center" data-toggle="modal" data-slide-to="0" data-target="#carousel-lightbox"><b>Branding for an App Company</b></p>
                        </div> <!-- portfolio-item -->

                        <div class="col-lg-3 col-xs-6 portfolio-item">
                            <div class="portfolio-preview portfolio-image" data-toggle="modal" data-slide-to="1" data-target="#carousel-lightbox" style="background-image:url({{ asset('img/sample-portfolio.png') }}"  />>
                                <span class="form-toggle"><i class="fa fa-plus"></i> View Details</span>
                            </div>
                            <p class="text-center" data-toggle="modal" data-slide-to="1" data-target="#carousel-lightbox"><b>Rock, Paper, Sold logo</b></p>
                            <!-- portfolio-id-2 -->
                        </div>

                        <div class="col-lg-3 col-xs-6 portfolio-item">
                            <div class="portfolio-preview portfolio-document doc" data-toggle="modal" data-slide-to="2" data-target="#carousel-lightbox">
                                <p>.docx</p>
                                <span class="form-toggle"><i class="fa fa-plus"></i> View Details</span>
                            </div>
                            <p class="text-center" data-toggle="modal" data-slide-to="2" data-target="#carousel-lightbox"><b>A Blog about Techonology</b></p>
                        </div> <!-- portfolio-item -->

                        <div class="col-lg-3 col-xs-6 portfolio-item">
                            <div class="portfolio-preview portfolio-document ppt" data-toggle="modal" data-slide-to="3" data-target="#carousel-lightbox">
                                <p>.ppt</p>
                                <span class="form-toggle"><i class="fa fa-plus"></i> View Details</span>
                            </div>
                            <p class="text-center" data-toggle="modal" data-slide-to="3" data-target="#carousel-lightbox"><b>Pitch Deck for a Consultancy Firm</b></p>
                        </div> <!-- portfolio-item -->

                        <div class="modal fade and carousel slide portfolio-carousel" id="carousel-lightbox">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                                    <div class="modal-body">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="portfolio-preview portfolio-document">
                                                    <p>.pdf</p>
                                                </div>
                                                <div class="portfolio-details">
                                                    <p class="portfolio-name">Branding for an App Company</p>
                                                    <div><span class="info-label">Work Type:</span> <p>Graphics and Multimedia</p></div>
                                                    <div><span class="info-label">URL:</span> <p><a href="http://rockpapersoldlogo.com">http://rockpapersoldlogo.com</a></p></div>
                                                    <div><span class="info-label">Job Title:</span> <p>Logo Designer</p></div>
                                                    <div><span class="info-label">Work Description:</span> <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </p></div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="{{ asset('img/sample-portfolio.png') }}"  />
                                                <div class="portfolio-details">
                                                    <p class="portfolio-name">Rock, Paper, Sold logo</p>
                                                    <div><span class="info-label">Work Type:</span> <p>Graphics and Multimedia</p></div>
                                                    <div><span class="info-label">URL:</span> <p><a href="http://rockpapersoldlogo.com">http://rockpapersoldlogo.com</a></p></div>
                                                    <div><span class="info-label">Job Title:</span> <p>Logo Designer</p></div>
                                                    <div><span class="info-label">Work Description:</span> <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </p></div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="portfolio-preview portfolio-document doc">
                                                    <p>.docx</p>
                                                </div>
                                                <div class="portfolio-details">
                                                    <p class="portfolio-name">A Blog about Techonology</p>
                                                    <div><span class="info-label">Work Type:</span> <p>Graphics and Multimedia</p></div>
                                                    <div><span class="info-label">URL:</span> <p><a href="http://rockpapersoldlogo.com">http://rockpapersoldlogo.com</a></p></div>
                                                    <div><span class="info-label">Job Title:</span> <p>Logo Designer</p></div>
                                                    <div><span class="info-label">Work Description:</span> <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </p></div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="portfolio-preview portfolio-document ppt">
                                                    <p>.ppt</p>
                                                </div>
                                                <div class="portfolio-details">
                                                    <p class="portfolio-name">Pitch Deck for a Consultancy Firm</p>
                                                    <div><span class="info-label">Work Type:</span> <p>Graphics and Multimedia</p></div>
                                                    <div><span class="info-label">URL:</span> <p><a href="http://rockpapersoldlogo.com">http://rockpapersoldlogo.com</a></p></div>
                                                    <div><span class="info-label">Job Title:</span> <p>Logo Designer</p></div>
                                                    <div><span class="info-label">Work Description:</span> <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. </p></div>
                                                </div>
                                            </div>
                                        </div><!-- /.carousel-inner -->
                                        <a class="left carousel-control" href="#carousel-lightbox" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-lightbox" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div><!-- /.modal-body -->
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->


                    </div> <!-- portfolio-list -->
                </div>

                <div class="col-xs-12 form-sec">
                    <a href="#" class="dashed">Edit portfolio</a>
                </div>

                <div class="col-xs-12 form-sec">
                    <h3 class="form-sec-title">Client Reviews</h3>

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
            </div> <!-- .dashboard-tab-content -->
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