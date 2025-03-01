
<section class="text-white our-clients theme-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h6 class="lacks-heading d-none">Lacks Heading</h6> <!-- lacks heading for w3c -->
                <div class="owl-carousel" data-items="5" data-sm-items="4" data-xs-items="3" data-xx-items="2">
                    @forelse ($partenaires as $p)
                    <div class="item">
                        <img  class="mx-auto img-fluid"
                        src="{{ asset('storage/'.$p->logo) }}" alt="{{ $p->nom }}">
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer page-section-pt">
    <div class="container">
        <div class="footer-contact white-bg">
            <div class="row">
                <div class="col-lg-4 col-md-4 bottom-m3">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="ti-direction-alt"></i>
                        </div>
                        <div class="contact-info">
                            <div class="text-center">
                                <h5 class="mt-10 mb-10">4746, Avenue de la Gombe, Immeuble Prefed, 2e niveau-local 201</h5>
                                <span>en face de l'Ecole Belge de Kinshasa, Commune de la Gombe </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 bottom-m3">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="contact-info">
                            <div class="text-center">
                                <h5 class="mt-10 mb-10">{{ $setting?->support_phone }}</h5>
                                <span>Lundi-Vendredi 8h30'-16h30'</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="contact-box">
                        <div class="contact-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="contact-info">
                            <div class="text-center">
                                <h5 class="mt-10 mb-10">{{ $setting?->support_email}}</h5>
                                <span>Aux heures de service</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row top">
            <div class="col-lg-6 col-md-6">
                <img class="img-fluid" id="logo-footer" src="{{ asset('storage/'.$setting?->site_logo) }}"
                style="height:90px; width:350px" alt="">
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="social text-start sm-mt-0 text-md-end xs-mt-20">
                    <ul>
                        <li {{ setings($settings,"facebook")==""?'hidden':setings($settings,"facebook") }}>
                            <a href="{{setings($settings,"facebook") }}" target="blank"> <i class="fab fa-facebook"></i> </a>
                        </li>
                        <li {{ setings($settings,"x_twitter")==""?'hidden':setings($settings,"x_twitter") }}>
                            <a href="{{setings($settings,"x_twitter") }}" target="blank"> <i class="fab fa-x"></i> </a>
                        </li>
                        <li {{ setings($settings,"instagram")==""?'hidden':setings($settings,"instagram") }}>
                            <a href="{{setings($settings,"instagram") }}" target="blank"> <i class="fab fa-instagram"></i> </a>
                        </li>
                        <li {{ setings($settings,"youtube")==""?'hidden':setings($settings,"youtube") }}>
                            <a href="{{setings($settings,"youtube") }}" target="blank"> <i class="fab fa-youtube"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="divider mt-50 mb-50"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-5 sm-mt-30">
                <div class="about-content">
                    <h6 class="mb-20 text-uppercase">A propos</h6>
                    <p>
                        {{ $setting?->site_description }}
                    </p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 sm-mt-30 sm-mb-30">
                <h6 class="mb-20 text-uppercase">Raccourcis</h6>
                <div class="usefull-link">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <ul>
                                <li><a href="#">Accueil</a></li>
                                <li><a href="#">A propos</a></li>
                                <li><a href="#">Services</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <ul>
                                <li><a href="#">Domaines</a></li>
                                <li><a href="#">Projets</a></li>
                                <li><a href="#">Publications</a></li>
                            </ul>
                        </div>
                        {{-- <div class="col-lg-4 col-sm-4">
                            <ul>
                                <li><a href="#">Corporate Culture</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Client Management</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright gray-bg mt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="text-start">
                        {{-- <li class="list-inline-item"><a href="#">Conditions générales </a> &nbsp;&nbsp;&nbsp;|</li> --}}
                        <li class="list-inline-item">Designed by<a target="blank" href="https://silasmas.com"> Sdev </a> </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="text-start text-md-end xs-mt-15">
                        <p> &copy;Copyright <span id="copyright">
                                <script>
                                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                                </script>
                            </span> <a href="#"> JUREC </a> Tous droits reservés</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--=================================
footer -->

