@extends('theme.layouts.master')
@section("page-class", "index-page")
@section('css')
<style type="text/css">
  .hero-head h6 {
    margin-top: 20px;
  }
  #sliderVideo {
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 625px;
    max-height: 625px;
    object-position: center;
    object-fit: cover;
  }
  #home-hero {
    background: none !important;
  }
  #about-hero:after {
    position: absolute;
    content: '';
    top: 0;
    height: 625px;
    width: 100%;
    background: linear-gradient(78.25deg, rgba(175, 31, 165, 0.5) 6.16%, rgba(34, 114, 159, 0.5) 39.5%, rgba(6, 37, 100, 0.5) 54.39%, rgba(2, 37, 96, 0.5) 85.46%);
    z-index: -1;
  }
  .hero-text p {
    margin-bottom: 20px;
  }
  @media(max-width: 1199px) {
    #sliderVideo {
      height: 635px;
      max-height: 635px;
    }
    #about-hero:after {
      height: 635px;
    }
  }
  @media only screen and (max-width: 575px) {
    #sliderVideo {
      height: 687px;
      max-height: 687px;
    }
    #about-hero:after {
      height: 687px;
    }
    .  {
      padding-top: 50px !important;
    }
    .hrm-header-section h1 {
      font-size: 27px !important;
    }
  }
  @media only screen and (max-width: 389px) {
    #sliderVideo {
      height: 732px;
      max-height: 732px;
    }
    #about-hero:after {
      height: 732px;
    }
  }
  @media only screen and (max-width: 374px) {
    #sliderVideo {
      height: 753px;
      max-height: 753px;
    }
    #about-hero:after {
      height: 753px;
    }
  }
</style>
@endsection('css')
@section('content')

<!-- Banner -->
<section id="about-hero" class="startup-page tracking-single-page hrm-header-section"
  style="background-image: url( '{{asset('/public/assets/img/shapes-about.webp')}}' );background-repeat: no-repeat; background-size: 50% 100% !important;background-position: 90% 100% !important;">
  <video autoplay muted loop id="sliderVideo">
    <source src="{{ asset('public/assets/videos/feature-page-video.mp4') }}" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
  <div class="container-fluid">
    <div class="row">
      <div class="hero-head h_t col-xl-9 col-md-10">
        <!-- <h6>Features </h6> -->
        <h1 class="pb-3">Accelerate Your Startup<br> <span>With StaffViz</span></h1>
        <div class="col-xl-8 col-md-9 hero-text">
          <h3>
          StaffViz Equips You With The Tools To Manage Teams,
          </h3>
          <p>Track projects, and streamline operations, all designed to scale with your growing business.</p>

        </div>
        <div class="hero-btns">
          <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" class="demo contact_btn">book a demo</a>
          <a href="{{url('/pricing-plans')}}" class="features">Start Free Trial</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Banner -->




 <!-- Empower Your Team -->
<section id="empower">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 text-center feature-tabs-head">
        <h2>Agile Project Management & <br> <span>Instant Team Coordination </span></h2>
         </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-between align-items-center reverse-me">
      <div class="col-lg-5 col-md-12">
        <div class="inner-contents">
          <div class="all-text">
            <h2>Empower Your Team to <br> <span> Deliver Faster </span></h2>
            <p>Enable your startup team to move quickly and efficiently with StaffViz’s agile project management tools. Monitor updates instantly, respond to shifts seamlessly, and ensure team alignment.</p>
          </div>
          <div class="hero-btns">
          <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" class="demo contact_btn">Book A Demo</a>
        </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img class="w-100" src="{{asset('public/assets/img/deliver faster.webp')}}" alt="Img">
      </div>

    </div>
  </div>
</section>

