<header id="header" class="header fancy without-topbar text-dark">

    <!--=================================
 mega menu -->

    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- menu start -->
                    <nav id="menu" class="mega-menu">
                        <!-- menu list items container -->
                        <section class="menu-list-items">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="#">
                                        <img id="logo_img"
                                            src="{{ asset('storage/'.$setting?->site_logo) }}" alt="logo">
                                    </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <div class="menu-bar">
                                <ul class="menu-links">
                                    <li><a href="{{ route('home') }}" class="text-dark">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}" class="text-dark">A propos</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="text-dark">Nos thematiques
                                            <i class="fa fa-angle-down fa-indicator"></i>
                                        </a>
                                        <!-- drop down multilevel  -->
                                        <ul class="drop-down-multilevel">
                                            <li>
                                                <a href="{{ route('services') }}" >Services <i
                                                        class="ti-plus fa-indicator"></i>
                                                </a>
                                                <!-- drop down second level -->
                                                <ul class="drop-down-multilevel">
                                                    @forelse ($menuService as $s)
                                                    <li><a href="{{ route("detailService",['slug' => $s->slug]) }}">{{ $s->titre }}</a></li>
                                                    @empty

                                                    @endforelse
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('domaines') }}" >Domaines d'intervention
                                                    <i class="ti-plus fa-indicator"></i>
                                                </a>
                                                <!-- drop down second level -->
                                                <ul class="drop-down-multilevel">
                                                    @forelse ($menuDomaine as $s)
                                                    <li><a href="{{ route("detailDomaine",['slug' => $s->slug]) }}">{{ $s->titre }}</a></li>
                                                    @empty

                                                    @endforelse
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('projets') }}" class="text-dark">Nos projets</a>
                                    </li>
                                    <li><a href="{{ route('publications') }}" class="text-dark">Nos publications</a>
                                    </li>
                                    <li><a href="{{ route('contact') }}" class="text-dark">Contact</a>
                                    </li>
                                </ul>
                                {{-- <div class="search-cart">
                                    <div class="search">
                                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                                        <div class="search-box not-click">
                                            <form action="search.html" method="get">
                                                <input type="text" class="not-click form-control" name="search"
                                                    placeholder="Search.." value="">
                                                <button class="search-button" type="submit"> <i
                                                        class="fa fa-search not-click"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </section>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- menu end -->
</header>
