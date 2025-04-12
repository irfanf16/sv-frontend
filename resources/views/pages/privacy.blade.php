@extends('theme.layouts.master')
@section("page-class", "index-page")
<style type="text/css">
  .contact_main_sec {
    padding: 250px 0 50px !important;
  }

  #sliderVideo {
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 432px;
    max-height: 432px;
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
    height: 432px;
    width: 100%;
    background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.7) 6.16%, rgba(34, 114, 159, 0.7) 39.5%, rgba(6, 37, 100, 0.7) 54.39%, rgba(2, 37, 96, 0.7) 85.46%);
    z-index: 0;
  }

  #about-hero {
    padding-top: 235px !important;
  }
  #privacy_policy .blue-bg {
    top: 10%;
    bottom: unset;
  }
  .hero-head h1{
    margin-bottom: 45px!important;
  }
  @media only screen and (max-width: 1199px) {
    #sliderVideo {
      height: 275px;
      max-height: 275px;
    }

    #about-hero .overlay {
      height: 275px;
    }
  }

  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 275px;
      max-height: 275px;
    }

    #about-hero .overlay {
      height: 275px;
    }
    #about-hero {
      padding-bottom: 60px!important;
    }
  }
</style>
@section('content')

<!-- Banner -->
<section id="about-hero">
  <div class="overlay"></div>
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/privacy-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head">

        <h1 class="text-center">
          Privacy Policy
        </h1>
      </div>
    </div>
  </div>
