@extends("layouts.template")


@section("content")
@php
$titre="";
@endphp
<section class="rev-slider">
    <div id="rev_slider_272_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
        data-alias="webster-slider-6" data-source="gallery"
        style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
        <div id="rev_slider_272_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-764" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="{{ asset('assets/revolution/assets/slider-06/1A.jpg') }}" data-delay="7990"
                    data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                    data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/revolution/assets/slider-06/1A.jpg') }}" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                        data-no-retina>
                    <!-- LAYERS -->

                    <div class="tp-caption tp-resizeme" id="slide-765-layer-1" data-x="center" data-hoffset=""
                        data-y="center" data-voffset="10" data-width="['auto']" data-height="['auto']" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 100px; font-weight: 400; color: #0a0a0a; letter-spacing: 0px;font-family:Montserrat;">
                        La protection de <b>l’Environnement </b> et <br /> La gestion des ressources naturelles </div>

                    <!-- LAYER NR. 5 -->
                    <a class="tp-caption rev-btn tp-resizeme rev-button" href="{{ route('about') }}" target="_self"
                        id="slide-764-layer-25" data-x="795" data-y="340" data-width="['auto']" data-height="['auto']"
                        data-type="button" data-actions='' data-responsive_offset="on"
                        data-frames='[{"delay":2960,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(10,10,10);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[30,30,30,30]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[30,30,30,30]"
                        style="z-index: 9; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 700; color: rgba(255,255,255,1); font-family:Montserrat;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                        Qui sommes-nous </a>

                    <!-- LAYER NR. 6 -->
                    <a class="tp-caption tp-resizeme" href="{{ route('services') }}" target="_self"
                        id="slide-764-layer-26" data-x="979" data-y="340" data-width="['auto']" data-height="['auto']"
                        data-type="button" data-actions='' data-responsive_offset="on"
                        data-frames='[{"delay":3410,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(10,10,10);"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[10,10,10,10]"
                        data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[30,30,30,30]"
                        style="z-index: 10; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 700; color: #0a0a0a; font-family:Montserrat;text-transform:uppercase;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,1);border-style:solid;border-width:2px 2px 2px 2px;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                        Nos service </a>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-765" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="revolution/assets/slider-06/100x50_c81f3-ac32d-bg.jpg" data-delay="8000" data-rotate="0"
                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/revolution/assets/slider-06/c81f3-ac32d-bg.jpg') }}" alt=""
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                        data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption tp-resizeme" id="slide-765-layer-1" data-x="center" data-hoffset=""
                        data-y="center" data-voffset="10" data-width="['auto']" data-height="['auto']" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; white-space: nowrap; font-size: 90px; line-height: 100px; font-weight: 400; color: #0a0a0a; letter-spacing: 0px;font-family:Montserrat;">
                        Contribution à <b>l’émergence</b> du<br />Droit de <b>l’Environnement</b> </div>

                    <!-- LAYER NR. 19 -->
                    <a class="tp-caption rev-btn tp-resizeme rev-button" href="{{ route('about') }}" target="_self"
                        id="slide-765-layer-3" data-x="800" data-y="585" data-width="['auto']" data-height="['auto']"
                        data-type="button" data-actions='' data-responsive_offset="on"
                        data-frames='[{"delay":2220,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(10,10,10);bc:rgb(10,10,10);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[30,30,30,30]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[30,30,30,30]"
                        style="z-index: 6; white-space: nowrap; font-size: 12px; line-height: 22px; font-weight: 700; color: rgba(255,255,255,1); font-family:Montserrat;text-transform:uppercase;background-color:rgb(132,186,63);border-color:rgba(0,0,0,1);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                        A propos
                    </a>

                    <!-- LAYER NR. 20 -->
                    <a class="tp-caption tp-resizeme" href="{{ route('domaines') }}" target="_self"
                        id="slide-765-layer-4" data-x="970" data-y="585" data-width="['auto']" data-height="['auto']"
                        data-type="button" data-actions='' data-responsive_offset="on"
                        data-frames='[{"delay":2770,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":270,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(10,10,10);"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[30,30,30,30]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[30,30,30,30]"
                        style="z-index: 7; white-space: nowrap; font-size: 12px; line-height: 18px; font-weight: 700; color: #0a0a0a; font-family:Montserrat;text-transform:uppercase;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,1);border-style:solid;border-width:2px 2px 2px 2px;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
                        Domaines d'expertise </a>


                    <!-- LAYER NR. 21 -->
                    <div class="tp-caption tp-resizeme" id="slide-765-layer-5" data-x="" data-y=""
                        data-width="['none','none','none','none']" data-height="['none','none','none','none']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":100,"speed":3000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 8;"><img src="{{ asset('assets/revolution/assets/slider-06/17988-plan.png') }}"
                            alt="" data-ww="auto" data-hh="auto" data-no-retina> </div>

                    <!-- LAYER NR. 22 -->
                    <div class="tp-caption tp-resizeme" id="slide-765-layer-6" data-x="30" data-y="bottom"
                        data-voffset="-2" data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":280,"speed":3000,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 9;"><img src="{{ asset('assets/revolution/assets/slider-06/bb88b-plant.png') }}"
                            alt="" data-ww="483px" data-hh="518px" data-no-retina> </div>

                    <div class="tp-caption tp-resizeme" id="slide-765-layer-8" data-x="right" data-hoffset="10"
                        data-y="423" data-width="['none','none','none','none']"
                        data-height="['none','none','none','none']" data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":100,"speed":3000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 11;"><img
                            src="{{ asset('assets/revolution/assets/slider-06/bb88b-plant.png') }}" alt=""
                            data-ww="426px" data-hh="439px" data-no-retina> </div>

                    <!-- LAYER NR. 25 -->
                    <div class="tp-caption tp-resizeme" id="slide-765-layer-9" data-x="right" data-hoffset="-11"
                        data-y="" data-width="['none','none','none','none']" data-height="['none','none','none','none']"
                        data-type="image" data-responsive_offset="on"
                        data-frames='[{"delay":280,"speed":3000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 12;"><img src="{{ asset('assets/revolution/assets/slider-06/17988-plan.png') }}"
                            alt="" data-ww="598px" data-hh="324px" data-no-retina>
                    </div>
                </li>

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
        <h6 class="lacks-heading d-none">Lacks Heading</h6> <!-- lacks heading for w3c -->
    </div>
