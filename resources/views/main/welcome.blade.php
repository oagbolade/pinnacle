@extends('layouts.main')

@section('title','Risk Management and Insurance Advisory Company In Nigeria')

@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
				<section class="tg-sectionspace tg-bgdark tg-paddingbottomzero tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="tg-community">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
									<div class="tg-textshortcode">
										<div class="tg-sectionhead tg-sectionheadvtwo">
											<div class="tg-sectiontitle">
												<h2>Our Focus</h2>
											</div>
										</div>
										<div class="tg-description">
											<h3 style="color:white">
												Our goal is to minimize our clients risk and to enhance profitability. As a client focused risk management advisor 
												and insurance agent, We deliver top notch operational excellence, responsive customer service and professional recommendation
											</h3>
										</div>
										<a class="tg-btn tg-btnwhite" href="#values"><span>Our Core Values</span></a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right">
									<div class="tg-imgshortcode tg-imgshadow">
										<figure><img src="{{ asset('assets/images/pages/vision.jpg') }}" alt="Pinnacle Risk Advisory"></figure>
									</div>
								</div>
							</div>
							<div id="values" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-services tg-servicesvtwo">
									<div class="col-lg-12 col-sm-12 col-md-4 col-lg-4">
										<div class="row">
											<div class="tg-service">
												<span class="tg-serviceicon"><i class="icon-lightbulb"></i></span>
												<div class="tg-servicetitle">
													<h3><a href="javascript:void(0);(0);">QUALITY PERFORMANCE</a></h3>
												</div>
												<div class="tg-description">
													<p>
														It’s a measure of value and consistency we provide to our clients and underwriting partners.
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-12 col-md-4 col-lg-4">
										<div class="row">
											<div class="tg-service tg-bglight">
												<span class="tg-serviceicon"><i class="icon-lightbulb"></i></span>
												<div class="tg-servicetitle">
													<h3><a href="javascript:void(0);(0);">EXCELLENCE</a></h3>
												</div>
												<div class="tg-description">
													<p>
														We continuously strive to offer impeccable services to our clients. CAN DO SPIRIT is not in our vocabulary as we imbibe GET THE JOB DONE in our daily operations.
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-12 col-md-4 col-lg-4">
										<div class="row">
											<div class="tg-service">
												<span class="tg-serviceicon"><i class="icon-lightbulb"></i></span>
												<div class="tg-servicetitle">
													<h3><a href="javascript:void(0);(0);">COMMITMENT</a></h3>
												</div>
												<div class="tg-description">
													<p>
														We are focused on providing top notch advisory services as our clients rely on our intellectual inputs for decision-making.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="tg-sectionspace tg-overlapcontent tg-paddingbottomzero tg-bgwhite tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="tg-services tg-servicesvthree">
																	
							</div>
						</div>
					</div>
				</section>
				
				<section class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="tg-whatwedo">
							<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
									<div class="tg-imgshortcode tg-imgshadow">
										<figure><img src="{{ asset('assets/images/pages/risk-advisor.jpg') }}" alt="{{ config('app.name') }}"></figure>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right">
									<div class="tg-textshortcode">
										<div class="tg-title tg-titlevone">
										<br><br><br>
											<h2 style="line-height:76px; font-size: 42px;">Let's be your one stop for <br>
											  Risk Management and <br>
											 Insurance Advisory.</h3>
										</div>
										<br>
										<a class="tg-btn tg-btnpink" href="{{ url('/contact') }}#get-in-touch"><span>Start Here</span></a>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</section>							
			</main>
@endsection