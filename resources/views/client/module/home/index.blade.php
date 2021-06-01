@extends('client.layout.main')

@section('head')

@endsection

@section('content')

    <section class="home-banner " id="banner" style="background-position: 50% -2900px; background: url(client/images/bg/1.svg) no-repeat;  background-size: cover;"   >
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 position-u flex-align wow fadeInLeft" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                    <div class="banner-contain">
                        <h2 class="banner-heading">A trusted and secure crypto exchange backed up with blockchain technology</h2>
                        <p class="banner-des">SafeCrypto is the easiest place to buy and sell cryptocurrency.</p>
                        <a href="/en/sign-up" class="btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 position-u wow fadeInRight" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                    <div class="banner-img">
                        <img src="/client/images/banner-img.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-part white ptb-100" style="background: #fff; color: #000" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                    <div class="section-heading text-center pb-65">
                        <label class="sub-heading">Join SafeCrypto</label>
                        <h2 class="heading-title">Create your cryptocurrency portfolio today</h2>
                        <p class="heading-des">SafeCrypto has a variety of features that make it the best place to start trading</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center flex-align justify-center wow fadeInLeft animated" style="visibility: visible;">
                    <div class="work-box">
                        <div class="work-box-bg"></div>
                        <img src="/client/images/work-process.png" class="rotation-img" alt="Work Process">
                    </div>
                </div>
                <div class="col-md-6 flex-align wow fadeInRight animated" style="visibility: visible;">
                    <div class="work-box">
                        <h3 class="work-process-title pb-25">CRYPTOCURRENCY SPOT EXCHANGES</h3>
                        <p class="work-des pb-20">SafeCrypto ranks and scores exchanges based on traffic, liquidity, trading volumes, and confidence in the legitimacy of trading volumes reported</p>

                        <ul class="check-list">
                            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Lowest fees in market</p></li>
                            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Fast and secure transactions</p></li>
                            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>256-bit secure encryption</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-part skyblue bg-pattern pt-100 pb-10" style="background-color: #121d33;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp animated" style="visibility: visible;">
                    <div class="section-heading text-center pb-65">
                        <label class="sub-heading">SafeCrypto Feature</label>
                        <h2 class="heading-title">A Crypto Wallet <br> From the Future</h2>
                        <p class="heading-des">The easiest and most secure crypto wallet</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 wow fadeInUp pb-80 animated" style="visibility: visible;">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <img src="/client/images/feature-1.png" alt="Safe &amp; Secure">
                        </div>
                        <div class="feature-contain pt-25">
                            <a href="feature.html" class="feature-title pb-15">SEND & RECEIVE</a>
                            <p class="feature-des">Take full control of your tokens and collectibles by storing them on your own device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp pb-80 animated" style="visibility: visible;">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <a href="feature.html"><img src="/client/images/feature-2.png" alt="Early Bonus"></a>
                        </div>
                        <div class="feature-contain pt-25">
                            <a href="feature.html" class="feature-title pb-15">MANAGE YOUR PORTFOLIO</a>
                            <p class="feature-des">Buy and sell popular digital currencies, keep track of them in the one place.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp pb-80 animated" style="visibility: visible;">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <a href="feature.html"><img src="/client/images/feature-3.png" alt="Univarsal Access"></a>
                        </div>
                        <div class="feature-contain pt-25">
                            <a href="feature.html" class="feature-title pb-15">VAULT PROTECTION</a>
                            <p class="feature-des">For added security, store your funds in a vault with time delayed withdrawals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInUp pb-80 animated" style="visibility: visible;">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <a href="feature.html"><img src="/client/images/feature-4.png" alt="Secure Storage"></a>
                        </div>
                        <div class="feature-contain pt-25">
                            <a href="feature.html" class="feature-title pb-15">RECURRING BUYS</a>
                            <p class="feature-des">Invest in cryptocurrency slowly over time by scheduling buys daily, weekly, or monthly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="timeline darkblue ptb-100" style="background: #fff; color: #000">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp animated" style="visibility: visible;">
                    <div class="section-heading text-center pb-65">
                        <label class="sub-heading">roadmap</label>
                        <h2 class="heading-title">The Timeline</h2>
                        <p class="heading-des">We are building the cryptoeconomy – a more fair, accessible, efficient, and transparent financial system enabled by crypto.</p>
                    </div>
                </div>
            </div>
            <div class="main-roadmap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="h-border wow fadeInLeft animated" style="visibility: visible;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="roadmap-slider owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-690px, 0px, 0px); transition: all 0s ease 0s; width: 2300px;"><div class="owl-item cloned" style="width: 230px;"></div><div class="owl-item cloned" style="width: 230px;"><div class="roadmap wow fadeInLeft animated" style="visibility: visible;">
                                            <div class="roadmap-box text-center">
                                                <div class="date-title">May 2018</div>
                                                <div class="map-graphic">
                                                    <div class="small-round"><span></span></div>
                                                    <div class="v-row"></div>
                                                </div>
                                                <div class="roadmap-detail-box">
                                                    <p>Lorem Ipsum has been the industry's standard dummy text </p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 230px;"><div class="roadmap wow fadeInLeft animated" style="visibility: visible;">
                                            <div class="roadmap-box text-center">
                                                <div class="date-title">March 2016</div>
                                                <div class="map-graphic">
                                                    <div class="small-round"><span></span></div>
                                                    <div class="v-row"></div>
                                                </div>
                                                <div class="roadmap-detail-box">
                                                    <p>Founded in March 2016 by Brian Armstrong</p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 230px;"><div class="roadmap wow fadeInLeft animated" style="visibility: visible;">
                                            <div class="roadmap-box text-center">
                                                <div class="date-title">2016-2017</div>
                                                <div class="map-graphic">
                                                    <div class="small-round"><span></span></div>
                                                    <div class="v-row"></div>
                                                </div>
                                                <div class="roadmap-detail-box">
                                                    <p>The company grew to one million users</p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item active" style="width: 230px;"><div class="roadmap wow fadeInLeft animated" style="visibility: visible;">
                                            <div class="roadmap-box text-center">
                                                <div class="date-title">2018-2021</div>
                                                <div class="map-graphic">
                                                    <div class="small-round"><span></span></div>
                                                    <div class="v-row"></div>
                                                </div>
                                                <div class="roadmap-detail-box">
                                                    <p> Launch of its Visa debit card program.</p>
                                                </div>
                                            </div>
                                        </div></div><div class="owl-item" style="width: 230px;"><div class="roadmap wow fadeInLeft animated" style="visibility: visible;">
                                            <div class="roadmap-box text-center">
                                                <div class="date-title">2021</div>
                                                <div class="map-graphic">
                                                    <div class="small-round"><span></span></div>
                                                    <div class="v-row"></div>
                                                </div>
                                                <div class="roadmap-detail-box">
                                                    <p>Approximately 3 million verified users</p>
                                                </div>
                                            </div>
                                        </div></div></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ico-apps parallax-2 darkblue pt-100" style="background-position: 50% 559.8px; background-color: #121d33; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft flex-bottom order-r-2 animated" style="visibility: visible;">
                    <div class="ico-apps-img w-100 text-center">
                        <img src="/client/images/ico-img.png" alt="mobile apps">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight pb-100 order-r-1 animated" style="visibility: visible;">
                    <div class="section-heading pb-20">
                        <label class="sub-heading">Powerful Platform</label>
                        <h2 class="heading-title">Built on a robust and powerful platform</h2>
                        <p class="heading-des pb-20">Here are a few reasons why you should choose us!</p>

                        <ul class="check-list mb-30">
                            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Secure storage</p></li>
                            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Protected by insurance</p></li>
                            <li><span><i class="fa fa-check" aria-hidden="true"></i></span> <p>Industry best practices</p></li>
                        </ul>
                        <a href="/en/sign-up" class="btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-part skyblue pt-100" style=" background-color: rgba(18,29,51, .8);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp animated" style="visibility: visible;">
                    <div class="section-heading text-center pb-65">
                        <label class="sub-heading">Faqs</label>
                        <h2 class="heading-title">Frequently Asked questions</h2>
                        <p class="heading-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 wow fadeInUp animated" style="visibility: visible;">
                    <ul class="nav nav-tabs Frequently-tabs pb-55" id="myTab" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#general" role="tab">general</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#ico" role="tab">pre-ico &amp; ico</a>
                        </li>
                        <!-- <li>
                            <a data-toggle="tab" href="#Tokens" role="tab">Tokens</a>
                        </li> -->
                        <!-- <li>
                            <a data-toggle="tab" href="#client" role="tab">client</a>
                        </li> -->
                        <!-- <li>
                            <a data-toggle="tab" href="#legal" role="tab">legal</a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 wow fadeInUp animated" style="visibility: visible;">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="general" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What is blockchain technology?</a>
                                        <p class="qus-des pt-10">The Bitcoin Network is the first successful implementation of blockchain technology.
                                            The term "blockchain technology" typically refers to the transparent, trustless, publicly accessible ledger that allows us to securely transfer the ownership of units of value using public key encryption and proof of work methods.

                                            The technology uses decentralized consensus to maintain the network, which means it is not centrally controlled by a bank, corporation, or government. In fact, the larger the network grows and becomes increasingly decentralized, the more secure it becomes.

                                            The potential for blockchain technology is not limited to bitcoin. As such, it has gained a lot of attention in a variety of industries including: financial services, charities and nonprofits, the arts, and e-commerce.

                                            To learn more about the inner-workings of the Bitcoin Network, check out this article. </p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">Your Wallet & Its Master Seed</a>
                                        <p class="qus-des pt-10">Our wallet is built on an HD (or hierarchical deterministic) framework, which is the industry standard for bitcoin address generation and management. Each public address your wallet generates stems from your wallet's xPub (or Extended Public Key). Once your public address receives an incoming payment, a new address will automatically be generated and display when you click on receive.

                                            If you use the same address each time you receive funds, it becomes easy for anyone to track your entire payment history. This method of address generation improves privacy by automatically presenting you with a new address when you’re expecting payment.

                                            Advanced Users: Our wallet implements BIP44 to generate accounts and addresses, and the recovery mnemonic/seed (present in legacy wallets created in 2016 and prior) implements BIP39. The seed is compatible with other BIP44/BIP39 bitcoin wallets.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What is Bitcoin?</a>
                                        <p class="qus-des pt-10">Bitcoin can often refer to two things. First, the Bitcoin network that keeps track of our transactions and balances, and second, the currency that we use as the unit of value when we transact. We'll cover both here.

                                            The Bitcoin Network

                                            Bitcoin's payment network (also called the bitcoin blockchain) is what makes it possible for us to transact with one another. The network uses distributed consensus to verify and confirm transactions, and consensus is reached via a large global network of high-performance computers (called miners) running the bitcoin software.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">Who created Bitcoin?</a>
                                        <p class="qus-des pt-10">Bitcoin’s existence began with an academic paper written in 2008 by a developer under the name of Satoshi Nakamoto.

                                            The paper described the foundation for what was intended to be a peer-to-peer electronic cash system that was secure, affordable, and efficient far beyond conventional banking standards. The system Satoshi described was developed into open-source software and the first bitcoin transaction (also known as the Genesis Block) was confirmed on January 3, 2009. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ico" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">Public and private keys</a>
                                        <p class="qus-des pt-10">Bitcoin, as well as all other major cryptocurrencies that came after it, is built upon public-key cryptography, a cryptographic system that uses pairs of keys: public keys, which are publicly known and essential for identification, and private keys, which are kept secret and are used for authentication and encryption.

                                            Major cryptocurrencies like Bitcoin, Ethereum, and Bitcoin Cash function using three fundamental pieces of information: the address, associated with a balance and used for sending and receiving funds, and the address’ corresponding public and private keys. The generation of a bitcoin address begins with the generation of a private key. From there, its corresponding public key can be derived using a known algorithm. The address, which can then be used in transactions, is a shorter, representative form of the public key.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What is an ERC20 token?</a>
                                        <p class="qus-des pt-10">An ERC20 token is a blockchain-based asset with similar functionality to bitcoin, ether, and bitcoin cash: it can hold value and be sent and received.
                                            The major difference between ERC20 tokens and other cryptocurrencies is that ERC20 tokens are created and hosted on the Ethereum blockchain, whereas bitcoin and bitcoin cash are the native currencies of their respective blockchains.
                                            ERC20 tokens are stored and sent using ethereum addresses and transactions, and use gas to cover transaction fees.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What is Ethereum?</a>
                                        <p class="qus-des pt-10">Ethereum is a distributed public blockchain network that focuses on running the programming code of any decentralized application. More simply, it is a platform for sharing information across the globe that cannot be manipulated or changed.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Tokens" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What is Ico Crypto?</a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="client" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">How can I participate in the ICO Token sale?</a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">How do I benefit from the ICO Token?</a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What is Ico Crypto?</a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="legal" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What cryptocurrencies can I use to purchase? </a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">How do I benefit from the ICO Token?</a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 pb-65">
                                    <div class="faq-tab">
                                        <a href="faq.html" class="qus-title">What is Ico Crypto?</a>
                                        <p class="qus-des pt-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. remaining essentially unchanged.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