<!-- Scalable Infrastructure  -->
<section id="empower" class="scalable-infra">
  <div class="container">
    <div class="row justify-content-between align-items-center">
    <div class="col-lg-7 col-md-12 break-img">
        <img class="w-100" src="{{asset('public/assets/img/Frame1707488794.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12">
        <div class="inner-contents">
          <div class="all-text">
            <h2>Scalable <br> <span> Infrastructure </span></h2>
            <h3>Grow Without Limits</h3>
            <p>Whether you’re adding new team members, expanding into new markets, or increasing your product offerings, our platform adjusts to your needs without missing a beat. </p>
          </div>
          <div class="hero-btns">
          <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" class="demo contact_btn">Book A Demo</a>
        </div>
        </div>
      </div>
      

    </div>
  </div>
</section>

<!-- Resource Management  -->
<section id="empower" class="resource-mngmnt">
  <div class="container">
    <div class="row justify-content-between align-items-center reverse-me">
   
      <div class="col-lg-5 col-md-12">
        <div class="inner-contents">
          <div class="all-text">
            <h2>Cost-Effective <span> Resource <br> Management </span></h2>
            <h3>
            Optimize Spending as You Grow
            </h3>
            <p>Track time, allocate tasks, and see where every penny goes with our tracking tool. Perfect for startups looking to maximize every resource.</p>
          </div>
          <div class="hero-btns">
          <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" class="demo contact_btn">Book A Demo</a>
        </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 break-img">
        <img class="w-100" src="{{asset('public/assets/img/1707488800.webp')}}" alt="Img">
      </div>

    </div>
  </div>
</section>

<!-- Innovative Integration  -->
<section id="empower" class="innovative-iteg">
  <div class="container">
    <div class="row justify-content-between align-items-center">
    <div class="col-lg-7 col-md-12 break-img">
        <img class="w-100" src="{{asset('public/assets/img/1707489804.webp')}}" alt="Img">
      </div>
      <div class="col-lg-5 col-md-12">
        <div class="inner-contents">
          <div class="all-text">
            <h2>Innovative Integration <br><span>Options</span></h2>
            <h3>
            Seamlessly Connect with Other Tools
            </h3>
            <p>From Slack to Salesforce, StaffViz integrates with a wide array of platforms through Zapier to keep your workflows smooth and interconnected.</p>
          </div>
          <div class="hero-btns">
          <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" class="demo contact_btn">Book A Demo</a>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Security Measures  -->
<section id="empower" class="sec-measures">
  <div class="container">
    <div class="row justify-content-between align-items-center reverse-me">
    
      <div class="col-lg-5 col-md-12">
        <div class="inner-contents">
          <div class="all-text">
            <h2>Startup-Specific <span>Security <br> Measures</span></h2>
            <h3>
            Secure Your Innovation 
            </h3>
            <p>Protect your startup’s innovative ideas and customer data with robust security protocols like role-based access controls.</p>
          </div>
          <div class="hero-btns">
          <a href="https://api.streamlinerei.com/widget/booking/Yfp2VXl8NMqVzIjrqAXp" class="demo contact_btn">Book A Demo</a>
        </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-12 text-right break-img">
        <img src="{{asset('public/assets/img/Frame1707488787.webp')}}" alt="Img">
      </div>
    </div>
  </div>
</section>

