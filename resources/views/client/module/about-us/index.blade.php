@extends('client.layout.main')

@section('head')

@endsection

@section('content')
    <section class="sub-page-banner parallax" id="banner" style="background-position: 50% -1557.5px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-banner text-center">
                        <h1 class="sub-banner-title">About us</h1>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-main white ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 text-center flex-align justify-center order-r-2 wow fadeInLeft animated" style="visibility: visible;">
                    <div class="work-box w-100">
                        <div class="work-box-bg"></div>
                        <img src="/client/images/work-process.png" class="rotation-img" alt="Work Process">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 flex-align order-r-1 mb-r-30 wow fadeInRight" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                    <div class="work-box">
                        <h3 class="work-process-title pb-25">About SafeCrypto</h3>
                        <p class="work-des pb-20">We are building the cryptoeconomy – a more fair, accessible, efficient, and transparent financial system enabled by crypto.</p>

                        <ul class="check-list">
                            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>BE THE MOST TRUSTED</p></li>
                            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>3,000,000 + VERIFIED USERS</p></li>
                            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>BE THE EASIEST TO USE</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-main darkblue ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 flex-align mb-r-30 wow fadeInLeft animated" style="visibility: visible;">
                    <div class="work-box">
                        <h3 class="work-process-title pb-25">Our Mission</h3>
                        <p class="about-des pb-20">Our mission is to create an open financial system for the world</p>

                        <p class="work-des">An open financial financial system will provide better access to financial services for everyone, and enable economic freedom for every person and business. We filter all decisions through the question: "Will this make Coinbase the most trusted name in our space?" Trust is the sum of every customer interaction. It requires world-class security, compliance, technology, support, design, and more.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 text-center flex-align justify-center wow fadeInRight animated" style="visibility: visible;">
                    <div class="work-box">
                        <img src="/client/images/about-3.png" width=350px; alt="Work Process">

                        <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <iframe class="video-play" src="tt7gP_IW-1w.html" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-main darkblue ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 text-center flex-align justify-center order-r-2 wow fadeInLeft animated" style="visibility: visible;">
                    <div class="work-box">
                        <img src="/client/images/about-2.png" alt="Work Process">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 flex-align mb-r-30 order-r-1 wow fadeInRight animated" style="visibility: visible;">
                    <div class="work-box">
                        <h3 class="work-process-title pb-25">SafeCrypto powers the cryptoeconomy</h3>

                        <p class="work-des">We filter all decisions through the question: "Will this make XXXX the most trusted name in our space?" Trust is the sum of every customer interaction. It requires world-class security, compliance, technology, support, design, and more.<br>Our mission is to create an open financial system for the world. Want to join our mission? We saved you a seat.<br>Digital currency is a powerful technology — but its benefits are limited by how easy it is for people to use. We excel at making great products that bring the benefits of digital currency to everyone.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



