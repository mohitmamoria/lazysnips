@layout('master')

@section('styles')
	{{ HTML::style('code-prettify/prettify.css') }}
@endsection

@section('main')
	<pre class="prettyprint linenums">{{ htmlspecialchars($snippet->snippet) }}</pre>
	<div class="btn-group nav">
		{{ HTML::link_to_route('fork_snippet', 'Fork', $snippet->id, array('class' => 'btn btn-warning')) }}
		{{ HTML::link_to_route('new_snippet', 'New', '', array('class' => 'btn btn-danger')) }}
	</div>
@endsection

@section('scripts')
	{{ HTML::script('code-prettify/prettify.js') }}
	<script>
		prettyPrint();
	</script>
@endsection