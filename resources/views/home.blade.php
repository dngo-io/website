@extends('layout.page')
@section('title', __('pages.title.Home'))
@section('content')
    <header id="home" class="header" style="background-image: linear-gradient(150deg, #fdfbfb 0%, #eee 100%);">
        <div class="container">
            <div class="row align-items-center h-100">

                <div class="col-lg-5">
                    <h1 class="display-4"><strong>{{ config('app.name') }}</strong></h1>
                    <p class="lead mt-5">The knowledge has always been an important additional tool for individuals to find themselves a better role in society during the history of humankind.</p>

                    <hr class="w-10 ml-0 my-7">

                    <p class="gap-xy">
                        <a class="btn btn-lg btn-round btn-success mw-200" href="#section-pricing">Books Project</a>
                        <a class="btn btn-lg btn-round btn-outline-success mw-200" href="#section-features">Organisation</a>
                    </p>
                </div>

                <div class="col-lg-6 ml-auto">
                    <div class="video-wrapper ratio-16x9 rounded shadow-6 mt-8 mt-lg-0">
                        <div class="poster" style="background-image: url({{ asset('assets/img/preview/shot-1.png') }})"></div>
                        <button class="btn btn-circle btn-lg btn-info"><i class="fa fa-play"></i></button>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3xXX_I33hwg?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <main class="main-content">

        <section id="section-features" class="section">
            <div class="container">
                <header class="section-header">
                    <small>The Core</small>
                    <h2>Values guiding and framing dNGO activities</h2>
                    <hr>
                </header>


                <div class="row gap-y align-items-center">
                    <div class="col-md-6 ml-auto">
                        <h4>Open Democracy</h4>
                        <p>Dngo encourages its members to take the floor to express their opinions, and by doing so to get involved in decision-making processes.</p>
                        <p>Furthermore, Dngo members will have the last word in deciding on strategy.</p>
                    </div>

                    <div class="col-md-5 order-md-first">
                        <img src="{{ asset('assets/img/vector/10.png') }}" alt="...">
                    </div>
                </div>


                <hr class="my-8">


                <div class="row gap-y align-items-center">
                    <div class="col-md-6 mr-auto">
                        <h4>Transparency</h4>
                        <p>Blokchain’s advanced features allow everyone to monitor every single transaction (of any kind) performed using dNGO. This includes the funds that we gather and also the earnings that the team generates.</p>
                    </div>

                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/vector/11.png') }}" alt="...">
                    </div>
                </div>


                <hr class="my-8">


                <div class="row gap-y align-items-center">
                    <div class="col-md-6 ml-auto">
                        <h4>Accountability</h4>
                        <p>As a result of transparency, the Dngo team will be held responsible for every interaction that they make. In order to ensure a “checks and balances” system, an independent body that we dub “advisory board” will be supervising us to evaluate our performance.</p>
                    </div>

                    <div class="col-md-5 order-md-first">
                        <img src="{{ asset('assets/img/vector/12.png') }}" alt="...">
                    </div>
                </div>


            </div>
        </section>

        <section class="section bb-1">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 mb-6 mb-md-0">
                        <img src="https://via.placeholder.com/800x600" alt="project image">
                    </div>


                    <div class="col-md-4">
                        <h5>Project detail</h5>

                        <p>Out or geared it but to best up samples the for she phase of copy would do in divine of taken and the take medical or upper at him in the logbook were, we price his mostly to commas.</p>

                        <ul class="project-detail mt-7">
                            <li>
                                <strong>Client</strong>
                                <span>DNGO</span>
                            </li>

                            <li>
                                <strong>Date</strong>
                                <span>June 27, 2019</span>
                            </li>

                            <li>
                                <strong>Skills</strong>
                                <span>Design, HTML, CSS, Javascript</span>
                            </li>

                            <li>
                                <strong>Address</strong>
                                <a href="#">dngo.io</a>
                            </li>

                            <li>
                                <strong>Share</strong>
                                <div class="social social-sm social-gray social-inline mt-2">
                                    <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                                    <a class="social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <section class="section bg-gray">
            <div class="container">
                <div class="row gap-y">

                    <div class="col-lg-4">
                        <div class="card card-body border text-center">
                            <p class="my-5"><i class="icon-layers lead-8 text-lighter"></i></p>
                            <h5>Channels</h5>
                            <p>Organize your team conversations in open channels. Make a channel for a project, a team, or everyone has a transparent view.</p>
                            <p><a class="small-3 fw-600" href="#">Read more <i class="fa fa-angle-right small-5 pl-1"></i></a></p>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card card-body border text-center">
                            <p class="my-5"><i class="icon-chat lead-8 text-lighter"></i></p>
                            <h5>Direct Messages</h5>
                            <p>Send messages directly to another and any person or to a small group of people for more focused conversations.</p>
                            <p><a class="small-3 fw-600" href="#">Read more <i class="fa fa-angle-right small-5 pl-1"></i></a></p>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card card-body border text-center">
                            <p class="my-5"><i class="icon-mic lead-8 text-lighter"></i></p>
                            <h5>Calls</h5>
                            <p>Take a conversation from typing to face-to-face by starting a TheSaaS voice or video call in any Channel or Direct Message.</p>
                            <p><a class="small-3 fw-600" href="#">Read more <i class="fa fa-angle-right small-5 pl-1"></i></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | CTA
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <section class="section text-center">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <p><img src="{{ asset('assets/img/vector/13.png') }}" alt="..."></p>
                        <br>
                        <h3 class="mb-6"><strong>Reclaim your workday</strong></h3>
                        <p class="lead text-muted">Less email. More productive. Our customers see an average 48.6% reduction in internal email, helping them enjoy a simpler, more pleasant, and more productive work life.</p>
                        <br>
                        <a class="btn btn-lg btn-round btn-success px-7" href="#">Start now</a>
                    </div>
                </div>

            </div>
        </section>


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Pricing
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <section id="section-pricing" class="section bg-gray">
            <div class="container">
                <header class="section-header">
                    <h2>Affordable Pricing</h2>
                    <hr>
                    <p class="lead">TheSaaS for Teams is a single workspace for your small- to medium-sized company or team.</p>
                </header>


                <div class="text-center my-7">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-round btn-outline-dark w-150 active">
                            <input type="radio" name="pricing" value="monthly" autocomplete="off" checked> Monthly
                        </label>
                        <label class="btn btn-round btn-outline-dark w-150">
                            <input type="radio" name="pricing" value="yearly" autocomplete="off"> Yearly
                        </label>
                    </div>
                </div>


                <div class="row gap-y text-center">

                    <div class="col-md-4">
                        <div class="pricing-1">
                            <p class="plan-name">Free</p>
                            <br>
                            <h2 class="price">free</h2>
                            <p class="small text-lighter">Forever!</p>

                            <div class="text-muted">
                                <small>Searchable messages up to 10K</small><br>
                                <small>10 apps or service integrations</small><br>
                                <small>5GB total file storage for the team</small><br>
                            </div>

                            <br>
                            <p class="text-center py-3">
                                <a class="btn btn-outline-primary" href="#">Get started</a>
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="pricing-1 popular">
                            <p class="plan-name">Standard</p>
                            <br>
                            <h2 class="price text-success">
                                <span class="price-unit">$</span>
                                <span data-bind-radio="pricing" data-monthly="6.67" data-yearly="75">6.67</span>
                            </h2>
                            <p class="small text-lighter">
                                Per user/
                                <span data-bind-radio="pricing" data-monthly="month" data-yearly="year">month</span>
                            </p>

                            <div class="text-muted">
                                <small>Unlimited searchable message archives</small><br>
                                <small>Unlimited apps and service integrations</small><br>
                                <small>10GB file storage per team member</small><br>
                            </div>

                            <br>
                            <p class="text-center py-3">
                                <a class="btn btn-success" href="#" data-bind-href="pricing" data-monthly="#monthly" data-yearly="#yearly">Get started</a>
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="pricing-1">
                            <p class="plan-name">Plus</p>
                            <br>
                            <h2 class="price">
                                <span class="price-unit">$</span>
                                <span data-bind-radio="pricing" data-monthly="12.5" data-yearly="120">12.5</span>
                            </h2>
                            <p class="small text-lighter">
                                Per user/
                                <span data-bind-radio="pricing" data-monthly="month" data-yearly="year">month</span>
                            </p>

                            <div class="text-muted">
                                <small>Everything in Free & Standard, and</small><br>
                                <small>SAML-based single sign-on (SSO)</small><br>
                                <small>Compliance Exports of all messages</small><br>
                            </div>

                            <br>
                            <p class="text-center py-3">
                                <a class="btn btn-outline-primary" href="#" data-bind-href="pricing" data-monthly="#monthly" data-yearly="#yearly">Get started</a>
                            </p>
                        </div>
                    </div>

                </div>


            </div>
        </section>


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Partner
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <section class="section bg-gray py-6">
            <div class="container">

                <div class="partner partner-sm">
                    <img src="{{ asset('assets/img/partner/1.png') }}" alt="partner 1">
                    <img src="{{ asset('assets/img/partner/2.png') }}" alt="partner 2">
                    <img src="{{ asset('assets/img/partner/3.png') }}" alt="partner 3">
                    <img src="{{ asset('assets/img/partner/4.png') }}" alt="partner 4">
                    <img src="{{ asset('assets/img/partner/5.png') }}" alt="partner 5">
                    <img src="{{ asset('assets/img/partner/6.png') }}" alt="partner 6">
                </div>

            </div>
        </section>


        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | FAQ
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <section id="section-faq" class="section">
            <div class="container">
                <header class="section-header">
                    <small>FAQ</small>
                    <h2>Frequently Asked Questions</h2>
                    <hr>
                    <p>Got a question? We've got answers. If you have some other questions, contact us using email.</p>
                </header>


                <div class="row gap-y">
                    <div class="col-md-6 col-xl-4">
                        <h5>Is this a secure site for purchases?</h5>
                        <p>Absolutely! We work with top payment companies which guarantees your safety and security. All billing information is stored on our payment processing partner which has the most stringent level of certification available in the payments industry.</p>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <h5>Can I cancel my subscription?</h5>
                        <p>You can cancel your subscription anytime in your account. Once the subscription is cancelled, you will not be charged next month. You will continue to have access to your account until your current subscription expires.</p>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <h5>How long are your contracts?</h5>
                        <p>Currently, we only offer monthly subscription. You can upgrade or cancel your monthly account at any time with no further obligation.</p>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <h5>Can I update my card details?</h5>
                        <p>Yes. Go to the billing section of your dashboard and update your payment information.</p>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <h5>Can I request refund?</h5>
                        <p>Unfortunately, not. We do not issue full or partial refunds for any reason.</p>
                    </div>


                    <div class="col-md-6 col-xl-4">
                        <h5>Can I try your service for free?</h5>
                        <p>Of course! We’re happy to offer a free plan to anyone who wants to try our service.</p>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection