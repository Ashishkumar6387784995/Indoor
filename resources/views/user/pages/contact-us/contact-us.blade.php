@extends('user.template.base')

@section('title')
<title>Ontoor Solutions: Contact Us Page</title>
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
                            <h2><em>Get</em> In <span>Touch</span></h2>

                            <p>
                                Ready to transform your business with Oracle APEX and database solutions? Contact us today to learn how we can help you achieve your goals.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('assets/images/custom/customer-support.png') }}" alt="our vision" style="width: 70%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('user.include.contact');

@endsection

@section('scripts')
@endsection