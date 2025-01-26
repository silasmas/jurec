@extends("layouts.template")


@section("content")
@include("parties.banner")
<!--=================================
 service-->

<section class="service white-bg page-section-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    {{-- <h6>Nous sommes spécialiser à </h6> --}}
                    <h2 class="title">Nos Services</h2>
                    {{-- <p>Nous ferons tout notre possible pour réaliser notre prochain meilleur projet !</p> --}}
                </div>
            </div>

        </div>
        <!-- ============================================ -->
        <div class="service-3">
            <div class="row">
                @forelse ($menuService as $ser)
                @if ($loop->index%2==0)
                <div class="col-lg-6 col-md-6 position-relative">
                    <div class="service-blog text-end">
                        <h3 class="theme-color"> <a href="{{ route("detailService",['slug' => $ser->slug]) }}">{{ $ser->titre }}</a> </h3>
                        {{-- <p>{{ $ser->description }}</p> --}}
                        <b>{{ ++$loop->index }}</b>
                        <ul class="list list-unstyled">
                            <li>{!! Str::limit($ser->description, 300, '...') !!}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 xs-mt-30 xs-mb-30">
                    <img class="img-fluid full-width" src="{{ asset('storage/'.$ser->couverture ) }}" alt="">
                </div>
                @else
                <div class="col-lg-6 col-md-6 position-relative">
                    <img class="img-fluid full-width" src="{{ asset('storage/'.$ser->couverture ) }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 xs-mt-30 xs-mb-30 position-relative">
                    <div class="service-blog left text-start">
                        <h3 class="theme-color"> <a href="{{ route("detailService",['slug' => $ser->slug]) }}">{{ $ser->titre }}</a> </h3>
                        {{-- <p>{{ $ser->description }}</p> --}}
                        <b>{{ ++$loop->index }}</b>
                        <ul class="list list-unstyled">
                            <li>{!! Str::limit($ser->description, 300, '...') !!}</li>
                        </ul>
                    </div>
                </div>

                @endif

                @empty

                @endforelse
            </div>
        </div>
    </div>
</section>


@endsection