</section>

<!--=================================rev-slider -->


<!--=================================about- -->
<section class="page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="text-center section-title">
                    <h6>A propos</h6>
                    <h2 class="title-effect">C'est quoi JUREC ?</h2>
                    <p>cette rubrique vous présente qui sommes nous afin de mieux interagire avec nous.</p>
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
                    <h6>{{$about->titre}}</h6>
                    <h2 class="title-effect">Apprenez à mieux nous connaître.</h2>
                    <p>
                        {{$about->resume}}
                    </p>
                </div>
                <p> </p>
                {{-- <div class="row mt-30">
                    <div class="col-md-6">
                        <ul class="list list-unstyled list-hand">
                            <li> Award-winning design</li>
                            <li> Super Fast Customer support </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list list-unstyled list-hand">
                            <li> Easy to Customize pages</li>
                            <li> Powerful Performance </li>
                        </ul>
                    </div>
                </div> --}}
                <a class="button mt-0" href="{{ route('about') }}">En savoir plus</a>
            </div>
        </div>

    </div>
</section>

<section class="our-clients theme-bg text-white page-section-ptb position-relative">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-uppercase text-white mb-0 text-center">Nous offrons le meilleur service</h2>
            </div>
        </div>
    </div>
</section>

<!--=================================
   service -->

