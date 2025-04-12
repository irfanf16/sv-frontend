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

                    <h1>Agile vs. Waterfall Project Management: <br> A Comprehensive Guide to Choosing the Right
                        Approach</h1>
                </div>
                <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
                    <div class="d-flex align-items-center">
                        <div class="single-detail">
                            <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
                        </div>
                        <div class="single-detail">
                            <p>Feb 17, 2025</p>
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
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog5p1.webp')}}" alt="Blog Main">
                <p>Whether you are creating software, launching a rocket, or organizing a marketing campaign, your
                    project’s success depends on choosing the right project management methodology. Opting for a correct
                    project management methodology feels like standing at a crossroads. But ask yourself: Do you follow
                    the structured path of Waterfall or embrace the adaptive rhythm of Agile? </p>
                <p>
                    Although Both frameworks have transformed industries, their differences are stark. The purpose of
                    this is to guide you and help you understand Agile and Waterfall Project Management, compare their
                    strengths and weaknesses, and help you decide which approach aligns with your project goals.
                </p>

                <h4 id="head-1">What is Project Management? (And Why Does It Matter?) </h4>
                <p> Project management is the process of planning, organizing, and executing a project from start to
                    finish. It involves using skills, tools, and techniques to achieve specific goals within a set time
                    frame and budget.  </p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog5p2.webp')}}" alt="Blog Main">

                <h5><b>Key Elements of Project Management </b></h5>
                <ol>
                    <li><b>Goals & Scope:</b> Define what needs to be accomplished (e.g., “Build a mobile app with login
                        and payment features”). </li>
                    <li><b>Planning:</b> Map out how to achieve the goal (timelines, budgets, roles). </li>
                    <li><b>Execution:</b> Assign tasks, develop deliverables, and manage workflows. </li>
                    <li><b>Monitoring:</b> Track progress, mitigate risks, and adjust plans as needed. </li>
                    <li><b>Closure:</b> Deliver the final product and review lessons learned. </li>
                </ol>

                <h4 id="head-2">What is Waterfall Project Management? </h4>
                <h5><b>Origins and Evolution </b></h5>
                <p>Waterfall was first introduced in manufacturing and construction industries, and in software
                    development, it was first implemented in 1970 by Winston Royce.

                </p>
                <p> The waterfall model is a linear, sequential method to define requirements, design, build, test, and
                    release software.

                </p>
                <p>It is founded on the principle that project changes are easier to handle if they are done at the
                    start, as opposed to later.
                </p>

                <img class="main-banner-img" src="{{asset('/public/assets/img/blog5p3.webp')}}" alt="Blog Main">
                <h5><b>Phases Explained </b></h5>
                <ol>
                    <li><b>Requirements:</b> The project’s scope, objectives, and constraints are defined upfront. </li>
                    <li><b>Design:</b> Architectural frameworks and technical blueprints are created. </li>
                    <li><b>Implementation:</b> Developers build the product following a fixed plan. </li>
                    <li><b>Testing:</b> Quality assurance ensures all functionalities meet predetermined criteria. </li>
                    <li><b>Deployment & Maintenance:</b> The final product is delivered, and maintenance begins as
                        needed. </li>
                </ol>
                <h5><b>Pros and Cons </b></h5>
                <h6><b>Pros:</b></h6>
                <ul>
                    <li> Predictable timelines and budgets </li>
                    <li>Well-documented processes and structured workflows </li>
                    <li>Ideal for projects with clear, unchanging requirements </li>
                </ul>
                <h6><b>Cons: </b></h6>
                <ul>
                    <li> Limited flexibility for mid-project changes </li>
                    <li>Late-stage testing increases risks of errors </li>
                    <li>Potential misalignment with evolving user needs </li>
                </ul>
                <h6><b>Best For: </b></h6>
                <ul>
                    <li>Projects in regulated industries (e.g., aerospace, healthcare, construction) </li>
                    <li>Large-scale infrastructure projects with minimal requirement changes </li>
                    <li>Organizations requiring detailed documentation and compliance tracking </li>
                </ul>

                <h4 id="head-3">What is Agile Project Management? </h4>
                <h5><b>The Agile Revolution </b></h5>
                <p>In the 1990s and 2000s, the Agile Revolution in software development began as a response to
                    conventional approaches. A group of software developers created the Agile Manifesto in 2001,
                    introducing iterative cycles that assist teams in responding to and adapting to change.
                    Its success is driven by user input and continual improvement, which makes it popular in software
                    development and fast-paced sectors. </p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog5p4.webp')}}" alt="Blog Main">
                <h5><b>Core Principles</b></h5>
                <ul>
                    <li><b>Sprints:</b> Short development cycles deliver incremental updates. </li>
                    <li><b>Daily Standups:</b> Teams hold quick meetings to assess progress and roadblocks. </li>
                    <li><b>Retrospectives:</b> After each sprint, teams review outcomes and refine processes. </li>

                </ul>

                <h5><b>Agile Frameworks</b></h5>
                <ul>
                    <li><b>Scrum:</b> Roles like Scrum Master and Product Owner help streamline workflows. </li>
                    <li><b>Kanban: </b> Visual task boards optimize process flow. </li>
                    <li><b>Lean:</b> Eliminates waste, focusing on maximizing value. </li>

                </ul>
                <h5><b>Pros and Cons </b></h5>
                <h6><b>Pros:</b></h6>
                <ul>
                    <li>Adaptability to changing requirements </li>
                    <li>Continuous stakeholder involvement and feedback </li>
                    <li>Faster time-to-market with incremental releases </li>
                </ul>
                <h6><b>Cons: </b></h6>
                <ul>
                    <li> Risk of scope creep if priorities are not professionally managed </li>
                    <li>Requires high team coordination and active stakeholder participation </li>
                    <li>Less upfront documentation, which may challenge regulatory compliance </li>
                </ul>
                <h6><b>Best For: </b></h6>
                <ul>
                    <li>Technology-driven industries, including software development and AI/ML projects </li>
                    <li>Startups and companies prioritizing innovation </li>
                    <li>Dynamic projects requiring continuous user feedback </li>
                </ul>
                <h5><b>Agile Development vs. Waterfall: A Detailed Comparison </b></h5>
                <table class="table agile-table">
                    <tr>
                        <th>Factor</th>
                        <th>Waterfall</th>
                        <th>Agile</th>
                    </tr>
                    <tr>
                        <td>Project Scope</td>
                        <td>Fixed upfront</td>
                        <td>Evolve through iterations</td>
                    </tr>
                    <tr>
                        <td>Client Involvement</td>
                        <td>Limited post-planning</td>
                        <td>Continuous collaboration</td>
                    </tr>
                    <tr>
                        <td>Risk Management</td>
                        <td>High (testing at the end)</td>
                        <td>Low (frequent testing)</td>
                    </tr>
                    <tr>
                        <td>Speed to Market</td>
                        <td>Single final release</td>
                        <td>Incremental feature rollouts</td>
                    </tr>
                    <tr>
                        <td>Documentation</td>
                        <td>Extensive upfront</td>
                        <td>Minimal, but can be enhanced with tools</td>
                    </tr>
                </table>


                <h4 id="head-4">When to use agile vs waterfall? </h4>
                <h5><b>When to Choose Waterfall </b></h5>
                <p>If we compare waterfall vs. agile project management, choose Waterfall for projects with well-defined
                    requirements, fixed scope, and minimally expected changes, such as regulatory compliance,
                    construction, or hardware development. </p>

                <p><b>Fixed requirements: </b><br>
                    When the project's requirements are clearly known, they are not likely to vary much during
                    development. </p>
                <p> <b>Predictable project scope: </b><br>
                    Projects with a clear idea of the final product and a low chance of scope creep. </p>
                <p> <b>Strict deadlines: </b><br>
                    Achieving precise project deadlines is of high importance. </p>
                <p><b>Highly regulated industries: </b><br>
                    Projects in industries such as healthcare, finance, or aerospace where adherence to regulations is
                    the top priority.
                </p>

                <p><b>Client with limited involvement: </b><br>
                    When client feedback is not expected to influence the project direction significantly.
                </p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog5p5.webp')}}" alt="Blog Main">
                <h5><b>When to Choose Agile </b></h5>
                <p>Agile methodology has advantages over waterfall with its flexibility, frequent customer feedback, and
                    iterative development, which ensures higher quality and lower project risk, especially in evolving
                    projects. </p>
                <p><b>Unclear requirements: </b><br>
                    If the precise project requirements are not entirely established at the beginning, Agile enables
                    ongoing improvement based on feedback. </p>
                <p> <b>Dynamic market conditions: </b><br>
                    For initiatives where the market or technological environment changes rapidly, Agile supports rapid
                    updates to remain current. </p>
                <p> <b>High stakeholder engagement: </b><br>
                    When continuous customer input is important for successful product creation, Agile promotes
                    intensive teamwork. </p>
                <p><b>Innovative projects: </b><br>
                    While creating new products or features with unknowns, Agile enables experimentation and adjusting
                    the course.
                </p>
                <p><b>Cross-functional teams:</b><br>
                    Agile functions well with teams in which people from distinct functions collaborate closely.
                </p>

                <h4 id="head-5">Hybrid Approaches: Combining Strengths </h4>
                <p>A "hybrid approach" for project management takes the pre-determined phases and formal planning of the
                    Waterfall model. It adds to this the responsiveness and iterative development of Agile and brings in
                    the advantages of creating a customized process best suited for a project's specific needs. It
                    provides flexibility to change requirements without losing the overall shape of a project and heavy
                    documentation. </p>
                <h5><b>Working process: </b></h5>
                <p><b>Early planning in waterfall:</b> Leverage heavy initial planning and requirements gathering for the
                    waterfall methodology.
                </p>
                <p><b>Agile iterations:</b> Break the project into smaller, bite-sized "sprints" where teams can quickly create
                    and receive feedback, just like Agile. </p>
                <h5><b>Hybrid model typical names: </b></h5>
                <ul>
                    <li>Agile-Waterfall Hybrid </li>
                    <li>Water-Scrum-Fall </li>
                </ul>
                <h5><b>When to use a hybrid model: </b></h5>
                <ul>
                    <li>Mixed well-specified requirements and room for changing projects. </li>
                    <li>Situations involve the need for prolonged initial planning but also call for flexibility in
                        modifying as they proceed. </li>
                </ul>



                <h4 id="conclusion">Final Thoughts: Aligning Methodology with Vision </h4>
                <p>As you can see from our article, both agile and traditional methodologies have a place in the
                    business world. Ultimately, it's up to you. On the surface, it feels that the abundance of creative
                    freedom and quick decision-making makes agile project management a clear winner, but it all depends
                    on the business and project type. We advise you to try both methods and see for yourself which suits
                    you best. </p>

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
                            <a href="#head-1">What is Project Management?</a>
                        </li>
                        <li>
                            <a href="#head-2">What is Waterfall Project Management? </a>
                        </li>
                        <li>
                            <a href="#head-3">What is Agile Project Management?  </a>
                        </li>
                        <li>
                            <a href="#head-4">When to use agile vs waterfall? </a>
                        </li>
                        <li>
                            <a href="#head-5">Hybrid Approaches: Combining Strengths </a>
                        </li>
                        <li>
                            <a href="#conclusion">Final Thoughts</a>
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