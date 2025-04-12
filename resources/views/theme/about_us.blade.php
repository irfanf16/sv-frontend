@extends('theme.layouts.master')
@section("page-class", "index-page")
@section('css')
<style>
  #about-hero {
    padding-top: 250px;
  }
  .hero-btns .demo {
    width: 174px;
  }
  .hero-btns .features {
    display: inline-block;
    text-align: center;
    width: 174px;
    padding: 11px 21px;
  }
  .client-companies {
    padding-top: 70px;
  }
  .hero-text h3 {
    margin-bottom: 5px;
  }
  .serviceBox h2.hide {
    display: block !important;
  }
  .serviceBox:hover h2.hide {
    display: none !important;
  }
  @media(max-width: 575px) {

    .hero-btns .demo,
    .hero-btns .features {
      width: 100%;
    }
  }
</style>
@endsection
@section('content')

<!-- Banner -->
<section id="about-hero" style="background-image: url({{ asset('public/assets/img/about-bg.webp') }});">
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head col-12 h_t">
        <h1>
          About StaffViz
        </h1>
        <div class="col-md-7 hero-text">
          <h3>
            Unlocking Maximum Productivity for Businesses 
          </h3>
          <p>One window solution for businesses of all types and scales to maximize their output by automating
            monitoring, time tracking, and task management. </p>
        </div>
        <div class="hero-btns">
          <a href="{{ url('https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp') }}" class="demo">Book a Demo</a>
          <a href="{{ url('/pricing-plans') }}" class="features">Start Free Trial</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner -->

<section id="about-solutions">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="d-md-block d-none">
              <img src="{{ asset('/public/assets/img') }}/1707489172.webp" alt="1707489172">
            </div>
          </div>
          <div class="col-md-6">
            <div>
              <h6>Innovative Solutions, Personalized Service </h6>
              <h2>Empowering Organizations <span>Since Inception</span> </h2>
              <p>
                Founded on the principles of efficiency and transparency, with a passion for revolutionizing
                the workplace, StaffViz continues to innovate and adapt to meet the ever-changing needs of
                our clients.
                <br><br>
                An ultimate team management Software for the future forwarding business to accelerate their
                growth with monitoring, tracking, and management solutions.
              </p>
              <!-- <a class="d-inline-block" href="#">EXPLORE OUR CASE STUDIES</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about-values">
  <div class="container">
    <div class="row">
      <div class="text-center">
        <h6>
          Values That Push Us!
        </h6>
        <h2>
          Traveling Road Less Travelled to <span>Make a Difference</span>
        </h2>
        <p>Our values set us apart; they guide everything we do at StaffViz, from working and communicating
          to interacting with our customers and each other every day.</p>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card text-center h-100">
          <div>
            <img src="{{ asset('/public/assets/img') }}/img-integrity.png" class="card-img-top" alt="img-integrity">
          </div>
          <div class="card-body">
            <h5 class="card-title">Integrity</h5>
            <p class="card-text">We uphold the highest standards of honesty and ethical behavior in
              every action, strengthening trust.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div>
            <img src="{{ asset('/public/assets/img') }}/img-transparency.png" class="card-img-top" alt="img-transparency">
          </div>
          <div class="card-body">
            <h5 class="card-title">Transparency</h5>
            <p class="card-text">Our clear and open door policy ensures everyone has insights into the
              workflow to make a better decision.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div>
            <img src="{{ asset('/public/assets/img') }}/img-customer-centric.png" class="card-img-top" alt=img"">
          </div>
          <div class="card-body">
            <h5 class="card-title">Customer-Centricity</h5>
            <p class="card-text">Our customers are at the heart of everything we do. We're committed to
              delivering exceptional experiences.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div>
            <img src="{{ asset('/public/assets/img') }}/img-innovation.png" class="card-img-top" alt="img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Innovation</h5>
            <p class="card-text">We believe in fostering an environment where ideas flow freely.
              Feedback and modernity shape our innovations.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div>
            <img src="{{ asset('/public/assets/img') }}/img-empathy.png" class="card-img-top" alt="img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Empathy</h5>
            <p class="card-text">Connecting, understanding, and supporting our clients and employees
              through challenges keep us strong.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card text-center h-100">
          <div>
            <img src="{{ asset('/public/assets/img') }}" class="card-img-top" alt="img">
          </div>
          <div class="card-body">
            <h5 class="card-title">Empowerment</h5>
            <p class="card-text">We empower our team members with the resources and tools they need to
              perform effectively and excel in their roles.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="about-solutions" class="about-solutions-2">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11">
        <div class="row align-items-center">

          <div class="col-md-6">
            <div class="left-col">
              <h6>One Team; One Dream</h6>
              <h2>Crafting Innovative Solutions with Love, Care & Talent</h2>
              <p> At StaffViz, we pride ourselves on offering innovative solutions customized to meet each client's
                unique needs. Our dedicated team is committed to providing personalized service and support, ensuring
                your success every step of the way. <br> <br> We are a group of creative minds, coding geeks, tech
                savvies, and Innovators, putting all our efforts into making an impact across the globe. Our authentic
                solutions mitigate the most crucial problems businesses face. With our teamwork, your teams work! </p>
              <a class="d-inline-block" href="{{url('/apps')}}">FREE DOWNLOAD</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-md-block d-none">
              <img src="{{ asset('/public/assets/img') }}/1707489166.webp" alt="Cash">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Solutions section -->
