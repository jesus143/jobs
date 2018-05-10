@extends('layouts.app')

@section('more_css')

    <style>
        .job-message-container {
            width:100%;
            /*border:1px solid grey;*/
        }

        .job-message-content{
            width: 100%;
        }

        .job-message-footer textarea{
            width: 100%;
            height: 200px;
        }
    </style>


@endsection

@section('content')

    <div class="container"  id="app">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">

                        <div class="container">
                            <div class="row">


                                <div class="job-message-container">

                                    <div class="job-message-content">

                                        <ul>
                                            <li v-for="data in messages"> <b>@{{ data.sender_name }} </b> <p> @{{ data.message }}</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="job-message-footer">


                                        <form  v-on:submit="send" @enter="send" method="post">
                                            <textarea  v-model="form.msg" placeholder="Type your message here.." ></textarea>
                                            <input type="submit" name="Send">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('more_js')
    <script type="text/javascript">
        var socket = io('http://office-escape.local:3001');

        new Vue({
            el: '#app',

            data: {
                messages:[
                ],

                form: {
                    msg:null,
                    sender_name:'You',
                }
            },
            watch : {
            },
            methods: {
                send: function (e) {
                    axios.post('/employer/job/message/send', this.form)
                    .then(function (response) {
                        this.form.msg = '';
                    }.bind(this))
                    .catch(function (error) {
                        console.log(error);
                    });

                    e.preventDefault();
                },
            },

            mounted: function () {
                this.form.job_id = "{{$job_id}}";

                socket.on('job-message:{{$job_id}}', function(message) {
                    this.messages.push(message.data.data);
                }.bind(this));
            }
        });
    </script>
@endsection
