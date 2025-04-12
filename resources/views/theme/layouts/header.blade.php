<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('public/assets/img/StaffViz-white-logo.svg') }}" class="logo" alt="Logo">
      </a>
      <button class="navbar-toggler order-lg-2 order-md-4 order-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav d-flex align-items-lg-center mx-auto">
          <!-- <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/features') }}">Features</a>
                  </li> -->
          <li class="nav-item" id="features-navigation">
            <div class="dropdown">
              <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Features
              </button>
              <ul class="dropdown-menu fullwidth-screen">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-3 tab-start-text">
                      <h6>Our Features</h6>
                      <p>Leveraging cutting-edge technologies to build industry-leading digital products.</p>
                      <img class="d-md-block d-none features-img" src="{{ asset('public/assets/img/img_staffviz_features.webp') }}" alt="Logo">
                    </div>
                    <div class="col-md-9">
                      <div class="list-heading">
                        <h6>Features</h6>
                      </div>
                      <div class="hortizonal-divider"></div>
                      <div class="row">
                        <div class="col-lg-4 col-md-6 single-link">
                          <a href="{{url('/feature/hr-management')}}">HR Management</a>
                          <p>Consolidated tools for onboarding and staff management.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 single-link">
                          <a href="{{url('/feature/client-management')}}">Client Management</a>
                          <p>Coordinate and manage client interactions & relationships.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 single-link">
                          <a href="{{url('/feature/tracking')}}">Tracking</a>
                          <p>Comprehensive task performance, time<br> spent, and outcomes.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 single-link">
                          <a href="{{url('/feature/training-management')}}">Training Management</a>
                          <p>Optimize training and track progress in one<br> complete system.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 single-link">
                          <a href="{{url('/feature/project-management')}}">Project & Task Management</a>
                          <p>Stay connected and aligned to meet every<br> deadline.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 single-link">
                          <a href="{{url('/feature/productivity-analytics')}}">Productivity Analytics</a>
                          <p>Create efficient processes with<br> actionable data insights.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 single-link">
                          <a href="{{url('/feature/hr-management#shift-managment')}}">Shift & Break Management</a>
                          <p>Effortlessly manage multiple shifts and<br> customize break schedules</p>
                        </div>
                        <div class="col-lg-4 col-md-6 single-link">
                          <a href="{{url('/feature/monitoring')}}">Monitoring</a>
                          <p>Real-time insights into activities that you<br> should know about.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 single-link feature-see-all-link">
                          <a class="see-all" href="{{ url('/features') }}">See all features</a>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-lg-4 col-md-6 offset-lg-8 offset-md-6 book-btn-box">
                          <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" class="btn book-demo-btn" target="_blank">BOOK A DEMO</a>
                           <!-- <button class="btn book-demo-btn" data-bs-toggle="modal" data-bs-target="#talkToSalePopup">BOOK A DEMO</button> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
          </li>
          <li class="nav-item" id="solutions-navbar">
            <div class="dropdown">
              <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Solutions
              </button>
              <ul class="dropdown-menu fullwidth-screen">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 tab-start-text">
                      <h6>Solutions </h6>
                      <p>Discover how StaffViz provides the finest solutions to industries and drives business success through optimized productivity.</p>
                      <img class="d-md-block d-none solution-img" src="{{ asset('public/assets/img/img_staffviz_solutions.webp') }}" alt="Logo">
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                      <div class="list-heading">
                        <h6>Work Environments </h6>
                      </div>
                      <div class="hortizonal-divider"></div>
                      <ul class="list">
                        <li class="single-link">
                          <a href="{{url('/solutions#office-plateform')}}">Remote Workforce</a>
                          <p>Manage remote teams with tracking tools.</p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/solutions#office-plateform')}}">Hybrid Teams</a>
                          <p>Seamless in-office and remote integration.</p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/solutions#office-plateform')}}">In-Office Teams</a>
                          <p>Optimize productivity and collaboration. </p>
                        </li>
                        <li class="single-link">
                          <a class="see-all" href="{{url('/solutions#office-plateform')}}">See more..</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                      <div class="list-heading">
                        <h6>Industries </h6>
                      </div>
                      <div class="hortizonal-divider"></div>
                      <ul class="list">
                        <li class="single-link">
                          <a href="{{url('/industries/time-tracking-software-for-startups')}}">Startups</a>
                          <p>Tools to manage teams and scale growth. </p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/industries#industries-list')}}">IT & Tech</a>
                          <p>Meet deadlines by optimizing communication. </p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/industries/real-estate')}}">Real Estate</a>
                          <p>Boost agent productivity and close deals faster. </p>
                        </li>
                        <li class="single-link">
                          <a class="see-all" href="{{url('/industries')}}">See more..</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                      <div class="list-heading">
                        <h6>Business Types</h6>
                      </div>
                      <div class="hortizonal-divider"></div>
                      <ul class="list">
                        <li class="single-link">
                          <a href="{{url('/solutions#office-plateform')}}">Enterprise</a>
                          <p>Scalable tools for large organizations. </p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/solutions#office-plateform')}}">SMBs & SMEs</a>
                          <p>Comprehensive support for small businesses. </p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/solutions#office-plateform')}}">Freelancers</a>
                          <p>Track tasks and time for productivity. </p>
                        </li>
                        <li class="single-link">
                          <a class="see-all" href="{{url('/solutions#office-plateform')}}">See more..</a>
                        </li>
                      </ul>
                      <div class="book-btn-box">
                      <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" class="btn book-demo-btn" target="_blank">BOOK A DEMO</a>
                           <!-- <button class="btn book-demo-btn" data-bs-toggle="modal" data-bs-target="#talkToSalePopup">BOOK A DEMO</button> -->
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
          </li>
          
          <li class="nav-item" id="solutions-navbar">
            <div class="dropdown">
              <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Resources
              </button>
              <ul class="dropdown-menu fullwidth-screen">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 tab-start-text">
                      <h6>Resources</h6>
                      <p>Learn about productivity optimization tips and gain a clear understanding of StaffViz’s capabilities for effective implementation. </p>
                      <img class="d-md-block d-none resources-img" src="{{ asset('public/assets/img/img_staffviz_resources.webp') }}" alt="Logo">
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                      <div class="list-heading">
                        <h6>User Guides</h6>
                      </div>
                      <div class="hortizonal-divider"></div>
                      <ul class="list">
                        <li class="single-link">
                          <a href="{{url('/feature/monitoring')}}">Dashboard Overview</a>
                          <p>Get team performance metrics on a single panel.</p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/feature/hr-management')}}">Employee Management</a>
                          <p>Manage and organize your workforce with ease.</p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/feature/tracking')}}">Reporting & Time Tracking</a>
                          <p>Track time and generate reports on autopilot.</p>
                        </li>
                        <li class="single-link">
                          <a class="see-all" href="{{url('/feature/monitoring')}}">Learn more..</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                      <div class="list-heading">
                        <h6>Blogs & Articles</h6>
                      </div>
                      <div class="hortizonal-divider"></div>
                      <ul class="list">
                        <li class="single-link">
                          <a href="{{url('/blogs/what-is-quiet-quitting-and-how-to-address-it')}}">Understanding Quiet Quitting</a>
                          <p>What it is and How to Address it? </p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/blogs/why-time-tracking-is-important-essential-role-in-modern-organizations')}}">Why Time Tracking is Important:</a>
                          <p>The Essential Role of Time Tracking </p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/blogs/how-to-avoid-micromanagement-using-advanced-solutions')}}">How To Avoid Micromanagement</a>
                          <p>Using Advanced Solutions in Modern Organizations</p>
                        </li>
                        <li class="single-link">
                          <a class="see-all" href="{{url('/blogs')}}">More blogs & articles</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                      <div class="list-heading">
                        <h6>Case Studies</h6>
                      </div>
                      <div class="hortizonal-divider"></div>
                      <ul class="list">
                        <li class="single-link">
                          <a href="{{url('/case-study/results-driven')}}">Results Driven</a>
                          <p>Empowered functional team management </p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/case-study/physician-wealth-systems')}}">Physicians Wealth System</a>
                          <p>Enabled successful transition to remote setting </p>
                        </li>
                        <li class="single-link">
                          <a href="{{url('/case-study/click2mail')}}">Click2Mail</a>
                          <p>Achieved a 21% productivity surge </p>
                        </li>
                        <li class="single-link">
                          <a class="see-all" href="{{url('/apps')}}">Download Application</a>
                        </li>
                      </ul>
                      <div class="book-btn-box">
                          
                      <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" class="btn book-demo-btn" target="_blank">BOOK A DEMO</a>
                           <!-- <button class="btn book-demo-btn" data-bs-toggle="modal" data-bs-target="#talkToSalePopup">BOOK A DEMO</button> -->
                      </div>
                    </div>
                  </div>
                </div>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item position-relative">
            <div class="dropdown">
              <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                How It Works
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/solutions') }}">Solutions</a></li>
                <li><a class="dropdown-item" href="{{ url('/integrations') }}">Integrations</a></li>
                <li><a class="dropdown-item" href="{{ url('/industries') }}">Industries</a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/pricing-plans') }}">Pricing</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/apps') }}">Apps</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{ url('/partner-program') }}">Partner Program</a>
          </li> -->
          <!-- <li class="nav-item">
            <div class="dropdown">
              <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Apps
              </button>
              <ul class="dropdown-menu fullwidth-screen">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-3 col-12 mb-4 tab-start-text">
                      <h6>Our Apps</h6>
                      <p>Leveraging cutting-edge technologies to build industry-leading digital products.</p>
                      <img class="d-md-block d-none" src="{{ asset('public/assets/img/app-navbar-img.webp') }}" class="logo" alt="Logo">
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 ">
                      <div class="list-heading">
                        <h6>Desktop</h6>
                      </div>
                      <hr>
                      <ul class="list">
                        <li class="single-link">
                          <a href="#">Windows</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link disabled">
                          <a href="#">Mac</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link disabled">
                          <a href="#">Linux</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                        <li class="single-link disabled">
                          <a href="#">Chrome OS</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                      </ul>
                      <hr>
                      <a href="{{ url('/apps') }}" class="see-all">Download the app
                        <img src="{{ asset('public/assets/img/right-arrow-blue.png') }}" alt="Arrow">
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 ">
                      <div class="list-heading">
                        <h6>Mobile</h6>
                      </div>
                      <hr>
                      <ul class="list">
                        <li class="single-link disabled">
                          <a href="#">iOS</a>
                          <p>Launch new adverts and engage</p>
                        </li>
                        <li class="single-link disabled">
                          <a href="#">Android</a>
                          <p>Launch new adverts and engage</p>
                        </li>
                      </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 mb-4 ">
                      <div class="list-heading">
                        <h6>Web</h6>
                      </div>
                      <hr>
                      <ul class="list">
                        <li class="single-link disabled">
                          <a href="#">Google Chrome Extension</a>
                          <p>Launch new adverts and engage with customers.</p>
                        </li>
                      </ul>
                    </div>
                  </div>
              </ul>
            </div>
          </li> -->
        </ul>
      </div>
      <div class="d-flex justify-content-center nav-btns order-lg-4 order-md-2 order-4 mt-md-0 mt-3">
        <a href="{{url('/pricing-plans')}}" class="spot" id="header-trial-btn">FREE 14-DAY TRIAL</a>
        <a href="https://app.staffviz.com" target="_blank" rel="noopener" class="login">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
            <mask id="mask0_4283_1137" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22"
              height="23">
              <rect y="0.771484" width="22" height="22" fill="#D9D9D9" />
            </mask>
            <g mask="url(#mask0_4283_1137)">
              <path
                d="M10.9938 19.5638V18.1888H17.1372C17.2077 18.1888 17.2723 18.1594 17.3311 18.1006C17.3899 18.0419 17.4192 17.9772 17.4192 17.9067V5.63753C17.4192 5.56701 17.3899 5.50236 17.3311 5.44358C17.2723 5.38483 17.2077 5.35545 17.1372 5.35545H10.9938V3.98047H17.1372C17.6002 3.98047 17.9921 4.14089 18.313 4.46172C18.6338 4.78255 18.7942 5.17449 18.7942 5.63753V17.9067C18.7942 18.3697 18.6338 18.7617 18.313 19.0825C17.9921 19.4033 17.6002 19.5638 17.1372 19.5638H10.9938ZM9.75101 15.6855L8.79912 14.6913L11.0308 12.4596H3.21094V11.0846H11.0308L8.79912 8.8529L9.75101 7.8587L13.6644 11.7721L9.75101 15.6855Z"
                fill="white" />
            </g>
          </svg>
          LOGIN</a>
      </div>
    </div>
  </nav>
</header>