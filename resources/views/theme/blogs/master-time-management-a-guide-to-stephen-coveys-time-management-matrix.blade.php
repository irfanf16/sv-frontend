@extends('theme.layouts.master')
@section("page-class", "index-page")
@section('css')
<style>
  .matrix-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    gap: 20px;
    width: 80%;
    max-width: 1000px;
    margin: 50px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .matrix-cell {
    border: 2px solid #ddd;
    padding: 20px;
    text-align: center;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .matrix-cell:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  }

  .title {
    font-size: 20px;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
    text-transform: uppercase;
  }

  .subheading {
    font-size: 16px;
    font-weight: 500;
    text-decoration: underline;
    color: #444;
    margin-bottom: 10px;
  }

  .examples {
    font-size: 14px;
    color: #555;
    line-height: 1.8;
  }

  .examples ul {
    list-style-type: none;
    padding: 0;
  }

  .examples li {
    padding: 5px 0;
  }

  /* Styling for Quadrant 1: Urgent & Important */
  .matrix-cell:nth-child(1) {
    background-color: #fce4ec;
    border: 2px solid #f06292;
  }

  /* Styling for Quadrant 2: Important but Not Urgent */
  .matrix-cell:nth-child(2) {
    background-color: #e8f5e9;
    border: 2px solid #81c784;
  }

  /* Styling for Quadrant 3: Urgent but Not Important */
  .matrix-cell:nth-child(3) {
    background-color: #fff3e0;
    border: 2px solid #ffb74d;
  }

  /* Styling for Quadrant 4: Neither Urgent nor Important */
  .matrix-cell:nth-child(4) {
    background-color: #e3f2fd;
    border: 2px solid #64b5f6;
  }

  /* Responsive Design: Adjusting for smaller screens */
  @media (max-width: 768px) {
    .matrix-container {
      grid-template-columns: 1fr;
      /* One column layout for mobile */
      width: 90%;
      /* Make container smaller for mobile */
      padding: 20px;
      /* Reduce padding */
    }

    .title {
      font-size: 18px;
      /* Slightly smaller font */
    }

    .matrix-cell {
      padding: 15px;
      /* Reduce padding */
    }

    .examples {
      font-size: 13px;
      /* Smaller font size */
    }
  }

  @media (max-width: 480px) {
    .matrix-container {
      width: 95%;
      /* Even smaller container for very small screens */
    }

    .title {
      font-size: 16px;
      /* Reduce title font size even further */
    }

    .matrix-cell {
      padding: 10px;
      /* Reduce padding further */
    }

    .examples {
      font-size: 12px;
      /* Even smaller text */
    }
  }

  /* Styling for the analogies inside each quadrant */
  .analogies {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 15px;
  }

  .analogy {
    margin: 10px 0;
    font-weight: 400;
    font-size: 14px;
    color: #333;
  }

  .analogy span {
    font-weight: 600;
    line-height: 1;
    color: #555;
    font-size: 13px;
  }

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
          <h6 class="category-name">Work-Life Balance</h6>
          <h6 class="category-name">Time Tracking</h6>
          </div>
          
          <h1>Master Time Management: <br>A Guide to Stephen Covey's Time Management Matrix </h1>
        </div>
        <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
          <div class="d-flex align-items-center">
            <div class="single-detail">
              <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
            </div>
            <div class="single-detail">
              <p>Jan 6, 2025</p>
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
        <img class="main-banner-img" src="{{asset('/public/assets/img/master-management/image-1.webp')}}"
          alt="Blog Main">
        <p>In corporate, keeping ahead of deadlines, managing the constant influx of emails, and leading teams all at
          the same time feels like a never-ending sprint. </p>
        <p>Suppose you are a project manager with several projects running at any given time, all with urgent tasks. You
          must balance client expectations, conduct, or attend internal meetings, and, in addition, a growing to-do list
          is also waiting for your attention. </p>
        <p>How would one keep up in such a situation without burning out? That's where the <b>Time Management Matrix</b>
          comes in, which is not just a framework but a game-changing way to get perspective on how you're spending your
          time and start making strategic choices. </p>
        <p>This helps you organize your efforts to avoid burning out and make sure you spend time on the right
          activities. Let's look at it in detail. </p>
        <h4 id="What is the Time Management Matrix?">What is the Time Management Matrix? </h4>
        <p>In mid-summer 1989, Stephen R. Covey introduced the world to <span style="font-style: italic">“The 7 Habits
            of Highly Effective People”</span>. A book that quickly became a cornerstone in personal development. This
          book outlines principles aimed at individual and interpersonal effectiveness. </p>
        <p>Among these, a key concept was the <b>Time Management Matrix</b>, which later served as a framework for
          prioritizing tasks. It divides tasks into four quadrants based on urgency versus importance. Doing this helps
          a person understand where his time goes and, more importantly, how to shift his focus to activities that are
          for actual contribution to long-term goals. </p>
        <p>Instead of always rushing to handle emergencies or less important tasks, this matrix helps you make decisions
          that align with both personal and professional growth. It’s a shift from reacting to becoming more proactive
          with your time. </p>
        <div class="matrix-container">
          <!-- Quadrant 1: Urgent & Important -->
          <div class="matrix-cell">
            <div class="title">Urgent & Important</div>
            <div class="subheading">Project Deadline Crisis</div>
            <div class="analogies">
              <div class="analogy">
                <span>Critical</span><br>
                Client deliverables that are overdue and affecting the project timeline.
              </div>
              <div class="analogy">
                <span>Non-Negotiable</span><br>
                Handling an urgent issue that threatens the project’s success (e.g., system failure).
              </div>
              <div class="analogy">
                <span>High-Impact</span><br>
                A resource issue that needs immediate resolution (e.g., key team member falls ill).
              </div>
            </div>
            <div class="examples">
              <p><strong>Action:</strong> Address these tasks immediately to ensure the project stays on track.</p>
            </div>
          </div>

          <!-- Quadrant 2: Important but Not Urgent -->
          <div class="matrix-cell">
            <div class="title">Important but Not Urgent</div>
            <div class="subheading">Strategic Planning</div>
            <div class="analogies">
              <div class="analogy">
                <span>Proactive</span><br>
                Long-term planning, like scheduling regular team check-ins and project roadmaps.
              </div>
              <div class="analogy">
                <span>Foundational</span><br>
                Process improvements to increase productivity (e.g., introducing new software).
              </div>
              <div class="analogy">
                <span>Strategic</span><br>
                Risk management planning for future projects.
              </div>
            </div>
            <div class="examples">
              <p><strong>Action:</strong> Dedicate time to these tasks to ensure future success without firefighting.
              </p>
            </div>
          </div>

          <!-- Quadrant 3: Urgent but Not Important -->
          <div class="matrix-cell">
            <div class="title">Urgent but Not Important</div>
            <div class="subheading">Interruptions and Distractions</div>
            <div class="analogies">
              <div class="analogy">
                <span>Time-Sensitive</span><br>
                Emails that require an immediate response but don’t directly impact the project.
              </div>
              <div class="analogy">
                <span>Interruptive</span><br>
                Calls from stakeholders asking for status updates that can wait.
              </div>
              <div class="analogy">
                <span>Non-Critical</span><br>
                Scheduling meetings that are not critical to the progress of the project.
              </div>
            </div>
            <div class="examples">
              <p><strong>Action:</strong> Delegate or schedule these tasks for later, as they don’t require immediate
                attention.</p>
            </div>
          </div>

          <!-- Quadrant 4: Neither Urgent nor Important -->
          <div class="matrix-cell">
            <div class="title">Neither Urgent nor Important</div>
            <div class="subheading">Low-Value Tasks</div>
            <div class="analogies">
              <div class="analogy">
                <span>Unproductive</span><br>
                Responding to irrelevant social media comments or checking unimportant emails.
              </div>
              <div class="analogy">
                <span>Wasteful</span><br>
                Organizing team documents or data that are not needed for the project.
              </div>
              <div class="analogy">
                <span>Low-Priority</span><br>
                Attending unnecessary meetings that don’t add value to the project.
              </div>
            </div>
            <div class="examples">
              <p><strong>Action:</strong> Minimize or eliminate these activities to keep the focus on high-value tasks.
              </p>
            </div>
          </div>
        </div>
        <h4 id="The Four Time Management Quadrants Explained ">The Four Time Management Quadrants Explained </h4>
        <p>Each of the four quadrants in <b>Covey's time management chart</b> represents a different type of task. Knowing to which quadrant a task belongs impacts productivity and overall success. Here's a breakdown of each quadrant: </p>
        <h6 id="Quadrant 1: Urgent and Important (Crisis Mode)"><b>Quadrant 1: Urgent and Important (Crisis Mode) </b></h6>
        <p>Tasks that need urgent attention and are critical to goals; these tasks cannot be ignored. Examples would be a server crash or an important client meeting. As demanding as these tasks are, continuous existence in this quadrant brings about burnout, so it is always necessary to balance the level with more strategic efforts. </p>
        <h6 id="Quadrant 2: Important but Not Urgent (Strategic Focus)"><b>Quadrant 2: Important but Not Urgent (Strategic Focus) </b></h6>
        <p>These are the tasks that provide the grounding for future success. These need to be executed on time and are especially important for growth. Examples include making plans for a big project, working on your personal development, or perfecting the workflow of your team. Focusing on these kinds of tasks prevents crises from cropping up in the future. </p>
        <h6 id="Quadrant 3: Urgent but Not Important (Distractions)"><b>Quadrant 3: Urgent but Not Important (Distractions) </b></h6>
        <p>These tasks often sound urgent, yet they have minor impact on your long-term goals. Those may be the priorities of other people but not yours. These could be answering non-urgent emails, attending optional meetings, or handling jobs that others can manage. Scaling these distractions down frees valuable time for work that holds higher value. </p>
        <h6 id="Quadrant 4: Neither Urgent nor Important (Time Wasters)"><b>Quadrant 4: Neither Urgent nor Important (Time Wasters) </b></h6>
        <p>Things that could be more helpful in reaching goals. Activities such as spending hours on social media, binge-watching television, or web surfing. These things waste time: it is better to unwind, but it is good to be more aware of these and cut them back to make time for better things. </p>
        <img class="mb-4" src="{{asset('/public/assets/img/master-management/image-2.webp')}}" alt="image">
        <h4 id="Putting the Covey's Management Matrix to Work">Putting the Covey's Management Matrix to Work </h4>
        <p>So, how can you implement this framework into your daily workflow? Let’s break it down into actionable steps. </p>
        <h6 id="Identify and Categorize Your Tasks"><b>Identify and Categorize Your Tasks </b></h6>
        <p>Start by making a comprehensive list of everything you’re working on—both work-related and personal. Then, ask yourself: </p>
        <ul>
          <li>Is this task urgent? </li>
          <li>Is it important? </li>
        </ul>
        <p>Assign each task to a quadrant. This simple exercise gives you a clear picture of your time. </p>
        <h6 id="Prioritize Quadrant 1 and 2 Tasks"><b>Prioritize Quadrant 1 and 2 Tasks </b></h6>
        <p>While the tasks in Quadrant 1 require immediate attention, the tasks waiting in Quadrant 2 are where the needle truly gets moved. For example, if you're a project manager, investing time into the strategy of your team or process improvement at the front end can save many crises occurring later. Make sure to carve out time for proactive key activities. </p>
        <h6 id="Limit Quadrant 3 Distractions"><b>Limit Quadrant 3 Distractions</b></h6>
        <p>These are tasks that are usually urgent but that do not contribute to your long-term success. You can set boundaries around such distractions by time-blocking your day. This basically allocates specific hours to answering emails and attending meetings so that these activities do not intrude into the valued time you can use on other meaningful work. </p>
        <h6 id="Eliminate Quadrant 4 Time Wasters"><b>Eliminate Quadrant 4 Time Wasters</b></h6>
        <p>Time-wasters are the biggest productivity killers. Identify activities that fall into this quadrant and make conscious choices about how much time you spend on them. If social media or other distractions pull your focus away, consider using apps that block these sites during work hours or set clear, intentional breaks to unwind. </p>
        <h6 id="Review and Adjust Regularly "><b>Review and Adjust Regularly</b></h6>
        <p>The key to effective time management is continuous improvement. At the end of each week, review your matrix. Did you spend too much time on urgent but less important tasks? Were there key Quadrant 2 tasks you didn’t address? By examining and adjusting regularly, you’ll refine your approach to time management and continue to improve. </p>
        <h4 id="#Why the Time Management Matrix Matters">Why the Time Management Matrix Matters </h4>
        <p>Adopting the Time Management Matrix template provides several benefits beyond just managing your time. It allows you to: </p>
        </p>
        <p><b>Increase Productivity:</b>By focusing on the most critical tasks, you get more done in less time.</p>
        <p><b>Reduce Stress:</b>Knowing that you’re prioritizing effectively means fewer last-minute scrambles and less burnout. </p>
        <p><b>Improve Focus:</b>The matrix helps you stay aligned with long-term goals and avoid distractions that can derail progress. </p>
        <p><b>Create a Balanced Work-Life Dynamic:</b>By minimizing time-wasting activities and focusing on what truly matters, you create space for both productivity and relaxation. </p>
        <h4 id="Time Management Matrix Template for Your Workflow">Time Management Matrix Template for Your Workflow </h4>
        <p>To implement <b>the time management quadrants</b>, find a template to apply it. You could easily create a simple chart in Excel or use other tools such as Trello or Asana to map out visually your tasks. That's categorizing each incoming task and making sure that time will be spent effectively and in line with priorities. </p>
        <h4 id="Conclusion: Time to Take Control of Your Day">Conclusion: Time to Take Control of Your Day </h4>
        <p>It isn't just about becoming more productive by adding <b>the Time Management Matrix</b> to your workflow, but more about being intentional with time. That really helped people make more intelligent choices as to where they spend their time, both within and outside the office. You can ensure your efforts always align with long-term goals by staying focused on what matters most and limiting distractions. </p>
        <p>Time is one of the most valuable resources at StaffViz. By prioritizing wiser and using <b>Stephen Covey's time management</b>, we created a tool where productivity and strategic focus go together. Be it managing a team, working on personal projects, or seeking to improve your daily routines, applying the Time Management Matrix will help you work smarter, not harder. </p>
        <div class="try-staffviz-box text-center">
          <h5>Effectively Manage Remote and Hybrid Teams with StaffViz </h5>
          <p>Enhance team efficiency and collaboration with StaffViz, the ultimate tool for managing remote and hybrid
            teams. </p>
          <a href="{{url('/pricing-plans')}}">START FREE TRIAL</a>
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
      <div class="col-xl-4 col-lg-5 col-md-4  order-lg-2 order-1 table-content">
        <h5>Table of Content</h5>
        <div class="table-content-box">
          <ul>
            <li>
              <a href="#What is the Time Management Matrix?">What is the Time Management Matrix?</a>
            </li>
            <li>
              <a href="#The Four Time Management Quadrants Explained">The Four Time Management Quadrants Explained</a>
              <!-- <ul>
                <li>
                  <a href="#Quadrant 1: Urgent and Important (Crisis Mode)">Quadrant 1: Urgent and Important (Crisis Mode)</a>
                </li>
                <li>
                  <a href="#Quadrant 2: Important but Not Urgent (Strategic Focus)">Quadrant 2: Important but Not Urgent (Strategic Focus)</a>
                </li>
                <li>
                  <a href="#Quadrant 3: Urgent but Not Important (Distractions)">Quadrant 3: Urgent but Not Important (Distractions)</a>
                </li>
                <li>
                  <a href="#Quadrant 4: Neither Urgent nor Important (Time Wasters)">Quadrant 4: Neither Urgent nor Important (Time Wasters)</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#Putting the Covey's Management Matrix to Work">Putting the Covey's Management Matrix to Work
              </a>
              <!-- <ul>
                <li>
                  <a href="#Identify and Categorize Your Tasks">Identify and Categorize Your Tasks</a>
                </li>
                <li>
                  <a href="#Prioritize Quadrant 1 and 2 Tasks">Prioritize Quadrant 1 and 2 Tasks</a>
                </li>
                <li>
                  <a href="#Limit Quadrant 3 Distractions">Limit Quadrant 3 Distractions
                  </a>
                </li>
                <li>
                  <a href="#Eliminate Quadrant 4 Time Wasters">Eliminate Quadrant 4 Time Wasters</a>
                </li>
                <li>
                  <a href="#Review and Adjust Regularly">Review and Adjust Regularly</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#Why the Time Management Matrix Matters">Why the Time Management Matrix Matters</a>
            </li>
            <li>
              <a href="#Examining the Effectiveness of Remote Meetings">Examining the Effectiveness of Remote
                Meetings</a>
            </li>
            <li>
              <a href="#Time Management Matrix Template for Your Workflow">Time Management Matrix Template for Your Workflow
              </a>
            </li>
            <li>
              <a href="#Conclusion: Time to Take Control of Your Day">Conclusion: Time to Take Control of Your Day</a>
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