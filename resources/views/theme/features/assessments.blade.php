@extends('theme.layouts.master')
@section("page-class", "single-feature-page")
@section('css')
<style type="text/css">
  .hero-head h6 {
    margin-top: 20px;
  }

  #sliderVideo {
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 625px;
    max-height: 625px;
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
    height: 625px;
    width: 100%;
    background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.5) 6.16%, rgba(34, 114, 159, 0.5) 39.5%, rgba(6, 37, 100, 0.5) 54.39%, rgba(2, 37, 96, 0.5) 85.46%);
    z-index: 0;
  }

  .hero-text p {
    margin-bottom: 20px;
  }

  @media(max-width: 991px) {
    #sliderVideo {
      height: 470px;
      max-height: 470px;
    }

    #about-hero .overlay {
      height: 470px;
    }
  }

  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 590px;
      max-height: 590px;
    }

    #about-hero .overlay {
      height: 590px;
    }

    .single-feature-section {
      padding-top: 50px !important;
    }
  }
</style>
@endsection('css')
@section('content')

<!-- Banner -->
<section id="about-hero">
  <div class="overlay"></div>
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/-62a0-4e60-b922-62b7da1ea5a2.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head h_t col-lg-8">
        <h6>FEATURES > Assessments</h6>
        <h1 class="pb-3">Assessments</h1>
        <div class="col-md-8 hero-text">
          <p>Discover how StaffViz seamlessly adapts to the intricacies of remote work, hybrid team dynamics, and
            freelance environments, ensuring productivity and efficiency across diverse setups.</p>
        </div>
        <div class="hero-btns">
          <a href="{{ url('/contact-us') }}" class="demo contact_btn">GET STARTED FREE</a>
          <a href="tel:8558553140" class="features">Request Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner -->

<!-- Trial Section -->
<section id="feature-tabs" class="single-feature-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center feature-tabs-head">
        <h2>Recruitment & Hiring</h2>
        <p>StaffViz serves a <span>diverse array of industries</span>, each benefiting from our specialized expertise.
          Covering more than 10 sectors, we deliver targeted solutions for every business need.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-between align-items-start" id="mobile_hide">
      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-1-sec-1-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-1-sec-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">
            <div class="img">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <mask id="mask0_6609_15804" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24"
                  height="24">
                  <rect width="24" height="24" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_6609_15804)">
                  <path
                    d="M13.25 9V3.5H20.5V9H13.25ZM3.5 12.5V3.5H10.75V12.5H3.5ZM13.25 20.5V11.5H20.5V20.5H13.25ZM3.5 20.5V15H10.75V20.5H3.5ZM5 11H9.25V5H5V11ZM14.75 19H19V13H14.75V19ZM14.75 7.5H19V5H14.75V7.5ZM5 19H9.25V16.5H5V19Z"
                    fill="white" />
                </g>
              </svg>
            </div>
            Recruitment / Dashboard
          </button>
          <button class="nav-link" id="v-pills-1-sec-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1-sec-2"
            type="button" role="tab" aria-controls="v-pills-2" aria-selected="true">
            <div class="img">
              <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6.58516 3.76381C6.49651 3.59787 6.54911 3.38642 6.70267 3.29C6.85622 3.19445 7.05249 3.25143 7.14115 3.41737L7.6127 4.29927C7.73663 4.53115 7.58006 4.81922 7.33502 4.81922C7.22399 4.81922 7.11609 4.75727 7.05662 4.64603L6.58516 3.76381ZM2.82542 7.47804C2.91407 7.31185 3.11025 7.25513 3.2639 7.35099L4.08062 7.86016C4.3643 8.03709 4.24622 8.50691 3.91982 8.50691C3.86529 8.50691 3.81014 8.49204 3.75964 8.46078L2.94292 7.95134C2.78937 7.85544 2.73676 7.64341 2.82542 7.47804ZM22.5918 13.198C22.5918 13.3896 22.4482 13.5447 22.2708 13.5447H21.3278C21.1505 13.5447 21.0068 13.3896 21.0068 13.198C21.0068 13.0064 21.1505 12.8515 21.3278 12.8515H22.2708C22.4482 12.8515 22.5918 13.0064 22.5918 13.198ZM2.67019 13.5447H1.72723C1.54996 13.5447 1.40625 13.3896 1.40625 13.198C1.40625 13.0064 1.54996 12.8515 1.72723 12.8515H2.67019C2.8475 12.8515 2.99126 13.0064 2.99126 13.198C2.99131 13.3896 2.8475 13.5447 2.67019 13.5447ZM19.8 8.33366C19.7113 8.16804 19.7638 7.95596 19.9174 7.86016L20.7342 7.35099C20.8877 7.25519 21.084 7.31185 21.1727 7.47804C21.2613 7.64341 21.2087 7.85544 21.0552 7.95129L20.2385 8.46072C20.0871 8.55476 19.8897 8.50147 19.8 8.33366ZM11.678 3.12292V2.10457C11.678 1.91266 11.8217 1.75781 11.999 1.75781C12.1762 1.75781 12.32 1.91261 12.32 2.10457V3.12286C12.32 3.3142 12.1762 3.46962 11.999 3.46962C11.8218 3.46962 11.678 3.31426 11.678 3.12292ZM16.3854 4.29927L16.8569 3.41737C16.9455 3.25143 17.1418 3.19445 17.2954 3.29C17.449 3.38637 17.5016 3.59787 17.4129 3.76381L16.9414 4.64603C16.8516 4.81388 16.6539 4.86707 16.5029 4.77309C16.3494 4.67697 16.2968 4.46516 16.3854 4.29927ZM10.4189 6.50646C10.4189 6.30257 10.5726 6.13663 10.7614 6.13663H13.2367C13.4255 6.13663 13.5792 6.30257 13.5792 6.50646V7.30977H10.4189V6.50646ZM16.3446 8.55274V9.22899L12.5985 11.3962C12.2119 11.62 11.7862 11.62 11.3997 11.3962L7.65355 9.22899V8.55274C7.65355 8.24984 7.88179 8.00298 8.16239 8.00298H15.8356C16.1162 8.00298 16.3446 8.24984 16.3446 8.55274ZM15.8356 14.4029C16.1162 14.4029 16.3445 14.1564 16.3445 13.8535V10.0157L12.9015 12.0073C12.3197 12.3439 11.6783 12.3438 11.0965 12.0073L7.6535 10.0157V13.8535C7.6535 14.1564 7.88174 14.4029 8.16235 14.4029H15.8356ZM7.01145 8.55274V13.8535C7.01145 14.5385 7.52779 15.0965 8.16235 15.0965H15.8355C16.4702 15.0965 16.9864 14.5385 16.9864 13.8535V8.55274C16.9864 7.86773 16.4702 7.30977 15.8355 7.30977H14.2211V6.50646C14.2211 5.9202 13.7795 5.44317 13.2366 5.44317H10.7614C10.2185 5.44317 9.77687 5.9202 9.77687 6.50646V7.30977H8.16239C7.52783 7.30977 7.01145 7.86773 7.01145 8.55274ZM20.1925 18.2752L15.263 21.3492C13.9562 22.1639 13.1814 22.5731 11.7266 22.8051C10.1896 23.0502 8.65967 22.924 7.23542 22.7514C6.58967 22.6733 5.99937 22.614 5.40196 22.5679V18.0769C6.60158 17.9559 7.65676 17.9752 9.00787 18.3655C9.03494 18.3731 9.06268 18.3769 9.09071 18.3769H12.5684C13.0975 18.3769 13.4523 18.9605 13.2528 19.4799C13.137 19.7811 12.8683 19.9763 12.5684 19.9763H9.09071C8.91345 19.9763 8.76974 20.131 8.76974 20.323C8.76974 20.5144 8.91345 20.6695 9.09071 20.6695H12.5684C13.0337 20.6695 13.4577 20.4191 13.7118 20.0128C13.8313 20.0368 13.9502 20.0493 14.0673 20.0499C14.628 20.0518 14.9099 19.8209 15.299 19.5779L19.4913 16.964C19.8261 16.7552 20.2558 16.8793 20.4491 17.241C20.6425 17.6028 20.5273 18.0667 20.1925 18.2752ZM4.76006 23.1489C4.76006 23.3251 4.62753 23.4679 4.46476 23.4679H3.02212C2.85931 23.4679 2.72683 23.3251 2.72683 23.1489V17.8523C2.72683 17.6761 2.85931 17.5333 3.02212 17.5333H4.46476C4.62758 17.5333 4.76006 17.6761 4.76006 17.8523V23.1489ZM19.1703 16.3634L14.9781 18.9772C14.5944 19.2166 14.3929 19.3984 13.9415 19.3491C14.0368 18.4648 13.3946 17.6837 12.5684 17.6837H9.13271C7.69295 17.2736 6.57436 17.2584 5.29857 17.391C5.14291 17.0641 4.82779 16.8401 4.46471 16.8401H3.02212C2.50526 16.8401 2.08487 17.2941 2.08487 17.8523V23.1489C2.08487 23.7074 2.50526 24.1614 3.02212 24.1614H4.46476C4.94601 24.1614 5.3435 23.7674 5.39601 23.2625C5.97105 23.3078 6.54119 23.3654 7.16404 23.4407C8.70091 23.6266 10.2461 23.742 11.8204 23.491C13.4387 23.233 14.3219 22.7367 15.5841 21.9494L20.5135 18.8755C21.1549 18.4759 21.3755 17.5869 21.0051 16.8941C20.6348 16.2015 19.8117 15.9632 19.1703 16.3634Z"
                  fill="#A7A7A7" />
              </svg>
            </div>
            All Jobs
          </button>
          <button class="nav-link" id="v-pills-1-sec-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1-sec-3"
            type="button" role="tab" aria-controls="v-pills-3" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.7798 17.887L17.2486 12.7495L19.8736 11.4895L19.5473 10.8145L16.5961 12.2395C16.5517 12.2611 16.512 12.2912 16.4793 12.3282C16.4466 12.3651 16.4215 12.4082 16.4055 12.4549C16.3895 12.5016 16.3828 12.551 16.3859 12.6002C16.389 12.6495 16.4018 12.6976 16.4236 12.742L16.6148 13.117C16.0748 13.1657 15.1448 13.0682 13.6148 12.4495C13.0538 12.2005 12.4384 12.0994 11.8272 12.1559C11.216 12.2123 10.6295 12.4244 10.1236 12.772C9.63542 13.1128 9.20712 13.5323 8.85609 14.0132C8.49309 13.9082 8.14706 13.7516 7.82859 13.5482L7.91859 13.3945C7.94328 13.3517 7.9593 13.3046 7.96574 13.2557C7.97217 13.2068 7.96889 13.1571 7.95609 13.1095C7.94329 13.0616 7.92112 13.0167 7.89087 12.9774C7.86062 12.9382 7.82288 12.9053 7.77984 12.8807L5.01609 11.302L4.64109 11.9507L7.08234 13.3457L4.18734 18.3182L1.74609 16.9232L1.37109 17.572L4.12359 19.1545C4.2097 19.2033 4.31165 19.2162 4.40719 19.1902C4.50274 19.1642 4.58412 19.1015 4.63359 19.0157L4.72359 18.862L5.43984 19.3907L5.36109 19.507C5.28623 19.6152 5.23346 19.7372 5.20579 19.8659C5.17812 19.9946 5.1761 20.1275 5.19984 20.257C5.22303 20.3896 5.27245 20.5163 5.34522 20.6297C5.41798 20.743 5.51262 20.8407 5.62359 20.917L5.79984 21.037C5.96856 21.1535 6.16856 21.2162 6.37359 21.217C6.40231 21.2188 6.43112 21.2188 6.45984 21.217C6.51508 21.4406 6.64799 21.6373 6.83484 21.772L7.01109 21.8957C7.17877 22.011 7.3776 22.0725 7.58109 22.072C7.64346 22.0777 7.70622 22.0777 7.76859 22.072C7.84091 22.0574 7.91135 22.0348 7.97859 22.0045C8.05367 22.1315 8.1546 22.2414 8.27484 22.327L8.45109 22.447C8.61844 22.5634 8.81723 22.6262 9.02109 22.627H9.11109C9.17254 22.8517 9.31216 23.0472 9.50484 23.1782L9.67734 23.2982C9.84502 23.4135 10.0438 23.475 10.2473 23.4745C10.4124 23.4747 10.5751 23.435 10.7214 23.3586C10.8677 23.2821 10.9933 23.1713 11.0873 23.0357L11.1923 22.882L12.2048 23.4932C12.3781 23.5976 12.5763 23.6533 12.7786 23.6545C12.9725 23.6545 13.1631 23.6045 13.3319 23.5093C13.5008 23.414 13.6422 23.2767 13.7423 23.1107C13.8116 22.9955 13.8587 22.8683 13.8811 22.7357C13.9809 22.7653 14.0845 22.7804 14.1886 22.7807C14.3825 22.7808 14.5731 22.7308 14.7419 22.6355C14.9108 22.5402 15.0522 22.403 15.1523 22.237C15.2234 22.1155 15.2717 21.982 15.2948 21.8432C15.3933 21.8733 15.4957 21.8885 15.5986 21.8882C15.7918 21.8877 15.9817 21.8373 16.1498 21.7421C16.318 21.6469 16.4588 21.5099 16.5586 21.3445C16.6237 21.2357 16.6694 21.1164 16.6936 20.992L16.7498 21.0257C16.9242 21.1307 17.1238 21.1864 17.3273 21.187C17.5212 21.187 17.7118 21.137 17.8807 21.0418C18.0496 20.9465 18.1909 20.8092 18.2911 20.6432C18.3948 20.4685 18.4492 20.2689 18.4486 20.0657C18.4493 19.9065 18.4163 19.749 18.3516 19.6036C18.287 19.4581 18.1922 19.3281 18.0736 19.222C18.3246 18.8112 18.6532 18.4533 19.0411 18.1682L19.2548 18.5995C19.2858 18.6626 19.3338 18.7157 19.3935 18.7529C19.4532 18.79 19.5221 18.8096 19.5923 18.8095C19.6482 18.8091 19.7033 18.7963 19.7536 18.772L22.7048 17.347L22.3786 16.672L19.7798 17.887ZM6.60609 20.3507C6.58619 20.3801 6.5606 20.4052 6.53084 20.4246C6.50108 20.4439 6.46775 20.4572 6.43281 20.4634C6.39787 20.4697 6.36203 20.469 6.32738 20.4612C6.29274 20.4534 6.26 20.4388 6.23109 20.4182L6.05484 20.2982C6.02545 20.2783 6.00033 20.2527 5.98097 20.2229C5.96161 20.1932 5.9484 20.1599 5.94211 20.1249C5.93582 20.09 5.93658 20.0541 5.94435 20.0195C5.95212 19.9849 5.96674 19.9521 5.98734 19.9232L6.53859 19.1245C6.57821 19.0673 6.63891 19.0282 6.70734 19.0157C6.7418 19.0098 6.77709 19.0107 6.81119 19.0184C6.8453 19.0262 6.87754 19.0405 6.90609 19.0607L7.07859 19.1807C7.108 19.1991 7.13299 19.2238 7.15178 19.253C7.17058 19.2821 7.18272 19.3151 7.18734 19.3495C7.19467 19.3836 7.19479 19.419 7.18768 19.4532C7.18058 19.4874 7.16642 19.5198 7.14609 19.5482L6.60609 20.3507ZM7.83234 21.1982C7.79272 21.2554 7.73203 21.2945 7.66359 21.307C7.59453 21.3181 7.52379 21.3034 7.46484 21.2657L7.28859 21.1457C7.2592 21.1258 7.23408 21.1002 7.21472 21.0705C7.19536 21.0407 7.18215 21.0074 7.17586 20.9724C7.16957 20.9375 7.17033 20.9016 7.1781 20.867C7.18587 20.8323 7.20049 20.7996 7.22109 20.7707L7.97109 19.672C7.99024 19.6432 8.0151 19.6187 8.04414 19.6C8.07317 19.5813 8.10575 19.5688 8.13984 19.5632H8.18859C8.24194 19.5631 8.29414 19.5787 8.33859 19.6082L8.51109 19.7282C8.56882 19.768 8.60908 19.8284 8.62359 19.897C8.62972 19.9314 8.62889 19.9667 8.62117 20.0009C8.61344 20.035 8.59896 20.0672 8.57859 20.0957L7.83234 21.1982ZM9.27234 21.7495C9.25244 21.7788 9.22685 21.804 9.19709 21.8233C9.16733 21.8427 9.134 21.8559 9.09906 21.8622C9.06412 21.8685 9.02827 21.8677 8.99363 21.8599C8.95899 21.8522 8.92625 21.8376 8.89734 21.817L8.72109 21.697C8.66478 21.6565 8.62592 21.5962 8.61234 21.5282C8.60124 21.4591 8.61592 21.3884 8.65359 21.3295L9.19734 20.542C9.23764 20.4828 9.29978 20.4421 9.37009 20.4287C9.44041 20.4153 9.51316 20.4304 9.57234 20.4707L9.74859 20.5945C9.77799 20.6144 9.80311 20.6399 9.82247 20.6697C9.84183 20.6995 9.85504 20.7328 9.86133 20.7677C9.86762 20.8027 9.86686 20.8385 9.85909 20.8732C9.85132 20.9078 9.8367 20.9405 9.81609 20.9695L9.27234 21.7495ZM10.8323 22.1245L10.4986 22.582C10.4571 22.6397 10.3948 22.6791 10.3248 22.6917C10.2548 22.7043 10.1826 22.6891 10.1236 22.6495L9.94734 22.5295C9.91795 22.5095 9.89283 22.484 9.87347 22.4542C9.85411 22.4244 9.8409 22.3911 9.83461 22.3562C9.82832 22.3212 9.82908 22.2854 9.83685 22.2507C9.84462 22.2161 9.85924 22.1834 9.87984 22.1545L10.2136 21.6707C10.2335 21.6413 10.2591 21.6162 10.2888 21.5968C10.3186 21.5775 10.3519 21.5643 10.3869 21.558C10.4218 21.5517 10.4577 21.5524 10.4923 21.5602C10.5269 21.568 10.5597 21.5826 10.5886 21.6032L10.7611 21.7232C10.7908 21.7428 10.8162 21.7682 10.836 21.7978C10.8557 21.8274 10.8693 21.8607 10.8759 21.8957C10.8826 21.9306 10.8821 21.9666 10.8746 22.0013C10.8672 22.0361 10.8528 22.0691 10.8323 22.0982V22.1245ZM17.6798 20.2495C17.6287 20.3335 17.5465 20.3942 17.4511 20.4182C17.3556 20.4419 17.2545 20.4271 17.1698 20.377L14.9198 19.0307L14.5448 19.672L15.8236 20.422C15.9077 20.4731 15.9683 20.5553 15.9923 20.6507C16.016 20.7462 16.0012 20.8472 15.9511 20.932C15.8999 21.016 15.8178 21.0767 15.7223 21.1007C15.6268 21.1244 15.5258 21.1096 15.4411 21.0595L13.8436 20.0957L13.4686 20.737L14.4286 21.3145C14.5111 21.3673 14.5712 21.4488 14.5973 21.5432C14.6134 21.6141 14.6085 21.6882 14.5832 21.7564C14.558 21.8246 14.5134 21.884 14.455 21.9273C14.3965 21.9706 14.3268 21.996 14.2542 22.0004C14.1816 22.0048 14.1093 21.9879 14.0461 21.952L12.4486 20.9882L12.0736 21.6295L13.0373 22.2145C13.1001 22.2728 13.141 22.351 13.1532 22.4358C13.1653 22.5207 13.148 22.6072 13.1042 22.6808C13.0603 22.7545 12.9926 22.8109 12.9122 22.8407C12.8318 22.8705 12.7436 22.8718 12.6623 22.8445L11.5973 22.1995C11.6382 22.0531 11.6472 21.8996 11.6236 21.7495C11.5999 21.6184 11.5507 21.4933 11.4786 21.3814C11.4065 21.2694 11.3131 21.1728 11.2036 21.097L11.0161 20.9995C10.8948 20.9163 10.7564 20.8612 10.6111 20.8382C10.6185 20.7659 10.6185 20.693 10.6111 20.6207C10.588 20.489 10.5385 20.3634 10.4657 20.2513C10.3929 20.1391 10.2982 20.0429 10.1873 19.9682L10.0148 19.8482C9.82155 19.7158 9.5882 19.6548 9.35484 19.6757C9.28779 19.4495 9.14303 19.2543 8.94609 19.1245L8.76984 19.0045C8.551 18.8536 8.28133 18.7957 8.01984 18.8432C7.94797 18.8577 7.87765 18.879 7.80984 18.907C7.73462 18.781 7.63367 18.6724 7.51359 18.5882L7.33734 18.4682C7.11584 18.3162 6.84317 18.2581 6.57895 18.3066C6.31473 18.3551 6.08045 18.5062 5.92734 18.727L5.88984 18.7832L5.13984 18.2207L7.45734 14.2082C7.76219 14.3999 8.08808 14.556 8.42859 14.6732C8.06118 15.2248 7.81219 15.8467 7.69734 16.4995C7.70677 16.693 7.78226 16.8775 7.91123 17.0222C8.04021 17.1669 8.21486 17.263 8.40609 17.2945C9.08859 17.4745 10.3786 17.2007 11.3236 15.7945L17.5486 19.6982C17.604 19.7311 17.6501 19.7777 17.6822 19.8335C17.7144 19.8893 17.7317 19.9525 17.7323 20.017C17.7323 20.0843 17.7142 20.1503 17.6798 20.2082V20.2495ZM17.4623 18.7495L14.7023 17.0207C15.1084 16.7864 15.4539 16.4602 15.7111 16.0682L15.0586 15.6932C14.7859 16.0808 14.4051 16.3795 13.9636 16.552L11.4023 14.947C11.3592 14.92 11.311 14.9021 11.2607 14.8944C11.2104 14.8866 11.1591 14.8892 11.1098 14.902C11.0613 14.9143 11.0157 14.9363 10.9757 14.9665C10.9358 14.9968 10.9024 15.0348 10.8773 15.0782C10.2511 16.1845 9.37734 16.5782 8.82609 16.5782C8.69344 16.5918 8.56032 16.5572 8.45109 16.4807C8.76844 15.2417 9.49858 14.1478 10.5211 13.3795C10.9239 13.0982 11.3931 12.9268 11.8823 12.8821C12.3715 12.8374 12.864 12.9209 13.3111 13.1245C14.8486 13.7507 16.0673 13.9757 16.9411 13.807L18.7223 17.4257C18.2168 17.7769 17.7881 18.2272 17.4623 18.7495Z"
                  fill="#AAAAAA" />
                <path d="M20.0234 16.2871L20.7702 15.92L21.1009 16.5927L20.3542 16.9599L20.0234 16.2871Z"
                  fill="#AAAAAA" />
                <path
                  d="M19.5 9.75001V3.37501C19.5003 3.32565 19.4908 3.27673 19.4722 3.23104C19.4535 3.18535 19.426 3.1438 19.3912 3.10876L16.7662 0.483756C16.7312 0.449001 16.6897 0.421504 16.644 0.402842C16.5983 0.38418 16.5494 0.374721 16.5 0.375006H5.25C5.05109 0.375006 4.86032 0.454024 4.71967 0.594676C4.57902 0.735328 4.5 0.926094 4.5 1.12501V10.125H5.25V1.12501H16.125V3.00001C16.125 3.19892 16.204 3.38968 16.3447 3.53034C16.4853 3.67099 16.6761 3.75001 16.875 3.75001H18.75V9.75001H19.5ZM16.875 3.00001V1.65376L18.2213 3.00001H16.875Z"
                  fill="#AAAAAA" />
                <path
                  d="M8.25 6.375C8.25 7.11668 8.46993 7.8417 8.88199 8.45839C9.29404 9.07507 9.87971 9.55572 10.5649 9.83955C11.2502 10.1234 12.0042 10.1976 12.7316 10.0529C13.459 9.90825 14.1272 9.5511 14.6517 9.02665C15.1761 8.5022 15.5333 7.83402 15.6779 7.10659C15.8226 6.37916 15.7484 5.62516 15.4645 4.93994C15.1807 4.25471 14.7001 3.66904 14.0834 3.25699C13.4667 2.84493 12.7417 2.625 12 2.625C11.0054 2.625 10.0516 3.02009 9.34835 3.72335C8.64509 4.42661 8.25 5.38044 8.25 6.375ZM15 6.375C15 6.96834 14.8241 7.54836 14.4944 8.04171C14.1648 8.53506 13.6962 8.91958 13.148 9.14664C12.5999 9.3737 11.9967 9.43311 11.4147 9.31736C10.8328 9.2016 10.2982 8.91588 9.87868 8.49632C9.45912 8.07676 9.1734 7.54221 9.05764 6.96027C8.94189 6.37833 9.0013 5.77513 9.22836 5.22695C9.45542 4.67877 9.83994 4.21024 10.3333 3.88059C10.8266 3.55095 11.4067 3.375 12 3.375C12.7956 3.375 13.5587 3.69107 14.1213 4.25368C14.6839 4.81629 15 5.57935 15 6.375Z"
                  fill="#AAAAAA" />
                <path
                  d="M10.6106 6.31875L10.0781 6.85125L11.0081 7.7775C11.0784 7.84734 11.1734 7.88655 11.2725 7.88655C11.3716 7.88655 11.4666 7.84734 11.5369 7.7775L13.9256 5.3925L13.3931 4.875L11.2744 6.9975L10.6106 6.31875Z"
                  fill="#AAAAAA" />
              </svg>
            </div>
            Offer Acceptance
          </button>
          <button class="nav-link" id="v-pills-1-sec-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1-sec-4"
            type="button" role="tab" aria-controls="v-pills-4" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6609_15834)">
                  <path
                    d="M12.0156 10C10.6371 10 9.51562 8.87848 9.51562 7.50006V6.50012C9.51562 5.12152 10.6371 4 12.0156 4C13.3942 4 14.5157 5.12152 14.5157 6.50012V7.50006C14.5157 8.87848 13.3942 10 12.0156 10ZM12.0156 5.00012C11.1887 5.00012 10.5156 5.67303 10.5156 6.50012V7.50006C10.5156 8.32715 11.1887 9.00006 12.0156 9.00006C12.8427 9.00006 13.5156 8.32715 13.5156 7.50006V6.50012C13.5156 5.67303 12.8427 5.00012 12.0156 5.00012Z"
                    fill="#AAAAAA" />
                  <path
                    d="M13.5167 15H10.5147C8.82721 14.9995 7.70862 13.9005 7.66211 13.8536C7.56818 13.76 7.51562 13.6329 7.51562 13.5V11.7675C7.51562 11.432 7.68225 11.1209 7.96112 10.9354L10.5156 9.23254V9H11.5157V9.50006C11.5157 9.66705 11.4323 9.82306 11.2933 9.91608L8.51575 11.7675V13.2715C8.81567 13.5084 9.55267 13.9995 10.5153 14.0001H13.5167C14.4881 13.9995 15.2181 13.5104 15.5157 13.2735V11.7675L12.7382 9.91608C12.5992 9.82306 12.5157 9.66705 12.5157 9.50006V9H13.5156V9.23254L16.0701 10.9354C16.3492 11.122 16.5156 11.4329 16.5156 11.7675V13.5C16.5156 13.6329 16.4633 13.76 16.3691 13.8536C16.3223 13.9005 15.2042 14.9995 13.5167 15Z"
                    fill="#AAAAAA" />
                  <path
                    d="M12.0156 20.0001C6.50171 20.0001 2.01562 15.514 2.01562 9.99994C2.01562 4.48608 6.50171 0 12.0156 0C17.5296 0 22.0157 4.48608 22.0157 9.99994C22.0157 15.514 17.5296 20.0001 12.0156 20.0001ZM12.0156 0.999939C7.05304 0.999939 3.01556 5.03741 3.01556 9.99994C3.01556 14.9625 7.05304 18.9999 12.0156 18.9999C16.9781 18.9999 21.0156 14.9625 21.0156 9.99994C21.0156 5.03741 16.9781 0.999939 12.0156 0.999939Z"
                    fill="#AAAAAA" />
                  <path
                    d="M12.0156 18.0002C9.47964 18.0002 7.14724 16.8341 5.6163 14.8011C5.45022 14.5807 5.49416 14.2672 5.71462 14.1011C5.93563 13.9347 6.24929 13.9797 6.41464 14.1996C7.75515 15.9792 9.79678 17.0002 12.0156 17.0002C14.2347 17.0002 16.2761 15.9792 17.6163 14.1991C17.7816 13.9792 18.0948 13.9341 18.3161 14.1007C18.5368 14.2666 18.5807 14.5801 18.4146 14.8006C16.8842 16.8341 14.5517 18.0002 12.0156 18.0002Z"
                    fill="#AAAAAA" />
                  <path
                    d="M18.0157 5.99994C17.8637 5.99994 17.7137 5.93091 17.6158 5.8009C16.2756 4.02094 14.2342 2.99994 12.0151 2.99994C9.79627 2.99994 7.75464 4.02094 6.41467 5.8009C6.24878 6.021 5.93512 6.06641 5.71466 5.89941C5.4942 5.73352 5.45026 5.41986 5.61615 5.1994C7.14618 3.16602 9.47876 2 12.0151 2C14.5517 2 16.8843 3.16602 18.4147 5.19885C18.5807 5.41949 18.5366 5.73297 18.3162 5.89886C18.2257 5.96753 18.1202 5.99994 18.0157 5.99994Z"
                    fill="#AAAAAA" />
                  <path
                    d="M10.0157 23.9999C9.73956 23.9999 9.51562 23.7764 9.51562 23.4999V21.9999C8.68854 21.9999 8.01562 21.327 8.01562 20.4999V18.9999C8.01562 18.7234 8.23956 18.5 8.51569 18.5C8.79163 18.5 9.01556 18.7234 9.01556 18.9999V20.4999C9.01556 20.776 9.24005 20.9999 9.51562 20.9999H10.0157C10.2916 20.9999 10.5156 21.2235 10.5156 21.5V23.4999C10.5156 23.7764 10.2916 23.9999 10.0157 23.9999Z"
                    fill="#AAAAAA" />
                  <path
                    d="M14.5156 21.9999H12.0155C11.7396 21.9999 11.5156 21.7765 11.5156 21.5C11.5156 21.2235 11.7396 20.9999 12.0155 20.9999H14.5156C14.7916 20.9999 15.0155 20.776 15.0155 20.4999V18.9999C15.0155 18.7234 15.2391 18.5 15.5156 18.5C15.7921 18.5 16.0156 18.7234 16.0156 18.9999V20.4999C16.0156 21.327 15.3425 21.9999 14.5156 21.9999Z"
                    fill="#AAAAAA" />
                  <path
                    d="M14.0157 24C13.7392 24 13.5156 23.7764 13.5156 23.4999V21.5001C13.5156 21.2236 13.7392 21 14.0157 21C14.2922 21 14.5157 21.2236 14.5157 21.5001V23.4999C14.5157 23.7764 14.2922 24 14.0157 24Z"
                    fill="#AAAAAA" />
                  <path d="M19.0156 9.5H20.0156V10.4999H19.0156V9.5Z" fill="#AAAAAA" />
                  <path d="M4.01562 9.5H5.01556V10.4999H4.01562V9.5Z" fill="#AAAAAA" />
                </g>
                <defs>
                  <clipPath id="clip0_6609_15834">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            Current Opening
          </button>
        </div>
        <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
      </div>
      <div class="col-md-7 px-0">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-1-sec-1" role="tabpanel"
            aria-labelledby="v-pills-1-sec-1-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Group1707488067.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era.</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-1-sec-2" role="tabpanel" aria-labelledby="v-pills-1-sec-2-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Onboarding-&-Trainings.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 2</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-1-sec-3" role="tabpanel" aria-labelledby="v-pills-1-sec-3-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Shift-&-Break-Management.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 3</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-1-sec-4" role="tabpanel" aria-labelledby="v-pills-1-sec-4-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Project-&-Task-Management.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 4</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========= FAQ ADD MOBILE START ========== -->
    <div class="row justify-content-center" id="blok_mobile">
      <div class="col-md-10 text-center faq-head">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-1-sec-1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Recruitment / Dashboard
              </button>
            </h2>
            <div id="collapse-1-sec-1" class="accordion-collapse collapse" aria-labelledby="heading-1-sec-1"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                  your business with the brightest IT minds and innovations. Our futuristic approach ensures you not
                  only keep pace, but surge ahead in the digital era.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-1-sec-2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-1-sec-2" aria-expanded="false" aria-controls="collapse-1-sec-2">
                All Jobs
              </button>
            </h2>
            <div id="collapse-1-sec-2" class="accordion-collapse collapse" aria-labelledby="heading-1-sec-2"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                  your business with the brightest IT minds and innovations. Our futuristic approach ensures you not
                  only keep pace, but surge ahead in the digital era. 2</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-1-sec-3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-1-sec-3" aria-expanded="false" aria-controls="collapse-1-sec-3">
                Offer Acceptance
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading-1-sec-3"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                  your business with the brightest IT minds and innovations. Our futuristic approach ensures you not
                  only keep pace, but surge ahead in the digital era. 3</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-1-sec-4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-1-sec-4" aria-expanded="false" aria-controls="collapse-1-sec-4">
                Current Opening
              </button>
            </h2>
            <div id="collapse-1-sec-4" class="accordion-collapse collapse" aria-labelledby="heading-1-sec-4"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                  your business with the brightest IT minds and innovations. Our futuristic approach ensures you not
                  only keep pace, but surge ahead in the digital era. 4</p>
              </div>
            </div>
          </div>
        </div>
        <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
      </div>
    </div>
    <!-- FAQ ADD MOBILE CODE END ===== -->
  </div>
