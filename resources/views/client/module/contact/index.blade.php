@extends('client.layout.main')

@section('head')

@endsection

@section('content')
    <section class="sub-page-banner parallax" id="banner" style="background-position: 50% -646.5px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp"
                     style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                    <div class="page-banner text-center">
                        <h1 class="sub-banner-title">Contact</h1>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form skyblue ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft"
                     style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none; ">
                    <div class="section-heading">
                        <h2 class="heading-title-2 pb-20" style="color: #000;">Contact Us</h2>
                        <p class="heading-des" style="color: #000;">Our Help Center has resources for most questions.
                            Please feel free to use these articles to address your issues and questions. For more
                            information about potential site issues.</p>
                    </div>
                    <ul class="contact-detail">
                        <!-- <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:123456789">+91 123 456 789</a></li> -->
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <a class="links"
                                                                                 href="mailto:support@safecrypto.cc">support@safecrypto.cc</a>
                        </li>
                        <!-- <li><i class="fa fa-envelope" aria-hidden="true"></i> <a class="links" href="mailto:support@safecrypto.cc">contact@safecrypto.cc</a></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <a class="links" href="mailto:support@safecrypto.cc">press@safecrypto.cc</a></li> -->
                        <!-- <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Headley Ln, Dorking RH5 6DF, UK 7M7P+96 Leatherhead, United Kingdom</span></li> -->
                    </ul>
                </div>
                <div class="col-md-6 wow fadeInRight"
                     style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                    <h3 class="blog-comment-heading" style="color: #000;">Leave a message here</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name*" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email*" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject*" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone*" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Massage*" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection



