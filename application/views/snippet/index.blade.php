@layout('master')

@section('main')
	{{ Form::open('/') }}
		{{ Form::textarea('snippet', $snippet) }}
		<div class="btn-group nav">
			{{ Form::submit('Save', array('class' => 'btn btn-success')) }}
			{{ HTML::link_to_route('new_snippet', 'New', '', array('class' => 'btn btn-danger')) }}
		</div>
	{{ Form::close() }}
@endsection

@section('scripts')
	{{ HTML::script('js/vendors/jquery.js') }}
	{{ HTML::script('js/vendors/tabby.js') }}
	<script>
		$('textarea').height($(window).height() - 50).tabby().focus();
	</script>
@endsection