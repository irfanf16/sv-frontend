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

                        <h6 class="category-name">Project Management </h6>
                    </div>

                    <h1>Key Differences: <br> Program Management vs Project Management </h1>
                </div>
                <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
                    <div class="d-flex align-items-center">
                        <div class="single-detail">
                            <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
                        </div>
                        <div class="single-detail">
                            <p>Jan 27, 2025</p>
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
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog3p1.webp')}}" alt="Blog Main">
                <h4 id="head-intro">Introduction </h4>
                <p>Many of us get confused between program management and project management, because both carry out
                    similar activities to some extent. But, on the contrary, both serve different purposes. </p>
                <p>To figure out which one is most important for your organization and how, we must understand both
                    deeply. Each organization has defined a certain set of goals and objectives which acts as the base
                    for its future success. In this case it is essential to understand the core difference between these
                    two and how they can be of benefit for attaining
                    <a href="https://www.techtarget.com/searchcio/definition/organizational-goals">organizational
                        goals.</a>
                </p>
                <h4 id="head-1">What is Program and Project </h4>
                <p> Programs and projects act as backbone for any organization's core values and purposes. These act as
                    two separate entities and serve individually in the success of an organization. </p>
                <p> <a href="https://www.tuw.edu/business/global-demand-project-managers/">According to a report around
                        25 million new project managers will be needed in the business sector by
                        2030,</a> as a manager it is important for you to understand both deeply to lead a team more
                    effectively. Stay till the end of this blog and you will be able to understand what programs and
                    projects are and what their management is, and which will be the best for the success of your
                    organization. </p>
                <h4 id="head-2">Program Manager Vs Project Manager</h4>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog3p2.webp')}}" alt="Blog Main">

                <h4 id="head-3">Program Manager </h4>
                <p>Program manager and project manager are both important aspects of any organization and they are the
                    driving force for its success. There needs to be more clarity between what a program manager and
                    project manager does. </p>

                <p>Program manager is more like an umbrella term that acts as a coordination between multiple projects.
                    As per the report <a href="https://explodingtopics.com/blog/project-management-stats">85% of project
                        managers run multiple projects at the same time.</a> the most important
                    purpose of a program manager is to strategically align different projects with the business goals of
                    an organization. </p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog3p3.webp')}}" alt="Blog Main">

                <h4 id="head-4">Project Manager</h4>
                <p> On the other hand, project manager is responsible for handling a single project at a time, in this
                    process project manager defines the scope of project, sets individual timelines, divides the
                    projects into sections and assigns them to teams' member while constantly monitor them. </p>

                <p>This really sets program and project management apart from each other, but here the real deal comes
                    into play. Program management is inclusive of handling various projects at the same time. The sole
                    purpose of this is to make sure that the projects are aligned perfectly with the organization
                    objectives. Whereas project management is exclusive to a single project of mission at a time,
                    <a href="https://contentsnare.com/project-management-statistics/">according to a study the global
                        project portfolio management market is worth $6.13 billion in 2025</a>

                    it involves a more strategic approach in its completion and making sure that every aspect of project
                    falls under the defined set of goals.
                </p>

                <img class="main-banner-img" src="{{asset('/public/assets/img/blog3p4.png')}}" alt="Blog Main">

                <h4 id="head-5">What Are the Responsibilities of a Program Manager? </h4>
                <p>
                    Now let us comprehensively discuss the core responsibilities of program managers in an organization
                    and what is its importance in achieving the defined goal of an organization.
                </p>
                <p>
                    Program managers have very crucial things to accomplish in an organization. Program manager makes
                    sure that every aspect of program is perfectly coordinated working effectively. This includes
                    various important duties, like scheduling the programs, assigning the tasks to program team members,
                    perfectly tracking the progress and reporting the results.
                </p>
                <h5><b>Following Are the Core Responsibilities of Program Manager:</b></h5>
                <ol>
                    <li>Overseeing project planning, execution, and delivery to ensure everything stays on track, within
                        budget, and meets quality standards.</li>
                    <li> Coordinating and managing projects by working closely with teams to keep things running
                        smoothly and
                        on time.</li>
                    <li>Aligning projects with company goals and ensuring they add real value.</li>
                    <li>Handling project finances by collaborating with finance teams to stay on budget.</li>
                    <li>Maintaining quality standards and ensuring deliverables meet expectations.</li>
                    <li>Keeping stakeholders informed with clear and timely communication.</li>
                    <li>Managing changes effectively to avoid disruptions and keep projects moving forward.</li>
                </ol>
                <p>As we have learned in detail about the responsibilities of program manager, now we will delve
                    into
                    the core responsibilities of project manager</p>

                <h4 id="head-6">What Are the Responsibilities of a Project Manager? </h4>
                <p>
                    Now let us understand what a project manager does, before diving into this we should first
                    understand how many project managers an organization has. The answer is simple: the bigger the
                    organization, the more projects it will handle, it might require many project managers. But the
                    organization might have a single program manager to handle various project managers.
                </p>
                <p>
                    Project manager is someone with professional experience and degree in project management,
                    engineering, or related field. Project manager, as the name suggests, is the person who manages the
                    project. To manage a project, the project manager requires a team of talented individuals to
                    accomplish the project in the best way possible.
                </p>
                <h5><b>Following Are the Core Responsibilities of a Project Manager:</b></h5>
                <ol>
                    <li> Making sure the project is completed on time, within budget, and meets quality standards. He is
                        also responsible for ensuring that the team has the right skills and training. </li>
                    <li> Keeping stakeholders, including the sponsor and client, updated on progress and project goals.
                    </li>
                    <li>Assigning tasks to project managers and ensuring they are completed on schedule and to the
                        expected quality. </li>
                </ol>

                <h4 id="head-7">What Skills Should a Program Manager Have? </h4>
                <p>The world is filled with talent and similarly every person possesses certain skills that help them to
                    stand out from the crowd, therefore skills for a program manager are equally important. The
                    following are skills that make a successful program manager. </p>
                <p>
                    As this is a crucial profession, the skills are segmented into technical and soft skills, both
                    equally important to become a renowned program manager.
                </p>
                <h5><b>1. Technical Skills of Program Manager </b></h5>
                <p>Technical skills are the set of abilities important for any program manager to be successful. This
                    includes the ability to understand and utilize <a href="https://www.staffviz.com/">tools</a> and
                    software very effectively as well as being
                    able to communicate efficiently with the team members. </p>

                <h5><b>2. Soft Skills of Program Manager </b></h5>
                <p>Soft skills are very necessary for any program manager to have. It includes motivating the team
                    members, conflict handling and building relationships to be more productive. Motivating the team
                    members is directly proportional to productivity and efficiency. This really helps them to produce
                    high quality work, which benefits in achieving organizations’ goal.</p>

                <p>Another soft skill is the ability to handle conflicts, which ought to happen in any organization,
                    but the way it is handled which matters. Program manager should be able to diffuse the tense
                    situations with most creative approach, it should satisfy all the parties involved.</p>

                <p>Lastly, each program manager must establish strong partnerships. Staff will be more inclined to
                    appreciate and trust if a program manager builds positive relationships with them. They will be more
                    inclined to follow the guides and contribute as team members in exchange. </p>

                <h4 id="head-8">What Skills Should a Project Manager Have?</h4>
                <p>A project manager is directly responsible for the success of a project, the following are a few top
                    qualities a project manager must have. </p>

                <h5><b>1. Organizational Skills </b></h5>
                <p>Project managers should be vigilant enough to keep track of all the aspects of a project. This
                    includes maintaining the budget and keeping track of progress while taking care of the team members'
                    needs. </p>

                <h5><b>2. Communication Skills </b></h5>
                <p>Communication is an important skill a project manager should have, the ability to effectively
                    communicate with clients, stakeholders, and higher management. </p>

                <h5><b>3. Leadership Skills </b></h5>
                <p>Project manager leads a team to make a project successful, therefor its responsibility of a project
                    manager to keep the moral of team high, take care of their rights and give them a proper guidance
                    and direction. </p>

                <h5><b>4. Negotiation Skills </b></h5>
                <p>Negotiation skills are very crucial for any project manager, a project manager is often involved in
                    dealing directly with clients, stakeholders, and team members. It's about making desperate decisions
                    in desperate times for the benefit of the organization. </p>

                <h5><b>5. Time Management Skills </b></h5>
                <p>Time management is one of the most important skills a project manager should have. Keeping track of
                    time during a project's completion is crucial. A project manager should be able to prioritize the
                    task and keep the schedule on track. </p>

                <h5><b>6. Stress Management Skills </b></h5>
                <p>To remain composed and focused under pressure, a project manager must be able to handle stress. </p>

                <h5><b>7. Decision Making Skills </b></h5>
                <p>The ability to make decisions is necessary for a project manager. To choose the optimal course of
                    action, you must weigh up the advantages and disadvantages of several possibilities. </p>

                <h5><b>8. Social Skills </b></h5>
                <p>A project manager needs to be able to communicate with others. Both the ability to influence others
                    and the ability to establish relationships are essential.

                </p>
                <p>These are only a few of the abilities a project manager must possess. However, you must acquire and
                    refine these skills if you want to succeed in this sector. </p>





                <h4 id="head-9">Key Differences Between Project and Program Manager </h4>
                <p>Here are five important distinctions between project and program management that you should be aware
                    of: </p>
                <h5><b>1. Handling Uncertainty </b></h5>
                <p>Programs may have several endpoints, but projects usually have just one. Programs of this kind are
                    frequently more intricate than projects. Program managers must therefore adopt a more adaptable
                    strategy than project managers. This includes the ability to quickly adjust to changes and easily
                    manage uncertainty. </p>

                <h5><b>2. Handling Change </b></h5>
                <p>Programs tend to be longer in duration than projects, which are usually shorter. Therefore, while
                    change may be avoided in a project, it is unavoidable in any program. To keep the program on track,
                    a program manager needs to be more adept at handling change. This entails handling change opposition
                    and properly informing stakeholders of changes. </p>

                <h5><b>3. Controlling Risk </b></h5>
                <p>Programs are more comprehensive, whereas projects concentrate more on a single objective. Program
                    managers must be more aggressive than project managers to keep the program on track because it has a
                    lot of changing areas. This entails anticipating risks and problems and acting to reduce them. </p>

                <h4 id="conclusion">Conclusion:</h4>
                <p>Any company hoping to successfully accomplish its objectives must comprehend the distinction between
                    project management and program management. Although both positions are crucial, they have distinct
                    functions and call for different skill sets. To ensure long-term success and strategic coherence,
                    program management focuses on coordinating with overall corporate objectives. Project management,
                    however, focuses on accurately and efficiently providing precise, time-bound results. </p>

                <p>The needs of your organization will determine which option is best. A project manager is the best
                    person to hire if you want to oversee a single, well-defined project. However, a program manager is
                    essential if your objectives include coordinating several related initiatives to promote overall
                    organizational performance. For either of the purposes StaffViz is state-of-the-art project
                    management tool that simplifies the efforts and maximize the productivity. You can <a
                        href="https://www.staffviz.com/contact-us">contact here</a> to
                    learn more about this intelligence-based project management tool.
                </p>
                <p>
                    In the end, both positions are essential to success, and knowing their distinct duties and
                    competencies will help you make wise choices for the expansion of your company. The correct strategy
                    and leadership may transform obstacles into opportunities and objectives into successes, whether
                    you're managing a single project or a huge program.
                </p>
                <p>
                    Therefore, stand back, evaluate the needs of your company, and choose the management style that best
                    fits your goals. After all, the strength of your leadership and the clarity of your approach
                    determine how well your projects will succeed.
                </p>


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
                            <a href="#head-1">What is Program and Project ?</a>
                        </li>
                        <li>
                            <a href="#head-2">Program Manager Vs Project Manager</a>
                        </li>
                        <li>
                            <a href="#head-3">Program Manager </a>
                        </li>
                        <li>
                            <a href="#head-4">Project Manager </a>
                        </li>
                        <li>
                            <a href="#head-5">What Are the Responsibilities of a Program Manager? </a>
                        </li>
                        <li>
                            <a href="#head-6">What Are the Responsibilities of a Project Manager? </a>
                        </li>
                        <li>
                            <a href="#head-7">What Skills Should a Program Manager Have? </a>
                        </li>
                        <li>
                            <a href="#head-8">What Skills Should a Project Manager Have? </a>
                        </li>
                        <li>
                            <a href="#head-9">Key Differences Between Project and Program Manager    </a>
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