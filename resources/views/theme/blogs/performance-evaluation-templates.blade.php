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

                    <h1>Performance Evaluation Templates: <br> Your Roadmap to Employee Success </h1>
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
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog2p1.webp')}}" alt="Blog Main">
                <p>Imagine driving across the country without the aid of a GPS or even a map. You will reach your
                    destination, but not without wrong turns, wasted time, and frustration that is not necessary. That
                    is what evaluating employee performance feels like without a well-structured Performance Evaluation
                    Template. Just like a GPS shows you the best route to take, evaluation ensures that your performance
                    reviews are efficient, goal-oriented, and mutually beneficial. </p>

                <h4 id="head-1">What is a performance evaluation? </h4>
                <p> A performance review, or performance evaluation, is the systematic process of checking in with team
                    members about their job. It is only a time for reflecting on their results and giving constructive
                    feedback for guidance. Evaluations for employees generally take place either quarterly, bi-annually,
                    or annually, depending on preference within a particular company. </p>
                <p>During a performance evaluation, you will sit down with your team members to review their overall
                    performance. First, you will discuss the skills they are working on and highlight their
                    achievements. Then, you will move on to areas where they can improve. </p>
                <p>While some businesses use performance evaluation software to streamline the process, it is just as
                    effective to have a thoughtful conversation without relying on specific tools. Ultimately, it's
                    about making a straightforward way for their continued success while keeping the lines of
                    communication open. </p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog2p2.webp')}}" alt="Blog Main">

                <h4 id="head-2">Why Use a Performance Evaluation Template? </h4>
                <p>Performance evaluation systems are among the valuable tools for any organization trying to align
                    individual contributions with broader business objectives. They act like a blueprint, keeping
                    managers and employees on track, communicating effectively, and focusing on growth.
                </p>
                <p>Here are the key benefits:</p>
                <p><strong>Structured Guidance: </strong> Templates keep things on course so that nothing in terms of
                    employee performance is left unaddressed.</p>

                <p><strong>Consistency: </strong> They ensure that the same criteria apply to dealing with all
                    evaluations fairly.</p>

                <p><strong>Goal Alignment: </strong> They help link individual objectives with organizational goals.</p>

                <p><strong>Clear Documentation: </strong> Templates are written records for future reference and
                    accountability.</p>

                <p><strong>Engagement: </strong> They increase participation, thus encouraging feedback and
                    collaboration for their constructive development.</p>

                <p><strong>Growth Opportunities: </strong> They identify strengths, weaknesses, and areas for
                    development, thus paving the way toward professional growth.</p>
                <p>
                    When paired with StaffViz, these benefits are further enhanced. StaffViz tracks the time spent on
                    key tasks, providing additional data to support evaluations and ensure they are both accurate and
                    actionable.<b> See how StaffViz complements performance evaluation templates. </b>
                </p>

                <img class="main-banner-img" src="{{asset('/public/assets/img/blog2p3.webp')}}" alt="Blog Main">

                <h4 id="head-3">Key Components of an Effective Performance Evaluation Template </h4>
                <p>A good Performance Evaluation Template does more than acts as a checklist; it is a dynamic tool for
                    growth and accountability. At its core, such a template establishes clear performance expectations
                    and evaluation criteria. These benchmarks not only define what success looks like but also provide a
                    structured framework for constructive conversations. </p>

                <p>It should also rate the technical competence of the employee and soft skills in communication and
                    teamwork. This dual focus ensures that the review is balanced to reward accomplishments and, at the
                    same time, identifies areas needing improvement. It should also provide for two-way feedback, that
                    is, allow open dialogue between managers and employees. </p>

                <p>The inclusion of growth opportunities and follow-up plans make the template forward-looking in
                    support of continued professional development aligned with organizational goals. </p>
                <h4 id="head-4">Types of Performance Evaluation </h4>
                <p> Now, in terms of performance reviews, there is not a one-size-fits-all approach. The method selected
                    must be in line with the organization's culture and goals. Let us look at some key techniques of
                    evaluation to give you an idea:</p>

                <p><b>Self-evaluations: </b> First, self-evaluations make employees reflect on their
                    performances. This approach builds up accountability and raises self-awareness, enabling one to
                    realize his or her strengths and identify areas of improvement. It is also an avenue for
                    constructive self-reflection, which may result in personal growth.</p>

                <p><b>Team evaluations: </b> Group dynamics are further stressed in a team evaluation, where
                    one can ascertain how well the teams work in collaboration, talk to each other, and solve their
                    problems. That is how it could enable one to assess the bad from the good to develop better cohesive
                    teams.</p>

                <p><b>360-degree feedback:</b> The 360-degree feedback approach gives a broader perspective. It provides
                    an overall view of an employee's performance by collecting information from supervisors, peers,
                    subordinates, and colleagues. It could, therefore, lead to more profound insights and allow the
                    employees to understand how their work and behavior are viewed from all angles.</p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog2p4.webp')}}" alt="Blog Main">



                <p><b>Goals-and-Results Reviews: </b> The next in line is goals-and-results reviews, which focus on
                    outcomes. You can set clear goals and track progress over time to determine how healthy employees
                    are meeting expectations. This approach allows for a results-driven approach, enabling employees to
                    understand what they have achieved and where they need to improve.</p>

                <p><b>Skill Assessments:</b> This, therefore, brings in the skill assessment. The assessment of
                    technical expertise and soft skills is done, including whether employees can respond to new
                    challenges such as new equipment, leadership, or communication skills. In this way, there is the
                    assurance that the employees will constantly be developing and changing with their jobs.</p>
                <p>
                    The right balance of each of these appraisals will give a much more effective, engaging, and
                    insight-laden appraisal process for both the employee and the organization. Want to dive deeper into
                    the several types of appraisals? Look at our in-depth blog post for a detailed explanation.
                </p>
                <h4 id="head-5">Challenges and Solutions in Performance Evaluation </h4>
                <p>
                    Now, when it comes to types of performance evaluation, of course, each method does have its pluses
                    but let us be honest—none are perfect. Challenges like bias, incomplete data, or even resistance to
                    feedback can make things difficult. Take self-evaluations, for instance. They are good at getting
                    employees to reflect on their work and take ownership, but without a solid performance evaluation
                    system in place, it does feel entirely subjective.
                </p>
                <p>
                    Then, of course, there are the team appraisals, which delve into group dynamics—the good, the bad,
                    and everything in between. But let us be honest: incomplete data or goals of the team that do not
                    mesh with the companies can create more confusion than clarity. That is where 360-degree feedback
                    comes in.
                </p>
                <p>
                    Getting input from peers, subordinates, and supervisors gives a complete picture, but for that to
                    work, employees need to see feedback as an opportunity to grow, not criticism. Creating that culture
                    is what is key.
                </p>

                <img class="main-banner-img" src="{{asset('/public/assets/img/blog2p5.webp')}}" alt="Blog Main">
                <p>
                    Goals-and-results reviews come down to monitoring progress toward specific goals. These will ensure
                    everybody's efforts are in line, closing the gap in goal misalignment. Not forgetting the skill
                    evaluations that focus on technical and soft skills in preparing employees for what is next.
                </p>
                <p>
                    Tackling some of the more usual challenges—like bias, incomplete data, and lack of
                    follow-through—these evaluation methods truly can excel. And, of course, the secret sauce is the
                    follow-up: add in those actionable steps and keep the conversation going. Suddenly, these
                    evaluations become something more than just checkboxes; they are real opportunities for growth.
                </p>

                <h4 id="head-6">How Technology Enhanced Performance Evaluations </h4>
                <p>
                    The use of technology in the evaluation of staff performance is a game-changer. Real-time analytics
                    provides immediate insight into the performance of employees, and managers can make informed
                    decisions without wasting time.
                </p>
                <p>
                    Automation of mundane tasks such as data entry and reporting free up time to engage in activities
                    with more meaning. It is a lot easier for teams to share feedback and track progress with the help
                    of collaboration tools, hence making the evaluation process more inclusive.
                </p>

                <p>
                    <b>Real-time Analytics:</b> Instant insights into data-driven decision-making.
                </p>

                <p>
                    <b>Automation:</b> Reduces the administrative burden of conducting these, freeing up cycles for more
                    strategic-level discourse.
                </p>

                <p>
                    <b>Collaboration Tools:</b> Allow for real-time communication and improved feedback loops within
                    teams.
                </p>
                <img class="main-banner-img" src="{{asset('/public/assets/img/blog2p6.webp')}}" alt="Blog Main">
                <p> <b>Scalability:</b> Solutions that work in organizations of all sizes, ensuring flexibility and
                    efficiency. </p>
                <p>Transform your evaluations into high-efficiency ones with more relevant and accurate results by
                    adding a digital dimension to them. </p>
                <p>StaffViz takes this a step further by tracking the time spent on key tasks, ensuring that evaluations
                    are both efficient and data driven. <b> Learn how StaffViz transforms performance evaluations.</b>
                </p>
                <h4 id="conclusion">Conclusion:</h4>
                <p>A well-conducted performance evaluation process is far more than a formal check-in; it is a strong
                    development and strengthening tool for both employee and team dynamics, hence aligning individual
                    contributions to business objectives. Managers can ensure clarity and consistency in their
                    evaluations by using structured templates while fostering a culture of continuous improvement. The
                    inclusion of multiple evaluation methods and the adoption of technology will further streamline the
                    process, minimizing biases and incorporating detailed feedback from various levels. Finally,
                    performance evaluations are not about the past; they are about building a foundation for a sound and
                    prosperous future. </p>

                <p>StaffViz enhances the process by tracking time spent on key tasks, providing valuable productivity
                    insights, and ensuring that evaluations are both accurate and actionable. Ready to transform your
                    performance evaluations? <b>Explore how StaffViz can help. </b>
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
                            <a href="#head-1">What is a Performance Evaluation?</a>
                        </li>
                        <li>
                            <a href="#head-2">Why Use a Performance Evaluation Template?</a>
                        </li>
                        <li>
                            <a href="#head-3">Key Components of an Effective Performance Evaluation Template</a>
                        </li>
                        <li>
                            <a href="#head-4">Types of Performance Evaluation</a>
                        </li>
                        <li>
                            <a href="#head-5">Challenges and Solutions in Performance Evaluation</a>
                        </li>
                        <li>
                            <a href="#head-6">How Technology Enhances Performance Evaluations</a>
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