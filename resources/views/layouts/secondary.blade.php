@extends('layouts.base')

@section('body')
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
			
        @include('partials.main.header')

		<div class="tg-pushpage">
			@include('partials.secondary.slide')

			@yield('content')			
			
			@include('partials.main.footer')
		</div>
	</div>
@endsection