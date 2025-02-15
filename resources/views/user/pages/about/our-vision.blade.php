@extends('user.template.base')

@section('title')
<title>Ontoor Solutions: Our Visio Page</title>
@endsection

@section('styles')
@endsection

@section('content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h2><em>Our</em> <span>Vision</span></h2>
                            <p>
                                At Ontoor Solutions, our vision is to empower individuals and organisations through innovative IT solutions and comprehensive training programs. We aim to bridge the gap between technology and talent by providing cutting-edge tools and knowledge that foster growth and excellence. Our commitment is to create a community where aspiring developers can thrive, businesses can flourish, and the future of technology is shaped by creativity, expertise, and collaboration.                             
                            </p>

                            <p>
                                We envision a world where technology is not just a tool, but a catalyst for transformation. By harnessing the power of Oracle APEX, Oracle Database, and other advanced technologies, we strive to deliver solutions that drive efficiency, innovation, and success. Our training programs are designed to equip the next generation of IT professionals with the skills and confidence to tackle real-world challenges and lead the industry forward.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="{{ asset('assets/images/custom/our-vision.jpeg') }}" alt="our vision" style="width: 80%;">
                        </div>
                    </div>
                </div>

                <p style="text-align: center; padding:0% 15%;">Join us on this journey to redefine the future of IT, where every individual is empowered, every business is optimised, and every challenge is an opportunity for growth.</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection