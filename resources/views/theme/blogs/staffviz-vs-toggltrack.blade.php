@extends('theme.layouts.master')
@section("page-class", "index-page")
@section('css')
<style>
  @media(max-width: 767px) {
    .hero-head h1 {
      padding-bottom: 5px;
    }

    .hero-text h3 {
      font-size: 16px;
      margin-bottom: 29px;
    }
  }
</style>
@endsection('css')
@section('content')

<!-- Blog Banner -->
<section class="blog-banner">
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head">
        <h1>Blog</h1>
        <div class="col-lg-7 col-md-10 hero-text">
          <h3>Unlock Insights, Elevate Productivity: Dive into the StaffViz Blog</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog Banner -->

<!-- Blog Detail Section -->
<section class="blog-detail-section">
  <div class="container-fluid">
    <div class="row justify-content-between">
      <div class="col-lg-7 col-md-8 order-md-1 order-2 blog-detail-box">
        <div class="start-text">
          <h6 class="category-name">Comparison</h6>
          <h1>StaffViz Vs. Toggltrack</h1>
          <h4>Which Time Tracking Tool is Right for You?</h4>
        </div>
        <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
          <div class="d-flex align-items-center">
            <div class="single-detail">
              <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
            </div>
            <div class="single-detail">
              <p>Jan 20, 2025</p>
            </div>
            <div class="single-detail">
              <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                  <path
                    d="M7.60038 21.5C7.13971 21.5 6.75537 21.346 6.44737 21.038C6.13937 20.73 5.98504 20.3457 5.98438 19.885V5.115C5.98438 4.655 6.13871 4.271 6.44737 3.963C6.75604 3.655 7.14038 3.50067 7.60038 3.5H18.3694C18.8294 3.5 19.2137 3.65433 19.5224 3.963C19.831 4.27167 19.985 4.656 19.9844 5.116V19.885C19.9844 20.345 19.8304 20.7293 19.5224 21.038C19.2144 21.3467 18.8297 21.5007 18.3684 21.5H7.60038ZM7.60038 20.5H18.3694C18.5227 20.5 18.6637 20.436 18.7924 20.308C18.921 20.18 18.985 20.0387 18.9844 19.884V5.116C18.9844 4.962 18.9204 4.82067 18.7924 4.692C18.6644 4.56333 18.523 4.49933 18.3684 4.5H16.9844V10.616L14.9844 9.423L12.9844 10.616V4.5H7.60038C7.44638 4.5 7.30504 4.564 7.17637 4.692C7.04771 4.82 6.98371 4.961 6.98438 5.115V19.885C6.98438 20.0383 7.04837 20.1793 7.17637 20.308C7.30437 20.4367 7.44537 20.5007 7.59937 20.5"
                    fill="#97989F" />
                </svg>
                Reading Time: 10 Minutes
              </p>
            </div>
          </div>
          <!-- <button class="like-blog-btn btn d-flex align-items-center">
            <span>37</span>
            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M27.4742 12.489C26.6428 11.4871 25.3412 10.8647 24.0771 10.8647H20.7332C21.4857 9.66545 22.0521 8.45866 22.3973 7.30951C22.924 5.55593 22.9055 4.0273 22.3439 2.88886C21.7113 1.60659 20.4294 0.900391 18.7345 0.900391C18.349 0.900391 18.0016 1.13296 17.8547 1.48936C16.5349 4.69038 13.0926 9.29114 9.84935 12.3219C9.51841 11.1724 8.45782 10.3287 7.20322 10.3287H3.12885C1.6104 10.3287 0.375 11.5641 0.375 13.0825V25.1953C0.375 26.7138 1.6104 27.9492 3.12885 27.9492H7.20322C8.13211 27.9492 8.95448 27.4864 9.45352 26.7797C10.2084 27.506 11.2092 27.9492 12.3059 27.9492H22.565C23.6992 27.9492 24.7091 27.4663 25.4858 26.5526C26.1261 25.7995 26.5808 24.7819 26.8007 23.6101L28.3129 15.555C28.5158 14.4742 28.2179 13.3854 27.4742 12.489ZM8.05366 25.1954C8.05366 25.6643 7.67216 26.0459 7.20322 26.0459H3.12885C2.65992 26.0459 2.27835 25.6643 2.27835 25.1954V13.0826C2.27835 12.6136 2.65992 12.2321 3.12885 12.2321H7.20322C7.67216 12.2321 8.05366 12.6136 8.05366 13.0826V25.1954ZM26.4422 15.2038L24.9301 23.259C24.6772 24.6063 23.923 26.0459 22.5649 26.0459H12.3058C11.0107 26.0459 9.95707 24.8745 9.95707 23.4346V14.766C13.5444 11.7879 17.5618 6.67332 19.3354 2.85055C20.2816 3.01067 20.5416 3.53749 20.637 3.73091C21.2547 4.98302 20.7421 7.86607 18.1569 11.2372C17.9364 11.5247 17.8983 11.9125 18.0586 12.2374C18.2189 12.5622 18.5498 12.768 18.9121 12.768H24.0772C24.779 12.768 25.5375 13.1355 26.0094 13.7043C26.2751 14.0247 26.566 14.5448 26.4422 15.2038Z"
                fill="#97989F" />
            </svg>
          </button> -->
        </div>
        <img class="main-banner-img" src="{{asset('/public/assets/img/staffviz-vs-toggltrack-detail-img.webp')}}"
          alt="Blog Main">
        <div class="highlighed-text">
          <p>The right tools are just as important in the tech sector as selecting the coding languages for a project. A
            time-tracking tool that works for your team is as vital as developers selecting languages according to the
            requirements of the project. Two popular choices to think about are Toggl and StaffViz. Each has its unique
            features. In this article, we will discuss the differences to choose the best fit for your business.</p>
        </div>
        <h2 id="closer-look">A Closer Look at StaffViz and Toggl</h2>
        <p class="text-center" style="margin: -15px 0 25px">StaffViz is not just a time-tracking software but a
          full-suite employee management tool,<br> making it a superior option.The following are some features where
          StaffViz surpasses the competition by a great margin.</p>
        <div class="table">
          <table>
            <thead>
              <tr>
                <th>Features</th>
                <th>
                  <img class="staffviz-logo" src="{{asset('/public/assets/img/StaffViz-white-logo.svg')}}" alt="StaffViz">
                </th>
                <th>
                  <img src="{{asset('/public/assets/img/time-doctor-icon.png')}}" alt="Time Doctor">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Shift Management
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/red-cross-icon.png')}}" alt="Cross">
                </td>
              </tr>
              <tr>
                <td>Employee Training Management</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/red-cross-icon.png')}}" alt="Cross">
                </td>
              </tr>
              <tr>
                <td>Employee Privacy Options</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/red-cross-icon.png')}}" alt="Cross">
                </td>
              </tr>
              <tr>
                <td>Employee Monitoring</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/red-cross-icon.png')}}" alt="Cross">
                </td>
              </tr>
              <tr>
                <td>Productivity Tracking</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Remote Team Management</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Reporting & Analytics</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Payroll Integration</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Reporting & Analytics</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Payroll Integration</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Integrations</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>User Interface</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Mobile Access</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Task Scheduling</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Billing & Invoicing</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Offline Mode</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Time Tracking</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Offline Mode</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Security Features</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Onboarding Process</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Customer Support</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <h2 id="time-tracking">Time Tracking: <br>Real-Time Monitoring</h2>
        <p>Both Toggl and StaffViz offer real-time time tracking. Toggl allows users to track hours manually or
          automatically, making it easy to log time. StaffViz goes a step further by connecting time tracking directly
          to projects, providing more detailed information about where time is spent.</p>
        <h4 id="project-management">Project Management: Better Oversight</h4>
        <p>While Toggl provides essential project insights, it doesn't have robust task management features. StaffViz
          excels here, offering detailed project management tools like task assignments and progress tracking. This is
          particularly helpful for teams managing multiple projects.</p>
        <h4 id="employee-monitoring">Employee Monitoring: A Comprehensive View </h4>
        <p>Toggl focuses mainly on time tracking, while StaffViz provides thorough employee monitoring. StaffViz gives
          managers insights into both individual and team performance, helping identify patterns and issues more
          effectively. </p>
        <h4 id="productivity-tracking">Productivity Tracking: More Than Just Time </h4>
        <p>Monitoring productivity requires knowing how time is spent. Toggl helps identify distractions by displaying
          the amount of time spent on several apps. However, StaffViz provides a more thorough productivity analysis,
          which aids managers in identifying patterns and streamlining processes.  </p>
        <h4 id="remote-team">Managing Remote Teams: Designed for Flexibility </h4>
        <p>Having tools for managing distributed teams is essential as remote work becomes more common. While StaffViz
          is designed explicitly for hybrid work situations, Toggl is appropriate for managing remote teams. Its
          capabilities, such as shift scheduling, make managing teams in several locations simpler. </p>
        <h4 id="reporting">Reporting and Analytics: Making Informed Decisions </h4>
        <p>Both tools offer reporting features, but StaffViz provides more detailed and customizable reports. Toggl
          gives a general overview of time spent, while StaffViz allows managers to break down performance data, helping
          with planning and decision-making. </p>
        <h4 id="payroll-integration">Payroll Integration: Simplifying Payments </h4>
        <p>Both StaffViz and Toggl integrate with payroll systems to ensure accurate payment for tracked hours. StaffViz
          offers a smoother process for managing billable hours, which is beneficial for businesses that work with
          freelancers. </p>
        <h4 id="employee-training">Employee Training Management </h4>
        <p>A key advantage of StaffViz is its built-in Training Management System, which Toggl does not offer. This
          feature helps businesses not only track time but also support employee training and development. </p>
        <h4 id="conclusion">Conclusion: Which Tool is Best for You?</h4>
        <p>Choosing between Toggl and StaffViz depends on your business needs. Toggl is an excellent option if you want
          straightforward time tracking and essential productivity insights. It works well for smaller teams or those
          new to time management software. 
          <br>
          On the other hand, if you need advanced project management features, detailed tracking, and better employee
          monitoring, StaffViz is the more substantial choice. It's ideal for larger teams handling multiple projects
          and offers valuable insights into productivity. 
          <br>
          Moreover, with its Training Management System, StaffViz helps companies invest in their employees’ growth. For
          businesses looking for a tool that not only tracks time but also provides deeper insights and better
          management features, StaffViz is the more comprehensive solution.
        </p>
        <div class="try-staffviz-box text-center" style='margin-top: 40px'>
          <h2>Choose a Plan that Fits<br> Your Needs</h2>
          <a href="{{url('/pricing-plans')}}">GET PLAN DETAILS</a>
          <img class="swirling-lines" src="{{asset('/public/assets/img/swirling-lines.png')}}" alt="Swirling Lines">
        </div>
        <div class="author-info-box">
          <div class="d-flex align-items-center mb-3">
            <div class="img">
              <img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">
            </div>
            <div class="text">
              <h5>Tracy Taylor</h5>
            </div>
          </div>
          <p>I’m <b>Tracey Taylor</b>, a Content Strategist with over 4 years of experience in B2B and SaaS marketing.
            I’ve worked with companies like StreamlineREI and StaffViz to drive lead generation and business growth.
            Outside of work, I explore nature, read books, and play games to stay physically and mentally sharp. </p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-5 col-md-4 order-lg-2 order-1 table-content">
        <h5>Table of Content</h5>
        <div class="table-content-box">
          <ul>
            <li>
              <a href="#closer-look">A Closer Look at StaffViz and Toggltrack</a>
            </li>
            <li>
              <a href="#time-tracking">Time Tracking: Real-Time Monitoring</a>
              <ul>
                <li>
                  <a href="#project-management">Project Management: Better Oversight</a>
                </li>
                <li>
                  <a href="#employee-monitoring">Employee Monitoring: A Comprehensive View</a>
                </li>
                <li>
                  <a href="#productivity-tracking">Productivity Tracking: More Than Just Time</a>
                </li>
                <li>
                  <a href="#remote-team">Managing Remote Teams: Designed for Flexibility</a>
                </li>
                <li>
                  <a href="#reporting">Reporting and Analytics: Making Informed Decisions</a>
                </li>
                <li>
                  <a href="#payroll-integration">Payroll Integration: Simplifying Payments</a>
                </li>
                <li>
                  <a href="#employee-training">Employee Training Management</a>
                </li>
                <li>
                  <a href="#conclusion">Conclusion: Which Tool is Best for You?</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="d-md-block d-none">
          <h6 class="article-list-title">Related Articles</h6>
          <div class="related-blogs-list">
            <div class="single-blog-box">
              <div class="row">
                <div class="col-lg-5 img">
                  <img src="{{asset('public/assets/img/staffviz_vs_hubstaff_list_img.webp')}}"
                    alt="staffviz_vs_hubstaff_list_img">
                </div>
                <div class="col-lg-7 text">
                  <a href="{{url('/blogs/staffviz-vs-hubstaff-comparative-analysis')}}">
                    StaffViz Vs. Hubstaff <br>A Comparative Analysis
                  </a>
                  <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Jan 1, 2025</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-blog-box">
              <div class="row">
                <div class="col-lg-5 img">
                  <img src="{{asset('public/assets/img/staffviz-vs-clockify.webp')}}" alt="staffviz-vs-clockify">
                </div>
                <div class="col-lg-7 text">
                  <a href="{{url('/blogs/staffviz-vs-clockify-ultimate-showdown')}}">
                    StaffViz vs Clockify <br> The Ultimate Showdown
                  </a>
                  <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Jan 10, 2025</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-blog-box">
              <div class="row">
                <div class="col-lg-5 img">
                  <img src="{{asset('public/assets/img/staffviz-vs-timedoctor.webp')}}" alt="staffviz-vs-timedoctor">
                </div>
                <div class="col-lg-7 text">
                  <a href="{{url('/blogs/staffviz-vs-time-doctor-compare-and-contrast')}}">
                    StaffViz Vs. Time Doctor <br>Compare and Contrast
                  </a>
                  <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Jan 15, 2025</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 d-md-none table-content order-3">
        <h6 class="article-list-title">Related Articles</h6>
        <div class="related-blogs-list">
          <div class="single-blog-box">
            <div class="row">
              <div class="col-lg-5 img">
                <img src="{{asset('public/assets/img/staffviz_vs_hubstaff_list_img.webp')}}"
                  alt="staffviz_vs_hubstaff_list_img">
              </div>
              <div class="col-lg-7 text">
                <a href="{{url('/blogs/staffviz-vs-hubstaff-comparative-analysis')}}">
                  StaffViz Vs. Hubstaff <br>A Comparative Analysis
                </a>
                <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Jan 1, 2025</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="single-blog-box">
            <div class="row">
              <div class="col-lg-5 img">
                <img src="{{asset('public/assets/img/staffviz-vs-clockify.webp')}}" alt="staffviz-vs-clockify">
              </div>
              <div class="col-lg-7 text">
                <a href="{{url('/blogs/staffviz-vs-clockify-ultimate-showdown')}}">
                  StaffViz vs Clockify <br> The Ultimate Showdown
                </a>
                <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Jan 10, 2025</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="single-blog-box">
            <div class="row">
              <div class="col-lg-5 img">
                <img src="{{asset('public/assets/img/staffviz-vs-timedoctor.webp')}}" alt="staffviz-vs-timedoctor">
              </div>
              <div class="col-lg-7 text">
                <a href="{{url('/blogs/staffviz-vs-time-doctor-compare-and-contrast')}}">
                  StaffViz Vs. Time Doctor <br>Compare and Contrast
                </a>
                <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Jan 15, 2025</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog Detail Section -->