<section id="solutions" style="background-color: #EDEDEF;">
  <div class="container">
    <div class="row justify-content-center text-center solutions-head">
      <div class="col-md-11">
        <h5>
          A Viable Solution for Every Industry
        </h5>
        <h2>
          Combine the Power of <span>Technology-Backed Solutions</span> with Your Goals to Stay One-Step Ahead
        </h2>

      </div>
      <div>
        <p>
          Hire the best talent, train them, and manage their performance across diverse workspaces no matter working
          remotely, on-site, or in a traditional office setup. Plethora of organizational needs, one centralized hub for
          managing them – conquer every field; seal every deal!
        </p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container_serv">
      <div class="row d-md-grid d-flex">
        <div class="serviceBox h-md-100 odd">
          <div class="icon flex_sec">
            <svg width="71" height="62" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_7040_11836" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="47"
                height="47">
                <rect x="0.304688" y="0.617188" width="45.7817" height="45.7817" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_7040_11836)">
                <path
                  d="M5.07031 37.8147V33.5227H8.88546V12.6495C8.88546 11.7012 9.22311 10.8894 9.89843 10.2141C10.5737 9.53883 11.3855 9.20117 12.3338 9.20117H39.4065V12.0625H12.3338C12.1626 12.0625 12.0219 12.1175 11.9119 12.2276C11.8018 12.3377 11.7468 12.4783 11.7468 12.6495V33.5227H22.697V37.8147H5.07031ZM28.97 37.8147C28.4815 37.8147 28.072 37.6494 27.7415 37.3189C27.411 36.9885 27.2458 36.579 27.2458 36.0905V17.9686C27.2458 17.4801 27.411 17.0706 27.7415 16.7402C28.072 16.4097 28.4815 16.2445 28.97 16.2445H39.6083C40.0968 16.2445 40.5063 16.4097 40.8367 16.7402C41.1672 17.0706 41.3324 17.4801 41.3324 17.9686V36.0905C41.3324 36.579 41.1672 36.9885 40.8367 37.3189C40.5063 37.6494 40.0968 37.8147 39.6083 37.8147H28.97ZM30.1071 33.5227H38.4711V19.1058H30.1071V33.5227Z"
                  fill="#fff" />
              </g>
            </svg>
            <h2 class="hide">IT &<br> Software</h2>
          </div>
          <div class="content">
            <h2>IT &<br> Software</h2>
            <p>Whether developing cutting-edge software or managing intricate tech projects, our solution empowers IT
              and tech teams with real-time insights into employee activities and much more.</p>
          </div>
        </div>
        <div class="serviceBox h-md-100 even">
          <div class="icon flex_sec">
            <svg width="71" height="62" viewBox="0 0 71 62" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M0.734375 61.7739V56.149H70.5418V61.7739H0.734375ZM14.292 48.649C12.3978 48.649 10.7944 47.9928 9.48191 46.6803C8.16941 45.3678 7.51316 43.7645 7.51316 41.8702V17.2069C7.51316 15.3127 8.16941 13.7093 9.48191 12.3968C10.7944 11.0843 12.3978 10.4281 14.292 10.4281H25.542C25.542 7.63962 26.5276 5.25985 28.4987 3.28872C30.4699 1.3176 32.8496 0.332031 35.6381 0.332031C38.4265 0.332031 40.8063 1.3176 42.7774 3.28872C44.7485 5.25985 45.7341 7.63962 45.7341 10.4281H56.9841C58.8784 10.4281 60.4817 11.0843 61.7942 12.3968C63.1067 13.7093 63.763 15.3127 63.763 17.2069V41.8702C63.763 43.7645 63.1067 45.3678 61.7942 46.6803C60.4817 47.9928 58.8784 48.649 56.9841 48.649H14.292ZM53.8111 43.0242H56.9841C57.3207 43.0242 57.5971 42.916 57.8135 42.6996C58.0299 42.4833 58.1381 42.2068 58.1381 41.8702V17.2069C58.1381 16.8704 58.0299 16.5939 57.8135 16.3775C57.5971 16.1612 57.3207 16.053 56.9841 16.053H53.8111V43.0242ZM30.0131 10.4281H41.2631C41.2631 8.80306 40.7318 7.45931 39.6693 6.39681C38.6068 5.33431 37.2631 4.80306 35.6381 4.80306C34.0131 4.80306 32.6693 5.33431 31.6068 6.39681C30.5443 7.45931 30.0131 8.80306 30.0131 10.4281ZM17.465 43.0242V16.053H14.292C13.9555 16.053 13.679 16.1612 13.4626 16.3775C13.2463 16.5939 13.1381 16.8704 13.1381 17.2069V41.8702C13.1381 42.2068 13.2463 42.4833 13.4626 42.6996C13.679 42.916 13.9555 43.0242 14.292 43.0242H17.465ZM21.9361 16.053V43.0242H49.34V16.053H21.9361Z"
                fill="white" />
            </svg>
            <h2 class="hide">Hospitality &<br> Tourism</h2>
          </div>
          <div class="content">
            <h2>Hospitality &<br> Tourism</h2>
            <p>Manage and monitor employee shifts in hotels, restaurants, and other hospitality settings. Ensure optimal
              staffing to provide exceptional guest experiences and maintain high service standards. </p>
          </div>
        </div>
        <div class="serviceBox h-md-100 odd">
          <div class="icon flex_sec">
            <svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_7040_11842" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75"
                height="74">
                <rect x="0.726562" y="0.425781" width="73.3771" height="73.3771" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_7040_11842)">
                <path
                  d="M14.4743 63.1016V34.7915L8.76526 39.1718L6.00781 35.5148L14.4742 29.012V20.2397H19.0603V25.4961L37.4046 11.5086L68.8013 35.5148L66.0439 39.1248L60.3348 34.7915V63.1016H14.4743ZM19.0603 58.5156H33.7592V45.1101H41.05V58.5156H55.7488V31.305L37.4046 17.3175L19.0603 31.305V58.5156ZM14.4743 16.8884C14.4743 14.6933 15.2141 12.8217 16.6938 11.2734C18.1735 9.72516 20.0991 8.95103 22.4705 8.95103C23.5719 8.95103 24.4156 8.62863 25.0016 7.98383C25.5876 7.33903 25.8806 6.54429 25.8806 5.59961H30.4666C30.4666 7.79465 29.7268 9.66631 28.2471 11.2146C26.7674 12.7628 24.8419 13.5369 22.4705 13.5369C21.369 13.5369 20.5253 13.8593 19.9393 14.5041C19.3533 15.1489 19.0603 15.9437 19.0603 16.8884H14.4743Z"
                  fill="white" />
              </g>
            </svg>
            <h2 class="hide">Real Estate<br> Industry</h2>
          </div>
          <div class="content">
            <h2>Real Estate<br> Industry</h2>
            <p>Efficiently generate timesheets, streamline scheduling operations, and automate payrolls for your real
              estate team. </p>
          </div>
        </div>
        <div class="serviceBox h-md-100 even">
          <div class="icon flex_sec">
            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_7040_11857" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="74"
                height="74">
                <rect x="0.609375" y="0.365234" width="73.3771" height="73.3771" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_7040_11857)">
                <path
                  d="M8.24219 28.0576V19.6464C8.24219 18.1043 8.77723 16.7983 9.84731 15.7282C10.9174 14.6581 12.2246 14.123 13.769 14.123H60.8054C62.3498 14.123 63.657 14.6581 64.7271 15.7282C65.7972 16.7983 66.3322 18.1055 66.3322 19.6499V37.0533H61.7462V19.6499C61.7462 19.4147 61.6482 19.199 61.4523 19.003C61.2562 18.807 61.0406 18.709 60.8054 18.709H13.769C13.5338 18.709 13.3182 18.807 13.1221 19.003C12.9262 19.199 12.8282 19.4147 12.8282 19.6499V28.0576H8.24219ZM13.769 59.9836C12.2246 59.9836 10.9174 59.4485 9.84731 58.3784C8.77723 57.3084 8.24219 56.0023 8.24219 54.4603V46.049H12.8282V54.4567C12.8282 54.692 12.9262 54.9076 13.1221 55.1036C13.3182 55.2996 13.5338 55.3976 13.769 55.3976H34.2004V59.9836H13.769ZM55.6315 67.8622L51.6158 64.4462C47.2492 60.7028 44.4456 58.0463 43.2051 56.4764C41.9645 54.9066 41.3442 53.3035 41.3442 51.6673C41.3442 49.6219 42.0625 47.8607 43.4993 46.3834C44.936 44.9063 46.6871 44.1677 48.7524 44.1677C49.8748 44.1677 50.9432 44.4244 51.9577 44.9379C52.9722 45.4513 53.9028 46.2059 54.7495 47.2015L55.6315 47.9953L56.4547 47.2309C57.27 46.2353 58.1931 45.4758 59.224 44.9526C60.2548 44.4293 61.3503 44.1677 62.5106 44.1677C64.531 44.1677 66.2708 44.9063 67.73 46.3834C69.1892 47.8607 69.9188 49.6219 69.9188 51.6673C69.9188 53.3035 69.2857 54.9066 68.0197 56.4764C66.7536 58.0463 63.9373 60.7028 59.5708 64.4462L55.6315 67.8622ZM55.6315 61.7593L57.8893 59.8837C60.9584 57.2614 62.9663 55.4339 63.9129 54.401C64.8595 53.3682 65.3328 52.4559 65.3328 51.6641C65.3328 50.8879 65.0506 50.2088 64.4861 49.6268C63.9217 49.0447 63.2631 48.7536 62.5106 48.7536C62.0283 48.7536 61.5912 48.8526 61.1993 49.0505C60.8074 49.2485 60.3626 49.5807 59.8647 50.0472L55.6315 54.0805L51.3218 50.0472C50.824 49.5807 50.3776 49.2485 49.9827 49.0505C49.5878 48.8526 49.1777 48.7536 48.7524 48.7536C47.9527 48.7536 47.2824 49.0447 46.7415 49.6268C46.2006 50.2088 45.9301 50.8879 45.9301 51.6641C45.9301 52.4448 46.4201 53.3788 47.4 54.4662C48.38 55.5536 50.3751 57.379 53.3854 59.9425L55.6315 61.7593ZM22.0003 51.5758C21.5261 51.5758 21.1106 51.4749 20.7539 51.273C20.3972 51.0711 20.1209 50.7585 19.9249 50.3352L14.4451 39.3463H8.24219V34.7604H15.8856C16.3044 34.7604 16.6947 34.8758 17.0564 35.1067C17.4181 35.3376 17.6942 35.6454 17.8845 36.0303L22.0003 44.1853L32.1544 23.8008C32.3466 23.4284 32.6349 23.1491 33.0194 22.9629C33.4039 22.7768 33.8075 22.6837 34.2304 22.6837C34.6533 22.6837 35.0529 22.7768 35.4292 22.9629C35.8055 23.1491 36.0877 23.4284 36.2759 23.8008L41.7086 34.7604H51.8097V39.3463H40.3446C39.8703 39.3463 39.4549 39.2453 39.0982 39.0435C38.7415 38.8416 38.4651 38.529 38.2692 38.1057L34.2004 29.9977L23.9993 50.3352C23.8033 50.7585 23.5254 51.0711 23.1654 51.273C22.8054 51.4749 22.4171 51.5758 22.0003 51.5758Z"
                  fill="white" />
              </g>
            </svg>
            <h2 class="hide">Healthcare<br> Industry</h2>
          </div>
          <div class="content">
            <h2>Healthcare<br> Industry</h2>
            <p>Manage healthcare staff rotations, automated attendance tracking, schedule shifts and much more. </p>
          </div>
        </div>
        <div class="serviceBox h-md-100 even">
          <div class="icon flex_sec">
            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_7040_11869" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="74"
                height="74">
                <rect x="0.507812" y="0.15625" width="73.3771" height="73.3771" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_7040_11869)">
                <path
                  d="M25.4316 54.719H29.0769V48.6042H35.1917V44.9589H29.0769V38.8441H25.4316V44.9589H19.3169V48.6042H25.4316V54.719ZM40.7185 52.4259H55.0647V48.7806H40.7185V52.4259ZM40.7185 44.7825H55.0647V41.1372H40.7185V44.7825ZM43.6113 32.9292L47.8916 28.6489L52.1719 32.9292L54.7354 30.3658L50.455 25.9914L54.7354 21.711L52.1719 19.1476L47.8916 23.4279L43.6113 19.1476L41.0478 21.711L45.3281 25.9914L41.0478 30.3658L43.6113 32.9292ZM20.0812 27.814H34.4274V24.1687H20.0812V27.814ZM16.7299 62.8327C15.1856 62.8327 13.8783 62.2977 12.8082 61.2276C11.7382 60.1575 11.2031 58.8503 11.2031 57.3059V16.3842C11.2031 14.8399 11.7382 13.5326 12.8082 12.4625C13.8783 11.3925 15.1856 10.8574 16.7299 10.8574H57.6516C59.196 10.8574 60.5032 11.3925 61.5733 12.4625C62.6434 13.5326 63.1784 14.8399 63.1784 16.3842V57.3059C63.1784 58.8503 62.6434 60.1575 61.5733 61.2276C60.5032 62.2977 59.196 62.8327 57.6516 62.8327H16.7299ZM16.7299 58.2467H57.6516C57.8868 58.2467 58.1024 58.1487 58.2984 57.9527C58.4944 57.7567 58.5924 57.5411 58.5924 57.3059V16.3842C58.5924 16.149 58.4944 15.9334 58.2984 15.7374C58.1024 15.5414 57.8868 15.4434 57.6516 15.4434H16.7299C16.4947 15.4434 16.2791 15.5414 16.0831 15.7374C15.8871 15.9334 15.7891 16.149 15.7891 16.3842V57.3059C15.7891 57.5411 15.8871 57.7567 16.0831 57.9527C16.2791 58.1487 16.4947 58.2467 16.7299 58.2467Z"
                  fill="white" />
              </g>
            </svg>
            <h2 class="hide">Accountants</h2>
          </div>
          <div class="content">
            <h2>Accountants</h2>
            <p>Ensure precise billable hours, tracking, streamline client invoicing, simply payroll processing, and
              integrate seamlessly with Zapier or Salesforce. </p>
          </div>
        </div>
        <div class="serviceBox h-md-100 odd">
          <div class="icon flex_sec">
            <svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_7040_11863" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="75"
                height="74">
                <rect x="0.90625" y="0.15625" width="73.3771" height="73.3771" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_7040_11863)">
                <path
                  d="M22.1426 62.7145L21.5547 57.7523L29.8566 34.8691C30.4445 35.4061 31.0717 35.848 31.738 36.1949C32.4044 36.5418 33.1099 36.8132 33.8546 37.0092L25.7996 59.2104L22.1426 62.7145ZM53.0691 62.7145L49.4121 59.2104L41.3571 37.0092C42.1018 36.8132 42.8073 36.5418 43.4736 36.1949C44.14 35.848 44.7671 35.4061 45.3551 34.8691L53.657 57.7523L53.0691 62.7145ZM37.6058 33.0227C35.2736 33.0227 33.2893 32.2045 31.6528 30.568C30.0164 28.9316 29.1981 26.9472 29.1981 24.615C29.1981 22.6277 29.7959 20.9109 30.9914 19.4646C32.1869 18.0182 33.6274 17.0774 35.3129 16.6424V9.32812H39.8988V16.6424C41.5843 17.0774 43.0248 18.0182 44.2203 19.4646C45.4158 20.9109 46.0136 22.6277 46.0136 24.615C46.0136 26.9472 45.1953 28.9316 43.5589 30.568C41.9224 32.2045 39.9381 33.0227 37.6058 33.0227ZM37.6058 28.4368C38.6681 28.4368 39.5706 28.0654 40.3135 27.3226C41.0562 26.5798 41.4276 25.6772 41.4276 24.615C41.4276 23.5528 41.0562 22.6502 40.3135 21.9074C39.5706 21.1646 38.6681 20.7932 37.6058 20.7932C36.5436 20.7932 35.6411 21.1646 34.8982 21.9074C34.1554 22.6502 33.784 23.5528 33.784 24.615C33.784 25.6772 34.1554 26.5798 34.8982 27.3226C35.6411 28.0654 36.5436 28.4368 37.6058 28.4368Z"
                  fill="white" />
              </g>
            </svg>
            <h2 class="hide">Architect<br> & Engineering</h2>
          </div>
          <div class="content">
            <h2>Architect<br> & Engineering</h2>
            <p>Precisely observe time spent on projects, refine job cost estimates, and automate your invoicing
              procedures. </p>
          </div>
        </div>
        <div class="serviceBox h-md-100 even">
          <div class="icon flex_sec">
            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_7040_11875" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="74"
                height="74">
                <rect x="0.46875" y="0.15625" width="73.3771" height="73.3771" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_7040_11875)">
                <path
                  d="M52.8046 27.3201H58.2137V21.911H52.8046V27.3201ZM52.8046 39.5496H58.2137V34.1405H52.8046V39.5496ZM52.8046 51.7791H58.2137V46.37H52.8046V51.7791ZM50.923 62.8327V58.2467H64.6813V15.4434H36.2241V20.9291L31.6381 17.6132V10.8574H69.2673V62.8327H50.923ZM5.0625 62.8327V34.5521L24.9354 20.3824L44.8083 34.5521V62.8327H28.4044V48.3102H21.4664V62.8327H5.0625ZM9.64849 58.2467H16.8804V43.7242H32.9904V58.2467H40.2223V36.8451L24.9354 26.0501L9.64849 36.8451V58.2467Z"
                  fill="white" />
              </g>
            </svg>
            <h2 class="hide">Construction</h2>
          </div>
          <div class="content">
            <h2>Construction</h2>
            <p>Keep your site and office matters in one app with travel route schedules, shift management, and task
              monitoring.</p>
          </div>
        </div>
        <div class="serviceBox h-md-100 odd">
          <div class="icon flex_sec">
            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_7040_11879" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="74"
                height="74">
                <rect x="0.492188" y="0.15625" width="73.3771" height="73.3771" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_7040_11879)">
                <path
                  d="M13.6518 65.8895C12.1074 65.8895 10.8002 65.3544 9.73012 64.2844C8.66004 63.2143 8.125 61.907 8.125 60.3627V25.5558C8.125 24.2231 8.51798 23.0325 9.30393 21.9839C10.0898 20.9354 11.0982 20.1622 12.329 19.6644L47.565 5.33008L49.0819 9.19881L22.3885 20.029H60.6882C62.2326 20.029 63.5398 20.564 64.6099 21.6341C65.68 22.7042 66.215 24.0114 66.215 25.5558V60.3627C66.215 61.907 65.68 63.2143 64.6099 64.2844C63.5398 65.3544 62.2326 65.8895 60.6882 65.8895H13.6518ZM13.6518 61.3035H60.6882C60.9234 61.3035 61.1391 61.2055 61.3351 61.0095C61.5311 60.8135 61.629 60.5979 61.629 60.3627V39.1963H12.711V60.3627C12.711 60.5979 12.809 60.8135 13.005 61.0095C13.201 61.2055 13.4166 61.3035 13.6518 61.3035ZM24.7053 57.3053C26.6691 57.3053 28.3359 56.6203 29.7059 55.2504C31.0758 53.8805 31.7608 52.2136 31.7608 50.2498C31.7608 48.2861 31.0758 46.6193 29.7059 45.2493C28.3359 43.8794 26.6691 43.1944 24.7053 43.1944C22.7416 43.1944 21.0747 43.8794 19.7047 45.2493C18.3348 46.6193 17.6499 48.2861 17.6499 50.2498C17.6499 52.2136 18.3348 53.8805 19.7047 55.2504C21.0747 56.6203 22.7416 57.3053 24.7053 57.3053ZM12.711 34.6103H50.164V28.7307H54.7499V34.6103H61.629V25.5558C61.629 25.3206 61.5311 25.1049 61.3351 24.9089C61.1391 24.7129 60.9234 24.615 60.6882 24.615H13.6518C13.4166 24.615 13.201 24.7129 13.005 24.9089C12.809 25.1049 12.711 25.3206 12.711 25.5558V34.6103Z"
                  fill="white" />
              </g>
            </svg>
            <h2 class="hide">Marketing &<br> Advertising</h2>
          </div>
          <div class="content">
            <h2>Marketing &<br> Advertising</h2>
            <p>Bring your A-game to the marketing and advertising floor. Streamline timesheets, count billable hours,
              and schedule working hours to give competitors a run for their money. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Solutions section -->

<section class="client-companies">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 title text-center">
        <h2>Companies Who Love Us</h2>
      </div>
      <div class="col-12 text-center">
        <div class="owl-carousel">
          <div class="company-img img-1">
            <img src="{{ asset('public/assets/img/physician-homes.png') }}" alt="physician-homes">
          </div>
          <div class="company-img img-2">
            <img src="{{ asset('public/assets/img/result-driven.png') }}" alt="result-driven">
          </div>
          <div class="company-img img-3">
            <img src="{{ asset('public/assets/img/streamlinerei.webp') }}" alt="streamlinerei">
          </div>
          <div class="company-img img-4">
            <img src="{{ asset('public/assets/img/c2m.webp') }}" alt="c2m">
          </div>
          <div class="company-img img-5">
            <img src="{{ asset('public/assets/img/heel-homes.png') }}" alt="heel-homes">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@section('js')
<script>
  // Client Companies Slider
  $('.client-companies .owl-carousel').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoHeight: true,
    responsive: {
      0: {
        items: 2,
        margin: 20,
      },
      768: {
        items: 3,
        margin: 40,
      },
      992: {
        items: 5,
        margin: 40,
      },
      1200: {
        items: 5,
        margin: 60,
      },
    }
  });
</script>
@endsection

@endsection