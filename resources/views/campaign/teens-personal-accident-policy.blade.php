@extends('layouts.secondary')

@section('title','Teens Personal Accident Policy')
@section('topic','Teens Accident Policy Made Easy')
@section('sub-topic',"We are making it easy for children, teenagers and young adults to have access to compensation for medical expenses in the cause of any casualties")

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
								This policy is designed for children, teenagers and young adults to
								provide compensation for medical expenses and permanent disability
								in an event of an accident.
								The policy covers children between the ages of 2 and 25years and
								remains in force 24Hrs daily whether the child is in school or out of
								school within Nigeria only.
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
										<th scope="col">
											CLAIMABLE BENEFIT
											(PERMANENT DISABILTY)
										</th>
										<th scope="col">MEDICAL EXPENSES BENEFIT</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>A</td>
										<td>200,000</td>
										<td>25,000</td>
									</tr>
									<tr>
										<td>B</td>
										<td>400,000</td>
										<td>50,000</td>
									</tr>
									<tr>
										<td>C</td>
										<td>600,000</td>
										<td>75,000</td>
									</tr>
									<tr>
										<td>D</td>
										<td>800,000</td>
										<td>100,000</td>
									</tr>
									<tr>
										<td>E</td>
										<td>1,000,000</td>
										<td>125,000</td>
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