</section>
<!-- Trial Section -->

<!-- Trial Section -->
<section id="feature-tabs" class="single-feature-section not-first-feature-section left-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center feature-tabs-head">
        <h2>Jobs</h2>
        <p>StaffViz serves a <span>diverse array of industries</span>, each benefiting from our specialized expertise.
          Covering more than 10 sectors, we deliver targeted solutions for every business need.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row align-items-start" id="mobile_hide">
      <div class="col-md-7 px-0">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-2-sec-1" role="tabpanel"
            aria-labelledby="v-pills-2-sec-1-tab">
            <div class="box purple-box">
              <img src="{{asset('public/assets/img/Group1707488067.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era.</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-2-sec-2" role="tabpanel" aria-labelledby="v-pills-2-sec-2-tab">
            <div class="box purple-box">
              <img src="{{asset('public/assets/img/Onboarding-&-Trainings.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 2</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-2-sec-3" role="tabpanel" aria-labelledby="v-pills-2-sec-3-tab">
            <div class="box purple-box">
              <img src="{{asset('public/assets/img/Shift-&-Break-Management.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 3</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-2-sec-4" role="tabpanel" aria-labelledby="v-pills-2-sec-4-tab">
            <div class="box purple-box">
              <img src="{{asset('public/assets/img/Project-&-Task-Management.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 4</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4" style="margin-left: 10px;">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-2-sec-1-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-2-sec-1" type="button" role="tab" aria-controls="v-pills-2-sec-1"
            aria-selected="true">
            <div class="img">
              <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6.58516 3.76381C6.49651 3.59787 6.54911 3.38642 6.70267 3.29C6.85622 3.19445 7.05249 3.25143 7.14115 3.41737L7.6127 4.29927C7.73663 4.53115 7.58006 4.81922 7.33502 4.81922C7.22399 4.81922 7.11609 4.75727 7.05662 4.64603L6.58516 3.76381ZM2.82542 7.47804C2.91407 7.31185 3.11025 7.25513 3.2639 7.35099L4.08062 7.86016C4.3643 8.03709 4.24622 8.50691 3.91982 8.50691C3.86529 8.50691 3.81014 8.49204 3.75964 8.46078L2.94292 7.95134C2.78937 7.85544 2.73676 7.64341 2.82542 7.47804ZM22.5918 13.198C22.5918 13.3896 22.4482 13.5447 22.2708 13.5447H21.3278C21.1505 13.5447 21.0068 13.3896 21.0068 13.198C21.0068 13.0064 21.1505 12.8515 21.3278 12.8515H22.2708C22.4482 12.8515 22.5918 13.0064 22.5918 13.198ZM2.67019 13.5447H1.72723C1.54996 13.5447 1.40625 13.3896 1.40625 13.198C1.40625 13.0064 1.54996 12.8515 1.72723 12.8515H2.67019C2.8475 12.8515 2.99126 13.0064 2.99126 13.198C2.99131 13.3896 2.8475 13.5447 2.67019 13.5447ZM19.8 8.33366C19.7113 8.16804 19.7638 7.95596 19.9174 7.86016L20.7342 7.35099C20.8877 7.25519 21.084 7.31185 21.1727 7.47804C21.2613 7.64341 21.2087 7.85544 21.0552 7.95129L20.2385 8.46072C20.0871 8.55476 19.8897 8.50147 19.8 8.33366ZM11.678 3.12292V2.10457C11.678 1.91266 11.8217 1.75781 11.999 1.75781C12.1762 1.75781 12.32 1.91261 12.32 2.10457V3.12286C12.32 3.3142 12.1762 3.46962 11.999 3.46962C11.8218 3.46962 11.678 3.31426 11.678 3.12292ZM16.3854 4.29927L16.8569 3.41737C16.9455 3.25143 17.1418 3.19445 17.2954 3.29C17.449 3.38637 17.5016 3.59787 17.4129 3.76381L16.9414 4.64603C16.8516 4.81388 16.6539 4.86707 16.5029 4.77309C16.3494 4.67697 16.2968 4.46516 16.3854 4.29927ZM10.4189 6.50646C10.4189 6.30257 10.5726 6.13663 10.7614 6.13663H13.2367C13.4255 6.13663 13.5792 6.30257 13.5792 6.50646V7.30977H10.4189V6.50646ZM16.3446 8.55274V9.22899L12.5985 11.3962C12.2119 11.62 11.7862 11.62 11.3997 11.3962L7.65355 9.22899V8.55274C7.65355 8.24984 7.88179 8.00298 8.16239 8.00298H15.8356C16.1162 8.00298 16.3446 8.24984 16.3446 8.55274ZM15.8356 14.4029C16.1162 14.4029 16.3445 14.1564 16.3445 13.8535V10.0157L12.9015 12.0073C12.3197 12.3439 11.6783 12.3438 11.0965 12.0073L7.6535 10.0157V13.8535C7.6535 14.1564 7.88174 14.4029 8.16235 14.4029H15.8356ZM7.01145 8.55274V13.8535C7.01145 14.5385 7.52779 15.0965 8.16235 15.0965H15.8355C16.4702 15.0965 16.9864 14.5385 16.9864 13.8535V8.55274C16.9864 7.86773 16.4702 7.30977 15.8355 7.30977H14.2211V6.50646C14.2211 5.9202 13.7795 5.44317 13.2366 5.44317H10.7614C10.2185 5.44317 9.77687 5.9202 9.77687 6.50646V7.30977H8.16239C7.52783 7.30977 7.01145 7.86773 7.01145 8.55274ZM20.1925 18.2752L15.263 21.3492C13.9562 22.1639 13.1814 22.5731 11.7266 22.8051C10.1896 23.0502 8.65967 22.924 7.23542 22.7514C6.58967 22.6733 5.99937 22.614 5.40196 22.5679V18.0769C6.60158 17.9559 7.65676 17.9752 9.00787 18.3655C9.03494 18.3731 9.06268 18.3769 9.09071 18.3769H12.5684C13.0975 18.3769 13.4523 18.9605 13.2528 19.4799C13.137 19.7811 12.8683 19.9763 12.5684 19.9763H9.09071C8.91345 19.9763 8.76974 20.131 8.76974 20.323C8.76974 20.5144 8.91345 20.6695 9.09071 20.6695H12.5684C13.0337 20.6695 13.4577 20.4191 13.7118 20.0128C13.8313 20.0368 13.9502 20.0493 14.0673 20.0499C14.628 20.0518 14.9099 19.8209 15.299 19.5779L19.4913 16.964C19.8261 16.7552 20.2558 16.8793 20.4491 17.241C20.6425 17.6028 20.5273 18.0667 20.1925 18.2752ZM4.76006 23.1489C4.76006 23.3251 4.62753 23.4679 4.46476 23.4679H3.02212C2.85931 23.4679 2.72683 23.3251 2.72683 23.1489V17.8523C2.72683 17.6761 2.85931 17.5333 3.02212 17.5333H4.46476C4.62758 17.5333 4.76006 17.6761 4.76006 17.8523V23.1489ZM19.1703 16.3634L14.9781 18.9772C14.5944 19.2166 14.3929 19.3984 13.9415 19.3491C14.0368 18.4648 13.3946 17.6837 12.5684 17.6837H9.13271C7.69295 17.2736 6.57436 17.2584 5.29857 17.391C5.14291 17.0641 4.82779 16.8401 4.46471 16.8401H3.02212C2.50526 16.8401 2.08487 17.2941 2.08487 17.8523V23.1489C2.08487 23.7074 2.50526 24.1614 3.02212 24.1614H4.46476C4.94601 24.1614 5.3435 23.7674 5.39601 23.2625C5.97105 23.3078 6.54119 23.3654 7.16404 23.4407C8.70091 23.6266 10.2461 23.742 11.8204 23.491C13.4387 23.233 14.3219 22.7367 15.5841 21.9494L20.5135 18.8755C21.1549 18.4759 21.3755 17.5869 21.0051 16.8941C20.6348 16.2015 19.8117 15.9632 19.1703 16.3634Z"
                  fill="#A7A7A7" />
              </svg>
            </div>
            Recruitment / All Jobs
          </button>
          <button class="nav-link" id="v-pills-2-sec-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2-sec-2"
            type="button" role="tab" aria-controls="v-pills-2-sec-2" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6609_15998)">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M22.1526 12.0008C22.1526 17.6086 17.6066 22.1546 11.9988 22.1546C6.39097 22.1546 1.84495 17.6086 1.84495 12.0008C1.84495 6.39292 6.39097 1.84691 11.9988 1.84691C17.6066 1.84691 22.1526 6.39292 22.1526 12.0008ZM23.0757 12.0008C23.0757 18.1184 18.1164 23.0777 11.9988 23.0777C5.8812 23.0777 0.921875 18.1184 0.921875 12.0008C0.921875 5.88315 5.8812 0.923828 11.9988 0.923828C18.1164 0.923828 23.0757 5.88315 23.0757 12.0008ZM18.5653 6.96827C18.7224 6.76755 18.687 6.47747 18.4863 6.32037C18.2856 6.16326 17.9955 6.19866 17.8384 6.39938L10.4669 15.8185C10.3032 16.0278 9.99697 16.0559 9.79781 15.8799L6.10131 12.6137C5.91032 12.4449 5.61863 12.4629 5.44984 12.6539C5.28106 12.845 5.29911 13.1366 5.49014 13.3054L9.1866 16.5716C9.78397 17.0995 10.7025 17.0152 11.1938 16.3874L18.5653 6.96827Z"
                    fill="#A7A7A7" />
                </g>
                <defs>
                  <clipPath id="clip0_6609_15998">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            Active
          </button>
          <button class="nav-link" id="v-pills-2-sec-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2-sec-3"
            type="button" role="tab" aria-controls="v-pills-3" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6609_16000)">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M22.1526 12.0008C22.1526 17.6086 17.6066 22.1546 11.9988 22.1546C6.39097 22.1546 1.84495 17.6086 1.84495 12.0008C1.84495 6.39292 6.39097 1.84691 11.9988 1.84691C17.6066 1.84691 22.1526 6.39292 22.1526 12.0008ZM23.0757 12.0008C23.0757 18.1184 18.1164 23.0777 11.9988 23.0777C5.8812 23.0777 0.921875 18.1184 0.921875 12.0008C0.921875 5.88315 5.8812 0.923828 11.9988 0.923828C18.1164 0.923828 23.0757 5.88315 23.0757 12.0008Z"
                    fill="#A7A7A7" />
                  <path
                    d="M12.8451 11.9434L16.3663 8.42229C16.5916 8.19694 16.5916 7.80257 16.3663 7.57722C16.1409 7.35187 15.7465 7.35187 15.5212 7.57722L12.0001 11.0983L8.47893 7.57722C8.25358 7.35187 7.85921 7.35187 7.63386 7.57722C7.40851 7.80257 7.40851 8.19694 7.63386 8.42229L11.155 11.9434L7.63386 15.4364C7.40851 15.6617 7.40851 16.0561 7.63386 16.2814C7.74653 16.3941 7.91555 16.4505 8.05639 16.4505C8.19724 16.4505 8.36625 16.3941 8.47893 16.2814L12.0001 12.7603L15.5212 16.2814C15.6339 16.3941 15.8029 16.4505 15.9437 16.4505C16.0846 16.4505 16.2536 16.3941 16.3663 16.2814C16.5916 16.0561 16.5916 15.6617 16.3663 15.4364L12.8451 11.9434Z"
                    fill="#AAAAAA" />
                </g>
                <defs>
                  <clipPath id="clip0_6609_16000">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            Closed
          </button>
          <button class="nav-link" id="v-pills-2-sec-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2-sec-4"
            type="button" role="tab" aria-controls="v-pills-2-sec-4" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.9992 3.44531C10.8954 3.44531 9.81566 3.74658 8.87666 4.31653C8.71025 4.41754 8.65724 4.63429 8.75825 4.8007C8.85922 4.96711 9.07602 5.02008 9.24238 4.91911C10.0711 4.41609 11.0244 4.15017 11.9992 4.15017C14.9332 4.15017 17.3201 6.53713 17.3201 9.47108C17.3201 9.85541 17.279 10.2389 17.1978 10.6108C17.1564 10.801 17.2769 10.9888 17.467 11.0303C17.4924 11.0358 17.5176 11.0384 17.5425 11.0384C17.7046 11.0384 17.8506 10.9259 17.8865 10.761C17.9784 10.3398 18.025 9.9058 18.025 9.47104C18.025 6.1485 15.3219 3.44531 11.9992 3.44531Z"
                  fill="#AAAAAA" />
                <path
                  d="M21.5162 2.74387C21.8401 2.74387 22.1036 2.48034 22.1036 2.15648V0.58739C22.1036 0.263484 21.8401 0 21.5162 0H19.9471C19.6232 0 19.3597 0.263484 19.3597 0.58739V1.02754H4.64226V0.58739C4.64226 0.263484 4.37878 0 4.05492 0H2.48578C2.16192 0 1.89844 0.263484 1.89844 0.58739V2.15643C1.89844 2.48034 2.16192 2.74382 2.48583 2.74382H2.91792V16.1969H2.48583C2.16192 16.1969 1.89844 16.4604 1.89844 16.7843V18.3534C1.89844 18.6773 2.16192 18.9407 2.48583 18.9407H4.05492C4.37882 18.9407 4.64231 18.6772 4.64231 18.3534V17.9213H8.69741V19.8076V21.0557C8.69741 21.0638 8.69807 21.0717 8.69863 21.0796C8.69811 21.0875 8.69741 21.0954 8.69741 21.1035V22.0946C8.69741 23.1452 9.55217 24 10.6028 24H13.3991C14.4497 24 15.3045 23.1452 15.3045 22.0946V21.1035C15.3045 21.0954 15.3038 21.0875 15.3033 21.0796C15.3038 21.0717 15.3045 21.0638 15.3045 21.0557V19.8076V17.9213H19.3597V18.3534C19.3597 18.6773 19.6232 18.9407 19.9471 18.9407H21.5162C21.8401 18.9407 22.1036 18.6772 22.1036 18.3534V16.7843C22.1036 16.4604 21.8401 16.1969 21.5162 16.1969H21.0841V2.74387H21.5162ZM2.6033 2.03896V0.704905H3.9374V2.03896H2.6033ZM3.9374 18.2359H2.6033V16.9018H3.9374V18.2359ZM13.3991 23.2951H10.6028C9.94081 23.2951 9.40227 22.7565 9.40227 22.0946V21.4559H14.5996V22.0946C14.5996 22.7565 14.0611 23.2951 13.3991 23.2951ZM13.3131 7.71739L14.192 8.75572H13.7224H12.5912H11.4108H10.2796H9.80998L10.6889 7.71739H13.3131ZM11.2855 7.01253L12.001 6.16728L12.7165 7.01253H11.2855ZM13.3699 9.46058V19.4551H12.9436V9.46058H13.3699ZM12.2387 9.46058V19.4551H11.7632V9.46058H12.2387ZM11.0583 9.46058V19.4551H10.632V9.46058H11.0583ZM9.92712 9.46058V19.4551H9.40231V9.46058H9.92712ZM10.2796 20.16H11.4108H12.5911H13.7223H14.5996V20.7032H9.40231V20.16H10.2796ZM14.5996 19.4551H14.0748V9.46058H14.5996V19.4551ZM19.3597 16.7843V17.2164H15.3045V14.5117C15.8482 14.1543 16.3383 13.707 16.7524 13.1768C16.8722 13.0234 16.845 12.8019 16.6916 12.6821C16.5382 12.5621 16.3167 12.5895 16.1969 12.7428C15.932 13.0819 15.632 13.3827 15.3045 13.643V9.10808C15.3045 9.0934 15.3033 9.07906 15.3016 9.06486C15.3011 9.06144 15.3005 9.05801 15.3 9.05459C15.2981 9.04212 15.2956 9.02989 15.2924 9.01789C15.2917 9.01522 15.2912 9.01255 15.2904 9.00992C15.2861 8.99525 15.281 8.98095 15.275 8.96712C15.2743 8.96548 15.2734 8.96394 15.2727 8.9623C15.2671 8.94997 15.2607 8.93806 15.2538 8.92653C15.2521 8.92372 15.2504 8.92095 15.2487 8.91819C15.2405 8.90548 15.2318 8.89325 15.2221 8.88172C15.2217 8.88125 15.2214 8.88078 15.221 8.88031L13.7455 7.13713L12.27 5.39394C12.203 5.31482 12.1046 5.26921 12.001 5.26921C11.8973 5.26921 11.7989 5.31482 11.7319 5.39394L8.78085 8.88036C8.78047 8.88083 8.78019 8.8813 8.77986 8.88172C8.77021 8.89325 8.76139 8.90548 8.75324 8.91823C8.75146 8.921 8.74986 8.92376 8.74817 8.92653C8.74119 8.93806 8.73486 8.95001 8.72924 8.96234C8.72853 8.96394 8.72764 8.96548 8.72694 8.96708C8.72089 8.9809 8.71583 8.9952 8.71157 9.00992C8.71081 9.01255 8.71025 9.01517 8.70955 9.0178C8.70636 9.02984 8.70383 9.04212 8.70191 9.05464C8.70139 9.05806 8.70078 9.06144 8.70036 9.06481C8.69863 9.07901 8.69746 9.09336 8.69746 9.10803V13.638C7.46929 12.6625 6.68015 11.1569 6.68015 9.47023C6.68015 8.43997 6.97494 7.44064 7.53257 6.58021C7.63846 6.41689 7.59186 6.19864 7.4285 6.09275C7.26529 5.98696 7.04694 6.03341 6.9411 6.19682C6.30923 7.17163 5.97524 8.30356 5.97524 9.47019C5.97524 11.5738 7.05908 13.4289 8.69746 14.507V17.2162H4.64231V16.7841C4.64231 16.4602 4.37882 16.1967 4.05492 16.1967H3.62282V2.74387H4.05492C4.37882 2.74387 4.64231 2.48034 4.64231 2.15648V1.73245H19.3597V2.15648C19.3597 2.48039 19.6232 2.74387 19.9471 2.74387H20.3792V16.1969H19.9471C19.6232 16.1969 19.3597 16.4604 19.3597 16.7843ZM21.3987 16.9018V18.2359H20.0646V16.9018H21.3987ZM20.0646 2.03896V0.704905H21.3987V2.03896H20.0646Z"
                  fill="#AAAAAA" />
              </svg>
            </div>
            Draft
          </button>
        </div>
        <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
      </div>
    </div>
    <!-- ========= FAQ ADD MOBILE START ========== -->
    <div class="row justify-content-center" id="blok_mobile">
      <div class="col-md-10 text-center faq-head">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-2-sec-1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-2-sec-1" aria-expanded="false" aria-controls="collapse-2-sec-1">
                Recruitment / All Jobs
              </button>
            </h2>
            <div id="collapse-2-sec-1" class="accordion-collapse collapse" aria-labelledby="heading-2-sec-1"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                  your business with the brightest IT minds and innovations. Our futuristic approach ensures you not
                  only keep pace, but surge ahead in the digital era.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-2-sec-2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-2-sec-2" aria-expanded="false" aria-controls="collapse-2-sec-2">
                Active
              </button>
            </h2>
            <div id="collapse-2-sec-2" class="accordion-collapse collapse" aria-labelledby="heading-2-sec-2"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                  your business with the brightest IT minds and innovations. Our futuristic approach ensures you not
                  only keep pace, but surge ahead in the digital era. 2</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-2-sec-3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-2-sec-3" aria-expanded="false" aria-controls="collapse-2-sec-3">
                Closed
              </button>
            </h2>
            <div id="collapse-2-sec-3" class="accordion-collapse collapse" aria-labelledby="heading-2-sec-3"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                  your business with the brightest IT minds and innovations. Our futuristic approach ensures you not
                  only keep pace, but surge ahead in the digital era. 3</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-2-sec-4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-2-sec-4" aria-expanded="false" aria-controls="collapse-2-sec-4">
                Draft
              </button>
            </h2>
            <div id="collapse-2-sec-4" class="accordion-collapse collapse" aria-labelledby="heading-2-sec-4"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                  your business with the brightest IT minds and innovations. Our futuristic approach ensures you not
                  only keep pace, but surge ahead in the digital era. 4</p>
              </div>
            </div>
          </div>
        </div>
        <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
      </div>
    </div>
    <!-- FAQ ADD MOBILE CODE END ===== -->
  </div>
