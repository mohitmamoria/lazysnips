@layout('master')

@section('main')
	<pre>{{ e($snippet->snippet) }} {{ $snippet->id }}</pre>
	{{ HTML::link_to_route('fork_snippet', 'Fork', $snippet->id) }}
	{{ HTML::link_to_route('new_snippet', 'New') }}
@endsection