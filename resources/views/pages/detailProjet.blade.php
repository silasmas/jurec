@extends("layouts.template")


@section("content")
@include("parties.banner")
@php
$titre=$projet->titre;
@endphp
<section class="blog blog-single white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <!-- ========================== -->
            <div class="col-lg-9">
                <div class="blog-entry mb-10">
                    <div class="entry-image clearfix">
                        {{-- @if(count($projet->couverture) >1) --}}
                        <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-items="1"
                            data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                            @forelse ($projet->couverture as $img)
                            <div class="item">
                                <img class="img-fluid" src="{{ asset('storage/'.$img) }}" alt="">
                            </div>

                            @empty

                            @endforelse
                        </div>
                        {{-- @else
                        <img class="img-fluid" src="{{ asset('storage/'.$projet->couverture[0]) }}" alt="">
                        @endif --}}
                    </div>
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="{{ route('detailProjet',['slug'=>$projet->slug]) }}">{{ $projet->titre}}</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li> <i class="fa fa-folder-open-o"></i>
                                    <a href="#">{{ $projet->categorie->nom}} </a>
                                </li>
                                <li><a href="#"><i class="fa fa-calendar-o"></i>{{ $projet->created_at->diffForHumans()
                                        }}</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{!! $projet->description !!} </p>
                        </div>
                    </div>
                </div>

                <div class="blog-entry entry-content mt-20 mb-30 post-1 clearfix">
                    <div class="entry-share clearfix">
                        <div class="tags">

                        </div>
                        @include('parties.partageRs')

                    </div>
                </div>
                <!-- ================================================ -->
                <div class="port-navigation clearfix">
                    @if($avant!=null)
                    <div class="port-navigation-left float-start">
                        <div class="tooltip-content-3" data-original-title="Previous Project" data-bs-toggle="tooltip"
                            data-placement="right">
                            <a href="{{ route('detailProjet',['slug'=>$avant->slug]) }}">
                                <div class="port-photo float-start">
                                    <img src="{{ asset('storage/'.$avant->couverture[0]) }}" alt="">
                                </div>
                                <div class="port-arrow">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    @endif
                    @if($apres!=null)
                    <div class="port-navigation-right float-end">
                        <div class="tooltip-content-3" data-original-title="Next Project" data-bs-toggle="tooltip"
                            data-placement="left">
                            <a href="{{ route('detailProjet',['slug'=>$apres->slug]) }}">
                                <div class="port-arrow float-start">
                                    <i class="fa fa-angle-right"></i>
                                </div>
                                <div class="port-photo">
                                    <img src="{{ asset('storage/'.$apres->couverture[0]) }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>

            </div>
            <!-- ================================================ -->

            @include('parties.righbarmenu')
        </div>
    </div>
</section>
@endsection
