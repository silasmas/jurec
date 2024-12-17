@extends("layouts.template")


@section("content")
@include("parties.banner")
<section class="page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="text-center section-title">
                    <h6>A propos</h6>
                    <h2 class="title-effect">C'est quoi JUREC ?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="who-we-are-left">
                    <div class="owl-carousel" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1"
                        data-xs-items="1" data-xx-items="1">
                        @forelse ($about->couverture as $ab)
                        <div class="item"><img class="img-fluid full-width"
                                src="{{ asset('storage/'.$ab) }}" alt="">
                        </div>
                        @empty

                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sm-mt-30">
                <div class="section-title">
                    <h6>Qui nous sommes et ce que nous faisons</h6>

                </div>
                <div class="row mt-30">
                    <div class="col-lg-12">
                        <div class="accordion plus-icon shadow">
                            <div class="acd-group acd-active">
                                <a href="#" class="acd-heading acd-active">01. Qui sommes-nous</a>
                                <div class="acd-des">
                                    <h2 class="title-effect">Apprenez à mieux nous connaître.</h2>
                                    <p>JUREC conseil est une organisation de droit congolais (RDC), spécialisée sur les
                                        questions
                                        juridiques de protection de l’environnement et la bonne gouvernance des
                                        ressources naturelles.
                                    </p>
                                </div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading">02. Notre vision</a>
                                <div class="acd-des">Adipisicing elit lorem ipsum dolor sit amet quibusdam similique
                                    quam corporis sequi, consectetur. Tempora, ab officiis ducimus commodi, id,
                                    voluptates suscipit quasi nisi. Qui, explicabo quod laborum alias vero aliquid.
                                </div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading">03. Notre mission</a>
                                <div class="acd-des">Tempora, ab officiis ducimus commodi quibusdam similique quam
                                    corporis sequi adipisicing elit lorem ipsum dolor sit amet, consectetur. id,
                                    voluptates suscipit quasi nisi. Qui, explicabo quod laborum alias vero aliquid.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section>
    <div class="container-fluid p-0">
        <div class="row no-gutter">
            <div class="col-lg-4 feature-step-2 bg-01 bg-overlay-black-50">
                <div class="clearfix">
                    <div class="feature-step-2-box">
                        <div class="feature-step-2-title-left">
                            <h1>01</h1>
                        </div>
                        <div class="feature-step-2-title-2-right">
                            <h3 class="text-white">MONITORING</h3>
                            {{-- <h2 class="text-white">Modern website designers</h2> --}}
                            <p class="text-white">
                                Suivi des activités de l’Administration, du Secteur privé et des Partenaires
                                (légalité, respect des droits des communautés locales etpeuples autochtones,
                                respect des normes environnementales, etc.)...</p>
                            <a class="button icon-color white" href="#"> Voir plus<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 feature-step-2 bg-02 bg-overlay-black-50">
                <div class="clearfix">
                    <div class="feature-step-2-box">
                        <div class="feature-step-2-title-left">
                            <h1>02</h1>
                        </div>
                        <div class="feature-step-2-title-2-right">
                            <h3 class="text-white">FACILITATION DES PROCESSUS</h3>
                            {{-- <h2 class="text-white">Modern website designers</h2> --}}
                            <p class="text-white">
                                Accompagnement des projets et autres initiatives, rapportage et modération des conférences,
                                 ateliers, forums, etc...
                            </p>
                            <a class="button icon-color white" href="#"> Voir plus<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 feature-step-2 bg-03 bg-overlay-black-50">
                <div class="clearfix">
                    <div class="feature-step-2-box">
                        <div class="feature-step-2-title-left">
                            <h1>03</h1>
                        </div>
                        <div class="feature-step-2-title-2-right">
                            <h3 class="text-white">RENFORCEMENT DES CAPACITES</h3>
                            {{-- <h2 class="text-white">Modern website designers</h2> --}}
                            <p class="text-white">
Le renforcement des capacités est l’un des services qu’offre JUREC dans le cadre de ses activités...
                            </p>
                            <a class="button icon-color white" href="#"> Voir plus<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================================
 Our History -->

