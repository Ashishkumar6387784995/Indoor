@extends('user.template.base')

@section('title')
<title>Ontoor Solutions: About Us Page</title>
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
            transform: scale(1.1);
            /* Scale up the icon */
        }

        100% {
            transform: scale(1);
            /* Scale back to normal */
        }
    }

    /* Stop animation on hover */
    .h-svg-icon:hover {
        animation: none;
        /* Disable animation when hovering */
        transform: scale(1);
        /* Ensure the icon doesn't scale when hovered */
    }


    #core-value {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .title {
        text-align: center;
        background-color: #ddd;
        padding: 10px;
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    #core-value .grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    #core-value .grid-item {
        background: white;
        padding: 20px;
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease-out forwards;
    }

    /* Add a hover animation for grid items */
    #core-value .grid-item:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    #core-value .grid-item img {
        width: 50px;
        height: 50px;
        margin-bottom: 15px;
    }

    #core-value .grid-item h3 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    #core-value .grid-item p {
        font-size: 0.90rem;
        line-height: 1.3;
        color: #555;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        #core-value .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        #core-value .grid {
            grid-template-columns: 1fr;
        }
    }

    .grid .grid-item svg {
        width: 25%;
        vertical-align: middle;
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
                            <h2><em>About</em> <span>Us</span></h2>
                            <p>
                                Ontoor Solutions is a software development company that specializes in Oracle APEX, Oracle Database, and
                                Oracle technologies. We provide development, migration, and consulting services to help businesses
                                modernize their legacy systems and improve their operational efficiency. Our team of highly skilled
                                professionals is committed to delivering high-quality software solutions that meet our clients’ unique
                                needs and requirements.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('assets/images/custom/Ontoor-Logo.png') }}" alt="team meeting" style="width: 70%; padding-left: 20%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="core-value" class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="our-portfolio section" data-wow-duration="1s" data-wow-delay="0.5s" style="padding: 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 style="margin-bottom: 20px;"><em>Core</em> <span>Values</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid">
        <div class="grid-item">
            <span class="h-svg-icon h-icon__icon style-837-icon style-local-2637-c14-icon"><!--Icon by Font Awesome (https://fontawesome.com)-->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="search" viewBox="0 0 1672.2646 1896.0833">
                    <path d="M1152 832q0-185-131.5-316.5T704 384 387.5 515.5 256 832t131.5 316.5T704 1280t316.5-131.5T1152 832zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225T0 832t55.5-273.5 150-225 225-150T704 128t273.5 55.5 225 150 150 225T1408 832q0 220-124 399l343 343q37 37 37 90z" fill="#03a4ed"></path>
                </svg>
            </span>
            <h3>QUALITY</h3>
            <p>A commitment to delivering high-quality software solutions that meet or exceed customer expectations. This includes thorough testing, code reviews, and continuous improvement of development processes.</p>
        </div>

        <div class="grid-item">
            <span class="h-svg-icon h-icon__icon style-837-icon style-local-2637-c18-icon"><!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="lightbulb-o" viewBox="0 0 512 545.5">
                    <path d="M109 70.5l33.5 33.5-22.5 22.5L86.5 93zm294 0L425.5 93 392 126.5 369.5 104zm-147 10c78.95-.75 144 64.436 144 143.5 0 43.29-19.986 80.986-46.5 107.5-19.81 18.394-32 42.033-32 65.5v19H320v64h-36.5c-5.553 9.55-15.715 16-27.5 16s-21.947-6.45-27.5-16H192v-96c-3.24-17.87-12.705-35.39-28-48.5-35.727-30.368-57.17-77.527-50-129.5 8.977-64.628 60.63-117.062 125.5-124.5.174-.02.326.02.5 0 5.37-.652 10.736-.95 16-1zm0 32c-4.122.06-8.285.473-12.5 1-50.102 5.566-91 46.09-98 96.5-5.63 40.827 11.227 76.97 39.5 101 22.21 19.038 33.99 45.573 37.5 73h70c3.768-28.672 17.507-54.937 39-75l-.5-.5c21.486-21.486 37-50.99 37-84.5 0-61.776-50.164-112.378-112-111.5zM32 224h48v32H32v-32zm400 0h48v32h-48v-32zM120 353.5l22.5 22.5-33.5 33.5L86.5 387zm272 0l33.5 33.5-22.5 22.5-33.5-33.5zM224 416v32h64v-32h-64z" fill="#03a4ed"></path>
                </svg>
            </span>
            <h3>INNOVATION</h3>
            <p>Encouraging creative thinking, staying up-to-date with the latest technologies, and fostering a culture of innovation to solve complex problems and improve products.</p>
        </div>

        <div class="grid-item">
            <span class="h-svg-icon h-icon__icon style-837-icon style-local-2637-c22-icon"><!--Icon by Font Awesome (https://fontawesome.com)-->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="user-secret" viewBox="0 0 1536 1896.0833">
                    <path d="M576 1536l96-448-96-128-128-64zm256 0l128-640-128 64-96 128zM992 526q-2-4-4-6-10-8-96-8-70 0-167 19-7 2-21 2t-21-2q-97-19-167-19-86 0-96 8-2 2-4 6 2 18 4 27 2 3 7.5 6.5T435 570q2 4 7.5 20.5t7 20.5 7.5 17 8.5 17 9 14 12 13.5 14 9.5 17.5 8 20.5 4 24.5 2q36 0 59-12.5t32.5-30T669 619t11.5-29.5T698 577h12q11 0 17.5 12.5T739 619t14.5 34.5 32.5 30 59 12.5q13 0 24.5-2t20.5-4 17.5-8 14-9.5 12-13.5 9-14 8.5-17 7.5-17 7-20.5T973 570q2-7 7.5-10.5t7.5-6.5q2-9 4-27zm416 879q0 121-73 190t-194 69H267q-121 0-194-69T0 1405q0-61 4.5-118t19-125.5T61 1038t63.5-103.5T218 860l-90-220h214q-22-64-22-128 0-12 2-32-194-40-194-96 0-57 210-99 17-62 51.5-134T460 37q32-37 76-37 30 0 84 31t84 31 84-31 84-31q44 0 76 37 36 42 70.5 114t51.5 134q210 42 210 99 0 56-194 96 7 81-20 160h214l-82 225q63 33 107.5 96.5T1371 1105t29 151.5 8 148.5z" fill="#03a4ed"></path>
                </svg>
            </span>
            <h3>CUSTOMER-CENTRIC</h3>
            <p>Putting the customer at the center of all decisions and actions, striving to understand their needs, and delivering solutions that provide value and satisfaction.</p>
        </div>

        <div class="grid-item">
            <span class="h-svg-icon h-icon__icon style-837-icon style-local-2637-c26-icon"><!--Icon by Font Awesome (https://fontawesome.com)-->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="retweet" viewBox="0 0 1920 1896.0833">
                    <path d="M1280 1504q0 13-9.5 22.5t-22.5 9.5H288q-8 0-13.5-2t-9-7-5.5-8-3-11.5-1-11.5V896H64q-26 0-45-19T0 832q0-24 15-41l320-384q19-22 49-22t49 22l320 384q15 17 15 41 0 26-19 45t-45 19H512v384h576q16 0 25 11l160 192q7 10 7 21zm640-416q0 24-15 41l-320 384q-20 23-49 23t-49-23l-320-384q-15-17-15-41 0-26 19-45t45-19h192V640H832q-16 0-25-12L647 436q-7-9-7-20 0-13 9.5-22.5T672 384h960q8 0 13.5 2t9 7 5.5 8 3 11.5 1 11.5v600h192q26 0 45 19t19 45z" fill="#03a4ed"></path>
                </svg>
            </span>
            <h3>TEAMWORK</h3>
            <p>Promoting collaboration, communication, and mutual support among team members. Recognizing that great software is often the result of effective teamwork.</p>
        </div>

        <div class="grid-item">
            <span class="h-svg-icon h-icon__icon style-837-icon style-local-2637-c30-icon"><!--Icon by Font Awesome (https://fontawesome.com)-->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="paper-plane" viewBox="0 0 1792.0013 1896.0833">
                    <path d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-453-185-242 295q-18 23-49 23-13 0-22-4-19-7-30.5-23.5T640 1728v-349l864-1059-1069 925-395-162q-37-14-40-55-2-40 32-59L1696 9q15-9 32-9 20 0 36 11z" fill="#03a4ed"></path>
                </svg>
            </span>
            <h3>ADAPTABILITY</h3>
            <p>Embracing change and being flexible in response to evolving technologies, market dynamics, and customer requirements.</p>
        </div>

        <div class="grid-item">
            <span class="h-svg-icon h-icon__icon style-842-icon style-local-2637-c34-icon"><!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)--><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="gears" viewBox="0 0 512 545.5">
                    <path d="M344 72h32v22.5c13.256 2.334 25.375 7.58 36 15l15-15 22.5 22.5-15 15c7.42 10.625 12.666 22.744 15 36H472v32h-22.5c-2.357 13.388-7.46 25.802-15 36.5L450 253l-23.5 22-15-16c-10.494 7.212-22.48 12.208-35.5 14.5V296h-32v-22.5c-13.256-2.334-25.375-7.58-36-15l-16.5 17-23-23 17-16.5c-7.42-10.625-12.666-22.744-15-36H248v-32h22.5c2.292-13.02 7.288-25.006 14.5-35.5l-16-15L291 94l16.5 15.5c10.698-7.54 23.112-12.643 36.5-15V72zm16 53c-32.885 0-59 26.115-59 59s26.115 59 59 59 59-26.115 59-59-26.115-59-59-59zm-207.5 94.5l11.5 29c8.477-2.118 17.388-3.5 26.5-3.5 9.13 0 18.015 1.362 26.5 3.5l11.5-29 29.5 12-11.5 29c15.108 9.133 27.874 21.944 37 37l29-11.5 12 29.5-29 11.5c2.118 8.458 3.5 17.388 3.5 26.5s-1.382 18.023-3.5 26.5l29 11.5-12 29.5-29-11.5c-9.107 15.23-21.88 28.264-37 37.5l11.5 28.5-29.5 12L217 459c-8.458 2.138-17.388 3.5-26.5 3.5-9.166 0-17.972-1.345-26.5-3.5l-11.5 28.5-29.5-12 11.5-28.5c-15.37-9.23-28.246-22.145-37.5-37.5L68.5 421l-12-29.5L85 380c-2.138-8.477-3.5-17.388-3.5-26.5s1.362-18.042 3.5-26.5l-28.5-11.5 12-29.5L97 297.5c9.236-15.12 22.27-27.893 37.5-37l-11.5-29zm38 57.5c-42.605 0-77 33.895-77 76.5s34.395 77 77 77 76.5-34.395 76.5-77-33.895-76.5-76.5-76.5z" fill="#03a4ed"></path>
                </svg></span>
            <h3>AGILITY</h3>
            <p>Embracing agile methodologies or other flexible development approaches to respond quickly to changing project requirements and customer feedback.</p>
        </div>

        <div class="grid-item">
            <span class="h-svg-icon h-icon__icon style-846-icon style-local-2637-c38-icon"><!--Icon by Font Awesome (https://fontawesome.com)-->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="users" viewBox="0 0 1920 1896.0833">
                    <path d="M593 896q-162 5-265 128H194q-82 0-138-40.5T0 865q0-353 124-353 6 0 43.5 21t97.5 42.5T384 597q67 0 133-23-5 37-5 66 0 139 81 256zm1071 637q0 120-73 189.5t-194 69.5H523q-121 0-194-69.5T256 1533q0-53 3.5-103.5t14-109T300 1212t43-97.5 62-81 85.5-53.5T602 960q10 0 43 21.5t73 48 107 48 135 21.5 135-21.5 107-48 73-48 43-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zM640 256q0 106-75 181t-181 75-181-75-75-181 75-181T384 0t181 75 75 181zm704 384q0 159-112.5 271.5T960 1024 688.5 911.5 576 640t112.5-271.5T960 256t271.5 112.5T1344 640zm576 225q0 78-56 118.5t-138 40.5h-134q-103-123-265-128 81-117 81-256 0-29-5-66 66 23 133 23 59 0 119-21.5t97.5-42.5 43.5-21q124 0 124 353zm-128-609q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181z" fill="#03a4ed"></path>
                </svg>
            </span>
            <h3>COMMUNITY ENGAGEMENT</h3>
            <p>Actively participating in the software development community, contributing to open-source projects, and giving back to society through philanthropy or volunteer work.</p>
        </div>
        
        <div class="grid-item">
            <span class="h-svg-icon h-icon__icon style-850-icon style-local-2637-c42-icon"><!--Icon by Font Awesome (https://fontawesome.com)-->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="leaf" viewBox="0 0 1792 1896.0833">
                <path d="M1280 704q0-26-19-45t-45-19q-172 0-318 49.5t-259.5 134T403 1043q-19 21-19 45 0 26 19 45t45 19q24 0 45-19 27-24 74-71t67-66q137-124 268.5-176t313.5-52q26 0 45-19t19-45zm512-198q0 95-20 193-46 224-184.5 383T1230 1350q-214 108-438 108-148 0-286-47-15-5-88-42t-96-37q-16 0-39.5 32t-45 70-52.5 70-60 32q-43 0-63.5-17.5T16 1459q-2-4-6-11t-5.5-10-3-9.5T0 1415q0-35 31-73.5t68-65.5 68-56 31-48q0-4-14-38t-16-44q-9-51-9-104 0-115 43.5-220t119-184.5 170.5-139T696 347q55-18 145-25.5t179.5-9 178.5-6 163.5-24T1476 226l29.5-29.5 29.5-28 27-20 36.5-16 43.5-4.5q39 0 70.5 46t47.5 112 24 124 8 96z" fill="#03a4ed"></path>
                </svg>
            </span>
            <h3>SUSTAINABILITY</h3>
            <p>Considering the environmental and social impact of software development practices and striving for sustainability in processes and products.</p>
        </div>
    </div>
</div>



<div class="our-portfolio section" data-wow-duration="1s" data-wow-delay="0.5s" style="padding: 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2 style="margin-bottom: 20px;"><em>Meet</em> The <span>Team</span></h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
    <a href="https://www.linkedin.com/in/ashish-sahay-the-apexian/" target="_blank" h-use-smooth-scroll="true" class="image-link" rel="noopener">
        <img fetchpriority="high" decoding="async" width="1920" height="550px" src="https://ontoorsolutions.com/wp-content/uploads/2024/07/Teams-profile-1.png" class="wp-image-3864 style-1012-image style-local-2637-c51-image" alt="Team Pic">
    </a>
</div>
@endsection

@section('scripts')
@endsection