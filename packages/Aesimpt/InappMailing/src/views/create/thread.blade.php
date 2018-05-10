<h3>Create Thread</h3>

@if (count($errors) > 0)
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif


{!! Form::open(['route' => 'mail.create.thread']) !!}
	
	{{ Form::text('receiver', null, ['placeholder' => 'To:']) }}
	{{ Form::text('subject', null, ['placeholder' => 'Subject']) }}
	{{ Form::textarea('body', null, ['placeholder' => 'Message']) }}
	{{ Form::submit('Send') }}

{!! Form::close() !!}