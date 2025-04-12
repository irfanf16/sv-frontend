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

<!-- Blog Detail Section -->
<section class="blog-detail-section">
  <div class="container-fluid">
    <div class="row justify-content-between">
      <div class="col-lg-7 col-md-8 order-md-1 order-2 blog-detail-box">
        <div class="start-text">
          <div class="cats">
          <h6 class="category-name">Remote Work Optimization</h6>
          <h6 class="category-name">Employee Monitoring</h6>
          </div>
          
          <h1>Hybrid or Remote Work, <br> Which is Better?</h1>
        </div>
        <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
          <div class="d-flex align-items-center">
            <div class="single-detail">
              <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
            </div>
            <div class="single-detail">
              <p>Dec 16, 2024</p>
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
        <img class="main-banner-img" src="{{asset('/public/assets/img/hybrid-remote-work-detail-img.webp')}}"
          alt="Blog Main">
        <p>The traditional work model has undergone a massive transformation due to the advancement in technology and
          the reliability of internet.<br> Companies now realize the importance of work flexibility and moving on to
          remote or hybrid models.</p>
        <div class="grey-box">
          <p><i><b>According to EY's Future Workplace Index</b><br>
              "After the COVID-19 pandemic, approximately 60% of companies adopted a hybrid work model, while about 20%
              moved to fully remote operations."</i></p>
        </div>
        <p>In the middle of the world's transition to the new working models, employers and employees often get puzzled
          when thinking about the most favorable option for them. That's why in this blog, we'll discuss both remote and
          hybrid working models, their pros & cons, and everything you need to know about, so you make the right
          decision./p>
        <p>First let's understand both remote and hybrid work models along with their common points and distinctions.
        </p>
        <h4 id="remote-work">Remote Work Model</h4>
        <p>The remote work model lets employees work from anywhere outside the traditional office. Imagine working from
          your favorite coffee shop, your cozy home office, beside the riverbank, or anywhere with a good internet
          connection.</p>
        <p>Remote work heavily relies on technology like Zoom, Slack, and Asana to keep everyone connected and
          organized. It's all about using technology to stay connected and productive, no matter where you are.</p>
        <p>Since team members might be in different time zones, communication is often asynchronous. Meaning you can
          respond when available unless something is urgent.
          <br>
          Regular virtual meetings help maintain team cohesion and ensure everyone is on the same page. Plus, your home
          office setup is crucial, needing reliable equipment like a good computer and a comfortable chair.
        </p>
        <p>Success in remote work is measured by your results and output rather than the hours spent working. In such a
          work setting you'll enjoy a high degree of independence, managing your own time and tasks, much like being
          your own boss.</p>
        <p id="pros-cons-remote"><b>Pros and Cons of the Remote Work Model</b></p>
        <p><b>Pros</b></p>
        <ul>
          <li><b>Flexibility & Work-Life Balance:</b> Remote work offers flexibility, allowing you to structure your day
            around your most productive hours and personal commitments.</li>
          <li><b>Reduced Commuting Time & Costs:</b> Eliminating the commute saves time and cuts travel expenses.</li>
          <li><b>Access to Global Talent:</b>Companies can hire talent from anywhere, bringing in diverse skills and
            perspectives.</li>
          <li><b>Increased Productivity:</b>Fewer office distractions and personalized workspaces often lead to more
            efficient workdays.</li>
        </ul>
        <p><b>Cons</b></p>
        <ul>
          <li><b>Isolation & Lack of Team Cohesion:</b>Remote work can feel isolating, and maintaining team connections
            requires extra effort.</li>
          <li><b>Communication Challenges:</b> Digital tools help, but they can't fully replace in-person interactions,
            leading to potential miscommunication.</li>
          <li><b>Difficulty Setting Boundaries:</b>It's harder to separate work and personal life when working from
            home, risking burnout.</li>
          <li><b>Dependence on Technology:</b>Reliable tech and internet are essential, and outages can disrupt your
            day. Setup costs can also be high.</li>
        </ul>
        <h4 id="hybrid-work">Hybrid Work Model</h4>
        <p>A hybrid work model blends remote work with in-office days, giving you the flexibility to choose where you
          work based on your tasks. It combines the freedom of remote work with the benefits of office interactions,
          providing a balanced work experience.</p>
        <p>In a hybrid work model, you enjoy the flexibility of working from home and the structure of office life. Many
          companies have specific days for office work, ideally for meetings, brainstorming sessions, and team bonding.
        </p>
        <p>The hybrid model enhances collaboration through a mix of virtual and in-person meetings, making in-office
          days great for face-to-face interactions. Hybrid work supports a healthy work-life balance, allowing you to
          choose your work environment based on your personal and professional needs.</p>
        <p id="pro-hybrid"><b>Pros</b></p>
        <ul>
          <li><b>In-Office & Remote Benefits:</b>Combines flexibility of remote work with the structure of office,
            catering to different work styles.</li>
          <li><b>In-Person Collaboration:</b>Scheduled office days enable face-to-face interactions, boosting
            collaboration and team cohesion.</li>
          <li><b>Flexible Arrangements:</b>Employees can choose when to work remotely or come into the office, balancing
            personal and professional needs.</li>
          <li><b>Accommodates Preferences:</b>Supports diverse work preferences, allowing employees to work in the
            environment where they are most productive.</li>
        </ul>
        <p id="con-hybrid"><b>Cons</b></p>
        <ul>
          <li><b>Communication Issues:</b>Split teams can face challenges in staying aligned, risking information gaps.
          </li>
          <li><b>Logistics Challenges:</b> Managing office space and remote tools requires careful planning and flexible
            infrastructure.</li>
          <li><b>Employee Disparities:</b> Remote workers may miss out on spontaneous office discussions, leading to
            feelings of exclusion.</li>
          <li><b>Coordination Complexity:</b>Hybrid models demand precise scheduling to ensure the right people are in
            the right place, adding managerial complexity.</li>
        </ul>
        <h4 id="remote-vs-hybrid">Remote Vs. Hybrid Work Model</h4>
        <div class="compare-table">
          <table>
            <thead>
              <tr>
                <th>Aspect</th>
                <th>Remote Work</th>
                <th>Hybrid Work</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="white-space" colspan="3"></td>
              </tr>
              <tr>
                <td>Location</td>
                <td>Work from anywhere in the world</td>
                <td>Combination of both office and remote work</td>
              </tr>
              <tr>
                <td>Flexibility</td>
                <td>No commute hassle</td>
                <td>Both in-person and online collaboration</td>
              </tr>
              <tr>
                <td>Collaboration</td>
                <td>Entirely digital via online tools</td>
                <td>Combination of both office and <br> remote work</td>
              </tr>
              <tr>
                <td>Work Schedule</td>
                <td>May offer flexible hours or follow traditional hours</td>
                <td>Structured schedule with designated office/remote days</td>
              </tr>
              <tr>
                <td>Team Interaction</td>
                <td>Virtual-only interaction through tools like Zoom/Slack</td>
                <td>Blend of in-person and virtual meetings</td>
              </tr>
              <tr>
                <td>Commute</td>
                <td>No commuting required</td>
                <td>Requires commuting on designated office days</td>
              </tr>
              <tr>
                <td>Work-Life Balance</td>
                <td>Greater autonomy, but lines between work and personal life can blur</td>
                <td>Balanced structure, mixing flexibility and face-to-face interaction</td>
              </tr>
              <tr>
                <td>Technology Dependence</td>
                <td>High dependence on digital tools for communication</td>
                <td>Moderate dependence; in-person collaboration possible</td>
              </tr>
              <tr>
                <td>Culture/Team Building</td>
                <td>It can be harder to build a strong team culture</td>
                <td>Easier to maintain team culture with in-person interaction</td>
              </tr>
              <tr>
                <td>Location</td>
                <td>Ideal for jobs that require independent, focused work</td>
                <td>Suited for jobs that require occasional teamwork and in-person tasks</td>
              </tr>
            </tbody>
          </table>
        </div>
        <h4 id="reimagining-employee">Choosing Between Remote and Hybrid Work Models</h4>
        <p>Amongst many factors that you should consider before choosing between remote and hybrid work models, there
          are a few that are crucial. Assess whether your employees get tasks done better remotely or if they need
          in-person interaction to stay productive. Weigh the financial implications of each model - does saving on
          office space outweigh the tech setup for remote work? All these factors will lead you to the right choice.</p>
        <p id="employee-preferences"><b>Employee Preferences</b>
          <br>
          Align the work model with your company's culture. Do your employees crave flexibility or face requirements for
          the employees to ensure that they all have the necessary settings at home to avoid any technical errors?
        </p>
        <p>The best way to find out is to conduct an organization-wide survey to find out exactly what your employees
          want. Remember, the right choice supports everyone's best work.</p>
        <p id="tech-infrastructure"><b>Tech and Infrastructure</b>
          <br>
          Both models require solid tech, like reliable internet, collaborative tools, and strong cybersecurity. Make
          sure your setup can handle the demands of your chosen work model without glitches.
        </p>
        <p>Like in remote setting your employees should be connected to a powerful cloud server for easy data exchange.
          But for the Hybrid work model, you'll need to handle the in-house infrastructure at the office and make sure
          that the resources working from home have steady access to your data server.</p>
        <p id="fixed-cost"><b>Fixed and Running Costs</b>
          <br>
          Cost comparison is a must when choosing between remote and hybrid work models.
        </p>
        <p>When comparing the Remote Vs. Hybrid based on cost, the remote options seem superior as you cut the cost of
          renting and maintaining office space.</p>
        <p>All the above benefits of the remote work model should not come at limited productivity. In that case, if you
          notice higher productivity in a hybrid work setting that can also cover your fixed expenses like rent, bills,
          and office maintenance, then the hybrid work model is best for you.</p>
        <p id="communication"><b>Communication & Collaboration</b>
          <br>
          Regular check-ins keep everyone connected and aligned with their project as there's less chance of
          ambiguities, which gives the hybrid model the upper hand.
        </p>
        <p>In the case of remote models, there are more chances of communication errors due to mismatched routines,
          technical issues, and many other reasons. With effective collaborations and project management tools, you can
          mitigate these problems with ease.</p>
        <p>Comparing which work model allows you to communicate better with teams, and you'll find the right choice for
          you.</p>
        <h4 id="productivity-key">Productivity is The Key</h4>
        <p>Both remote and hybrid work models have pros and cons, so now you need to decide whether to go with a remote
          or hybrid work model. Productivity should be your ultimate reason for selecting any work environment.</p>
        <p>Productivity, in simple terms, refers to doing more in less time.</p>
        <p>All the efforts that businesses put into changing the work environment, letting employees choose what works
          best for them, and all the things they facilitate employees with have a single core purpose of achieving
          higher productivity.</p>
        <p>So, the best method is transitioning to a partial hybrid and partial remote setting for a few months and
          testing the productivity results. Whatever yields the higher results is the right option for you to choose.
        </p>
        <h4 id="all-in-one-solution">StaffViz— All-In-One Solution for Remote and Hybrid Work Settings</h4>
        <p>Whether it's the remote or hybrid work model, both require meticulous management for a set of software/tools,
          schedules, communication, and scrum meetings. And managing all these things can get complex, especially when
          you are managing everything with different software.</p>
        <p>StaffViz is the all-in-one solution for all the projects, tasks, employees, timesheets, and productivity
          management problems faced by hybrid and remote workers.</p>
        <p>The software is capable of monitoring the real-time activity of all the employees, capturing their screens,
          helping them manage projects, aligning teams with deadlines, and even helping your employees learn new things
          with training management solutions.</p>
        <p>So, whether you choose to go fully remote or opt for a hybrid work setting for your business, StaffViz is the
          must-have productivity management software to keep your business running at its full potential.</p>
        <div class="try-staffviz-box text-center">
          <h5>Easily Manage Remote and Hybrid Teams<br> with StaffViz</h5>
          <p>Managing remote and hybrid workers can be complex; with<br> StaffViz, you are in control. <br>Start a free
            trial today to experience excellence yourself.</p>
          <a href="{{url('/pricing-plans')}}">START FREE TRIAL</a>
          <img class="swirling-lines" src="{{asset('/public/assets/img/swirling-lines.png')}}" alt="Swirling Lines">
        </div>
        <div id="faqs" class="faqs">
          <h2 class="heading">FAQs</h2>
          <div class="single-item">
            <h4>What exactly is the difference between hybrid and in-office work? </h4>
            <p>In the hybrid, you can choose to work from home or the office, but in the in-office work, you must work
              from the office. </p>
          </div>
          <div class="single-item">
            <h4>Do you still need to come to the office in a remote setting? </h4>
            <p>Usually, remote workers never have to visit the office, but it depends. In some cases, you might have to
              visit the office occasionally to perform necessary tasks that require your presence at the office. </p>
          </div>
          <div class="single-item">
            <h4>What work model is good for me?</h4>
            <p>It depends on several factors; can you work isolated? Then maybe remote work could be a better fit for
              you. And if you require office space for that environment shift, then hybrid could be a better choice. 
            </p>
          </div>
          <div class="single-item">
            <h4>How does StaffViz ease management for remote and hybrid businesses? </h4>
            <p>StaffViz is a comprehensive software solution offering a range of tools such as employee management,
              timesheets, snapshots, project management, and employee training. These features are specifically designed
              to boost overall workforce productivity and streamline operations.   </p>
          </div>
          <div class="single-item">
            <h4>How can StaffViz cater to both remote and hybrid work models? </h4>
            <p>StaffViz is designed to monitor, train, and manage employees irrespective of their location. Both remote
              and in-office employees are assigned specific IDs that provide admins with data and insights about
              employee activity in real-time. </p>
          </div>
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
      <div class="col-xl-4 col-lg-5 col-md-4  order-lg-2 order-1 table-content">
        <h5>Table of Content</h5>
        <div class="table-content-box">
          <ul>
            <li>
              <a href="#remote-work">Remote Work Model</a>
              <!-- <ul>
                <li>
                  <a href="#pros-cons-remote">Pros and Cons of the Remote Work Model</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#hybrid-work">Hybrid Work Model</a>
              <!-- <ul>
                <li>
                  <a href="#pro-hybrid">Pros</a>
                </li>
                <li>
                  <a href="#con-hybrid">Cons</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#remote-vs-hybrid">Remote Vs. Hybrid Work Model</a>
            </li>
            <li>
              <a href="#reimagining-employee">Choosing Between Remote and Hybrid Work Models</a>
              <!-- <ul>
                <li>
                  <a href="#employee-preferences">Employee Preferences</a>
                </li>
                <li>
                  <a href="#tech-infrastructure">Tech and Infrastructure</a>
                </li>
                <li>
                  <a href="#fixed-cost">Fixed and Running Costs</a>
                </li>
                <li>
                  <a href="#communication">Communication & Collaboration</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#productivity-key">Productivity is The Key</a>
            </li>
            <li>
              <a href="#all-in-one-solution">StaffViz— All-In-One Solution for Remote and Hybrid Work Settings</a>
            </li>
            <li>
              <a href="#faqs">FAQs</a>
            </li>
          </ul>
        </div>
        <div class="d-md-block d-none">
          <h6 class="article-list-title">Related Articles</h6>
          <div class="related-blogs-list">
            <div class="single-blog-box">
              <div class="row">
                <div class="col-lg-5 img">
                  <img src="{{asset('public/assets/img/time-tracking-important-detail-img.webp')}}"
                    alt="time-tracking-important-blog">
                </div>
                <div class="col-lg-7 text">
                  <a href="{{url('/blogs/why-time-tracking-is-important-essential-role-in-modern-organizations')}}">
                    Why Time Tracking is Important: The Essential Role of Time Tracking in Modern Organizations
                  </a>
                  <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Dec 6, 2024</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-blog-box">
              <div class="row">
                <div class="col-lg-5 img">
                  <img src="{{asset('public/assets/img/understanding-quiet-quitting-detail-img.webp')}}"
                    alt="understanding-quiet-blog">
                </div>
                <div class="col-lg-7 text">
                  <a href="{{url('/blogs/what-is-quiet-quitting-and-how-to-address-it')}}">
                    Understanding Quiet Quitting: What it is and How to Address it?
                  </a>
                  <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Dec 9, 2024</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-blog-box">
              <div class="row">
                <div class="col-lg-5 img">
                  <img src="{{asset('public/assets/img/avoid-micromanagement-detail-img.webp')}}"
                    alt="avoid-micromanagment-blog">
                </div>
                <div class="col-lg-7 text">
                  <a href="{{url('blogs/how-to-avoid-micromanagement-using-advanced-solutions')}}">
                    How To Avoid Micromanagement Using Advanced Solutions
                  </a>
                  <div class="d-flex align-items-center blog-date">
                    <div class="auth-img">
                      <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                    </div>
                    <div class="date-text">
                      <h6>Tracey Taylor</h6>
                      <p>Dec 12, 2024</p>
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
                <img src="{{asset('public/assets/img/time-tracking-important-detail-img.webp')}}"
                  alt="time-tracking-important-blog">
              </div>
              <div class="col-lg-7 text">
                <a href="{{url('/blogs/why-time-tracking-is-important-essential-role-in-modern-organizations')}}">
                  Why Time Tracking is Important: The Essential Role of Time Tracking in Modern Organizations
                </a>
                <div class="d-flex align-items-center blog-date">
                  <div class="auth-img">
                    <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                  </div>
                  <div class="date-text">
                    <h6>Tracey Taylor</h6>
                    <p>Dec 6, 2024</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="single-blog-box">
            <div class="row">
              <div class="col-lg-5 img">
                <img src="{{asset('public/assets/img/understanding-quiet-quitting-detail-img.webp')}}" alt="understanding-quiet-blog">
              </div>
              <div class="col-lg-7 text">
                <a href="{{url('/blogs/what-is-quiet-quitting-and-how-to-address-it')}}">
                  Understanding Quiet Quitting: What it is and How to Address it?
                </a>
                <div class="d-flex align-items-center blog-date">
                  <div class="auth-img">
                    <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                  </div>
                  <div class="date-text">
                    <h6>Tracey Taylor</h6>
                    <p>Dec 9, 2024</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="single-blog-box">
            <div class="row">
              <div class="col-lg-5 img">
                <img src="{{asset('public/assets/img/hybrid-remote-work-detail-img.webp')}}" alt="hybrid-work-list-img">
              </div>
              <div class="col-lg-7 text">
                <a href="{{url('/blogs/hybrid-or-remote-work-who-is-better')}}">
                  Hybrid or Remote Work: Which is Better?
                </a>
                <div class="d-flex align-items-center blog-date">
                  <div class="auth-img">
                    <img src="{{asset('public/assets/img/tracy.png')}}" alt="auth-img">
                  </div>
                  <div class="date-text">
                    <h6>Tracey Taylor</h6>
                    <p>Dec 16, 2024</p>
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