<section id="earn_money" class="startup-ready earn-money solution-ctn">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-12 m-auto">
        <div class="money_div">
          <span>Get Started with StaffViz for Startups</span>
          <h2>Ready to Propel Your Startup Forward? </h2>
          <p>Kickstart your startup’s success with StaffViz. Begin with our free trial and experience firsthand how our platform can streamline your operations and enhance team productivity. 
          </p>
          <a href="{{url('/pricing-plans')}}">Start Your Free Trial</a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="logo_img d-md-flex d-none justify-content-end">
          <img src="{{asset('/public/assets/img/789789.webp')}}" alt="Logo">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="client-companies">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 title text-center">
        <h2>Comprehensive Feature Tour </h2>
      </div>
      <div class="col-12 text-center">
        <div class="owl-carousel">
          <div class="company-img img-1">
            <img src="{{ asset('public/assets/img/physician-homes.png') }}" alt="physician-homes">
          </div>
          <div class="company-img img-2">
            <img src="{{ asset('public/assets/img/result-driven.png') }}" alt="result-driven">
          </div>
          <div class="company-img img-3">
            <img src="{{ asset('public/assets/img/streamlinerei.webp') }}" alt="streamlinerei">
          </div>
          <div class="company-img img-4">
            <img src="{{ asset('public/assets/img/c2m.webp') }}" alt="c2m">
          </div>
          <div class="company-img img-5">
            <img src="{{ asset('public/assets/img/heel-homes.png') }}" alt="heel-homes">
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section id="yt-videos" >
<div class="container">
        <h2 class="text-center">Comprehensive Feature Tour</h2>
        <div class="row owl-carousel" id="videoGrid">
            <!-- Video Cards will be inserted here -->
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9" id="videoPlayer"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FAQ -->
<section id="faq" class="solutions-faq">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-11 text-center faq-head">
        <h5>
          Knowledge Base
        </h5>
        <h2>We Have the Right Answers to Satisfy Your Queries!</h2>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                What are the benefits of StaffViz for enterprises?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>
                  StaffViz offers scalable features designed to meet the needs of large organizations, ensuring
                  streamlined operations and enhanced collaboration across departments. </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                What are the benefits for SMBs & SMEs?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>StaffViz streamlines processes to boost productivity and promote collaboration, empowering you to
                  succeed in competitive markets. </p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                How can freelancers benefit?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>StaffViz provides real-time tracking and management capabilities, allowing freelancers to stay
                  organized and efficient. It helps with task monitoring, time tracking, and workflow optimization for
                  maximum productivity.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

