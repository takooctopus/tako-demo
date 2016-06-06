@extends('admin.layouts.layout')

@section('content')
	<h1>TinyMCE Editor</h1>
	  <form method="post">
	    <textarea id="textarea">Hello Tako !</textarea>
	  </form>
	</body>
@endsection

@section('scripts')
<script src="{{ url('/assets/tinymce/tinymce.min.js') }}"></script>
<script>
tinymce.init({
	  selector: 'textarea',  // change this value according to your HTML
	  plugins : 'advlist autolink link image lists charmap print preview'
	});
</script>
@endsection