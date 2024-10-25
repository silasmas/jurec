@extends("layouts.template")


@section("content")
@include("parties.banner")

<section class="blockquote-section page-section-ptb">
    <div class="container">
      <div class="row no-gutter">
        <div class="col-sm-12 text-center">
          <blockquote class="blockquote quote mb-0">
            For a first time entrepreneur, choosing a business that has a clear revenue path is extremely important.

          </blockquote>
        </div>
      </div>
    </div>
  </section>

<section class="mb-80">
    <div class="container">
      <div class="row">
        @forelse ($menuDomaine as $domaine)
        <div class="col-lg-3 col-md-6 col-sm-12 sm-mb-30">
          <div class="card border-0 theme-bg o-hidden h-100">
            <div class="badge bg-success">
                <a href="">{{$domaine->categorie->nom}}</a>
            </div>
            <img class="img-fluid" src="{{ asset('storage/'.$domaine->couverture[0]) }}" alt="">
            <div class="p-4">
              <h4> <a href="{{ route("detailDomaine",['slug' => $domaine->slug]) }}" class="text-white">{{ $domaine->titre }}</a></h4>
              <p class="mb-0 pb-0 text-white">{{  $domaine->resume  }}</p>
            </div>
          </div>
        </div>
        @empty

        @endforelse
    </div>
  </section>


  <!--=================================
   Premium Features -->

  <section class="page-section-ptb gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">

          <img class="img-fluid mx-auto" src="assets/images/about/04.jpg" alt="">
        </div>
        <div class="col-lg-6 sm-mt-50 align-self-center">
          <div class="section-title">
            <h2>Nous nous engageons à vous offrir la meilleure expérience possible.</h2>
          </div>
          <p>Faisons quelque chose de grand ensemble consectetur adipisicing elit. enim expedita sed quia nesciunt. </p>
          <div class="row">
            <div class="col-md-12 mt-30">
              <div class="feature-text left-icon">
                <div class="feature-icon theme-color">
                  <span class="ti-layers-alt"></span>
                </div>
                <div class="feature-info">
                  <h5 class="text-back">Many Style Available</h5>
                  <p>Dolor sit consectetur conseqt quibusdam, </p>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-30">
              <div class="feature-text left-icon">
                <div class="feature-icon theme-color">
                  <span class="ti-mouse"></span>
                </div>
                <div class="feature-info">
                  <h5 class="text-back">Parallax Sections</h5>
                  <p>Dolor sit consectetur conseqt ,</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-30">
              <div class="feature-text left-icon">
                <div class="feature-icon theme-color">
                  <span class="ti-hand-open"></span>
                </div>
                <div class="feature-info">
                  <h5 class="text-back">Unlimited layouts</h5>
                  <p>Dolor sit consectetur conseqt quibusdam,</p>
                </div>
              </div>
            </div>
          </div>
            {{-- <a class="button mt-30" href="#"> Read More </a> --}}
        </div>
      </div>
    </div>
  </section>

  <!--=================================
   Premium Features -->

@endsection
