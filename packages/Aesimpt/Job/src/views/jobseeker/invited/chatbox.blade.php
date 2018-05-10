@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area my-jobs">
        <h2 class="dashboard-tab-area-title"><span class="icon-jobs-active"></span>Active Jobs</h2>
        <div class="dashboard-tab-inner">
            <div class="row dashboard-tab-content">
                <div style="padding:5px 30px;">
                    <a href="#" class="fa fa-long-arrow-left accent-color back-icon"></a>
                </div>
                <span class="divider"></span>
                <div class="form-sec view-job-head">
                    <p class="job-title">{{ $job->position }}</p>
                    <p class="by-company"><a href="#" class="accent-color uppercase">
                            <img src="{{ asset('img/sample-author-2.png') }}"> {{ $job->owner->name }}</a>
                        <span class="job-post-date">{{ $job->postAgo() }}</span></p>
                </div>

                <nav class="form-sec view-job-nav">
                    @include('job::jobseeker.includes.menu.invited', ['job' => $job, 'from_tab_name' => $from_tab_name])
                </nav>

                <center>
                    <a href="#" class="btn-secondary btn-cancel uppercase">View Older Messages</a>
                </center>

                <div class="chat-item" v-for="data in messages">
                    <a href="#" class="chat-prof-img"><img src="{{ asset('img/sample-author-2.png') }}"></a>
                    <div class="chat-content">
                        <p class="chat-meta"><a href="#">@{{ data.sender_name }}</a><span>July 25, 2016</span></p>
                        <p>@{{ data.message }}</p>
                    </div>
                    <span class="clearfix"></span>
                </div>

                <div class="chat-item discontinue">
                    <p class="discontinue-notice">Rafael Ilagan has requested to discontinue job. He has left a message below explaining the reason of discontinuance.</p>
                    <a href="#" class="chat-prof-img"><img src="{{ asset('img/sample-author-2.png') }}"></a>
                    <div class="chat-content">
                        <p class="chat-meta"><a href="#">Rafael Ilagan</a><span>July 25, 2016</span></p>
                        <p> Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        <p class="discontinue-btn"><a href="#" class="btn-secondary uppercase">Accept Discontinuance</a><a href="#" class="btn-secondary btn-cancel uppercase">Reject Request</a></p>
                    </div>
                    <span class="clearfix"></span>
                </div>

                <p class="user-typing"><img src="{{ asset('img/sample-author-2.png') }}">Rafael Ilagan is typing...</p>

                <div class="chat-item chat-form">



                    <form  v-on:submit="send" @enter="send" method="post">
                        <input type="text" v-model="form.msg" placeholder="Type your message here..">
                        <input type="submit" name="Send">
                    </form>

                     <p class="error-color">Messages will be automaticaly deleted 30 days after it has been sent.</p>
                </div>

                <div class="view-job-button">
                    <a href="#" class="btn-secondary btn-cancel uppercase">Discontinue Job</a>
                </div>
            </div> <!-- .dashboard-tab-content -->
        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

@endsection


@section('more_js')
    <script type="text/javascript">
        var socket = io('http://teamworkengine.local:3001');

        new Vue({
            el: '#app',

            data: {
                messages:[
                    { sender_name : 'Jesus Erwin Suarez', message: 'This is just a message!' },
                    { sender_name : 'Jesus Erwin Suarez', message: 'This is just a message!' },
                    { sender_name : 'Jesus Erwin Suarez', message: 'This is just a message!' },
                ],

                job_id: '{{ $job->id }}',

                form: {
                    msg:null,
                    sender_name:'You',
                }
            },
            watch : {
            },
            methods: {
                send: function (e) {

                    this.form.job_id = this.job_id;


                    axios.post('/employer/job/message/send', this.form)
                        .then(function (response) {
                            this.form.msg = '';
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });

                    e.preventDefault();
                },

                loadMessages: function() {

                    axios.get('job/' + this.job_id + '/messages')
                    .then(function (response) {
                        console.log("test");
                        this.form.msg = '';
                    }.bind(this))
                    .catch(function (error) {
                        console.log(error);
                    });

                }
            },

            mounted: function () {
                socket.on('job-message:' + this.job_id, function(message) {
                    console.log(message.data.data);
                    this.messages.push(message.data.data);
                }.bind(this));
            }
        });
    </script>
@endsection