</section>
<!-- Trial Section -->

<!-- Trial Section -->
<section id="feature-tabs" class="single-feature-section not-first-feature-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center feature-tabs-head">
        <h2>Post a Job</h2>
        <p>StaffViz serves a <span>diverse array of industries</span>, each benefiting from our specialized
          expertise.
          Covering more than 10 sectors, we deliver targeted solutions for every business need.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-between align-items-start" id="mobile_hide">
      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-3-sec-1-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-3-sec-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6609_16156)">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.4499 19.2761H2.06678C0.927944 19.2761 0 18.3481 0 17.2093V2.82616C0 1.70138 0.927944 0.773438 2.06678 0.773438H16.4499C17.5888 0.773438 18.5167 1.70138 18.5167 2.82616V15.5924C18.5167 15.7752 18.3761 15.9158 18.1933 15.9158C18.0246 15.9158 17.8699 15.7752 17.8699 15.5924V2.82616C17.8699 2.05288 17.2373 1.40613 16.4499 1.40613H2.06678C1.27944 1.40613 0.646749 2.05288 0.646749 2.82616V17.2093C0.646749 17.9966 1.27944 18.6434 2.06678 18.6434H16.4499C16.5202 18.6434 16.5905 18.6293 16.6608 18.6293C16.8436 18.6012 16.9982 18.7137 17.0264 18.8965C17.0545 19.0652 16.942 19.2339 16.7733 19.262C16.6608 19.2761 16.5624 19.2761 16.4499 19.2761Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M18.1933 4.49988H0.323374C0.140598 4.49988 0 4.35928 0 4.19056C0 4.00779 0.140598 3.86719 0.323374 3.86719H18.1933C18.3761 3.86719 18.5167 4.00779 18.5167 4.19056C18.5167 4.35928 18.3761 4.49988 18.1933 4.49988Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M3.68329 2.953H2.44603C2.27732 2.953 2.13672 2.8124 2.13672 2.64369C2.13672 2.46091 2.27732 2.32031 2.44603 2.32031H3.68329C3.86607 2.32031 4.00667 2.46091 4.00667 2.64369C4.00667 2.8124 3.86607 2.953 3.68329 2.953Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M6.17157 2.953H4.94837C4.7656 2.953 4.625 2.8124 4.625 2.64369C4.625 2.46091 4.7656 2.32031 4.94837 2.32031H6.17157C6.35435 2.32031 6.49495 2.46091 6.49495 2.64369C6.49495 2.8124 6.35435 2.953 6.17157 2.953Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.67548 2.953H7.43822C7.2695 2.953 7.12891 2.8124 7.12891 2.64369C7.12891 2.46091 7.2695 2.32031 7.43822 2.32031H8.67548C8.85826 2.32031 8.99885 2.46091 8.99885 2.64369C8.99885 2.8124 8.85826 2.953 8.67548 2.953Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12.5294 8.94163H11.4327C11.25 8.94163 11.1094 8.80104 11.1094 8.63232V6.42494C11.1094 6.25622 11.25 6.10156 11.4327 6.10156H12.5294C13.3168 6.10156 13.9494 6.74831 13.9494 7.5216C13.9494 8.30894 13.3168 8.94163 12.5294 8.94163ZM11.7421 8.30894H12.5294C12.9653 8.30894 13.3168 7.95745 13.3168 7.5216C13.3168 7.09981 12.9653 6.74831 12.5294 6.74831H11.7421V8.30894Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12.9512 11.1487H11.4327C11.25 11.1487 11.1094 11.0081 11.1094 10.8253V8.63197C11.1094 8.44919 11.25 8.30859 11.4327 8.30859H12.9512C13.7385 8.30859 14.3712 8.94128 14.3712 9.72863C14.3712 10.516 13.7385 11.1487 12.9512 11.1487ZM11.7421 10.516H12.9512C13.3871 10.516 13.7385 10.1645 13.7385 9.72863C13.7385 9.29278 13.3871 8.94128 12.9512 8.94128H11.7421V10.516Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.53481 11.149H8.35204C7.48033 11.149 6.77734 10.446 6.77734 9.58838V7.67626C6.77734 6.80455 7.48033 6.10156 8.35204 6.10156H8.53481C9.39246 6.10156 10.0954 6.80455 10.0954 7.67626V9.58838C10.0954 10.446 9.39246 11.149 8.53481 11.149ZM8.35204 6.74831C7.83183 6.74831 7.42409 7.15604 7.42409 7.67626V9.58838C7.42409 10.0945 7.83183 10.5163 8.35204 10.5163H8.53481C9.04096 10.5163 9.46276 10.0945 9.46276 9.58838V7.67626C9.46276 7.15604 9.04096 6.74831 8.53481 6.74831H8.35204Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M4.13488 11.1486C3.34753 11.1486 2.71484 10.5019 2.71484 9.72859C2.71484 9.54581 2.85544 9.40522 3.03822 9.40522C3.22099 9.40522 3.36159 9.54581 3.36159 9.72859C3.36159 10.1504 3.71309 10.5019 4.13488 10.5019C4.57073 10.5019 4.90817 10.1504 4.90817 9.72859V6.43861C4.90817 6.25583 5.04876 6.11523 5.23154 6.11523C5.41432 6.11523 5.55491 6.25583 5.55491 6.43861V9.72859C5.55491 10.5019 4.92223 11.1486 4.13488 11.1486Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.2157 13.1175H3.10853C2.92575 13.1175 2.78516 12.9769 2.78516 12.7941C2.78516 12.6113 2.92575 12.4707 3.10853 12.4707H14.2157C14.3845 12.4707 14.5251 12.6113 14.5251 12.7941C14.5251 12.9769 14.3845 13.1175 14.2157 13.1175Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.2157 15.0721H3.10853C2.92575 15.0721 2.78516 14.9315 2.78516 14.7628C2.78516 14.5801 2.92575 14.4395 3.10853 14.4395H14.2157C14.3845 14.4395 14.5251 14.5801 14.5251 14.7628C14.5251 14.9315 14.3845 15.0721 14.2157 15.0721Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.2157 17.0393H3.10853C2.92575 17.0393 2.78516 16.8987 2.78516 16.716C2.78516 16.5472 2.92575 16.3926 3.10853 16.3926H14.2157C14.3845 16.3926 14.5251 16.5472 14.5251 16.716C14.5251 16.8987 14.3845 17.0393 14.2157 17.0393Z"
                    fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M21.5687 23.2259C21.4844 23.2259 21.4 23.1978 21.3438 23.1275L18.1522 19.95L17.3227 20.7795C17.2383 20.8639 17.1259 20.892 17.0134 20.8639C16.9009 20.8217 16.8165 20.7373 16.7884 20.6248L15.4949 15.0994C15.4668 15.0009 15.4949 14.8885 15.5793 14.8041C15.6496 14.7338 15.7621 14.6916 15.8745 14.7197L21.4 16.0132C21.5125 16.0414 21.5969 16.1257 21.625 16.2382C21.6531 16.3507 21.625 16.4772 21.5406 16.5616L20.7111 17.3911L23.9027 20.5686C23.9589 20.6248 23.987 20.7092 23.987 20.7936C23.987 20.8779 23.9589 20.9623 23.9027 21.0185L21.7937 23.1275C21.7234 23.1978 21.639 23.2259 21.5687 23.2259ZM18.1522 19.1767C18.2366 19.1767 18.3209 19.2048 18.3772 19.2751L21.5687 22.4526L23.2278 20.7936L20.0362 17.6161C19.9097 17.4895 19.9097 17.2786 20.0362 17.1661L20.683 16.5053L16.226 15.4649L17.2805 19.9219L17.9273 19.2751C17.9835 19.2048 18.0679 19.1767 18.1522 19.1767Z"
                    fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_6609_16156">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            Post a Job
          </button>
          <button class="nav-link" id="v-pills-3-sec-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3-sec-2"
            type="button" role="tab" aria-controls="v-pills-2" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6609_16203)">
                  <path d="M2.69922 21.5996L4.42051 19.8783L4.91596 20.3738L3.19467 22.0951L2.69922 21.5996Z"
                    fill="#A7A7A7" />
                  <path d="M6.25781 22.6543L8.83751 20.0746L9.333 20.5701L6.7533 23.1498L6.25781 22.6543Z"
                    fill="#A7A7A7" />
                  <path
                    d="M18.1612 7.68359L4.51172 12.1804L7.96144 15.6301L7.25723 18.5875L10.2145 17.8832L13.6645 21.3329L18.1612 7.68359ZM15.829 9.18978L8.37548 15.053L5.81217 12.4898L15.829 9.18978ZM8.6602 15.7207L15.5213 10.3233L10.124 17.1845L8.2027 17.642L8.6602 15.7207ZM10.7916 17.4691L16.655 10.0157L13.355 20.0325L10.7916 17.4691Z"
                    fill="#A7A7A7" />
                  <path
                    d="M0 0.847656V16.986H3.18539V16.2852H0.701016V5.31255H23.2995V16.2852H18.1226V16.986H24V0.847656H0ZM0.700781 4.61172V1.54844H23.2992V4.61177L0.700781 4.61172Z"
                    fill="#A7A7A7" />
                  <path d="M1.73047 2.75391H2.94547V3.45469H1.73047V2.75391Z" fill="#A7A7A7" />
                  <path d="M3.54297 2.75391H4.75797V3.45469H3.54297V2.75391Z" fill="#A7A7A7" />
                  <path d="M5.35156 2.75391H6.56656V3.45469H5.35156V2.75391Z" fill="#A7A7A7" />
                </g>
                <defs>
                  <clipPath id="clip0_6609_16203">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            Publish Job
          </button>
          <button class="nav-link" id="v-pills-3-sec-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3-sec-3"
            type="button" role="tab" aria-controls="v-pills-3" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6609_16191)">
                  <path
                    d="M20.4479 0.910163C20.3503 0.812569 20.2176 0.758333 20.0796 0.759794C19.9421 0.760769 19.8104 0.814518 19.7115 0.910163L12.2843 8.33699L12.2637 8.35794L12.2533 8.36833C12.2431 8.38392 12.2275 8.39951 12.2171 8.41494C12.2171 8.42013 12.2119 8.42013 12.2119 8.42533C12.2015 8.44076 12.1962 8.45131 12.1859 8.46674C12.1806 8.47193 12.1806 8.47729 12.1755 8.48233C12.1703 8.49792 12.1653 8.50831 12.1599 8.5239C12.1599 8.52909 12.1548 8.52909 12.1548 8.53413L10.8321 12.5226C10.7688 12.7082 10.817 12.914 10.9568 13.0517C11.0548 13.1483 11.1871 13.2024 11.3248 13.202C11.3811 13.2009 11.4372 13.1923 11.4909 13.1761L15.469 11.8484C15.4741 11.8484 15.4741 11.8484 15.4793 11.8432C15.4957 11.8385 15.5116 11.8315 15.5259 11.8226C15.5299 11.8219 15.5337 11.8201 15.5364 11.8172C15.5518 11.807 15.5726 11.7966 15.5882 11.786C15.6036 11.7757 15.6192 11.7601 15.6348 11.7498C15.6402 11.7448 15.6452 11.7448 15.6452 11.7394C15.6504 11.7342 15.6608 11.729 15.6662 11.7188L23.098 4.28663C23.1953 4.18952 23.2499 4.05799 23.2499 3.92094C23.2499 3.78372 23.1953 3.65203 23.098 3.55525L20.4479 0.910163ZM12.8757 9.66481L14.3435 11.1326L12.1444 11.8638L12.8757 9.66481ZM15.3031 10.6243L13.384 8.70544L20.0796 2.00967L21.9985 3.92857L15.3031 10.6243Z"
                    fill="#AAAAAA" />
                  <path
                    d="M19.224 10.4531C18.9379 10.4539 18.7062 10.6857 18.7054 10.9718V20.6654C18.7029 21.5236 18.0079 22.2186 17.1494 22.2213H3.34329C2.48508 22.2186 1.78975 21.5236 1.78731 20.6654V6.85891C1.78975 6.00071 2.48508 5.30554 3.34329 5.30294H13.0365C13.3231 5.30294 13.5552 5.07073 13.5552 4.78428C13.5552 4.49784 13.3231 4.26562 13.0365 4.26562H3.34329C1.91121 4.26627 0.75065 5.427 0.75 6.85891V20.6654C0.75065 22.0973 1.91121 23.258 3.34329 23.2585H17.1494C18.5815 23.258 19.7422 22.0973 19.7427 20.6654V10.9718C19.7419 10.6857 19.5102 10.4539 19.224 10.4531Z"
                    fill="#AAAAAA" />
                </g>
                <defs>
                  <clipPath id="clip0_6609_16191">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            Create Post
          </button>
          <button class="nav-link" id="v-pills-3-sec-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3-sec-4"
            type="button" role="tab" aria-controls="v-pills-4" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_6609_16194)">
                  <path
                    d="M9.21387 23.9715H2.87499C2.11975 23.9715 1.39544 23.6715 0.861401 23.1375C0.327363 22.6034 0.0273438 21.8791 0.0273438 21.1239L0.0273438 2.84765C0.0273438 2.09241 0.327363 1.3681 0.861401 0.834058C1.39544 0.300019 2.11975 0 2.87499 0L16.0596 0C16.8149 0 17.5392 0.300019 18.0732 0.834058C18.6073 1.3681 18.9073 2.09241 18.9073 2.84765V10.0123C18.9157 10.1016 18.9054 10.1915 18.877 10.2766C18.8486 10.3616 18.8028 10.4397 18.7425 10.506C18.6822 10.5723 18.6087 10.6252 18.5268 10.6614C18.4448 10.6977 18.3562 10.7164 18.2665 10.7164C18.1769 10.7164 18.0883 10.6977 18.0063 10.6614C17.9244 10.6252 17.8509 10.5723 17.7906 10.506C17.7303 10.4397 17.6845 10.3616 17.6561 10.2766C17.6277 10.1915 17.6174 10.1016 17.6258 10.0123V2.84765C17.6258 2.64448 17.5857 2.44332 17.5078 2.25569C17.4299 2.06806 17.3157 1.89766 17.1718 1.75426C17.0278 1.61087 16.857 1.4973 16.6691 1.42007C16.4812 1.34284 16.2799 1.30347 16.0767 1.30422H2.87499C2.67088 1.30196 2.46834 1.34022 2.2791 1.41677C2.08987 1.49332 1.9177 1.60665 1.77257 1.7502C1.62743 1.89374 1.51221 2.06465 1.43358 2.25303C1.35495 2.44141 1.31447 2.64352 1.31448 2.84765V21.141C1.31447 21.3451 1.35495 21.5472 1.43358 21.7356C1.51221 21.924 1.62743 22.0949 1.77257 22.2384C1.9177 22.382 2.08987 22.4953 2.2791 22.5718C2.46834 22.6484 2.67088 22.6866 2.87499 22.6844H9.21387C9.38455 22.6844 9.54825 22.7522 9.66894 22.8729C9.78963 22.9936 9.85744 23.1573 9.85744 23.328C9.85744 23.4986 9.78963 23.6623 9.66894 23.783C9.54825 23.9037 9.38455 23.9715 9.21387 23.9715Z"
                    fill="#AAAAAA" />
                  <path
                    d="M14.865 6.87999H4.04389C3.95467 6.88841 3.86468 6.87811 3.77967 6.84974C3.69467 6.82137 3.61653 6.77556 3.55025 6.71525C3.48397 6.65493 3.43102 6.58144 3.39479 6.49947C3.35856 6.41751 3.33984 6.32889 3.33984 6.23927C3.33984 6.14966 3.35856 6.06103 3.39479 5.97907C3.43102 5.89711 3.48397 5.82361 3.55025 5.7633C3.61653 5.70298 3.69467 5.65717 3.77967 5.6288C3.86468 5.60043 3.95467 5.59013 4.04389 5.59855H14.865C15.0245 5.61361 15.1726 5.68762 15.2805 5.80611C15.3883 5.9246 15.4481 6.07906 15.4481 6.23927C15.4481 6.39949 15.3883 6.55394 15.2805 6.67244C15.1726 6.79093 15.0245 6.86494 14.865 6.87999Z"
                    fill="#AAAAAA" />
                  <path
                    d="M10.0131 11.8809H4.06154C3.89085 11.8809 3.72716 11.8131 3.60647 11.6924C3.48577 11.5717 3.41797 11.408 3.41797 11.2373C3.41797 11.0666 3.48577 10.9029 3.60647 10.7822C3.72716 10.6616 3.89085 10.5938 4.06154 10.5938H10.0131C10.1838 10.5938 10.3475 10.6616 10.4682 10.7822C10.5889 10.9029 10.6567 11.0666 10.6567 11.2373C10.6567 11.408 10.5889 11.5717 10.4682 11.6924C10.3475 11.8131 10.1838 11.8809 10.0131 11.8809Z"
                    fill="#AAAAAA" />
                  <path
                    d="M21.8734 17.3528C21.7792 17.3529 21.6859 17.3344 21.5989 17.2982C21.5118 17.262 21.4329 17.209 21.3665 17.142L18.7752 14.545C18.6415 14.4113 18.5664 14.23 18.5664 14.0409C18.5664 13.8519 18.6415 13.6706 18.7752 13.5369C18.9089 13.4032 19.0902 13.3281 19.2792 13.3281C19.4683 13.3281 19.6496 13.4032 19.7833 13.5369L22.3803 16.134C22.5115 16.269 22.5848 16.4498 22.5848 16.638C22.5848 16.8262 22.5115 17.007 22.3803 17.142C22.314 17.209 22.235 17.262 22.148 17.2982C22.061 17.3344 21.9677 17.3529 21.8734 17.3528Z"
                    fill="#AAAAAA" />
                  <path
                    d="M11.918 23.9999L12.6413 19.6714L19.8572 12.4555C20.1861 12.1275 20.6315 11.9434 21.0959 11.9434C21.5604 11.9434 22.0058 12.1275 22.3347 12.4555L23.4737 13.5946C23.8017 13.9234 23.9859 14.3689 23.9859 14.8333C23.9859 15.2977 23.8017 15.7432 23.4737 16.072L16.2464 23.2766L11.918 23.9999ZM13.974 20.3321L13.6607 22.2343L15.563 21.9154L22.46 15.0241C22.5202 14.9624 22.5538 14.8796 22.5538 14.7934C22.5538 14.7072 22.5202 14.6245 22.46 14.5628L21.3209 13.4237C21.2592 13.3635 21.1764 13.3298 21.0903 13.3298C21.0041 13.3298 20.9213 13.3635 20.8596 13.4237L13.974 20.3321Z"
                    fill="#AAAAAA" />
                </g>
                <defs>
                  <clipPath id="clip0_6609_16194">
                    <rect width="24" height="24" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            Edit Job
          </button>
        </div>
        <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
      </div>
      <div class="col-md-7 px-0">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-3-sec-1" role="tabpanel"
            aria-labelledby="v-pills-3-sec-1-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Group1707488067.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era.</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-3-sec-2" role="tabpanel" aria-labelledby="v-pills-3-sec-2-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Onboarding-&-Trainings.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 2</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-3-sec-3" role="tabpanel" aria-labelledby="v-pills-3-sec-3-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Shift-&-Break-Management.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 3</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-3-sec-4" role="tabpanel" aria-labelledby="v-pills-3-sec-4-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Project-&-Task-Management.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 4</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========= FAQ ADD MOBILE START ========== -->
    <div class="row justify-content-center" id="blok_mobile">
      <div class="col-md-10 text-center faq-head">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-3-sec-1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-3-sec-1"" aria-expanded="false" aria-controls="collapse-3-sec-1">
                Post a Job
              </button>
            </h2>
            <div id="collapse-3-sec-1" class="accordion-collapse collapse" aria-labelledby="heading-3-sec-1"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional
                  boundaries, connecting your business with the brightest IT minds and innovations.
                  Our futuristic approach ensures you not only keep pace, but surge ahead in the
                  digital era.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-3-sec-2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-3-sec-2" aria-expanded="false" aria-controls="collapse-3-sec-2">
                Publish Job
              </button>
            </h2>
            <div id="collapse-3-sec-2" class="accordion-collapse collapse" aria-labelledby="heading-3-sec-2"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional
                  boundaries, connecting your business with the brightest IT minds and innovations.
                  Our futuristic approach ensures you not only keep pace, but surge ahead in the
                  digital era. 2</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-3-sec-3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-3-sec-3" aria-expanded="false" aria-controls="collapse-3-sec-3">
                Create Post
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading-3-sec-3"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional
                  boundaries, connecting your business with the brightest IT minds and innovations.
                  Our futuristic approach ensures you not only keep pace, but surge ahead in the
                  digital era. 3</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-3-sec-4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-3-sec-4" aria-expanded="false" aria-controls="collapse-3-sec-4">
                Edit Job
              </button>
            </h2>
            <div id="collapse-3-sec-4" class="accordion-collapse collapse" aria-labelledby="heading-3-sec-4"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional
                  boundaries, connecting your business with the brightest IT minds and innovations.
                  Our futuristic approach ensures you not only keep pace, but surge ahead in the
                  digital era. 4</p>
              </div>
            </div>
          </div>
        </div>
        <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
      </div>
    </div>
    <!-- FAQ ADD MOBILE CODE END ===== -->
  </div>
</section>
<!-- Trial Section -->

<!-- Trial Section -->
<section id="feature-tabs" class="single-feature-section not-first-feature-section left-section">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10 text-center feature-tabs-head">
              <h2>View Job</h2>
              <p>StaffViz serves a <span>diverse array of industries</span>, each benefiting from our specialized
                  expertise.
                  Covering more than 10 sectors, we deliver targeted solutions for every business need.</p>
          </div>
      </div>
  </div>
  <div class="container-fluid">
      <div class="row align-items-start" id="mobile_hide">
          <div class="col-md-7 px-0">
              <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-4-sec-1" role="tabpanel"
                      aria-labelledby="v-pills-4-sec-1-tab">
                      <div class="box light-purple-box">
                          <img src="{{asset('public/assets/img/Group1707488067.png')}}" alt="Img">
                          <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries,
                              connecting
                              your business with the brightest IT minds and innovations. Our futuristic approach
                              ensures you not only
                              keep pace, but surge ahead in the digital era.</p>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-4-sec-2" role="tabpanel"
                      aria-labelledby="v-pills-4-sec-2-tab">
                      <div class="box light-purple-box">
                          <img src="{{asset('public/assets/img/Onboarding-&-Trainings.png')}}" alt="Img">
                          <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries,
                              connecting
                              your business with the brightest IT minds and innovations. Our futuristic approach
                              ensures you not only
                              keep pace, but surge ahead in the digital era. 2</p>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-4-sec-3" role="tabpanel"
                      aria-labelledby="v-pills-4-sec-3-tab">
                      <div class="box light-purple-box">
                          <img src="{{asset('public/assets/img/Shift-&-Break-Management.png')}}" alt="Img">
                          <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries,
                              connecting
                              your business with the brightest IT minds and innovations. Our futuristic approach
                              ensures you not only
                              keep pace, but surge ahead in the digital era. 3</p>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-4-sec-4" role="tabpanel"
                      aria-labelledby="v-pills-4-sec-4-tab">
                      <div class="box light-purple-box">
                          <img src="{{asset('public/assets/img/Project-&-Task-Management.png')}}" alt="Img">
                          <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries,
                              connecting
                              your business with the brightest IT minds and innovations. Our futuristic approach
                              ensures you not only
                              keep pace, but surge ahead in the digital era. 4</p>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="v-pills-4-sec-5" role="tabpanel"
                      aria-labelledby="v-pills-4-sec-5-tab">
                      <div class="box light-purple-box">
                          <img src="{{asset('public/assets/img/Monitoring-&-Tracking.png')}}" alt="Img">
                          <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries,
                              connecting
                              your business with the brightest IT minds and innovations. Our futuristic approach
                              ensures you not only
                              keep pace, but surge ahead in the digital era. 5</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4" style="margin-left: 10px;">
              <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-4-sec-1-tab" data-bs-toggle="pill"
                      data-bs-target="#v-pills-4-sec-1" type="button" role="tab" aria-controls="v-pills-4-sec-1"
                      aria-selected="true">
                      <div class="img">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M6.769 3.38281H4.72656C4.15788 3.38281 3.69531 3.84556 3.69531 4.41406V6.4565C3.69531 7.025 4.15788 7.48775 4.72656 7.48775H6.769C7.33769 7.48775 7.80025 7.025 7.80025 6.4565V4.41406C7.80025 3.84556 7.33769 3.38281 6.769 3.38281ZM7.23775 6.4565C7.23775 6.71506 7.02737 6.92525 6.769 6.92525H4.72656C4.46819 6.92525 4.25781 6.71506 4.25781 6.4565V4.41406C4.25781 4.1555 4.46819 3.94531 4.72656 3.94531H6.769C7.02737 3.94531 7.23775 4.1555 7.23775 4.41406V6.4565Z"
                                  fill="white" />
                              <path
                                  d="M6.769 16.5117H4.72656C4.15788 16.5117 3.69531 16.9745 3.69531 17.543V19.5854C3.69531 20.1539 4.15788 20.6167 4.72656 20.6167H6.769C7.33769 20.6167 7.80025 20.1539 7.80025 19.5854V17.543C7.80025 16.9743 7.33769 16.5117 6.769 16.5117ZM7.23775 19.5852C7.23775 19.8438 7.02737 20.054 6.769 20.054H4.72656C4.46819 20.054 4.25781 19.8438 4.25781 19.5852V17.543C4.25781 17.2844 4.46819 17.0742 4.72656 17.0742H6.769C7.02737 17.0742 7.23775 17.2844 7.23775 17.543V19.5852Z"
                                  fill="white" />
                              <path
                                  d="M6.769 9.94727H4.72656C4.15788 9.94727 3.69531 10.41 3.69531 10.9785V13.021C3.69531 13.5895 4.15788 14.0522 4.72656 14.0522H6.769C7.33769 14.0522 7.80025 13.5895 7.80025 13.021V10.9785C7.80025 10.4098 7.33769 9.94727 6.769 9.94727ZM7.23775 13.0208C7.23775 13.2793 7.02737 13.4895 6.769 13.4895H4.72656C4.46819 13.4895 4.25781 13.2793 4.25781 13.0208V10.9785C4.25781 10.72 4.46819 10.5098 4.72656 10.5098H6.769C7.02737 10.5098 7.23775 10.72 7.23775 10.9785V13.0208Z"
                                  fill="white" />
                              <path
                                  d="M9.78906 3.94531H19.114C19.2694 3.94531 19.3953 3.81931 19.3953 3.66406C19.3953 3.50881 19.2694 3.38281 19.114 3.38281H9.78906C9.63363 3.38281 9.50781 3.50881 9.50781 3.66406C9.50781 3.81931 9.63381 3.94531 9.78906 3.94531Z"
                                  fill="white" />
                              <path
                                  d="M9.78906 7.48828H20.0224C20.1779 7.48828 20.3037 7.36228 20.3037 7.20703C20.3037 7.05178 20.1779 6.92578 20.0224 6.92578H9.78906C9.63363 6.92578 9.50781 7.05178 9.50781 7.20703C9.50781 7.36228 9.63381 7.48828 9.78906 7.48828Z"
                                  fill="white" />
                              <path
                                  d="M9.78906 17.0742H19.114C19.2694 17.0742 19.3953 16.9482 19.3953 16.793C19.3953 16.6377 19.2694 16.5117 19.114 16.5117H9.78906C9.63363 16.5117 9.50781 16.6377 9.50781 16.793C9.50781 16.9482 9.63381 17.0742 9.78906 17.0742Z"
                                  fill="white" />
                              <path
                                  d="M20.0224 20.0527H9.78906C9.63363 20.0527 9.50781 20.1787 9.50781 20.334C9.50781 20.4892 9.63363 20.6152 9.78906 20.6152H20.0224C20.1779 20.6152 20.3037 20.4892 20.3037 20.334C20.3037 20.1787 20.1779 20.0527 20.0224 20.0527Z"
                                  fill="white" />
                              <path
                                  d="M9.78906 10.5098H19.114C19.2694 10.5098 19.3953 10.3838 19.3953 10.2285C19.3953 10.0733 19.2694 9.94727 19.114 9.94727H9.78906C9.63363 9.94727 9.50781 10.0733 9.50781 10.2285C9.50781 10.3838 9.63381 10.5098 9.78906 10.5098Z"
                                  fill="white" />
                              <path
                                  d="M20.0224 13.4883H9.78906C9.63363 13.4883 9.50781 13.6143 9.50781 13.7695C9.50781 13.9248 9.63363 14.0508 9.78906 14.0508H20.0224C20.1779 14.0508 20.3037 13.9248 20.3037 13.7695C20.3037 13.6143 20.1779 13.4883 20.0224 13.4883Z"
                                  fill="white" />
                          </svg>
                      </div>
                      Description
                  </button>
                  <button class="nav-link" id="v-pills-4-sec-2-tab" data-bs-toggle="pill"
                      data-bs-target="#v-pills-4-sec-2" type="button" role="tab" aria-controls="v-pills-4-sec-2"
                      aria-selected="true">
                      <div class="img">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_6609_16655)">
                                  <path
                                      d="M17.0678 10.7539H5.64062C5.44647 10.7539 5.28906 10.9113 5.28906 11.1055C5.28906 11.2996 5.44647 11.457 5.64062 11.457H17.0679C17.262 11.457 17.4194 11.2996 17.4194 11.1055C17.4194 10.9113 17.262 10.7539 17.0678 10.7539Z"
                                      fill="#A7A7A7" />
                                  <path
                                      d="M17.0678 8.55664H5.64062C5.44647 8.55664 5.28906 8.71405 5.28906 8.9082C5.28906 9.10236 5.44647 9.25977 5.64062 9.25977H17.0679C17.262 9.25977 17.4194 9.10236 17.4194 8.9082C17.4194 8.71405 17.262 8.55664 17.0678 8.55664Z"
                                      fill="#A7A7A7" />
                                  <path
                                      d="M6.76541 3.78125H7.37056C7.56472 3.78125 7.72213 3.62384 7.72213 3.42969C7.72213 3.23553 7.56472 3.07812 7.37056 3.07812H6.76541C6.25077 3.07812 5.82022 3.33317 5.55303 3.7963C5.20691 4.39625 5.2062 5.26503 5.55139 5.86208C5.81769 6.32267 6.24833 6.57622 6.764 6.57622H6.76541H7.49797C7.69213 6.57622 7.84953 6.41881 7.84953 6.22466C7.84953 6.0305 7.69213 5.87309 7.49797 5.87309H6.76513C6.76489 5.87309 6.76461 5.87309 6.76438 5.87309C6.50267 5.87309 6.29938 5.75098 6.16016 5.51019C5.94008 5.12952 5.94092 4.53106 6.16213 4.14772C6.30233 3.90453 6.50534 3.78125 6.76541 3.78125Z"
                                      fill="#A7A7A7" />
                                  <path
                                      d="M9.1351 6.28785C9.20935 6.46461 9.36362 6.57543 9.53776 6.57707H9.54188C9.71612 6.57707 9.86677 6.4715 9.94534 6.29394C9.94927 6.28504 9.95284 6.27599 9.95602 6.2668L10.8996 3.54491C10.9631 3.36144 10.866 3.16119 10.6825 3.09758C10.499 3.03407 10.2988 3.13119 10.2352 3.31461L9.54155 5.31561L8.8479 3.31461C8.78429 3.13115 8.58395 3.03407 8.40057 3.09758C8.2171 3.16119 8.11998 3.36144 8.18354 3.54491L9.12709 6.2668C9.12952 6.27393 9.13219 6.28096 9.1351 6.28785Z"
                                      fill="#A7A7A7" />
                                  <path
                                      d="M10.1871 18.0449C10.3812 18.0449 10.5386 17.8875 10.5386 17.6934C10.5386 17.4992 10.3812 17.3418 10.1871 17.3418H5.64062C5.44647 17.3418 5.28906 17.4992 5.28906 17.6934C5.28906 17.8875 5.44647 18.0449 5.64062 18.0449H10.1871Z"
                                      fill="#A7A7A7" />
                                  <path
                                      d="M20.0914 16.1269C19.9425 16.0023 19.7208 16.0219 19.5962 16.1708L17.0248 19.2428L15.8097 18.2102C15.6618 18.0844 15.4399 18.1024 15.3142 18.2504C15.1884 18.3983 15.2064 18.6202 15.3544 18.7459L16.8393 20.0079C16.9031 20.0621 16.9839 20.0916 17.067 20.0916C17.0769 20.0916 17.0868 20.0912 17.0968 20.0903C17.1901 20.0824 17.2765 20.0375 17.3366 19.9657L20.1353 16.6221C20.2599 16.4733 20.2403 16.2515 20.0914 16.1269Z"
                                      fill="#A7A7A7" />
                                  <path
                                      d="M21.963 14.1641C21.3311 13.532 20.5782 13.0653 19.7568 12.7848V9.81511C19.7568 9.62095 19.5994 9.46355 19.4052 9.46355C19.2111 9.46355 19.0537 9.62095 19.0537 9.81511V12.5939C18.6756 12.5168 18.2871 12.477 17.8924 12.477C17.0906 12.477 16.3139 12.6404 15.5998 12.9506H5.64108C5.44692 12.9506 5.28952 13.108 5.28952 13.3022C5.28952 13.4963 5.44692 13.6537 5.64108 13.6537H14.4049C14.2012 13.8096 14.0063 13.9797 13.8218 14.1642C13.8218 14.1642 13.8218 14.1643 13.8217 14.1643C13.5183 14.4682 13.2564 14.798 13.0351 15.1464H5.64108C5.44692 15.1464 5.28952 15.3038 5.28952 15.498C5.28952 15.6922 5.44692 15.8496 5.64108 15.8496H12.6547C11.9356 17.435 11.97 19.2821 12.7579 20.8426H3.23766V0.703125H15.636L15.6338 2.48231C15.6338 3.29953 16.2987 3.96436 17.116 3.96436H19.0536V8.19309C19.0536 8.38725 19.211 8.54466 19.4051 8.54466C19.5993 8.54466 19.7567 8.38725 19.7567 8.19309L19.7554 3.6765C19.7554 3.45937 19.6404 3.35095 19.548 3.26381C19.5317 3.24844 16.4115 0.268875 16.4115 0.268875L16.3635 0.223172C16.2438 0.108422 16.1306 0 15.9151 0H3.16744C2.81845 0 2.53453 0.284063 2.53453 0.633188V1.974H0.984469C0.635484 1.974 0.351562 2.25806 0.351562 2.60719V11.9538C0.351562 12.148 0.508969 12.3054 0.703125 12.3054C0.897281 12.3054 1.05469 12.148 1.05469 11.9538V2.67712H2.53453V20.9126C2.53453 21.2617 2.81845 21.5458 3.16744 21.5458H13.1785C13.3673 21.8153 13.5816 22.0722 13.8218 22.3128C14.0036 22.4947 14.1957 22.6626 14.3963 22.8166H1.05469V13.5771C1.05469 13.383 0.897281 13.2255 0.703125 13.2255C0.508969 13.2255 0.351562 13.383 0.351562 13.5771V22.8866C0.351562 23.2357 0.635484 23.5198 0.984469 23.5198H15.5844C16.3027 23.8344 17.0849 24 17.8924 24C19.4298 24 20.8754 23.4008 21.9631 22.3127C24.2059 20.0662 24.2059 16.4108 21.963 14.1641ZM16.3386 1.1715L18.5274 3.26123H17.1161C16.6865 3.26123 16.337 2.91183 16.337 2.48273L16.3386 1.1715ZM21.4657 21.8158C20.5109 22.7709 19.2419 23.2969 17.8924 23.2969C17.1711 23.2969 16.4729 23.1465 15.8333 22.8608C15.8187 22.8526 15.8033 22.8457 15.7875 22.8397C15.2482 22.5922 14.7514 22.2482 14.3192 21.8159C12.6759 20.1699 12.4043 17.6627 13.5034 15.7315C13.5338 15.6973 13.5577 15.6572 13.5729 15.6131C13.7784 15.2739 14.027 14.9538 14.3192 14.6611C14.7552 14.225 15.2568 13.8787 15.8016 13.6308C15.8175 13.6248 15.833 13.6179 15.8477 13.6097C16.4834 13.3282 17.1765 13.1801 17.8924 13.1801C18.374 13.1801 18.8453 13.2475 19.2958 13.377C19.3012 13.3788 19.3066 13.3803 19.3121 13.3818C20.1175 13.6164 20.8557 14.0511 21.4655 14.661C23.4348 16.6337 23.4348 19.8433 21.4657 21.8158Z"
                                      fill="#A7A7A7" />
                              </g>
                              <defs>
                                  <clipPath id="clip0_6609_16655">
                                      <rect width="24" height="24" fill="white" />
                                  </clipPath>
                              </defs>
                          </svg>
                      </div>
                      Applicant
                  </button>
                  <button class="nav-link" id="v-pills-4-sec-3-tab" data-bs-toggle="pill"
                      data-bs-target="#v-pills-4-sec-3" type="button" role="tab" aria-controls="v-pills-3"
                      aria-selected="true">
                      <div class="img">
                          <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M26.1201 13.5057L23.0248 10.4104C22.9429 10.3289 22.832 10.2832 22.7164 10.2832C22.6008 10.2832 22.4899 10.3289 22.408 10.4104L15.6005 17.2179C15.5487 17.2707 15.5104 17.3353 15.4889 17.406L14.253 21.7373C14.23 21.8135 14.2283 21.8945 14.2479 21.9716C14.2676 22.0486 14.3079 22.1189 14.3645 22.1748C14.4462 22.257 14.5571 22.3034 14.673 22.3039C14.7137 22.3034 14.7541 22.2975 14.7933 22.2864L19.1245 21.0504C19.1957 21.0298 19.2604 20.9914 19.3126 20.9389L26.1201 14.1314C26.2016 14.0494 26.2474 13.9385 26.2474 13.8229C26.2474 13.7073 26.2016 13.5965 26.1201 13.5145V13.5057ZM15.3117 21.2189L16.1298 18.3598L18.1708 20.4007L15.3117 21.2189ZM19.0064 20.0004L16.528 17.5264L22.7164 11.3401L25.1905 13.8142L19.0064 20.0004Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M15.8777 12.0425L11.4612 16.459L8.61742 13.6153C8.53406 13.54 8.42495 13.4997 8.31268 13.5027C8.20041 13.5056 8.09358 13.5516 8.01431 13.6312C7.93504 13.7107 7.8894 13.8177 7.88683 13.93C7.88427 14.0423 7.92498 14.1513 8.00054 14.2343L11.1549 17.3865C11.2369 17.468 11.3478 17.5138 11.4634 17.5138C11.5789 17.5138 11.6898 17.468 11.7718 17.3865L16.4968 12.6615C16.5723 12.5784 16.6131 12.4695 16.6105 12.3572C16.6079 12.2449 16.5623 12.1379 16.483 12.0584C16.4037 11.9788 16.2969 11.9328 16.1846 11.9298C16.0724 11.9269 15.9633 11.9672 15.8799 12.0425H15.8777Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M19.6875 21.875C19.5715 21.875 19.4602 21.9211 19.3781 22.0031C19.2961 22.0852 19.25 22.1965 19.25 22.3125V23.625H5.25V5.25H15.1309L19.25 9.36906V11.375C19.25 11.491 19.2961 11.6023 19.3781 11.6844C19.4602 11.7664 19.5715 11.8125 19.6875 11.8125C19.8035 11.8125 19.9148 11.7664 19.9969 11.6844C20.0789 11.6023 20.125 11.491 20.125 11.375V9.1875C20.1245 9.07166 20.0781 8.96073 19.9959 8.87906L15.6209 4.50406C15.5393 4.4219 15.4283 4.37549 15.3125 4.375H4.8125C4.69647 4.375 4.58519 4.42109 4.50314 4.50314C4.42109 4.58519 4.375 4.69647 4.375 4.8125V24.0625C4.375 24.1785 4.42109 24.2898 4.50314 24.3719C4.58519 24.4539 4.69647 24.5 4.8125 24.5H19.6875C19.8035 24.5 19.9148 24.4539 19.9969 24.3719C20.0789 24.2898 20.125 24.1785 20.125 24.0625V22.3125C20.125 22.1965 20.0789 22.0852 19.9969 22.0031C19.9148 21.9211 19.8035 21.875 19.6875 21.875Z"
                                  fill="#A7A7A7" />
                          </svg>
                      </div>
                      Applied
                  </button>
                  <button class="nav-link" id="v-pills-4-sec-4-tab" data-bs-toggle="pill"
                      data-bs-target="#v-pills-4-sec-4" type="button" role="tab" aria-controls="v-pills-4-sec-4"
                      aria-selected="true">
                      <div class="img">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M6 14.25C5.30405 14.2492 4.63683 13.9724 4.14472 13.4803C3.65261 12.9882 3.37579 12.3209 3.375 11.625V11.25C3.375 10.5538 3.65156 9.88613 4.14384 9.39384C4.63613 8.90156 5.30381 8.625 6 8.625C6.69619 8.625 7.36387 8.90156 7.85616 9.39384C8.34844 9.88613 8.625 10.5538 8.625 11.25V11.625C8.62421 12.3209 8.34739 12.9882 7.85528 13.4803C7.36317 13.9724 6.69595 14.2492 6 14.25ZM6 9.375C5.5029 9.3756 5.02633 9.57333 4.67483 9.92483C4.32333 10.2763 4.1256 10.7529 4.125 11.25V11.625C4.125 12.1223 4.32254 12.5992 4.67417 12.9508C5.02581 13.3025 5.50272 13.5 6 13.5C6.49728 13.5 6.97419 13.3025 7.32583 12.9508C7.67746 12.5992 7.875 12.1223 7.875 11.625V11.25C7.8744 10.7529 7.67667 10.2763 7.32517 9.92483C6.97367 9.57333 6.4971 9.3756 6 9.375Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M10.5 19.5H9.75V17.25C9.7494 16.7529 9.55167 16.2763 9.20017 15.9248C8.84867 15.5733 8.3721 15.3756 7.875 15.375H4.125C3.6279 15.3756 3.15133 15.5733 2.79983 15.9248C2.44833 16.2763 2.2506 16.7529 2.25 17.25V19.5H1.5V17.25C1.50079 16.5541 1.77761 15.8868 2.26972 15.3947C2.76183 14.9026 3.42905 14.6258 4.125 14.625H7.875C8.57095 14.6258 9.23817 14.9026 9.73028 15.3947C10.2224 15.8868 10.4992 16.5541 10.5 17.25V19.5Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M17.625 16.875C16.9291 16.8742 16.2618 16.5974 15.7697 16.1053C15.2776 15.6132 15.0008 14.9459 15 14.25V13.875C15 13.1788 15.2766 12.5111 15.7688 12.0188C16.2611 11.5266 16.9288 11.25 17.625 11.25C18.3212 11.25 18.9889 11.5266 19.4812 12.0188C19.9734 12.5111 20.25 13.1788 20.25 13.875V14.25C20.2492 14.9459 19.9724 15.6132 19.4803 16.1053C18.9882 16.5974 18.3209 16.8742 17.625 16.875ZM17.625 12C17.1279 12.0006 16.6513 12.1983 16.2998 12.5498C15.9483 12.9013 15.7506 13.3779 15.75 13.875V14.25C15.75 14.7473 15.9475 15.2242 16.2992 15.5758C16.6508 15.9275 17.1277 16.125 17.625 16.125C18.1223 16.125 18.5992 15.9275 18.9508 15.5758C19.3025 15.2242 19.5 14.7473 19.5 14.25V13.875C19.4994 13.3779 19.3017 12.9013 18.9502 12.5498C18.5987 12.1983 18.1221 12.0006 17.625 12Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M22.125 22.125H21.375V19.875C21.3744 19.3779 21.1767 18.9013 20.8252 18.5498C20.4737 18.1983 19.9971 18.0006 19.5 18H15.75C15.2529 18.0006 14.7763 18.1983 14.4248 18.5498C14.0733 18.9013 13.8756 19.3779 13.875 19.875V22.125H13.125V19.875C13.1258 19.1791 13.4026 18.5118 13.8947 18.0197C14.3868 17.5276 15.0541 17.2508 15.75 17.25H19.5C20.1959 17.2508 20.8632 17.5276 21.3553 18.0197C21.8474 18.5118 22.1242 19.1791 22.125 19.875V22.125Z"
                                  fill="#A7A7A7" />
                              <path d="M22.5 19.125H23.625V19.875H22.5V19.125Z" fill="#A7A7A7" />
                              <path d="M0.375 19.125H12.75V19.875H0.375V19.125Z" fill="#A7A7A7" />
                              <path
                                  d="M10.125 12C10.0727 12.0002 10.021 11.9895 9.97315 11.9686C9.92528 11.9476 9.88231 11.9169 9.847 11.8784C9.81169 11.8399 9.78483 11.7944 9.76812 11.7449C9.75142 11.6954 9.74524 11.6429 9.75 11.5909L9.95625 9.32288C9.44016 8.93308 9.01869 8.43183 8.72326 7.85649C8.42783 7.28115 8.26606 6.64656 8.25 6C8.25 3.312 11.1098 1.125 14.625 1.125C18.1403 1.125 21 3.312 21 6C21 8.688 18.1403 10.875 14.625 10.875C13.7441 10.8777 12.8688 10.7349 12.0345 10.4524L10.3721 11.9074C10.3037 11.9672 10.2159 12.0001 10.125 12ZM14.625 1.875C11.5234 1.875 9 3.72563 9 6C9.02105 6.56612 9.17449 7.11943 9.44801 7.61555C9.72153 8.11166 10.1075 8.53676 10.575 8.85675C10.6255 8.89522 10.6654 8.94589 10.691 9.004C10.7166 9.06211 10.727 9.12577 10.7213 9.189L10.5814 10.7265L11.7045 9.74325C11.7555 9.69865 11.8177 9.66872 11.8844 9.65664C11.9511 9.64455 12.0198 9.65077 12.0833 9.67463C12.8966 9.97617 13.7576 10.1287 14.625 10.125C17.7266 10.125 20.25 8.27437 20.25 6C20.25 3.72563 17.7266 1.875 14.625 1.875Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M14.625 6.375C14.8321 6.375 15 6.20711 15 6C15 5.79289 14.8321 5.625 14.625 5.625C14.4179 5.625 14.25 5.79289 14.25 6C14.25 6.20711 14.4179 6.375 14.625 6.375Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M16.5 6.375C16.7071 6.375 16.875 6.20711 16.875 6C16.875 5.79289 16.7071 5.625 16.5 5.625C16.2929 5.625 16.125 5.79289 16.125 6C16.125 6.20711 16.2929 6.375 16.5 6.375Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M12.75 6.375C12.9571 6.375 13.125 6.20711 13.125 6C13.125 5.79289 12.9571 5.625 12.75 5.625C12.5429 5.625 12.375 5.79289 12.375 6C12.375 6.20711 12.5429 6.375 12.75 6.375Z"
                                  fill="#A7A7A7" />
                          </svg>
                      </div>
                      Interview
                  </button>
                  <button class="nav-link" id="v-pills-4-sec-5-tab" data-bs-toggle="pill"
                      data-bs-target="#v-pills-4-sec-5" type="button" role="tab" aria-controls="v-pills-4-sec-5"
                      aria-selected="true">
                      <div class="img">
                          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M2.86261 7.96547C2.77547 7.87823 2.65453 7.82812 2.53125 7.82812C2.40797 7.82812 2.28708 7.87828 2.19984 7.96547C2.11261 8.05266 2.0625 8.17359 2.0625 8.29688C2.0625 8.42016 2.11261 8.54109 2.19984 8.62823C2.28703 8.71547 2.40797 8.76562 2.53125 8.76562C2.65453 8.76562 2.77547 8.71547 2.86261 8.62823C2.94984 8.54109 3 8.42016 3 8.29688C3 8.17359 2.94984 8.05266 2.86261 7.96547Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M20.5312 0H11.0469C10.788 0 10.5781 0.209906 10.5781 0.46875C10.5781 0.727594 10.788 0.9375 11.0469 0.9375H20.5312C20.7897 0.9375 21 1.14778 21 1.40625V22.5938C21 22.8522 20.7897 23.0625 20.5312 23.0625H3.46875C3.21028 23.0625 3 22.8522 3 22.5938V10.0469C3 9.78802 2.79009 9.57811 2.53125 9.57811C2.27241 9.57811 2.0625 9.78802 2.0625 10.0469V22.5938C2.0625 23.3692 2.69334 24 3.46875 24H20.5312C21.3067 24 21.9375 23.3692 21.9375 22.5938V1.40625C21.9375 0.630844 21.3067 0 20.5312 0Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M11.9986 1.875C11.6797 1.875 11.3592 1.89937 11.0459 1.94737C10.7901 1.98666 10.6144 2.22586 10.6536 2.48175C10.6929 2.73764 10.9322 2.91305 11.188 2.87405C11.4544 2.83317 11.7271 2.8125 11.9986 2.8125C14.9194 2.8125 17.2956 5.18869 17.2956 8.10942C17.2956 9.40645 16.8267 10.5958 16.0499 11.5177C15.7062 10.9266 15.2367 10.4168 14.6668 10.0213C14.3342 9.79045 13.9769 9.60624 13.6028 9.46988C14.0298 9.05255 14.2955 8.47097 14.2955 7.82822V7.37119C14.2955 6.10463 13.2651 5.07427 11.9986 5.07427C10.7321 5.07427 9.70176 6.10463 9.70176 7.37119V7.82822C9.70176 8.47097 9.96745 9.05255 10.3944 9.46988C10.0204 9.60624 9.66309 9.79045 9.33046 10.0213C8.75788 10.4187 8.28651 10.9314 7.94235 11.526C7.35046 10.8227 6.93674 9.95756 6.77488 8.99245C6.73209 8.73722 6.49016 8.565 6.23507 8.6077C5.97974 8.6505 5.80748 8.89219 5.85027 9.14752C6.0913 10.5847 6.83741 11.9002 7.95121 12.8516C9.07766 13.8139 10.5151 14.3439 11.9986 14.3439C15.4363 14.3439 18.233 11.5471 18.233 8.10947C18.233 4.6718 15.4363 1.875 11.9986 1.875ZM10.6393 7.37114C10.6393 6.62156 11.2491 6.01172 11.9986 6.01172C12.7482 6.01172 13.358 6.62156 13.358 7.37114V7.82817C13.358 8.5777 12.7482 9.18755 11.9986 9.18755C11.2491 9.18755 10.6393 8.5777 10.6393 7.82817V7.37114ZM11.9986 13.4063C10.7295 13.4063 9.55626 12.9632 8.63798 12.2119C9.26741 10.9344 10.5542 10.125 11.9986 10.125C13.4401 10.125 14.7244 10.9311 15.3553 12.2039C14.4409 12.9549 13.2715 13.4063 11.9986 13.4063Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M16.3281 18.6562H9.67188C9.41303 18.6562 9.20312 18.8662 9.20312 19.125C9.20312 19.3838 9.41303 19.5938 9.67188 19.5938H16.3281C16.587 19.5938 16.7969 19.3838 16.7969 19.125C16.7969 18.8662 16.587 18.6562 16.3281 18.6562Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M8.00328 16.1686C7.91609 16.0814 7.79516 16.0312 7.67188 16.0312C7.54859 16.0312 7.42766 16.0814 7.34047 16.1686C7.25328 16.2558 7.20312 16.3767 7.20312 16.5C7.20312 16.6237 7.25333 16.7442 7.34047 16.8314C7.42766 16.9186 7.54859 16.9688 7.67188 16.9688C7.79516 16.9688 7.91609 16.9186 8.00328 16.8314C8.09094 16.7442 8.14062 16.6233 8.14062 16.5C8.14062 16.3767 8.09094 16.2558 8.00328 16.1686Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M8.00328 18.7936C7.91609 18.7064 7.79563 18.6562 7.67188 18.6562C7.54859 18.6562 7.42766 18.7064 7.34047 18.7936C7.25328 18.8808 7.20312 19.0017 7.20312 19.125C7.20312 19.2487 7.25333 19.3692 7.34047 19.4564C7.42766 19.5436 7.54859 19.5938 7.67188 19.5938C7.79516 19.5938 7.91609 19.5436 8.00328 19.4564C8.09094 19.3692 8.14062 19.2488 8.14062 19.125C8.14062 19.0017 8.09094 18.8808 8.00328 18.7936Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M16.3281 16.0312H9.67188C9.41303 16.0312 9.20312 16.2412 9.20312 16.5C9.20312 16.7588 9.41303 16.9688 9.67188 16.9688H16.3281C16.587 16.9688 16.7969 16.7588 16.7969 16.5C16.7969 16.2412 16.587 16.0312 16.3281 16.0312Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M7.5778 2.7017C7.39466 2.5187 7.09794 2.5187 6.91485 2.7017L5.38832 4.22823L4.86664 3.70656C4.6835 3.52356 4.38679 3.52356 4.20369 3.70656C4.02064 3.88966 4.02064 4.18647 4.20369 4.36952L5.05682 5.22264C5.14836 5.31414 5.26827 5.35994 5.38827 5.35994C5.50827 5.35994 5.62818 5.31414 5.71977 5.22269L7.5778 3.36466C7.76085 3.18156 7.76085 2.88475 7.5778 2.7017Z"
                                  fill="#A7A7A7" />
                              <path
                                  d="M5.90625 0C3.7868 0 2.0625 1.7243 2.0625 3.84375C2.0625 5.9632 3.7868 7.6875 5.90625 7.6875C8.0257 7.6875 9.75 5.9632 9.75 3.84375C9.75 1.7243 8.0257 0 5.90625 0ZM5.90625 6.75C4.30373 6.75 3 5.44627 3 3.84375C3 2.24123 4.30373 0.9375 5.90625 0.9375C7.50877 0.9375 8.8125 2.24123 8.8125 3.84375C8.8125 5.44627 7.50877 6.75 5.90625 6.75Z"
                                  fill="#A7A7A7" />
                          </svg>
                      </div>
                      Hired
                  </button>
              </div>
              <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
          </div>
      </div>
      <!-- ========= FAQ ADD MOBILE START ========== -->
      <div class="row justify-content-center" id="blok_mobile">
          <div class="col-md-10 text-center faq-head">
              <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-4-sec-1">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-4-sec-1" aria-expanded="false"
                              aria-controls="collapse-4-sec-1">
                              Description
                          </button>
                      </h2>
                      <div id="collapse-4-sec-1" class="accordion-collapse collapse" aria-labelledby="heading-4-sec-1"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>World leader in IT solutions and talent acquisition. We transcend traditional
                                  boundaries, connecting
                                  your business with the brightest IT minds and innovations. Our futuristic approach
                                  ensures you not
                                  only keep pace, but surge ahead in the digital era.</p>
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-4-sec-2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-4-sec-2" aria-expanded="false"
                              aria-controls="collapse-4-sec-2">
                              Applicant
                          </button>
                      </h2>
                      <div id="collapse-4-sec-2" class="accordion-collapse collapse" aria-labelledby="heading-4-sec-2"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>World leader in IT solutions and talent acquisition. We transcend traditional
                                  boundaries, connecting
                                  your business with the brightest IT minds and innovations. Our futuristic approach
                                  ensures you not
                                  only keep pace, but surge ahead in the digital era. 2</p>
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-4-sec-3">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-4-sec-3" aria-expanded="false"
                              aria-controls="collapse-4-sec-3">
                              Applied
                          </button>
                      </h2>
                      <div id="collapse-4-sec-3" class="accordion-collapse collapse" aria-labelledby="heading-4-sec-3"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>World leader in IT solutions and talent acquisition. We transcend traditional
                                  boundaries, connecting
                                  your business with the brightest IT minds and innovations. Our futuristic approach
                                  ensures you not
                                  only keep pace, but surge ahead in the digital era. 3</p>
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-4-sec-4">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-4-sec-4" aria-expanded="false"
                              aria-controls="collapse-4-sec-4">
                              Interview
                          </button>
                      </h2>
                      <div id="collapse-4-sec-4" class="accordion-collapse collapse" aria-labelledby="heading-4-sec-4"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>World leader in IT solutions and talent acquisition. We transcend traditional
                                  boundaries, connecting
                                  your business with the brightest IT minds and innovations. Our futuristic approach
                                  ensures you not
                                  only keep pace, but surge ahead in the digital era. 4</p>
                          </div>
                      </div>
                  </div>
                  <div class="accordion-item">
                      <h2 class="accordion-header" id="heading-4-sec-5">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse-4-sec-5" aria-expanded="false"
                              aria-controls="collapse-4-sec-5">
                              Hired
                          </button>
                      </h2>
                      <div id="collapse-4-sec-5" class="accordion-collapse collapse" aria-labelledby="heading-4-sec-5"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                              <p>World leader in IT solutions and talent acquisition. We transcend traditional
                                  boundaries, connecting
                                  your business with the brightest IT minds and innovations. Our futuristic approach
                                  ensures you not
                                  only keep pace, but surge ahead in the digital era. 4</p>
                          </div>
                      </div>
                  </div>
              </div>
              <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
          </div>
      </div>
      <!-- FAQ ADD MOBILE CODE END ===== -->
  </div>
