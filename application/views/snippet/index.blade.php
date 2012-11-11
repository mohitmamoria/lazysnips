@layout('master')

@section('main')
	{{ Form::open('/') }}
		{{ Form::textarea('snippet', $snippet) }}
		{{ HTML::link_to_route('new_snippet', 'New') }}
		{{ Form::submit('Save') }}
	{{ Form::close() }}
@endsection