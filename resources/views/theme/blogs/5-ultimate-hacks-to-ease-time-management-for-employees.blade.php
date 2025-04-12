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
          <h6 class="category-name">Employee Monitoring</h6>
          <h6 class="category-name">Time Tracking</h6>
          </div>
          
          <h1>5 Ultimate Hacks to Ease Time Management for Employees and Yield Higher Productivity </h1>
        </div>
        <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
          <div class="d-flex align-items-center">
            <div class="single-detail">
              <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
            </div>
            <div class="single-detail">
              <p>Dec 20, 2024</p>
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
        <img class="main-banner-img" src="{{asset('/public/assets/img/time-management-hacks/image-1.webp')}}"
          alt="Blog Main">
        <p>Time management is a skill that every person isn’t bestowed with. But being a business owner, you want every
          single resource in your organization as much productive as possible, which isn’t possible without proper time
          management. </p>
        <p id="What’s Time Managment?"><b>What’s Time Managment?</b></p>
        <p>In corporate world the simplest explanation is “Doing more in less time!” </p>
        <p>To achieve higher productivity, the obvious solution businesses come up with is to train their employees in
          the art of time management. But who got time for the long sessions at the cost of productive hours? By trying
          to train employees through sessions will entangle you in the paradox of more time consumption on sessions
          about time saving. seem unimpressive? Of course, it is not the most effective way either. </p>
        <p>So, training employees in a traditional way is futile. But there are a few ways that have been proven to
          improve time management for the employees. </p>
        <p>Here are five ultimate hacks to ease time management for employees. </p>
        <h4 id="5 Ways to Ease Time Managment for Employees">5 Ways to Ease Time Managment for Employees </h4>
        <p>Time management can be made easy for the employees by using some effective methods that are tested and tried
          out to achieve the maximum efficiency on both individual and organizational level. The following are the
          methods that can instantly enhance the efficiency of the employees. </p>
        <p id="Technology Powered Time Management Solutions"><b>1. Technology Powered Time Management Solutions</b> </p>
        <p>Time Management Software like StaffViz is so far the best time management solution amongst all other options.
        </p>
        <p>Time Managment is the skill that everyone should learn but learning the skill requires practice and
          consistency which everyone may not have. In such cases, the time management software works best. </p>
        <p>Time management software are designed to help professionals to keep track of their time for each task they
          perform, which simply adds a sense of accountability in the employees; urging them to perform better. </p>
        <p>The following is tested and tried out features that best time tracking software offer to ensure higher
          productivity. </p>
        <p id="Time Tracking"><b>a. Time Tracking </b></p>
        <p>The major function every time management software serves is keeping time records for each task. StaffViz also
          keeps track of each task and creates time logs for each employee separately. This way management will have
          data on all the productivity pitfalls, and they can enhance employee productivity by coming up with data
          driven solutions. </p>
        <p id="Activity Monitoring "><b> b. Activity Monitoring </b></p>
        <p>Gone are the days when there was a manager on the round, keeping an eye on everything going on physically. In
          modern days, such surveillance doesn’t work, but StaffViz can keep track of all the activities of your
          employees without causing any inconvenience. </p>
        <p id="Productivity Managment"><b>c. Productivity Managment </b></p>
        <p>With productivity management tools like task automations, project management and tasks timesheets, the time
          management gets easier for the employees and productivity enhances. </p>
        <p id="Employee Training"><b>d. Employee Training </b></p>
        <p>Trained employees are far more productive, and they manage each task quite efficiently and flawlessly. That’s
          why regular training is crucial to keep the employees up to date to equip them with skills that make them more
          efficient at their jobs. </p>
        <p>With StaffViz built-in training module employees can learn skills individually at their own pace and
          contribute to the organization’s growth. </p>
        <div class="try-staffviz-box text-center">
          <h5>The Best Time Managment Software</h5>
          <p>StaffViz is the best time management software built with a core purpose of helping businesses achieve
            ultimate productivity at the lowest possible cost. With awesome features like timesheet management, activity
            monitoring, employee training and workflow management, this software serves the best for all small- and
            large-scale organizations. Join StaffViz and embrace enhanced productivity.</p>
          <a href="{{url('/pricing-plans')}}">START FREE TRIAL</a>
          <img class="swirling-lines" src="{{asset('/public/assets/img/swirling-lines.png')}}" alt="Swirling Lines">
        </div>
        <p id="Eisenhower Urgent/Important Matrix"><b>2. Eisenhower Urgent/Important Matrix </b></p>
        <p>This method follows a chart with 4 blocks for which the bifurcation is as follows </p>
        <ul>
          <li>Task A is the highest priority task as it is Urgent and Important, so it must be done at the earliest
            possible time. </li>
          <li>Task B is an important task but does not need to be completed urgently so it should be the second
            priority. </li>
          <li>Task C is an urgent task, but it is not that important, so it should not be first on the priority list.
          </li>
          <li>Task D is neither important, nor urgent; that means a delay in this task completion won’t get you in
            trouble. </li>
        </ul>
        <img class="mb-4" src="{{asset('/public/assets/img/time-management-hacks/image-2.webp')}}"
          alt="Blog Main">
        <p>The method is easy and simple. To use this method, you just need to set your tasks in the four given brackets
          based on the task’s urgency and importance. Eisenhower’s method is quite helpful in managing the order of the
          tasks and being productive.</p>
        <p id="Task Management by Time"><b>3. Task Management by Time </b></p>
        <div class="grey-box text-center">
          <p>“Work expands so as to fill the time available for its completion.” </p>
          <p style="width:max-content;max-width:100%;margin-left: auto;">- <b>Cyril Northcote Parkinson </b></p>
        </div>
        <p>The famous quote above also known as Parkinson’s Law was said by the British historian Parkinson – which
          states that time to get each task done is elongated by the available time to complete it. Which means that
          completion time for each task should not be short or long enough to leave room for idle time. Time for each
          task should be accurate enough just to complete it, in order to achieve the maximum productivity without
          losing the quality of the job done. </p>
        <p id="How to Apply Parkinson’s Law "><b>How to Apply Parkinson’s Law</b></p>
        <p>To apply Parkinson’s law, it is necessary to perform the task in the real-time in the best possible manner
          and track the time to till the completion. Then the calculated time is set as the benchmark time for the task
          completion and anyone who works on the task is supposed to complete it within the benchmark time. </p>
        <p>Organizations that perform repeated tasks in the same manner can opt for this method, but many organizations
          may not be able to implement Parkinson’s law as their nature of work and tasks are different every day, so the
          time required to complete each task also varies accordingly. </p>
        <p id="Systematic Time Saving Approach "><b>4. Systematic Time Saving Approach </b></p>
        <p>A systematic approach to time management is to line work for your employees in such a way that they do not
          face difficulties, face delays and problems during any task they perform. In a systematic approach the work is
          designed according to available hours. Using a systematic time-saving approach employee productivity can be
          increased by up to 2-3x. </p>
        <p id="How It Works"><b>How It Works</b> </p>
        <p>In applying a systematic approach to time management, a few steps are necessary to be taken to achieve higher
          efficiency. </p>
        <p id="Analyze The Tasks"><b>a. Analyze The Tasks</b> </p>
        <p>To build a system that runs smoothly and yields higher efficiency requires some back working. In systematic
          time saving approach, analyzing the tasks is the key pillar that saves most of the time. </p>
        <p id="Remove Hurdles"><b>b. Remove Hurdles </b></p>
        <p>The second most important thing is removing any sort of disruptions and issues that may cause delay in task
          completion. These hurdles could be technical or non-technical. Technical errors can be any sort of hardware or
          software issue in the devices, internet speed and so on. Non-Technical issues are excessive meetings,
          burnouts, lack of sleep and so on. </p>
        <p id="Set Time Limits"><b>c. Set Time Limits</b></p>
        <p>It is proven that limited time tasks yield higher productivity and surprisingly bring better results. While
          setting the time limits, it should be considered that the time limit should be optimal enough that there is no
          compromise over quality. </p>
        <p id="Organized Workflow"><b>5. Organized Workflow</b> </p>
        <p>Most of the small and medium scale businesses often face the challenge of unorganized workflow, which causes
          more idle time, and lessen productive hours. To cope with such problems, prompt action should be taken. </p>
        <p id="Standardize Your Process"><b>a. Standardize Your Process</b></p>
        <p>To standardize the process, it is important to deeply study each task and make sure to document everything to
          create a single standardized process for each employee to avoid any ambiguity. </p>
        <p id="Create Work Checklist"><b>b. Create Work Checklist </b></p>
        <p>Checklists are great to make sure that everything is done perfectly fine, and all the details are followed by
          the team members while getting the job done. Checklists save you time by ensuring zero errors in the finalized
          work. </p>
        <p id="Use Time Blocking Technique"><b>c. Use Time Blocking Technique </b></p>
        <p>Time blocking or setting specific time goals for each job creates a psychological effect of urgency that
          helps you complete the task to achieve the milestone in specific time. </p>
        <h4 id="Summing Up">Summing Up </h4>
        <p>For the businesses, the resources are the core assets and by making them efficient you not only empower them
          but also add value to your organization. Among the above 5 ways to ease time management for employees, you’ll
          need to check the method that best suits your organization. Effective time management is possible by using an
          effective time management method that not only saves you time but also makes your products or services better.
        </p>
        <p>StaffViz is the best software built to resolve all the employee management issues. This modern software is
          equipped with all the time management tools that help employees manage their work and keep them aligned with
          the allocated time. </p>
        <div class="try-staffviz-box text-center">
          <h5>Sign up for StaffViz now and start a free trial with zero features restrictions.</h5>
          <a href="{{url('/pricing-plans')}}">START FREE TRIAL</a>
          <img class="swirling-lines" src="{{asset('/public/assets/img/swirling-lines.png')}}" alt="Swirling Lines">
        </div>

        <div id="faqs" class="faqs">
          <h2 class="heading">FAQs</h2>
          <div class="single-item">
            <h4>What is Time Management? </h4>
            <p>Time Management is the art of prioritizing and organizing tasks to make the most of your time. It empowers you to work smarter by setting goals, planning, and minimizing distractions. </p>
          </div>
          <div class="single-item">
            <h4>Is time management skills training a viable option? </h4>
            <p>Time management skills training can be beneficial, but it often leads to the paradox of spending more time in sessions than saving. This makes it less viable compared to investing in time management software, which is more cost-effective and efficient. </p>
          </div>
          <div class="single-item">
            <h4>How can StaffViz improve time management for employees? </h4>
            <p>StaffViz enhances time management by providing detailed insights into how employees spend their time. It tracks breaks, idle periods, project hours, and time spent on specific tasks, enabling employees to identify inefficiencies and optimize their workflows. </p>
          </div>
          <div class="single-item">
            <h4>Does StaffViz work for individual employees only?! </h4>
            <p>No, StaffViz is designed to support not just individual employees, but also teams and entire departments. It provides comprehensive time management insights that facilitate collaboration, enhance overall productivity, and streamline operations at every level of the organization. </p>
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
              <a href="#What’s Time Managment?">What’s Time Managment?</a>
            </li>
            <li>
              <a href="#5 Ways to Ease Time Managment for Employees">5 Ways to Ease Time Managment for Employees</a>
              <ol>
                <li>
                  <a href="#Technology Powered Time Management Solutions">Technology Powered Time Management Solutions</a>
                  <!-- <ul>
                    <li>
                      <a href="#Time Tracking">Time Tracking</a>
                    </li>
                    <li>
                      <a href="#Activity Monitoring">Activity Monitoring</a>
                    </li>
                    <li>
                      <a href="#Productivity Managment">Productivity Managment</a>
                    </li>
                    <li>
                      <a href="#Employee Training">Employee Training</a>
                    </li>
                  </ul> -->
                </li>
                <li>
                  <a href="#Eisenhower Urgent/Important Matrix">Eisenhower Urgent/Important Matrix</a>
                </li>
                <li>
                  <a href="#Task Management by Timex">Task Management by Time</a>
                  <!-- <ul>
                    <li>
                      <a href="#How to Apply Parkinson’s Law">How to Apply Parkinson’s Law</a>
                    </li>
                  </ul> -->
                </li>
                <li>
                  <a href="#Systematic Time Saving Approach">Systematic Time Saving Approach</a>
                  <!-- <ul>
                    <li>
                      <a href="#How It Works">How It Works</a>
                      <ul>
                        <li>
                          <a href="#Analyze The Tasks">Analyze The Tasks</a>
                        </li>
                        <li>
                          <a href="#Remove Hurdles">Remove Hurdles</a>
                        </li>
                        <li>
                          <a href="#Set Time Limits">Set Time Limits</a>
                        </li>
                      </ul>
                    </li>
                  </ul> -->
                </li>
                <li>
                  <a href="#Organized Workflow">Organized Workflow</a>
                  <!-- <ul>
                    <li>
                      <a href="#Standardize Your Process">Standardize Your Process</a>
                    </li>
                    <li>
                      <a href="#Create Work Checklist">Create Work Checklist</a>
                    </li>
                    <li>
                      <a href="#Use Time Blocking Technique">Use Time Blocking Technique</a>
                    </li>
                  </ul> -->
                </li>
              </ol>
            </li>
            <li>
              <a href="#Summing Up">Summing Up</a>
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