</section>
<!-- Trial Section -->

<!-- Trial Section -->
<section id="feature-tabs" class="single-feature-section not-first-feature-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center feature-tabs-head">
        <h2>Recruitment Life Cycle</h2>
        <p>StaffViz serves a <span>diverse array of industries</span>, each benefiting from our specialized
          expertise.
          Covering more than 10 sectors, we deliver targeted solutions for every business need.</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-between align-items-start" id="mobile_hide">
      <div class="col-xl-3 col-lg-4 col-md-5">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-5-sec-1-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-5-sec-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_6609_16838)">
                  <path d="M22.8 0.4H16.3628C16.1918 0.39996 16.0227 0.436486 15.8669 0.50713C15.7111 0.577773 15.5723 0.680901 15.4596 0.8096L13.374 3.1936C13.268 3.01283 13.1274 2.85472 12.9603 2.7283C12.7932 2.60187 12.6028 2.50962 12.4 2.4568V0.4C12.4 0.293913 12.3579 0.192172 12.2828 0.117157C12.2078 0.0421427 12.1061 0 12 0C11.8939 0 11.7922 0.0421427 11.7172 0.117157C11.6421 0.192172 11.6 0.293913 11.6 0.4V2.4568C11.257 2.54411 10.9528 2.74322 10.7356 3.02269C10.5183 3.30215 10.4004 3.64603 10.4004 4C10.4004 4.35397 10.5183 4.69785 10.7356 4.97731C10.9528 5.25678 11.257 5.45589 11.6 5.5432V7.6568C11.1907 7.76396 10.8405 8.02888 10.626 8.3936L8.54 6.0092C8.4273 5.88057 8.28841 5.77752 8.13264 5.70695C7.97687 5.63637 7.80781 5.59991 7.6368 5.6H1.2C0.88174 5.6 0.576515 5.72643 0.351472 5.95147C0.126428 6.17652 0 6.48174 0 6.8L0 11.6C0 11.9183 0.126428 12.2235 0.351472 12.4485C0.576515 12.6736 0.88174 12.8 1.2 12.8H7.6368C7.80784 12.8 7.97692 12.7635 8.13269 12.6929C8.28847 12.6222 8.42734 12.5191 8.54 12.3904L10.626 10.0064C10.8405 10.3711 11.1907 10.636 11.6 10.7432V12.8568C11.257 12.9441 10.9528 13.1432 10.7356 13.4227C10.5183 13.7022 10.4004 14.046 10.4004 14.4C10.4004 14.754 10.5183 15.0978 10.7356 15.3773C10.9528 15.6568 11.257 15.8559 11.6 15.9432V18.0568C11.1907 18.164 10.8405 18.4289 10.626 18.7936L8.54 16.4092C8.4273 16.2806 8.28841 16.1775 8.13264 16.1069C7.97687 16.0364 7.80781 15.9999 7.6368 16H1.2C0.88174 16 0.576515 16.1264 0.351472 16.3515C0.126428 16.5765 0 16.8817 0 17.2L0 22C0 22.3183 0.126428 22.6235 0.351472 22.8485C0.576515 23.0736 0.88174 23.2 1.2 23.2H7.6368C7.80784 23.2 7.97692 23.1635 8.13269 23.0929C8.28847 23.0222 8.42734 22.9191 8.54 22.7904L10.626 20.4064C10.8405 20.7711 11.1907 21.036 11.6 21.1432V23.6C11.6 23.7061 11.6421 23.8078 11.7172 23.8828C11.7922 23.9579 11.8939 24 12 24C12.1061 24 12.2078 23.9579 12.2828 23.8828C12.3579 23.8078 12.4 23.7061 12.4 23.6V21.1432C12.743 21.0559 13.0472 20.8568 13.2644 20.5773C13.4817 20.2978 13.5996 19.954 13.5996 19.6C13.5996 19.246 13.4817 18.9022 13.2644 18.6227C13.0472 18.3432 12.743 18.1441 12.4 18.0568V15.9432C12.6028 15.8904 12.7932 15.7981 12.9603 15.6717C13.1274 15.5453 13.268 15.3872 13.374 15.2064L15.46 17.5908C15.5727 17.7194 15.7115 17.8224 15.8672 17.893C16.0229 17.9635 16.1919 18 16.3628 18H22.8C23.1183 18 23.4235 17.8736 23.6485 17.6485C23.8736 17.4235 24 17.1183 24 16.8V12C24 11.6817 23.8736 11.3765 23.6485 11.1515C23.4235 10.9264 23.1183 10.8 22.8 10.8H16.3628C16.1918 10.8 16.0227 10.8365 15.8669 10.9071C15.7111 10.9778 15.5723 11.0809 15.4596 11.2096L13.374 13.5936C13.268 13.4128 13.1274 13.2547 12.9603 13.1283C12.7932 13.0019 12.6028 12.9096 12.4 12.8568V10.7432C12.743 10.6559 13.0472 10.4568 13.2644 10.1773C13.4817 9.89785 13.5996 9.55397 13.5996 9.2C13.5996 8.84603 13.4817 8.50215 13.2644 8.22269C13.0472 7.94322 12.743 7.74411 12.4 7.6568V5.5432C12.6028 5.49038 12.7932 5.39813 12.9603 5.2717C13.1274 5.14528 13.268 4.98717 13.374 4.8064L15.46 7.1908C15.5727 7.31938 15.7115 7.4224 15.8672 7.49297C16.0229 7.56354 16.1919 7.60003 16.3628 7.6H22.8C23.1183 7.6 23.4235 7.47357 23.6485 7.24853C23.8736 7.02348 24 6.71826 24 6.4V1.6C24 1.28174 23.8736 0.976516 23.6485 0.751472C23.4235 0.526428 23.1183 0.4 22.8 0.4ZM7.9384 11.8632C7.90081 11.9062 7.85445 11.9407 7.80242 11.9643C7.7504 11.9879 7.69392 12.0001 7.6368 12H1.2C1.09391 12 0.992172 11.9579 0.917157 11.8828C0.842143 11.8078 0.8 11.7061 0.8 11.6V6.8C0.8 6.69391 0.842143 6.59217 0.917157 6.51716C0.992172 6.44214 1.09391 6.4 1.2 6.4H7.6368C7.69383 6.39995 7.7502 6.4121 7.80215 6.43562C7.8541 6.45915 7.90042 6.49351 7.938 6.5364L10.2684 9.2L7.9384 11.8632ZM7.9384 22.2632C7.90081 22.3062 7.85445 22.3407 7.80242 22.3643C7.7504 22.3879 7.69392 22.4001 7.6368 22.4H1.2C1.09391 22.4 0.992172 22.3579 0.917157 22.2828C0.842143 22.2078 0.8 22.1061 0.8 22V17.2C0.8 17.0939 0.842143 16.9922 0.917157 16.9172C0.992172 16.8421 1.09391 16.8 1.2 16.8H7.6368C7.69383 16.8 7.7502 16.8121 7.80215 16.8356C7.8541 16.8591 7.90042 16.8935 7.938 16.9364L10.2684 19.6L7.9384 22.2632ZM12.8 19.6C12.8 19.7582 12.7531 19.9129 12.6652 20.0445C12.5773 20.176 12.4523 20.2786 12.3061 20.3391C12.16 20.3997 11.9991 20.4155 11.8439 20.3846C11.6887 20.3538 11.5462 20.2776 11.4343 20.1657C11.3224 20.0538 11.2462 19.9113 11.2154 19.7561C11.1845 19.6009 11.2003 19.44 11.2609 19.2939C11.3214 19.1477 11.424 19.0227 11.5555 18.9348C11.6871 18.8469 11.8418 18.8 12 18.8C12.2122 18.8 12.4157 18.8843 12.5657 19.0343C12.7157 19.1843 12.8 19.3878 12.8 19.6ZM16.0616 11.7368C16.0991 11.6938 16.1454 11.6594 16.1974 11.6358C16.2493 11.6122 16.3057 11.6 16.3628 11.6H22.8C22.9061 11.6 23.0078 11.6421 23.0828 11.7172C23.1579 11.7922 23.2 11.8939 23.2 12V16.8C23.2 16.9061 23.1579 17.0078 23.0828 17.0828C23.0078 17.1579 22.9061 17.2 22.8 17.2H16.3628C16.3058 17.2 16.2495 17.1878 16.1977 17.1643C16.1458 17.1408 16.0995 17.1064 16.062 17.0636L13.7316 14.4L16.0616 11.7368ZM12.8 14.4C12.8 14.5582 12.7531 14.7129 12.6652 14.8445C12.5773 14.976 12.4523 15.0786 12.3061 15.1391C12.16 15.1997 11.9991 15.2155 11.8439 15.1846C11.6887 15.1538 11.5462 15.0776 11.4343 14.9657C11.3224 14.8538 11.2462 14.7113 11.2154 14.5561C11.1845 14.4009 11.2003 14.24 11.2609 14.0939C11.3214 13.9477 11.424 13.8227 11.5555 13.7348C11.6871 13.6469 11.8418 13.6 12 13.6C12.2122 13.6 12.4157 13.6843 12.5657 13.8343C12.7157 13.9843 12.8 14.1878 12.8 14.4ZM12.8 9.2C12.8 9.35822 12.7531 9.5129 12.6652 9.64446C12.5773 9.77602 12.4523 9.87855 12.3061 9.9391C12.16 9.99965 11.9991 10.0155 11.8439 9.98463C11.6887 9.95376 11.5462 9.87757 11.4343 9.76569C11.3224 9.6538 11.2462 9.51126 11.2154 9.35607C11.1845 9.20089 11.2003 9.04003 11.2609 8.89385C11.3214 8.74767 11.424 8.62273 11.5555 8.53482C11.6871 8.44692 11.8418 8.4 12 8.4C12.2122 8.4 12.4157 8.48429 12.5657 8.63431C12.7157 8.78434 12.8 8.98783 12.8 9.2ZM12 4.8C11.8418 4.8 11.6871 4.75308 11.5555 4.66518C11.424 4.57727 11.3214 4.45233 11.2609 4.30615C11.2003 4.15997 11.1845 3.99911 11.2154 3.84393C11.2462 3.68874 11.3224 3.5462 11.4343 3.43431C11.5462 3.32243 11.6887 3.24624 11.8439 3.21537C11.9991 3.1845 12.16 3.20035 12.3061 3.2609C12.4523 3.32145 12.5773 3.42398 12.6652 3.55554C12.7531 3.6871 12.8 3.84177 12.8 4C12.8 4.21217 12.7157 4.41566 12.5657 4.56569C12.4157 4.71571 12.2122 4.8 12 4.8ZM23.2 6.4C23.2 6.50609 23.1579 6.60783 23.0828 6.68284C23.0078 6.75786 22.9061 6.8 22.8 6.8H16.3628C16.3058 6.79999 16.2495 6.78782 16.1977 6.7643C16.1458 6.74077 16.0995 6.70644 16.062 6.6636L13.7316 4L16.0616 1.3368C16.0991 1.29383 16.1454 1.2594 16.1974 1.2358C16.2493 1.21221 16.3057 1.2 16.3628 1.2H22.8C22.9061 1.2 23.0078 1.24214 23.0828 1.31716C23.1579 1.39217 23.2 1.49391 23.2 1.6V6.4Z" fill="white"/>
                  <path d="M16.7984 3.60078H17.1984C17.3045 3.60078 17.4063 3.55864 17.4813 3.48362C17.5563 3.40861 17.5984 3.30687 17.5984 3.20078C17.5984 3.09469 17.5563 2.99295 17.4813 2.91794C17.4063 2.84292 17.3045 2.80078 17.1984 2.80078H16.7984C16.6924 2.80078 16.5906 2.84292 16.5156 2.91794C16.4406 2.99295 16.3984 3.09469 16.3984 3.20078C16.3984 3.30687 16.4406 3.40861 16.5156 3.48362C16.5906 3.55864 16.6924 3.60078 16.7984 3.60078Z" fill="white"/>
                  <path d="M21.9984 2.80078H18.7984C18.6924 2.80078 18.5906 2.84292 18.5156 2.91794C18.4406 2.99295 18.3984 3.09469 18.3984 3.20078C18.3984 3.30687 18.4406 3.40861 18.5156 3.48362C18.5906 3.55864 18.6924 3.60078 18.7984 3.60078H21.9984C22.1045 3.60078 22.2063 3.55864 22.2813 3.48362C22.3563 3.40861 22.3984 3.30687 22.3984 3.20078C22.3984 3.09469 22.3563 2.99295 22.2813 2.91794C22.2063 2.84292 22.1045 2.80078 21.9984 2.80078Z" fill="white"/>
                  <path d="M19.9984 4.40039H16.7984C16.6924 4.40039 16.5906 4.44253 16.5156 4.51755C16.4406 4.59256 16.3984 4.6943 16.3984 4.80039C16.3984 4.90648 16.4406 5.00822 16.5156 5.08323C16.5906 5.15825 16.6924 5.20039 16.7984 5.20039H19.9984C20.1045 5.20039 20.2063 5.15825 20.2813 5.08323C20.3563 5.00822 20.3984 4.90648 20.3984 4.80039C20.3984 4.6943 20.3563 4.59256 20.2813 4.51755C20.2063 4.44253 20.1045 4.40039 19.9984 4.40039Z" fill="white"/>
                  <path d="M16.7984 13.9992H17.1984C17.3045 13.9992 17.4063 13.9571 17.4813 13.8821C17.5563 13.807 17.5984 13.7053 17.5984 13.5992C17.5984 13.4931 17.5563 13.3914 17.4813 13.3164C17.4063 13.2414 17.3045 13.1992 17.1984 13.1992H16.7984C16.6924 13.1992 16.5906 13.2414 16.5156 13.3164C16.4406 13.3914 16.3984 13.4931 16.3984 13.5992C16.3984 13.7053 16.4406 13.807 16.5156 13.8821C16.5906 13.9571 16.6924 13.9992 16.7984 13.9992Z" fill="white"/>
                  <path d="M18.7984 13.9992H21.9984C22.1045 13.9992 22.2063 13.9571 22.2813 13.8821C22.3563 13.807 22.3984 13.7053 22.3984 13.5992C22.3984 13.4931 22.3563 13.3914 22.2813 13.3164C22.2063 13.2414 22.1045 13.1992 21.9984 13.1992H18.7984C18.6924 13.1992 18.5906 13.2414 18.5156 13.3164C18.4406 13.3914 18.3984 13.4931 18.3984 13.5992C18.3984 13.7053 18.4406 13.807 18.5156 13.8821C18.5906 13.9571 18.6924 13.9992 18.7984 13.9992Z" fill="white"/>
                  <path d="M16.7984 15.6008H19.9984C20.1045 15.6008 20.2063 15.5586 20.2813 15.4836C20.3563 15.4086 20.3984 15.3069 20.3984 15.2008C20.3984 15.0947 20.3563 14.993 20.2813 14.9179C20.2063 14.8429 20.1045 14.8008 19.9984 14.8008H16.7984C16.6924 14.8008 16.5906 14.8429 16.5156 14.9179C16.4406 14.993 16.3984 15.0947 16.3984 15.2008C16.3984 15.3069 16.4406 15.4086 16.5156 15.4836C16.5906 15.5586 16.6924 15.6008 16.7984 15.6008Z" fill="white"/>
                  <path d="M2.00156 8.8H2.40156C2.50765 8.8 2.60939 8.75786 2.68441 8.68284C2.75942 8.60783 2.80156 8.50609 2.80156 8.4C2.80156 8.29391 2.75942 8.19217 2.68441 8.11716C2.60939 8.04214 2.50765 8 2.40156 8H2.00156C1.89548 8 1.79373 8.04214 1.71872 8.11716C1.64371 8.19217 1.60156 8.29391 1.60156 8.4C1.60156 8.50609 1.64371 8.60783 1.71872 8.68284C1.79373 8.75786 1.89548 8.8 2.00156 8.8Z" fill="white"/>
                  <path d="M7.20156 8H4.00156C3.89548 8 3.79373 8.04214 3.71872 8.11716C3.64371 8.19217 3.60156 8.29391 3.60156 8.4C3.60156 8.50609 3.64371 8.60783 3.71872 8.68284C3.79373 8.75786 3.89548 8.8 4.00156 8.8H7.20156C7.30765 8.8 7.40939 8.75786 7.48441 8.68284C7.55942 8.60783 7.60156 8.50609 7.60156 8.4C7.60156 8.29391 7.55942 8.19217 7.48441 8.11716C7.40939 8.04214 7.30765 8 7.20156 8Z" fill="white"/>
                  <path d="M5.20156 9.59961H2.00156C1.89548 9.59961 1.79373 9.64175 1.71872 9.71677C1.64371 9.79178 1.60156 9.89352 1.60156 9.99961C1.60156 10.1057 1.64371 10.2074 1.71872 10.2825C1.79373 10.3575 1.89548 10.3996 2.00156 10.3996H5.20156C5.30765 10.3996 5.40939 10.3575 5.48441 10.2825C5.55942 10.2074 5.60156 10.1057 5.60156 9.99961C5.60156 9.89352 5.55942 9.79178 5.48441 9.71677C5.40939 9.64175 5.30765 9.59961 5.20156 9.59961Z" fill="white"/>
                  <path d="M2.00156 19.2004H2.40156C2.50765 19.2004 2.60939 19.1582 2.68441 19.0832C2.75942 19.0082 2.80156 18.9065 2.80156 18.8004C2.80156 18.6943 2.75942 18.5926 2.68441 18.5175C2.60939 18.4425 2.50765 18.4004 2.40156 18.4004H2.00156C1.89548 18.4004 1.79373 18.4425 1.71872 18.5175C1.64371 18.5926 1.60156 18.6943 1.60156 18.8004C1.60156 18.9065 1.64371 19.0082 1.71872 19.0832C1.79373 19.1582 1.89548 19.2004 2.00156 19.2004Z" fill="white"/>
                  <path d="M7.20156 18.4004H4.00156C3.89548 18.4004 3.79373 18.4425 3.71872 18.5175C3.64371 18.5926 3.60156 18.6943 3.60156 18.8004C3.60156 18.9065 3.64371 19.0082 3.71872 19.0832C3.79373 19.1582 3.89548 19.2004 4.00156 19.2004H7.20156C7.30765 19.2004 7.40939 19.1582 7.48441 19.0832C7.55942 19.0082 7.60156 18.9065 7.60156 18.8004C7.60156 18.6943 7.55942 18.5926 7.48441 18.5175C7.40939 18.4425 7.30765 18.4004 7.20156 18.4004Z" fill="white"/>
                  <path d="M5.20156 20H2.00156C1.89548 20 1.79373 20.0421 1.71872 20.1172C1.64371 20.1922 1.60156 20.2939 1.60156 20.4C1.60156 20.5061 1.64371 20.6078 1.71872 20.6828C1.79373 20.7579 1.89548 20.8 2.00156 20.8H5.20156C5.30765 20.8 5.40939 20.7579 5.48441 20.6828C5.55942 20.6078 5.60156 20.5061 5.60156 20.4C5.60156 20.2939 5.55942 20.1922 5.48441 20.1172C5.40939 20.0421 5.30765 20 5.20156 20Z" fill="white"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_6609_16838">
                  <rect width="24" height="24" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>
            </div>
            Applicant Stage
          </button>
          <button class="nav-link" id="v-pills-5-sec-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5-sec-2"
            type="button" role="tab" aria-controls="v-pills-2" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8475 3.13111C21.0082 3.29187 21.0913 3.48989 21.0913 3.71864V22.8398C21.0913 23.2973 20.7174 23.6713 20.2599 23.6713H3.74324C3.2831 23.6713 2.91016 23.2969 2.91016 22.8398V1.16321C2.91016 0.703443 3.28352 0.330078 3.74324 0.330078H17.7028C17.9315 0.330078 18.1295 0.413184 18.2903 0.573937L20.8475 3.13111ZM17.514 1.08302H3.74324C3.699 1.08302 3.6631 1.11893 3.6631 1.16321V22.8398C3.6631 22.8834 3.69938 22.9183 3.74324 22.9183H20.2599C20.3031 22.9183 20.3384 22.883 20.3384 22.8398V3.9074H18.1188C17.7873 3.9074 17.514 3.63413 17.514 3.3026V1.08302ZM19.806 3.15445L18.267 1.61544V3.15445H19.806ZM8.11157 8.02547L6.14729 7.1473C6.01176 7.08674 5.92446 6.9521 5.92446 6.80363C5.92446 6.65516 6.01176 6.52052 6.14729 6.45996L11.6134 4.01629C11.7111 3.97257 11.8229 3.97257 11.9207 4.01629L17.3868 6.45996C17.5223 6.52052 17.6096 6.65516 17.6096 6.80363C17.6096 6.9521 17.5223 7.08674 17.3868 7.1473L15.4225 8.02547L17.3868 8.90358C17.5223 8.9642 17.6096 9.09883 17.6096 9.2473C17.6096 9.39577 17.5223 9.53036 17.3868 9.59097L15.4225 10.4691L17.3868 11.3473C17.5223 11.4079 17.6096 11.5425 17.6096 11.6909C17.6096 11.8394 17.5223 11.974 17.3868 12.0346L11.9207 14.4783C11.8229 14.522 11.7111 14.522 11.6134 14.4783L6.14729 12.0346C6.01176 11.974 5.92446 11.8394 5.92446 11.6909C5.92446 11.5425 6.01176 11.4079 6.14729 11.3473L8.11157 10.4691L6.14729 9.59097C6.01176 9.53036 5.92446 9.39577 5.92446 9.2473C5.92446 9.09883 6.01176 8.9642 6.14729 8.90358L8.11157 8.02547ZM14.5001 8.43784L11.9207 9.59097C11.8229 9.63469 11.7111 9.63469 11.6134 9.59097L9.03402 8.43784L7.22338 9.2473L11.7671 11.2785L16.3107 9.2473L14.5001 8.43784ZM14.5001 10.8815L11.9207 12.0346C11.8229 12.0784 11.7111 12.0784 11.6134 12.0346L9.03402 10.8815L7.22338 11.6909L11.7671 13.7222L16.3107 11.6909L14.5001 10.8815ZM11.7671 4.77234L7.22338 6.80363L11.7671 8.83493L16.3107 6.80363L11.7671 4.77234ZM6.76837 19.4886C6.5606 19.4886 6.3919 19.3199 6.3919 19.1121C6.3919 18.9044 6.5606 18.7357 6.76837 18.7357H17.2331C17.4409 18.7357 17.6096 18.9044 17.6096 19.1121C17.6096 19.3199 17.4409 19.4886 17.2331 19.4886H6.76837ZM6.76837 17.5169C6.5606 17.5169 6.3919 17.3482 6.3919 17.1405C6.3919 16.9327 6.5606 16.764 6.76837 16.764H17.2331C17.4409 16.764 17.6096 16.9327 17.6096 17.1405C17.6096 17.3482 17.4409 17.5169 17.2331 17.5169H6.76837Z" fill="#A7A7A7"/>
              </svg>
            </div>
            Add Stage Template
          </button>
          <button class="nav-link" id="v-pills-5-sec-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-5-sec-3"
            type="button" role="tab" aria-controls="v-pills-3" aria-selected="true">
            <div class="img">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.6421 2.04902C18.6363 2.04794 18.6305 2.04714 18.6246 2.04634C18.6193 2.04564 18.6141 2.04494 18.6088 2.04452C18.6018 2.04391 18.5947 2.04362 18.5876 2.04344C18.5845 2.04334 18.5815 2.04297 18.5785 2.04297H5.42221C5.41911 2.04297 5.41611 2.04334 5.41302 2.04344C5.40599 2.04362 5.39896 2.04391 5.39193 2.04452C5.38649 2.04498 5.38114 2.04569 5.3758 2.04639C5.21103 2.06856 5.09061 2.19977 5.07299 2.35502C5.07252 2.35923 5.07228 2.36355 5.072 2.36781C5.07144 2.37545 5.07092 2.38305 5.07083 2.39064C5.07083 2.39195 5.07064 2.39322 5.07064 2.39453C5.08625 8.53966 5.02428 8.45917 5.1291 8.6178C5.19172 8.7123 5.30136 8.77553 5.42244 8.77553C5.423 8.77553 5.42361 8.77544 5.42417 8.77544H18.5765C18.5771 8.77544 18.5777 8.77553 18.5782 8.77553C18.5796 8.77553 18.5808 8.77525 18.5821 8.77525C18.7742 8.77323 18.9279 8.61747 18.9298 8.42758C18.9298 8.42631 18.93 8.42509 18.93 8.42388V2.39453C18.93 2.39327 18.9298 2.39205 18.9298 2.39083C18.9282 2.22287 18.8067 2.07916 18.6421 2.04902ZM16.9674 2.74609L12.0003 5.02248L7.03316 2.74609H16.9674ZM5.77377 2.94236L11.1565 5.4092L5.77377 7.87605V2.94236ZM7.03311 8.07236L12.0003 5.79597L16.9675 8.07236H7.03311ZM18.2269 7.87609L12.8442 5.40925L18.2269 2.94241V7.87609Z" fill="#AAAAAA"/>
                  <path d="M20.2031 0H3.79688C3.2153 0 2.74219 0.473109 2.74219 1.05469V7.09195C2.74219 7.28611 2.89959 7.44352 3.09375 7.44352C3.28791 7.44352 3.44531 7.28611 3.44531 7.09195V1.05469C3.44531 0.860812 3.603 0.703125 3.79688 0.703125H20.2031C20.397 0.703125 20.5547 0.860812 20.5547 1.05469V22.9453C20.5547 23.1392 20.397 23.2969 20.2031 23.2969H3.79688C3.603 23.2969 3.44531 23.1392 3.44531 22.9453V8.4982C3.44531 8.30405 3.28791 8.14664 3.09375 8.14664C2.89959 8.14664 2.74219 8.30405 2.74219 8.4982V22.9453C2.74219 23.5269 3.2153 24 3.79688 24H20.2031C20.7847 24 21.2578 23.5269 21.2578 22.9453V1.05469C21.2578 0.473109 20.7847 0 20.2031 0Z" fill="#AAAAAA"/>
                  <path d="M5.07031 14.5282C5.07031 14.7224 5.22772 14.8798 5.42188 14.8798H10.517C10.7112 14.8798 10.8686 14.7224 10.8686 14.5282V10.6621C10.8686 10.468 10.7112 10.3105 10.517 10.3105H5.42188C5.22772 10.3105 5.07031 10.468 5.07031 10.6621V14.5282ZM5.77344 11.0137H10.1655V14.1767H5.77344V11.0137Z" fill="#AAAAAA"/>
                  <path d="M18.6175 10.3105H13.6016C13.4074 10.3105 13.25 10.468 13.25 10.6621C13.25 10.8563 13.4074 11.0137 13.6016 11.0137H18.6175C18.8117 11.0137 18.9691 10.8563 18.9691 10.6621C18.9691 10.468 18.8117 10.3105 18.6175 10.3105Z" fill="#AAAAAA"/>
                  <path d="M18.6175 12.2441H13.6016C13.4074 12.2441 13.25 12.4015 13.25 12.5957C13.25 12.7899 13.4074 12.9473 13.6016 12.9473H18.6175C18.8117 12.9473 18.9691 12.7899 18.9691 12.5957C18.9691 12.4015 18.8117 12.2441 18.6175 12.2441Z" fill="#AAAAAA"/>
                  <path d="M18.6175 14.1758H13.6016C13.4074 14.1758 13.25 14.3332 13.25 14.5273C13.25 14.7215 13.4074 14.8789 13.6016 14.8789H18.6175C18.8117 14.8789 18.9691 14.7215 18.9691 14.5273C18.9691 14.3332 18.8117 14.1758 18.6175 14.1758Z" fill="#AAAAAA"/>
                  <path d="M18.6186 17.1934H13.5234C13.3292 17.1934 13.1719 17.3508 13.1719 17.5449V21.411C13.1719 21.6052 13.3292 21.7626 13.5234 21.7626H18.6186C18.8128 21.7626 18.9701 21.6052 18.9701 21.411V17.5449C18.9701 17.3508 18.8128 17.1934 18.6186 17.1934ZM18.267 21.0595H13.875V17.8965H18.267V21.0595Z" fill="#AAAAAA"/>
                  <path d="M5.42188 17.8965H10.4378C10.632 17.8965 10.7894 17.7391 10.7894 17.5449C10.7894 17.3508 10.632 17.1934 10.4378 17.1934H5.42188C5.22772 17.1934 5.07031 17.3508 5.07031 17.5449C5.07031 17.7391 5.22767 17.8965 5.42188 17.8965Z" fill="#AAAAAA"/>
                  <path d="M5.42188 19.8301H10.4378C10.632 19.8301 10.7894 19.6727 10.7894 19.4785C10.7894 19.2844 10.632 19.127 10.4378 19.127H5.42188C5.22772 19.127 5.07031 19.2844 5.07031 19.4785C5.07031 19.6727 5.22767 19.8301 5.42188 19.8301Z" fill="#AAAAAA"/>
                  <path d="M5.42188 21.7617H10.4378C10.632 21.7617 10.7894 21.6043 10.7894 21.4102C10.7894 21.216 10.632 21.0586 10.4378 21.0586H5.42188C5.22772 21.0586 5.07031 21.216 5.07031 21.4102C5.07031 21.6043 5.22767 21.7617 5.42188 21.7617Z" fill="#AAAAAA"/>
              </svg>
            </div>
            Edit Stage Template
          </button>
        </div>
        <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
      </div>
      <div class="col-md-7 px-0">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-5-sec-1" role="tabpanel"
            aria-labelledby="v-pills-5-sec-1-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Group1707488067.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era.</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-5-sec-2" role="tabpanel" aria-labelledby="v-pills-5-sec-2-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Onboarding-&-Trainings.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 2</p>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-5-sec-3" role="tabpanel" aria-labelledby="v-pills-5-sec-3-tab">
            <div class="box gray-box">
              <img src="{{asset('public/assets/img/Shift-&-Break-Management.png')}}" alt="Img">
              <p>World leader in IT solutions and talent acquisition. We transcend traditional boundaries, connecting
                your business with the brightest IT minds and innovations. Our futuristic approach ensures you not only
                keep pace, but surge ahead in the digital era. 3</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========= FAQ ADD MOBILE START ========== -->
    <div class="row justify-content-center" id="blok_mobile">
      <div class="col-md-10 text-center faq-head">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-5-sec-1">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-5-sec-1"" aria-expanded="false" aria-controls="collapse-5-sec-1">
                Applicant Stage
              </button>
            </h2>
            <div id="collapse-5-sec-1" class="accordion-collapse collapse" aria-labelledby="heading-5-sec-1"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional
                  boundaries, connecting your business with the brightest IT minds and innovations.
                  Our futuristic approach ensures you not only keep pace, but surge ahead in the
                  digital era.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-5-sec-2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-5-sec-2" aria-expanded="false" aria-controls="collapse-5-sec-2">
                Add Stage Template
              </button>
            </h2>
            <div id="collapse-5-sec-2" class="accordion-collapse collapse" aria-labelledby="heading-5-sec-2"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional
                  boundaries, connecting your business with the brightest IT minds and innovations.
                  Our futuristic approach ensures you not only keep pace, but surge ahead in the
                  digital era. 2</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-5-sec-3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse-5-sec-3" aria-expanded="false" aria-controls="collapse-5-sec-3">
                Edit Stage Template
              </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading-5-sec-3"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>World leader in IT solutions and talent acquisition. We transcend traditional
                  boundaries, connecting your business with the brightest IT minds and innovations.
                  Our futuristic approach ensures you not only keep pace, but surge ahead in the
                  digital era. 3</p>
              </div>
            </div>
          </div>
        </div>
        <a href="{{ url('/contact-us') }}" class="demo contact_btn">START NOW!</a>
      </div>
    </div>
    <!-- FAQ ADD MOBILE CODE END ===== -->
  </div>
