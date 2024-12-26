@extends("layouts.template")

@section("style")
<style>
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
@endsection
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
                        <div class="item"><img class="img-fluid full-width" src="{{ asset('storage/'.$ab) }}" alt="">
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
                                    {{-- <h2 class="title-effect">Apprenez à mieux nous connaître.</h2> --}}
                                    <p>
                                        {!! $about->description !!}
                                    </p>
                                </div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading">02. Notre vision</a>
                                <div class="acd-des">
                                    La vision de <b>JUREC</b> est de créer dans un monde où l’environnement et
                                    les ressources naturelles sont gérés de façon durable, sans compromettre
                                    le respect des droits humains, spécifiquement les droits des Communautés
                                    Locales et Peuples Autochtones riveraines et de contribuer à
                                    la lutte contre la pauvreté en milieu rural.
                                </div>
                            </div>
                            <div class="acd-group">
                                <a href="#" class="acd-heading">03. Notre mission</a>
                                <div class="acd-des">
                                    La mission de <b>JUREC</b> consiste à contribuer à la dynamique
                                    de l’émergence du Droit de l’Environnement et offrir un accompagnement
                                    juridique et judiciaire aux Communautés Locales et Peuples Autochtones
                                    dans la gestion des ressources naturelles.
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
            <div class="col-lg-4 feature-step-2 bg-02 bg-overlay-black-50">
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

<section class="blog blog-grid-3-column white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="text-center section-title">
                        <h2 class="title-effect">Nos publications</h2>
                        <p>Nous publions sur nos réalisations et nos articles</p>
                    </div>
                </div>
            </div>
            @forelse ($articles as $p)
            <div class="col-lg-4 col-md-4">
                <div class="blog-entry mb-50">
                    <div class="entry-image clearfix">
                        @if(count($p->couverture) >1)
                        <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-items="1"
                            data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                            @forelse ($p->couverture as $img)
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('storage/'.$img) }}" alt="">
                            </div>

                            @empty

                            @endforelse
                        </div>
                        @else
                        <img class="img-fluid" src="{{ asset('storage/'.$p->couverture[0]) }}" alt="">
                        @endif
                    </div>
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="#">{{ $p->titre }}</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li> <i class="fa fa-folder-open-o"></i>
                                    <a href="#">{{ $p->domaine->nom}} </a>
                                </li>
                                <li><a href="#"><i class="fa fa-calendar-o"></i>{{
                                        $p->created_at->diffForHumans() }}</a></li>
                                <li>
                                    <a href="#" onclick="copyToClipboard('{{route('detailBlog',['slug'=>$p->slug])}}')"
                                        class="">
                                        <i class="fas fa-link"></i> Copier le lien
                                    </a>
                                </li>
                                @if($p->pdf!="" && $p->is_free==true)
                                <li><a href="#" name="{{ asset('storage/'.$p->pdf) }}" id="download-pdf"
                                        class="icon medium"><i class="fas fa-file-pdf"></i> Télécharger le
                                        PDF</a></li>

                                @endif
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>
                                {!! Str::limit($p->description, 100, '...') !!}
                            </p>
                        </div>
                        <div class="entry-share clearfix">
                            <div class="entry-button">
                                <a class="button arrow" href="{{ route('detailBlog',['slug'=>$p->slug]) }}">Voir plus<i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            {{-- @include('parties.partageRs') --}}
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse

            <div class="col-lg-12">
                <div class="text-center">
                    <a type="button" class="button button-border icon mb-10 mr-10 mt-lg-5 mt-3"
                        href="{{ route('publications') }}">
                        Voir plus ... » </a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
