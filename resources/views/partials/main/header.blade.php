<header id="tg-header" class="tg-header tg-fixedheader tg-headervtwo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-headercontent">
                    <strong class="tg-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }} Logo">
                            <img src="{{ asset('assets/images/logo5.png') }}" alt="{{ config('app.name') }} Logo">
                        </a>
                    </strong>
                    <ul class="tg-socialicons">
                        <li><a href="https://www.facebook.com/pinnacleriskng/"><i class="icon-facebook-1"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/pinnacle-risk-advisory/"><i class="icon-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/pinnacleriskng"><i class="icon-twitter-1"></i></a></li>
                    </ul>
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);(0);">Company</a>
                                    <ul class="sub-menu">									
                                        <li><a href="{{ url('/company') }}">Our Company</a></li>
                                        <li><a href="{{ url('/clientele') }}">Our Clientele</a></li>
                                        <li><a href="{{ url('/partner') }}">Our Partners</a></li>
                                        <li><a href="{{ url('/team') }}">Our Team</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/value-proposition') }}">Our Uniqueness</a></li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);(0);">Campaigns</a>
                                    <ul class="sub-menu">									
                                        <li><a href="{{ url('/car-insurance-campaign') }}">Car Insurance Campaign<hr></a></li>
                                        <li><a href="{{ url('/student-insurance-campaign') }}">Student Insurance Campaign<hr></a></li>
                                        <li><a href="{{ url('/teens-insurance-campaign') }}">Teen Accident Campaign</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://medium.com/pinnacleriskng">Knowledge</a></li>
                                <li><a href="{{ url('/contact') }}">Get In Touch</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>