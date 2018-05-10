@extends('layouts.app')

@section('content')

   <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
      <h2 class="dashboard-tab-area-title"><span class="icon-my-account"></span>My Account</h2>
      <div class="dashboard-tab-inner">

         @include('account::employer.includes.menu')

         <div class="row dashboard-tab-content">
            <div class="form-sec col-xs-6">
               <p class="label uppercase accent-color">Your Email Adress</p>
               <input type="email" value="rickymatti2@email.com" readonly>
            </div>
            <div class="form-sec col-xs-12">
               <p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.  Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.  Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
            </div>
            <span class="clearfix"></span>

         </div> <!-- .dashboard-tab-content -->
      </div> <!-- .dashboard-tab-inner -->
   </div> <!-- dashboard-tab-area -->
   <span class="clearfix"></span>

@endsection