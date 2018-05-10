@extends('layouts.app')

@section('content')

    <div class="col-xs-11 col-md-9 col-lg-10 padding-zero dashboard-tab-area my-inbox">
        <h2 class="dashboard-tab-area-title"><span class="icon-my-inbox"></span>My Inbox</h2>
        <div class="dashboard-tab-inner">
            <nav class="dashboard-tab-titles">
                <ul>
                <li class="{{ is_active(['mail.inbox']) }}"><a href="{{ route('mail.inbox') }}">Inbox</a></li>
                <li class="{{ is_active(['mail.unread']) }}"><a href="{{ route('mail.unread') }}">Unread<!--<span class="notice notice-num"></span>--></a></li>
                <li class="{{ is_active(['mail.read']) }}"><a href="{{ route('mail.read') }}">Read</a></li>
                <li class="{{ is_active(['mail.sent']) }}"><a href="{{ route('mail.sent') }}">Sent</a></li>
                <li class="{{ is_active(['mail.starred']) }}"><a href="{{ route('mail.starred') }}">Starred</a></li>
                <li class="{{ is_active(['mail.deleted']) }}"><a href="{{ route('mail.deleted') }}">Deleted</a></li>
            </ul>
                <span class="clearfix"></span>
            </nav>
            
            <div class="row dashboard-tab-content">
                
                    <div class="col-md-12">
                        <div class="view-reply-actions">
                            <a href="{{ URL::previous() }}" class="fa fa-long-arrow-left accent-color back-icon"></a>
                            <p style="margin:0;display:inline-block">You are replying <a href="#">{{ $data->subject }}</a> from <a href="#">{{ $data->sender->name }}</a></p>
                        </div>
                    </div>
                    <span class="clearfix"></span>
                    <div class="col-md-12">
                        <span class="divider"></span>

                        @if( Auth::user()->id !== $data->sender->id )
                            <div class="reply-message-head">
                                <img src="{{ URL::to('img/sample-author-2.png') }}">
                                <p class="reply-message-to">{{ $data->sender->name }}<br><a href="#" class="dashed">View Profile</a></p>
                                <span class="clearfix"></span>
                            </div>
                            <span class="divider"></span>
                        @endif

                        <div class="row dashboard-tab-content">
                            <div class="col-xs-12 table-responsive">
                              <table class="table table-hover messages-table">
                                <tbody id="messages-tbody">
                                        @foreach ($data->messages as $message)
                                            <tr id="message_{{$message->id}}" class="message-row" data-row="{{$message->id}}">
                                                <td class="message-from">{{ $message->sender->name }}</td>
                                                <td class="message-overview">{{$message->excerpt}}</td>
                                                <td class="message-date">{{ pretty_date($message->created) }}</td>
                                            </tr>
                                        @endforeach                     
                                </tbody>
                              </table>
                            </div>
                        </div>
                        {!! Form::open(['route' => ['mail.create.message', $data->thread_id]]) !!}
                            <div class="view-message-content">
                               {{--  <p class="label uppercase accent-color">Subject</p>
                                <p><input type="text"></p> --}}
                                <p class="label uppercase accent-color">Message</p>
                                <p>{{ Form::textarea('body') }}</p>

                            </div>
                            <span class="divider"></span>
                            <div class="view-message-buttons">
                                <p>{{ Form::submit('Send Message') }}</p>
                                <p>Please note: sending abusive messages or messages for the purpose of advertising isn't acceptable and is likely to result in your account being suspended.</p>
                            </div>
                        {!! Form::close() !!}
                    </div>
                
            </div> <!-- .dashboard-tab-content -->
            
        </div> <!-- .dashboard-tab-inner -->
    </div> <!-- dashboard-tab-area -->
    <span class="clearfix"></span>

    @section('more_js')

    @endsection


@endsection
