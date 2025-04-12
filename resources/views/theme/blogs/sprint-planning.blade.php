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

                        <h6 class="category-name">Employee Monitoring </h6>
                    </div>

                    <h1>What Is Sprint Planning?<br> Understanding the Best Tools & Practices </h1>
                </div>
                <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
                    <div class="d-flex align-items-center">
                        <div class="single-detail">
                            <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
                        </div>
                        <div class="single-detail">
                            <p>Feb 7, 2025</p>
                        </div>
                        <div class="single-detail">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
                                    fill="none">
                                    <path
                                        d="M7.60038 21.5C7.13971 21.5 6.75537 21.346 6.44737 21.038C6.13937 20.73 5.98504 20.3457 5.98438 19.885V5.115C5.98438 4.655 6.13871 4.271 6.44737 3.963C6.75604 3.655 7.14038 3.50067 7.60038 3.5H18.3694C18.8294 3.5 19.2137 3.65433 19.5224 3.963C19.831 4.27167 19.985 4.656 19.9844 5.116V19.885C19.9844 20.345 19.8304 20.7293 19.5224 21.038C19.2144 21.3467 18.8297 21.5007 18.3684 21.5H7.60038ZM7.60038 20.5H18.3694C18.5227 20.5 18.6637 20.436 18.7924 20.308C18.921 20.18 18.985 20.0387 18.9844 19.884V5.116C18.9844 4.962 18.9204 4.82067 18.7924 4.692C18.6644 4.56333 18.523 4.49933 18.3684 4.5H16.9844V10.616L14.9844 9.423L12.9844 10.616V4.5H7.60038C7.44638 4.5 7.30504 4.564 7.17637 4.692C7.04771 4.82 6.98371 4.961 6.98438 5.115V19.885C6.98438 20.0383 7.04837 20.1793 7.17637 20.308C7.30437 20.4367 7.44537 20.5007 7.59937 20.5"
                                        fill="#97989F" />
                                </svg>
                                Reading Time: 10 Minutes
                            </p>
                        </div>
                    </div>
                </div>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog4p1.webp')}}" alt="Blog Main">
                <h4 id="head-intro">Introduction </h4>
                <p>You have a very experienced and talented team on board, yet you are still facing inefficiencies, and
                    your goals are not achieved. </p>
                <p style="font-style:italic; font-weight:bold;">Did you ask yourself what is the reason behind this?
                </p>
                <p>Creating a product and building a strong foundation for it requires Agile and Scrum methods, to which
                    sprint planning acts as a backbone. In this detailed and thoroughly researched guide, all your
                    ambiguities are going to get a satisfactory answer.</p>
                <p>
                    Learn how to have a proper structure of your progress, define objectives, distribute tasks, and
                    refine your approach so that your team doesn't have to suffer. If you are new to agile and want to
                    know about sprint planning, its purpose, key components, and best practices with efficient execution
                    strategies, then you need to read till the end. </p>
                <h4 id="head-1">What Is Sprint Planning? </h4>
                <p> At the beginning of the sprint, the structured scrum event, which plays a vital role, is called
                    sprint planning. This includes the scrum team, the owner of the product, the master of the scrum,
                    and the developers; all of them collaboratively decide the trajectory of workflow for the upcoming
                    sprint. </p>
                <p>According to <a href="https://echometerapp.com/en/scrum-statistics/">Scrum Adoption Statistics
                        2023</a> , the <i>"most popular agile framework is Scrum, which is
                        being used by companies as single agile methodology and hybrid methodology."</i> </p>
                <p>The agenda for their meeting is to set clear goals, redefine the scope of work, and importantly,
                    break down the bigger tasks into smaller portions for a smooth workflow. </p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog4p2.webp')}}" alt="Blog Main">

                <p><b>The following are the major components of sprint planning:</b></p>
                <ul>
                    <li><b>Setting a Sprint Goal:</b> A shared objective that guides the team's focus throughout the
                        sprint.</li>
                    <li><b> Selecting Work Items:</b> Choosing product backlog items (PBIs) that align with the sprint
                        goal.</li>
                    <li><b>Developing an Execution Plan:</b> Determining how the selected work will be completed
                        efficiently.</li>
                </ul>
                <p>This will help teams implement a foolproof sprint planning agenda to make sure the proper alignment,
                    clarity, and dedication are there for delivering a functional product by the end of the sprint.</p>

                <h4 id="head-2">Who Attends Sprint Planning Meeting? </h4>
                <p>Sprint planning is a collaborative effort which involves:
                </p>
                <p><b>1. Product Owner (PO):</b> <br>Proposes the sprint goal and prioritizes backlog items. </p>
                <p><b>2. Developers:</b> <br>Select PBIs, plan execution, and estimate effort. </p>
                <p><b>3. Scrum Master (SM):</b> <br>Proposes the sprint goal and prioritizes backlog items. </p>

                <p>Facilitates discussions, ensures adherence to Scrum principles, and helps remove impediments. </p>

                <p>The Scrum team is the primary decision-making body, but other stakeholders may join if their opinions
                    are needed to explain requirements or define priorities. </p>



                <img class="main-banner-img" src="{{asset('/public/assets/img/blog4p3.webp')}}" alt="Blog Main">

                <h4 id="head-3">Timeboxing Sprint Planning </h4>
                <p>The sprint duration determines how long a sprint planning meeting should last.

                </p>
                <p>The Scrum Guide states that the timebox shouldn't go over: </p>
                <ul>
                    <li><b>8 hours for a 4-week sprint </b></li>
                    <li><b>6 hours for a 3-week sprint </b></li>
                    <li><b>4 hours for a 2-week sprint </b></li>
                    <li><b>2 hours for a 1-week sprint </b></li>
                </ul>
                <p>
                    Timeboxing ensures efficiency by keeping discussions focused and actionable.
                </p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog4p4.webp')}}" alt="Blog Main">


                <h4 id="head-4">Step-by-Step Guide for Sprint Planning Best Practices </h4>
                <h5> <b>1. Define the Sprint Goal ("Why") </b></h5>
                <p>The team's objectives are clearly outlined in the sprint goal. It guarantees that the chosen work
                    makes a prominent contribution at the end of the result. The team and the product owner work
                    together to decide on this objective based on the following:
                </p>
                <ul>
                    <li>Product backlog priorities </li>
                    <li>Business needs and stakeholder feedback </li>
                    <li>The latest product increment</li>
                </ul>
                <h5><b>Examples of sprint goals: </b></h5>
                <ul>
                    <li>
                        "Develop user authentication with email and social login."
                    </li>
                    <li>"Improve homepage load time by 15%." </li>
                </ul>
                <h5> <b>2. Select Product Backlog Items ("What")</b></h5>
                <p>After setting the sprint goal, the next step is identifying the backlog items (PBIs) that are aligned
                    with it by the team. This process is effectively done by:
                </p>
                <ul>
                    <li><b>Priority:</b> Items ranked highest in the backlog. </li>
                    <li><b>Team Capacity:</b> Workload distribution based on availability. </li>
                    <li><b>Past Performance:</b> Velocity and past sprint metrics. </li>
                    <li><b>Definition of Ready:</b> Ensuring items are clear, actionable, and estimable.</li>
                </ul>

                <h5><b>3. Plan Task Execution ("How")</b></h5>
                <p>The team efficiently breaks down the backlog items into smaller chunks that are manageable by
                    discussing the following: </p>
                <ul>
                    <li>
                        Dependencies between tasks
                    </li>
                    <li>Required effort (estimated in hours or story points) </li>
                    <li>
                        Assignment of tasks (self-assigned or collaboratively distributed)
                    </li>
                </ul>
                <h5><b>Methods for effort estimation: </b></h5>
                <ul>
                    <li><b>Story Points:</b> Relative complexity-based estimation.  </li>
                    <li><b>T-Shirt Sizing:</b> Classifying tasks as Small, Medium, or Large. </li>
                    <li><b>Planning Poker:</b> Team members vote on complex estimates.  </li>
                </ul>
                <h5><b>4. Capacity Planning </b></h5>
                <p>In this phase, Scrum Master helps in planning that ensures that the team gets the workload that is
                    more realistic to achieve by analyzing: </p>
                <ul>
                    <li>
                        Available working hours
                    </li>
                    <li>Team size and skill distribution </li>
                    <li>
                        Time allocation for non-development activities (e.g., stakeholder meetings, bug fixes)
                    </li>
                </ul>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog4p5.webp')}}" alt="Blog Main">

                <h5><b>5. Finalizing the Sprint Backlog </b></h5>

                <p>The team completes the sprint backlog, which is a detailed list of earlier selected PBIs and the
                    tasks related to them, after sprint planning. The sprint backlog guarantees work allocation
                    transparency and offers a sprint roadmap. </p>

                <p>
                    The interim <a
                        href="https://www.scrumalliance.org/ScrumRedesignDEVSite/media/ScrumAllianceMedia/Files%20and%20PDFs/State%20of%20Scrum/2017-SoSR-Final-Version-(Pages).pdf">CEO
                        of Scrum Alliance says</a> ,<i>
                        "Scrum and agile methodology helps businesses in cutting down huge underlying expenses, boost
                        productivity, and streamline workflow."
                    </i>
                </p>
                <p><b>
                        The question is, which of the following do you follow?</b>
                </p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog4p6.webp')}}" alt="Blog Main">


                <h4 id="head-5">Best Practices for Effective Sprint Planning </h4>
                <h5><b>1. Set Clear Goals in Advance </b></h5>
                <p>The sprint goals must be effectively defined before the sprint planning meeting so that the
                    discussion is more relevant and streamlined. This will set a reasonable direction and focus. </p>
                <h5><b>2. Conduct Backlog Refinement Sessions </b></h5>
                <p>
                    Well-defined backlog items help prevent last-minute changes and prioritization issues, which
                    ultimately helps cut expenses and increase productivity.
                </p>
                <h5><b>3. Employ Estimates Driven by Data </b></h5>
                <p>
                    Workload selection should be based on actual data and historical sprint velocity. Don't take on more
                    than you can handle to avoid burnout and missing deadlines.
                </p>
                <h5><b>4. Promote Cooperation </b></h5>
                <p>
                    Instead of being controlled by one person, sprint planning ought to be a collaborative effort.
                    Better decisions and shared ownership of deliverables result from candid conversations.
                </p>
                <h5><b>5. Keep Your Scope Manageable </b></h5>
                <p>Steer clear of piling on too many chores during the sprint. High-quality work and long-term
                    productivity are guaranteed by a targeted sprint backlog. </p>
                <h5><b>6. Divide Up Big Jobs </b></h5>
                <p>To enhance monitoring and execution, break up large backlog items into smaller, more manageable
                    tasks. </p>
                <h5><b>7.  Examine the input from earlier sprints.   </b></h5>
                <p>Teams can improve their planning techniques and steer clear of reoccurring problems by using
                    retrospective insights. </p>


                <h4 id="head-6">How To Measure Team Performance in Sprint </h4>
                <p>
                    To measure the team's performance to see if the alignment of tasks is accurately done and the team
                    is moving in the right direction. For this purpose, the <a
                        href="https://developer.harness.io/docs/software-engineering-insights/analytics-and-reporting/efficiency/agile-metrics/sei-sprint-metrics-ratios/#commit-done-ratio">Commit
                        Done Ratio</a> is recommended to use.
                </p>
                <p>
                    This helps the companies determine if the sprint plans are working as expected or if the team can
                    bear more load or not.
                </p>
                <p>
                    There is a simple way to determine this: if the average commit-to ratio comes over 70% then it means
                    that the sprint plans are being efficiently handled by the team. If this ratio exceeds 120% this
                    shows that the team could take on more load without compromising the quality of the sprint planning
                    agenda.
                </p>
                <p><b>This can be better understood by looking at this graph.</b></p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog4p7.webp')}}" alt="Blog Main">
                <h4 id="head-7">FAQs </h4>
                <h5><b>1. How do we decide what goes into a sprint?   </b></h5>
                <p>What goes into the sprint is based on the following:</p>
                <ul>
                    <li>Goals  </li>
                    <li>Backlog Items  </li>
                    <li>Capacity of Team  </li>
                    <li>Previous Performances   </li>
                </ul>
                <h5><b>2. Can backlog items change during the sprint?  </b></h5>
                <p>It's not done ideally, but if there are some last-minute shifts in priorities, then the team could do a re-evaluation of the sprint backlog provided with product owner's input. </p>
                <h5><b>3. How do we estimate effort accurately?   </b></h5>
                <p>In making informed decisions, the team has certain things to do so by using estimation techniques like:  </p>
                <ul>
                    <li>Planning Poker </li>
                    <li>Historically Velocity Analysis </li>
                </ul>

                <h4 id="conclusion">Conclusion:</h4>
                <p>A successful and effective sprint begins with well-structured sprint planning. When executed
                    properly, it enhances business efficiency, streamlines team efforts, and ensures continuous progress
                    by fostering: </p>
                    <ul>
                        <li>Seamless collaboration </li>
                        <li>Better alignment of team objectives </li>
                        <li>Meaningful, measurable outcomes </li>
                    </ul>

                <p>With <a href="https://www.staffviz.com/">StaffViz</a>, teams can optimize sprint planning, track progress in real time, and enhance
                    productivity. By leveraging its powerful workforce management tools, businesses can ensure every
                    sprint drives maximum efficiency, delivering high-quality results with precision. </b>
                </p>
                <p style="font-style:italic; font-weight:bold;">Transform the way your team plans and executes sprints, start using StaffViz today.  </p>


                <div class="try-staffviz-box text-center">
                    <h5>Effectively Manage Remote and Hybrid Teams with StaffViz </h5>
                    <p>Enhance team efficiency and collaboration with StaffViz, the ultimate tool for managing remote
                        and hybrid
                        teams. </p>
                    <a href="{{url('/pricing-plans')}}">START FREE TRIAL</a>
                    <img class="swirling-lines" src="{{asset('/public/assets/img/swirling-lines.png')}}"
                        alt="Swirling Lines">
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
                    <p>I’m <b>Tracey Taylor</b>, a Content Strategist with over 4 years of experience in B2B and SaaS
                        marketing.
                        I’ve worked with companies like StreamlineREI and StaffViz to drive lead generation and business
                        growth.
                        Outside of work, I explore nature, read books, and play games to stay physically and mentally
                        sharp. </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-4  order-lg-2 order-1 table-content">
                <h5>Table of Content</h5>
                <div class="table-content-box">
                    <ul>
                    <li>
                            <a href="#head-intro">Introduction</a>
                        </li>
                        <li>
                            <a href="#head-1">What Is Sprint Planning? </a>
                        </li>
                        <li>
                            <a href="#head-2">Who Attends Sprint Planning Meeting?  </a>
                        </li>
                        <li>
                            <a href="#head-3">Timeboxing Sprint Planning  </a>
                        </li>
                        <li>
                            <a href="#head-4">Step-by-Step Guide for Sprint Planning Best Practices  </a>
                        </li>
                        <li>
                            <a href="#head-5">Best Practices for Effective Sprint Planning  </a>
                        </li>
                        <li>
                            <a href="#head-6">How To Measure Team Performance in Sprint  </a>
                        </li>
                        <li>
                            <a href="#head-7">FAQs  </a>
                        </li>
                        <li>
                            <a href="#conclusion">Conclusion</a>
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
                                    <a
                                        href="{{url('/blogs/why-time-tracking-is-important-essential-role-in-modern-organizations')}}">
                                        Why Time Tracking is Important: The Essential Role of Time Tracking in Modern
                                        Organizations
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
                                <a
                                    href="{{url('/blogs/why-time-tracking-is-important-essential-role-in-modern-organizations')}}">
                                    Why Time Tracking is Important: The Essential Role of Time Tracking in Modern
                                    Organizations
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
                                <img src="{{asset('public/assets/img/hybrid-remote-work-detail-img.webp')}}"
                                    alt="hybrid-work-list-img">
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