@section('js')
<script>
   // YouTube video data with static description and duration
   const videoData = [
    {
        id: "RL8kzgWjxu8",
        description: "Discover the powerful features of StaffViz, your go-to solution for employee monitoring and boosting productivity. See how StaffViz simplifies workforce management with real-time tracking, detailed analytics, and customizable reports. Elevate workplace efficiency with StaffViz today!",
        duration: "0:40"  // Video 1: Overview of StaffViz features
    },
    {
        id: "61VScLTH58c",
        description: "Learn how to navigate the Schedule Management feature in StaffViz. In this tutorial, we’ll guide you through setting up and managing schedules, adjusting shifts, and ensuring optimal coverage across your workforce.",
        duration: "1:55"  // Video 2: Schedule Management tutorial
    },
    {
        id: "WbRjJkt6Hwc",
        description: "Unlock the full potential of the Timesheet feature in StaffViz, designed to simplify time tracking and boost productivity. This tutorial shows how to navigate the Timesheet interface, record hours accurately, and review employee time logs.",
        duration: "1:01"  // Video 3: Timesheet feature guide
    },
    {
        id: "wPaFOtonCy4",
        description: "Master the Team Dashboard feature in StaffViz, your go-to tool for overseeing and managing your workforce. Discover how to monitor performance, track progress, and access real-time data for enhanced productivity.",
        duration: "1:32"  // Video 4: Team Dashboard tutorial
    },
    {
        id: "SfM6Q4fVpkw",
        description: "Explore the Snapshots feature in StaffViz, the ultimate tool for capturing and analyzing key moments in employee activity. Learn to monitor productivity, review work sessions, and gain insights into your team's performance.",
        duration: "1:01"  // Video 5: Snapshots feature overview
    },
    {
        id: "yPyw-_2ngow",
        description: "Learn how to effectively navigate resource management in StaffViz, the leading solution for optimizing your workforce and maximizing productivity. Manage resources, allocate tasks, and monitor real-time progress to streamline operations and achieve business goals.",
        duration: "1:45"  // Video 6: Resource Management tutorial
    },
    {
        id: "hBcRVyK9Xgc",
        description: "Discover how to navigate the powerful monitoring features of StaffViz, the ultimate tool for enhancing employee productivity. Learn real-time tracking, generate insightful analytics, and customize reports to optimize workplace efficiency and performance.",
        duration: "2:06"  // Video 7: Monitoring features tutorial
    },
    {
        id: "yN1FqBflVHc",
        description: "In this tutorial, we'll walk you through the process of setting up company configurations in StaffViz. Learn how to customize settings, manage employee profiles, and optimize your workforce management system for maximum efficiency.",
        duration: "2:35"  // Video 8: Company configurations setup
    },
    {
        id: "mpyWIhMn124",
        description: "Welcome! In today’s video, we're diving into the step-by-step process of setting up your StaffViz account as an employee, ensuring a smooth onboarding experience and helping you access powerful workforce management features.",
        duration: "1:36"  // Video 9: Employee account setup
    },
    {
        id: "sYP0fyJF88Q",
        description: "In this video, we’re showing you how to make the most out of the StaffViz desktop application to streamline your task management and boost your productivity, helping you efficiently track progress and collaborate seamlessly.",
        duration: "2:42"  // Video 10: Desktop application tutorial
    },
    {
        id: "ctNjijLCEQE",
        description: "In this video, we provide a guide on creating and managing break scheduling in Staffviz. Efficiently managing breaks is crucial for productivity and employee well-being. Watch how to set up rules and manage schedules effectively.",
        duration: "1:51"  // Video 11: Break scheduling tutorial
    },
    {
        id: "zycUXcZFIJc",
        description: "Welcome to our comprehensive guide on defining and managing shifts using StaffViz! Whether you're a business owner, HR manager, or team lead, we'll show you how to set up, manage, and optimize shifts for productivity.",
        duration: "2:29"  // Video 12: Shift management tutorial
    },
    {
        id: "0z4EhtuGrrE",
        description: "Is your payment card about to expire? In this video, we'll guide you step-by-step on how to update your payment card details in 𝗦𝘁𝗮𝗳𝗳𝗩𝗶𝘇 to ensure uninterrupted access to all its powerful workforce management features!",
        duration: "1:19"  // Video 13: Payment card update tutorial
    },
    {
        id: "xTx9Ks4vq4k",
        description: "In this tutorial, we walk you through the process of defining user profiles and setting up permissions in StaffViz. Managing access rights and user roles is crucial for maintaining security and operations within your organization.",
        duration: "2:30"  // Video 14: User profiles and permissions setup
    },
    {
        id: "0NfPxgiGckc",
        description: "In this video, I'll walk you through manually filling out a timesheet in the StaffViz Desktop Application. This step-by-step guide helps you track hours for work, projects, or any activity quickly and accurately.",
        duration: "3:00"  // Video 15: Timesheet manual entry guide
    },
    {
        id: "sNVUTL0Na9I",
        description: "In this video, we’ll show you how to define and set up teams in StaffViz, your go-to platform for time tracking. Whether new or experienced, this tutorial helps you structure teams for optimal efficiency.",
        duration: "2:19"  // Video 16: Team setup guide
    },
    {
        id: "43fxNWiDGsQ",
        description: "Welcome to our StaffViz tutorial! In this video, we’ll show you how to add a new department in StaffViz. Whether you’re managing a growing team or organizing your structure, departments ensure accurate tracking and operations.",
        duration: "1:38"  // Video 17: Department setup tutorial
    },
    {
        id: "IJ9UhhpzDpE",
        description: "Unlock passive income by becoming a StaffViz Affiliate Partner! In this video, we show you simple steps to join the program and earn commissions promoting StaffViz, the ultimate time tracking tool for businesses.",
        duration: "2:48"  // Video 18: Affiliate program guide
    },
    {
        id: "TpEGtNMIBX0",
        description: "Discover how StaffViz is revolutionizing workforce management with advanced time tracking, real-time productivity insights, and seamless collaboration tools. Whether you're managing remote teams or optimizing in-office workflows, StaffViz simplifies operations and drives business success.",
        duration: "1:31"  // Video 19: Workforce management overview
    },
    {
        id: "xD0Sn823Pdo",
        description: "Unlock seamless efficiency and elevate productivity with StaffViz. Whether remote or in-office, ensure maximum accountability and performance through real-time insights. Manage projects in one unified dashboard, streamline workflows, and drive enhanced collaboration.",
        duration: "1:00"  // Video 20: Efficiency and productivity overview
    }
];


