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
                                        <img id="logo_img" height="200" width="200"
                                            src="{{ asset('assets/images/3.png') }}" alt="logo">
                                    </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <div class="menu-bar">
                                <ul class="menu-links">
                                    <li><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">A propos</a>
                                    </li>
                                    <li><a href="{{ route('equipe') }}">Notre équipe</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Expertises
                                            <i class="fa fa-angle-down fa-indicator"></i>
                                        </a>
                                        <!-- drop down multilevel  -->
                                        <ul class="drop-down-multilevel">
                                            <li>
                                                <a href="{{ route('services') }}">Services <i
                                                        class="ti-plus fa-indicator"></i>
                                                </a>
                                                <!-- drop down second level -->
                                                <ul class="drop-down-multilevel">
                                                    <li><a href="">left sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('domaines') }}">Domaine d'activités
                                                    <i class="ti-plus fa-indicator"></i>
                                                </a>
                                                <!-- drop down second level -->
                                                <ul class="drop-down-multilevel">
                                                    <li><a href="blog-grid-2-column.html"> 2 column </a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('projets') }}">Nos projets</a>
                                    </li>
                                    <li><a href="{{ route('publications') }}">Nos publications</a>
                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact</a>
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
