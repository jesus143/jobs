@extends('layouts.app')

@section('content')
    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area">
        <h2 class="dashboard-tab-area-title"><span class="icon-my-account"></span>My Account</h2>
        <div class="dashboard-tab-inner">

            @include('account::employer.includes.menu')

            <div class="row dashboard-tab-content">
                <div class="col-md-12">
                    <h2 class="form-sec-title">Payment Status</h2>
                </div>
                <div class="col-xs-6">
                    <div class="form-sec">
                        <p class="uppercase accent-color">Next Payment</p>
                        <p class="h3">December 1, 2016</p>
                        <p class="accent-color-2">You have 14 days left to pay before expiration.</p>
                    </div>
                    <div class="form-sec">
                        <p class="uppercase accent-color">Last Payment</p>
                        <p class="h3">September 30, 2016</p>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-sec">
                        <p class="label uppercase accent-color">Last Payment</p>
                        <p><select>
                                <option>Paypal</option>
                            </select>
                        </p>
                        <button class="btn-secondary uppercase">Setup</button>
                    </div>
                </div>
                <span class="clearfix"></span>
                <div class="col-xs-12">
                    <div class="form-sec">
                        <p class="uppercase accent-color">Payment History</p>
                        <p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.  Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.  Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                    </div>
                    <div class="form-sec">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Period Covered</th>
                                <th>Date of Payment</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>October 1 - October 31</td>
                                <td>September 27, 2016</td>
                            </tr>
                            <tr>
                                <td>October 1 - October 31</td>
                                <td>September 27, 2016</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- .dashboard-tab-content -->

        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>
@endsection