@extends('client.layout.main')

@section('head')

@endsection

@section('content')
    <section class="sub-page-banner parallax" id="banner" style="background-position: 50% -731px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp"
                     style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                    <div class="page-banner text-center">
                        <h1 class="sub-banner-title">Roadmap</h1>
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Roadmap</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="roadmap-main skyblue ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="roadmap-main-graph">
                        <div class="roadmap-center-line"></div>
                        <div class="roadmap-chart">
                            <div class="roadmap-content-box">
                                <div class="roadmap-main-content">
                                    <div class="roadmap-small-round"></div>
                                    <div class="roadmap-animated wow fadeInLeft"
                                         style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                        <h2 class="roadmap-date">March 2016</h2>
                                        <p class="roadmap-box-detail">SafeCrypto was founded in March 2016 by Brian
                                            Armstrong, a former Airbnb engineer, and Fred Ehrsam, a former Goldman Sachs
                                            trader.Blockchain co-founder Ben Reeves was part of the original founding
                                            team but later parted ways with Armstrong due to their different stands on
                                            how the SafeCrypto wallet should operate. The remaining founding team
                                            enrolled in the Summer 2016 Y Combinator startup incubator program. In
                                            October 2016, the company launched the services to buy and sell bitcoins
                                            through bank transfers. In May 2013, the company received a US$5 million
                                            Series A investment led by Fred Wilson from the venture capital firm Union
                                            Square Ventures. In December the same year, the company received a US$25
                                            million investment, from the venture capital firms Andreessen Horowitz,
                                            Union Square Ventures (USV), and Ribbit Capital.</p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="roadmap-content-box">
                                <div class="roadmap-main-content">
                                    <div class="roadmap-small-round"></div>
                                    <div class="roadmap-animated wow fadeInRight"
                                         style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                        <h2 class="roadmap-date">2016-2017</h2>
                                        <p class="roadmap-box-detail">In 2016, the company grew to one million users,
                                            acquired the blockchain explorer service Blockr and the web bookmarking
                                            company Kippt, secured insurance covering the value of bitcoin stored on
                                            their servers, and launched the vault system for secure bitcoin storage.
                                            Throughout 2016, the company also partnered with Overstock, Dell, Expedia,
                                            Dish Network, and Time Inc. allowing those firms to accept bitcoin payments.
                                            The company also added bitcoin payment processing capabilities[when?] to the
                                            traditional payment companies Stripe, Braintree, and PayPal.In January 2016,
                                            SafeCrypto Global, Inc. was incorporated in Delaware as a holding company
                                            for SafeCrypto and its subsidiaries. The corporate reorganization that saw
                                            SafeCrypto become a subsidiary of SafeCrypto Global was completed in April
                                            that year.In January 2016, the company received a US$75 million investment,
                                            led by Draper Fisher Jurvetson, the New York Stock Exchange, USAA, and
                                            several banks. Later in January, the company launched a U.S.-based bitcoin
                                            exchange for professional traders called SafeCrypto Exchange. SafeCrypto
                                            began to offer services in Canada in 2016, but in July 2016, SafeCrypto
                                            announced it would halt services in August after the closure of their
                                            Canadian online payments service provider Vogogo.In May 2016, the company
                                            rebranded the SafeCrypto Exchange, changing the name to Global Digital Asset
                                            Exchange (GDAX). In July 2016, they added retail support for Ether.In
                                            January and then March 2017, SafeCrypto obtained the BitLicense and licensed
                                            to trade in Ethereum and Litecoin from the New York State Department of
                                            Financial Services (DFS). In November 2017, SafeCrypto was ordered by the US
                                            Internal Revenue Service to report any users who had at least $20,000 in
                                            transactions in a year.SafeCrypto listed Bitcoin Cash on December 19, 2017
                                            and the SafeCrypto platform experienced price abnormalities that led to an
                                            insider trading investigation.</p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="roadmap-content-box">
                                <div class="roadmap-main-content">
                                    <div class="roadmap-small-round"></div>
                                    <div class="roadmap-animated wow fadeInLeft"
                                         style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                        <h2 class="roadmap-date">2018-2021</h2>
                                        <p class="roadmap-box-detail">On February 23, 2018, SafeCrypto told
                                            approximately 13,000 affected customers that the company would be providing
                                            their taxpayer ID, name, birth date, address, and historical transaction
                                            records from 2013 to 2015 to the IRS within 21 days. On April 5, 2018,
                                            SafeCrypto announced that it had formed an early-stage venture fund,
                                            SafeCrypto Ventures, focusing on investment into blockchain- and
                                            cryptocurrency-related companies. On May 16, 2018, SafeCrypto Ventures
                                            announced its first investment in Compound Labs, a start-up building
                                            Ethereum smart contracts similar to money markets. Later that year in
                                            August, Amazon cloud executive Tim Wagner joined SafeCrypto as vice
                                            president of engineering.On May 23, 2018, GDAX was rebranded as SafeCrypto
                                            Pro.In January 2019, SafeCrypto stopped all trading on Ethereum Classic due
                                            to a suspicion of an attack on the network. In February 2019, SafeCrypto
                                            announced that it had acquired "blockchain intelligence platform" Neutrino,
                                            an Italy-based startup, for an undisclosed price. The acquisition raised
                                            concern among some SafeCrypto users based on Neutrino founders' connection
                                            to the Hacking Team, which has been accused of providing internet
                                            surveillance technology to governments with poor human rights records. On
                                            March 4, 2019, SafeCrypto CEO Brian Armstrong said his company "did not
                                            properly evaluate" the deal from a due diligence perspective and thus any
                                            Neutrino staff who previously worked at Hacking Team "will transition out of
                                            SafeCrypto." In April 2019, a UK corporate filing stated that SafeCrypto's
                                            non-U.S. revenue grew 20% to €153 million (U.S.$173 million) in 2018
                                            resulting in a net profit of €6.6 million. SafeCrypto UK CEO Zeeshan Feroz
                                            said the company's non-U.S. operations accounted for nearly one-third of the
                                            company's overall revenue and Reuters estimated that the company's global
                                            revenue totaled "around $520 million" in 2018. In August 2019, SafeCrypto
                                            announced that it was targeted by a sophisticated hacking attack attempt in
                                            mid-June. This reported attack used spear-phishing and social engineering
                                            tactics (including sending fake e-mails from compromised email accounts and
                                            created a landing page at the University of Cambridge) and two Firefox
                                            browser zero-day vulnerabilities. One of the Firefox vulnerabilities could
                                            allow an attacker to escalate privileges from JavaScript on a browser page
                                            (CVE-2019–11707) and the second one could allow the attacker to escape the
                                            browser sandbox and execute code on the host computer (CVE-2019–11708).
                                            SafeCrypto's security team detected and blocked the attack, the network was
                                            not compromised, and no cryptocurrency was stolen.In June 2020, SafeCrypto
                                            received internal backlash after CEO Brian Armstrong initially refused to
                                            make a statement about Black Lives Matter, citing the company's apolitical
                                            culture, but Armstrong later reverted his course on Twitter. In September
                                            2020, Armstrong published a blog post emphasizing that SafeCrypto would not
                                            engage in social activism, citing that such activism had hurt other
                                            technology firms such as Google and Facebook, and offered a severance
                                            package for those who disagreed with this direction. The company also faced
                                            complaints by employees saying they were treated unfairly due to their race
                                            or gender.The New York Times reported in December 2020 that based upon data
                                            up to 2018 (already two years old as of date of publication) women at
                                            SafeCrypto were paid an average of 8% less than men at comparable jobs and
                                            ranks within the company, and Black employees were paid 7% less than those
                                            in similar roles.In October 2020, SafeCrypto announced the launch of its
                                            Visa debit card program.In January 2021, SafeCrypto Global took a step
                                            towards an initial public offering and in late February of the same year the
                                            company filed to go public with the Securities and Exchange Commission.
                                            Later in March 2021. the company fell under review by the U.S Office of
                                            Foreign Assets Control, with concerns that the company may have provided
                                            their blockchain service to blacklisted individuals or companies, noting
                                            that the nature of blockchain technology makes it "technically infeasible"
                                            to prevent specific users from making transactions. The company agreed in
                                            March 2021 to pay $6.5 million to settle regulatory claims that it had
                                            reported misleading information about its trading volumes.</p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="roadmap-content-box">
                                <div class="roadmap-main-content">
                                    <div class="roadmap-small-round"></div>
                                    <div class="roadmap-animated wow fadeInRight animated" style="visibility: visible;">
                                        <h2 class="roadmap-date">2021</h2>
                                        <p class="roadmap-box-detail">Approximately 3 million verified users, 7,000
                                            institutions, and 115,000 ecosystem partners in over 100 countries trust
                                            SafeCrypto to easily and securely invest, spend, save, earn, and use
                                            crypto.</p>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                    <div class="main-roadmap">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="h-border wow fadeInLeft"
                                     style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="roadmap-slider owl-carousel owl-loaded owl-drag">


                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                             style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                            <div class="owl-item">
                                                <div class="roadmap wow fadeInLeft"
                                                     style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                                    <div class="roadmap-box text-center">
                                                        <div class="map-graphic">
                                                            <div class="small-round"><span></span></div>
                                                            <div class="v-row"></div>
                                                        </div>
                                                        <div class="roadmap-detail-box">
                                                            <div class="date-title">march 2018</div>
                                                            <p class="roadmap-des">Lorem Ipsum has been the industry's
                                                                standard dummy text </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="roadmap wow fadeInLeft"
                                                     style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                                    <div class="roadmap-box text-center">
                                                        <div class="map-graphic">
                                                            <div class="small-round"><span></span></div>
                                                            <div class="v-row"></div>
                                                        </div>
                                                        <div class="roadmap-detail-box">
                                                            <div class="date-title">April 2018</div>
                                                            <p class="roadmap-des">Lorem Ipsum has been the industry's
                                                                standard dummy text </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="roadmap wow fadeInLeft"
                                                     style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                                    <div class="roadmap-box text-center">
                                                        <div class="map-graphic">
                                                            <div class="small-round"><span></span></div>
                                                            <div class="v-row"></div>
                                                        </div>
                                                        <div class="roadmap-detail-box">
                                                            <div class="date-title">May 2018</div>
                                                            <p class="roadmap-des">Lorem Ipsum has been the industry's
                                                                standard dummy text </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item">
                                                <div class="roadmap wow fadeInLeft"
                                                     style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                                    <div class="roadmap-box text-center">
                                                        <div class="map-graphic">
                                                            <div class="small-round"><span></span></div>
                                                            <div class="v-row"></div>
                                                        </div>
                                                        <div class="roadmap-detail-box">
                                                            <div class="date-title">June 2018</div>
                                                            <p class="roadmap-des">Lorem Ipsum has been the industry's
                                                                standard dummy text </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled">
                                        <button type="button" role="presentation" class="owl-prev"><span
                                                    aria-label="Previous">‹</span></button>
                                        <button type="button" role="presentation" class="owl-next"><span
                                                    aria-label="Next">›</span></button>
                                    </div>
                                    <div class="owl-dots">
                                        <button role="button" class="owl-dot active"><span></span></button>
                                        <button role="button" class="owl-dot"><span></span></button>
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



