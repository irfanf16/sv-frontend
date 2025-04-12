@extends('theme.layouts.master')
@section("page-class", "features")
@section('css')
<style type="text/css">
  #sliderVideo {
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 588px;
    max-height: 588px;
    object-position: center;
    object-fit: cover;
  }

  #home-hero {
    background: none !important;
  }

  #about-hero .overlay {
    position: absolute;
    content: '';
    top: 0;
    height: 588px;
    width: 100%;
    background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.5) 6.16%, rgba(34, 114, 159, 0.5) 39.5%, rgba(6, 37, 100, 0.5) 54.39%, rgba(2, 37, 96, 0.5) 85.46%);
    z-index: -1;
  }

  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 715px;
      max-height: 715px;
    }
  }
</style>
@endsection('css')
@section('content')

<!-- Banner -->
<section id="about-hero"
  style="background-image: url( '{{ asset('public/assets/img/shapes-about.webp') }}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/feature-page-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head h_t col-lg-8">
        <h6>
          Features
        </h6>
        <h1 class="pb-3">
          Optimal StaffViz Features
        </h1>
        <div class="col-md-8 hero-text">
          <p>
            Maximize revenue with our tools: streamline workforce management, decipher insights,
            boost security, gauge employee performance in one powerful package without infringing
            privacy! <br><br>*Efficiency Elevated Effortlessly!
          </p>
        </div>
        <div class="hero-btns">
          <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
          <a href="tel:8558553140" class="features">Talk TO sales</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner -->


