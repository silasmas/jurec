@extends('layouts.template')
@section("style")
<style>
    .truncate-text {
    white-space: nowrap; /* Empêche le texte de passer à la ligne */
    overflow: hidden; /* Cache le texte qui dépasse */
    text-overflow: ellipsis; /* Ajoute "..." à la fin si le texte dépasse */
    max-width: 100%; /* Assure que le texte ne dépasse pas son conteneur */
}
.text-container {
      position: relative;
      max-width: 600px;
      line-height: 1.6;
      font-family: Arial, sans-serif;
    }

    .text-content {
      overflow: hidden;
      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 3; /* Nombre de lignes visibles */
      transition: all 0.3s ease-in-out;
    }

    .text-content.expanded {
      -webkit-line-clamp: unset; /* Annule la limitation des lignes */
      overflow: visible;
    }

    .read-more {
      cursor: pointer;
      color: blue;
      background: none;
      border: none;
      font-size: 1rem;
      margin-top: 5px;
      text-decoration: underline;
    }
</style>

@section('content')
    @include('parties.banner')


    <section class="page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid mx-auto" src="{{ asset('storage/' . $domaine->couverture[0]) }}" alt="">
                </div>
                <div class="col-lg-6 sm-mt-50 align-self-center">
                    <div class="section-title">
                        <h2 class="title">{{ $domaine->titre }} </h2>
                        <span class="badge bg-primary mt-30">
                            {{ $domaine->categorie->nom }}
                        </span>
                    </div>
                    <p> {!! $domaine->description !!} </p>
                    <div class="divider my-5"></div>
                    {{-- <div class="row">
                        <div class="col-lg-4 col-sm-4 sm-mb-30">
                            <div class="counter">
                                <span class="timer" data-to="4905" data-speed="3000">4905</span>
                                <label>Projects</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 sm-mb-30">
                            <div class="counter">
                                <span class="timer" data-to="975" data-speed="3000">975</span>
                                <label>Clients</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 xs-mb-30">
                            <div class="counter">
                                <span class="timer" data-to="8782" data-speed="3000">8782</span>
                                <label>Hours Work</label>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!--=================================
       Premium Features -->


    <!--=================================
      Work Process  -->

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
                                <h3 class="text-white">MONITORING</h3><br><br>
                                {{-- <h2 class="text-white">Modern website designers</h2> --}}
                                <p class="text-white text-content" id="textContent">
                                    @php
                                    $text="JUREC réalise le suivi des activités de l’Administration publique, du secteur
                                    privé et des partenaires au développement, afin de s’assurer de la légalité et la
                                    transparence des processus. Dans ce contexte, son travail est guidé par des analyses et
                                    enquêtes indépendantes.
                                    Comme sa mission l’indique, JUREC réalise un suivi rapproché de la situation des droits
                                    humains dans le cadre de la gestion et l’exploitation des ressources naturelles,
                                    spécifiquement pour les Communautés Locales et Peuples Autochtones riveraines des sites
                                    miniers et forestiers, ainsi que des aires protégées.
                                    JUREC suit également l’application et la mise en œuvre des accords multilatéraux sur
                                    l’environnement en RDC et mène des plaidoyers auprès des autorités compétentes pour une
                                    amélioration de la situation.";
                                    @endphp
                                    {{$text }}
                                </p>
                                <button class="button icon-color white" data-bs-toggle="modal" data-bs-target="#exampleModalMonitoring" > Voir plus<i class="fa fa-angle-right"></i></button>
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
                                <h3 class="text-white">FACILITATION DES PROCESSUS & EXECUTION DES PROJETS</h3>
                                <p class="text-white text-content" id="textContent">
                                    @php
                                    $text2="JUREC travaille pour accompagner les initiatives publiques et privées et autres
                                    projets (conception, planification, implémentation et suivi) en lien avec la protection
                                    de l’environnement et l’exploitation durable des ressources naturelles. L’Organisation
                                    facilite des processus, le rapportage et la modération des activités (atelier,
                                    conférence, forum, etc.) nationales qu’internationales.";
                                    @endphp
                                    {{ Str::limit($text2, 200, '...') }}
                                </p>
                                <button class="button icon-color white"  data-bs-toggle="modal" data-bs-target="#exampleModalFACILITATION"> Voir plus<i class="fa fa-angle-right"></i></button>
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
                                <h3 class="text-white">RENFORCEMENT DES CAPACITES</h3><br>
                                <p class="text-white">
                                    Le renforcement des capacités est l’un des services qu’offre JUREC dans le cadre de ses
                                    activités
                                </p>
                                {{-- <a class="button icon-color white" href="#"> Voir plus<i
                                        class="fa fa-angle-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--=================================
      Work Process -->



    <!--=================================
       our-blog  -->

    <section id="blog" class="our-blog page-section-ptb gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title text-center text-start">
                        <h2 class="title-effect">Nos services</h2>
                        <p>We are dedicated to providing you with the best experience possible.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($services as $domaine)
                    <div class="col-lg-4 col-md-6 col-sm-12 xs-mb-30 mb-10">
                        <div class="card border-0 black-bg o-hidden h-100">
                            <img class="img-fluid" src="{{ asset('storage/' . $domaine->couverture[0]) }}" alt="">
                            <div class="p-4">
                                <h4> <a href="{{ route('detailDomaine', ['slug' => $domaine->slug]) }}"
                                        class="text-white truncate-text">{{ Str::limit($domaine->titre, 50, '...') }}</a>
                                    <span class="badge bg-primary mt-30">
                                        {{ $domaine->categorie->nom }}
                                    </span>
                                </h4>
                                <p class="mb-0 pb-0 text-white truncate-text">{{ Str::limit($domaine->resume, 80, '...') }}.</p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
@endsection
