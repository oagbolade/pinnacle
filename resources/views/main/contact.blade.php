@extends('layouts.secondary')

@section('title','Get In Touch')
@section('topic','Get In Touch')
@section('sub-topic',"Let's be your one stop for Risk Management and Insurance Advisory.")

@section('content')
<section class="tg-haslayout">
					<div class="tg-contactus tg-bglight">
						<div class="row">
							<div class="container">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<ul class="tg-address tg-sectionspace">
										<li>
											<i class="icon-chat"></i>
											<h2>Get in Touch</h2>
											<span>Telephone: +234-817-363-9605</span>
											<a href="mailto:info@pinnacleriskng.com">info@pinnacleriskng.com</a>
										</li>
										<li>
											<i class="icon-map-marker"></i>
											<h2>Visit Our Location</h2>
											<span>1 Towry Close, Off Idejo Close</span>
											<span>Victoria Island, Lagos</span>
											<a href="#get-in-touch">Get Directions</a>
										</li>	
										<li>
											<i class="icon-map-marker"></i>
											<h2>Our Branch Office</h2>
											<span>37,Office 5 Sunmola Street</span>
											<span>Mende Lagos</span>
										</li>									
										<!-- <li>
											<i class="icon-globe"></i>
											<h2>Connect With us</h2>
											<div style="font-size:18px;">
												<a href="https://www.facebook.com/pinnacleriskng/">Facebook</a>
												<a href="https://www.linkedin.com/company/pinnacle-risk-advisory/">Linkedin</a>
												<a href="https://twitter.com/pinnacleriskng">Twitter</a>
											</div>											
										</li> -->
									</ul>
								</div>
							</div>
						</div>
						<div id="get-in-touch" class="tg-mapprojectarea tg-bgwhite">
						<div class="row no-gutters">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-left">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7489943015994!2d3.409879515359775!3d6.426286195350587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8acfabf36b25%3A0x46f6cd80820f145a!2sCranium+One!5e0!3m2!1sen!2sng!4v1523693997825" width="951" bg-color="black" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right">
								<div class="tg-startyourwork">
									<div class="tg-title tg-titlevone">
										<h3><span>Let’s work together</span>Start your Project</h3>
									</div>
									@include('partials.alert')
									<form action="{{ url('/contact') }}#get-in-touch" method="POST" class="tg-formtheme tg-formstartproject">
										
										{{ csrf_field() }}
											<div class="form-group">
												<input type="text" name="full_name" class="form-control" placeholder="Your Name">
											</div>
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Email Address">
											</div>
											<div class="form-group">
												<textarea cols="110" name="description" placeholder="Message"></textarea>
											</div>
											<div class="form-group">
												<button class="tg-btn tg-btnpink" type="submit"><span>send message</span></button>
											</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>
				</section>

				<!-- <script>
 
					$("document").ready(function(){
						$(".tg-formtheme").submit(function(e){
							e.preventDefault();
							var full_name = $("input[name=full_name]").val();
							var email = $("input[name=email]").val();
							var description = $("textarea[name=description]").val();;
							$.ajax({
								type: "POST",
								url : "{{ url('/contacts') }}",
								data : dataString,
								dataType : "json",
								success : function(data){
									console.log(data)
							}						
							},"json");
						
						});
					});
  				</script> -->
@endsection
