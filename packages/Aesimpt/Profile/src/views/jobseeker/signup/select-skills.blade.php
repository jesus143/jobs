@extends('layouts.app')

@section('content')

   <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
      <h2 class="dashboard-tab-area-title">Welcome to Office Escape</h2>
      <p class="dashboard-tab-area-desc">To get started, create your profile now and attract your potential employers. Showcase your best skills, set your availability to work, add your previous work experience (if any) and tell us more about yourself!</p>
      <div class="dashboard-tab-inner">

         @include('profile::jobseeker.includes.menu-signup')

         <div class="row dashboard-tab-content">
            <form class="skills-form">
               <div class="form-sec tab-inner">
                  <div class="col-xs-3">
                     <ul class="nav nav-tabs">
                        <li class="tab-title">
                           <span>Skill Categories</span>
                        </li>
                        <li class="data-with-toggle active">
                           <a href="#parent-skill-1" data-toggle="tab">English</a>
                           <ul class="dropdown-menu">
                              <li><a href="#" class="selected">Speaking</a></li>
                              <li><a href="#" class="selected">Writing</a></li>
                              <li><a href="#" class="selected">Translation</a></li>
                              <li><a href="#">Not Selected Skill</a></li>
                              <li><a href="#">Not Selected Skill</a></li>
                           </ul>
                        </li>
                        <li class="data-with-toggle">
                           <a href="#parent-skill-2" data-toggle="tab">Office Administration</a>
                        </li>
                        <li class="data-with-toggle">
                           <a href="#parent-skill-3" data-toggle="tab">Marketing and Sales</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-xs-9 tab-content">

                     <div class="tab-pane active" id="parent-skill-1">
                        <h4 class="form-sec-title-2">Your English Skills</h4>
                        <div class="form-sec"><p>Choose up to 25 skills from the categories listed at the left. You can only rate 5 times in each star ratings - for example, 5 skillls rated with 5 stars, another 5 skills with 4 stars and so on.</p></div>
                        <div class="child-skill-item english-skill">
                           <div id="child-skill">Speaking</div>
                           <input id="input-1" name="input-1" class="star-rating">
                           <span class="clearfix"></span>

                           <div id="view-more-speaking" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. <a href="edit" class="dashed">edit</a></p>
                              </div>
                           </div>

                           <span class="view-more-less" data-text-swap="View less" data-text-original="View details" data-toggle="collapse" data-target="#view-more-speaking">View details</span>

                        </div> <!-- .child-skill-item -->

                        <div class="child-skill-item english-skill">
                           <div id="child-skill">Writing</div>
                           <input id="input-1" name="input-1" class="star-rating">
                           <span class="clearfix"></span>

                           <div id="view-more-writing" class="panel-collapse collapse">
                              <div class="panel-body">
                                 <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. <a href="edit" class="dashed">edit</a></p>
                              </div>
                           </div>

                           <span class="view-more-less" data-text-swap="View less" data-text-original="View details" data-toggle="collapse" data-target="#view-more-writing">View details</span>
                        </div> <!-- .child-skill-item -->

                        <div class="child-skill-item english-skill">
                           <div id="child-skill">Translation</div>
                           <input id="input-1" name="input-1" class="star-rating">
                           <span class="clearfix"></span>

                           <div class="add-skill-desc">
                              <textarea placeholder="Add description"></textarea>
                              <button class="btn-secondary uppercase">Save Changes</button>
                              <button class="btn-secondary btn-cancel uppercase">Cancel</button>
                           </div>
                        </div> <!-- .child-skill-item -->

                        <div class="form-sec" style="margin-top:30px;">
                           <p class="label uppercase">Tools you use for your Skills in <span class="accent-color">English</span></p>
                           <textarea></textarea>
                           <p>If you have more than one skills, separate them with a comma. (e.g. Microsoft Excel, Microsoft Word, Skype)</p>
                        </div>

                     </div>

                     <div class="tab-pane" id="parent-skill-2">
                        <h4 class="form-sec-title-2">Office Administration</h4>
                        <div class="form-sec"><p>Choose up to 25 skills from the categories listed at the left. You can only rate 5 times in each star ratings - for example, 5 skillls rated with 5 stars, another 5 skills with 4 stars and so on.</p></div>

                        tab 2

                        <div class="form-sec" style="margin-top:30px;">
                           <p class="label uppercase">Tools you use for your Skills in <span class="accent-color">Office Administration</span></p>
                           <textarea></textarea>
                           <p>If you have more than one skills, separate them with a comma. (e.g. Microsoft Excel, Microsoft Word, Skype)</p>
                        </div>
                     </div>

                     <div class="tab-pane" id="parent-skill-3">
                        <h4 class="form-sec-title-2">Marketing and Sales</h4>
                        <div class="form-sec"><p>Choose up to 25 skills from the categories listed at the left. You can only rate 5 times in each star ratings - for example, 5 skillls rated with 5 stars, another 5 skills with 4 stars and so on.</p></div>

                        tab 3

                        <div class="form-sec" style="margin-top:30px;">
                           <p class="label uppercase">Tools you use for your Skills in <span class="accent-color">Marketing and Sales</span></p>
                           <textarea></textarea>
                           <p>If you have more than one skills, separate them with a comma. (e.g. Microsoft Excel, Microsoft Word, Skype)</p>
                        </div>
                     </div>

                  </div> <!-- /tab-content -->
                  <span class="clearfix"></span>
               </div> <!-- form-sec -->
               <div class="submit-area">
                  <input type="submit" value="Save  Recent Changes">
               </div>
            </form> <!-- form -->
         </div> <!-- .dashboard-tab-content -->


      </div> <!-- .dashboard-tab-inner -->
   </div>
   <span class="clearfix"></span>

@endsection


@section('more_js')
   <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script src="{{ asset('js/star-rating.min.js') }}"></script>

   <script>
      /* star ratings  */
      $(document).on('ready', function(){
         $('.star-rating').rating({
            emptyStar: '<i class="fa fa-star emptystar"></i>',
            filledStar: '<i class="fa fa-star filledstar"></i>',
            step: 1,
            showClear: false,
            starCaptions: {
               1: '1 star <span>(Needs improvement)</span>',
               2: '2 stars <span>(I know the basics)</span>',
               3: '3 stars <span>(I’m good at it)</span>',
               4: '4 stars <span>(I’m knowledgable)</span>',
               5: '5 stars <span>(I’m an expert)</span>'
            }
         });
      });

      /* skills tab */
      $('.tab-inner .nav-tabs > li').click(function() {
      var $this = $(this).children('ul');
      $(".tab-inner .nav-tabs > li ul").not($this).hide();
      $(".tab-inner .nav-tabs > li ul").not($this).removeClass('toggled');

      $this.toggle();
      $this.toggleClass( "toggled" );
   });
   </script>

   <!-- sidebar custom file upload -->
   <script src="{{ asset('js/custom-file-input.js') }}"></script>

@endsection