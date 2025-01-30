<div class="col-lg-3">

    {{-- <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">A savoir sur nos publications </h6>
        <p>We are the <strong> webster </strong> dolor sit ametthis exercise Proin gravida nibh vel velit
            auctor aliquet. Aenean sollicitudin, <br /> <br />
            Consequat ipsum, nec sagittis sem nibh id elit nibh vel velit auctor aliquet. sem nibh Aenean
            sollicitudin, </p>
    </div> --}}
    <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Publication recente</h6>
        @forelse ($recentArticles as $rc)
        <div class="recent-post clearfix">
            <div class="recent-post-image">
                <img class="img-fluid" src="{{ asset('storage/'.$rc->couverture[0]) }}" alt="">
            </div>
            <div class="recent-post-info">
                <a href="{{ route('detailBlog',['slug'=> $rc->slug]) }}">{{ $rc->titre }}</a>
                <span><i class="fa fa-calendar-o"></i>{{ $rc->created_at->diffForHumans() }}</span>
            </div>
        </div>
        @empty

        @endforelse
    </div>
    {{-- <div class="sidebar-widget clearfix">
        <h6 class="mt-40 mb-20">Archives</h6>
        <ul class="widget-categories">
            <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2021</a></li>
        </ul>
    </div> --}}

    <div class="sidebar-widget">
        <h6 class="mt-40 mb-20">Gallery des publications</h6>
        <div class="widget-gallery popup-gallery clearfix">
            <ul>
                @forelse ($galerieArticle as $f)
                @forelse ($f->images as $ff)
                <li>
                    <a class="portfolio-img" href="{{ asset('storage/'.$ff) }}">
                        <img class="img-fluid" src="{{ asset('storage/'.$ff) }}" alt="">
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
