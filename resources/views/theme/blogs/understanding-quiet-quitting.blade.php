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
          <h1>Understanding Quiet Quitting: What it is and How to Address it?</h1>
          
        </div>

        <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
          <div class="d-flex align-items-center">
            <div class="single-detail">
              <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
            </div>
            <div class="single-detail">
              <p>Dec 9, 2024</p>
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
        <img class="main-banner-img" src="{{asset('/public/assets/img/understanding-quiet-quitting-detail-img.webp')}}"
          alt="Blog Main">
        <!-- <div class="highlighed-text">
          <p>In 2022, 'Quiet Quitting' — a term that describes an employee performing the bare minimum to fulfill their
            job requirements without showing initiative or willingness to go above and beyond—gained widespread
            attention, sparked by a TikTok video.</p>
        </div> -->
        <p>Amidst COVID, A 20-something engineer, Zaid Khan, posted a video on TikTok and introduced millions of people
          to 'Quiet Quitting' as:</p>
        <div class="grey-box">
          <p>"I recently learned about this term called quiet quitting, where you're not outright quitting your job, but
            you're quitting the idea of going above and beyond," Khan says.</p>
          <p>"You're still performing your duties, but you're no longer subscribing to the hustle culture mentality that
            work has to be your life. The reality is it's not — and your worth as a person is not defined by your
            labor."</p>
        </div>
        <p>Some of the reports say that the concept of quiet quitting was initially inspired by the Chinese hashtag
          #TangPing, which translates to 'lay flat.' This term was used as a form of protest against the prevalent
          culture of overworking in China. It resonated with many, leading to its adoption in the context of employee
          behavior.</p>
        <p>From an employer's point of view, <b>quiet quitting means</b> a person is not doing his job as dedicatedly as
          he is being paid for. This behavior can significantly impact the workplace, affecting productivity and morale.
        </p>
        <h4 id="vocal-response">The Vocal Response to Quiet Quitting</h4>
        <p>Since the concept of the <b>quiet quitting trend</b> went viral on the internet, people are sharing their
          views. Many support the stance, saying <b>silent quitting</b> is a safeguard to your mental health; there
          should be a work-life balance; one must question one's job choices and prioritize time with family. Going
          above and beyond does not mean being burned out. Many would also nod against it.</p>
        <p>A <a
            href="https://www.pewresearch.org/short-reads/2022/03/09/majority-of-workers-who-quit-a-job-in-2021-cite-low-pay-no-opportunities-for-advancement-feeling-disrespected/"
            target="_blank" rel="noopener">Pew Research Center survey</a> in 2021 highlighted that Americans mainly quit
          their jobs due to limited career growth, low wages, and a lack of respect.</p>
        <p>According to <a href="https://www.gallup.com/workplace/398306/quiet-quitting-real.aspx" target="_blank"
            rel="noopener">Gallup</a>, Quiet quitters make up 50% or probably more of the U.S. workforce. In the second
          quarter of 2022, U.S. employee engagement saw a further decline, and the rate of actively disengaged workers
          rose to 18%. This resulted in an engagement-to-disengagement ratio of 1.8 to 1, the lowest in nearly ten
          years.</p>
        <p>The overall drop was notably tied to unclear expectations, fewer opportunities for development, a lack of
          care from the organization, and a diminished sense of connection to the company's mission or purpose.</p>
        <h4 id="quiet-quitting-look">What Does Quiet Quitting Look Like in Action?</h4>
        <p>Quiet quitting happens when employees do just enough to meet their job requirements and stop putting in extra
          effort.<b>Signs of quiet quitting</b> can be seen in several practical ways:</p>
        <ul>
          <li><b>Avoiding Extra Tasks:</b> Employees avoid volunteering for additional work, leadership roles, or extra
            responsibilities. They stick strictly to their assigned tasks and avoid taking on new projects or
            initiatives.</li>
          <li><b>Limited Engagement in Meetings:</b> They remain silent during meetings unless directly asked to speak
            or contribute. They avoid offering ideas, feedback, or taking part in discussions unless specifically
            required.</li>
          <li><b>Ignoring After-Hours Communication:</b> Employees often do not respond to emails, messages, or calls
            outside their regular work hours. They draw a clear line between work time and personal time.</li>
          <li><b>Rejecting Work Beyond Job Description:</b> They decline tasks or projects that fall outside their
            defined job role, sticking only to their primary responsibilities and avoiding tasks not part of their job
            description.</li>
          <li><b>Social Isolation:</b>Quiet quitters withdraw from team interactions, social events, and informal
            gatherings. They avoid building relationships with colleagues and may isolate themselves from team dynamics.
          </li>
          <li><b>Increased Absenteeism:</b>They take more sick days or show higher absenteeism in order to avoid
            working. This suggests that they are not enthusiastic or engaged in their task.</li>
        </ul>
        <p>All things considered, silent resignation denotes a change in emphasis from going above and beyond to
          completing tasks with the least amount of additional effort.</p>
        <p>To create a sense of purpose and belonging among their team members, managers must regularly communicate to
          them the value of their contributions because employees feel more purposeful at work when they can understand
          how their work fits into the bigger picture.</p>
        <h4 id="why-the-silence">Why the Silence? Uncovering the Reasons Behind Quiet Quitting</h4>
        <p>On uncovering, we learn the main reason for behaviors like quiet quitting is employees not being valued at
          work. This implies that the organization that they are working for has a less-than-ideal environment. There
          are places where employees cannot speak for themselves which also results in feeling unsafe when sharing their
          concerns.</p>
        <p>For example, according to Gallup reports, many employees do not report unethical behavior they have witnessed
          at work. Although 90% say they are going to report it, out of them only 40% do. A major reason for this is a
          lack of trust in whether the employer will address the issue properly. Employees who believe their employer
          will act reasonably are 24 percentage points more likely to report such problems.</p>
        <p>Digging the term widely, "quiet quitting" and "bare minimum Mondays" suggest that employees prioritize their
          well-being over their jobs. This is often because they are trying to avoid burnout.</p>
        <p>Gallup identifies unfair treatment as a significant cause of burnout. Therefore, high levels of burnout in an
          organization may indicate fairness issues rather than productivity problems.</p>
        <p>To sum up all this, when employees remain silent, it might be a sign that (a) they find their work
          environment unfair and unsustainable and (b) they believe the relationship with their employer is unlikely to
          improve.</p>
        <h4 id="popularity-among-gen-z">Quiet Quitting Gaining Popularity Among Gen Z</h4>
        <p>Interestingly for Gen Z (those born between 1997 and 2012) workers, quiet quitting has evolved into <b>
            "resenteeism."</b> Employers have mixed reviews about them when it comes to their workplace engagement.</p>
        <p><i>“Resenteeism, a combination of “resentment” and “absenteeism,” describes a growing trend where employees
            remain in dissatisfying roles”.</i></p>
        <p>Although this generation is too casual, sometimes even difficult to work with, workplace dissatisfaction has
          become such a hot topic for them as well. Gen Z feels stuck because they cannot find a better-suited job, they
          believe they will not be able to move elsewhere.</p>
        <p>The following are different reasons for Gen Z triggering quiet quitting.</p>
        <ul>
          <li><b>Economic Uncertainty:</b>Gen Z faces job market volatility, influencing skepticism towards traditional
            employment stability.</li>
          <li><b>Work-Life Balance Priorities:</b> This generation prioritizes flexibility and personal well-being over
            strict job loyalty.</li>
          <li><b>Greater Awareness of Mental Health:</b>Heightened sensitivity to mental health fosters resistance to
            stressful, traditional work environments.</li>
          <li><b>Desire for Meaningful Work:</b> Gen Z seeks jobs that offer a sense of purpose and align with their
            values.</li>
          <li><b>Influence of social media:</b>Exposure to alternative career paths on social media inspires a
            preference for non-traditional roles.</li>
          <li><b>Advocacy for Equity and Transparency</b>A strong focus on social justice leads to demands for fairness
            and openness in workplace culture.</li>
        </ul>
        <p>Although Gen Z is youthful and energetic the above factors push them to Quiet Quitting. Open communication,
          open culture, flexible work schedule and career development programs are some useful organizational tools to
          mitigate resenteeism and quiet quitting especially among Gen Z.</p>
        <h4 id="reimagining-employee">Reimagining Employee Engagement to Overcome Quiet Quitting</h4>
        <p>Now that we have a clear idea of how quiet quitting signals issues within organizational culture and
          leadership. So, it means rather than seeing it as a management problem, one should view it as an opportunity
          to reimagine how to engage with employees.</p>
        <p><b>Fix Manager-Employee Connections:</b>
          <br>
          Imagine crossing a bridge that feels shaky; every step you take will fill you with doubts about whether to
          move forward or go back. Managers are the bridge between employees and the organization.
        </p>
        <p>Strengthening the connection between managers and employees is at the heart of resolving quietly quitting.
          Managers should be trained in technical skills, empathy, active listening, and personal engagement.
          Understanding employees' life situations, strengths, and aspirations can transform workplace dynamics.</p>
        <p><b>Cultivating Regular, Meaningful Conversations:</b>
          <br>
          One of the most impactful changes can be instituting weekly, meaningful, one-on-one conversations between
          managers and their team members. These 15-30-minute discussions allow employees to express their concerns,
          receive feedback, and feel valued. It is about more than just performance reviews; it is about genuine human
          connection.
        </p>
        <div class="grey-box">
          <p>"No one cares how much you know until they know how much you care."
            <br>
            – President Theodore Roosevelt
          </p>
        </div>
        <p><b>Aligning Work with Purpose:</b>
          <br>
          So, work satisfaction has become more closely linked to a purpose. Motivation is frequently based on knowing
          how one's position contributes to larger corporate goals.
        </p>
        <p>Employees who are unclear about how their labor affects corporate success may feel detached and devalued.
          Managers can solve this by continually emphasizing the value of each team member's contributions, allowing
          them to recognize their place in the larger picture.</p>
        <p><b>Flexibility and Trust in Work Arrangements:</b>
          <br>
          It is important to consider worker satisfaction and efficiency while creating on-site, remote, or hybrid work
          settings. Encouraging people to choose the work arrangement that best matches their needs can assist in
          minimizing burnout and boosting morale.
          <br>
          Keep in mind! Adaptability is not a weakness but a virtue.
        </p>
        <p><b>Creating an Inclusive Culture:</b>
          <br>
          Employees who feel appreciated and part of the organization's community must be fostered. Promoting diversity,
          appreciating varied contributions, and guaranteeing equitable treatment at all levels are all necessary to
          achieve this. Respected and essential to the success of the company is an engaged workforce.
        </p>
        <p>Organizations may reverse the trend of employee attrition and cultivate a more devoted, driven staff by
          reconsidering engagement tactics and emphasizing the importance of manager-employee connections.</p>
        <h4 id="staffViz—helping-organizations">StaffViz—Helping Organizations Eliminate Quiet Quitting</h4>
        <p>Till now, we understood that the major factor for Quiet Quitting is not getting recognized for your efforts.
          This is quite the problem when you put your heart and soul into something and yet do not get any recognition
          for your efforts.</p>
        <p>Organizations with hundreds and thousands of employees find it hard to identify the workers, putting in extra
          effort, but StaffViz makes it possible. How?!</p>
        <p>StaffViz keeps track of every employee's activity in real-time and creates logs that showcase the overall
          performance of everyone within the organization. This way, the management gets the KPIs for each employee
          along with the top performers.
          <br>
          So, that's how easy it is with StaffViz to eliminate Quiet Quitting.
        </p>
        <div class="try-staffviz-box text-center">
          <h5>StaffViz: Keep Your Team Connected and Committed</h5>
          <p>Ready to enhance team engagement? Start your free trial with<br> StaffViz and make every second and effort
            count.</p>
          <a href="{{url('/pricing-plans')}}">START FREE TRIAL</a>
          <img class="swirling-lines" src="{{asset('/public/assets/img/swirling-lines.png')}}" alt="Swirling Lines">
        </div>
        <div id="faqs" class="faqs">
          <h2 class="heading">FAQs</h2>
          <div class="single-item">
            <h4>Why quiet quitting is bad?</h4>
            <p>Quiet quitting can negatively impact your career. If you disengage and remain silent, others might
              perceive you as uninterested, unqualified, or not a good fit for the role. This perception can result in
              missed opportunities for promotions and salary increases or even lead to job loss.</p>
          </div>
          <div class="single-item">
            <h4>How to prevent quiet quitting?</h4>
            <p>Preventing quiet quitting requires a proactive approach to employee engagement. By understanding what it
              is, spotting the signs, encouraging open communication, creating a positive work environment, and offering
              development programs, companies can build a culture that values and supports employee engagement.</p>
          </div>
          <div class="single-item">
            <h4>Why are employees quiet quitting?</h4>
            <p>Quiet quitting indicates an employee's dissatisfaction with their role. This behavior is a coping
              mechanism to alleviate stress. It might also suggest that the employee is ready for a change or actively
              seeking new job opportunities.</p>
            <p>Job Dissatisfaction, Burnout, Desire for Change, Active Job Search, Stress Management, Work Environment
              Issues, and Quiet Quitting are the major causes for quiet quitting.</p>
          </div>
          <div class="single-item">
            <h4>How does StaffViz help eliminate quiet quitting?</h4>
            <p>StaffViz helps eliminate quiet quitting by tracking each employee's activity in real time, creating
              performance logs visible to management. This enables the identification of top performers and provides key
              performance indicators (KPIs) for each employee, making it easier for organizations to recognize and
              address issues related to quiet quitting.</p>
          </div>
          <div class="single-item">
            <h4>Can StaffViz aid in reducing workforce turnover?</h4>
            <p>Yes, StaffViz plays a crucial role in enhancing employee recognition by providing management with clear
              insights into individual contributions and work patterns. This data helps in acknowledging both the effort
              and achievements of employees, promoting a culture of appreciation.</p>
          </div>
          <div class="single-item">
            <h4>Why is Gen Z Prone to Quiet Quitting?</h4>
            <p>Gen Z's quiet quitting is influenced by economic uncertainty, a strong preference for work-life balance,
              an acute awareness of mental health, a desire for meaningful work, the influence of social media, and a
              demand for equity and transparency in the workplace.<br>
              To mitigate this, organizations can adopt strategies such as fostering open communication, creating a
              flexible work environment, and providing clear career development opportunities.</p>
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
      <div class="col-xl-4 col-lg-5 col-md-4 order-lg-2 order-1 table-content">
        <h5>Table of Content</h5>
        <div class="table-content-box">
          <ul>
            <li>
              <a href="#vocal-response">The Vocal Response to Quiet Quitting</a>
            </li>
            <li>
              <a href="#quiet-quitting-look">What Does Quiet Quitting Look Like in Action?</a>
            </li>
            <li>
              <a href="#why-the-silence">Why the Silence? Uncovering the Reasons Behind Quiet Quitting</a>
            </li>
            <li>
              <a href="#popularity-among-gen-z">Quiet Quitting Gaining Popularity Among Gen Z</a>
            </li>
            <li>
              <a href="#reimagining-employee">Reimagining Employee Engagement to Overcome Quiet Quitting</a>
            </li>
            <li>
              <a href="#staffViz—helping-organizations">StaffViz—Helping Organizations Eliminate Quiet Quitting</a>
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
                  <img src="{{asset('public/assets/img/avoid-micromanagement-detail-img.webp')}}"
                    alt="avoid-micromanagment-blog">
                </div>
                <div class="col-lg-7 text">
                  <a href="{{url('/blogs/how-to-avoid-micromanagement-using-advanced-solutions')}}">
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
                <img src="{{asset('public/assets/img/avoid-micromanagement-detail-img.webp')}}"
                  alt="avoid-micromanagment-blog">
              </div>
              <div class="col-lg-7 text">
                <a href="{{url('/blogs/how-to-avoid-micromanagement-using-advanced-solutions')}}">
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