</section>
<!-- Banner -->
<section id="privacy_policy" class="position-relative">
  <div class="container-fluid my-lg-5 my-2">
    <div class="row">
      <div class="col-lg-4 left-col">
        <div class="text_privicy">
          <p>Last updated: June. 21, 2024</p>
        </div>
        <div class="tablee">
          <h2>Table of Contents</h2>
          <ul>
            <a href="#Consent">
              <li class="active">Personal Data We Collect</li>
            </a>
            <a href="#information">
              <li>Where Do We Store the Data?</li>
            </a>
            <a href="#share-information">
              <li>How Staffviz Uses Your Data? </li>
            </a>
            <a href="#protect-info">
              <li>Data Protection Responsibility</li>
            </a>
            <a href="#response-protocol">
              <li>Incident Response Protocol </li>
            </a>
            <a href="#GDPR">
              <li>Anti-Spam Policy</li>
            </a>
            <a href="#online-privacy">
              <li>Enforcing Our Privacy Rules</li>
            </a>
            <a href="#data-protectiong">
              <li>Data Protection Audit Procedures</li>
            </a>

          </ul>
        </div>
        <img class="blue-bg" src="{{asset('/public/assets/img/privacy-policy-left-blue-shadow.png')}}" alt="Blue">
      </div>
      <div class="col-lg-8 right-col">
        <img class="red-top-bg" src="{{asset('/public/assets/img/privacy-policy-red-shadow.png')}}" alt="Red">
        <img class="red-bottom-bg" src="{{asset('/public/assets/img/privacy-policy-red-shadow.png')}}" alt="Red">
        <div class="content_div">
          <p>StaffViz offers you the Service based on the following “Privacy Policy,” “Terms of Service,” and “Data
            Process Agreement.”
          </p>
          <h2 id="Consent">Personal Data We Collect</h2>
          <p>Personal data means any data such as a name, address, telephone number, mobile number, e-mail address,
            credit card number, identification number, location, or an online identifier.</p>
          <h3> Account Information</h3>
          <p style="padding-bottom: 0;">We store the data when you sign up, sign in, or use the software. The data we ask for when you sign up for
            the account includes.</p>
          <ul>
            <li style="list-style:disc;">First and last name</li>
            <li style="list-style:disc;">Email Address</li>
            <li style="list-style:disc;">Phone Number (optional)</li>
            <li style="list-style:disc;">Company Name</li>
            <li style="list-style:disc;">Designation</li>
            <li style="list-style:disc;">Password</li>
            <li style="list-style:disc;">Photo (optional)</li>
          </ul>
          <br>
          <h3>Geo Location</h3>
          <p> If you are accessing the website through a device, we may collect the longitudinal and latitude data of
            the place you have visited or live location. If you do not want to share the location data, you can turn off
            the location access settings from your device or by visiting the policy page.</p>

          <h3>Payment Information</h3>
          <p> When you buy our service, we will store your payment data, including your email, name, and phone number
            (optional). We do not store or use your payment data; the companies that deal with the payment data,
            including your bank information and credit/debit card number, are Stripe, Square, Authorize, PayPal,
            Shopify, 2Checkout, Amazon Pay, Chargebee, Helcim.</p>
          <h3>Cookies</h3>
          <p> We automatically store the Cookies through local storage and session storage technologies when you visit
            our website or use our software. We use cookies to improve the user experience. The cookies are smaller
            files that you download in your browser, computer, or elsewhere. Examples of the data in the cookies are
            your IP address, the websites you have visited, and your device information.</p>
          <p>For more information on the cookies, please <a class="email_click" href="#">review the following guide</a>.
          </p>
          <p>If you wish to delete the cookies, you can do so with your browser's settings or by deleting them after
            they are stored on your device. However, if you delete the cookies and make any changes, please be assured
            that some of our website's pages might be delayed in loading. Also, ensure we do not take any responsibility
            for third-party websites or apps.</p>

          <h2 id="information">Where Do We Store the Data?</h2>
          <p>We store the data we collect in the company storages, the country you are in, or other countries, but not
            limited to the United States, Canada, Singapore, United Kingdom, or more. You agree to transfer, process, or
            move the data according to the requirements. But we will never share your company's tasks, employees, or
            work data with third parties.</p>

          <h2 id="share-information">How Staffviz Uses Your Data?</h2>
          <p>Staffviz uses your data according to the law and regulations. We do business with third-party service
            providers and may share the data with them to provide services to you.</p>
          <p>We do not buy, sell, or rent your personal information to service providers except without your consent or
            lawful requirements.<br>We may share your data in the following ways:</p>

          <h3>Third-Party Services</h3>
          <p>We provide services through third parties and share your data with them to perform the required business
            operations. Third-party service providers might use your data (with limited access) under our guidance to
            provide you with the services.</p>
          <h3>Business Transactions</h3>
          <p>Staffviz might buy, invest, sell, or merge in a new software, business, or process, and we might use your
            personal information as part of our business deal.</p>

          <p>Such a transaction will be legitimate and necessary for our company's long-term plan.</p>

          <h3>Lawfully Required</h3>
          <p>Any law department might need access to our data storage for lawful requirements. According to the legal
            requirements, we might be required to cooperate through the process and share your data with the
            authorities.</p>


          <h2 id="protect-info">Data Protection Responsibility</h2>
          <p>Staffviz takes standard measures to protect its users' data and takes responsibility for data safety and
            integrity. When you submit the company's data, you act as a data provider and Staffviz as a data processor.
            The data providers are also responsible for the data they provide and have a written agreement to govern the
            data they submit.</p>

          <h2 id="response-protocol">Incident Response Protocol</h2>
          <p>In the event of a data breach, we follow a specific procedure outlining how and when to make a timely,
            responsible disclosure to the affected parties. Our initial communication is initiated within 24 hours of us
            becoming aware of the incident.</p>

          <h2 id="GDPR">Anti-Spam Policy</h2>
          <p>At Staffviz, we do not allow spam. This means you cannot use Staffviz's tools to send a lot of messages to
            people who did not ask for them.</p>

          <p>We keep a close eye on everyone's activity, and if we catch anyone breaking this rule, we will delete their
            account. We take spam complaints from our users seriously. This includes sending messages people do not want
            through Staffviz's Invoicing, Reporting, or Inviting tools. If someone reports you for spam, we will
            investigate it, and if we find you guilty, we will delete your account immediately.</p>

          <h2 id="online-privacy">Enforcing Our Privacy Rules</h2>
          <p>At Staffviz, we ensure we follow our Privacy Policy. We check regularly to ensure its accuracy, covers all
            the information needed, and is easy for everyone to see and understand. If you have any concerns, please
            contact us using the information provided. We will investigate any complaints or issues about how we use
            personal information and try to sort them out. If we cannot solve a problem internally, we are open to using
            an independent third party to help us resolve it.</p>

          <h2 id="data-protectiong">Data Protection Audit Procedures</h2>
          <p>Upon the client's written request, Staffviz commits to providing enough information to show they are
            following this Privacy Policy and the law's rules. They will share this information unless there are legal
            restrictions or confidentiality obligations. If the information provided is not sufficient to confirm
            compliance, Staffviz agrees to allow data processing audits. These audits can be conducted by an independent
            third party, mutually agreed upon by the client and Staffviz. The client has the right to request this audit
            every two years. Staffviz determines the timing and logistics of the audit, and the client bears the cost.
            The chosen auditor must sign a confidentiality agreement, ensuring business information remains confidential
            and the final report is shared with Staffviz.</p>

        </div>
      </div>
    </div>
  </div>

</section>
<script>
  $(document).ready(function () {
    $('ul li').click(function () {
      $('li').removeClass("active");
      $(this).addClass("active");
    });
  });
</script>


@endsection