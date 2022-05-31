@include("web.common.head")
@include("web.common.nav")

@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

{{ Form::open([
    'route' => 'upload_image.store',
    'method' => 'post',
    'files' => true,
])}}
    {{ Form::file(
        'image',
        ['accept' => 'image/png, image/jpeg']
    ) }}
    {{ Form::submit('お菓子の画像を投稿する') }}
{{ Form::close() }}

@include("web.common.footer")
