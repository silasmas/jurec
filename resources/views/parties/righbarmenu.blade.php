<div class="col-lg-3 ">

    {{-- <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Concernant nos projets</h6>
        <p>We are the <strong> webster </strong> dolor sit ametLorem Ipsum Proin gravida nibh vel velit
            auctor aliquet. Aenean sollicitudin, <br /> <br />
            Consequat ipsum, nec sagittis sem nibh id elit nibh vel velit auctor aliquet. sem nibh Aenean
            sollicitudin, </p>
    </div> --}}
    <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Nos projets </h6>

        @forelse ($recentProjets as $recent)
        <div class="recent-post clearfix">
            <div class="recent-post-image">
                <img class="img-fluid" src="{{ asset('storage/'.$recent->couverture[0]) }}" alt="">
            </div>
            <div class="recent-post-info">
                <a href="{{ route('detailProjet',['slug'=>$recent->slug]) }}">{{ $recent->titre }}</a>
                <span><i class="fa fa-calendar-o"></i>{{ $recent->created_at->diffForHumans() }}</span>
            </div>
        </div>
        @empty

        @endforelse
    </div>
    {{-- <div class="sidebar-widget clearfix">
        <h6 class="mt-40 mb-20">Archives</h6>
        <ul class="widget-categories">
            @forelse ($projets as $p)
            <li><a href="{{ route('detailProjet',['slug'=>$p->slug]) }}"><i class="fa fa-angle-double-right"></i> {{ $p->created_at->format("F Y") }}</a></li>
            @empty

            @endforelse
        </ul>
    </div> --}}
    {{-- <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Tags</h6>
        <div class="widget-tags">
            <ul>
                <li><a href="#">Bootstrap</a></li>
            </ul>
        </div>
    </div> --}}
    {{-- <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Quick contact</h6>
        <form class="gray-form">
            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputphone" placeholder="Email">
            </div>

            <div class="mb-3">
                <textarea class="form-control" rows="4" placeholder="message"></textarea>
            </div>
            <a class="button" href="#">Submit</a>
        </form>
    </div> --}}
    <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Galerie de projets</h6>
        <div class="widget-gallery popup-gallery clearfix">
            <ul>
                @forelse ($galerieProjet as $p)
                @forelse ($p->images as $pg)
                <li>
                    <a class="portfolio-img" href="{{ asset('storage/'.$pg) }}">
                        <img class="img-fluid" src="{{ asset('storage/'.$pg) }}" alt="">
                    </a>
                </li>

                @empty

                @endforelse
                @empty

                @endforelse

            </ul>
        </div>
    </div>
</div>

