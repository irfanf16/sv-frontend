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
          <h6 class="category-name">Cost Management</h6>
          <h6 class="category-name">Project Management</h6>
          </div>
          
          <h1>Everything You Need to Know About <br>Human Resource Development (HRD) in 2024</h1>
          
        </div>
        <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
          <div class="d-flex align-items-center">
            <div class="single-detail">
              <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
            </div>
            <div class="single-detail">
              <p>Dec 27, 2024</p>
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
        <img class="main-banner-img" src="{{asset('/public/assets/img/human-resource-development/image-1.webp')}}" alt="Blog Main">
        <p>Ever wonder why certain companies seem to have the magic formula for success? Having an excellent product and a sizable market share is not enough. One important aspect of it is the way they invest in human resource development (HRD). </p>
        <p>For businesses, employees are no longer just assets, they are the company's main source of growth. It's now important for businesses to provide their employees with transferable knowledge and skills so they can navigate an increasingly competitive environment. </p>
        <p>IThis is where <b>Human Resource Development</b> (HRD) comes in handy. It is a strategic framework that helps organizations take the initiative to train, educate, mentor, and align employees' goals with organizational interests.  </p>
        <p>The core elements of a successful workplace include raising productivity, improving job satisfaction, and enhancing performance. The businesses that set these objectives understand that without a well-trained and engaged workforce it's impossible to stay competitive in the ever-evolving digital era. </p>
        <p>Businesses quietly convey to their staff that they genuinely care about their pleasure and well-being, which fosters a culture where employees feel engaged and highly appreciated. So, HRD creates a more engaged and driven team by making workers feel valued and appreciated. </p>
        <img class="mb-4" src="{{asset('/public/assets/img/human-resource-development/image-2.webp')}}" alt="Image">
        <h4 id="What is Human Resource Development?">What is Human Resource Development?</h4>
        <p>No doubt employees who are skilled and best at what they do are the greatest asset to the business and the core reason behind the many organizations’ growth. </p>
        <p style="font-style:italic;">“Human Resource Development (HRD) is a comprehensive approach of future-forwarding organizations aimed at enhancing employee’s skills, knowledge, and effectiveness.” </p>
        <p>Human Resource Development is the part of human resource management department job. So, it’s the HR department’s responsibility to create ways for employee’s career development, succession planning, coaching, and performance management. </p>
        <p>HRD’s main objective is to empower the employees with new knowledge, skills, abilities, so they perform better within the organization and collectively accelerate the organizational scalability.  </p>
        <img class="mb-4" src="{{asset('/public/assets/img/human-resource-development/image-3.webp')}}" alt="Image">
        <p>Primarily, human resource development focuses on: </p>
        <p id="Training and Development"><b>Training and Development: </b><br>
        HRD offer programs that develop employees' skills, knowledge, and competencies. This includes on-the-job training, workshops, seminars, and formal education.
        </p>
        <p id="Career Development"><b>Career Development: </b><br>
        It helps employees to plan and manage career paths. This includes career counseling, mentoring, and succession planning.
        </p>
        <p id="Organizational Development"><b>Organizational Development: </b><br>
        Human resource developers are responsible to define organizational processes, structures, and culture to enhance effectiveness. This includes change management, team building, and leadership development.
        </p>
        <p id="Performance Management"><b>Performance Management: </b><br>
        It implements systems to evaluate and improve employee performance. This includes setting performance standards, conducting appraisals, and providing feedback
        </p>
        <p id="Learning and Development"><b>Learning and Development</b><br>
        Think of HRD learning and growth as garden maintenance. Strategic HRD creates the right environment, nurtures the growth, and plants the seeds. It includes things like rich soil (the environment), regular irrigation (learning chances), and encouraging self-sustaining development (supporting independent learning).  
        </p>
        <p>Employing effective HRD management techniques can help organizations achieve sustainable growth. These tactics also help individuals develop and adjust to the dynamic commercial world.  </p>
        <h4 id="What is the difference between human resource development and human resource management?" style="text-align: center;">What is the difference between human resource development and human resource management? </h4>
        <p> 
        When it comes to managing people of an organization human resource management (HRM) makes sure everything runs smoothly. It is a journey which an employee goes through within a company. HRM involves five key stages:  </p>
        <ul>
          <li>finding and hiring the right people (recruitment and selection),  </li>
          <li>making sure they get paid fairly (compensation and benefits),   </li>
          <li>keeping track of how well they’re doing (performance management), </li>
          <li>creating a positive work environment (culture and engagement), and </li>
          <li>helping them learn and grow (training and development). </li>
        </ul>
        <p>So, out of all the functions involved in HRM, HRD is one of these functions that HR performs. While human resource management covers a complete employee’s journey in an organization, Human Resource Development (HRD) is all about helping employees grow and get better. </p>
        <img class="mb-4" src="{{asset('/public/assets/img/human-resource-development/image-4.webp')}}" alt="Image">
        <h4 id="Why Human Resource Development Matters?">Why Human Resource Development Matters? </h4>
        <p><b>Human resource development</b> is a calculated investment that helps a business achieve long-term success and expansion. It not only helps in employee training but also plays a significant role for <b>team collaboration, employee retention, innovation, and leadership development.</b> </p>
        <p>According to LinkedIn Learning <a href="https://learning.linkedin.com/resources/workplace-learning-report" target="_blank">Workplace Learning Report 2024</a>, 94% of employees stay longer with companies that support their career development.  </p>
        <p>Here is why HRD is important for an organization: </p>
        <p id="Skills and Knowledge"><b>1. Skills and Knowledge</b><br>
        With the help of HRD, employers invest in employee training and professional growth, which helps keep their skills and knowledge current. This ongoing learning enhances individual performance and boosts overall team effectiveness. 
        </p>
        <p id="Team Collaboration"><b>2. Team Collaboration</b><br>
        Human resource development offers effective team building and collaboration tools, which are vital in today’s diverse work environments. Organizations focusing on team cohesion experienced a 25% increase in productivity. By improving communication and teamwork, companies create a more efficient and motivated workforce.  
        </p>
        <p id="Employee Turnover and Retention"><b>3. Employee Turnover and Retention </b><br>
        Offering clear career growth opportunities is important for keeping employees. Retention is higher and turnover is lower in companies with effective HRD programs. Moreover, Employee retention lowers the costs associated with frequent hirings.  
        </p>
        <p id="Creativity & Innovation"><b>4. Creativity & Innovation </b><br>
        With the use of unique programs, HRD encourages creativity and fresh ideas in businesses. Businesses frequently notice an increase in revenue from new goods and services when they invest in these creative activities. Organizations with their help maintain a competitive edge by fostering a culture that rewards innovation.</p>
        <p id="Leadership"><b>5. Leadership </b><br>
        HRD helps individuals develop leadership skills which are key to maintaining organizational stability. Leadership training is 1.5 times more likely to have a strong group of future leaders. Investing in leadership development ensures that employees are ready for higher roles, supporting smooth transitions and long-term success.  </p>
        <img class="mb-4" src="{{asset('/public/assets/img/human-resource-development/image-5.webp')}}" alt="Image">
        <h4 id="StaffViz—Train Your Workforce with Ease">StaffViz—Train Your Workforce with Ease </h4>
        <p>StaffViz makes it easy for organizations to train their employees with advanced trainings management solutions. The software fosters self-paced learning for all individuals and records their progress separately. </p>
        <p>HR Managers can also design quizzes to check the training effectiveness, and the learning material can be re-used and updated when required. The best thing is that all the training progress, courses updates and quiz creation can be done within a single software.  </p>
        <p>Other than employee training StaffViz also helps HR managers in overall employee management and saves time. </p>
        <img class="mb-4" src="{{asset('/public/assets/img/human-resource-development/image-6.webp')}}" alt="Image">
        <h4 id="Final Thoughts">Final Thoughts </h4>
        <p>The development of human resources is important for the survival of business entities. Putting money into your workforce always pays off in higher output and substantial growth. Offering employees room to grow and adapt lowers the risk of leaving the company sooner and saves money on hiring and onboarding new staff.  
        </p>
        <p>HRD promotes a positive work culture; it aims to enhance employees' knowledge, skills, and performance, aligning with the company's interests. It ensures team collaboration and efficient communication. According to Gallup, effective team building, and collaboration tools increase productivity by 25%. </p>
        <p>So, we’ve listed some top remote meeting tools that’ll suit you best. </p>
        <p>Human resource development programs mutually benefit organizations and employees. They support goal achievement, attract and retain employees, and ultimately result in driving business success. </p>
        <div class="try-staffviz-box text-center">
          <h5>StaffViz, Making Employee Training More Effective  </h5>
          <p>Dive into the world of advanced, intuitive training solutions designed to enhance employee skills at their own pace. </p>
          <a href="{{url('/pricing-plans')}}">START FREE TRIAL</a>
          <img class="swirling-lines" src="{{asset('/public/assets/img/swirling-lines.png')}}" alt="Swirling Lines">
        </div>

        <div id="faqs" class="faqs">
          <h2 class="heading">FAQs</h2>
          <div class="single-item">
            <h4>What is Human Resource Development (HRD? </h4>
            <p>HRD covers training and development programs, which aim to enhance the competencies, expertise, and understanding of staff members. Its main objectives are to promote corporate objectives and raise employee performance.</p>
          </div>
          <div class="single-item">
            <h4>How does HRD impact employee retention?</h4>
            <p>Effective HRD programs contribute to higher employee retention by providing career development opportunities and showing that the organization values its employees. This helps reduce turnover and associated hiring costs. </p>
          </div>
          <div class="single-item">
            <h4>What are some common HRD tools and programs? </h4>
            <p>Common HRD tools and programs include training workshops, mentorship programs, leadership development courses, online learning platforms, and team-building activities. </p>
          </div>
          <div class="single-item">
            <h4>How StaffViz help businesses in employee development?  </h4>
            <p>StaffViz streamlines human resource development by offering advanced training management tools. It supports self-paced learning, allows HR managers to create and evaluate quizzes, and provides features for updating and reusing learning materials—all within a single platform. This integration facilitates effective training and skill enhancement for employees.</p>
          </div>
          <div class="single-item">
            <h4>What is the difference between HRM And HRD?   </h4>
            <p>Human Resource Management (HRM) deals with all the employee management functions from onboarding a new employee to their performance management, while human resource development (HRD) is a one part of HRM functions that only deal with employee’s training, development and career growth. </p>
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
              <a href="#What is Human Resource Development?">What is Human Resource Development?
              </a>
              <!-- <ul>
                <li>
                  <a href="#Training and Development">Training and Development</a>
                </li>
                <li>
                  <a href="#Career Development">Career Development</a>
                </li>
                <li>
                  <a href="#Organizational Development">Organizational Development</a>
                </li>
                <li>
                  <a href="#Performance Management">Performance Management</a>
                </li>
                <li>
                  <a href="#Learning and Development">Learning and Development</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#What is the difference between human resource development and human resource management?">What is the difference between human resource development and human resource management?</a>
            </li>
            <li>
              <a href="#Why Human Resource Development Matters?">Why Human Resource Development Matters?</a>
              <!-- <ul>
                <li>
                  <a href="#Skills and Knowledge">Skills and Knowledge</a>
                </li>
                <li>
                  <a href="#Team Collaboration">Team Collaboration</a>
                </li>
                <li>
                  <a href="#Employee Turnover and Retention">Employee Turnover and Retention</a>
                </li>
                <li>
                  <a href="#Creativity & Innovation">Creativity & Innovation</a>
                </li>
                <li>
                  <a href="#Leadership">Leadership</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#StaffViz—Train Your Workforce with Ease">StaffViz—Train Your Workforce with Ease</a>
            </li>
            <li>
              <a href="#Final Thoughts">Final Thoughts</a>
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