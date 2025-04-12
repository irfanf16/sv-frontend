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
          <h1>StaffViz Vs. Time Doctor</h1>
          <h4>Compare and Contrast</h4>
        </div>
        <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
          <div class="d-flex align-items-center">
            <div class="single-detail">
              <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
            </div>
            <div class="single-detail">
              <p>Jan 15, 2025</p>
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
        <img class="main-banner-img" src="{{asset('/public/assets/img/staffviz-vs-timedoctor-detail-img.webp')}}"
          alt="Blog Main">
        <div class="highlighed-text">
          <p>Time tracking and productivity management are critical in current, increasingly flexible, remote work
            environments. Whether you are running a startup, a remote team, or an enterprise-level organization, having
            the correct tools for monitoring staff and managing projects makes a substantial difference in overall
            success.</p>
        </div>
        <h2 id="comprehensive-comparison">A Comprehensive Comparison<br> Showcasing <span>All The Differences</span>
        </h2>
        <div class="table">
          <table>
            <thead>
              <tr>
                <th>Features</th>
                <th>
                  <img class="staffviz-logo" src="{{asset('/public/assets/img/StaffViz-white-logo.svg')}}"
                    alt="StaffViz">
                </th>
                <th>
                  <img src="{{asset('/public/assets/img/time-doctor-icon.png')}}" alt="Time Doctor">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Customization for Outsourcing
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/red-cross-icon.png')}}" alt="Cross">
                </td>
              </tr>
              <tr>
                <td>Project Management</td>
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
                <td>Distraction Alerts</td>
                <td>
                  <img src="{{asset('/public/assets/img/red-cross-icon.png')}}" alt="Cross">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Free Plan </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Employee Monitoring</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
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
                <td>Remote Team Management </td>
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
                <td>Payroll Integration </td>
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
                <td>Integrations</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>User Interface </td>
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
                <td>Shift Management</td>
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
                <td>Employee Privacy Options</td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
                <td>
                  <img src="{{asset('/public/assets/img/green-tick-icon.png')}}" alt="Tick">
                </td>
              </tr>
              <tr>
                <td>Customization for Industries</td>
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
                <td>Multi-Language Support</td>
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
        <h2 id="key-features">Breaking Down the <br><span>Key Features</span></h2>
        <p>Time Doctor and StaffViz are two of the leading participants in this market. Both offer solutions depending
          on your organization's specific needs.<br>
          In this complete comparison, we will delve deep to determine where each tool excels and how they weigh up
          against one another.
        </p>
        <h4 id="time-tracking">1. Time Tracking: Real-Time Accuracy</h4>
        <p>Both <b>Time Doctor</b> and <b>StaffViz</b> provide real-time tracking for employees and teams. With <b>Time
            Doctor</b>, you can track time using either manual or automatic modes, allowing workers to start and stop
          their timers or let the tool detect activity. It is perfect for remote teams who need straightforward time
          tracking without too much work.
        </p>
        <p>On the other hand, <b>StaffViz</b> offers real-time tracking that integrates seamlessly with projects. This
          means you are not just getting data on time spent, but you can directly tie this data to specific tasks,
          projects, or clients.</p>
        <p>For larger teams working across multiple projects, this added level of detail can be invaluable for reporting
          and managing billable hours.<br>
          So, although both platforms offer excellent time tracking, <b>StaffViz</b> project integration adds a layer of
          depth for more complex workflows.</p>
        <h4 id="project-management">2. Project Management: Task-Level Insights</h4>
        <p>While <b>Time Doctor</b> offers project insights, it does not help much with task management or reporting. If
          you are managing a large team working on multiple projects, <b>StaffViz</b> shines with its advanced project
          management capabilities, offering detailed task assignments, progress tracking, and team-level reporting.</p>
        <p>It tracks performance on a project level, breaks down tasks, assigns them to specific employees, and receives
          detailed reports on how much time is being spent.</p>
        <h4 id="employee-monitoring">3. Employee Monitoring: Similar Yet Comprehensive</h4>
        <p>Meanwhile, <b>Time Doctor</b> monitors screenshots, keystrokes, mouse movements, and app usage. StaffViz also
          offers these features but goes a step further with more detailed performance metrics and activity levels.</p>
        <p><b>StaffViz</b> gives managers the ability to assess team performance rather than just individual
          performance, which makes it simpler to identify productivity patterns and resolve problems before they
          negatively affect the bottom line.</p>
        <h4 id="productivity-tracking">4. Productivity Tracking: Measuring More Than Just Time</h4>
        <p>Tracking productivity involves more than just keeping track of hours worked; it also involves analyzing how
          time is spent.</p>
        <p>Time Doctor tracks how much time is spent on websites and app usage to determine productivity. This allows
          businesses to see where distractions are happening and identify opportunities for improvement. It is great for
          companies that want to control time-wasting behaviors or optimize workflows.</p>
        <p>However, StaffViz offers more than just app usage tracking. It delivers a holistic view of productivity with
          its activity dashboards and performance analytics, helping managers track trends, spot bottlenecks, and even
          predict future productivity issues. For teams that need more than just data on hours worked, StaffViz delivers
          richer insights.</p>
        <h4 id="remote-team">5. Remote Team Management: Built for the Modern Workforce</h4>
        <p>With more businesses going remote, tools that cater specifically to managing distributed teams are necessary.
          <b>Time Doctor</b> is well-suited for managing remote teams, with monitoring tools and productivity insights
          designed for remote workflows. It allows managers to track what their teams are working on, no matter where
          they are.
        </p>
        <p><b>StaffViz</b> is even more tailored with specific features designed to manage teams across different time
          zones. With built-in shift scheduling, task assignments, and project management features, it is ideal for
          companies managing remote staff in a structured, organized way.</p>
        <p>For global teams with complex needs, StaffViz provides a more complete package for managing hybrid employees
          efficiently.</p>
        <h4 id="reporting">6. Reporting and Analytics: Making Data-Driven Decisions</h4>
        <p>Analytical features provide essential insights into a team's overall efficiency.</p>
        <p>Time Doctor produces reports on time management, productivity, and staff performance. This is ideal for
          companies who want a clear perspective of how their staff spend their time.</p>
        <p>StaffViz, on the contrary, excels at more sophisticated, personalized reporting that allows managers to break
          data down into individual as well as collective performance measures.</p>
        <p>Its deep analytics deliver more detailed data, making it easier for businesses to discover trends, establish
          KPIs, and make informed decisions.</p>
        <h4 id="payroll-integration">7. Payroll Integration: Simplifying Payments</h4>
        <p>There are a few key differences between the two solutions, but both let companies track billable hours and
          connect with payroll systems. By integrating with external payroll systems, Time Doctor guarantees that
          workers receive their wages accurately based on the hours they track.</p>
        <p><b>StaffViz</b> offers an in-built workflow to manage billable hours. This makes it a better choice for
          companies that work with freelancers.</p>
        <h4 id="training-management">8. Training Management System</h4>
        <p>When comparing <b>StaffViz</b> with Time Doctor, one notable distinction is the <b>Training Management
            System</b> that <b>StaffViz</b> offers, which is absent in <b>Time Doctor</b>.</p>
        <p>This feature adds significant value to <b>StaffViz</b>, making it the number one platform for managing remote
          teams by not only tracking time and productivity but also enhancing employee development through structured
          training programs.</p>
        <p><b>Conclusion: Which Tool Is Best for Your Business?</b></p>
        <p>When it comes to choosing between <b>Time Doctor and StaffViz</b>, the decision depends on your needs. Time
          Doctor is a strong choice if your main priority is simple and practical time tracking with a focus on
          productivity insights. It offers tools to manage remote teams and track employee activities.</p>
        <p>It is a reliable option for smaller teams or businesses primarily concerned with tracking work hours and
          minimizing distractions.</p>
        <p>However, if your organization demands more advanced project management, integrated task tracking, and
          sophisticated reporting features, <b>StaffViz</b> stands out as the better option.</p>
        <p>It is especially suitable for larger teams managing multiple projects or companies working with freelancers.
          The added layer of project-level insights, task scheduling, and personalized reports makes StaffViz a more
          comprehensive tool.</p>
        <p>Additionally, its built-in Training Management System elevates it further, allowing businesses to nurture
          talent and employee development seamlessly within the platform.</p>
        <p>If you are looking for a tool that not only tracks time but also empowers your business with deeper insights,
          flexibility, and enhanced employee management features, <b>StaffViz</b> is the more robust solution.</p>
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
              <a href="#comprehensive-comparison">A Comprehensive Comparison Showcasing All The Differences</a>
            </li>
            <li>
              <a href="#key-features">Breaking Down the Key Features</a>
              <ul>
                <li>
                  <a href="#time-tracking">Time Tracking: Real-Time Accuracy</a>
                </li>
                <li>
                  <a href="#project-management">Project Management: Task-Level Insights</a>
                </li>
                <li>
                  <a href="#employee-monitoring">Employee Monitoring: Similar Yet Comprehensive</a>
                </li>
                <li>
                  <a href="#productivity-tracking">Productivity Tracking: Measuring More Than Just Time</a>
                </li>
                <li>
                  <a href="#remote-team">Remote Team Management: Built for the Modern Workforce</a>
                </li>
                <li>
                  <a href="#reporting">Reporting and Analytics: Making Data-Driven Decisions</a>
                </li>
                <li>
                  <a href="#payroll-integration">Payroll Integration: Simplifying Payments</a>
                </li>
                <li>
                  <a href="#training-management">Training Management System</a>
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
                  <img src="{{asset('public/assets/img/staffviz-vs-toggltrack.webp')}}" alt="staffviz-vs-toggltrack">
                </div>
                <div class="col-lg-7 text">
                  <a href="{{url('/blogs/staffviz-vs-toggltrack-which-time-tracking-tool-is-right-for-you')}}">
                    StaffViz Vs. Toggltrack<br>
                    Which Time Tracking Tool is Right for You?
                  </a>
                  <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Jan 20, 2025</p>
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
                <img src="{{asset('public/assets/img/staffviz-vs-toggltrack.webp')}}" alt="staffviz-vs-toggltrack">
              </div>
              <div class="col-lg-7 text">
                <a href="{{url('/blogs/staffviz-vs-toggltrack-which-time-tracking-tool-is-right-for-you')}}">
                  StaffViz Vs. Toggltrack<br>
                  Which Time Tracking Tool is Right for You?
                </a>
                <div class="d-flex align-items-center blog-date">
                  <div class="auth-img">
                    <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                  </div>
                  <div class="date-text">
                    <h6>Tracey Taylor</h6>
                    <p>Jan 20, 2025</p>
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