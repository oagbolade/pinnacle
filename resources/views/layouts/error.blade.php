@extends('layouts.base')

@section('body')
	@include('partials.main.header')
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<div class="tg-404error">
			<div class="container">
				<div class="row">
					<div class="tg-404errorcontent">
						<h1>@yield('error-code')</h1>
						<h2>@yield('error-text')</h2><br>
						<a class="tg-btn" href="{{ url('/') }}"><span>go back to home</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection