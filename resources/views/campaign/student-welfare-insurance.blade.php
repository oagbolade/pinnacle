@extends('layouts.secondary')

@section('title','Student Welfare Insurance Campaign')
@section('topic','Student Welfare Insurance Made Easy')
@section('sub-topic',"We are making it easy for students to complete their education")

@section('content')
	<nav id="tg-fixed" class="tg-internalnav">
		<ul class="tg-internallinkslist">
			<li><a href="#intro" class="tg-current">introduction</a></li>
			<li><a href="#benefits">Benefit</a></li>
			{{-- <li><a href="#terms">Terms and Conditions</a></li>
			<li><a href="#register">Register</a></li> --}}
		</ul>
	</nav>
	<section id="intro" class="tg-sectionspace tg-bglight tg-haslayout">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
					<div class="tg-sectionhead tg-sectionheadvtwo">
						<div class="tg-sectiontitle">
							<h2>Our Campaign</h2>
						</div>
						<div class="tg-description">
							<h4>
								This policy is designed to protect children and teenagers, it provides
								compensation in case of demise of the child’s parent or sponsor as a
								result of an accident resulting in death or permanent disability.
								The policy ensures that the child is able to complete their education
								without dropping out. It’s an annual policy for children in Nursery,
								Primary and Secondary schools in Nigeria.
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="benefits" class="tg-sectionspace tg-bglight tg-haslayout">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
					<div class="tg-sectionhead tg-sectionheadvtwo">
						<div class="tg-sectiontitle">
							<h2>Benefits</h2>
						</div>
						<div class="tg-description text-justify">
							<h4 class="text-center">
								See below various options to select from and claimable benefit per student:
							</h4>
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">PlANS</th>
										<th scope="col">CLAIMABLE BENEFIT</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									<td>A</td>
									<td>200,000</td>
									</tr>
									<tr>
									<td>B</td>
									<td>400,000</td>
									</tr>
									<tr>
									<td>C</td>
									<td>600,000</td>
									</tr>
									<tr>
									<td>D</td>
									<td>1000000</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>							
@endsection