<section class="secrvice-blog pb-80">
    <div class="container">
        <div class="row">
            <div class="owl-carousel" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="3"
                data-xs-items="2" data-xx-items="1" data-space="20">
                @forelse ($menuService as $s)
                <div class="item">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                        <div class="card border-0  box-content o-hidden h-100">
                            <img class="img-fluid" src="{{ asset('storage/'.$s->couverture) }}" alt="">
                            <div class="p-4">
                                <h4 class="fw-5"><a href="{{ route('detailService',['slug'=> $s->slug]) }}"
                                        class="text-black">{{ $s->titre }}</a></h4>
                                <p class="mb-0 pb-0 text-black">
                                    {!! Str::limit($s->description, 100, '...') !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
            <div class="col-lg-12">
                <div class="text-center">
                    <a type="button" class="button button-border  icon mb-10 mr-10 mt-lg-5 mt-3"
                        href="{{ route('services') }}">
                        Voir plus ... » </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
   service -->
   <section class="page-section-ptb theme-bg text-white position-relative">
    <h6 class="lacks-heading d-none">Statistiques</h6> <!-- lacks heading for w3c -->
    <div class="container">
     <div class="row">
          <div class="col-lg-4 col-sm-6 sm-mb-30">
          <div class="counter left-icon text-white">
            <span class="icon ti-check-box theme-color" aria-hidden="true"></span>
            <span class="timer" data-to="49" data-speed="10000">49</span>
            <label>Projets realisés</label>
          </div>
        </div>
         <div class="col-lg-4 col-sm-6 sm-mb-30">
          <div class="counter left-icon text-white">
           <span class="icon ti-face-smile theme-color" aria-hidden="true"></span>
            <span class="timer" data-to="37" data-speed="10000">37</span>
            <label>Activités</label>
          </div>
        </div>
         <div class="col-lg-4 col-sm-6 xs-mb-30">
          <div class="counter left-icon text-white">
            <span class="icon ti-user theme-color" aria-hidden="true"></span>
            <span class="timer" data-to="500" data-speed="10000">500</span>
            <label>Personnes impactées</label>
          </div>
        </div>
         {{-- <div class="col-lg-3 col-sm-6">
          <div class="counter left-icon text-white">
            <span class="icon ti-face-smile theme-color" aria-hidden="true"></span>
            <span class="timer" data-to="3237" data-speed="10000">3237</span>
            <label>HAPPY CLIENTS</label>
          </div>
        </div> --}}
      </div>
  </div>
  </section>

<section class="page-section-ptb bg-overlay-black-80 jarallax" data-speed="0.6" data-img-src="assets/images/bg/06.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="text-center section-title">
                    <h6 class="text-white">Rien n'est plus important que des réalisations</h6>
                    <h2 class="text-white title-effect dark">Nos projets </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 position-relative">
                <p class="text-white lead">
                    Explorez nos projets passés et futurs, témoins de notre engagement envers l'innovation.
                </p>
                <p class="pt-20 text-white"> <span class="dropcap square dropcap-border">A</span>liquam provident,
                    apiente lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus sapiente vel aliquam
                    sequi eum, fugiat perspiciatis deleniti explicabo ea! Odio magni architecto ullam ea accusamus culpa
                    explicabo
                <div class="row mt-30">
                    <div class="col-sm-6 col-xs-6 col-xx-12">
                        <ul class="list list-unstyled list-hand">
                            <li class="text-white"> Award-winning design</li>
                            <li class="text-white"> Super Fast Customer support </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-xs-6 col-xx-12">
                        <ul class="list list-unstyled list-hand">
                            <li class="text-white"> Easy to Customize pages</li>
                            <li class="text-white"> Powerful Performance </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 sm-mt-30 position-relative">
                <video class="video" style="width: 100%;" poster="assets/video/video.jpg" preload="auto"
                    controls="controls">
                    <source src="assets/video/video.mp4" type="video/mp4">
                    <source src="assets/video/video.webm" type="video/webm">
                    <source src="assets/video/video.ogv" type="video/ogg">
                </video>
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
                                <li><a href="#"><i class="fa fa-calendar-o"></i>{{ $p->created_at->diffForHumans()
                                        }}</a></li>
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
            {{-- <div class="col-lg-4 col-md-4">
                <div class="blog-entry mb-50">
                    <div class="blog-entry-you-tube">
                        <div class="js-video [youtube, widescreen]">
                            <iframe src="https://www.youtube.com/embed/D2EvaSgi3UQ" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="#">Blogpost with Youtube Video </a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5
                                    </a> </li>
                                <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua consectetur, assumenda provident lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores
                                mollitia excepturi voluptatibus sequi.</p>
                        </div>
                        <div class="entry-share clearfix">
                            @include('parties.partageRs')
                        </div>
                    </div>
                </div>
            </div> --}}

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
@if(isset($recents) && count($recents) > 0)
@include("parties.recent")
@endif
@endsection