</section>
<!-- Trial Section -->

<section class="feature-industries">
  <img class="red-shadow" src="{{asset('public/assets/img/red-circle-shadow.png')}}" alt="Red Circle Shadow">
  <img class="blue-shadow" src="{{asset('public/assets/img/blue-circle-shadow.png')}}" alt="Blue Circle Shadow">
  <div class="container">
    <div class="row justify-content-center mb-3">
      <div class="col-lg-12 text-center">
        <h2>Discover how industries will benefit from StaffViz's <br> specialized solutions.</h2>
        <p>Unlock the potential of StaffViz across diverse industries, driving efficiency and growth.&nbsp;</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
        <div class="card h-100">
          <div class="card-body py-md-5 py-4 px-4">
            <h5 class="card-title">Increased Work Efficiency</h5>
            <p class="card-text">Boost productivity with StaffViz's 
              streamlined monitoring and reporting
              tools.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
        <div class="card h-100">
          <div class="card-body py-md-5 py-4 px-4">
            <h5 class="card-title">Enhanced Accountability</h5>
            <p class="card-text">Foster accountability and transparency
              within your workforce with StaffViz.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 ">
          <div class="card-body py-md-5 py-4 px-4">
            <h5 class="card-title">Optimized Operations</h5>
            <p class="card-text">Streamline operations and improve 
              decision-making with StaffViz's 
              actionable insights.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection