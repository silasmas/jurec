<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bienvenue sur le site de JUREC</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <hr>
            </div>
            <div class="modal-body">
                <section class="blog blog-grid-3-column white-bg page-section-ptb mt-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-8">
                                <div class="text-center section-title">
                                    <h2 class="title-effect">ACtualités </h2>
                                    {{-- <p>Nous publions sur nos réalisations et nos articles</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                            <div class="owl-carousel" data-nav-dots="true" data-items="1" data-md-items="1"
                            data-autoheight="true" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="20">
                                @forelse ($articles as $p)
                                <div class="item">
                                    <div class="blog-entry mb-50">
                                        <div class="entry-image clearfix">
                                            @if(count($p->couverture) >1)
                                            <div class="owl-carousel bottom-center-dots" data-nav-dots="ture"
                                                data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1"
                                                data-xx-items="1">
                                                @forelse ($p->couverture as $img)
                                                <div class="item">
                                                    <img class="img-fluid" src="{{ asset('storage/'.$img) }}" alt="">
                                                </div>

                                                @empty

                                                @endforelse
                                            </div>
                                            @else
                                            <img class="img-fluid" src="{{ asset('storage/'.$p->couverture[0]) }}"
                                                alt="">
                                            @endif
                                        </div>
                                        <div class="blog-detail">
                                            <div class="entry-title mb-10">
                                                <a href="{{ route('detailBlog',['slug'=>$p->slug]) }}">{{ $p->titre }}</a>
                                            </div>
                                            <div class="entry-meta mb-10">
                                                <ul>
                                                    <li> <i class="fa fa-folder-open-o"></i>
                                                        <a href="#">{{ $p->domaine->nom}} </a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-calendar-o"></i>{{
                                                            $p->created_at->diffForHumans()
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
                                                    <a class="button arrow"
                                                        href="{{ route('detailBlog',['slug'=>$p->slug]) }}">Voir plus<i
                                                            class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                                @include('parties.partageRs')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse
                            </div>
                        </div>
                            {{-- <div class="col-lg-12">
                                <div class="text-center">
                                    <a type="button" class="button button-border icon mb-10 mr-10 mt-lg-5 mt-3"
                                        href="{{ route('publications') }}">
                                        Voir plus ... » </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </section>
                <hr>
                <p>Vous pouvez choisir de ne plus afficher ce message à l'avenir.</p>
                <!-- Option de désactivation -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="disable-popup">
                    <label class="form-check-label" for="disable-popup">
                        Ne plus afficher ce popup
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
