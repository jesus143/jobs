@extends('layouts.app')

@section('content')

   <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
      <h2 class="dashboard-tab-area-title"><span class="nav-icon icon-my-account"></span>My Account</h2>
      <div class="dashboard-tab-inner">

         @include('account::jobseeker.includes.menu')

         <div class="row dashboard-tab-content">
            <form class="dashboard-form">
               <div class="col-md-6">
                  <div class="form-sec">
                     <p class="label uppercase accent-color">new email address</p>
                     <input type="email">
                  </div>
                  <div class="form-sec">
                     <p class="label uppercase accent-color">Type your password to confirm change</p>
                     <input type="password">
                  </div>
               </div>
               <div class="submit-area">
                  <input type="submit" value="Save recent Changes">
               </div>

            </form> <!-- form -->
         </div> <!-- .dashboard-tab-content -->

      </div> <!-- .dashboard-tab-inner -->
   </div><!-- dashboard-tab-wrap -->
   <span class="clearfix"></span>

@endsection