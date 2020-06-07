@extends('layouts.app')

@section('content')
<h1><?php echo $title ?></h1>
<p>This is the About page</p>


<script src="c:/xampp/htdocs/lsapp/node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
{{--<script >
    CKEDITOR.replace("editor");
</script>
--}}

<div id="editor">
	<p>This is the editor content.</p>
    
</div>



{{--<script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
--}}

<h1>Classic editor</h1>
    <div id="editor">
        <p>This is some sample content.</p>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