// Render video cards
const videoGrid = document.getElementById("videoGrid");

videoData.forEach(video => {
    videoGrid.innerHTML += `
        <div class="video-card" id="video-card-${video.id}" onclick="playVideo('${video.id}')">
            <div class="video-thumbnail">
                <img src="https://img.youtube.com/vi/${video.id}/hqdefault.jpg" alt="Thumbnail for video ${video.id}">
                <span class="video-duration" data-id="${video.id}">${video.duration}</span>
            </div>
            <div class="video-content">
                <div class="video-title" id="title-${video.id}">Loading...</div>
                <div class="video-description" id="description-${video.id}">${video.description}</div>
            </div>
        </div>
    `;
});

// Fetch video title dynamically from YouTube oEmbed API
videoData.forEach(video => {
    fetchVideoTitle(video.id); // Call function to fetch title dynamically
});

// Function to fetch video title from YouTube oEmbed API
function fetchVideoTitle(videoId) {
    console.log(`Fetching title for video ID: ${videoId}`);

    // Fetch video details from YouTube's oEmbed endpoint
    fetch(`https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=${videoId}&format=json`)
        .then(response => response.json())
        .then(data => {
            console.log(`Video title for ${videoId}:`, data.title);

            // Get video title from the response
            const title = data.title;
            const description = videoData.find(v => v.id === videoId).description;
            const duration = videoData.find(v => v.id === videoId).duration;

            // Update the DOM with the fetched data using querySelector
            setTimeout(() => {
                const videoCards = document.querySelectorAll(`#video-card-${videoId}`);
                videoCards.forEach(videoCard => {
                    const titleElement = videoCard.querySelector('.video-title');
                    const descriptionElement = videoCard.querySelector('.video-description');
                    const durationElement = videoCard.querySelector('.video-duration[data-id="'+ videoId +'"]');

                    // Make sure elements exist before updating them
                    if (titleElement) {
                        titleElement.innerText = title;
                    } else {
                        console.error(`Title element not found for video ID ${videoId}`);
                    }

                    if (descriptionElement) {
                        descriptionElement.innerText = description;
                    } else {
                        console.error(`Description element not found for video ID ${videoId}`);
                    }

                    if (durationElement) {
                        durationElement.innerText = duration;
                    } else {
                        console.error(`Duration element not found for video ID ${videoId}`);
                    }
                });
            }, 100); // 100ms delay to ensure elements are ready
        })
        .catch(error => {
            console.error(`Error fetching video title for ID ${videoId}:`, error);
        });
}

// Play video in lightbox
function playVideo(videoId) {
    const title = document.querySelector(`#title-${videoId}`).innerText; // Get the video title dynamically
    document.getElementById("videoModalLabel").innerText = title;
    document.getElementById("videoPlayer").innerHTML = `
        <iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>
    `;
    new bootstrap.Modal(document.getElementById("videoModal")).show();
}

// Close the modal and stop video playback
document.getElementById("videoModal").addEventListener("hidden.bs.modal", function () {
    document.getElementById("videoPlayer").innerHTML = "";
});


</script>




<script>
  // Client Companies Slider
  $(' .owl-carousel').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoHeight: true,
    responsive: {
      0: {
        items: 1,
        margin: 20,
      },
      768: {
        items: 3,
        margin: 40,
      },
      992: {
        items: 4,
        margin: 40,
      },
      1200: {
        items: 4,
        margin: 45,
      },
    }
  });
</script>

@endsection

@endsection