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
          <h6 class="category-name">Employee Monitoring</h6>
          <h1>How To Avoid Micromanagement <br> Using Advanced Solutions</h1>
          
        </div>
        <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
          <div class="d-flex align-items-center">
            <div class="single-detail">
              <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
            </div>
            <div class="single-detail">
              <p>Dec 12, 2024</p>
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
        <img class="main-banner-img" src="{{asset('/public/assets/img/avoid-micromanagement-detail-img.webp')}}"
          alt="Blog Main">
        <p>Nowadays, as the nature of jobs and work trends change, companies care about their employees’ health,
          work-life balance, and other workplace issues. Despite the shift in trends, micromanagement is still the most
          common problem many business owners and managers face in their workplace.</p>
        <div class="grey-box">
          <p><i>“About <b>59% of people claim that they were managed by micromanagers</b> at some point in their work
              experience.”</i></p>
          <p><i>A Study by <b>Trinity Solutions</b> shows that about 70% of people who were micromanaged often
              considered quitting the job, and 30% of them actually quit.</i></p>
        </div>
        <p>Turnout micromanagement is a common issue that requires serious attention. Overlooking this issue can cause a
          massive loss in terms of quality human capital.</p>
        <p>That’s why, in this blog, we’ll talk about what micromanagement is, ways to analyze micromanagement, and,
          most importantly, solutions to avoid micromanagement.</p>
        <h4 id="what-is-micromanagement">What Is Micromanagement?</h4>
        <p>Micromanagement refers to a specific style of management that tends to have excessive control over
          subordinates to keep the environment focused and targeted.</p>
        <p>Micromanagers are the people who keep an eye on their employees, look for even small details in their work,
          are less flexible with team members, and always keep hovering above people’s heads to monitor their work.</p>
        <p>Micromanagers may have the intention to get the most done in the meantime, but unfortunately, their actions
          have adverse effects on employees’ productivity.</p>
        <p>There could be many reasons triggering such behavior, but one sure thing is that micromanagement can never be
          beneficial for organizations. That’s why it’s crucial to avoid it at any cost.</p>
        <p>The first step to deal with micromanagement is to analyze its existence. Let us show you the most optimal
          ways of analyzing micromanagement in your workplace.</p>
        <h4 id="analyze-micro">How To Analyze Micromanagement?</h4>
        <p>Micromanagement isn’t hard to identify in any organization. Just look for a few signs, and you’ll find out if
          micromanagement exists in a certain organization or a specific team.
        </p>
        <p><b>Inflexible Work Approach</b><br>
          If the organization has extremely strict rules to complete a certain type of work and doesn’t have room for
          creative thinking, this is the exact definition of micromanagement. In such organizations or teams, all the
          tasks follow a pattern with even the smallest details. Such unnecessary details only add more time to the task
          completion and yield nothing extraordinary.
        </p>
        <p>In alternative situations, where employees are given a sense of anatomy, there are higher chances that
          they’ll come up with greater solutions and better results and contribute well to the organization’s growth.
          Such an open culture propels any business to unparalleled growth.</p>
        <p><b>Lack Of Trust</b><br>
          Managers who don’t trust their teammates have higher chances of failure in the long run. When the tasks are
          complex or of higher priority, the simple solution micromanagers will come up with is “I am doing it myself.”
        </p>
        <p>Lack of trust in the team will only lead to disaster, as with this behavior, managers get a lot of tasks
          accumulated on their plate. Results? Over time, sittings get frequent, team growth gets neglected, and trust
          issues start rising within teams.</p>
        <p><b>Continuous Monitoring</b><br>
          Micromanagers need to understand that always keeping an eye on their teammate’s cursor, checking if they are
          working or not, and frequently asking about the task status will not get the work done any faster. Continuous
          monitoring is unbearable for most people and should be avoided at any cost.
        </p>
        <p>Monitoring is important to some extent, but it can be done smartly without bothering your subordinates using
          employee management software like StaffViz. With StaffViz managers can get access to employee activity,
          current tasks, and time taken for the project completion without causing any disturbance.</p>
        <p><b>Higher Employee Turnover</b><br>
          Higher Employee Turnover in any organization is quite a concerning situation, as the talent acquisition
          process takes a good amount of time and effort. Employee turnover could be due to many factors, and
          micromanagement can be a major reason your employees are fleeing to other organizations.
        </p>
        <div class="grey-box">
          <p><i>A study titled <b>“Micromanagement and its Impact on millennial followership styles”</b> published in
              the Leadership & Organization Development Journal found that <b>“36% of respondents changed jobs due to
                micromanagement.”</b></i></p>
        </div>
        <p>People get fed up with excessive control, no recognition, and fewer learning opportunities, so they switch
          organizations. Many employees don’t want to switch organizations, but they look for other opportunities
          because of the micromanagers.</p>
        <p><b>Frequent Criticism</b><br>
          Criticism can either be constructive or destructive.<br>
          Constructive Criticism is what drives employees to learn new things and showcases their area of expertise that
          needs improvement. Destructive Criticism highlights your incompetencies without a solution, which eventually
          gets a person/team’s morale down, and eventually, they give up on learning and improving their mistakes.
        </p>
        <p>That’s why it’s important for managers to opt for a better approach when sharing a critical analysis of any
          employee’s work. Managers with good communication skills are more likely to avoid any escalation in such
          scenarios.</p>

        <div class="grey-box">
          <p><b>Am I A Micromanager</b><br>
            Ask yourself a few questions to know the answer.
          </p>
          <ul>
            <li>Do you frequently check on your team members to see if everyone’s working or not?</li>
            <li>Do you always check all the projects completed by your teammates?</li>
            <li>Do you prefer to get everything done your way and aren’t flexible about it?</li>
          </ul>
          <p>If the answer to the above questions is Yes, you are a micromanager.</p>
        </div>
        <h4 id="proven-method">Proven Methods to Avoid Micromanagement</h4>
        <p> Micromanagement can’t be skipped with a snap but can be avoided or reduced to none using advanced management
          solutions and techniques. Following are some proven methods to eradicate micromanagement from any organization
          regardless of the scale.
        </p>
        <p><b>Employee Management Software</b><br>
          Modern-day employees don’t really like the idea of being monitored all the time. However, managers need to
          report everything in meetings to highlight what is going on inside.
        </p>
        <p>So, how do you keep track of employees?</p>
        <p>Employee management software like StaffViz is quite handy for keeping track of an employee’s activity without
          even bothering them during work.</p>
        <p>Here’s how StaffViz enables managers to monitor employees without causing any inconvenience to employees.</p>
        <div class="grey-box">
          <p><b>One Software to Manage Everything</b><br>
            StaffViz is your one-window solution for higher productivity and hassle-free employee management. The
            software helps managers to get insights into ongoing projects, tasks, and internal activities. The following
            are the most useful features that every manager wishes to have.
          </p>
          <p><b>Automated Time Tracking</b><br>
            Keep track of all the projects and ongoing tasks through StaffViz.
          </p>
          <p><b>Project Management</b><br>
            Keep track of all the projects and ongoing tasks through StaffViz.
          </p>
          <p><b>Activity Monitoring</b><br>
            Monitor what your teammates are up to and optimize their tasks accordingly
          </p>
          <p><b>Automated Reporting</b><br>
            Get automated reports on every single project and task your teammates are working on.
          </p>
          <p><b>Employee Training</b><br>
            Train your team members and foster a culture of continuous learning and improving skills.
          </p>
        </div>
        <p><b>Build Trustful Relationship </b><br>
          Micromanagement can easily be avoided by creating a trustworthy environment where employees feel comfortable.
          Open communication, transparency, and consistent support build mutual trust.  </p>
        <p>So, how can you earn the trust of your team members?  </p>
        <p>Start encouraging your team to share their ideas, concerns, and innovative solutions for the problems you
          face. Trust your team with the complex tasks, and make sure you guide them so they don’t feel stranded.
          Normalize open communication so they can always share everything with you. </p>
        <p><b>Embrace Imperfections </b><br>
          “Nothing is Perfect.”<br>
          The statement is a universal truth, and if you are still persistent in achieving perfection you are going to
          end up suffering from micromanagement.  
        </p>
        <p>Instead of continuing a wild goose chase, try to let go of small mistakes and focus on these imperfections as
          a part of the learning process. Make sure to continue constructive Criticism, as it will lead your team to get
          stronger and better in their skills. </p>
        <p><b>Start Delegating </b><br>
          One of the best ways of avoiding micromanagement is to start delegating responsibilities. You might be
          thinking it inappropriate to delegate the responsibilities to untrained staff. Well, you’ve got to start from
          some point, so start small.</p>
        <p>Start Assigning small responsibilities to prepare the employees and test their abilities. Knowing your team
          better will help you a lot when assigning responsibilities. </p>
        <p>Delegating crucial tasks to your team will not only train them for the bigger responsibilities but also make
          them feel confident in their skills.  </p>
        <p>Make sure to guide your team, but don’t keep hovering above their heads. Let them do things their own way. 
        </p>
        <p><b>Take Feedback </b><br>
          Managers should always keep an eye on their actions and behavior from the other’s perspective, and the best
          way to do that is to continuously take feedback. </p>
        <p>Now, you must be wondering who the right person to get feedback from is. </p>
        <p>The best feedback you can get from your own team. But to do so, you must foster an open conversation culture
          among your team members. This way, you can get the right feedback and work on areas that need to be improved. 
        </p>
        <h4 id="summing-up">Summing Up</h4>
        <p>Micromanagement is fatal for the organizations and teams within it, so it must be eradicated. It ruins the
          purpose it stands for; which is achieving higher productivity. The effects of micromanagement are disastrous
          and lead organizations into the pitfalls of higher employee turnover, suffocating work culture, and limited
          creativity. Managers should always be in a state of self-analysis to avoid being engulfed by this severe
          problem. Follow the above methods to effectively avoid or eradicate micromanagement. </h4>
        <div class="try-staffviz-box text-center">
          <h5>StaffViz is a great solution to manage employees and keep track<br> of their performance without bothering
            them. </h5>
          <p>Start a free trial today and experience the ease StaffViz provides to<br> the managers. </p>
          <a href="{{url('/pricing-plans')}}">START FREE TRIAL</a>
          <img class="swirling-lines" src="{{asset('/public/assets/img/swirling-lines.png')}}" alt="Swirling Lines">
        </div>
        <div id="faqs" class="faqs">
          <h2 class="heading">FAQs</h2>
          <div class="single-item">
            <h4>What is Micromanagement? </h4>
            <p>Micromanagement refers to a specific style of management that tends to have excessive control over
              subordinates to keep the environment work focused. </p>
          </div>
          <div class="single-item">
            <h4>Who is a Micromanager? </h4>
            <p>Micromanagers are the people who keep an eye on their employees, look for even small details in their
              work, are less flexible with team members, and always keep hovering above people’s heads to monitor their
              work. </p>
          </div>
          <div class="single-item">
            <h4>How to analyze Micromanagement in your workspace? </h4>
            <p>Signs like inflexible work approach, lack of trust, continuous monitoring, higher employee turnover, and
              excessive criticism are the key indicators of micromanagement. </p>
          </div>
          <div class="single-item">
            <h4>How does StaffViz help eliminate quiet quitting?</h4>
            <p>StaffViz helps eliminate quiet quitting by tracking each employee's activity in real time, creating
              performance logs visible to management. This enables the identification of top performers and provides key
              performance indicators (KPIs) for each employee, making it easier for organizations to recognize and
              address issues related to quiet quitting.</p>
          </div>
          <div class="single-item">
            <h4>What are the best ways to avoid micromanagement? </h4>
            <p>Micromanagement can be avoided using the following solutions. </p>
            <ul>
              <li><b>Use employee monitoring software</b></li>
              <li><b>Trust your team with complex task </b></li>
              <li><b>Foster open communication culture </b></li>
              <li><b>Help improve instead criticizing</b></li>
              <li><b>Continuously take team feedback</b></li>
            </ul>
          </div>
          <div class="single-item">
            <h4>How StaffViz can help you avoid micromanagement? </h4>
            <p>Advanced software like StaffViz have all the tools to monitor employee's activity, projects progress,
              course performance and overall productivity of employees without causing any inconvenience during the
              work. </p>
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
              <a href="#what-is-micromanagement">What Is Micromanagement?</a>
            </li>
            <li>
              <a href="#analyze-micro">How To Analyze Micromanagement?</a>
            </li>
            <li>
              <a href="#proven-method">Proven Methods to Avoid Micromanagement</a>
            </li>
            <li>
              <a href="#summing-up">Summing Up</a>
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