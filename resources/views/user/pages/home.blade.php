@extends('user.template.base')

@section('title')
<title>Ontoor Solutions: Home Page</title>
@endsection

@section('styles')
<style>
    /* Animation for pulsing effect */
    .h-svg-icon {
      display: inline-block;
      animation: pulse 2s infinite;
      transition: transform 0.3s ease;
    }

    /* Keyframes for pulse animation */
    @keyframes pulse {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.1); /* Scale up the icon */
      }
      100% {
        transform: scale(1); /* Scale back to normal */
      }
    }

    /* Stop animation on hover */
    .h-svg-icon:hover {
      animation: none; /* Disable animation when hovering */
      transform: scale(1); /* Ensure the icon doesn't scale when hovered */
    }
  </style>
@endsection

@section('content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <h6>Welcome to Ontoor Solutions</h6>
              <h2>We <em>Transforming Ideas</em> <span>into</span> Code</h2>
              <!-- <p>Ontoor Solutions is a professional looking HTML template using a Bootstrap 5 (beta 2). This CSS template
                is free for you provided by <a rel="nofollow" href="https://templatemo.com/page/1"
                  target="_parent">TemplateMo</a>.
              </p> -->
              <!-- <form id="search" action="#" method="GET">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Your website URL..."
                    autocomplete="on" required>
                </fieldset>
                <fieldset>
                  <button type="submit" class="main-button">Analyze Site</button>
                </fieldset>
              </form> -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <img src="assets/images/banner-right-image.png" alt="team meeting">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="about" class="about-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <img src="assets/images/about-left-image.png" alt="person graphic">
        </div>
      </div>
      <div class="col-lg-8 align-self-center">
        <div class="services">
          <div class="row">
            <div class="col-lg-6">
              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="reporting">
                </div>
                <div class="right-text">
                  <h4>Development</h4>
                  <p>We provide our development services in Oracle APEX, Oracle Database and Oracle technologies</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <div class="right-text">
                  <h4>Migration</h4>
                  <p>We help our customers to migrating from legacy systems to modern technologies like Oracle APEX</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <div class="right-text">
                  <h4>Consulting</h4>
                  <p>We can consult to choose the technology and help to make strategy for start to finish.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                <div class="icon">
                  <img src="assets/images/service-icon-04.png" alt="">
                </div>
                <div class="right-text">
                  <h4>Open-Source</h4>
                  <p>Try out our OPEN-SOURCEE applications and plugins. They are backed with our constant support</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="services" class="our-services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="left-image">
          <img src="assets/images/services-left-image.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="section-heading">
          <h2>Grow your website with our <em>SEO</em> service &amp; <span>Project</span> Ideas</h2>
          <p>Space Dynamic HTML5 template is free to use for your website projects. However, you are not permitted to
            redistribute the template ZIP file on any CSS template collection websites. Please contact us for more
            information. Thank you for your kind cooperation.</p>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="first-bar progress-skill-bar">
              <h4>Website Analysis</h4>
              <span>84%</span>
              <div class="filled-bar"></div>
              <div class="full-bar"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="second-bar progress-skill-bar">
              <h4>SEO Reports</h4>
              <span>88%</span>
              <div class="filled-bar"></div>
              <div class="full-bar"></div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="third-bar progress-skill-bar">
              <h4>Page Optimizations</h4>
              <span>94%</span>
              <div class="filled-bar"></div>
              <div class="full-bar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="portfolio" class="our-portfolio section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h2>See Our <em>Secret</em> To <span>Success</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <span>
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="hidden-content">
              <h4>Exceptional Technical Expertise</h4>
              <p>Our team comprises highly skilled and knowledgeable professionals who are experts in the latest programming languages, tools, and technologies. We continually invest in our team’s growth to ensure they stay at the forefront of innovation.</p>
            </div>
            <div class="showed-content" style="padding-top: 40px;">
              <!-- <img src="assets/images/portfolio-image.png" alt=""> -->
              <span class="h-svg-icon h-icon__icon style-226-icon style-local-1491-c50-icon"><!--Icon by Font Awesome (https://fontawesome.com)-->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="code" viewBox="0 0 1920 1896.0833">
                  <path d="M617 1399l-50 50q-10 10-23 10t-23-10L55 983q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23t-10 23L224 960l393 393q10 10 10 23t-10 23zm591-1067L835 1623q-4 13-15.5 19.5T796 1645l-62-17q-13-4-19.5-15.5T712 1588l373-1291q4-13 15.5-19.5t23.5-2.5l62 17q13 4 19.5 15.5t2.5 24.5zm657 651l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23t-10 23z" fill="#03a4ed"></path>
                </svg>
              </span>
              <p>Exceptional Technical Expertise</p>
            </div>
          </div>
        </span>
      </div>
      <div class="col-lg-3 col-sm-6">
        <span>

          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="hidden-content">
              <h4>Effective Project Management</h4>
              <p>We follow proven project management methodologies, such as Agile and Scrum, to ensure that every project we undertake is executed efficiently and delivered on time and within budget. Clear communication with our clients is at the heart of our project success.</p>
            </div>
            <div class="showed-content" style="padding-top: 45px;">
              <!-- <img src="assets/images/portfolio-image.png" alt=""> -->
              <span class="h-svg-icon h-icon__icon style-226-icon style-local-1491-c54-icon"><!--Icon by Font Awesome (https://fontawesome.com)-->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="line-chart" viewBox="0 0 2048 1896.0833">
                  <path d="M2048 1536v128H0V128h128v1408h1920zM1920 288v435q0 21-19.5 29.5T1865 745l-121-121-633 633q-10 10-23 10t-23-10l-233-233-416 416-192-192 585-585q10-10 23-10t23 10l233 233 464-464-121-121q-16-16-7.5-35.5T1453 256h435q14 0 23 9t9 23z" fill="#03a4ed"></path>
                </svg>
              </span>
              <p>Effective Project Management</p>
            </div>
          </div>
        </span>
      </div>
      <div class="col-lg-3 col-sm-6">
        <span>
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="hidden-content">
              <h4>Quality Assurance and Testing </h4>
              <p>We have an unwavering commitment to delivering software of the highest quality. Rigorous testing processes, including automated testing, ensure that our solutions are reliable, secure, and free from bugs.</p>
            </div>
            <div class="showed-content" style="padding-top: 30px;">
              <!-- <img src="assets/images/portfolio-image.png" alt=""> -->
              <span class="h-svg-icon h-icon__icon style-226-icon style-local-1491-c58-icon"><!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="question-circle" viewBox="0 0 512 545.5">
                  <path d="M256 96c105.85 0 192 86.15 192 192s-86.15 192-192 192S64 393.85 64 288 150.15 96 256 96zm0 32c-88.555 0-160 71.445-160 160s71.445 160 160 160 160-71.445 160-160-71.445-160-160-160zm0 64c35.157 0 64 28.843 64 64 0 25.93-16.884 49.31-41.5 57.5l-6.5 2V336h-32v-20.5c0-13.702 8.96-26.164 22-30.5l6.5-2c11.64-3.873 19.5-14.722 19.5-27 0-17.866-14.134-32-32-32s-32 14.134-32 32h-32c0-35.157 28.843-64 64-64zm-16 160h32v32h-32v-32z" fill="#03a4ed"></path>
                </svg>
              </span>
              <p>Quality Assurance and Testing</p>
            </div>
          </div>
        </span>
      </div>
      <div class="col-lg-3 col-sm-6">
        <span>
          <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="hidden-content">
              <h4>Client-Centric Approach</h4>
              <p>Our clients are our top priority. We take the time to understand their unique needs, challenges, and objectives. By consistently delivering value, providing exceptional customer service, and addressing feedback promptly, we build lasting client relationships.</p>
            </div>
            <div class="showed-content" style="padding-top: 53px;"  >
              <!-- <img src="assets/images/portfolio-image.png" alt=""> -->
              <span class="h-svg-icon h-icon__icon style-226-icon style-local-1491-c62-icon"><!--Icon by Font Awesome (https://fontawesome.com)-->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="handshake-o" viewBox="0 0 2304 1896.0833">
                  <path d="M192 1152q40 0 56-32t0-64-56-32-56 32 0 64 56 32zm1473-58q-10-13-38.5-50t-41.5-54-38-49-42.5-53-40.5-47-45-49l-125 140q-83 94-208.5 92T880 926q-57-69-56.5-158T882 611l177-206q-22-11-51-16.5t-47.5-6-56.5.5-49 1q-92 0-158 66L539 608H384v544q5 0 21-.5t22 0 19.5 2 20.5 4.5 17.5 8.5T503 1180l297 292q115 111 227 111 78 0 125-47 57 20 112.5-8t72.5-85q74 6 127-44 20-18 36-45.5t14-50.5q10 10 43 10 43 0 77-21t49.5-53 12-71.5-30.5-73.5zm159 58h96V640h-93l-157-180q-66-76-169-76h-167q-89 0-146 67L979 694q-28 33-28 75t27 75q43 51 110 52t111-49l193-218q25-23 53.5-21.5t47 27 8.5 56.5q16 19 56 63t60 68q29 36 82.5 105.5t64.5 84.5q52 66 60 140zm288 0q40 0 56-32t0-64-56-32-56 32 0 64 56 32zm192-576v640q0 26-19 45t-45 19h-434q-27 65-82 106.5t-125 51.5q-33 48-80.5 81.5T1416 1565q-42 53-104.5 81.5T1183 1671q-60 34-126 39.5t-127.5-14-117-53.5-103.5-81l-287-282H64q-26 0-45-19t-19-45V544q0-26 19-45t45-19h421q14-14 47-48t47.5-48 44-40 50.5-37.5 51-25.5 62-19.5 68-5.5h117q99 0 181 56 82-56 181-56h167q35 0 67 6t56.5 14.5T1676 303t44.5 31 43 39.5 39 42 41 48T1885 512h355q26 0 45 19t19 45z" fill="#03a4ed"></path>
                </svg>
              </span>
              <p>Client-Centric Approach</p>
            </div>
          </div>
        </span>
      </div>
    </div>
  </div>
</div>

<div id="blog" class="our-blog section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
        <div class="section-heading">
          <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
        <div class="top-dec">
          <img src="assets/images/blog-dec.png" alt="">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
        <div class="left-image">
          <a href="#"><img src="assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
          <div class="info">
            <div class="inner-content">
              <ul>
                <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                <li><i class="fa fa-users"></i> TemplateMo</li>
                <li><i class="fa fa-folder"></i> Branding</li>
              </ul>
              <a href="#">
                <h4>SEO Agency &amp; Digital Marketing</h4>
              </a>
              <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore
                magna...</p>
              <div class="main-blue-button">
                <a href="#">Discover More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
        <div class="right-list">
          <ul>
            <li>
              <div class="left-content align-self-center">
                <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                <a href="#">
                  <h4>New Websites &amp; Backlinks</h4>
                </a>
                <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
              </div>
              <div class="right-image">
                <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
              </div>
            </li>
            <li>
              <div class="left-content align-self-center">
                <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                <a href="#">
                  <h4>SEO Analysis &amp; Content Ideas</h4>
                </a>
                <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
              </div>
              <div class="right-image">
                <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
              </div>
            </li>
            <li>
              <div class="left-content align-self-center">
                <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                <a href="#">
                  <h4>SEO Tips &amp; Digital Marketing</h4>
                </a>
                <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
              </div>
              <div class="right-image">
                <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="contact" class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <div class="section-heading">
          <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore
            et dolores</p>
          <div class="phone-info">
            <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="#">010-020-0340</a></span></h4>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email"
                  required="">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message"
                  required=""></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-button ">Send Message</button>
              </fieldset>
            </div>
          </div>
          <div class="contact-dec">
            <img src="assets/images/contact-decoration.png" alt="">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
@endsection