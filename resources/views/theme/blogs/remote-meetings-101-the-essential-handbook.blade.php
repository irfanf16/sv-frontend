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
          <h6 class="category-name">Remote Work Optimization</h6>
          <h1>Remote Meetings 101: <br>The Essential Handbook</h1>
        </div>
        <div class="mt-md-4 mb-md-5 my-3 d-flex justify-content-between align-items-center blog-details">
          <div class="d-flex align-items-center">
            <div class="single-detail">
              <p><img src="{{asset('public/assets/img/tracy.png')}}" alt="Tracy">Tracey Taylor</p>
            </div>
            <div class="single-detail">
              <p>Dec 24, 2024</p>
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
        <img class="main-banner-img" src="{{asset('/public/assets/img/remote-meetings/image-1.webp')}}"
          alt="Blog Main">
        <p>Remember when you had to rush to a conference room, fight traffic, or even hop on a plane just to discuss things that could’ve been solved with a simple conversation? Sounds like a thing of the past, right? Well, it's kind of is—thanks to remote meetings.  </p>
        <p>To the Millennials and Gen Z people, who have grown up in a world of fast technology and flexible working arrangements, the ability to connect and collaborate online is almost second nature. No more crawls to make meetings in time or hours of travel to get to a venue. All a person needs today is a laptop, a stable Wi-Fi, and he is all set. </p>
        <p>In this article, we will be explaining what a remote meeting is and giving some tips for remaining efficient and productive with every session. We take a closer look at technology that is the reliable backbone of such collaboration, which provides a guarantee of success in each remote collaboration and instills confidence in working from any location. </p>
        <h4 id="What is a Remote Meeting?">What is a Remote Meeting? </h4>
        <p>In a remote meeting, people come together to talk, discuss and work on something. Instead of being in the same room, they do it online. This allows people in the same organization working from anywhere to join in important discussions regardless of their locations.</p>
        <p>We have many meeting software platforms available over the internet. A few of them are Zoom, Google Meet, Microsoft Teams, and Skype. These tools enable people to see each other, talk, share screens, and collaborate as if they were sitting in the same room.  </p>
        <p>While remote meetings existed before the pandemic, COVID-19 gave them significant fame. During lockdowns, these meetings proved to be the perfect solution for teams looking for flexibility, convenience, and freedom from being tied to a single location. </p>
        <p>What used to be in-person meetings, where teams had to travel or use public transportation to meet up with clients, are now being conducted online. This saved time and reduced hassle while allowing teams to easily work together. </p>
        <p>Nowadays, every business operating on a fully remote or hybrid model uses remote meetings to keep teams connected. The wide uses and adaptability of these tools show how important they are to businesses, which have to be successful in today's world. </p>
        <img class="mb-4" src="{{asset('/public/assets/img/remote-meetings/image-2.webp')}}" alt="Image">
        <h4 id="How to Set Up Online Meetings?">How to Set Up Online Meetings? </h4>
        <p>Setting up a meeting can be as simple as starting a Skype call or Using Google Meet for a scheduled video conference. Many platforms aid you in planning meetings for employees dispersed across remote locations. They adapt to your needs, allowing you to tailor the process to your specific requirements, whether a short call with a few attendees or a large video conference with multiple employees. </p>
        <p>To set up an online meeting, you can: </p>
        <p id="Choose a Platform"><b>1. Choose a Platform</b></p>
        <p>Consider platforms considering your ease of use, security, scalability, and compatibility with existing tools, if any. Commonly used tools for online meetings are Google Meet, Microsoft Teams, and Zoom. 
        </p>
        <p id="Enter Meeting Details"><b>2. Enter Meeting Details</b></p>
        <p>Choose a preferable time, date, and duration for the meeting.  </p>
        <p id="Send Invitations"><b>3. Send Invitations</b></p>
        <p>Invite participants ahead of time so they can plan to attend. Some platforms may send invitations automatically.</p>
        <p id="Prepare Your Space"><b>4. Prepare Your Space </b></p>
        <p>Set up your room by improving the lights and background. Make sure the space you choose has minimal distractions.</p>
        <p>An agenda is necessary for a meaningful virtual meeting to ensure a focused discussion. Every participant should prepare beforehand to discuss and contribute during the conference. A list of deliverables and critical points of meetings should also be noted. A recording or notes should be shared if an employee or team member is unavailable during the meeting. </p>
        <img class="mb-4" src="{{asset('/public/assets/img/remote-meetings/image-3.webp')}}" alt="Image">
        <h4 id="How to Choose a Meeting Tool for Your Team?">How to Choose a Meeting Tool for Your Team? </h4>
        <p>Choosing a tool for the hybrid teams to engage in online meetings is essential. Start considering tools that compensate for your team’s remote meeting experience. Brainstorm your requirements for a platform. Check if you need a platform with additional features like screen or file sharing or a straightforward remote meeting tool with video or audio conference calls. Apart from these, the following are the questions that you need to consider when choosing: </p>
        <p id="Ease of Use"><b>Ease of Use:</b>
        <br>
        Choose a tool with an easy-to-navigate user interface to minimize the learning curve. Ensure It's compatible with smartphones, laptops, and tablets.
        </p>
        <p id="Security & Privacy"><b>Security & Privacy:</b>
        <br>
        Consider a tool that protects your data and conversations throughout the meeting. The online meeting tool should only offer access to people you invite to ensure privacy. 
        </p>
        <p id="Integration with Existing Technology"><b>Integration with Existing Technology:</b>
        <br>
        Your online meeting tool should be compatible with other technologies that you use in your organization. Such as OneDrive, Google Drive, Google Calendar etc.
        </p>
        <p id="Cost"><b>Cost:</b>
        <br>
        Although most online meeting tools are free initially, choosing a tool that fits your budget and team size is also necessary. Compare the prices of different tools and select what fits your budget and needs. </p>
        <img class="mb-4" src="{{asset('/public/assets/img/remote-meetings/image-4.webp')}}" alt="Image">
        <h4 id="Top Remote-Meeting Tools">Top Remote-Meeting Tools:</h4>
        <p>With the boom in the industry transitioning to the new work setting, (i.e.; remote and hybrid work models) the requirement for virtual meetings has become crucial for effective communications.</p>
        <p>Where there’s a higher demand, there’s more supply. That’s why there’s no wonder you’ll find hundreds of thousands of online meeting tools including many that you don’t need. </p>
        <p>So, we’ve listed some top remote meeting tools that’ll suit you best. </p>
        <ol>
          <li><b>Zoom:</b> Conduct meetings with high-quality video, clear audio, and instant screen-sharing capabilities. </li>
          <li><b>Google Meet:</b> Experience seamless integration with other Google services, high-quality video, real-time captions, and secure encryption. </li>
          <li><b>Microsoft Teams:</b> Exceptional collaboration features, including chat, video calls, file sharing, and integration with Office 365, enhancing productivity across workspaces.</li>
          <li><b>Cisco Webex:</b> Utilize integrated audio, video, and content sharing for a lifelike meeting experience.</li>
          <li><b>GoToMeeting:</b> Enjoy HD video conferencing and screen-sharing, with various options for attendees to join. </li>
          <li><b>ClickMeeting:</b> Connect via any browser, share screens effortlessly, record meetings, and upload/share documents with attendees. </li>
          <li><b>StartMeeting:</b> Host HD audio conferences and online meetings featuring screen-sharing, video conferencing, international services, customization options, and co-branding. </li>
        </ol>
        <p>Most of these tools also offer free trial, so before you choose one, we’ll recommend checking out trials.  </p>
        <img class="mb-4" src="{{asset('/public/assets/img/remote-meetings/image-5.webp')}}" alt="Image">
        <h4 id="Examining the Effectiveness of Remote Meetings">Examining the Effectiveness of Remote Meetings </h4>
        <p>Virtual meetings are proven to have an upper hand over in-person meeting. An in-person meeting takes time to prepare, and most people need to be at the same place at the same time, hence the commute. Virtual meetings require a personal computer, laptop, or even a smartphone with stable internet that can be used for a meeting. This not only saves time but also saves the cost and space required. The following are the benefits of remote meetings: </p>
        <p id="Easy and Convenient"><b>Easy and Convenient:</b><br>
        Virtual meetings are more convenient for hybrid teams. They allow for flexibility in schedules, accommodating different time zones. If some individuals cannot join the meeting, they still benefit from critical points of the meeting through recordings and notes. 
        </p>
        <p id="Global Collaboration"><b>Global Collaboration:</b><br>
        Companies with global teams can connect through remote meetings and collaborate. This will promote a sense of connection and increase productivity. 
        </p>
        <p id="Accessibility"><b>Accessibility:</b><br>
        Virtual meeting tools incorporate features like closed captioning, screen reader compatibility, and keyboard shortcuts to support team members with disabilities. They support multiple languages, making participating easier for team members who speak different languages. Additionally, these tools are accessible via mobile devices, allowing team members to join meetings from anywhere.  
        </p>
        <p id="Time-Efficient"><b>Time-Efficient:</b><br>
        Conducting meetings online means everyone can join, no matter where they are. This leads to more ideas and focused conversations. This saves more time compared to in-person meetings.  
        </p>
        <p id="Sharing files-screen"><b>Sharing files/screen:</b></p>
        <p>Meeting tools provide features like sharing files and screens. Making it easier to present slide decks or important documents during remote meetings. This means everyone has access to information in real-time ensuring everyone is on the same page.  </p>
        <img class="mb-4" src="{{asset('/public/assets/img/remote-meetings/image-6.webp')}}" alt="Image">
        <h4 id="Conclusion">Conclusion</h4>
        <p>In a nutshell, virtual meetings give teams a chance to work beyond geographical boundaries through features like video conferencing, screen sharing, and real-time file sharing. </p>
        <p>The adoption of remote meeting platforms fosters agility. The various tools involved offer flexible ways of setting up meetings besides ensuring that all team members can access the meeting. Flexibility increases productivity since it excludes operational costs like traveling or physical meeting spaces. </p>
        <p>This, in turn, creates a culture where teams of diverse natures discuss effectively and are involved in decision-making processes. </p>
        <p>The conclusion is that as more and more businesses start embracing digital transformation, remote meeting tools will play a strategic role in the success, resilience, and continued growth of the digital era. </p>
        <div class="try-staffviz-box text-center">
          <h5>Effectively Manage Remote and Hybrid Teams with StaffViz </h5>
          <p>Enhance team efficiency and collaboration with StaffViz, the ultimate tool for managing remote and hybrid teams. </p>
          <a href="{{url('/pricing-plans')}}">START FREE TRIAL</a>
          <img class="swirling-lines" src="{{asset('/public/assets/img/swirling-lines.png')}}" alt="Swirling Lines">
        </div>

        <div id="faqs" class="faqs">
          <h2 class="heading">FAQs</h2>
          <div class="single-item">
            <h4>What is a Remote Meeting? </h4>
            <p>Remote meetings are one of the powerful tools for hybrid teams. It enables organizations to communicate and collaborate with their teams in real time. With the help of remote meetings, employees will be able to discuss ideas, share updates, make decisions, and work on projects without in-person interaction. </p>
          </div>
          <div class="single-item">
            <h4>How to Set Up Online Meetings? </h4>
            <p>Select a web-based meeting platform like Google Meet, Microsoft Teams, or Zoom that best suit your needs based on ease of use and compatibility. Then schedule your meeting by setting the time, date, and sending invitations to participants. Ensure the meeting space is well-lit and free from distractions to maintain focus. </p>
          </div>
          <div class="single-item">
            <h4>How to Make Online Meetings Effective? </h4>
            <p>An agenda is necessary for a meaningful virtual meeting to ensure a focused discussion. Every participant should prepare beforehand to discuss and contribute during the conference. A list of deliverables and critical points of meetings should also be noted. A recording or notes should be shared if an employee or team member is unavailable during the meeting</p>
          </div>
          <div class="single-item">
            <h4>What are the Top Online Meeting Platforms?  </h4>
            <p>Zoom, Google Meet, MS Teams, Cisco Webex, GoToMeeting, ClickMeeting, and StartMeeting are top meeting tools offering high-quality video, screen-sharing, and versatile participant connectivity. </p>
          </div>
          <div class="single-item">
            <h4>What Are the Benefits of Remote Meetings?  </h4>
            <p>The key benefits of remote meetings include convenience for hybrid teams in different time zones, increased collaboration on a global scale, and accessibility through closed captioning and mobile support. They save time without having to commute and enable real-time sharing of files and screens, thus being highly efficient for global connectivity and productivity. </p>
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
              <a href="#What is a Remote Meeting?">What is a Remote Meeting?</a>
            </li>
            <li>
              <a href="#How to Set Up Online Meetings?">How to Set Up Online Meetings?</a>
              <!-- <ul>
                <li>
                  <a href="#Choose a Platform">Choose a Platform</a>
                </li>
                <li>
                  <a href="#Enter Meeting Details">Enter Meeting Details</a>
                </li>
                <li>
                  <a href="#Send Invitations">Send Invitations</a>
                </li>
                <li>
                  <a href="#Prepare Your Space">Prepare Your Space</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#How to Choose a Meeting Tool for Your Team?">How to Choose a Meeting Tool for Your Team?</a>
              <!-- <ul>
                <li>
                  <a href="#Ease of Use">Ease of Use</a>
                </li>
                <li>
                  <a href="#Security & Privacy">Security & Privacy</a>
                </li>
                <li>
                  <a href="#Integration with Existing Technology">Integration with Existing Technology</a>
                </li>
                <li>
                  <a href="#Cost">Cost</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#Top Remote-Meeting Tools">Top Remote-Meeting Tools</a>
            </li>
            <li>
              <a href="#Examining the Effectiveness of Remote Meetings">Examining the Effectiveness of Remote Meetings</a>
              <!-- <ul>
                <li>
                  <a href="#Easy and Convenient">Easy and Convenient</a>
                </li>
                <li>
                  <a href="#Global Collaboration">Global Collaboration</a>
                </li>
                <li>
                  <a href="#Accessibility">Accessibility</a>
                </li>
                <li>
                  <a href="#Time-Efficient">Time-Efficient</a>
                </li>
                <li>
                  <a href="#Sharing files-screen">Sharing files/screen</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="#Conclusion">Conclusion</a>
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