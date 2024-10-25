@extends("layouts.template")


@section("content")
@include("parties.banner")


<section class="blog white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                @forelse ($projets as $p)
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
                            <a href="{{ route('detailProjet',['slug'=>$p->slug]) }}">{{ $p->titre}}</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li> <i class="fa fa-folder-open-o"></i> 
                                    <a href="#">{{ $p->categorie->nom}} </a> </li>
                                <li><a href="#"><i class="fa fa-calendar-o"></i>{{ $p->created_at->diffForHumans() }}</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{{ $p->resume }} </p>
                        </div>
                        <div class="entry-button">
                            <a class="button arrow" href="{{ route('detailProjet',['slug'=>$p->slug]) }}">Voir plus<i class="fa fa-angle-right"
                                    aria-hidden="true"></i></a>
                        </div>
                        @include("parties.partageRs")
                        {{-- <div class="entry-share clearfix">
                            <div class="entry-button">
                                <a class="button arrow" href="#">Read More<i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="social list-style-none float-end">
                                <strong>Share : </strong>
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
                @empty

                @endforelse
                <hr>

                <!-- ================================================ -->
                {{-- <div class="entry-pagination mb-40">
                    <nav aria-label="Page navigation example text-center">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
            <!-- ================================================ -->
            @include('parties.righbarmenu')
            <!-- ================================= -->
        </div>
    </div>
</section>
<script>
    function whatsappShared(){
       var LinkTextToShare = 'https://wa.me/?text=' + encodeURIComponent(window.location.href) ;
       window.open(LinkTextToShare,"_blank");

   }
   function facebookShared(){
       var LinkTextToShare = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL) ;
       window.open(LinkTextToShare,"_blank");

   }
</script>
@endsection

