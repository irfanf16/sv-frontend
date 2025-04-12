@extends('theme.layouts.master')
@section("page-class", "index-page")
@section('css')
<style>
  @media(max-width: 767px) {
    .hero-head h1 {
      padding-bottom: 0;
    }

    .hero-text h3 {
      font-size: 18px;
      margin-bottom: 39px;
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
        <h1>Blogs</h1>
        <div class="col-lg-7 col-md-10 hero-text">
          <h3>Unlock Insights, Elevate Productivity: Dive into the StaffViz Blog</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog Banner -->

<!-- Blog Search -->
<section class="blog-search">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-11 search-bar">
        <div class="row">
          <div class="col-md-6 blogCategory-box">
            <select id="blogCategoryList" class="form-control">
              <option value="All">All</option>
            </select>
          </div>
          <div class="col-md-6">
            <div class="form-group d-flex align-items-center">
              <input type="text" class="form-control" id="blogSearch" placeholder="Search">
              <img src="{{asset('public/assets/img/search-icon.png')}}" alt="Search">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog Search -->

<!-- Blog Listing Section -->
<section class="blogList">
  <img id="blue-shadow" src="{{asset('public/assets/img/blue-shadoe.webp')}}" alt="Blue Shadows">
  <div class="container-fluid">
    <div class="box-1 mainBlog-box">
      <div class="featuredBlog">
        <div class="row justify-content-between">
          <div class="col-lg-7 col-md-6 img">
            <img src="{{asset('public/assets/img/time-tracking-important-detail-img.webp')}}" alt="time-tracking-important">
          </div>
          <div class="col-lg-5 col-md-6 text">
            <div class="d-flex align-items-center justify-content-between initial-info">
              <span>
                <img src="{{asset('public/assets/img/Alarm_on Icon.svg')}}" alt="Alarm_on Icon">
                10 min read
              </span>
              <span>Oct 30, 2024</span>
            </div>
            <h3>Why Time Tracking is Important: The Essential Role of Time Tracking <span>in Modern Organizations</span> </h3>
            <p>“Time is Money”, but in the corporate world—it’s everything. All the projects, tasks, goals, performance matrices, and everything you name revolves around a single core, The Time. So, it’s important to keep track of it,...</p>
            <a href="{{url('/blogs/why-time-tracking-is-important-essential-role-in-modern-organizations')}}" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 singleBlog">
          <div class="inner-singleBlog">
            <div class="img">
              <img src="{{asset('public/assets/img/understanding-quiet-quitting-detail-img.webp')}}" alt="understanding-quiet-blog">
            </div>
            <div class="text">
              <div class="d-flex align-items-center justify-content-between initial-info">
                <span>MICRO MANAGEMENT</span>
                <span>
                  <img src="{{asset('public/assets/img/Alarm_on Icon.svg')}}" alt="Alarm_on Icon">
                  10 min read
                </span>
              </div>
              <h6>Understanding Quiet Quitting: What it is and How to Address it?</h6>
              <a href="{{url('/blogs/what-is-quiet-quitting-and-how-to-address-it')}}" class="read-more">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 singleBlog">
          <div class="inner-singleBlog">
            <div class="img">
              <img src="{{asset('public/assets/img/avoid-micromanagement-detail-img.webp')}}" alt="avoid-micromanagment-blog">
            </div>
            <div class="text">
              <div class="d-flex align-items-center justify-content-between initial-info">
                <span>MICRO MANAGEMENT</span>
                <span>
                  <img src="{{asset('public/assets/img/Alarm_on Icon.svg')}}" alt="Alarm_on Icon">
                  10 min read
                </span>
              </div>
              <h6>How To Avoid Micromanagement Using Advanced Solutions</h6>
              <a href="{{url('blogs/how-to-avoid-micromanagement-using-advanced-solutions')}}" class="read-more">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 singleBlog">
          <div class="inner-singleBlog">
            <div class="img">
              <img src="{{asset('public/assets/img/hybrid-remote-work-detail-img.webp')}}" alt="hybrid-work-list-img">
            </div>
            <div class="text">
              <div class="d-flex align-items-center justify-content-between initial-info">
                <span>REMOTE WORKING</span>
                <span>
                  <img src="{{asset('public/assets/img/Alarm_on Icon.svg')}}" alt="Alarm_on Icon">
                  10 min read
                </span>
              </div>
              <h6>Hybrid or Remote Work: Which is Better?</h6>
              <a href="{{url('blogs/hybrid-or-remote-work-who-is-better')}}" class="read-more">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="box-2 mainBlog-box">
      <div class="featuredBlog">
        <div class="row justify-content-between">
          <div class="col-lg-7 col-md-6 img">
            <img src="{{asset('public/assets/img/staffviz-vs-hubstaff.webp')}}" alt="staffviz-vs-hubstaff">
          </div>
          <div class="col-lg-5 col-md-6 text">
            <div class="d-flex align-items-center justify-content-between initial-info">
              <span>
                <img src="{{asset('public/assets/img/Alarm_on Icon.svg')}}" alt="Alarm_on Icon">
                10 min read
              </span>
              <span>Oct 30, 2024</span>
            </div>
            <h3>StaffViz Vs. Hubstaff <br><span>A Comparative Analysis</span> </h3>
            <p>StaffViz and Hubstaff are both time-tracking and employee management tools with the same goal of making their resources more efficient and ...</p>
            <a href="{{url('/blogs/staffviz-vs-hubstaff-comparative-analysis')}}" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 singleBlog">
          <div class="inner-singleBlog">
            <div class="img">
              <img src="{{asset('public/assets/img/staffviz-vs-clockify.webp')}}" alt="staffviz-vs-clockify">
            </div>
            <div class="text">
              <div class="d-flex align-items-center justify-content-between initial-info">
                <span>COMPARISON </span>
                <span>
                  <img src="{{asset('public/assets/img/Alarm_on Icon.svg')}}" alt="Alarm_on Icon">
                  10 min read
                </span>
              </div>
              <h6>StaffViz vs Clockify <br> The Ultimate Showdown</h6>
              <a href="{{url('/blogs/staffviz-vs-clockify-ultimate-showdown')}}" class="read-more">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 singleBlog">
          <div class="inner-singleBlog">
            <div class="img">
              <img src="{{asset('public/assets/img/staffviz-vs-timedoctor.webp')}}" alt="staffviz-vs-timedoctor">
            </div>
            <div class="text">
              <div class="d-flex align-items-center justify-content-between initial-info">
                <span>COMPARISON </span>
                <span>
                  <img src="{{asset('public/assets/img/Alarm_on Icon.svg')}}" alt="Alarm_on Icon">
                  10 min read
                </span>
              </div>
              <h6>StaffViz Vs. Time Doctor <br>Compare and Contrast</h6>
              <a href="{{url('/blogs/staffviz-vs-time-doctor-compare-and-contrast')}}" class="read-more">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 singleBlog">
          <div class="inner-singleBlog">
            <div class="img">
              <img src="{{asset('public/assets/img/staffviz-vs-toggltrack.webp')}}" alt="staffviz-vs-toggltrack">
            </div>
            <div class="text">
              <div class="d-flex align-items-center justify-content-between initial-info">
                <span>COMPARISON </span>
                <span>
                  <img src="{{asset('public/assets/img/Alarm_on Icon.svg')}}" alt="Alarm_on Icon">
                  10 min read
                </span>
              </div>
              <h6>StaffViz Vs. Toggltrack<br>
                Which Time Tracking Tool is Right for You?</h6>
              <a href="{{url('/blogs/staffviz-vs-toggltrack-which-time-tracking-tool-is-right-for-you')}}" class="read-more">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog Listing Section -->


@section('js')
<script>
  $(document).ready(function() {
    // Search and filter blog entries based on user input
    $('#blogSearch').on('keyup', function() {
      let searchTerm = $(this).val().toLowerCase();
      let hasResults = false;

      $('.blogList .singleBlog, .blogList .featuredBlog').each(function() {
        let blogTitle = $(this).find('h3, h6').text().toLowerCase();
        let blogDescription = $(this).find('p').text().toLowerCase();

        if (blogTitle.includes(searchTerm) || blogDescription.includes(searchTerm)) {
          $(this).show();
          hasResults = true;
        } else {
          $(this).hide();
        }
      });

      if (!hasResults) {
        if ($('#noResults').length === 0) {
          $('<h1 id="noResults" style="text-align: center; padding: 20px;">No results found.</h1>').appendTo('.blogList');
        }
      } else {
        $('#noResults').remove();
      }
    });
  });
</script>
@endsection('ks')

@endsection