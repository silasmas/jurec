@extends("layouts.template")


@section("content")
@include("parties.banner")


<!--=================================
  page-title -->


<!--=================================
  timeline -->

<section class="white-bg blog timeline-sidebar page-section-ptb">
    <div class="container">
        <div class="row">
            @include('parties.leftbarmenu')
            <div class="col-lg-9">
                <ul class="timeline">
                    @forelse ($articles as $a)
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">{{ $a->created_at->format('d') }} <span>{{ $a->created_at->format('M') }} </span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="entry-image clearfix">
                                    <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-items="1"
                                        data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                                        @forelse($a->couverture as $value)
                                        <div class="item">
                                            <img class="img-fluid" src="{{ asset('storage/'.$value) }}" alt="">
                                        </div>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="{{ route('detailBlog',['slug'=> $a->slug]) }}">{{ $a->titre }}</a>
                                        <span class="badge bg-primary">{{ $a->domaine->nom }}</span>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fa fa-folder-open-o"></i>
                                                <a href="#">{{ $a->domaine->nom}} </a> </li>
                                            <li><a href="#"><i class="fa fa-calendar-o"></i>{{ $a->created_at->diffForHumans() }}</a></li>
                                            @if($a->pdf!="" && $a->is_free==true)
                                            <li><a href="#" name="{{ asset('storage/'.$a->pdf) }}" id="download-pdf" class="button black icon medium"><i class="fas fa-file-pdf"></i> Télécharger le PDF</a></li>

                                            @endif
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>{!! $a->description !!}</p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        <div class="entry-button">
                                            <a class="button arrow" href="{{ route('detailBlog',['slug'=>$a->slug]) }}">Voir plus<i class="fa fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @empty

                    @endforelse

                    <li class="entry-date-bottom"> <a href="#">Load more...</a></li>
                    <!-- =========================================== -->
                    <li class="clearfix timeline-inverted" style="float: none;"></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
  timeline -->


<!--=================================
  action box- -->



@endsection