<!-- <section class="like-blog-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="like-blog-box text-center">
          <h6>Did you find this article useful? Give it a clap!</h6>
          <button class="btn like-blog-btn">
            <span>37</span>
            <svg width="29" height="28" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M27.4742 12.489C26.6428 11.4871 25.3412 10.8647 24.0771 10.8647H20.7332C21.4857 9.66545 22.0521 8.45866 22.3973 7.30951C22.924 5.55593 22.9055 4.0273 22.3439 2.88886C21.7113 1.60659 20.4294 0.900391 18.7345 0.900391C18.349 0.900391 18.0016 1.13296 17.8547 1.48936C16.5349 4.69038 13.0926 9.29114 9.84935 12.3219C9.51841 11.1724 8.45782 10.3287 7.20322 10.3287H3.12885C1.6104 10.3287 0.375 11.5641 0.375 13.0825V25.1953C0.375 26.7138 1.6104 27.9492 3.12885 27.9492H7.20322C8.13211 27.9492 8.95448 27.4864 9.45352 26.7797C10.2084 27.506 11.2092 27.9492 12.3059 27.9492H22.565C23.6992 27.9492 24.7091 27.4663 25.4858 26.5526C26.1261 25.7995 26.5808 24.7819 26.8007 23.6101L28.3129 15.555C28.5158 14.4742 28.2179 13.3854 27.4742 12.489ZM8.05366 25.1954C8.05366 25.6643 7.67216 26.0459 7.20322 26.0459H3.12885C2.65992 26.0459 2.27835 25.6643 2.27835 25.1954V13.0826C2.27835 12.6136 2.65992 12.2321 3.12885 12.2321H7.20322C7.67216 12.2321 8.05366 12.6136 8.05366 13.0826V25.1954ZM26.4422 15.2038L24.9301 23.259C24.6772 24.6063 23.923 26.0459 22.5649 26.0459H12.3058C11.0107 26.0459 9.95707 24.8745 9.95707 23.4346V14.766C13.5444 11.7879 17.5618 6.67332 19.3354 2.85055C20.2816 3.01067 20.5416 3.53749 20.637 3.73091C21.2547 4.98302 20.7421 7.86607 18.1569 11.2372C17.9364 11.5247 17.8983 11.9125 18.0586 12.2374C18.2189 12.5622 18.5498 12.768 18.9121 12.768H24.0772C24.779 12.768 25.5375 13.1355 26.0094 13.7043C26.2751 14.0247 26.566 14.5448 26.4422 15.2038Z"
                fill="#2167FF" />
            </svg>
          </button>
          <p>Psst! You can like more than once if you really loved it.</p>
        </div>
      </div>
    </div>
  </div>
</section> -->

@endsection