

@extends ('training.index')

@section ('lesson-content')
	<h5>{{ $lesson->title }}</h5>

	{{-- Video --}}
	{{-- <iframe src="https://player.vimeo.com/video/{{ $lesson->video }}" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}

@endsection
