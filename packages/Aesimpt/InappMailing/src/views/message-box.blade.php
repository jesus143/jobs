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
            <div class="col-xs-12 table-responsive">
              <table class="table table-hover messages-table">
                <thead>
                  <tr>
                    <th colspan="2" class="message-check"><input type="checkbox" id="check_all"><label for="check_all"></label></th>
                    <th class="message-actions">
                      <button onclick="mailBulkSubmit(this);" data-act="is_read" data-bool="{{ is_route('mail.read', 0, 1) }}" class="icon-type message-mark-read"><span class="icon-mark-as-read"></span></button>
                      <button onclick="mailBulkSubmit(this);" data-act="is_starred" data-bool="{{ is_route('mail.starred', 0, 1) }}" class="icon-type message-mark-favorite"><span class="icon-mark-as-favorite"></span></button>
                      <button onclick="mailBulkSubmit(this);" data-act="status" data-bool="{{ is_route('mail.deleted', 1, 0) }}" class="icon-type message-delete"><span class="icon-delete"></span></button>
                    </th>
                    <th colspan="2"><span class="message-notices">you have <i class="accent-color">{{ $data->count->threads }}</i> 
                        {{ write_if_route([
                            'mail.inbox'   => '',
                            'mail.unread'  => 'Unread',
                            'mail.read'    => 'Read',
                            'mail.sent'    => 'Sent',
                            'mail.starred' => 'Starred',
                            'mail.deleted' => 'Deleted'
                        ]) }}
                     {{ str_singular_plural('message', 'messages', $data->count->threads) }}</span><span class="message-notices">Showing <strong class="start-in-page">1</strong>-<strong class="total-in-page"></strong> out of <span class="total-entries"></span> {{ str_singular_plural('message', 'messages', $data->count->threads) }}</span></th>
                  </tr>
                </thead>
                <tbody id="messages-tbody" data-per-page="25">
            			@foreach ($data->threads as $thread)
            				<tr id="message_{{$thread->id}}" class="message-row{{ is_true($thread->is_read, '', ' unread') }}{{ is_match($thread->flag, 'disputed', ' discontinue', '') }}" data-row="{{$thread->id}}">
            					<td class="message-check"><input type="checkbox" class="message-checkbox" name="threads[]" value="{{$thread->thread_id}}" data-id="{{$thread->id}}" id="message-{{$thread->id}}"><label for="message-{{$thread->id}}"></label></td>
            					<td class="mark-star {{ is_true($thread->is_starred, 'filledstar', '') }}" data-bool="{{ is_true($thread->is_starred, 0, 1) }}"><span class="icon-mark-as-favorite"></span></td>
            					<td class="message-from">{{ $thread->sender->name }}</td>
            					<td class="message-overview"><span class="message-subject">{{ $thread->subject }}</span> - {{$thread->message->excerpt}}</td>
            					<td class="message-date">{{ pretty_date($thread->message->created) }}</td>
            				</tr>
            			@endforeach                     
                </tbody>
              </table>
            </div>
        </div> <!-- .dashboard-tab-content -->

        <ul class="pagination message-pager" id="myPager"></ul>
    </div> <!-- .dashboard-tab-inner -->
</div> <!-- dashboard-tab-area -->
<span class="clearfix"></span>

<form id="bulk-submit" action="" method="POST">
	@csrf
	<input type="hidden" id="thread_ids" name="thread_ids">
</form>

	@section('more_js')
		<script type="text/javascript">

        jQuery('body').on('click', 'tr.message-row td:not(".message-check"):not(".mark-star")', function(e) {
            window.location.href = '{{ URL::to('/mail') }}/'+ jQuery(this).parent().find('.message-checkbox').val();
        });

        jQuery('body').on('click', '.mark-star', function(e) {
            
            var starred = 1;

            if( jQuery(this).hasClass('filledstar') ) {
                starred = 1;
            } else {
                starred = 0;
            }

            jQuery('input#thread_ids').val(jQuery(this).parent().find('.message-checkbox').val());
            jQuery('#bulk-submit').attr('action', '{{ URL::to('/mail/update/status/is_starred') }}/'+ jQuery(this).data('bool'));

            if( jQuery('input#thread_ids').val() != '' ) {
                jQuery('#bulk-submit').submit();
            }
        });

		function mailBulkSubmit(el) {

			var val = [];
			jQuery('input[name="threads[]"]:checked').each(function(i){
				val[i] = jQuery(this).val();
			});

			jQuery('input#thread_ids').val(val);
			jQuery('#bulk-submit').attr('action', '{{ URL::to('/mail/update/status') }}/'+ jQuery(el).data('act') +'/'+ jQuery(el).data('bool'));

			if( jQuery('input#thread_ids').val() != '' ) {
				jQuery('#bulk-submit').submit();
			}
			
		}
		</script>
	@endsection

@endsection