<section class="our-history gray-bg page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title text-center">
                    <h6>Au commencement</h6>
                    <h2 class="title-effect">Notre histoire</h2>
                    <p>Pour la petite histoire sur JUREC</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="timeline-dots"></div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p class="theme-color">10 Dec 2011</p>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title text-muted">Quis neque Suspendisse in orci enim.</h5>

                            </div>
                            <div class="timeline-body">
                                <p>Dignissimos excepturi tempore iste, iusto sed sit delectus ratione laudantium,
                                    laboriosam quaerat eius odit explicabo necessitatibus, ipsum incidunt voluptas.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge">
                            <p class="theme-color">15 Jan 2014</p>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title text-muted">Proin gravida nibh vel velit auctor aliquet. </h5>
                            </div>
                            <div class="timeline-body">
                                <p>Iusto sed sit delectus ratione laudantium, laboriosam quaerat eius odit explicabo
                                    necessitatibus, ipsum incidunt voluptas dignissimos excepturi tempore iste. </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p class="theme-color">05 Jul 2017</p>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title text-muted">Fermentum feugiat velit mauris egestas quam</h5>
                            </div>
                            <div class="timeline-body">
                                <p>Incidunt voluptas dignissimos excepturi tempore iste iusto sed sit delectus ratione
                                    laudantium, laboriosam quaerat eius odit explicabo necessitatibus, ipsum. </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge">
                            <p class="theme-color">10 Aug 2016</p>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title text-muted">Aenean sollicitudin, lorem quis bibendum auctor
                                </h5>
                            </div>
                            <div class="timeline-body">
                                <p>Laboriosam quaerat eius odit explicabo necessitatibus, ipsum incidunt voluptas
                                    dignissimos excepturi tempore iste iusto sed sit delectus ratione laudantium.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p class="theme-color">22 May 2017</p>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title">Nullam ac urna eu felis dapibus condimentu</h5>
                            </div>
                            <div class="timeline-body">
                                <p>Voluptas dignissimos excepturi tempore iste iusto sed sit delectus ratione laudantium
                                    laboriosam quaerat eius odit explicabo necessitatibus, ipsum incidunt. </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-arrow"><i class="fa fa-chevron-down"></i></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=================================
   Our History -->

<!--=================================
Our Clients  -->

<section class="page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-title">
                    <h6 class="">Témoignages</h6>
                    <h2 class="title-effect">What Our Happy Clients say</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel" data-nav-arrow="false" data-nav-dots="true" data-items="1" data-lg-items="1"
                    data-md-items="1" data-sm-items="  1" data-xs-items="1">
                    <div class="item">
                        <div class="testimonial bottom_pos">
                            <div class="testimonial-avatar"> <img alt="" src="assets/images/team/01.jpg"> </div>
                            <div class="testimonial-info"> Excellent Customer support! These guys reply within minutes
                                sometimes and really help you with when you need them. The template itself is very
                                extended as well. Happy with my purchase!</div>
                            <div class="author-info"> <strong>15Twelve - <span>ThemeForest user</span></strong> </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial bottom_pos">
                            <div class="testimonial-avatar"> <img alt="" src="assets/images/team/02.jpg"> </div>
                            <div class="testimonial-info"> One of the most complete template here. Thanks a lot for such
                                great features, pages, shortcodes and home variations. Incredible Job. And the best of
                                all, great introductions</div>
                            <div class="author-info"> <strong>Xerracol - <span>ThemeForest user</span></strong> </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial bottom_pos">
                            <div class="testimonial-avatar"> <img alt="" src="assets/images/team/03.jpg"> </div>
                            <div class="testimonial-info"> This is a well put together template and the developer offers
                                great support. I've been in contact with them and the response was prompt and everything
                                has been taken care of.</div>
                            <div class="author-info"> <strong>Warble - <span>ThemeForest user</span></strong> </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 sm-mt-50">
                <div class="clients-list clients-border column-3">
                    <ul class="list-unstyled">
                        <li>
                            <img class="img-fluid mx-auto" src="assets/images/clients/01.png" alt="">
                        </li>
                        <li>
                            <img class="img-fluid mx-auto" src="assets/images/clients/02.png" alt="">
                        </li>
                        <li>
                            <img class="img-fluid mx-auto" src="assets/images/clients/03.png" alt="">
                        </li>
                        <li>
                            <img class="img-fluid mx-auto" src="assets/images/clients/04.png" alt="">
                        </li>
                        <li>
                            <img class="img-fluid mx-auto" src="assets/images/clients/05.png" alt="">
                        </li>
                        <li>
                            <img class="img-fluid mx-auto" src="assets/images/clients/06.png" alt="">
                        </li>

                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<!--=================================
   Our Clients -->


@endsection