<div class="big_bg">
  <section id="group_feture">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center ">
          <h2>StaffViz Features Chart</h2>
          <p>Build high-performing teams with StaffViz: <span>clear transparency, instant analytics,</span> and
            all-in-one monitoring for a detailed view. More than just tracking – it is your path to extraordinary
            organizational success. Get Organized in One Go! </p>
        </div>
      </div>
    </div>
    <div class="container-fulid mx-5">
      <div class="row gy-5 justify-content-center">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6  text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="33" viewBox="0 0 31 33" fill="none">
              <path
                d="M13.9278 28.5878C17.1631 28.5871 20.2858 27.3998 22.7044 25.2509L27.4581 30.0063C27.614 30.1622 27.8255 30.2498 28.046 30.2498C28.2666 30.2498 28.4781 30.1622 28.634 30.0063C28.79 29.8503 28.8776 29.6388 28.8776 29.4183C28.8776 29.1978 28.79 28.9862 28.634 28.8303L23.8787 24.0766C25.8812 21.7974 27.0422 18.9007 27.1682 15.8694C27.2942 12.838 26.3775 9.855 24.5711 7.41745C22.7646 4.9799 20.1773 3.23501 17.2405 2.47355C14.3036 1.71209 11.1945 1.98005 8.43119 3.23278C5.66791 4.4855 3.41736 6.64733 2.05458 9.35802C0.691794 12.0687 0.299079 15.1646 0.941872 18.1297C1.58467 21.0948 3.22414 23.7501 5.58711 25.6531C7.95008 27.5561 10.8938 28.5918 13.9278 28.5878ZM13.9278 3.67325C16.2274 3.67325 18.4753 4.35515 20.3873 5.63272C22.2993 6.91029 23.7896 8.72615 24.6696 10.8507C25.5496 12.9752 25.7798 15.3129 25.3312 17.5683C24.8826 19.8237 23.7752 21.8954 22.1492 23.5214C20.5231 25.1475 18.4515 26.2548 16.1961 26.7034C13.9407 27.1521 11.6029 26.9218 9.47842 26.0418C7.3539 25.1618 5.53805 23.6716 4.26048 21.7595C2.98291 19.8475 2.30101 17.5996 2.30101 15.3C2.30453 12.2175 3.53062 9.26223 5.7103 7.08255C7.88999 4.90286 10.8453 3.67677 13.9278 3.67325ZM7.28392 21.5287C7.28392 21.7489 7.37142 21.9602 7.52716 22.1159C7.68291 22.2717 7.89415 22.3592 8.11441 22.3592C8.33466 22.3592 8.5459 22.2717 8.70165 22.1159C8.85739 21.9602 8.94489 21.7489 8.94489 21.5287C8.94489 20.2071 9.46987 18.9397 10.4044 18.0052C11.3388 17.0708 12.6063 16.5458 13.9278 16.5458C15.2494 16.5458 16.5168 17.0708 17.4513 18.0052C18.3857 18.9397 18.9107 20.2071 18.9107 21.5287C18.9107 21.7489 18.9982 21.9602 19.154 22.1159C19.3097 22.2717 19.5209 22.3592 19.7412 22.3592C19.9615 22.3592 20.1727 22.2717 20.3284 22.1159C20.4842 21.9602 20.5717 21.7489 20.5717 21.5287C20.5679 20.2886 20.2162 19.0744 19.5568 18.0241C18.8973 16.9738 17.9565 16.1296 16.8411 15.5874C17.6962 14.9712 18.3338 14.0998 18.6624 13.0984C18.9909 12.097 18.9935 11.0172 18.6698 10.0142C18.346 9.01124 17.7126 8.13675 16.8606 7.51645C16.0085 6.89615 14.9817 6.56198 13.9278 6.56198C12.8739 6.56198 11.8471 6.89615 10.995 7.51645C10.143 8.13675 9.50957 9.01124 9.18582 10.0142C8.86207 11.0172 8.86466 12.097 9.19324 13.0984C9.52181 14.0998 10.1594 14.9712 11.0145 15.5874C9.89914 16.1296 8.95829 16.9738 8.29883 18.0241C7.63937 19.0744 7.28774 20.2886 7.28392 21.5287ZM10.6059 11.5629C10.6059 10.9058 10.8007 10.2636 11.1657 9.71729C11.5307 9.171 12.0495 8.74522 12.6566 8.49379C13.2636 8.24236 13.9315 8.17657 14.5759 8.30475C15.2203 8.43293 15.8122 8.74931 16.2768 9.2139C16.7413 9.67848 17.0577 10.2704 17.1859 10.9148C17.3141 11.5592 17.2483 12.2271 16.9969 12.8341C16.7454 13.4411 16.3197 13.9599 15.7734 14.325C15.2271 14.69 14.5848 14.8848 13.9278 14.8848C13.0468 14.8848 12.2018 14.5348 11.5788 13.9118C10.9559 13.2888 10.6059 12.4439 10.6059 11.5629Z"
                fill="#1A82E0" />
            </svg>
            <h3 class="h5 my-3">Recruitment & Hiring</h3>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
              <g clip-path="url(#clip0_4019_5597)">
                <path
                  d="M29.6811 8.83887C28.1241 8.83887 26.8575 10.1055 26.8575 11.6624V16.3818C25.8643 16.0322 24.7131 16.2538 23.9208 17.0461L20.5258 20.4307C19.7646 21.1895 19.3281 22.241 19.3281 23.3157V31.4271H27.9365V29.231C27.9365 28.2255 28.3281 27.28 29.0391 26.5689L30.8506 24.7576C31.9172 23.691 32.5045 22.2728 32.5045 20.7645V11.6624C32.5046 10.1055 31.238 8.83887 29.6811 8.83887ZM30.6222 20.7645C30.6222 21.7701 30.2307 22.7156 29.5196 23.4266L27.7082 25.238C26.6416 26.3045 26.0542 27.7227 26.0542 29.2311V29.5448H21.2105V23.3158C21.2105 22.7292 21.4393 22.178 21.8548 21.7639L25.2508 18.3782C25.6179 18.0112 26.2149 18.0113 26.5819 18.3782C26.9497 18.746 26.9497 19.3414 26.5819 19.7092L23.6843 22.6069L25.0153 23.9379L26.3988 22.5544L27.9129 21.0403C28.4462 20.507 28.74 19.7979 28.74 19.0437V11.6624C28.74 11.1434 29.1621 10.7212 29.6811 10.7212C30.2002 10.7212 30.6223 11.1434 30.6223 11.6624V20.7645H30.6222Z"
                  fill="#1A82E0" />
                <path
                  d="M9.08479 17.0471C8.29175 16.2541 7.14057 16.0323 6.14706 16.3818V11.6624C6.14706 10.1055 4.88042 8.83887 3.32353 8.83887C1.76664 8.83887 0.5 10.1055 0.5 11.6624V20.7645C0.5 22.2729 1.08736 23.6911 2.15396 24.7576L3.96541 26.569C4.67644 27.2801 5.06803 28.2255 5.06803 29.2311V31.4272H13.6765V23.3177C13.6765 22.2418 13.2395 21.189 12.4775 20.4293L9.08479 17.0471ZM11.7941 29.5448H6.95045V29.231C6.95045 27.7226 6.36309 26.3045 5.29649 25.2379L3.48504 23.4265C2.77395 22.7155 2.38235 21.7701 2.38235 20.7645V11.6624C2.38235 11.1434 2.80457 10.7212 3.32353 10.7212C3.84249 10.7212 4.26471 11.1434 4.26471 11.6624V19.0436C4.26471 19.7979 4.55848 20.5069 5.09175 21.0401L6.60585 22.5543L7.98938 23.9378L9.32039 22.6068L7.44752 20.7339L6.42276 19.709C6.05495 19.3413 6.05495 18.7459 6.42276 18.3781C6.78982 18.0111 7.38684 18.0111 7.75484 18.3791L11.1485 21.7624C11.5588 22.1715 11.7941 22.7384 11.7941 23.3177V29.5448Z"
                  fill="#1A82E0" />
                <path
                  d="M24.9724 9.78016C24.9724 5.10948 21.1726 1.30957 16.5018 1.30957C11.8311 1.30957 8.03125 5.10948 8.03125 9.78016C8.03125 14.4508 11.8312 18.2507 16.5018 18.2507C21.1725 18.2507 24.9724 14.4508 24.9724 9.78016ZM9.9136 9.78016C9.9136 6.14741 12.869 3.19192 16.5018 3.19192C20.1347 3.19192 23.0901 6.14741 23.0901 9.78016C23.0901 11.2374 22.6142 12.5853 21.8102 13.6774C21.3673 12.5759 20.5201 11.6793 19.4525 11.173C19.9615 10.5308 20.2665 9.72011 20.2665 8.83898C20.2665 6.76312 18.5777 5.07428 16.5018 5.07428C14.426 5.07428 12.7371 6.76312 12.7371 8.83898C12.7371 9.72011 13.0422 10.5308 13.5513 11.173C12.4836 11.6793 11.6364 12.5759 11.1935 13.6774C10.3895 12.5853 9.9136 11.2374 9.9136 9.78016ZM14.6195 8.83898C14.6195 7.80105 15.4639 6.95663 16.5018 6.95663C17.5398 6.95663 18.3842 7.80105 18.3842 8.83898C18.3842 9.87691 17.5398 10.7213 16.5018 10.7213C15.4639 10.7213 14.6195 9.87691 14.6195 8.83898ZM12.7478 15.191C12.8683 13.7443 14.0833 12.6037 15.5607 12.6037H17.443C18.9203 12.6037 20.1354 13.7443 20.2559 15.191C17.9998 16.7611 15.0056 16.7622 12.7478 15.191Z"
                  fill="#1A82E0" />
              </g>
              <defs>
                <clipPath id="clip0_4019_5597">
                  <rect width="32" height="32" fill="white" transform="translate(0.5 0.368164)" />
                </clipPath>
              </defs>
            </svg>
            <h3 class="h5 my-3">Onboarding & Trainings</h3>
          </a>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="32" viewBox="0 0 35 32" fill="none">
              <g clip-path="url(#clip0_4019_5577)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M10.7498 23.5042C10.9939 22.9439 11.3438 22.4277 11.7844 21.9871C12.711 21.0605 13.9677 20.5397 15.2779 20.5397H19.928C21.2382 20.5397 22.4949 21.0605 23.4215 21.9871C23.8621 22.4277 24.212 22.9439 24.4562 23.5042C24.6491 23.9448 25.163 24.1471 25.6047 23.9541C26.0454 23.7623 26.2476 23.2473 26.0547 22.8067C25.7233 22.0475 25.2513 21.35 24.6549 20.7536C23.4017 19.5004 21.7009 18.7959 19.928 18.7959C18.4167 18.7959 16.7892 18.7959 15.2779 18.7959C13.505 18.7959 11.8042 19.5004 10.551 20.7536C9.95458 21.35 9.48258 22.0475 9.15126 22.8067C8.95828 23.2473 9.16056 23.7623 9.60116 23.9541C10.0429 24.1471 10.5568 23.9448 10.7498 23.5042Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17.5987 7.16992C13.9088 7.16992 10.9141 10.1646 10.9141 13.8546C10.9141 17.5445 13.9088 20.5392 17.5987 20.5392C21.2886 20.5392 24.2833 17.5445 24.2833 13.8546C24.2833 10.1646 21.2886 7.16992 17.5987 7.16992ZM17.5987 8.91374C20.326 8.91374 22.5395 11.1272 22.5395 13.8546C22.5395 16.5819 20.326 18.7954 17.5987 18.7954C14.8714 18.7954 12.6579 16.5819 12.6579 13.8546C12.6579 11.1272 14.8714 8.91374 17.5987 8.91374Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M30.6842 16.1795C30.6842 23.3978 24.8238 29.2581 17.6055 29.2581C11.9149 29.2581 7.0694 25.6171 5.27211 20.5391C5.11167 20.0857 4.61294 19.8474 4.15955 20.0078C3.705 20.1682 3.46784 20.6669 3.62827 21.1203C5.66505 26.8749 11.1569 31.002 17.6055 31.002C25.7864 31.002 32.428 24.3603 32.428 16.1795C32.428 15.6982 32.0374 15.3076 31.5561 15.3076C31.0748 15.3076 30.6842 15.6982 30.6842 16.1795Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.52507 16.1799C4.52507 8.96162 10.3855 3.10124 17.6037 3.10124C23.2943 3.10124 28.1398 6.74233 29.9371 11.8203C30.0976 12.2737 30.5963 12.512 31.0497 12.3516C31.5042 12.1912 31.7414 11.6924 31.581 11.239C29.5442 5.48445 24.0523 1.35742 17.6037 1.35742C9.42286 1.35742 2.78125 7.99904 2.78125 16.1799C2.78125 16.6612 3.17186 17.0518 3.65316 17.0518C4.13445 17.0518 4.52507 16.6612 4.52507 16.1799Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M0.708594 14.4712L3.03368 16.7963C3.37431 17.1369 3.92535 17.1369 4.26598 16.7963L6.59107 14.4712C6.93169 14.1317 6.93169 13.5783 6.59107 13.2389C6.25161 12.8982 5.69823 12.8982 5.35877 13.2389L3.64983 14.9466L1.94089 13.2389C1.60143 12.8982 1.04806 12.8982 0.708594 13.2389C0.367969 13.5783 0.367969 14.1317 0.708594 14.4712Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M29.8471 19.1214L31.5561 17.4137L33.265 19.1214C33.6045 19.4621 34.1579 19.4621 34.4973 19.1214C34.8379 18.782 34.8379 18.2286 34.4973 17.8892L32.1722 15.5641C31.8316 15.2234 31.2806 15.2234 30.9399 15.5641L28.6148 17.8892C28.2742 18.2286 28.2742 18.782 28.6148 19.1214C28.9543 19.4621 29.5077 19.4621 29.8471 19.1214Z"
                  fill="#1A82E0" />
              </g>
              <defs>
                <clipPath id="clip0_4019_5577">
                  <rect width="35" height="31" fill="white" transform="translate(0 0.868164)" />
                </clipPath>
              </defs>
            </svg>
            <h3 class="h5 my-3">Shift Management</h3>
          </a>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="32" viewBox="0 0 35 32" fill="none">
              <g clip-path="url(#clip0_4019_5577)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M10.7498 23.5042C10.9939 22.9439 11.3438 22.4277 11.7844 21.9871C12.711 21.0605 13.9677 20.5397 15.2779 20.5397H19.928C21.2382 20.5397 22.4949 21.0605 23.4215 21.9871C23.8621 22.4277 24.212 22.9439 24.4562 23.5042C24.6491 23.9448 25.163 24.1471 25.6047 23.9541C26.0454 23.7623 26.2476 23.2473 26.0547 22.8067C25.7233 22.0475 25.2513 21.35 24.6549 20.7536C23.4017 19.5004 21.7009 18.7959 19.928 18.7959C18.4167 18.7959 16.7892 18.7959 15.2779 18.7959C13.505 18.7959 11.8042 19.5004 10.551 20.7536C9.95458 21.35 9.48258 22.0475 9.15126 22.8067C8.95828 23.2473 9.16056 23.7623 9.60116 23.9541C10.0429 24.1471 10.5568 23.9448 10.7498 23.5042Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M17.5987 7.16992C13.9088 7.16992 10.9141 10.1646 10.9141 13.8546C10.9141 17.5445 13.9088 20.5392 17.5987 20.5392C21.2886 20.5392 24.2833 17.5445 24.2833 13.8546C24.2833 10.1646 21.2886 7.16992 17.5987 7.16992ZM17.5987 8.91374C20.326 8.91374 22.5395 11.1272 22.5395 13.8546C22.5395 16.5819 20.326 18.7954 17.5987 18.7954C14.8714 18.7954 12.6579 16.5819 12.6579 13.8546C12.6579 11.1272 14.8714 8.91374 17.5987 8.91374Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M30.6842 16.1795C30.6842 23.3978 24.8238 29.2581 17.6055 29.2581C11.9149 29.2581 7.0694 25.6171 5.27211 20.5391C5.11167 20.0857 4.61294 19.8474 4.15955 20.0078C3.705 20.1682 3.46784 20.6669 3.62827 21.1203C5.66505 26.8749 11.1569 31.002 17.6055 31.002C25.7864 31.002 32.428 24.3603 32.428 16.1795C32.428 15.6982 32.0374 15.3076 31.5561 15.3076C31.0748 15.3076 30.6842 15.6982 30.6842 16.1795Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M4.52507 16.1799C4.52507 8.96162 10.3855 3.10124 17.6037 3.10124C23.2943 3.10124 28.1398 6.74233 29.9371 11.8203C30.0976 12.2737 30.5963 12.512 31.0497 12.3516C31.5042 12.1912 31.7414 11.6924 31.581 11.239C29.5442 5.48445 24.0523 1.35742 17.6037 1.35742C9.42286 1.35742 2.78125 7.99904 2.78125 16.1799C2.78125 16.6612 3.17186 17.0518 3.65316 17.0518C4.13445 17.0518 4.52507 16.6612 4.52507 16.1799Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M0.708594 14.4712L3.03368 16.7963C3.37431 17.1369 3.92535 17.1369 4.26598 16.7963L6.59107 14.4712C6.93169 14.1317 6.93169 13.5783 6.59107 13.2389C6.25161 12.8982 5.69823 12.8982 5.35877 13.2389L3.64983 14.9466L1.94089 13.2389C1.60143 12.8982 1.04806 12.8982 0.708594 13.2389C0.367969 13.5783 0.367969 14.1317 0.708594 14.4712Z"
                  fill="#1A82E0" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M29.8471 19.1214L31.5561 17.4137L33.265 19.1214C33.6045 19.4621 34.1579 19.4621 34.4973 19.1214C34.8379 18.782 34.8379 18.2286 34.4973 17.8892L32.1722 15.5641C31.8316 15.2234 31.2806 15.2234 30.9399 15.5641L28.6148 17.8892C28.2742 18.2286 28.2742 18.782 28.6148 19.1214C28.9543 19.4621 29.5077 19.4621 29.8471 19.1214Z"
                  fill="#1A82E0" />
              </g>
              <defs>
                <clipPath id="clip0_4019_5577">
                  <rect width="35" height="31" fill="white" transform="translate(0 0.868164)" />
                </clipPath>
              </defs>
            </svg>
            <h3 class="h5 my-3">Break Management</h3>
          </a>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
              <path
                d="M30.4998 3.34716C30.5016 2.93974 30.3394 2.54871 30.0497 2.26217L28.6058 0.818183C28.3206 0.529869 27.9318 0.367819 27.5263 0.368165H27.5213C27.1182 0.368411 26.7322 0.53056 26.4498 0.818183L19.8999 7.36811H6.99997V1.86818C6.99997 1.03971 6.32837 0.368165 5.49996 0.368165H4.49997C2.29188 0.370633 0.502468 2.16004 0.5 4.36813V26.4935C0.625129 28.6847 2.45028 30.3907 4.64499 30.3679H28.9998C29.8282 30.3679 30.4998 29.6964 30.4998 28.868V8.86812C30.4998 8.0397 29.8282 7.36811 28.9998 7.36811H27.0998L30.0498 4.41813C30.3368 4.1356 30.4989 3.74994 30.4998 3.34716ZM18.3899 12.8681C18.284 12.8825 18.1777 12.8453 18.1039 12.7681C18.0294 12.6941 17.9927 12.5904 18.0039 12.4861L18.1934 10.7861C18.2013 10.7506 18.2113 10.7155 18.2234 10.6811L20.1929 12.6506C20.1604 12.6576 20.1309 12.6736 20.0969 12.6776L18.3899 12.8681ZM21.0093 12.0516L18.8213 9.86308L24.2713 4.41315L26.4583 6.59962L21.0093 12.0516ZM24.9763 3.70562L25.7178 2.96462L27.9038 5.15109L27.1628 5.89258L24.9763 3.70562ZM1.49999 4.36813C1.50167 2.71199 2.84383 1.36979 4.49997 1.36816H5.49996C5.77608 1.36816 5.99998 1.59201 5.99998 1.86813V21.868C5.99998 22.1441 5.77613 22.3679 5.49996 22.3679H4.49997C3.3513 22.3676 2.25817 22.862 1.49999 23.7249V4.36813ZM28.9998 8.3681C29.2759 8.3681 29.4998 8.59195 29.4998 8.86812V28.868C29.4998 29.1441 29.276 29.368 28.9998 29.368H4.64499C2.99438 29.3957 1.6116 28.125 1.49999 26.478V26.368C1.50167 24.7118 2.84383 23.3697 4.49997 23.368H5.49996C6.32837 23.368 6.99992 22.6964 6.99992 21.868V8.3681H18.8998L17.7643 9.50358C17.4473 9.81594 17.2479 10.2281 17.1998 10.6706L17.0104 12.374C16.9948 12.5402 17.0105 12.7077 17.0569 12.868H8.49993C8.22381 12.868 7.99991 13.0919 7.99991 13.3681C7.99991 13.6442 8.22376 13.868 8.49993 13.868H9.99995V27.3679C9.99995 27.6441 10.2238 27.868 10.5 27.868C10.7761 27.868 11 27.6441 11 27.3679V20.368H16.4999V24.368H12.9999C12.7238 24.368 12.5 24.5918 12.5 24.8679C12.5 25.1441 12.7238 25.368 12.9999 25.368H22.9998C23.5521 25.368 23.9998 24.9203 23.9998 24.368V16.8681C23.9998 16.5919 23.776 16.368 23.4999 16.368C23.2237 16.368 22.9998 16.5919 22.9998 16.8681V19.368H10.9999V13.8681H18.3539C18.4027 13.8682 18.4514 13.8655 18.4999 13.8601L20.2084 13.6656C20.642 13.6164 21.0467 13.4237 21.3584 13.1181L26.1023 8.36815L28.9998 8.3681ZM22.9998 20.368V24.368H17.4999V20.368H22.9998ZM29.3448 3.70912L28.6108 4.4436L26.4248 2.25763L27.1593 1.52315C27.2554 1.42453 27.3871 1.36865 27.5248 1.36816C27.665 1.3685 27.7991 1.42507 27.8973 1.52517L29.3433 2.96817C29.4438 3.06719 29.5003 3.20254 29.4998 3.34366C29.4994 3.48137 29.4435 3.61312 29.3448 3.70912Z"
                fill="#1A82E0" />
            </svg>
            <h3 class="h5 my-3">Project Management</h3>
          </a>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
              <path
                d="M30.4998 3.34716C30.5016 2.93974 30.3394 2.54871 30.0497 2.26217L28.6058 0.818183C28.3206 0.529869 27.9318 0.367819 27.5263 0.368165H27.5213C27.1182 0.368411 26.7322 0.53056 26.4498 0.818183L19.8999 7.36811H6.99997V1.86818C6.99997 1.03971 6.32837 0.368165 5.49996 0.368165H4.49997C2.29188 0.370633 0.502468 2.16004 0.5 4.36813V26.4935C0.625129 28.6847 2.45028 30.3907 4.64499 30.3679H28.9998C29.8282 30.3679 30.4998 29.6964 30.4998 28.868V8.86812C30.4998 8.0397 29.8282 7.36811 28.9998 7.36811H27.0998L30.0498 4.41813C30.3368 4.1356 30.4989 3.74994 30.4998 3.34716ZM18.3899 12.8681C18.284 12.8825 18.1777 12.8453 18.1039 12.7681C18.0294 12.6941 17.9927 12.5904 18.0039 12.4861L18.1934 10.7861C18.2013 10.7506 18.2113 10.7155 18.2234 10.6811L20.1929 12.6506C20.1604 12.6576 20.1309 12.6736 20.0969 12.6776L18.3899 12.8681ZM21.0093 12.0516L18.8213 9.86308L24.2713 4.41315L26.4583 6.59962L21.0093 12.0516ZM24.9763 3.70562L25.7178 2.96462L27.9038 5.15109L27.1628 5.89258L24.9763 3.70562ZM1.49999 4.36813C1.50167 2.71199 2.84383 1.36979 4.49997 1.36816H5.49996C5.77608 1.36816 5.99998 1.59201 5.99998 1.86813V21.868C5.99998 22.1441 5.77613 22.3679 5.49996 22.3679H4.49997C3.3513 22.3676 2.25817 22.862 1.49999 23.7249V4.36813ZM28.9998 8.3681C29.2759 8.3681 29.4998 8.59195 29.4998 8.86812V28.868C29.4998 29.1441 29.276 29.368 28.9998 29.368H4.64499C2.99438 29.3957 1.6116 28.125 1.49999 26.478V26.368C1.50167 24.7118 2.84383 23.3697 4.49997 23.368H5.49996C6.32837 23.368 6.99992 22.6964 6.99992 21.868V8.3681H18.8998L17.7643 9.50358C17.4473 9.81594 17.2479 10.2281 17.1998 10.6706L17.0104 12.374C16.9948 12.5402 17.0105 12.7077 17.0569 12.868H8.49993C8.22381 12.868 7.99991 13.0919 7.99991 13.3681C7.99991 13.6442 8.22376 13.868 8.49993 13.868H9.99995V27.3679C9.99995 27.6441 10.2238 27.868 10.5 27.868C10.7761 27.868 11 27.6441 11 27.3679V20.368H16.4999V24.368H12.9999C12.7238 24.368 12.5 24.5918 12.5 24.8679C12.5 25.1441 12.7238 25.368 12.9999 25.368H22.9998C23.5521 25.368 23.9998 24.9203 23.9998 24.368V16.8681C23.9998 16.5919 23.776 16.368 23.4999 16.368C23.2237 16.368 22.9998 16.5919 22.9998 16.8681V19.368H10.9999V13.8681H18.3539C18.4027 13.8682 18.4514 13.8655 18.4999 13.8601L20.2084 13.6656C20.642 13.6164 21.0467 13.4237 21.3584 13.1181L26.1023 8.36815L28.9998 8.3681ZM22.9998 20.368V24.368H17.4999V20.368H22.9998ZM29.3448 3.70912L28.6108 4.4436L26.4248 2.25763L27.1593 1.52315C27.2554 1.42453 27.3871 1.36865 27.5248 1.36816C27.665 1.3685 27.7991 1.42507 27.8973 1.52517L29.3433 2.96817C29.4438 3.06719 29.5003 3.20254 29.4998 3.34366C29.4994 3.48137 29.4435 3.61312 29.3448 3.70912Z"
                fill="#1A82E0" />
            </svg>
            <h3 class="h5 my-3">Task Management</h3>
          </a>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="31" viewBox="0 0 36 31" fill="none">
              <g clip-path="url(#clip0_4019_5612)">
                <path
                  d="M33.7534 24.4465H2.22106C0.979286 24.4465 -0.03125 23.436 -0.03125 22.1942V2.67418C-0.03125 1.43241 0.979286 0.421875 2.22106 0.421875H33.7534C34.9952 0.421875 36.0057 1.43241 36.0057 2.67418V22.1942C36.0057 23.436 34.9952 24.4465 33.7534 24.4465ZM2.22106 1.92341C1.80663 1.92341 1.47029 2.25976 1.47029 2.67418V22.1942C1.47029 22.6086 1.80663 22.945 2.22106 22.945H33.7534C34.1678 22.945 34.5042 22.6086 34.5042 22.1942V2.67418C34.5042 2.25976 34.1678 1.92341 33.7534 1.92341H2.22106Z"
                  fill="#1A82E0" />
                <path
                  d="M24.749 30.4527H11.2351C10.8207 30.4527 10.4844 30.1164 10.4844 29.7019C10.4844 29.2875 10.8207 28.9512 11.2351 28.9512H24.749C25.1634 28.9512 25.4998 29.2875 25.4998 29.7019C25.4998 30.1164 25.1634 30.4527 24.749 30.4527Z"
                  fill="#1A82E0" />
                <path
                  d="M15.7351 30.453C15.3207 30.453 14.9844 30.1167 14.9844 29.7022V23.6961C14.9844 23.2817 15.3207 22.9453 15.7351 22.9453C16.1496 22.9453 16.4859 23.2817 16.4859 23.6961V29.7022C16.4859 30.1167 16.1496 30.453 15.7351 30.453Z"
                  fill="#1A82E0" />
                <path
                  d="M20.2351 30.453C19.8207 30.453 19.4844 30.1167 19.4844 29.7022V23.6961C19.4844 23.2817 19.8207 22.9453 20.2351 22.9453C20.6496 22.9453 20.9859 23.2817 20.9859 23.6961V29.7022C20.9859 30.1167 20.6496 30.453 20.2351 30.453Z"
                  fill="#1A82E0" />
                <path
                  d="M14.9764 18.441C14.6927 18.441 14.4329 18.2819 14.3053 18.0266L11.5094 12.4349H8.21952C7.80509 12.4349 7.46875 12.0985 7.46875 11.6841C7.46875 11.2697 7.80509 10.9333 8.21952 10.9333H11.9734C12.2572 10.9333 12.5169 11.094 12.6446 11.3478L14.9239 15.9064L18.7904 6.88368C18.906 6.6149 19.1657 6.43772 19.4585 6.42871C19.7513 6.43171 20.0216 6.58187 20.1523 6.84314L24.4497 15.4379H27.7395C28.154 15.4379 28.4903 15.7743 28.4903 16.1887C28.4903 16.6031 28.154 16.9395 27.7395 16.9395H23.9857C23.7019 16.9395 23.4421 16.7788 23.3145 16.5251L19.5336 8.96331L15.6672 17.9861C15.5515 18.2548 15.2918 18.432 14.999 18.441C14.9915 18.441 14.984 18.441 14.9764 18.441Z"
                  fill="#1A82E0" />
              </g>
              <defs>
                <clipPath id="clip0_4019_5612">
                  <rect width="35.9807" height="30.1774" fill="white" transform="translate(0.0078125 0.319336)" />
                </clipPath>
              </defs>
            </svg>
            <h3 class="h5 my-3">Monitoring & Tracking</h3>
          </a>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31" viewBox="0 0 32 31" fill="none">
              <path
                d="M23.8083 30.4679V25.2611H18.6015V23.1784H23.8083V17.9716H25.891V23.1784H31.0978V25.2611H25.891V30.4679H23.8083ZM0.898438 25.2611V17.9716H2.98115V23.1784H8.18793V25.2611H0.898438ZM0.898438 7.55805V0.268555H8.18793V2.35127H2.98115V7.55805H0.898438ZM23.8083 7.55805V2.35127H18.6015V0.268555H25.891V7.55805H23.8083Z"
                fill="#1A82E0" />
            </svg>
            <h3 class="h5 my-3">Snapshots & Capturing</h3>
          </a>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="41" viewBox="0 0 42 41" fill="none">
              <mask id="mask0_4019_5634" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="42"
                height="41">
                <rect x="0.742188" y="0.109375" width="40.5183" height="40.5183" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_4019_5634)">
                <path
                  d="M6.65625 6.01855H18.4741V17.8364H6.65625V6.01855ZM23.5389 6.01855H35.3567V17.8364H23.5389V6.01855ZM6.65625 22.9012H18.4741V34.719H6.65625V22.9012ZM28.6037 22.9012H30.2919V27.966H35.3567V29.6542H30.2919V34.719H28.6037V29.6542H23.5389V27.966H28.6037V22.9012ZM25.2271 7.70682V16.1481H33.6685V7.70682H25.2271ZM8.34451 7.70682V16.1481H16.7858V7.70682H8.34451ZM8.34451 24.5894V33.0308H16.7858V24.5894H8.34451Z"
                  fill="#1A82E0" />
              </g>
            </svg>
            <h3 class="h5 my-2 pt-1">Dashboards & Reporting</h3>
          </a>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="41" viewBox="0 0 42 41" fill="none">
              <mask id="mask0_4019_5634" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="42"
                height="41">
                <rect x="0.742188" y="0.109375" width="40.5183" height="40.5183" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_4019_5634)">
                <path
                  d="M6.65625 6.01855H18.4741V17.8364H6.65625V6.01855ZM23.5389 6.01855H35.3567V17.8364H23.5389V6.01855ZM6.65625 22.9012H18.4741V34.719H6.65625V22.9012ZM28.6037 22.9012H30.2919V27.966H35.3567V29.6542H30.2919V34.719H28.6037V29.6542H23.5389V27.966H28.6037V22.9012ZM25.2271 7.70682V16.1481H33.6685V7.70682H25.2271ZM8.34451 7.70682V16.1481H16.7858V7.70682H8.34451ZM8.34451 24.5894V33.0308H16.7858V24.5894H8.34451Z"
                  fill="#1A82E0" />
              </g>
            </svg>
            <h3 class="h5 my-2 pt-1">Assessments</h3>
          </a>

        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 text-center">
          <a href="#" class="box py-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="41" viewBox="0 0 42 41" fill="none">
              <mask id="mask0_4019_5634" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="42"
                height="41">
                <rect x="0.742188" y="0.109375" width="40.5183" height="40.5183" fill="#D9D9D9" />
              </mask>
              <g mask="url(#mask0_4019_5634)">
                <path
                  d="M6.65625 6.01855H18.4741V17.8364H6.65625V6.01855ZM23.5389 6.01855H35.3567V17.8364H23.5389V6.01855ZM6.65625 22.9012H18.4741V34.719H6.65625V22.9012ZM28.6037 22.9012H30.2919V27.966H35.3567V29.6542H30.2919V34.719H28.6037V29.6542H23.5389V27.966H28.6037V22.9012ZM25.2271 7.70682V16.1481H33.6685V7.70682H25.2271ZM8.34451 7.70682V16.1481H16.7858V7.70682H8.34451ZM8.34451 24.5894V33.0308H16.7858V24.5894H8.34451Z"
                  fill="#1A82E0" />
              </g>
            </svg>
            <h3 class="h5 my-2 pt-1">Timesheet</h3>
          </a>

        </div>

      </div>
    </div>
  </section>

  <section id="hiring">
    <div class="container-fulid mx-5 pt-5">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="UI Designer text-center">
            <img class="w-100" src="{{ asset('public/assets/img/rand.png') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 m-auto">
          <div class="p-1 p-md-4 mb-4 mb-lg-0">
            <div class="card-body">
              <div class="circle mb-4">
                <img src="{{ asset('public/assets/img/search.webp') }}" alt="">
              </div>
              <h3 class="h5 mb-3">Recruitment & Hiring</h3>
              <p class="req_p">The recruitment process can be challenging, with every employer seeking to leverage
                talent acquisition for a strategic edge. StaffViz's recruiting and hiring feature offers a sleek, modern
                approach to streamlining your hiring journey. It meticulously organizes applicant information, ensuring
                a smarter hiring process from when an application is received to the joyful sending of an offer letter.
                So, make your hiring process more professional and focused and create a more excellent candidate
                experience. </p>
              <a href="{{url('contact-us')}}" class="demo contact_btn">START NOW!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- ===== shadow background dubble section close ===-->
</div>


<!-- ========= Welcome team section start ========-->
<div class="bg_sec_shadow">
  <section id="hiring" class="hrg">
    <div class="container-fulid mx-3">
      <div class="row">

        <div class="col-lg-6 col-md-6 m-auto">
          <div class="p-1 p-md-4 mb-4 mb-lg-0">
            <div class="card-body">
              <div class="circlee mb-4">
                <img src="{{ asset('public/assets/img/health.png') }}" alt="">
              </div>
              <h3 class="h5 mb-3">Onboarding & Trainings</h3>
              <p class="req_p">Let StaffViz revolutionize your onboarding experience, crafting a journey your employees
                will rave about. Our integrated feature sets the stage for robust L&D programs with on-demand guides and
                tutorials. Centralize and track your training, making every course and content easily searchable.</p>
              <ul>
                <li>Increased Functionality and Versatility </li>
                <li>Monitoring Analytics and Metrics</li>

              </ul>

              <a href="{{url('contact-us')}}" class="demo contact_btn">START NOW!</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="UI Designer text-center">
            <img class="w-100" src="{{ asset('public/assets/img/team.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>

  </section>
</div>

<!-- ========== Shift & Break Management ========= -->
<section id="shift_break">
  <div class="container-fulid">
    <div class="row m-0">
      <div class="col-lg-6 col-md-6">
        <div class="UI Designer text-center">
          <img class="w-100" src="{{ asset('public/assets/img/shift.png') }}" alt="">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 m-auto p-0">
        <div class="p-1 p-md-4 mb-4 mb-lg-0">
          <div class="card-body">
            <div class="circle mb-4">
              <img src="{{ asset('public/assets/img/user-account.png') }}" alt="">
            </div>
            <h3 class="h5 mb-3 text-white">Shift & Break Management</h3>
            <p class="req_p text-white">Create and manage team scheduling with StaffViz's advanced shift and break
              management system. Easily assign and rotate employee shifts using our automated tools. Manage schedule
              changes swiftly and check team productivity immediately. Additionally, you can set shift restrictions and
              provide well-deserved breaks, all streamlined through StaffViz for optimal efficiency. Step into the
              future of effortless, efficient
              workforce shift management.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="Project">
  <div class="container-fulid m-5">
    <div class="row m-0 gy-5">
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="p-1 p-md-4 mb-4 mb-lg-0 h-100 box_shado">
          <div class="card-body">
            <div class="circle mb-4">
              <img src="{{ asset('public/assets/img/') }}/astro-island.png" alt="">
            </div>
            <h3 class="h5 mb-3">Project & Task Management</h3>
            <p class="req_p">With StaffViz, effortlessly prioritize work using our simplified project and task
              management tools. Our solutions are crafted to enhance employee productivity, allowing for quicker
              business process execution and on-time project completion. </p>

          </div>
          <div class="project_img">
            <img class="w-100" src="{{ asset('public/assets/img/') }}/img.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="p-1 p-md-4 mb-4 mb-lg-0 h-100 box_shado">
          <div class="card-body">
            <div class="circl mb-4">
              <img src="{{ asset('public/assets/img/moni.png') }}" alt="">
            </div>
            <h3 class="h5 mb-3">Monitoring & Tracking</h3>
            <p class="req_p">Discover unparalleled visibility into your team's day. Our all-encompassing monitoring and
              tracking tools reveal how every minute is spent, paving the way for a more efficient, productive
              workforce.</p>
          </div>
          <div class="project_img">
            <img class="w-100" src="{{ asset('public/assets/img/img2.png') }}" alt="123">
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<section id="snapshots">
  <div class="container-fulid">
    <div class="row">

      <div class="col-lg-6 col-md-6 m-auto">
        <div class="p-1 p-md-4 mb-4 mb-lg-0">
          <div class="card-body">
            <div class="circle mb-4">
              <img src="{{ asset('public/assets/img/') }}/Main-astro.png" alt="">
            </div>
            <h3 class="h5 mb-3">Snapshots & Capturing</h3>
            <p class="req_p">Achieve complete oversight and track employee device activities with snapshot and capturing
              tools. This feature not only safeguards your data but also boosts employee productivity and efficiency,
              ensuring a high-performing work environment. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 m-auto">
        <div class="ui_designer text-center">
          <img class="w-100" src="{{ asset('public/assets/img/') }}/snapshot.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section id="industrie">
  <div class="container-fulid m-5">
    <div class="row m-0 justify-content-center">
      <div class="col-lg-10 text-center py-4">
        <h2>Discover how industries will benefit from StaffViz's specialized solutions.</h2>
        <p>Unlock the potential of StaffViz across diverse industries, driving efficiency and growth. </p>
      </div>
    </div>
    <div class="row justify-content-center gy-4">
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 ">
          <div class="card-body py-5 px-4">
            <h5 class="card-title">Increased Work Efficiency</h5>
            <p class="card-text">Boost productivity with StaffViz's
              streamlined monitoring and reporting
              tools.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 ">
          <div class="card-body py-5 px-4">
            <h5 class="card-title">Enhanced Accountability</h5>
            <p class="card-text">Foster accountability and transparency
              within your workforce with StaffViz.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 ">
          <div class="card-body py-5 px-4">
            <h5 class="card-title">Optimized Operations</h5>
            <p class="card-text">Streamline operations and improve
              decision-making with StaffViz's
              actionable insights.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="{{url('/contact-us')}}" class="demo contact_btn">START NOW!</a>
    </div>
  </div>
</section>

@endsection