@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title">Welcome to Office Escape</h2>
        <p class="dashboard-tab-area-desc">To get started, create your profile now and attract your potential employers. Showcase your best skills, set your availability to work, add your previous work experience (if any) and tell us more about yourself!</p>
        <div class="dashboard-tab-inner">

            @include('profile::jobseeker.includes.menu-signup')

            <div class="row dashboard-tab-content">
                <form class="dashboard-form availability-experience-form">
                    <div class="form-sec">
                        <div class="col-md-12"><h3 class="form-sec-title">Work Availability and Preferences</h3></div>
                        <div class="col-lg-4 col-xs-6">
                            <p class="label uppercase accent-color">How many hours are you available a week?</p>
                            <select>
                                <option>Part -time - Less than 40 hours/week </option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <p class="label uppercase"><span class="accent-color">What is your Desired Salary?</span> (php/mo)</p>
                            <select>
                                <option>PHP 10, 000/mo</option>
                            </select>
                        </div>
                        <span class="clearfix"></span>
                    </div>

                    <div class="form-sec">
                        <div class="col-lg-3 col-xs-4">
                            <p class="label uppercase accent-color">How fast is your Internet? </p>
                            <select>
                                <option>2-4 Mbps</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-xs-4">
                            <p class="label uppercase accent-color">Where is your Work Place?</p>
                            <select>
                                <option>Home</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-xs-4">
                            <p class="label uppercase accent-color">What is your Work Station?</p>
                            <select>
                                <option>Desktop</option>
                            </select>
                        </div>
                        <span class="clearfix"></span>
                    </div>

                    <div class="form-sec">
                        <div class="portfolio-list">
                            <div class="col-md-12"><h3 class="form-sec-title">Portfolio</h3></div>
                            <div class="col-lg-3 col-xs-6 portfolio-item">
                                <div class="portfolio-preview portfolio-document" data-toggle="modal" data-target="#portfolio-id-1">
                                    <p>.pdf</p>
                                    <span class="form-toggle"><i class="fa fa-plus"></i> View Details</span>
                                </div>
                                <p class="text-center" data-toggle="modal" data-target="#portfolio-id-1"><b>Branding for an App Company</b></p>
                                <div id="portfolio-id-1" class="modal fade modal-form" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                                            <div class="col-xs-6">
                                                <p>Browse and upload a sample work that showcases your skills. You can upload either a graphic or any document like .docx, .pptx or pdf.</p>
                                                <div class="img-file-upload">
                                                    <input type="file" name="file-1[]" id="file-1" class="inputfile"/>
                                                    <label for="file-1"><span class="file-name"></span><strong>Choose a file</strong></label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="portfolio-preview portfolio-document">
                                                    <p>.pdf</p>
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Project Title*</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Work Type*</p>
                                                    <select>
                                                        <option>Graphics and Multimedia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">URL</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Job Title*</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-12">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Work Description*</p>
                                                    <textarea></textarea>
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-12 text-center"><button class="btn-secondary uppercase">Update this Work</button></div>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                </div> <!-- portfolio-id-1 -->
                            </div> <!-- portfolio-item -->

                            <div class="col-lg-3 col-xs-6 portfolio-item">
                                <div class="portfolio-preview portfolio-image" data-toggle="modal" data-target="#portfolio-id-2" style="background-image:url(img/sample-portfolio.png)">
                                    <span class="form-toggle"><i class="fa fa-plus"></i> View Details</span>
                                </div>
                                <p class="text-center" data-toggle="modal" data-target="#portfolio-id-2"><b>Rock, Paper, Sold logo</b></p>
                                <div id="portfolio-id-2" class="modal fade modal-form" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                                            <div class="col-xs-6">
                                                <p>Browse and upload a sample work that showcases your skills. You can upload either a graphic or any document like .docx, .pptx or pdf.</p>
                                                <div class="img-file-upload">
                                                    <input type="file" name="file-1[]" id="file-1" class="inputfile"/>
                                                    <label for="file-1"><span class="file-name"></span><strong>Choose a file</strong></label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="portfolio-preview portfolio-image" style="background-image:url(img/sample-portfolio.png)">

                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Project Title*</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Work Type*</p>
                                                    <select>
                                                        <option>Graphics and Multimedia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">URL</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Job Title*</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-12">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Work Description*</p>
                                                    <textarea></textarea>
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-12 text-center"><button class="btn-secondary uppercase">Update this Work</button></div>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                </div> <!-- portfolio-id-2 -->
                            </div> <!-- portfolio-item -->

                            <div class="col-lg-3 col-xs-6 portfolio-item">
                                <div class="portfolio-preview portfolio-upload" data-toggle="modal" data-target="#portfolio-id-3">
                                    <p><span class="fa fa-plus"></span></p>
                                </div>
                                <p class="text-center accent-color" data-toggle="modal" data-target="#portfolio-id-3"><b>Upload your work</b></p>
                                <div id="portfolio-id-3" class="modal fade modal-form" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <span class="fa fa-close close-modal" data-dismiss="modal"></span>
                                            <div class="col-xs-6">
                                                <p>Browse and upload a sample work that showcases your skills. You can upload either a graphic or any document like .docx, .pptx or pdf.</p>
                                                <div class="img-file-upload">
                                                    <input type="file" name="file-1[]" id="file-1" class="inputfile"/>
                                                    <label for="file-1"><span class="file-name"></span><strong>Choose a file</strong></label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">

                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Project Title*</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Work Type*</p>
                                                    <select>
                                                        <option>Graphics and Multimedia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">URL</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Job Title*</p>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-12">
                                                <div class="form-sec">
                                                    <p class="label uppercase accent-color">Work Description*</p>
                                                    <textarea></textarea>
                                                </div>
                                            </div>
                                            <span class="clearfix"></span>
                                            <div class="col-xs-12 text-center"><button class="btn-secondary uppercase">Post this Work</button></div>
                                            <span class="clearfix"></span>
                                        </div>
                                    </div>
                                </div> <!-- portfolio-id-3 -->
                            </div> <!-- portfolio-item -->
                            <span class="clearfix"></span>
                        </div> <!-- portfolio-list -->
                    </div>

                    <div class="col-md-12 form-sec">
                        <h3 class="form-sec-title">Previous Work Experience</h3>
                        <p>Please add your previous work experience below. This will serve as your verified preferences. <br> Upon submitting the details, a verification email will be sent to your past employer. When the information has been confirmed, a “Verified” badge will be added to your profile.</p>

                    </div>

                    <div class="col-md-12 form-sec">
                        <div class="dashboard-add-experience">
                            <div class="add-experience-item added-experience">
                                <p class="step-num"><span>1</span></p>
                                <div class="experience-content">
                                    <p><span class="accent-color">Position:</span> Graphic Designer</p>
                                    <p><span class="accent-color">Company Name:</span> Brilliant Ideas Inc.</p>
                                    <p><span class="accent-color">Time Period:</span> Less than 6 months</p>
                                    <p class="accent-color">Work Description:</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.</p>
                                    <p class="display-notice under-review"><span class="accent-color-2">This work experience is currently under review.</span> We will immediately notify you once this is verified. We will also place a “verified” badge on the verified work exprerience.</p>
                                </div>
                                <span class="clearfix"></span>
                            </div>
                            <div class="add-experience-item added-experience">
                                <p class="step-num"><span>2</span></p>
                                <div class="experience-content">
                                    <p><span class="accent-color">Position:</span> Graphic Designer</p>
                                    <p><span class="accent-color">Company Name:</span> Brilliant Ideas Inc.</p>
                                    <p><span class="accent-color">Time Period:</span> Less than 6 months</p>
                                    <p class="accent-color">Work Description:</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis.</p>
                                    <p class="display-notice under-review"><span style="color:#b42020;">This work experience is not yet verified.</span> We cannot contact the reference you gave us. <a href="#">Edit your references.</a></p>
                                </div>
                                <span class="clearfix"></span>
                            </div>
                            <div class="add-experience-item experience-form">
                                <p class="step-num"><span>3</span></p>
                                <div class="experience-content">
                                    <h4 class="form-sec-title-2">Add Work Experience</h4>
                                    <div class="row">
                                        <div class="col-lg-4 col-xs-6">
                                            <div class="form-sec" style="margin-bottom:30px;">
                                                <p class="label uppercase accent-color">Your previous employer’s Company Name</p>
                                                <input type="text">
                                            </div>
                                            <div class="form-sec" style="margin-bottom:30px;">
                                                <p class="label uppercase accent-color">What was the position or job title?</p>
                                                <input type="text">
                                            </div>
                                            <div class="form-sec" style="margin-bottom:30px;">
                                                <p class="label uppercase accent-color">How long did you work There?</p>
                                                <select>
                                                    <option>Less than 6 months</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-xs-6">
                                            <div class="form-sec" style="margin-bottom:30px;">
                                                <p class="label uppercase accent-color">Tell us more about your previous work.</p>
                                                <textarea style="min-height:238px;"></textarea>
                                            </div>
                                        </div>
                                        <span class="clearfix"></span>
                                        <div class="col-xs-4">
                                            <div class="form-sec" style="margin-bottom:30px;">
                                                <p class="label uppercase accent-color">Your previous employer’s First Name</p>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="form-sec" style="margin-bottom:30px;">
                                                <p class="label uppercase accent-color">Your previous employer’s email address</p>
                                                <input type="email">
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="form-sec" style="margin-bottom:30px;">
                                                <p class="label uppercase accent-color">Your previous employer’s Contact no.</p>
                                                <input type="tel">
                                            </div>
                                        </div>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div class="form-sec text-center">
                                        <button href="#" class="btn-secondary uppercase">Submit Verification</button>
                                    </div>

                                </div>

                            </div> <!-- add-experience-item form-->
                            <div class="add-another-experience-btn"><a href="#" class="btn-secondary uppercase">Add another work exeprience</a></div>
                        </div> <!-- dashboard-add-experience -->

                    </div>
                    <div class="submit-area">
                        <input type="submit" value="Save  Recent Changes">
                    </div>

                </form> <!-- form -->
            </div> <!-- .dashboard-tab-content -->

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection